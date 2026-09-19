@extends('layouts.app')

@section('content')
<!-- HİZMET HERO BÖLÜMÜ -->
<section class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50/50 pt-10 pb-16 lg:pt-14 lg:pb-20 overflow-hidden border-b border-slate-100">
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>
    <div class="absolute top-1/4 right-1/4 w-[450px] h-[300px] bg-blue-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-slate-500 font-medium">Hizmetlerimiz</span>
            <span>/</span>
            <span class="text-slate-800 font-semibold">{{ $service['nav_title'] }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-white text-blue-700 border border-blue-200/80 shadow-xs mb-4">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>{{ $service['badge'] }}</span>
                </span>

                <h1 class="text-3xl sm:text-5xl font-black text-slate-950 tracking-tight leading-[1.2] mb-4">
                    {{ $service['headline'] }}
                </h1>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                    {{ $service['intro'] }}
                </p>

                <!-- Tavsiye Alanı -->
                <div class="p-4 bg-slate-50 border border-slate-200/80 rounded-2xl mb-8">
                    <p class="text-xs sm:text-sm text-slate-700 flex items-start gap-2.5">
                        <span class="text-blue-600 font-bold text-base">🎯</span>
                        <span><strong class="text-slate-900">En Çok Tercih Edilen Alanlar:</strong> {{ $service['ideal_for'] }}</span>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3.5">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('service_hero_tel_{{ $service['slug'] }}')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-blue-600 hover:bg-blue-700 active:scale-98 text-white font-extrabold text-sm sm:text-base px-7 py-4 rounded-2xl shadow-lg shadow-blue-600/20 transition">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                        <span>Hemen Arayın: {{ config('camera_site.phone') }}</span>
                    </a>

                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba Boztech Bilişim, ' . $service['nav_title'] . ' çözümü hakkında bilgi ve ücretsiz yerinde keşif almak istiyorum.') }}" 
                       target="_blank" 
                       rel="noopener"
                       onclick="trackConversionWhatsApp('service_hero_{{ $service['slug'] }}')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-white hover:bg-slate-50 text-slate-800 border border-slate-200 font-bold text-sm sm:text-base px-6 py-4 rounded-2xl shadow-xs transition">
                        <svg class="w-5 h-5 fill-emerald-600" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp ile Danış</span>
                    </a>
                </div>
            </div>

            <!-- Hızlı Keşif Formu -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl shadow-slate-200/50 border border-slate-100">
                    <h2 class="text-xl font-black text-slate-950 mb-1">
                        Ücretsiz Keşif & Fiyat Teklifi
                    </h2>
                    <p class="text-xs text-slate-500 mb-5">
                        İletişim bilginizi bırakın, Hatay gezici servis ekibimiz 15 dakika içinde arasın.
                    </p>

                    <form action="{{ route('lead.store') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <input type="hidden" name="source" value="service_page_{{ $service['slug'] }}">

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Adınız Soyadınız</label>
                            <input type="text" name="name" placeholder="Adınız Soyadınız" 
                                   class="w-full text-sm px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Telefon Numaranız <span class="text-rose-500">*</span></label>
                            <input type="tel" name="phone" required placeholder="05XX XXX XX XX" 
                                   class="w-full text-sm font-semibold px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Bulunduğunuz İlçe</label>
                            <select name="district" class="w-full text-sm px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                                @foreach($districts as $d)
                                <option value="{{ $d['name'] }}">{{ $d['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">İhtiyacınız</label>
                            <input type="text" name="camera_count" value="{{ $service['nav_title'] }}" readonly
                                   class="w-full text-xs font-semibold px-4 py-3 rounded-xl border border-slate-200 bg-slate-100 text-slate-700 outline-hidden">
                        </div>

                        <button type="submit" 
                                class="w-full bg-slate-900 hover:bg-blue-600 active:scale-98 text-white font-bold py-3.5 px-4 rounded-xl text-xs sm:text-sm shadow-md transition">
                            Hemen Fiyat & Keşif İste
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ÖNE ÇIKAN ÖZELLİKLER -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-extrabold text-blue-600 tracking-wider uppercase">Avantajlar ve Donanım</span>
            <h2 class="text-2xl sm:text-4xl font-black text-slate-950 tracking-tight mt-1.5">
                Neden Bu Sistemi Tercih Etmelisiniz?
            </h2>
            <p class="text-slate-500 text-sm mt-3">
                En zorlu Hatay iklim koşullarında dahi 7/24 stabil, kesintisiz ve net görüntü sağlayan bileşenler.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($service['features'] as $idx => $feature)
            <div class="p-6 rounded-3xl bg-slate-50/80 border border-slate-200/80 hover:bg-white hover:shadow-lg transition">
                <div class="w-10 h-10 rounded-2xl bg-blue-600 text-white font-black flex items-center justify-center text-sm mb-4 shadow-sm shadow-blue-500/20">
                    {{ $idx + 1 }}
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">{{ $feature }}</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    2 Yıl birebir değişim garantisi ve yetkili distribütör güvencesiyle mekanınıza montajı gerçekleştirilir.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- İLGİLİ PAKETLER -->
<section class="py-20 bg-slate-50/70 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight">
                Tavsiye Edilen Anahtar Teslim Kamera Paketleri
            </h2>
            <p class="text-slate-500 text-sm mt-2">
                Montaj, kablolama, disk ve cep telefonu ayarları dahildir.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($packages->take(3) as $pkg)
            <div class="bg-white rounded-3xl p-7 border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wider">{{ $pkg->resolution }}</span>
                    <h3 class="text-lg font-black text-slate-950 mt-1 mb-2">{{ $pkg->name }}</h3>
                    <div class="text-2xl sm:text-3xl font-black text-slate-950 mb-5">{{ $pkg->formattedTotalPrice() }}</div>
                    
                    <ul class="space-y-2.5 text-xs text-slate-600 mb-6">
                        @foreach(array_slice($pkg->features, 0, 5) as $f)
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-500 font-bold">✓</span>
                            <span>{{ $f }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <a href="tel:{{ config('camera_site.phone') }}" 
                   onclick="trackConversionCall('service_pkg_{{ $pkg->id }}')"
                   class="w-full text-center bg-slate-900 hover:bg-blue-600 text-white font-bold py-3 rounded-xl text-xs sm:text-sm transition">
                    Hemen Keşif & Sipariş Ver
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SIKÇA SORULAN SORULAR -->
@if(!empty($faqs))
<section class="py-20 bg-white border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight">
                {{ $service['nav_title'] }} Hakkında Merak Edilenler
            </h2>
            <p class="text-slate-500 text-xs sm:text-sm mt-2">
                Aklınıza takılan sorular ve teknik detaylar.
            </p>
        </div>

        <div class="space-y-4">
            @foreach($faqs as $f)
            <div class="p-6 rounded-2xl bg-slate-50/80 border border-slate-200/70">
                <h3 class="text-sm sm:text-base font-bold text-slate-900 mb-2">❓ {{ $f['q'] }}</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ $f['a'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- DİĞER HİZMETLERİMİZ -->
<section class="py-16 bg-slate-50/60 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-base font-bold text-slate-900 mb-5">Diğer Güvenlik ve Kamera Çözümlerimiz</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
            @foreach($services as $sSlug => $sData)
            @if($sSlug !== $service['slug'])
            <a href="{{ url('/' . $sSlug) }}" 
               class="bg-white p-5 rounded-2xl border border-slate-200/80 hover:border-blue-500 hover:shadow-md transition">
                <span class="text-blue-600 font-bold block mb-1">› {{ $sData['nav_title'] }}</span>
                <span class="text-slate-600">{{ $sData['headline'] }}</span>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>

<!-- TÜM İLÇELER FOOTER BAĞLANTILARI -->
<section class="py-14 bg-white border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-4">Hatay Bölge Servis Ağımız</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-2 text-xs">
            @foreach($districts as $d)
            <a href="{{ route('district.slug', ['slug' => $d['slug']]) }}" 
               class="p-2.5 rounded-lg text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition">
                {{ $d['name'] }} Montaj
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
