<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class BranchsMapTest extends TestCase
{

    public function testWithoutData(){

        $user = User::find(40);

        $response = $this->actingAs($user)->json('GET', "api/branchs/map", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' 
            ]);
    }

    public function testSuccess(){

        $user = User::find(4);

        $response = $this->actingAs($user)->json('GET', "api/branchs/map", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'latitude',
                        'longitude',
                        'sold'
                    ]
                ]
            ]);
    }
}
