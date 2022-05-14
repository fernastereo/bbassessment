<?php

namespace Tests\Unit\Models;

use App\Models\Federal_entity;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MunicipalityTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_has_many_zipcodes()
    {
        $municipality = new Municipality();
        $this->assertInstanceOf(Collection::class, $municipality->zipcodes);
    }

    public function test_belongs_to_federal_entity()
    {
        $municipality = Municipality::factory()->create();
        $this->assertInstanceOf(Federal_entity::class, $municipality->federal_entity);
    }
}
