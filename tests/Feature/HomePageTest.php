<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the main Google Ads landing page renders successfully with required elements.
     */
    public function test_home_page_renders_with_pricing_and_call_ctas(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Boztech Bilişim');
        $response->assertSee('Dörtyol');
        $response->assertSee(config('camera_site.phone'));
        $response->assertDontSee('0545 565 85 89');
        $response->assertSee('HEMEN ARA');
        $response->assertSee('Kamera Setleri');
        $response->assertSee('SecuritySystemInstaller');
        $response->assertSee('google.com/maps/embed');
        $response->assertSee('camera-hero.webp');
    }

    /**
     * Test sitemap.xml returns valid xml.
     */
    public function test_sitemap_returns_valid_xml(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
        $response->assertSee('iskenderun-guvenlik-kamerasi');
        $response->assertSee('antakya-guvenlik-kamerasi');
    }

    /**
     * Test thank you page renders properly.
     */
    public function test_thank_you_page_renders(): void
    {
        $response = $this->get('/tesekkurler');

        $response->assertStatus(200);
        $response->assertSee('Teşekkür Ederiz');
        $response->assertSee(config('camera_site.phone'));
    }
}
