<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadAdminController extends Controller
{
    /**
     * Display a listing of customer leads and calls.
     */
    public function index(Request $request): View
    {
        $status = $request->query('status');
        $query = Lead::latest();

        if ($status) {
            $query->where('status', $status);
        }

        $leads = $query->paginate(20);
        $totalCount = Lead::count();
        $newCount = Lead::where('status', 'new')->count();
        $contactedCount = Lead::where('status', 'contacted')->count();

        return view('admin.leads', [
            'leads' => $leads,
            'status' => $status,
            'totalCount' => $totalCount,
            'newCount' => $newCount,
            'contactedCount' => $contactedCount,
        ]);
    }

    /**
     * Update the specified lead status.
     */
    public function updateStatus(Request $request, Lead $lead): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:new,contacted,won,lost'],
        ]);

        $lead->update($validated);

        return back()->with('success', 'Talep durumu başarıyla güncellendi.');
    }

    /**
     * Remove the specified lead from storage.
     */
    public function destroy(Lead $lead): RedirectResponse
    {
        $lead->delete();

        return back()->with('success', 'Talep kaydı silindi.');
    }
}
