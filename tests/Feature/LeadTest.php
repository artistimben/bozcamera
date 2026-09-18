<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test submitting a lead form stores the record and redirects to thank you page.
     */
    public function test_lead_form_submission_success(): void
    {
        $payload = [
            'name' => 'Kemal Arslan',
            'phone' => '05521234567',
            'district' => 'İskenderun',
            'property_type' => 'İşyeri / Dükkan',
            'camera_count' => '4 Kamera',
            'source' => 'google_ads_hero_form',
        ];

        $response = $this->post('/teklif-al', $payload);

        $response->assertRedirect('/tesekkurler');
        $this->assertDatabaseHas('leads', [
            'name' => 'Kemal Arslan',
            'phone' => '05521234567',
            'district' => 'İskenderun',
            'status' => 'new',
        ]);
    }

    /**
     * Test ajax lead submission returns json.
     */
    public function test_ajax_lead_submission_returns_json(): void
    {
        $payload = [
            'phone' => '05529998877',
            'name' => 'Ali Demir',
            'district' => 'Antakya',
        ];

        $response = $this->postJson('/teklif-al', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
        $this->assertDatabaseHas('leads', [
            'phone' => '05529998877',
            'name' => 'Ali Demir',
        ]);
    }

    /**
     * Test logging call click event.
     */
    public function test_logging_call_click_event(): void
    {
        $response = $this->postJson('/api/call-click', [
            'phone' => config('camera_site.phone'),
            'district' => 'Samandağ',
            'source' => 'mobile_sticky_bar',
        ]);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);
        $this->assertDatabaseHas('leads', [
            'district' => 'Samandağ',
            'source' => 'mobile_sticky_bar',
        ]);
    }

    /**
     * Test lead validation fails without phone number.
     */
    public function test_lead_requires_phone(): void
    {
        $response = $this->post('/teklif-al', [
            'name' => 'İsim Var Ama Telefon Yok',
        ]);

        $response->assertSessionHasErrors(['phone']);
    }
}
