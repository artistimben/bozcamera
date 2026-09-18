<div id="hesaplayici-kutu" class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl shadow-slate-200/50 border border-slate-200/80 relative overflow-hidden">
    <!-- Üst Başlık -->
    <div class="text-center max-w-2xl mx-auto mb-10">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-600 border border-blue-100 mb-3">
            <span>⚡</span> Canlı Maliyet Robotu
        </span>
        <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-slate-950">
            Kamera & Montaj <span class="text-blue-600">Maliyetini Hesaplayın</span>
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-2">
            Mekanınıza uygun kamera sayısını ve teknolojiyi seçin, anahtar teslim tahmini bütçenizi anında görün.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <!-- Sol: Seçim Parametreleri -->
        <div class="lg:col-span-7 space-y-6">
            <!-- 1. Mekan Türü -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2.5">
                    1. Montaj Yapılacak Alan Türü
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
                    <button type="button" class="calc-property-btn py-3 px-2 rounded-2xl text-xs sm:text-sm font-bold text-center border transition border-blue-600 bg-blue-50 text-blue-700 shadow-xs" data-type="ev">
                        🏠 Ev / Müstakil
                    </button>
                    <button type="button" class="calc-property-btn py-3 px-2 rounded-2xl text-xs sm:text-sm font-bold text-center border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-type="isyeri">
                        🏬 Dükkan / İşyeri
                    </button>
                    <button type="button" class="calc-property-btn py-3 px-2 rounded-2xl text-xs sm:text-sm font-bold text-center border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-type="bina">
                        🏢 Apartman / Site
                    </button>
                    <button type="button" class="calc-property-btn py-3 px-2 rounded-2xl text-xs sm:text-sm font-bold text-center border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-type="tarla">
                        🚜 Tarla / Şantiye
                    </button>
                </div>
            </div>

            <!-- 2. Kamera Sayısı -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2.5">
                    2. Kaç Adet Güvenlik Kamerası Gerekiyor?
                </label>
                <div class="grid grid-cols-5 gap-2.5">
                    <button type="button" class="calc-count-btn py-3 px-2 rounded-2xl text-sm font-extrabold border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-count="2">
                        2'li
                    </button>
                    <button type="button" class="calc-count-btn py-3 px-2 rounded-2xl text-sm font-extrabold border transition border-blue-600 bg-blue-50 text-blue-700 shadow-xs" data-count="4">
                        4'lü ⭐
                    </button>
                    <button type="button" class="calc-count-btn py-3 px-2 rounded-2xl text-sm font-extrabold border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-count="8">
                        8'li
                    </button>
                    <button type="button" class="calc-count-btn py-3 px-2 rounded-2xl text-sm font-extrabold border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-count="12">
                        12'li
                    </button>
                    <button type="button" class="calc-count-btn py-3 px-2 rounded-2xl text-sm font-extrabold border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-count="16">
                        16'lı
                    </button>
                </div>
            </div>

            <!-- 3. Kamera Çözünürlüğü & Teknolojisi -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2.5">
                    3. Kamera Çözünürlüğü ve Teknolojisi
                </label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                    <button type="button" class="calc-tech-btn p-3.5 rounded-2xl text-left border transition border-blue-600 bg-blue-50 text-blue-900 shadow-xs" data-tech="ahd">
                        <span class="block font-bold text-sm">1080p Full HD</span>
                        <span class="block text-xs text-slate-500 mt-0.5">Gece görüşlü, ekonomik ve yaygın</span>
                    </button>
                    <button type="button" class="calc-tech-btn p-3.5 rounded-2xl text-left border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-tech="ip">
                        <span class="block font-bold text-sm">5MP - 4K IP PoE</span>
                        <span class="block text-xs text-slate-500 mt-0.5">Kristal netlik ve sesli kayıt</span>
                    </button>
                    <button type="button" class="calc-tech-btn p-3.5 rounded-2xl text-left border transition border-slate-200 bg-slate-50/60 text-slate-700 hover:border-slate-300" data-tech="solar">
                        <span class="block font-bold text-sm">4G Güneş Enerjili</span>
                        <span class="block text-xs text-slate-500 mt-0.5">Elektriksiz / internetsiz araziler</span>
                    </button>
                </div>
            </div>

            <!-- 4. Montaj Dahil mi? -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2.5">
                    4. Montaj ve İşçilik Hizmeti İstiyor Musunuz?
                </label>
                <div class="grid grid-cols-2 gap-3">
                    <button type="button" class="calc-install-btn p-3.5 rounded-2xl border transition border-emerald-600 bg-emerald-50 text-emerald-900 flex items-center justify-center gap-2 font-bold text-xs sm:text-sm" data-install="yes">
                        <span>✅</span> Evet, Anahtar Teslim Montaj Dahil
                    </button>
                    <button type="button" class="calc-install-btn p-3.5 rounded-2xl border transition border-slate-200 bg-slate-50/60 text-slate-700 flex items-center justify-center gap-2 font-bold text-xs sm:text-sm hover:border-slate-300" data-install="no">
                        <span>📦</span> Sadece Cihaz ve Ekipman
                    </button>
                </div>
            </div>
        </div>

        <!-- Sağ: Canlı Fiyat Özeti & Sipariş/Arama Kartı -->
        <div class="lg:col-span-5 bg-slate-900 text-white rounded-3xl p-6 sm:p-7 shadow-xl flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-5">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Hesaplanan Paket</span>
                    <span id="calc-badge" class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                        ⭐ En Popüler Tercih
                    </span>
                </div>

                <!-- Fiyat Gösterimi -->
                <div class="mb-6 text-center lg:text-left">
                    <span class="text-xs text-slate-400 block mb-1">Tahmini Anahtar Teslim Tutar:</span>
                    <div class="flex items-baseline justify-center lg:justify-start gap-2">
                        <span id="calc-total-price" class="text-4xl sm:text-5xl font-black text-white tracking-tight">10.000</span>
                        <span class="text-2xl font-bold text-emerald-400">₺</span>
                    </div>
                    <span class="text-xs text-emerald-400 mt-1 block font-medium">✓ Kablolama, Cihaz Ayarı ve Mobil Uygulama Dahil</span>
                </div>

                <!-- Detay Kırılımı -->
                <div class="space-y-2.5 text-xs text-slate-300 border-t border-b border-slate-800 py-4 mb-6">
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400">Seçilen Ekipman:</span>
                        <span id="calc-equipment-text" class="font-bold text-white text-right">4 Adet 1080p AHD Kamera</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400">Kayıt Depolama:</span>
                        <span id="calc-disk-text" class="font-bold text-white text-right">1 TB WD Purple 7/24 Güvenlik Diski</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400">Ekipman Bedeli:</span>
                        <span id="calc-equip-price" class="font-semibold text-slate-200">7.800 ₺</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-400">Montaj & İşçilik:</span>
                        <span id="calc-install-price" class="font-semibold text-emerald-400">2.200 ₺ (Dahil)</span>
                    </div>
                    <div class="flex justify-between items-center pt-1 border-t border-slate-800">
                        <span class="text-slate-400">Mobil Canlı İzleme:</span>
                        <span class="font-bold text-emerald-400">ÜCRETSİZ HEDİYE</span>
                    </div>
                </div>
            </div>

            <!-- Aksiyon Butonları -->
            <div class="space-y-3">
                <a id="calc-call-btn" 
                   href="tel:{{ config('camera_site.phone') }}"
                   onclick="trackConversionCall('hesaplayici')"
                   class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-extrabold py-3.5 px-4 rounded-xl text-sm shadow-md transition">
                    <svg class="w-4 h-4 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>BU FİYATLA HEMEN ARA & KEŞİF İSTE</span>
                </a>

                <a id="calc-whatsapp-btn"
                   href="https://wa.me/{{ config('camera_site.whatsapp') }}?text={{ urlencode('Merhaba, sitenizdeki hesaplayıcıdan 4 kameralı 1080p AHD paket için 10.000 TL fiyat aldım. Hatay için montaj ve keşif randevusu almak istiyorum.') }}"
                   target="_blank"
                   rel="noopener"
                   onclick="trackConversionWhatsApp('hesaplayici')"
                   class="w-full flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-750 text-white font-bold py-3 px-4 rounded-xl text-xs transition">
                    <svg class="w-4 h-4 fill-emerald-400" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>WhatsApp'a Fiyatı Gönder</span>
                </a>
            </div>
            <p class="text-[11px] text-center text-slate-400 mt-3">
                * Kesin keşif sonrası kablo mesafesine göre küçük farklar olabilir. Hatay geneli keşfimiz ücretsizdir.
            </p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let state = {
        property: 'ev',
        count: 4,
        tech: 'ahd',
        install: 'yes'
    };

    const propertyButtons = document.querySelectorAll('.calc-property-btn');
    const countButtons = document.querySelectorAll('.calc-count-btn');
    const techButtons = document.querySelectorAll('.calc-tech-btn');
    const installButtons = document.querySelectorAll('.calc-install-btn');

    const totalPriceEl = document.getElementById('calc-total-price');
    const equipPriceEl = document.getElementById('calc-equip-price');
    const installPriceEl = document.getElementById('calc-install-price');
    const equipmentTextEl = document.getElementById('calc-equipment-text');
    const diskTextEl = document.getElementById('calc-disk-text');
    const whatsappBtn = document.getElementById('calc-whatsapp-btn');
    const badgeEl = document.getElementById('calc-badge');

    function calculate() {
        let equipPrice = 0;
        let installPrice = 0;
        let diskInfo = '1 TB WD Purple 7/24 Güvenlik Diski';
        let techName = '';

        if (state.tech === 'ahd') {
            techName = '1080p AHD Full HD Kamera';
            if (state.count == 2) {
                equipPrice = 5200;
                installPrice = 1500;
                diskInfo = '500 GB Güvenlik Diski (12 Gün)';
            } else if (state.count == 4) {
                equipPrice = 7800;
                installPrice = 2200;
                diskInfo = '1 TB WD Purple Güvenlik Diski (20 Gün)';
            } else if (state.count == 8) {
                equipPrice = 14500;
                installPrice = 4000;
                diskInfo = '2 TB WD Purple Güvenlik Diski (25 Gün)';
            } else if (state.count == 12) {
                equipPrice = 21000;
                installPrice = 5500;
                diskInfo = '3 TB WD Purple Güvenlik Diski (25 Gün)';
            } else if (state.count == 16) {
                equipPrice = 27000;
                installPrice = 7000;
                diskInfo = '4 TB WD Purple Güvenlik Diski (30 Gün)';
            }
        } else if (state.tech === 'ip') {
            techName = '4K / 5MP IP PoE Akıllı Kamera';
            if (state.count == 2) {
                equipPrice = 9800;
                installPrice = 2000;
                diskInfo = '1 TB SkyHawk Güvenlik Diski';
            } else if (state.count == 4) {
                equipPrice = 19500;
                installPrice = 3500;
                diskInfo = '2 TB SkyHawk Güvenlik Diski';
            } else if (state.count == 8) {
                equipPrice = 34000;
                installPrice = 6000;
                diskInfo = '4 TB SkyHawk Güvenlik Diski';
            } else if (state.count == 12) {
                equipPrice = 48000;
                installPrice = 8500;
                diskInfo = '6 TB SkyHawk Güvenlik Diski';
            } else if (state.count == 16) {
                equipPrice = 62000;
                installPrice = 11000;
                diskInfo = '8 TB SkyHawk Güvenlik Diski';
            }
        } else if (state.tech === 'solar') {
            techName = '4G Solar Güneş Enerjili SIM Kartlı';
            equipPrice = state.count * 6900;
            installPrice = state.count * 1200;
            diskInfo = state.count + 'x 128 GB Yüksek Hızlı MicroSD Kart';
        }

        if (state.install === 'no') {
            installPrice = 0;
        }

        const total = equipPrice + installPrice;

        totalPriceEl.textContent = new Intl.NumberFormat('tr-TR').format(total);
        equipPriceEl.textContent = new Intl.NumberFormat('tr-TR').format(equipPrice) + ' ₺';
        installPriceEl.textContent = state.install === 'yes' 
            ? (new Intl.NumberFormat('tr-TR').format(installPrice) + ' ₺ (Dahil)') 
            : 'Seçilmedi (0 ₺)';
        
        equipmentTextEl.textContent = state.count + ' Adet ' + techName;
        diskTextEl.textContent = diskInfo;

        if (state.count == 4 && state.tech === 'ahd') {
            badgeEl.textContent = '⭐ En Popüler Tercih';
            badgeEl.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30';
        } else if (state.tech === 'ip') {
            badgeEl.textContent = '💎 Kristal 4K Netlik';
            badgeEl.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-purple-500/20 text-purple-300 border border-purple-500/30';
        } else if (state.tech === 'solar') {
            badgeEl.textContent = '☀️ Elektriksiz / Tarlalar';
            badgeEl.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30';
        } else {
            badgeEl.textContent = 'Ekonomik Çözüm';
            badgeEl.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-500/20 text-blue-300 border border-blue-500/30';
        }

        const msg = encodeURIComponent(`Merhaba, sitenizdeki hesaplayıcıdan ${state.count} adet ${techName} (${state.install === 'yes' ? 'Montaj Dahil' : 'Montajsız'}) için ${new Intl.NumberFormat('tr-TR').format(total)} TL tutarında paket oluşturdum. Hatay bölgesi için detay ve randevu almak istiyorum.`);
        whatsappBtn.href = `https://wa.me/{{ config('camera_site.whatsapp') }}?text=${msg}`;
    }

    function setupGroup(buttons, stateKey, activeClasses, inactiveClasses) {
        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                buttons.forEach(b => {
                    activeClasses.forEach(c => b.classList.remove(c));
                    inactiveClasses.forEach(c => b.classList.add(c));
                });
                activeClasses.forEach(c => btn.classList.add(c));
                inactiveClasses.forEach(c => btn.classList.remove(c));
                state[stateKey] = btn.dataset[stateKey] || btn.dataset.count || btn.dataset.tech || btn.dataset.install || btn.dataset.type;
                calculate();
            });
        });
    }

    setupGroup(
        propertyButtons, 'property',
        ['border-blue-600', 'bg-blue-50', 'text-blue-700', 'shadow-xs'],
        ['border-slate-200', 'bg-slate-50/60', 'text-slate-700']
    );

    setupGroup(
        countButtons, 'count',
        ['border-blue-600', 'bg-blue-50', 'text-blue-700', 'shadow-xs'],
        ['border-slate-200', 'bg-slate-50/60', 'text-slate-700']
    );

    setupGroup(
        techButtons, 'tech',
        ['border-blue-600', 'bg-blue-50', 'text-blue-900', 'shadow-xs'],
        ['border-slate-200', 'bg-slate-50/60', 'text-slate-700']
    );

    setupGroup(
        installButtons, 'install',
        ['border-emerald-600', 'bg-emerald-50', 'text-emerald-900'],
        ['border-slate-200', 'bg-slate-50/60', 'text-slate-700']
    );

    calculate();
});
</script>
