<?php

return [
    'company_name' => env('COMPANY_NAME', 'Boztech Bilişim & Güvenlik Sistemleri'),
    'short_name' => 'Boztech Bilişim',
    'phone' => env('COMPANY_PHONE', '0545 565 85 83'),
    'phone_raw' => env('COMPANY_PHONE_RAW', '905455658583'),
    'whatsapp' => env('COMPANY_WHATSAPP', '905455658583'),
    'whatsapp_default_message' => 'Merhaba Boztech Bilişim, güvenlik kamerası satışı ve montajı hakkında bilgi ve ücretsiz keşif talebinde bulunmak istiyorum.',
    'email' => env('COMPANY_EMAIL', 'info@boztechbilisim.com'),
    'working_hours' => 'Haftanın 7 Günü | 08:30 - 20:30 Hızlı Keşif & Montaj',
    'address_text' => 'Dörtyol Merkez / Hatay (Tüm Hatay Bölgesine Gezici Servis)',
    'service_area' => 'Hatay Dörtyol Merkezli (Dörtyol, İskenderun, Payas, Erzin, Antakya, Arsuz, Belen, Kırıkhan ve Tüm İlçeler)',

    'google_ads' => [
        'id' => env('GOOGLE_ADS_ID', null),
        'phone_conversion_label' => env('GOOGLE_ADS_PHONE_LABEL', null),
        'lead_conversion_label' => env('GOOGLE_ADS_LEAD_LABEL', null),
    ],

    'services' => [
        'ip-kamera-sistemleri' => [
            'slug' => 'ip-kamera-sistemleri',
            'title' => 'Hatay IP Güvenlik Kamerası & PoE Sistemleri | Boztech Bilişim',
            'nav_title' => 'IP Kamera Sistemleri',
            'meta_desc' => 'Hatay genelinde 4K Ultra HD çözünürlük, PoE kablolama, gece renkli akıllı IP güvenlik kamerası kurulumu. İş yeri, fabrika ve siteler için 2 yıl garantili montaj. Tel: 0545 565 85 83.',
            'badge' => 'Yüksek Çözünürlük & Yapay Zeka',
            'headline' => 'Yüksek Çözünürlüklü Akıllı IP & PoE Güvenlik Kamera Sistemleri',
            'intro' => 'Net yüz tanıma, araç plaka okuma, gece zifiri karanlıkta tam renkli izleme ve tek Cat6 kablo üzerinden güç (PoE) sağlayan yeni nesil kurumsal IP kamera altyapısı.',
            'features' => [
                '4K / 5MP Ultra HD Kristal Netliğinde Görüntü',
                'PoE Teknolojisi ile Tek Kablodan Güç & Veri İletimi',
                'İnsan ve Araç Algılama (Yapay Zeka Destekli Yanlış Alarm Filtresi)',
                'Geceleri Zifiri Karanlıkta Dahi Tam Renkli İzleme (ColorVu / Full Color)',
                'NVR Kayıt Cihazı ile Aylarca Kesintisiz Güvenli Depolama',
                'Dünyanın Her Yerinden Anlık Telefon ve Bilgisayar Canlı İzleme',
            ],
            'ideal_for' => 'Fabrikalar, sanayi siteleri, lojistik depolar, lüks konutlar, plazalar ve yüksek güvenlik gerektiren işletmeler.',
            'faq' => [
                [
                    'q' => 'IP kamera ile AHD kamera arasındaki fark nedir?',
                    'a' => 'IP kameralar dijital ağ sinyali kullanır, 4K ve üzeri çok daha yüksek çözünürlük sunar. Akıllı yapay zeka analizleri (insan/araç filtreleme, hat ihlali) ve PoE kablolama kolaylığı sağlar.',
                ],
                [
                    'q' => 'İnternet kesilirse IP kamera kayıt yapmaya devam eder mi?',
                    'a' => 'Evet! Kameralar yerel ağ üzerinden NVR kayıt cihazına bağlı olduğu için internet kesilse dahi kesintisiz olarak 7/24 kayıt yapmaya devam eder. Sadece cep telefonundan uzaktan canlı izlemek için internete ihtiyaç duyar.',
                ],
                [
                    'q' => 'Hatay ilçelerinde IP kamera montaj süresi nedir?',
                    'a' => 'Aynı gün keşif sonrası, 4-8 kameralı standart bir sistem genellikle 1 iş günü içerisinde kablolama ve devreye alma dahil anahtar teslim kurulur.',
                ],
            ],
        ],
        'solar-kamera-sistemleri' => [
            'slug' => 'solar-kamera-sistemleri',
            'title' => '4G Solar Güneş Enerjili Tarla & Çiftlik Kamerası | Hatay Boztech',
            'nav_title' => 'Solar (Güneş Enerjili) Kamera',
            'meta_desc' => 'Elektrik ve internet olmayan narenciye bahçeleri, araziler, çiftlikler ve şantiyeler için 4G SIM kartlı güneş enerjili kamera montajı. Hatay geneli ücretsiz keşif: 0545 565 85 83.',
            'badge' => 'Elektriksiz & İnternetsiz Alanlar İçin',
            'headline' => 'Elektrik ve İnternet Olmayan Her Yerde 7/24 Kesintisiz Güvenlik',
            'intro' => 'Dörtyol, Erzin ve Hatay arazilerine özel: Şebeke elektriği veya sabit internet hattına gerek kalmadan, monokristal güneş paneli ve 4G SIM kart ile çalışan profesyonel solar kamera sistemleri.',
            'features' => [
                'Monokristal Yüksek Verimli Güneş Paneli & Uzun Ömürlü Batarya',
                '4G SIM Kart ile Doğrudan Cep Telefonuna Canlı Bağlantı',
                'PIR Hareket Algılama ile Telefona Anlık Resimli Bildirim',
                'Geceleri Harekete Duyarlı LED Spot ve Çift Yönlü Sesli Konuşma',
                'Yağmur, Fırtına ve Aşırı Sıcağa Karşı IP66/IP67 Zırhlı Dış Mekan Kasası',
                'Bulut veya Dahili Hafıza Kartına Sürekli Kayıt Alma',
            ],
            'ideal_for' => 'Narenciye ve zeytin bahçeleri, sulama motor havuzları, tarım arazileri, arı kovanları, hayvancılık çiftlikleri ve inşaat şantiyeleri.',
            'faq' => [
                [
                    'q' => 'Güneşsiz veya bulutlu kış günlerinde solar kamera çalışır mı?',
                    'a' => 'Evet. Sistemlerimiz içerisinde bulunan yüksek kapasiteli lityum bataryalar, hiç güneş görmese dahi 3 ila 5 güne kadar kesintisiz çalışmayı garanti eder.',
                ],
                [
                    'q' => 'Hangi GSM operatörünün SIM kartı takılmalıdır?',
                    'a' => 'Turkcell, Vodafone veya Türk Telekom operatörlerinin herhangi bir veri (data) SIM kartı takılabilir. Bölgenizde hangi operatörün çekim gücü yüksekse o tercih edilir.',
                ],
                [
                    'q' => 'Hareket algıladığında alarm çalar mı?',
                    'a' => 'Evet, kameranın üzerinde dahili siren ve ışıklı uyarı bulunur. Şüpheli bir hareket olduğunda hem caydırıcı ses/ışık yayar hem de cep telefonunuza anında bildirim gönderir.',
                ],
            ],
        ],
        'guvenlik-kamerasi-montaji' => [
            'slug' => 'guvenlik-kamerasi-montaji',
            'title' => 'Hatay Güvenlik Kamerası Montajı, Kablolama & Arıza Servisi | Boztech',
            'nav_title' => 'Montaj & Arıza Servisi',
            'meta_desc' => 'Hatay Dörtyol, İskenderun ve tüm ilçelerde profesyonel kamera montajı, kanal içi gizli kablolama, kayıt cihazı onarımı ve arıza giderme servisi. Tel: 0545 565 85 83.',
            'badge' => 'Aynı Gün Yerinde Teknik Servis',
            'headline' => 'Profesyonel Kamera Montajı, Kanal Kablolama ve Hızlı Servis',
            'intro' => 'Mevcut kameralarınızın montajı, görüntü gelmeyen arızalı sistemlerinizin onarımı, estetik gizli kablolama ve mobil izleme yapılandırması için profesyonel ustalarımızla hizmetinizdeyiz.',
            'features' => [
                'Kanal ve Boru İçi Estetik, Sarkmayan Gizli Kablolama',
                'Görüntü Kaybı, BNC/Adaptör ve HDD Disk Arıza Tespiti',
                'DVR / NVR Kayıt Cihazı Şifre Sıfırlama ve Yeniden Yapılandırma',
                'Mobil Uygulama (iOS/Android) Uzaktan İzleme Kurulumu',
                'Kör Nokta Kalmayacak Şekilde Doğru Açı ve Lens Konumlandırma',
                '2 Yıl İşçilik ve Montaj Garantisi',
            ],
            'ideal_for' => 'Eski kamerası arızalananlar, kendi kamerasını alıp kaliteli montaj ustası arayanlar veya iş yerini taşıyanlar.',
            'faq' => [
                [
                    'q' => 'Kendi satın aldığım kameranın montajını yapar mısınız?',
                    'a' => 'Evet! İnternetten veya başka bir yerden satın aldığınız kamera setlerinin kablolama, yön ayarı, kayıt cihazı ve mobil kurulumunu garantili olarak yapıyoruz.',
                ],
                [
                    'q' => 'Eski kayıt cihazımın şifresini unuttum, sıfırlanabilir mi?',
                    'a' => 'Evet. Dahua, Hikvision, XMeye, Neutron ve diğer tüm marka DVR/NVR kayıt cihazlarının şifre sıfırlama ve yeniden kurulum işlemlerini yerinde yapıyoruz.',
                ],
                [
                    'q' => 'Gezici servis Hatay ilçelerine ne kadar sürede gelir?',
                    'a' => 'Dörtyol, Erzin, Payas ve İskenderun bölgelerine genellikle aynı gün 2-4 saat içerisinde; diğer Hatay ilçelerine gün içi veya ertesi gün randevulu olarak intikal ediyoruz.',
                ],
            ],
        ],
    ],

    'districts' => [
        'dortyol' => [
            'name' => 'Dörtyol (Merkez)',
            'title' => 'Dörtyol Güvenlik Kamerası Satış & Profesyonel Montaj | Boztech Bilişim',
            'slug' => 'dortyol',
            'meta_desc' => 'Hatay Dörtyol merkezli güvenlik kamerası satışı, montajı ve teknik servisi. Narenciye bahçeleri, depolar ve evler için aynı gün ücretsiz keşif: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Dörtyol merkez, Numuneevler, Sanayi, Yeşilköy, Altınçağ ve narenciye arazilerinde konut, iş yeri ve depolar için aynı gün ücretsiz yerinde keşif.',
            'faq' => [
                [
                    'q' => 'Dörtyol merkezde keşif ücretli mi?',
                    'a' => 'Hayır! Boztech Bilişim Dörtyol merkezli olduğu için tüm Dörtyol mahallelerine yerinde keşif tamamen ücretsizdir.',
                ],
                [
                    'q' => 'Narenciye bahçemize elektrik olmadan kamera takabilir misiniz?',
                    'a' => 'Evet, Dörtyol ve çevresindeki arazilere 4G SIM kartlı güneş enerjili (solar) kamera sistemleri kuruyoruz.',
                ],
                [
                    'q' => 'Kurulum sonrası arıza durumunda servisiniz var mı?',
                    'a' => 'Merkezimiz Dörtyol\'da olduğu için arıza durumlarında en geç 2-4 saat içerisinde yerinde müdahale ediyoruz.',
                ],
            ],
        ],
        'iskenderun' => [
            'name' => 'İskenderun',
            'title' => 'İskenderun Güvenlik Kamera Sistemleri & Kurulumu | Boztech Bilişim',
            'slug' => 'iskenderun',
            'meta_desc' => 'İskenderun kamera montajı ve satışı. İş yerleri, apartmanlar, depolar ve villalar için IP ve Full HD kamera kurulumu. Hemen arayın: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'İskenderun çarşı, sahil, sanayi, Denizciler, Sarıseki ve tepe villalarına özel yüksek çözünürlüklü IP PoE ve gece renkli gösteren akıllı kameralar.',
            'faq' => [
                [
                    'q' => 'İskenderun\'da apartman ve site kamera sistemleri yapıyor musunuz?',
                    'a' => 'Evet. Apartman girişleri, otoparklar ve bina çevreleri için yüksek çözünürlüklü ve geriye dönük 30-60 gün kayıt tutan sistemler kuruyoruz.',
                ],
                [
                    'q' => 'İskenderun için aynı gün montaj mümkün mü?',
                    'a' => 'Gezici servis ekibimiz İskenderun hattında her gün aktiftir. Talebinize göre aynı gün keşif ve ertesi gün montaj tamamlanabilmektedir.',
                ],
                [
                    'q' => 'İskenderun sahil kesimindeki rutubet kameralara zarar verir mi?',
                    'a' => 'Kullandığımız tüm dış ortam kameraları IP67 su ve tuzlu nem korozyonuna dayanıklı metal gövdelidir.',
                ],
            ],
        ],
        'erzin' => [
            'name' => 'Erzin',
            'title' => 'Erzin Güvenlik Kamerası Satış & Montaj | Boztech Bilişim',
            'slug' => 'erzin',
            'meta_desc' => 'Erzin güvenlik kamerası satışı, kurulumu ve teknik servisi. Narenciye bahçeleri, çiftlikler ve evler için garantili montaj. Tel: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Erzin narenciye bahçeleri, içmeler/kaplıca tesisleri, çiftlik ve ev güvenliği için solar ve gece görüşlü kamera paketleri.',
            'faq' => [
                [
                    'q' => 'Erzin narenciye arazilerine solar kamera kurulumu yapıyor musunuz?',
                    'a' => 'Evet, Erzin ovasındaki elektrik bulunmayan sulama motorlarına ve arazilere güneş enerjili 4G kameralar kuruyoruz.',
                ],
                [
                    'q' => 'Erzin\'e servis süreniz nedir?',
                    'a' => 'Dörtyol merkezimiz Erzin\'e 15 dakika mesafede olduğu için aynı gün içinde keşif ve hızlı servis sağlıyoruz.',
                ],
            ],
        ],
        'payas' => [
            'name' => 'Payas',
            'title' => 'Payas Güvenlik Kamerası Satış & Teknik Servis | Boztech Bilişim',
            'slug' => 'payas',
            'meta_desc' => 'Payas sanayi ve yerleşim alanları için güvenlik kamera montajı. IP kamera, kayıt cihazı ve mobil izleme kurulumu. Arayın: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Fabrika, atölye, demir-çelik sanayi kuruluşları ve konut güvenliği için yüksek kaliteli toza dayanıklı IP kamera sistemleri.',
            'faq' => [
                [
                    'q' => 'Payas sanayi bölgesinde fabrika ve depo kameraları kuruyor musunuz?',
                    'a' => 'Evet, ağır sanayi tozu ve titreşime dayanıklı, optik zoomlu ve plaka okuyabilen profesyonel IP sistemler kurmaktayız.',
                ],
                [
                    'q' => 'Payas için teknik servis garantiniz nedir?',
                    'a' => 'Kurduğumuz tüm ürünler 2 yıl resmi garantilidir; ayrıca montaj işçiliğimiz için 2 yıl teknik servis garantisi veriyoruz.',
                ],
            ],
        ],
        'antakya' => [
            'name' => 'Antakya',
            'title' => 'Antakya Güvenlik Kamerası Satış & Montajı | Boztech Bilişim',
            'slug' => 'antakya',
            'meta_desc' => 'Antakya güvenlik kamerası kurulumu ve satışı. 2, 4, 8 kameralı setler, AHD ve IP kamera sistemleri, yerinde keşif. Tel: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Prefabrik, konteyner yaşam alanları, yeni inşa edilen yapılar, iş yerleri ve apartmanlar için net gece görüşlü kamera setleri.',
            'faq' => [
                [
                    'q' => 'Antakya\'da konteyner kent ve prefabrik işletmelere kurulum yapıyor musunuz?',
                    'a' => 'Evet, Antakya\'daki prefabrik ofisler, konteyner alanları ve yeni yerleşim bölgelerine hızlı kamera montajı sağlıyoruz.',
                ],
                [
                    'q' => 'Antakya merkezine montaj ekibiniz geliyor mu?',
                    'a' => 'Evet, Antakya ve Defne bölgesine haftalık düzenli gezici servis aracımızla keşif ve montaj hizmeti veriyoruz.',
                ],
            ],
        ],
        'defne' => [
            'name' => 'Defne',
            'title' => 'Defne Güvenlik Kamerası Montaj & Bakım Servisi | Boztech',
            'slug' => 'defne',
            'meta_desc' => 'Defne ilçesinde güvenlik kamerası satışı ve profesyonel montaj. Cep telefonundan canlı izleme, 2 yıl garanti ve hızlı servis: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Müstakil evler, işletmeler ve bahçe güvenlikleri için ekonomik ve uzun ömürlü kamera paketleri.',
            'faq' => [
                [
                    'q' => 'Defne\'de ev ve iş yeri için kaç kameralı set önerirsiniz?',
                    'a' => 'Standart bir daire veya küçük dükkan için 2-4 kameralı setler yeterli olurken, müstakil bahçeli evler için 4-8 kameralı setler idealdir.',
                ],
            ],
        ],
        'samandag' => [
            'name' => 'Samandağ',
            'title' => 'Samandağ Güvenlik Kamerası Kurulumu & Satışı | Boztech',
            'slug' => 'samandag',
            'meta_desc' => 'Samandağ ve sahil bölgesinde nem ve dış ortama dayanıklı güvenlik kamera sistemleri. Yerinde keşif ve garantili montaj: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Dış ortam, yazlıklar, seralar ve tarım arazileri için korozyona dayanıklı IP ve Solar kamera sistemleri.',
            'faq' => [
                [
                    'q' => 'Samandağ sahil şeridinde korozyona dayanıklı kameralarınız var mı?',
                    'a' => 'Evet, tuzlu deniz rüzgarına ve yoğun neme dayanıklı IP67 koruma sınıfına sahip kameralar kullanıyoruz.',
                ],
            ],
        ],
        'kirikhan' => [
            'name' => 'Kırıkhan',
            'title' => 'Kırıkhan Güvenlik Kamera Sistemleri & Montaj | Boztech',
            'slug' => 'kirikhan',
            'meta_desc' => 'Kırıkhan güvenlik kamerası satışı, arıza servisi ve anahtar teslim kurulum. En uygun fiyatlı kamera setleri. Tel: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Çiftlikler, depolar, dükkanlar ve evler için gece görüşlü güvenilir kamera sistemleri.',
            'faq' => [
                [
                    'q' => 'Kırıkhan çiftlik ve arazilere kurulum yapıyor musunuz?',
                    'a' => 'Evet, geniş arazi ve çiftlikler için kablosuz köprüleme veya güneş enerjili sistemlerle anahtar teslim kurulum yapıyoruz.',
                ],
            ],
        ],
        'arsuz' => [
            'name' => 'Arsuz',
            'title' => 'Arsuz Güvenlik Kamerası Satış & Montaj | Boztech',
            'slug' => 'arsuz',
            'meta_desc' => 'Arsuz villaları, siteleri ve işletmeleri için uzaktan izlemeli güvenlik kameraları. Su ve nem korumalı profesyonel sistemler: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Yazlık villalar, butik oteller ve siteler için uzaktan cep telefonu ile anlık bildirimli akıllı kameralar.',
            'faq' => [
                [
                    'q' => 'Kışın evde olmadığımda Arsuz\'daki yazlığımı izleyebilir miyim?',
                    'a' => 'Evet, cep telefonunuza kuracağımız uygulama ile Türkiye\'nin ve dünyanın her yerinden 7/24 canlı ve geçmiş kayıtları izleyebilirsiniz.',
                ],
            ],
        ],
        'belen' => [
            'name' => 'Belen',
            'title' => 'Belen Güvenlik Kamerası Kurulumu & Fiyatları | Boztech',
            'slug' => 'belen',
            'meta_desc' => 'Belen güvenlik kamerası montajı ve satışı. Hızlı teknik servis, şeffaf fiyatlandırma ve garantili işçilik. Hemen arayın: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Yayla evleri, yol kenarı işletmeler ve konutlar için zorlu hava şartlarına dayanıklı kamera sistemleri.',
            'faq' => [
                [
                    'q' => 'Belen yaylasındaki soğuk ve rüzgarlı havalara kameralar dayanır mı?',
                    'a' => 'Kameralarımız -30°C ile +60°C arası aşırı hava koşullarına dayanıklı endüstriyel dış mekan modelleridir.',
                ],
            ],
        ],
        'reyhanli' => [
            'name' => 'Reyhanlı',
            'title' => 'Reyhanlı Güvenlik Kamera Sistemleri & Montajı | Boztech',
            'slug' => 'reyhanli',
            'meta_desc' => 'Reyhanlı güvenlik kamerası satışı ve profesyonel kurulum. Uzaktan cep telefonu takibi, 2 yıl garanti: 0545 565 85 83.',
            'phone' => '0545 565 85 83',
            'popular_for' => 'Tarım arazileri, ticarethaneler ve evler için 7/24 kayıt yapan gece görüşlü sistemler.',
            'faq' => [
                [
                    'q' => 'Reyhanlı\'ya montaj için servisiniz var mı?',
                    'a' => 'Evet, randevulu olarak tüm ekipmanlarımız ve yedek parçalarımızla Reyhanlı adresinize gelerek kurulumu tamamlıyoruz.',
                ],
            ],
        ],
    ],

    'installation_fees' => [
        [
            'title' => 'Kamera Başı Standart Montaj Bedeli',
            'price' => '450 ₺ / Adet',
            'desc' => 'Mevcut veya yeni alınan kameranın fiziki montajı, kablo sonlandırma ve açı ayarı.',
        ],
        [
            'title' => 'Kayıt Cihazı (DVR / NVR) & Disk Kurulumu',
            'price' => '650 ₺',
            'desc' => 'Kayıt cihazı yazılım yapılandırması, disk formatlama, kayıt planı oluşturma.',
        ],
        [
            'title' => 'Cep Telefonundan Canlı İzleme Ayarı',
            'price' => 'Ücretsiz (Paketlerimizde Dahil)',
            'desc' => 'Kullanıcı cep telefonlarına (iOS / Android) uygulama kurulumu, modem port / P2P bağlantısı.',
        ],
        [
            'title' => 'Kablo Çekimi & Kanal / Borulama (Metre Başı)',
            'price' => '35 ₺ / Metre',
            'desc' => 'Kanal içi estetik kablolama ve dış cephe korumalı kablo çekimi.',
        ],
        [
            'title' => 'Hatay İçi Yerinde Ücretsiz Keşif',
            'price' => '0 ₺ (Ücretsiz)',
            'desc' => 'Mekanınızda kör nokta tespiti, en doğru kamera sayısı ve kablo güzergahı projelendirmesi.',
        ],
        [
            'title' => 'Arıza Tespiti & Servis Bedeli',
            'price' => '500 ₺',
            'desc' => 'Mevcut eski kamera sisteminizdeki arıza tespiti, adaptör veya bağlantı onarımı.',
        ],
    ],

    'general_faqs' => [
        [
            'q' => 'Kamera sistemi kurulduktan sonra telefondan izlemek için ekstra ücret ödenir mi?',
            'a' => 'Hayır, kesinlikle ödenmez. Cep telefonu uygulaması (iOS ve Android) tamamen ücretsizdir ve ömür boyu aylık/yıllık abonelik ücreti olmadan kullanılabilir.',
        ],
        [
            'q' => 'Elektrik kesildiğinde güvenlik kameraları kayda devam eder mi?',
            'a' => 'Sistemlerimize ilave edilecek bir kesintisiz güç kaynağı (UPS) ile elektrik kesilse dahi kameralarınız ve kayıt cihazınız saatlerce kayda kesintisiz devam edebilir.',
        ],
        [
            'q' => 'Hatay\'ın tüm ilçelerine aynı gün ücretsiz keşif yapıyor musunuz?',
            'a' => 'Evet, Hatay Dörtyol merkezli gezici teknik ekibimizle İskenderun, Payas, Erzin, Antakya, Defne, Arsuz ve diğer tüm ilçelere aynı gün içerisinde yerinde ücretsiz keşif hizmeti sunuyoruz.',
        ],
        [
            'q' => 'Kamera kayıtları geriye dönük kaç gün saklanır?',
            'a' => 'Seçilen güvenlik harddiski kapasitesine (1TB, 2TB, 4TB) ve kamera sayısına göre kayıt süresi standart olarak 15 ile 45 gün arasında saklanmaktadır. Disk dolduğunda eski kayıtların üzerine otomatik olarak yazar.',
        ],
        [
            'q' => 'Ürünler ve montaj garantisi ne kadardır?',
            'a' => 'Kullandığımız tüm kameralar, kayıt cihazları ve donanımlar 2 yıl resmi distribütör garantilidir. Ayrıca Boztech Bilişim olarak montaj ve işçiliğimize de 2 yıl yerinde teknik servis garantisi vermekteyiz.',
        ],
    ],
];
