<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Store a newly created lead in storage.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'phone' => ['required', 'string', 'min:7', 'max:50'],
            'name' => ['nullable', 'string', 'max:100'],
            'district' => ['nullable', 'string', 'max:100'],
            'property_type' => ['nullable', 'string', 'max:100'],
            'camera_count' => ['nullable', 'string', 'max:100'],
            'estimated_budget' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:1000'],
            'source' => ['nullable', 'string', 'max:100'],
        ]);

        $validated['source'] = $validated['source'] ?? 'google_ads_form';
        $validated['ip_address'] = $request->ip();

        $lead = Lead::create($validated);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Talebiniz başarıyla alındı! Uzman teknisyenimiz en kısa sürede sizi arayacaktır.',
                'lead_id' => $lead->id,
            ]);
        }

        return redirect()->route('thank-you')->with('success', 'Talebiniz başarıyla alındı. Uzman teknisyenimiz 15 dakika içinde sizi arayacaktır.');
    }

    /**
     * Log a quick call click event for Google Ads conversion tracking and analytics.
     */
    public function logCallClick(Request $request): JsonResponse
    {
        $lead = Lead::create([
            'phone' => 'Tıklanan Arama: '.($request->input('phone') ?? config('camera_site.phone')),
            'name' => 'Doğrudan Telefon Tıklaması (Click-to-Call)',
            'district' => $request->input('district', 'Hatay'),
            'source' => $request->input('source', 'google_ads_call_button'),
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'lead_id' => $lead->id,
        ]);
    }
}
