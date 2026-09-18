<?php

namespace Database\Seeders;

use App\Models\CameraPackage;
use Illuminate\Database\Seeder;

class CameraPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => '2 Kameralı Full HD Ev & Ofis Seti',
                'slug' => '2-kamerali-ev-ofis-seti',
                'camera_count' => 2,
                'camera_type' => '1080p AHD Gece Görüşlü (İç/Dış Ortam)',
                'resolution' => '1080p Full HD',
                'storage_info' => '500 GB Güvenlik Diski (Ortalama 12 Gün Kayıt)',
                'equipment_price' => 5200.00,
                'installation_price' => 1500.00,
                'total_price' => 6700.00,
                'badge' => 'Ekonomik Başlangıç',
                'is_popular' => false,
                'order' => 1,
                'features' => [
                    '2 Adet 1080p Su Geçirmez Gece Görüşlü Bullet / Dome Kamera',
                    '4 Kanal Hibrit Full HD Kayıt Cihazı (Genişletilebilir)',
                    '500 GB 7/24 Güvenlik Hard Diski',
                    '50 Metre CCTV Koaksiyel Kablo + BNC & Power Jacklar',
                    '12V 5A Metal Korumalı Güç Kaynağı',
                    'Cep Telefonu Canlı & Geçmiş İzleme Programı Kurulumu',
                    'Montaj, Kablolama ve 2 Yıl Birebir Değişim Garantisi',
                ],
            ],
            [
                'name' => '4 Kameralı Full HD Güvenlik Seti',
                'slug' => '4-kamerali-guvenlik-seti',
                'camera_count' => 4,
                'camera_type' => '1080p AHD Geniş Açılı Gece Görüşlü',
                'resolution' => '1080p Full HD Net Görüntü',
                'storage_info' => '1 TB WD Purple Güvenlik Diski (Ortalama 20 Gün Kayıt)',
                'equipment_price' => 7800.00,
                'installation_price' => 2200.00,
                'total_price' => 10000.00,
                'badge' => '⭐ EN ÇOK TERCİH EDİLEN',
                'is_popular' => true,
                'order' => 2,
                'features' => [
                    '4 Adet 1080p 3.6mm Geniş Açılı Su Geçirmez Gece Görüşlü Kamera',
                    '4 Kanal Hibrit Full HD Kayıt Cihazı + Mouse + Kumanda',
                    '1 TB 7/24 Özel Güvenlik Diski (Sürekli Döngü Kaydı)',
                    '100 Metre CCTV Kablo + Tüm Bağlantı Ekipmanları',
                    '12V 10A Merkezi Sigortalı Adaptör',
                    'Tüm Aile / Personel İçin Telefona Sınırsız Canlı İzleme',
                    'Hatay İçi Ücretsiz Keşif, Anahtar Teslim Montaj & 2 Yıl Garanti',
                ],
            ],
            [
                'name' => '8 Kameralı Profesyonel İş Yeri & Bina Seti',
                'slug' => '8-kamerali-bina-isyeri-seti',
                'camera_count' => 8,
                'camera_type' => '5 MP Süper HD Smart IR Gece Görüş',
                'resolution' => '5 Megapiksel 2K Çözünürlük',
                'storage_info' => '2 TB WD Purple Güvenlik Diski (Ortalama 25 Gün Kayıt)',
                'equipment_price' => 14500.00,
                'installation_price' => 4000.00,
                'total_price' => 18500.00,
                'badge' => 'Tam Kapsama & İş Yeri',
                'is_popular' => false,
                'order' => 3,
                'features' => [
                    '8 Adet 5 MP Ultra Çözünürlüklü Smart IR Kameralar',
                    '8 Kanal 5MP Destekli Akıllı Kayıt Cihazı (H.265+ Sıkıştırma)',
                    '2 TB Özel Güvenlik Sınıfı Sabit Disk',
                    '200 Metre Kalın Bakır CCTV Kablo + Buat ve Konnektörler',
                    '12V 20A Metal Kasa Güç Kaynağı',
                    'Hareket Algılamalı Telefondan Anlık Alarm Bildirimi',
                    'Site Yönetimi veya Çoklu Kullanıcı Yetkilendirmesi',
                    'Profesyonel Montaj, Hatay Geneli Ücretsiz Servis Desteği',
                ],
            ],
            [
                'name' => '4 Kameralı 4K Ultra HD IP PoE Kurumsal Paket',
                'slug' => '4-kamerali-4k-ip-poe-paket',
                'camera_count' => 4,
                'camera_type' => '4K (8MP) Ultra HD IP PoE Kamera',
                'resolution' => '4K Ultra HD & Ses Kayıt Özellikli',
                'storage_info' => '2 TB SkyHawk / WD Purple Disk',
                'equipment_price' => 19500.00,
                'installation_price' => 3500.00,
                'total_price' => 23000.00,
                'badge' => 'Üst Düzey Netlik & Yapay Zeka',
                'is_popular' => false,
                'order' => 4,
                'features' => [
                    '4 Adet 4K Ultra HD IP PoE Kamera (Dahili Mikrofon / Ses Kayıt)',
                    '4 Kanal NVR Ağ Kayıt Cihazı (PoE Doğrudan Besleme)',
                    '2 TB 7/24 Güvenlik Hard Diski',
                    'Kategori 6 (Cat6) %100 Bakır Ağ Kablolaması',
                    'Yapay Zeka Destekli İnsan & Araç Tanıma (Yanlış Alarm Yok)',
                    'Plaka Okuma & Yüz Netleştirme Kapasitesi',
                    'Statik IP İstemeyen P2P Bulut Bağlantısı',
                    '2 Yıl Yerinde Garanti & Anahtar Teslim Montaj',
                ],
            ],
            [
                'name' => '4G Solar Güneş Enerjili Tarla & Çiftlik Kamerası',
                'slug' => '4g-solar-tarla-ciftlik-kamerasi',
                'camera_count' => 1,
                'camera_type' => 'Güneş Panelli + 4G SIM Kartlı 360° Dönen Kamera',
                'resolution' => 'Full HD 1080p / Renkli Gece Görüş',
                'storage_info' => '128 GB MicroSD Kart (Hareket Odaklı Bulut & Kart Kayıt)',
                'equipment_price' => 6900.00,
                'installation_price' => 1200.00,
                'total_price' => 8100.00,
                'badge' => 'Elektriksiz / İnternetsiz Alanlar',
                'is_popular' => false,
                'order' => 5,
                'features' => [
                    'Elektrik ve WiFi İnternet GEREKTİRMEZ',
                    'Güneş Paneli + Dahili Uzun Ömürlü Batarya Paketi',
                    '4G SIM Kart Girişi (Turkcell, Vodafone, TT Destekli)',
                    '360° Sağa-Sola, 90° Yukarı-Aşağı Telefondan Yönlendirme (PTZ)',
                    'İki Yönlü Sesli Konuşma (Hoparlör & Mikrofon)',
                    'Hareket Algılayınca Telefona Anlık Resimli Bildirim',
                    'Zeytinlik, Narenciye Bahçesi, Şantiye, Konteyner ve Arı Kovanları İçin İdeal',
                ],
            ],
        ];

        foreach ($packages as $pkg) {
            CameraPackage::updateOrCreate(
                ['slug' => $pkg['slug']],
                $pkg
            );
        }
    }
}
