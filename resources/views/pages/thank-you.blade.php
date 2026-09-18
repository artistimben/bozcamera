@extends('layouts.app')

@section('content')
<section class="py-24 bg-gradient-to-b from-slate-50 via-white to-slate-50 min-h-[75vh] flex items-center justify-center">
    <div class="max-w-xl mx-auto px-4 text-center">
        <!-- Modern Başarı İkonu -->
        <div class="w-16 h-16 mx-auto rounded-full bg-emerald-50 text-emerald-600 border border-emerald-200 flex items-center justify-center text-2xl mb-6 shadow-xs">
            ✓
        </div>

        <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-50 px-3.5 py-1 rounded-full border border-emerald-200 mb-3">
            Talebiniz Alındı
        </span>

        <h1 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight mb-4">
            Teşekkür Ederiz!
        </h1>

        <p class="text-slate-600 text-sm sm:text-base mb-8 leading-relaxed">
            Güvenlik kamerası keşif ve fiyat talebiniz Hatay teknik ekibimize iletildi. 
            Teknisyenimiz en geç <strong class="text-blue-600 font-semibold">15 dakika içerisinde</strong> telefonla size dönüş yapacaktır.
        </p>

        <!-- Hızlı Arama Kartı -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 mb-8 text-left shadow-xs">
            <h2 class="text-sm font-bold text-slate-900 mb-1.5 flex items-center gap-2">
                <span>⚡</span> Beklemek İstemiyor Musunuz?
            </h2>
            <p class="text-xs text-slate-500 mb-4">
                Doğrudan montaj teknisyenimizle görüşebilir, aynı gün için randevu oluşturabilirsiniz:
            </p>
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="tel:{{ config('camera_site.phone') }}" 
                   onclick="trackConversionCall('thank_you_direct')"
                   class="flex-1 flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-3.5 px-4 rounded-xl text-xs sm:text-sm transition">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>ARA: {{ config('camera_site.phone') }}</span>
                </a>

                <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba, web sitenizden keşif talebi formu doldurdum. Hatay kamera montajı hakkında bilgi almak istiyorum.') }}" 
                   target="_blank"
                   rel="noopener"
                   onclick="trackConversionWhatsApp('thank_you_direct')"
                   class="flex-1 flex items-center justify-center gap-2 bg-slate-50 hover:bg-slate-100 text-slate-700 border border-slate-200 font-bold py-3.5 px-4 rounded-xl text-xs sm:text-sm transition">
                    <span>💬 WhatsApp</span>
                </a>
            </div>
        </div>

        <a href="{{ route('home') }}" class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition inline-flex items-center gap-1">
            ← Ana Sayfaya Dön
        </a>
    </div>
</section>

@push('scripts')
<script>
    if (typeof gtag === 'function') {
        gtag('event', 'conversion', {
            'send_to': '{{ config('camera_site.google_ads.lead_conversion_label') }}',
            'event_category': 'Lead',
            'event_label': 'form_submitted'
        });
    }
    if (window.dataLayer) {
        window.dataLayer.push({
            'event': 'lead_conversion_success'
        });
    }
</script>
@endpush
@endsection
