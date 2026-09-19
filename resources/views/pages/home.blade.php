@extends('layouts.app')

@section('content')
<!-- MODERN HERO SECTION (Aydınlık, Prestijli, Güven ve Arama Odaklı) -->
<section class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50/50 pt-10 pb-16 lg:pt-16 lg:pb-24 overflow-hidden border-b border-slate-100">
    <!-- Zarif Arka Plan Deseni -->
    <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:20px_20px] opacity-60 pointer-events-none"></div>
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -top-12 -right-12 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            <!-- Sol Kolon: Doğrudan Değer Önermesi & Hızlı İletişim -->
            <div class="lg:col-span-7 text-center lg:text-left">
                <!-- Mikro Rozet -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-white text-slate-700 border border-slate-200/80 shadow-xs mb-6">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Hatay Dörtyol Merkezli Gezici Ekip</span>
                    <span class="text-slate-300">•</span>
                    <span class="text-blue-600 font-extrabold">Aynı Gün Ücretsiz Keşif</span>
                </div>

                <!-- Ana Başlık -->
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-950 leading-[1.15] mb-5">
                    Hatay ve Çevresinde <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700">
                        Güvenlik Kamerası & Montajı
                    </span>
                </h1>

                <!-- Alt Açıklama -->
                <p class="text-base sm:text-lg text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                    Eviniz, iş yeriniz, deponuz veya narenciye bahçeniz için en uygun kamera sistemini kuruyoruz. 
                    <strong class="text-slate-900 font-semibold">2 yıl yerinde birebir değişim garantisi</strong>, 
                    aylık aidatsız cep telefonundan canlı izleme ve şeffaf işçilik garantisi.
                </p>

                <!-- DOĞRUDAN ARAMA & WHATSAPP ÇAĞRISI (Conversion Hero) -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 mb-8">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('hero_call')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-700 active:scale-98 text-white font-black text-base px-8 py-4 rounded-2xl shadow-lg shadow-blue-600/25 transition transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                        <span>Hemen Arayın: {{ config('camera_site.phone') }}</span>
                    </a>

                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba Boztech Bilişim, güvenlik kamerası kurulumu hakkında bilgi ve yerinde keşif talebinde bulunmak istiyorum.') }}" 
                       target="_blank" 
                       rel="noopener"
                       onclick="trackConversionWhatsApp('hero')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-base px-7 py-4 rounded-2xl shadow-md shadow-emerald-600/20 transition transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp'tan Fiyat İste</span>
                    </a>
                </div>

                <p class="text-xs text-slate-500 font-medium mb-8">
                    ⚡ <strong class="text-slate-800">Keşif tamamen ücretsizdir.</strong> Mekanınıza gelip en doğru kamera sayısını ve kablo güzergahını projelendiriyoruz.
                </p>

                <!-- Güven Sütunları -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-left border-t border-slate-200/70 pt-6">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-sm">✓</div>
                        <span class="text-xs font-semibold text-slate-700">2 Yıl Birebir Değişim</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-sm">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Aynı Gün Keşif</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-sm">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Mobil Canlı İzleme</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-sm">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Faturalı Orijinal</span>
                    </div>
                </div>
            </div>

            <!-- Sağ Kolon: Hızlı Keşif & Arama Talep Formu -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl shadow-slate-200/50 border border-slate-200/80">
                    
                    <!-- Görsel Üst Banner -->
                    <div class="relative h-44 rounded-2xl overflow-hidden mb-6 bg-slate-900 group">
                        <picture>
                            <source srcset="{{ asset('images/camera-hero.webp') }}" type="image/webp">
                            <img src="{{ asset('images/camera-hero.jpg') }}" 
                                 alt="Boztech Bilişim Güvenlik Kamerası Montajı Hatay" 
                                 width="600" height="350"
                                 fetchpriority="high"
                                 decoding="async"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        </picture>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                            <span class="font-bold tracking-tight">Hatay Geneli Gezici Servis</span>
                            <span class="px-2.5 py-0.5 rounded-full bg-emerald-500 text-[11px] font-bold">15 Dk İade Arama</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="text-xl font-black text-slate-900 tracking-tight">Ücretsiz Keşif & Fiyat Teklifi</h2>
                        <p class="text-xs text-slate-500 mt-1">Numaranızı bırakın, ustalarımız mekanınız için en uygun teklifi çıkarsın.</p>
                    </div>

                    @if(session('success'))
                    <div class="mb-4 p-3.5 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs font-semibold flex items-center gap-2">
                        <span>✅</span> {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="mb-4 p-3 bg-rose-50 border border-rose-200 text-rose-800 rounded-xl text-xs font-semibold flex items-center gap-2">
                        <span>⚠️</span> Lütfen telefon numaranızı kontrol ediniz.
                    </div>
                    @endif

                    <form action="{{ route('lead.store') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <input type="hidden" name="source" value="google_ads_hero">

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Telefon Numaranız <span class="text-rose-500">*</span></label>
                            <input type="tel" name="phone" required placeholder="05XX XXX XX XX" 
                                   value="{{ old('phone') }}"
                                   class="w-full text-sm font-semibold px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-hidden transition">
                        </div>

                        <div class="grid grid-cols-2 gap-2.5">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">İlçe / Bölge</label>
                                <select name="district" class="w-full text-xs font-medium px-3 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                                    <option value="Dörtyol (Merkez)" selected>Dörtyol (Merkez)</option>
                                    <option value="İskenderun">İskenderun</option>
                                    <option value="Payas">Payas</option>
                                    <option value="Erzin">Erzin</option>
                                    <option value="Antakya">Antakya</option>
                                    <option value="Arsuz">Arsuz</option>
                                    <option value="Diğer Hatay">Diğer Hatay</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">İhtiyaç</label>
                                <select name="camera_count" class="w-full text-xs font-medium px-3 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                                    <option value="2-4 Kamera (Standart)">2 - 4 Kameralı Set</option>
                                    <option value="8 Kamera (İşyeri/Site)">8 Kameralı Set</option>
                                    <option value="Solar Kamera (Tarla/Bahçe)">4G Solar Kamera</option>
                                    <option value="Özel Keşif">Özel Proje / Keşif</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" 
                                class="w-full bg-slate-900 hover:bg-blue-600 active:scale-98 text-white font-extrabold py-3.5 px-4 rounded-xl text-xs sm:text-sm shadow-md transition">
                            SİZİ ARAYALIM (ÜCRETSİZ KEŞİF)
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- HİZMET VİTRİNİ / DETAYLAR (Kullanıcının İhtiyacını Anında Bulması İçin) -->
<section id="hizmetler" class="py-20 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-3.5 py-1 rounded-full border border-blue-100 mb-3 inline-block">
                Hizmet Alanlarımız
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Her Mekana Özel Güvenlik Çözümü
            </h2>
            <p class="text-slate-500 text-sm sm:text-base mt-2">
                Dörtyol ve çevre ilçelerde konutlar, ticarethaneler ve tarım arazileri için profesyonel montaj.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 1. Mobil Canlı İzleme -->
            <div class="group rounded-3xl overflow-hidden border border-slate-200/80 bg-slate-50/40 hover:bg-white hover:shadow-xl hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden relative bg-slate-100">
                        <picture>
                            <source srcset="{{ asset('images/mobile-app-preview.webp') }}" type="image/webp">
                            <img src="{{ asset('images/mobile-app-preview.jpg') }}" 
                                 alt="Telefondan Canlı Kamera İzleme" 
                                 loading="lazy" decoding="async"
                                 width="400" height="240"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </picture>
                        <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-xs text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-lg border border-slate-200 shadow-xs">
                            📱 Canlı İzleme
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-extrabold text-base text-slate-950 mb-2">Telefondan 7/24 Canlı İzleme</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-3">
                            iOS ve Android cihazlarınızdan mekanınızı canlı izleyin, geçmiş kayıtları tek dokunuşla geriye sarıp izleyin.
                        </p>
                        <a href="{{ route('service.ip') }}" class="text-xs font-bold text-blue-600 hover:text-blue-700 inline-flex items-center gap-1">
                            <span>IP Kamera Detayları</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 text-[11px] font-bold text-blue-600">
                    Aylık aidat yok • Ömür boyu ücretsiz
                </div>
            </div>

            <!-- 2. Eksiksiz Set Donanımları -->
            <div class="group rounded-3xl overflow-hidden border border-slate-200/80 bg-slate-50/40 hover:bg-white hover:shadow-xl hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden relative bg-slate-100">
                        <picture>
                            <source srcset="{{ asset('images/camera-kit.webp') }}" type="image/webp">
                            <img src="{{ asset('images/camera-kit.jpg') }}" 
                                 alt="Kamera Seti ve Donanımları" 
                                 loading="lazy" decoding="async"
                                 width="400" height="240"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </picture>
                        <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-xs text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-lg border border-slate-200 shadow-xs">
                            📦 Eksiksiz Set
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-extrabold text-base text-slate-950 mb-2">Anahtar Teslim Komple Set</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-3">
                            Full HD ve 4K kameralar, NVR/DVR kayıt cihazı, 7/24 güvenlik sınıfı sabit disk, buat ve kaliteli bakır kablolar.
                        </p>
                        <a href="{{ route('home') }}#paketler" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 inline-flex items-center gap-1">
                            <span>Paket Fiyatlarını İncele</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 text-[11px] font-bold text-emerald-600">
                    2 Yıl Birebir Yerinde Garanti
                </div>
            </div>

            <!-- 3. Titiz İşçilik & Montaj -->
            <div class="group rounded-3xl overflow-hidden border border-slate-200/80 bg-slate-50/40 hover:bg-white hover:shadow-xl hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden relative bg-slate-100">
                        <picture>
                            <source srcset="{{ asset('images/technician-install.webp') }}" type="image/webp">
                            <img src="{{ asset('images/technician-install.jpg') }}" 
                                 alt="Profesyonel Kamera Montajı" 
                                 loading="lazy" decoding="async"
                                 width="400" height="240"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </picture>
                        <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-xs text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-lg border border-slate-200 shadow-xs">
                            🛠️ Titiz İşçilik
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-extrabold text-base text-slate-950 mb-2">Gizli Kablolama & Estetik Montaj</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-3">
                            Kabloları estetik kanal ve borulamalar ile gizleyerek dış cepheye veya iç dekora zarar vermeden kurulum yapıyoruz.
                        </p>
                        <a href="{{ route('service.installation') }}" class="text-xs font-bold text-slate-800 hover:text-blue-600 inline-flex items-center gap-1">
                            <span>Montaj ve Servis Hizmeti</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 text-[11px] font-bold text-slate-700">
                    Aynı gün montaj ve teslimat
                </div>
            </div>

            <!-- 4. Dış Ortam & Solar Kamera -->
            <div class="group rounded-3xl overflow-hidden border border-slate-200/80 bg-slate-50/40 hover:bg-white hover:shadow-xl hover:border-slate-300 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="h-48 overflow-hidden relative bg-slate-100">
                        <picture>
                            <source srcset="{{ asset('images/camera-hero.webp') }}" type="image/webp">
                            <img src="{{ asset('images/camera-hero.jpg') }}" 
                                 alt="Gece Görüşlü Dış Ortam Kamerası" 
                                 loading="lazy" decoding="async"
                                 width="400" height="240"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </picture>
                        <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-xs text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-lg border border-slate-200 shadow-xs">
                            ☀️ 4G Solar & IP67
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-extrabold text-base text-slate-950 mb-2">Tarla & Çiftlik Solar Kamera</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-3">
                            Elektriksiz narenciye bahçeleri ve araziler için güneş panelli, 4G SIM kartlı canlı izleme sistemleri.
                        </p>
                        <a href="{{ route('service.solar') }}" class="text-xs font-bold text-amber-600 hover:text-amber-700 inline-flex items-center gap-1">
                            <span>Solar Kamera Detayları</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 text-[11px] font-bold text-amber-600">
                    Elektriksiz & İnternetsiz Alanlar
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HİBRİT FİYAT & PAKET BÖLÜMÜ (Müşteriyi Kaçırmayan, Keşif & Aramaya Teşvik Eden Altın Model) -->
<section id="paketler" class="py-20 sm:py-24 bg-slate-50/70 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-50 px-3.5 py-1 rounded-full border border-emerald-200 mb-3 inline-block">
                Şeffaf Çözümler
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Popüler Güvenlik Kamera Paketleri
            </h2>
            <p class="text-slate-500 text-sm sm:text-base mt-2">
                * Kesin keşif sonrasında mekanınızın kablo mesafesi ve oda planına göre net anahtar teslim fiyat çıkarılır.
            </p>
        </div>

        @php
            $pkg1 = $packages->firstWhere('slug', '2-kamerali-ev-ofis-seti') ?? $packages->first();
            $pkg2 = $packages->firstWhere('slug', '4-kamerali-guvenlik-seti') ?? $packages->skip(1)->first();
            $pkg3 = $packages->firstWhere('slug', '4g-solar-tarla-ciftlik-kamerasi') ?? $packages->last();
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            
            <!-- Paket 1: Ev / Dükkan -->
            <div class="bg-white rounded-3xl p-7 sm:p-8 border border-slate-200/80 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold tracking-wider text-slate-500 uppercase">Ekonomik Seri</span>
                        <span class="text-[11px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md">Montaj Dahil</span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2">{{ $pkg1 ? $pkg1->name : '2 - 4 Kameralı Full HD Set' }}</h3>
                    <p class="text-xs text-slate-500 mb-6">Evler, daireler, küçük dükkan ve ofisler için ideal ve kompakt çözüm.</p>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <span class="text-[11px] font-medium text-slate-400 block mb-1">Paket Başlangıç Fiyatı</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">{{ $pkg1 ? $pkg1->formattedTotalPrice() : '6.700 ₺' }}</span>
                            <span class="text-xs text-slate-400 font-medium">'den başlayan</span>
                        </div>
                        <span class="text-[11px] text-emerald-600 font-semibold block mt-1">✓ Cihaz, Disk ve Montaj Dahil</span>
                    </div>

                    <ul class="space-y-3 text-xs text-slate-600 mb-8">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Full HD 1080p Su Geçirmez Kameralar</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Kayıt Cihazı + 7/24 Güvenlik Diski</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Telefona Canlı İzleme Kurulumu (Ücretsiz)</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>2 Yıl Birebir Yerinde Garanti</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-2.5">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('paket_ev')"
                       class="w-full block text-center bg-slate-900 hover:bg-blue-600 text-white font-bold py-3.5 rounded-xl text-xs sm:text-sm transition">
                        📞 Bu Paket İçin Hemen Ara
                    </a>
                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba, 2-4 kameralı ev/ofis seti için yerinde ücretsiz keşif randevusu almak istiyorum.') }}" 
                       target="_blank"
                       rel="noopener"
                       onclick="trackConversionWhatsApp('paket_ev')"
                       class="w-full block text-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2.5 rounded-xl text-xs transition">
                        💬 WhatsApp'tan Teklif Al
                    </a>
                </div>
            </div>

            <!-- Paket 2: En Çok Tercih Edilen (İşyeri & Apartman) -->
            <div class="bg-white rounded-3xl p-7 sm:p-8 border-2 border-blue-600 shadow-xl shadow-blue-500/10 relative flex flex-col justify-between">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="bg-blue-600 text-white text-[11px] font-black uppercase tracking-wider px-4 py-1 rounded-full shadow-sm">
                        ⭐ En Çok Tercih Edilen
                    </span>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold tracking-wider text-blue-600 uppercase">Profesyonel Güvenlik</span>
                        <span class="text-[11px] font-bold text-blue-700 bg-blue-50 px-2 py-0.5 rounded-md">Montaj Dahil</span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2">{{ $pkg2 ? $pkg2->name : '4 - 8 Kameralı İş Yeri Seti' }}</h3>
                    <p class="text-xs text-slate-500 mb-6">Mağaza, depo, apartman, villa ve işletmeler için tam kapsamlı sistem.</p>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <span class="text-[11px] font-medium text-slate-400 block mb-1">Paket Başlangıç Fiyatı</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-blue-600 tracking-tight">{{ $pkg2 ? $pkg2->formattedTotalPrice() : '10.000 ₺' }}</span>
                            <span class="text-xs text-slate-400 font-medium">'den başlayan</span>
                        </div>
                        <span class="text-[11px] text-blue-600 font-semibold block mt-1">✓ Yüksek Depolama & Akıllı Gece Görüşü</span>
                    </div>

                    <ul class="space-y-3 text-xs text-slate-600 mb-8">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Ultra Smart Gece Görüşü & Plaka Netliği</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>1 TB / 2 TB WD Purple Güvenlik Sabit Diski</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Harekete Duyarlı Telefona Anlık Alarm</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Hatay İçi Yerinde Ücretsiz Keşif Dahil</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-2.5">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('paket_isyeri')"
                       class="w-full block text-center bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-3.5 rounded-xl text-xs sm:text-sm shadow-md shadow-blue-600/25 transition">
                        📞 Hemen Arayın & Keşif İste
                    </a>
                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba, 4-8 kameralı iş yeri seti için Hatay genelinde keşif ve teklif rica ediyorum.') }}" 
                       target="_blank"
                       rel="noopener"
                       onclick="trackConversionWhatsApp('paket_isyeri')"
                       class="w-full block text-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2.5 rounded-xl text-xs transition">
                        💬 WhatsApp'tan Bilgi Al
                    </a>
                </div>
            </div>

            <!-- Paket 3: 4G Solar Kamera (Bahçe/Tarla) -->
            <div class="bg-white rounded-3xl p-7 sm:p-8 border border-slate-200/80 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold tracking-wider text-amber-600 uppercase">Elektriksiz / İnternetsiz</span>
                        <span class="text-[11px] font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-md">4G SIM Kartlı</span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2">{{ $pkg3 ? $pkg3->name : '4G Solar Güneş Enerjili Kamera' }}</h3>
                    <p class="text-xs text-slate-500 mb-6">Narenciye bahçeleri, zeytinlik, tarla, bağ evi ve şantiyeler için.</p>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <span class="text-[11px] font-medium text-slate-400 block mb-1">Paket Başlangıç Fiyatı</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">{{ $pkg3 ? $pkg3->formattedTotalPrice() : '8.100 ₺' }}</span>
                            <span class="text-xs text-slate-400 font-medium">'den başlayan</span>
                        </div>
                        <span class="text-[11px] text-amber-600 font-semibold block mt-1">✓ Panel, Batarya & Hafıza Kartı Dahil</span>
                    </div>

                    <ul class="space-y-3 text-xs text-slate-600 mb-8">
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Elektrik ve WiFi İnternet GEREKTİRMEZ</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>Güneş Paneli + Dahili Batarya Paketi</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>4G SIM Kart ile Doğrudan Cep Telefonuna Bağlantı</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            <span>360° Sağa-Sola Telefondan Döndürme & Siren</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-2.5">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('paket_solar')"
                       class="w-full block text-center bg-slate-900 hover:bg-blue-600 text-white font-bold py-3.5 rounded-xl text-xs sm:text-sm transition">
                        📞 Solar Kamera İçin Hemen Ara
                    </a>
                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba, elektrik ve internet olmayan tarlam/bahçem için solar 4G kamera hakkında bilgi almak istiyorum.') }}" 
                       target="_blank"
                       rel="noopener"
                       onclick="trackConversionWhatsApp('paket_solar')"
                       class="w-full block text-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2.5 rounded-xl text-xs transition">
                        💬 WhatsApp'tan Bilgi Al
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CANLI MALİYET ROBOTU (Kullanıcının Kendisi Seçip Fiyat Görmesi ve Araması İçin) -->
<section id="hesaplayici" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('components.price-calculator')
    </div>
</section>

<!-- HATAY İLÇELERİ YEREL HİZMET AĞI -->
<section id="bolgeler" class="py-16 sm:py-20 bg-slate-50/60 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full border border-blue-100">
                    Yerel Hizmet Ağı
                </span>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 mt-2">
                    Dörtyol Merkezli, Tüm Hatay'a Aynı Gün Keşif
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-1">
                    Gezici servis aracımızla kapınıza geliyor, kör noktaları tespit edip projelendiriyoruz.
                </p>
            </div>
            <div>
                <a href="tel:{{ config('camera_site.phone') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs sm:text-sm px-6 py-3.5 rounded-2xl shadow-xs transition">
                    📞 {{ config('camera_site.phone') }} (Hemen Keşif İste)
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5">
            @foreach(config('camera_site.districts', []) as $dKey => $dData)
            <a href="{{ route('district.slug', ['slug' => $dData['slug']]) }}" 
               class="p-4 rounded-2xl border border-slate-200/80 hover:border-blue-500 hover:bg-white hover:shadow-md transition bg-white/70 text-center group">
                <span class="block font-bold text-sm text-slate-900 group-hover:text-blue-600 transition">{{ $dData['name'] }}</span>
                <span class="text-[11px] text-slate-400 mt-0.5 block">Kamera Montajı</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- SIKÇA SORULAN SORULAR -->
<section id="sss" class="py-20 bg-white border-t border-slate-200/60">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-slate-500 bg-slate-100 px-3 py-1 rounded-full mb-3 inline-block">Merak Edilenler</span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight">
                Sıkça Sorulan Sorular
            </h2>
        </div>

        <div class="space-y-3.5">
            <details class="group bg-slate-50/70 p-5 rounded-2xl border border-slate-200/80 transition" open>
                <summary class="font-bold text-slate-900 cursor-pointer flex justify-between items-center text-sm">
                    Dörtyol ve çevre ilçelere keşif için ücret alıyor musunuz?
                    <span class="text-blue-600 text-base transition group-open:rotate-180">▾</span>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Hayır! Dörtyol, Payas, Erzin, İskenderun ve Hatay genelinde yerinde keşif hizmetimiz tamamen <strong>ÜCRETSİZDİR</strong>. Ekibimiz mekanınızı yerinde inceler, kör noktaları belirler ve size en uygun net teklifi sunar.
                </p>
            </details>

            <details class="group bg-slate-50/70 p-5 rounded-2xl border border-slate-200/80 transition">
                <summary class="font-bold text-slate-900 cursor-pointer flex justify-between items-center text-sm">
                    Telefondan canlı izlemek için aylık bir ücret ödeyecek miyim?
                    <span class="text-blue-600 text-base transition group-open:rotate-180">▾</span>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Hayır! Boztech Bilişim olarak kurduğumuz sistemlerde aylık veya yıllık herhangi bir servis veya abonelik ücreti YOKTUR. Cihaz bedelini bir kere ödersiniz, ömür boyu telefonunuzdan ücretsiz izlersiniz.
                </p>
            </details>

            <details class="group bg-slate-50/70 p-5 rounded-2xl border border-slate-200/80 transition">
                <summary class="font-bold text-slate-900 cursor-pointer flex justify-between items-center text-sm">
                    Elektrik ve internet olmayan narenciye veya zeytin bahçemde kamera çalışır mı?
                    <span class="text-blue-600 text-base transition group-open:rotate-180">▾</span>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Evet! Dörtyol ve Erzin bölgesindeki narenciye arazileri için özel 4G Solar güneş enerjili kameralar kuruyoruz. Güneş paneliyle kendi enerjisini üretir, SIM kart ile internet olmadan cep telefonunuza canlı görüntü aktarır.
                </p>
            </details>

            <details class="group bg-slate-50/70 p-5 rounded-2xl border border-slate-200/80 transition">
                <summary class="font-bold text-slate-900 cursor-pointer flex justify-between items-center text-sm">
                    Cihazlarda arıza olursa garanti süreci nasıl işliyor?
                    <span class="text-blue-600 text-base transition group-open:rotate-180">▾</span>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Tüm sistemlerimiz <strong>2 yıl yerinde birebir değişim garantilidir</strong>. Dörtyol merkezli servis ekibimiz adresinize gelerek arızalı parçayı doğrudan yenisiyle değiştirir.
                </p>
            </details>
        </div>
    </div>
</section>

<!-- ALT DÖNÜŞÜM ÇAĞRISI (Arama Aksiyonu) -->
<section class="bg-slate-950 text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl sm:text-4xl font-black mb-4 tracking-tight">
            Mekanınızı Boztech Bilişim ile Güvenceye Alın
        </h2>
        <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-8 leading-relaxed">
            Dörtyol ve tüm Hatay genelinde ücretsiz keşif randevusu ve şeffaf fiyat teklifi için bizi hemen arayın.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5">
            <a href="tel:{{ config('camera_site.phone') }}" 
               onclick="trackConversionCall('final_cta')"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-sm sm:text-base px-8 py-4 rounded-2xl shadow-lg transition">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                <span>{{ config('camera_site.phone') }} (Hemen Ara)</span>
            </a>

            <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba Boztech Bilişim, kamera montajı ve yerinde keşif hakkında bilgi almak istiyorum.') }}" 
               target="_blank"
               rel="noopener"
               onclick="trackConversionWhatsApp('final_cta')"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-850 text-emerald-400 border border-slate-800 font-bold text-sm sm:text-base px-7 py-4 rounded-2xl shadow-md transition">
                <span>💬 WhatsApp'tan Yazın</span>
            </a>
        </div>
    </div>
</section>
@endsection
