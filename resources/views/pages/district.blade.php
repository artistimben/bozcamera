@extends('layouts.app')

@section('content')
<!-- İLÇE HERO BÖLÜMÜ (Modern, Temiz & Güven Odaklı) -->
<section class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50/50 pt-10 pb-16 lg:pt-14 lg:pb-20 overflow-hidden border-b border-slate-100">
    <!-- Arka Plan Efekti -->
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>
    <div class="absolute top-1/4 right-1/4 w-[450px] h-[300px] bg-blue-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Ana Sayfa</a>
            <span>/</span>
            <span class="text-slate-500 font-medium">Hatay</span>
            <span>/</span>
            <span class="text-slate-800 font-semibold">{{ $district['name'] }} Güvenlik Kamerası</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-white text-slate-700 border border-slate-200/80 shadow-xs mb-4">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>{{ $district['name'] }} Gezici Servis Aracımız Bölgenizde</span>
                </span>

                <h1 class="text-3xl sm:text-5xl font-black text-slate-950 tracking-tight leading-[1.2] mb-4">
                    {{ $district['title'] }}
                </h1>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                    {{ $district['meta_desc'] }}
                </p>

                <div class="p-4 bg-slate-50 border border-slate-200/80 rounded-2xl mb-8">
                    <p class="text-xs sm:text-sm text-slate-700 flex items-start gap-2.5">
                        <span class="text-blue-600 font-bold text-base">📌</span>
                        <span><strong class="text-slate-900">{{ $district['name'] }} İçin Önerilen Çözüm:</strong> {{ $district['popular_for'] }}</span>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3.5">
                    <a href="tel:{{ config('camera_site.phone') }}" 
                       onclick="trackConversionCall('district_hero_tel_{{ $district['slug'] }}')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-blue-600 hover:bg-blue-700 active:scale-98 text-white font-extrabold text-sm sm:text-base px-7 py-4 rounded-2xl shadow-lg shadow-blue-600/20 transition">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                        <span>Hemen Arayın: {{ config('camera_site.phone') }}</span>
                    </a>

                    <a href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba Boztech Bilişim, ' . $district['name'] . ' bölgesinde güvenlik kamerası kurulumu hakkında bilgi almak istiyorum.') }}" 
                       target="_blank" 
                       rel="noopener"
                       onclick="trackConversionWhatsApp('district_hero_{{ $district['slug'] }}')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-white hover:bg-slate-50 text-slate-800 border border-slate-200 font-bold text-sm sm:text-base px-6 py-4 rounded-2xl shadow-xs transition">
                        <svg class="w-5 h-5 fill-emerald-600" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Hızlı Form -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl shadow-slate-200/50 border border-slate-100">
                    <h2 class="text-xl font-black text-slate-950 mb-1">
                        {{ $district['name'] }} Hızlı Teklif Formu
                    </h2>
                    <p class="text-xs text-slate-500 mb-5">
                        Telefon numaranızı iletin, ustalarımız adresiniz için 15 dakika içinde arasın.
                    </p>

                    <form action="{{ route('lead.store') }}" method="POST" class="space-y-3.5">
                        @csrf
                        <input type="hidden" name="district" value="{{ $district['name'] }}">
                        <input type="hidden" name="source" value="district_page_{{ $district['slug'] }}">

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
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Kamera Sayısı</label>
                            <select name="camera_count" class="w-full text-sm px-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-2 focus:ring-blue-600 outline-hidden transition">
                                <option value="2 Kamera">2 Kameralı Set</option>
                                <option value="4 Kamera" selected>4 Kameralı Set (En Popüler)</option>
                                <option value="8 Kamera">8 Kameralı Set</option>
                                <option value="Solar Kamera">4G Solar Güneş Enerjili</option>
                            </select>
                        </div>

                        <button type="submit" 
                                class="w-full bg-slate-900 hover:bg-blue-600 active:scale-98 text-white font-bold py-3.5 px-4 rounded-xl text-xs sm:text-sm shadow-md transition">
                            {{ $district['name'] }} İçin Fiyat Teklifi Gönder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ŞEFFAF PAKETLER (İLÇEYE ÖZEL) -->
<section class="py-20 bg-slate-50/70 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight">
                {{ $district['name'] }} İçin Anahtar Teslim Kamera Paketleri
            </h2>
            <p class="text-slate-500 text-sm mt-2">
                Montaj, kablolama ve cep telefonu canlı izleme ayarı dahildir.
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
                   onclick="trackConversionCall('district_pkg_{{ $district['slug'] }}')"
                   class="w-full text-center bg-slate-900 hover:bg-blue-600 text-white font-bold py-3 rounded-xl text-xs sm:text-sm transition">
                    {{ $district['name'] }} İçin Sipariş Ver
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FİYAT HESAPLAMA ARACI -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @include('components.price-calculator')
    </div>
</section>

<!-- DİĞER HATAY İLÇELERİ LİNKLERİ -->
<section class="py-16 bg-slate-50/60 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-base font-bold text-slate-900 mb-5">Diğer Hatay İlçelerinde Kamera Kurulum Hizmetlerimiz</h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-3 text-xs">
            @foreach($districts as $dKey => $dVal)
            @if($dVal['slug'] !== $district['slug'])
            <a href="{{ route('district.slug', ['slug' => $dVal['slug']]) }}" 
               class="bg-white p-3.5 rounded-xl border border-slate-200/80 hover:border-blue-500 hover:text-blue-600 font-medium transition text-center shadow-2xs">
                {{ $dVal['name'] }} Kamera Montajı
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
