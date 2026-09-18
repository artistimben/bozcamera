<?php

use App\Http\Controllers\Admin\LeadAdminController;
use App\Http\Controllers\Admin\PackageAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// Ana Google Ads İniş Sayfası
Route::get('/', [HomeController::class, 'index'])->name('home');

// Form Gönderim Sonrası Dönüşüm Sayfası
Route::get('/tesekkurler', [HomeController::class, 'thankYou'])->name('thank-you');

// Müşteri Teklif ve Arama Talepleri
Route::post('/teklif-al', [LeadController::class, 'store'])->name('lead.store');
Route::post('/api/call-click', [LeadController::class, 'logCallClick'])->name('lead.call-click');

// Hatay İlçe Bazlı Yerel SEO Sayfaları
Route::get('/{slug}-guvenlik-kamerasi', [RegionController::class, 'show'])
    ->where('slug', '[a-zA-Z0-9_\-]+')
    ->name('district.slug');
Route::get('/hatay/{slug}', [RegionController::class, 'show'])->name('district.show');

// Dinamik XML Sitemap (Google ve Arama Motorları İçin)
Route::get('/sitemap.xml', function () {
    $districts = array_keys(config('camera_site.districts', []));
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $xml .= '<url><loc>'.url('/').'</loc><changefreq>daily</changefreq><priority>1.0</priority></url>';

    foreach ($districts as $district) {
        $xml .= '<url><loc>'.url('/'.$district.'-guvenlik-kamerasi').'</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>';
    }

    $xml .= '</urlset>';

    return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');

// Yönetim Paneli (Gelen Teklif & Arama Talepleri + Paket Fiyat Yönetimi)
Route::prefix('yonetim')->name('admin.')->group(function () {
    Route::get('/talepler', [LeadAdminController::class, 'index'])->name('leads.index');
    Route::patch('/talepler/{lead}', [LeadAdminController::class, 'updateStatus'])->name('leads.update');
    Route::delete('/talepler/{lead}', [LeadAdminController::class, 'destroy'])->name('leads.destroy');

    // Paket Fiyat Yönetimi
    Route::get('/paketler', [PackageAdminController::class, 'index'])->name('packages.index');
    Route::patch('/paketler/{package}', [PackageAdminController::class, 'update'])->name('packages.update');
});
