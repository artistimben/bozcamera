<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadAdminTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test viewing the admin leads page.
     */
    public function test_can_view_leads_index(): void
    {
        Lead::create([
            'name' => 'Müşteri 1',
            'phone' => '05521112233',
            'district' => 'Antakya',
            'status' => 'new',
        ]);

        $response = $this->get('/yonetim/talepler');

        $response->assertStatus(200);
        $response->assertSee('Müşteri 1');
        $response->assertSee('05521112233');
    }

    /**
     * Test updating lead status.
     */
    public function test_can_update_lead_status(): void
    {
        $lead = Lead::create([
            'name' => 'Müşteri 2',
            'phone' => '05524445566',
            'district' => 'İskenderun',
            'status' => 'new',
        ]);

        $response = $this->patch("/yonetim/talepler/{$lead->id}", [
            'status' => 'contacted',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('leads', [
            'id' => $lead->id,
            'status' => 'contacted',
        ]);
    }

    /**
     * Test deleting a lead.
     */
    public function test_can_delete_lead(): void
    {
        $lead = Lead::create([
            'phone' => '05529990011',
            'district' => 'Defne',
        ]);

        $response = $this->delete("/yonetim/talepler/{$lead->id}");

        $response->assertRedirect();
        $this->assertDatabaseMissing('leads', [
            'id' => $lead->id,
        ]);
    }
}
