<?php

namespace App\Http\Controllers;

use App\Models\CameraPackage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the main landing page optimized for Google Ads conversions.
     */
    public function index(Request $request): View
    {
        $packages = CameraPackage::orderBy('order')->get();
        $installationFees = config('camera_site.installation_fees', []);
        $districts = config('camera_site.districts', []);
        $company = config('camera_site');

        return view('pages.home', [
            'packages' => $packages,
            'installationFees' => $installationFees,
            'districts' => $districts,
            'company' => $company,
            'currentDistrict' => null,
            'pageTitle' => 'Hatay Güvenlik Kamerası Satış & Montajı | Aynı Gün Ücretsiz Keşif',
            'metaDescription' => 'Hatay ve tüm ilçelerinde güvenlik kamerası satışı ve profesyonel montaj hizmeti. 2\'li, 4\'lü, 8\'li Full HD & IP setler, şeffaf fiyatlar ve 2 yıl garanti. Hemen arayın!',
        ]);
    }

    /**
     * Display the thank you page after lead submission with conversion tracking hooks.
     */
    public function thankYou(): View
    {
        $company = config('camera_site');

        return view('pages.thank-you', [
            'company' => $company,
            'pageTitle' => 'Talebiniz Alındı | Hatay Güvenlik Kamerası',
            'metaDescription' => 'Talebiniz başarıyla alındı. Uzman teknisyenlerimiz en geç 15 dakika içerisinde sizinle iletişime geçecektir.',
        ]);
    }
}
