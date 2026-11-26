<?php

namespace Tests\Feature;

use App\Models\AuditRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CorporatePagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_displays_the_service_directory_and_audit_form(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Modern Web &amp; SaaS Development', false)
            ->assertSee('Autonomous AI Assistants &amp; Workflows', false)
            ->assertSee('Custom Enterprise ERPs &amp; Core Engines', false)
            ->assertSee('Managed Technical Operations')
            ->assertSee('name="email"', false)
            ->assertSee('name="_token"', false);
    }

    public function test_modules_page_and_supported_solution_pages_render(): void
    {
        $this->get('/modules')
            ->assertOk()
            ->assertSee('Live terminal')
            ->assertSee('Technical Virtual Assistants');

        $this->get('/solutions/ai-workflows')
            ->assertOk()
            ->assertSee('Autonomous AI Assistants &amp; Workflows', false);
    }

    public function test_unknown_solution_returns_not_found(): void
    {
        $this->get('/solutions/not-a-service')->assertNotFound();
    }

    public function test_audit_request_is_validated_and_persisted(): void
    {
        $response = $this->post('/audit-request', [
            'name' => 'Avery Example',
            'email' => 'avery@example.com',
            'company' => 'Example Co',
            'tech_stack' => 'Laravel',
            'need' => 'ai',
            'budget' => '10k-25k',
        ]);

        $response->assertRedirect(route('home').'#audit-request')
            ->assertSessionHas('status');

        $this->assertDatabaseHas('audit_requests', [
            'email' => 'avery@example.com',
            'company' => 'Example Co',
            'need' => 'ai',
        ]);
        $this->assertSame(1, AuditRequest::count());
    }

    public function test_invalid_audit_request_is_not_persisted(): void
    {
        $this->from('/#audit-request')->post('/audit-request', [
            'name' => '',
            'email' => 'not-an-email',
            'company' => 'Example Co',
            'tech_stack' => 'Laravel',
            'need' => 'other',
            'budget' => '10k-25k',
        ])->assertRedirect('/#audit-request')
            ->assertSessionHasErrors(['name', 'email', 'need']);

        $this->assertDatabaseCount('audit_requests', 0);
    }
}
