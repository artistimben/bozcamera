<?php

namespace Tests\Feature;

use App\Models\CameraPackage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PackageAdminTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test admin package index page renders successfully.
     */
    public function test_admin_package_index_renders(): void
    {
        $this->seed();

        $response = $this->get(route('admin.packages.index'));

        $response->assertStatus(200);
        $response->assertSee('Kamera Paket');
        $response->assertSee('Fiyat Güncelleme');
        $response->assertSee('2 Kameralı Full HD Ev &amp; Ofis Seti', false);
    }

    /**
     * Test updating package prices works and reflects on the homepage.
     */
    public function test_package_price_can_be_updated_and_shown_on_home(): void
    {
        $this->seed();

        $package = CameraPackage::where('slug', '2-kamerali-ev-ofis-seti')->firstOrFail();

        $response = $this->patch(route('admin.packages.update', $package), [
            'equipment_price' => 6000,
            'installation_price' => 1800,
            'total_price' => 7800,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('camera_packages', [
            'id' => $package->id,
            'total_price' => 7800,
            'equipment_price' => 6000,
            'installation_price' => 1800,
        ]);

        // Verify updated price is shown on home page
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('7.800 ₺');
    }
}
