<?php

namespace Tests\Feature\Controllers\Http;

use Tests\TestCase;
use App\Models\Zipcode;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ZipcodeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_zipcode()
    {
        $zipcode = Zipcode::factory()->create();
        
        $this->get("api/zip-codes/$zipcode->zip_code")
            ->assertStatus(200);
    }
}
