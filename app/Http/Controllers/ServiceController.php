<?php

namespace App\Http\Controllers;

use App\Models\CameraPackage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    /**
     * Display a targeted service landing page (e.g., IP Kamera, Solar Kamera, Kamera Montajı).
     */
    public function show(string $slug): View|RedirectResponse
    {
        $services = config('camera_site.services', []);

        if (! isset($services[$slug])) {
            return redirect()->route('home');
        }

        $service = $services[$slug];
        $packages = CameraPackage::orderBy('order')->get();
        $districts = config('camera_site.districts', []);
        $company = config('camera_site');

        return view('pages.service', [
            'service' => $service,
            'services' => $services,
            'packages' => $packages,
            'districts' => $districts,
            'company' => $company,
            'pageTitle' => $service['title'],
            'metaDescription' => $service['meta_desc'],
            'faqs' => $service['faq'] ?? [],
        ]);
    }
}
