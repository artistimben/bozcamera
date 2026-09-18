<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DistrictSeoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test localized landing page for Iskenderun.
     */
    public function test_iskenderun_district_page_renders_with_seo_data(): void
    {
        $this->seed();

        $response = $this->get('/iskenderun-guvenlik-kamerasi');

        $response->assertStatus(200);
        $response->assertSee('İskenderun');
        $response->assertSee('İskenderun Güvenlik Kamera Sistemleri');
        $response->assertSee('İskenderun Hızlı Teklif Formu');
        $response->assertSee(config('camera_site.phone'));
    }

    /**
     * Test localized landing page for Antakya.
     */
    public function test_antakya_district_page_renders(): void
    {
        $this->seed();

        $response = $this->get('/antakya-guvenlik-kamerasi');

        $response->assertStatus(200);
        $response->assertSee('Antakya');
        $response->assertSee('Antakya Güvenlik Kamerası Satış & Montajı');
    }

    /**
     * Test invalid district redirects to home.
     */
    public function test_invalid_district_redirects_to_home(): void
    {
        $response = $this->get('/bilinmeyen-bolge-guvenlik-kamerasi');

        $response->assertRedirect('/');
    }
}
