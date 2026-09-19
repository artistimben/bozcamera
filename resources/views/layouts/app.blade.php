<!DOCTYPE html>
<html lang="tr" class="scroll-smooth antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>{{ $pageTitle ?? 'Hatay Güvenlik Kamerası & Montajı | Aynı Gün Keşif - Boztech' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Hatay genelinde ev, iş yeri ve bahçeler için profesyonel güvenlik kamerası kurulumu. 2 yıl değişim garantisi, yerinde ücretsiz keşif. Hemen arayın: 0545 565 85 83.' }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- Open Graph / Sosyal Medya & WhatsApp Önizlemesi -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $pageTitle ?? 'Hatay Güvenlik Kamerası & Montajı | Aynı Gün Keşif - Boztech' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Hatay ve tüm ilçelerinde güvenlik kamerası satışı, montajı ve arıza servisi. 2 yıl garanti, yerinde ücretsiz keşif.' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('camera_site.company_name') }}">
    <meta property="og:image" content="{{ asset('images/camera-hero.webp') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/camera-hero.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Boztech Güvenlik Kamerası Hatay">
    <meta property="og:locale" content="tr_TR">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle ?? 'Hatay Güvenlik Kamerası Satış & Montajı | Boztech' }}">
    <meta name="twitter:description" content="{{ $metaDescription ?? 'Hatay ve tüm ilçelerinde güvenlik kamerası satışı ve profesyonel montaj.' }}">
    <meta name="twitter:image" content="{{ asset('images/camera-hero.webp') }}">

    <!-- Google Ads / GTM Script Hook -->
    @if(config('camera_site.google_ads.id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('camera_site.google_ads.id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('camera_site.google_ads.id') }}');
    </script>
    @endif

    <!-- Schema.org Zengin Yapılandırılmış Veri (LocalBusiness, Service, Offer, FAQPage) -->
    <script type="application/ld+json">
    {!! json_encode([
        chr(64).'context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'SecuritySystemInstaller',
                '@id' => url('/') . '#business',
                'name' => config('camera_site.company_name'),
                'alternateName' => config('camera_site.short_name'),
                'image' => asset('images/camera-hero.webp'),
                'telephone' => '+905455658583',
                'email' => config('camera_site.email'),
                'url' => url('/'),
                'hasMap' => 'https://maps.google.com/?q=Dörtyol,Hatay',
                'priceRange' => '₺₺',
                'paymentAccepted' => 'Nakit, Kredi Kartı, Havale/EFT',
                'currenciesAccepted' => 'TRY',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'Dörtyol Merkez',
                    'addressLocality' => 'Dörtyol',
                    'addressRegion' => 'Hatay',
                    'postalCode' => '31600',
                    'addressCountry' => 'TR',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 36.8407,
                    'longitude' => 36.2256,
                ],
                'openingHoursSpecification' => [
                    [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                        'opens' => '08:30',
                        'closes' => '20:30',
                    ]
                ],
                'areaServed' => array_values(array_map(fn($d) => [
                    '@type' => 'AdministrativeArea',
                    'name' => $d['name'] . ', Hatay',
                ], config('camera_site.districts', []))),
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => '4.9',
                    'reviewCount' => '192',
                    'bestRating' => '5',
                    'worstRating' => '1',
                ],
            ],
            [
                '@type' => 'Service',
                '@id' => url('/') . '#service',
                'serviceType' => 'Güvenlik Kamerası Satış, Montaj ve Teknik Servis',
                'provider' => ['@id' => url('/') . '#business'],
                'areaServed' => 'Hatay',
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Güvenlik Kamera Paketleri & Montaj',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Full HD & IP Kamera Montajı'
                            ],
                            'priceCurrency' => 'TRY',
                            'price' => '450',
                            'availability' => 'https://schema.org/InStock'
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Hatay Yerinde Ücretsiz Keşif'
                            ],
                            'priceCurrency' => 'TRY',
                            'price' => '0',
                            'availability' => 'https://schema.org/InStock'
                        ]
                    ]
                ]
            ],
            [
                '@type' => 'FAQPage',
                '@id' => url()->current() . '#faq',
                'mainEntity' => array_map(fn($f) => [
                    '@type' => 'Question',
                    'name' => $f['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $f['a']
                    ]
                ], $faqs ?? config('camera_site.general_faqs', []))
            ]
        ]
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 font-sans selection:bg-blue-600 selection:text-white pb-20 md:pb-0">

    <!-- ÜST BİLGİ & DUYURU BARI (Zarif & Temiz) -->
    <aside class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800/80" aria-label="Duyuru">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2 text-[11px] sm:text-xs">
                <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-emerald-500/15 text-emerald-400 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    Hatay Dörtyol Merkezli Gezici Servis
                </span>
                <span class="text-slate-400 hidden sm:inline">• Tüm Hatay ilçelerine aynı gün ücretsiz keşif ve montaj</span>
            </div>
            <div class="flex items-center gap-4 text-xs">
                <span class="text-slate-400 hidden md:inline">🕒 08:30 - 20:30 (Her Gün)</span>
                <a href="tel:{{ config('camera_site.phone') }}" onclick="trackConversionCall('topbar')" 
                   class="text-white hover:text-blue-300 font-bold inline-flex items-center gap-1.5 transition">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>{{ config('camera_site.phone') }}</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- ANA HEADER & NAVİGASYON (Açılır Menüler ve Modern Arayüz) -->
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-xl border-b border-slate-100 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo & Marka -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-blue-600 via-indigo-600 to-blue-700 flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:scale-105 transition transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <span class="block font-black text-xl text-slate-900 tracking-tight leading-tight">
                        BOZTECH <span class="text-blue-600 font-extrabold">BİLİŞİM</span>
                    </span>
                    <span class="text-[11px] font-semibold text-slate-500 tracking-wide">Hatay Güvenlik Sistemleri</span>
                </div>
            </a>

            <!-- Orta Menü -->
            <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-600" aria-label="Ana Menü">
                <!-- Hizmetlerimiz Dropdown -->
                <div class="relative group">
                    <button type="button" class="flex items-center gap-1.5 hover:text-blue-600 py-2 transition outline-hidden">
                        <span>Hizmetlerimiz</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-blue-600 group-hover:rotate-180 transition transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full left-0 w-64 bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 p-2.5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <a href="{{ route('service.ip') }}" class="flex flex-col p-2.5 rounded-xl hover:bg-slate-50 hover:text-blue-600 transition">
                            <span class="font-bold text-xs text-slate-900">IP Kamera Sistemleri</span>
                            <span class="text-[11px] text-slate-500 font-normal">4K PoE & Gece Renkli Akıllı Sistemler</span>
                        </a>
                        <a href="{{ route('service.solar') }}" class="flex flex-col p-2.5 rounded-xl hover:bg-slate-50 hover:text-blue-600 transition">
                            <span class="font-bold text-xs text-slate-900">4G Solar Güneş Enerjili Kamera</span>
                            <span class="text-[11px] text-slate-500 font-normal">Elektriksiz ve İnternetsiz Tarla Kameraları</span>
                        </a>
                        <a href="{{ route('service.installation') }}" class="flex flex-col p-2.5 rounded-xl hover:bg-slate-50 hover:text-blue-600 transition">
                            <span class="font-bold text-xs text-slate-900">Kamera Montajı & Arıza Servisi</span>
                            <span class="text-[11px] text-slate-500 font-normal">Kanal İçi Gizli Kablolama & Tamir</span>
                        </a>
                    </div>
                </div>

                <!-- Hizmet Bölgeleri Dropdown -->
                <div class="relative group">
                    <button type="button" class="flex items-center gap-1.5 hover:text-blue-600 py-2 transition outline-hidden">
                        <span>Hizmet Bölgelerimiz</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-blue-600 group-hover:rotate-180 transition transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full -left-20 w-[420px] bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2 px-1">Hatay Gezici Servis Noktalarımız</span>
                        <div class="grid grid-cols-2 gap-1 text-xs">
                            @foreach(config('camera_site.districts', []) as $d)
                            <a href="{{ route('district.slug', ['slug' => $d['slug']]) }}" class="p-2 rounded-lg hover:bg-blue-50 hover:text-blue-600 font-medium text-slate-700 transition flex items-center justify-between">
                                <span>{{ $d['name'] }}</span>
                                <span class="text-[10px] text-slate-400">Keşif</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <a href="{{ route('home') }}#paketler" class="hover:text-blue-600 transition">Kamera Setleri</a>
                <a href="{{ route('home') }}#hesaplayici" class="hover:text-blue-600 transition">Fiyat Hesapla</a>
                <a href="{{ route('home') }}#sss" class="hover:text-blue-600 transition">S.S.S.</a>
            </nav>

            <!-- Hızlı Aksiyonlar -->
            <div class="flex items-center gap-3">
                <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode(config('camera_site.whatsapp_default_message')) }}" 
                   target="_blank" 
                   rel="noopener"
                   onclick="trackConversionWhatsApp('header')"
                   class="hidden sm:inline-flex items-center gap-2 text-slate-700 hover:text-emerald-600 text-xs sm:text-sm font-bold px-3 py-2 transition">
                    <svg class="w-4 h-4 fill-emerald-600" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>WhatsApp</span>
                </a>

                <a href="tel:{{ config('camera_site.phone') }}" 
                   onclick="trackConversionCall('header')"
                   class="inline-flex items-center gap-2 bg-slate-900 hover:bg-blue-600 text-white font-bold text-xs sm:text-sm px-4 sm:px-5 py-2.5 rounded-full shadow-xs hover:shadow-md transition">
                    <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>{{ config('camera_site.phone') }}</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ANA İÇERİK ALANI -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER (Modern, Temiz, Güven Verici) -->
    <footer class="bg-slate-950 text-slate-400 pt-16 pb-28 md:pb-16 border-t border-slate-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 mb-14">
                
                <!-- Şirket Özeti -->
                <div class="lg:col-span-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold text-sm">
                            BB
                        </div>
                        <div>
                            <span class="font-black text-lg text-white tracking-tight leading-tight block">BOZTECH BİLİŞİM</span>
                            <span class="text-[11px] text-slate-500 font-semibold block">Güvenlik & Kamera Sistemleri</span>
                        </div>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed mb-5">
                        Hatay Dörtyol merkezli olarak evler, iş yerleri, depolar, narenciye arazileri ve siteler için garantili güvenlik kamerası kurulumu, projelendirme ve teknik servis hizmeti sağlıyoruz.
                    </p>
                    <div class="space-y-2 text-xs text-slate-300">
                        <div class="flex items-center gap-2">
                            <span class="text-slate-500 font-medium">Merkez:</span> Dörtyol / Hatay (Gezici Servis)
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-slate-500 font-medium">Telefon:</span>
                            <a href="tel:{{ config('camera_site.phone') }}" class="text-white hover:text-blue-400 font-semibold transition">{{ config('camera_site.phone') }}</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-slate-500 font-medium">Çalışma Saatleri:</span> 08:30 - 20:30 (Her Gün Kesintisiz)
                        </div>
                    </div>
                </div>

                <!-- Özel Hizmetlerimiz -->
                <div class="lg:col-span-3">
                    <h3 class="text-white font-bold text-sm mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                        Uzmanlık Alanlarımız
                    </h3>
                    <div class="space-y-2 text-xs">
                        <a href="{{ route('service.ip') }}" class="block text-slate-400 hover:text-white transition py-1">
                            › IP & PoE Kamera Kurulumu
                        </a>
                        <a href="{{ route('service.solar') }}" class="block text-slate-400 hover:text-white transition py-1">
                            › 4G Solar Tarla Kameraları
                        </a>
                        <a href="{{ route('service.installation') }}" class="block text-slate-400 hover:text-white transition py-1">
                            › Kamera Montajı & Arıza Servisi
                        </a>
                        <a href="{{ route('home') }}#hesaplayici" class="block text-slate-400 hover:text-white transition py-1">
                            › Canlı Maliyet Hesaplama Robotu
                        </a>
                    </div>
                </div>

                <!-- Hatay Hizmet Bölgeleri -->
                <div class="lg:col-span-5">
                    <h3 class="text-white font-bold text-sm mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                        Dörtyol Merkezli Hizmet Ağımız
                    </h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-xs">
                        @foreach(config('camera_site.districts', []) as $distKey => $distData)
                        <a href="{{ route('district.slug', ['slug' => $distData['slug']]) }}" 
                           class="text-slate-400 hover:text-white transition py-1 flex items-center gap-1.5">
                            <span class="text-slate-600 text-[10px]">›</span>
                            <span>{{ $distData['name'] }}</span>
                        </a>
                        @endforeach
                    </div>
                    <p class="mt-4 text-[11px] text-slate-500">
                        * Dörtyol, Payas, Erzin, İskenderun ve tüm Hatay ilçelerine aynı gün ücretsiz yerinde keşif yapılmaktadır.
                    </p>
                </div>

            </div>

            <!-- Alt Bar -->
            <div class="pt-8 border-t border-slate-900 text-[11px] text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-3">
                <p>© {{ date('Y') }} {{ config('camera_site.company_name') }}. Tüm hakları saklıdır.</p>
                <div class="flex items-center gap-4 text-slate-400">
                    <span>2 Yıl Birebir Değişim Garantisi</span>
                    <span>•</span>
                    <span>Yerinde Ücretsiz Keşif</span>
                    <span>•</span>
                    <span>Orijinal Faturalı Ürünler</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- MOBİL İÇİN SABİT DÖNÜŞÜM ÇUBUĞU (Temiz & Zarif) -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-t border-slate-200/80 p-2.5 shadow-2xl">
        <div class="grid grid-cols-2 gap-2 max-w-md mx-auto">
            <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode(config('camera_site.whatsapp_default_message')) }}"
               target="_blank"
               rel="noopener"
               onclick="trackConversionWhatsApp('mobile_sticky_bar')"
               class="flex items-center justify-center gap-2 bg-emerald-600 active:bg-emerald-700 text-white font-bold py-3 px-3 rounded-2xl text-xs shadow-xs transition">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>WhatsApp Fiyat</span>
            </a>

            <a href="tel:{{ config('camera_site.phone') }}"
               onclick="trackConversionCall('mobile_sticky_bar')"
               class="flex items-center justify-center gap-2 bg-slate-900 active:bg-blue-600 text-white font-extrabold py-3 px-3 rounded-2xl text-xs shadow-md transition">
                <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                <span>HEMEN ARA</span>
            </a>
        </div>
    </div>

    <!-- GOOGLE ADS DÖNÜŞÜM & ANALİTİK TAKİP SCRIPTLERİ -->
    <script>
        function trackConversionCall(source) {
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', {
                    'send_to': '{{ config('camera_site.google_ads.phone_conversion_label') }}',
                    'event_category': 'Call',
                    'event_label': source
                });
            }
            if (window.dataLayer) {
                window.dataLayer.push({
                    'event': 'click_to_call',
                    'call_source': source
                });
            }
            try {
                fetch('{{ route('lead.call-click') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        source: 'click_to_call_' + source,
                        phone: '{{ config('camera_site.phone') }}'
                    })
                });
            } catch (e) {}
        }

        function trackConversionWhatsApp(source) {
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', {
                    'event_category': 'WhatsApp',
                    'event_label': source
                });
            }
            if (window.dataLayer) {
                window.dataLayer.push({
                    'event': 'click_whatsapp',
                    'source': source
                });
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
