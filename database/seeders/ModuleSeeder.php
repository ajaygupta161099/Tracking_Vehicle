<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

    $data = [
            ['module_name' => 'Tracking',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'Account',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'Booking',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'Maintenance',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'HRM',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'Inventory',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],

            ['module_name' => 'Settlement',
            'url' => 'https://www.ksspl.co.in/',
            'status' => 1,
            ],
        ];

        foreach ($data as $moduleData) {

            $Module = Module::updateOrCreate(['module_name' => $moduleData['module_name']], $moduleData);
        }

        return response()->json(['message' => 'Modules created successfully']);
    }
    }

