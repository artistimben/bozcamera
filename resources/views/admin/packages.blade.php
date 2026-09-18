<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera Paket & Fiyat Yönetimi | Boztech Bilişim</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-100 text-slate-900 min-h-screen">
    <!-- Üst Başlık -->
    <nav class="bg-slate-900 text-white py-4 px-6 shadow-md">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="font-black text-xl tracking-tight text-white flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-sm font-bold">BB</span>
                    Boztech Bilişim Yönetim Paneli
                </a>
                <span class="text-xs bg-slate-800 text-slate-300 px-2 py-0.5 rounded-sm border border-slate-700">Fiyat Güncelleme</span>
            </div>
            <div class="flex items-center gap-3 text-xs">
                <a href="{{ route('admin.leads.index') }}" class="bg-slate-800 hover:bg-slate-700 text-white font-medium px-3 py-1.5 rounded-lg transition flex items-center gap-1.5">
                    📋 Müşteri Talepleri
                </a>
                <a href="{{ route('home') }}" target="_blank" class="bg-blue-600 hover:bg-blue-500 text-white font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                    🌐 Siteyi Görüntüle ↗
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        <!-- Sekmeler / Navigasyon -->
        <div class="flex items-center gap-2 mb-6 border-b border-slate-200 pb-3">
            <a href="{{ route('admin.leads.index') }}" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-200 transition">
                📋 Gelen Talepler & Aramalar
            </a>
            <a href="{{ route('admin.packages.index') }}" class="px-4 py-2 rounded-xl text-sm font-bold bg-blue-600 text-white shadow-xs">
                🏷️ Kamera Paket & Fiyat Güncelleme
            </a>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-bold flex items-center gap-2">
            <span>✅</span> {{ session('success') }}
        </div>
        @endif

        <div class="mb-6 bg-blue-50 border border-blue-200 rounded-2xl p-4 text-xs text-blue-900 leading-relaxed">
            <strong class="font-bold">💡 Bilgi:</strong> Buradan güncelleyeceğiniz toplam fiyat, ekipman ve montaj tutarları doğrudan ana sayfada (ve varsa ilçe sayfalarında) anında güncellenir.
        </div>

        <!-- Paket Fiyat Listesi & Düzenleme Formları -->
        <div class="space-y-6">
            @foreach($packages as $pkg)
            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-md transition">
                <form action="{{ route('admin.packages.update', $pkg) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                        <!-- Sol: Paket Detayları -->
                        <div class="lg:w-1/3">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 text-xs font-mono font-bold">
                                    #{{ $pkg->id }} • {{ $pkg->slug }}
                                </span>
                                @if($pkg->is_popular)
                                <span class="px-2 py-0.5 rounded-md bg-amber-100 text-amber-800 text-[11px] font-bold">
                                    ⭐ Popüler
                                </span>
                                @endif
                            </div>
                            <h3 class="text-lg font-black text-slate-900">{{ $pkg->name }}</h3>
                            <p class="text-xs text-slate-500 mt-1">
                                {{ $pkg->camera_count }} Kamera • {{ $pkg->camera_type }} • {{ $pkg->resolution }}
                            </p>
                            <p class="text-xs text-slate-400 mt-0.5">
                                Disk: {{ $pkg->storage_info }}
                            </p>
                        </div>

                        <!-- Orta: Fiyat Alanları -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:w-1/2">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">
                                    Ekipman Bedeli (₺)
                                </label>
                                <div class="relative">
                                    <input type="number" step="1" name="equipment_price" 
                                           value="{{ (int) $pkg->equipment_price }}" 
                                           required
                                           class="w-full text-sm font-bold px-3 py-2 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-hidden">
                                    <span class="absolute right-3 top-2 text-xs text-slate-400 font-bold">₺</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">
                                    Montaj Bedeli (₺)
                                </label>
                                <div class="relative">
                                    <input type="number" step="1" name="installation_price" 
                                           value="{{ (int) $pkg->installation_price }}" 
                                           required
                                           class="w-full text-sm font-bold px-3 py-2 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-hidden text-emerald-700">
                                    <span class="absolute right-3 top-2 text-xs text-slate-400 font-bold">₺</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-blue-900 mb-1">
                                    Toplam Tutar (₺)
                                </label>
                                <div class="relative">
                                    <input type="number" step="1" name="total_price" 
                                           value="{{ (int) $pkg->total_price }}" 
                                           required
                                           class="w-full text-sm font-black px-3 py-2 rounded-xl border-2 border-blue-600 focus:ring-2 focus:ring-blue-500 outline-hidden text-blue-700 bg-blue-50/50">
                                    <span class="absolute right-3 top-2 text-xs text-blue-600 font-bold">₺</span>
                                </div>
                            </div>
                        </div>

                        <!-- Sağ: Kaydet Butonu -->
                        <div class="lg:w-1/6 flex flex-col sm:flex-row lg:flex-col justify-center gap-2">
                            <button type="submit" 
                                    class="w-full bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-extrabold py-2.5 px-4 rounded-xl text-xs sm:text-sm shadow-sm transition">
                                💾 Fiyatı Güncelle
                            </button>
                            <span class="text-[11px] text-center text-slate-400">
                                Son: {{ $pkg->updated_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
