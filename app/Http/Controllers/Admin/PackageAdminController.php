<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CameraPackage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PackageAdminController extends Controller
{
    /**
     * Display a listing of camera packages with their prices.
     */
    public function index(): View
    {
        $packages = CameraPackage::orderBy('order')->get();

        return view('admin.packages', [
            'packages' => $packages,
        ]);
    }

    /**
     * Update the pricing and information for the specified package.
     */
    public function update(Request $request, CameraPackage $package): RedirectResponse
    {
        $validated = $request->validate([
            'equipment_price' => ['required', 'numeric', 'min:0'],
            'installation_price' => ['required', 'numeric', 'min:0'],
            'total_price' => ['required', 'numeric', 'min:0'],
            'is_popular' => ['nullable', 'boolean'],
            'badge' => ['nullable', 'string', 'max:50'],
        ]);

        $validated['is_popular'] = $request->boolean('is_popular');

        $package->update($validated);

        return back()->with('success', "'{$package->name}' paketi fiyatları başarıyla güncellendi.");
    }
}
