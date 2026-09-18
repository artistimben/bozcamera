<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Arama & Teklif Talepleri | Hatay Kamera Yönetim</title>
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
                <span class="text-xs bg-slate-800 text-slate-300 px-2 py-0.5 rounded-sm border border-slate-700">Müşteri Talepleri</span>
            </div>
            <div class="flex items-center gap-3 text-xs">
                <a href="{{ route('admin.packages.index') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1.5">
                    🏷️ Fiyatları Güncelle
                </a>
                <a href="{{ route('home') }}" target="_blank" class="bg-slate-800 hover:bg-slate-700 text-white font-medium px-3 py-1.5 rounded-lg transition">
                    🌐 Siteyi Görüntüle ↗
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        <!-- İstatistik Kartları -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                <span class="text-xs font-bold text-slate-500 uppercase">Toplam Talep</span>
                <span class="block text-3xl font-black text-slate-900 mt-1">{{ $totalCount }}</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-amber-200 shadow-xs bg-amber-50/30">
                <span class="text-xs font-bold text-amber-700 uppercase">Yeni / Aranacak Talepler</span>
                <span class="block text-3xl font-black text-amber-600 mt-1">{{ $newCount }}</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-emerald-200 shadow-xs bg-emerald-50/30">
                <span class="text-xs font-bold text-emerald-700 uppercase">Görüşülen / İletişime Geçilen</span>
                <span class="block text-3xl font-black text-emerald-600 mt-1">{{ $contactedCount }}</span>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 rounded-xl text-sm font-medium">
            {{ session('success') }}
        </div>
        @endif

        <!-- Sekmeler / Navigasyon -->
        <div class="flex items-center gap-2 mb-6 border-b border-slate-200 pb-3">
            <a href="{{ route('admin.leads.index') }}" class="px-4 py-2 rounded-xl text-sm font-bold bg-blue-600 text-white shadow-xs">
                📋 Gelen Talepler & Aramalar
            </a>
            <a href="{{ route('admin.packages.index') }}" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-200 transition">
                🏷️ Kamera Paket & Fiyat Güncelleme
            </a>
        </div>

        <!-- Talep Tablosu -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-5 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="font-bold text-lg text-slate-900">Müşteri Arama & Keşif Talepleri</h2>
                
                <!-- Filtre -->
                <div class="flex items-center gap-2 text-xs">
                    <span class="text-slate-500 font-medium">Durum Filtresi:</span>
                    <a href="{{ route('admin.leads.index') }}" class="px-2.5 py-1 rounded-lg {{ !$status ? 'bg-blue-600 text-white font-bold' : 'bg-slate-100 text-slate-700' }}">Tümü</a>
                    <a href="{{ route('admin.leads.index', ['status' => 'new']) }}" class="px-2.5 py-1 rounded-lg {{ $status === 'new' ? 'bg-amber-500 text-white font-bold' : 'bg-slate-100 text-slate-700' }}">Yeniler ({{ $newCount }})</a>
                    <a href="{{ route('admin.leads.index', ['status' => 'contacted']) }}" class="px-2.5 py-1 rounded-lg {{ $status === 'contacted' ? 'bg-emerald-600 text-white font-bold' : 'bg-slate-100 text-slate-700' }}">Arananlar</a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-xs uppercase font-bold text-slate-500 border-b border-slate-200">
                        <tr>
                            <th class="p-4">Tarih</th>
                            <th class="p-4">İsim & Telefon</th>
                            <th class="p-4">İlçe / Mekan</th>
                            <th class="p-4">Kamera / İhtiyaç</th>
                            <th class="p-4">Kaynak</th>
                            <th class="p-4">Durum</th>
                            <th class="p-4 text-right">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($leads as $lead)
                        <tr class="hover:bg-slate-50/80 transition {{ $lead->status === 'new' ? 'bg-amber-50/20' : '' }}">
                            <td class="p-4 text-xs whitespace-nowrap text-slate-400">
                                {{ $lead->created_at->format('d.m.Y H:i') }}
                                <span class="block text-[10px] text-slate-400">{{ $lead->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="p-4 font-semibold text-slate-900">
                                <span class="block text-sm">{{ $lead->name ?: 'Belirtilmedi' }}</span>
                                <a href="tel:{{ $lead->phone }}" class="text-blue-600 hover:underline font-black text-sm flex items-center gap-1 mt-0.5">
                                    📞 {{ $lead->phone }}
                                </a>
                            </td>
                            <td class="p-4 text-xs">
                                <span class="font-bold text-slate-800">{{ $lead->district ?: 'Hatay Geneli' }}</span>
                                <span class="block text-slate-400">{{ $lead->property_type ?: '-' }}</span>
                            </td>
                            <td class="p-4 text-xs">
                                <span class="font-semibold text-slate-800">{{ $lead->camera_count ?: 'Genel Keşif' }}</span>
                                @if($lead->estimated_budget)
                                <span class="block text-emerald-600 font-bold mt-0.5">Bütçe: {{ $lead->estimated_budget }}</span>
                                @endif
                                @if($lead->message)
                                <span class="block text-slate-500 mt-1 italic max-w-xs truncate">"{{ $lead->message }}"</span>
                                @endif
                            </td>
                            <td class="p-4 text-xs whitespace-nowrap">
                                <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 text-[11px] font-mono">
                                    {{ $lead->source }}
                                </span>
                            </td>
                            <td class="p-4 text-xs whitespace-nowrap">
                                <form action="{{ route('admin.leads.update', $lead) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" 
                                            class="text-xs font-bold px-2 py-1 rounded-lg border {{ $lead->status === 'new' ? 'bg-amber-100 text-amber-900 border-amber-300' : ($lead->status === 'contacted' ? 'bg-emerald-100 text-emerald-900 border-emerald-300' : 'bg-slate-100 text-slate-700 border-slate-300') }}">
                                        <option value="new" {{ $lead->status === 'new' ? 'selected' : '' }}>Yeni (Aranmadı)</option>
                                        <option value="contacted" {{ $lead->status === 'contacted' ? 'selected' : '' }}>Arandı / Görüşüldü</option>
                                        <option value="won" {{ $lead->status === 'won' ? 'selected' : '' }}>Satış & Montaj Yapıldı</option>
                                        <option value="lost" {{ $lead->status === 'lost' ? 'selected' : '' }}>İptal / Olumsuz</option>
                                    </select>
                                </form>
                            </td>
                            <td class="p-4 text-right whitespace-nowrap text-xs space-x-2">
                                <a href="tel:{{ $lead->phone }}" class="inline-flex items-center gap-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-3 py-1.5 rounded-lg transition">
                                    Ara
                                </a>
                                <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" class="inline" onsubmit="return confirm('Bu kaydı silmek istediğinize emin misiniz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 hover:text-rose-800 font-semibold p-1 transition">
                                        Sil
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-slate-400">
                                Henüz kayıtlı müşteri veya arama talebi bulunmuyor.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($leads->hasPages())
            <div class="p-4 border-t border-slate-200">
                {{ $leads->links() }}
            </div>
            @endif
        </div>
    </div>
</body>
</html>
