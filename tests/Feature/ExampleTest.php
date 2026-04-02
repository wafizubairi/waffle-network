<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_contact_validation_keys_match_new_input_names(): void
    {
        $response = $this->post(route('contact.send'), [
            'name' => 'A',
            'email' => 'invalid-email',
            'phone' => '123456',
            'service' => '',
            'message' => 'short',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'service', 'message']);
    }

    public function test_locale_route_sets_language_session(): void
    {
        $response = $this->get(route('lang.swap', 'ms'));

        $response->assertRedirect();
        $this->assertEquals('ms', session('app_locale'));
    }
}
