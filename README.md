# Boztech Bilişim & Güvenlik Sistemleri

Hatay (Dörtyol, İskenderun, Payas, Erzin, Antakya, Arsuz ve tüm ilçeler) odaklı, Google Ads reklam ve dönüşüm odaklı profesyonel güvenlik kamerası kurulum ve satış web uygulaması.

---

## 🌟 Özellikler

- **Google Ads & Yerel SEO Odaklı Mimari:**
  - Hatay ve tüm ilçelerine (`/dortyol-guvenlik-kamerasi`, `/iskenderun-guvenlik-kamerasi`, `/payas-guvenlik-kamerasi` vb.) özel optimize edilmiş açılış sayfaları.
  - Hızlı arama (`tel:05455658583`) ve WhatsApp doğrudan yönlendirme butonları.
  - Mobil cihazlarda ekran altına sabitlenen hızlı aksiyon çubuğu.
- **Hibrit Fiyat & Dönüşüm Modeli:**
  - Ziyaretçiyi kaçırmayan şeffaf başlangıç fiyatları ("X TL'den Başlayan").
  - "Ücretsiz Yerinde Keşif" ile maksimum teklif/arama dönüşümü.
  - İnteraktif maliyet hesaplama robotu.
- **Yönetim Paneli:**
  - **Fiyat Paketleri Yönetimi:** `/yonetim/paketler` üzerinden paket fiyatları, başlıkları ve açıklamaları anında güncellenebilir.
  - **Müşteri Talepleri:** `/yonetim/talepler` üzerinden web sitesinden gelen tüm keşif ve teklif formları listelenir, detayları incelenebilir.
- **Modern UI/UX:**
  - Plus Jakarta Sans tipografisi, Tailwind CSS v4, modern mikro gölgeler ve temiz bileşenler.
  - Yüksek çözünürlüklü ve optimize edilmiş görsel varlıkları (`/public/images`).

---

## 🛠️ Kurulum Adımları

Projeyi sunucuya veya yerel geliştirme ortamına kurmak için aşağıdaki adımları takip edin:

### 1. Depoyu Klonlayın
```bash
git clone https://github.com/artistimben/bozcamera.git
cd bozcamera
```

### 2. Bağımlılıkları Yükleyin
```bash
composer install
npm install
```

### 3. Çevre Değişkenlerini Ayarlayın
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Veritabanını Oluşturun ve Seed Edin
```bash
php artisan migrate --seed
```

### 5. Ön Yüz Varlıklarını Derleyin
*(Hazır derlenmiş dosyalar `public/build` içinde mevcuttur. Yeniden derlemek isterseniz:)*
```bash
npm run build
```

### 6. Uygulamayı Başlatın
```bash
php artisan serve
```
Tarayıcınızdan `http://localhost:8000` adresine gidebilirsiniz.

---

## 📍 Önemli Sayfalar ve Yollar

- **Ana Sayfa:** `/`
- **İlçe SEO Sayfaları:** `/{ilce}-guvenlik-kamerasi`
- **Keşif Talep Formu:** `POST /teklif-al`
- **Teşekkür Sayfası:** `/tesekkurler`
- **Yönetim - Paket Fiyatları:** `/yonetim/paketler`
- **Yönetim - Gelen Talepler:** `/yonetim/talepler`

---

## 📞 İletişim Bilgileri

- **Firma:** Boztech Bilişim & Güvenlik Sistemleri
- **Merkez:** Dörtyol / Hatay
- **Telefon:** 0545 565 85 83
- **Hizmet Bölgesi:** Dörtyol, İskenderun, Payas, Erzin, Arsuz, Antakya, Defne, Kırıkhan, Reyhanlı, Samandağ, Hassa, Belen, Yayladağı, Kumlu, Altınözü.
