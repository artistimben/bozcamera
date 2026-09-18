<?php

namespace App\Http\Controllers;

use App\Models\CameraPackage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegionController extends Controller
{
    /**
     * Display a localized landing page for a specific Hatay district.
     */
    public function show(string $slug): View|RedirectResponse
    {
        $districts = config('camera_site.districts', []);

        // Normalize slug (e.g., iskenderun-guvenlik-kamerasi -> iskenderun)
        $cleanSlug = str_replace(['-guvenlik-kamerasi', '-kamera-montaji', '-kamera-sistemleri'], '', $slug);

        if (! isset($districts[$cleanSlug])) {
            return redirect()->route('home');
        }

        $district = $districts[$cleanSlug];
        $packages = CameraPackage::orderBy('order')->get();
        $installationFees = config('camera_site.installation_fees', []);
        $company = config('camera_site');

        return view('pages.district', [
            'district' => $district,
            'districts' => $districts,
            'packages' => $packages,
            'installationFees' => $installationFees,
            'company' => $company,
            'pageTitle' => $district['title'].' | '.$company['short_name'],
            'metaDescription' => $district['meta_desc'],
        ]);
    }
}
