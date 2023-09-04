<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class SalesTest extends TestCase
{

    public function testStoreWithoutRoamingSuccess(): void
    {
        $bodyRaw = [
            "value" => 1500,
            "latitude" => -16.785831,
            "longitude" => -49.354357,
        ];

        $user = User::find(40);

        $response = $this->actingAs($user)->withSession(['banned' => false])->json('POST', "api/sales", $bodyRaw, ['Accept' => 'application/json']);

        $response->assertStatus(201)
            ->assertJsonStructure([  
                'data' => [
                    'id',
                    'value',
                    'data_hora',
                    'latitude',
                    'longitude',
                    'seller' => [
                        'name'
                    ],
                    'branch' => [
                        'name',
                        'directorate'
                    ],
                    'roaming'
                ]
            ]);
    }

    public function testStoreWithRoamingSuccess(): void
    {
        $bodyRaw = [
            "value" => 2000,
            "latitude" => -15.603392,
            "longitude" => -56.077472,
        ];

        $user = User::find(40);

        $response = $this->actingAs($user)->withSession(['banned' => false])->json('POST', "api/sales", $bodyRaw, ['Accept' => 'application/json']);

        $response->assertStatus(201)
            ->assertJsonStructure([  
                'data' => [
                    'id',
                    'value',
                    'data_hora',
                    'latitude',
                    'longitude',
                    'seller' => [
                        'name'
                    ],
                    'branch' => [
                        'name',
                        'directorate'
                    ],
                    'roaming' => [
                        'name'
                    ]
                ]
            ]);
    }

    public function testStoreError(): void
    {
        $bodyRaw = [
            "value" => null,
            "latitude" => -15.603392,
            "longitude" => -56.077472,
        ];

        $user = User::find(40);

        $response = $this->actingAs($user)->withSession(['banned' => false])->json('POST', "api/sales", $bodyRaw, ['Accept' => 'application/json']);

        $response->assertStatus(422)
            ->assertJsonStructure([  
                'message',
                'errors' 
            ]);
    }

    public function testIndexByGeneralDirector(){

        $user = User::find(1);

        $response = $this->actingAs($user)->json('GET', "api/sales", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    '*' => [
                        'id',
                        'value',
                        'data_hora',
                        'latitude',
                        'longitude',
                        'seller' => [
                            'name'
                        ],
                        'branch' => [
                            'name',
                            'directorate'
                        ],
                        'roaming'
                    ],
                ]
            ]);
    }

    public function testIndexByCentroOesteDirector(){

        $user = User::find(4);

        $response = $this->actingAs($user)->json('GET', "api/sales", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    '*' => [
                        'id',
                        'value',
                        'data_hora',
                        'latitude',
                        'longitude',
                        'seller' => [
                            'name'
                        ],
                        'branch' => [
                            'name',
                            'directorate'
                        ],
                        'roaming'
                    ],
                ]
            ]);
    }

    public function testIndexByGoianiaManager(){

        $user = User::find(13);

        $response = $this->actingAs($user)->json('GET', "api/sales", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    '*' => [
                        'id',
                        'value',
                        'data_hora',
                        'latitude',
                        'longitude',
                        'seller' => [
                            'name'
                        ],
                        'branch' => [
                            'name',
                            'directorate'
                        ],
                        'roaming'
                    ],
                ]
            ]);
    }

    public function testIndexBySeller(){

        $user = User::find(40);

        $response = $this->actingAs($user)->json('GET', "api/sales", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    '*' => [
                        'id',
                        'value',
                        'data_hora',
                        'latitude',
                        'longitude',
                        'seller' => [
                            'name'
                        ],
                        'branch' => [
                            'name',
                            'directorate'
                        ],
                        'roaming'
                    ],
                ]
            ]);
    }

    public function testIndexWithoutData(){

        $user = User::find(41);

        $response = $this->actingAs($user)->json('GET', "api/sales", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' 
            ]);
    }

    public function testShowSuccess(){

        $user = User::find(40);

        $response = $this->actingAs($user)->json('GET', "api/sales/1", [], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonStructure([  
                'data' => [
                    'id',
                    'value',
                    'data_hora',
                    'latitude',
                    'longitude',
                    'seller' => [
                        'name'
                    ],
                    'branch' => [
                        'name',
                        'directorate'
                    ],
                    'roaming'
                ]
            ]);
    }
}
