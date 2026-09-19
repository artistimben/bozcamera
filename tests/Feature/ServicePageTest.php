<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServicePageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test IP Camera landing page renders with correct content and schema.
     */
    public function test_ip_camera_page_renders(): void
    {
        $this->seed();

        $response = $this->get('/ip-kamera-sistemleri');

        $response->assertStatus(200);
        $response->assertSee('IP & PoE');
        $response->assertSee('4K / 5MP Ultra HD');
        $response->assertSee(config('camera_site.phone'));
    }

    /**
     * Test Solar Camera landing page renders with correct content.
     */
    public function test_solar_camera_page_renders(): void
    {
        $this->seed();

        $response = $this->get('/solar-kamera-sistemleri');

        $response->assertStatus(200);
        $response->assertSee('Solar');
        $response->assertSee('Güneş Enerjili');
        $response->assertSee(config('camera_site.phone'));
    }

    /**
     * Test Installation service landing page renders with correct content.
     */
    public function test_installation_service_page_renders(): void
    {
        $this->seed();

        $response = $this->get('/guvenlik-kamerasi-montaji');

        $response->assertStatus(200);
        $response->assertSee('Montajı');
        $response->assertSee(config('camera_site.phone'));
    }

    /**
     * Test sitemap includes service and district pages.
     */
    public function test_sitemap_xml_contains_services_and_districts(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
        $response->assertSee('/ip-kamera-sistemleri');
        $response->assertSee('/solar-kamera-sistemleri');
        $response->assertSee('/guvenlik-kamerasi-montaji');
        $response->assertSee('/dortyol-guvenlik-kamerasi');
        $response->assertSee('/iskenderun-guvenlik-kamerasi');
    }
}
