<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tiekejai;
class TiekejaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiekejai::create([
            
            'tiekejai' => 'UAB_Batai',
        ]);
        Tiekejai::create([
         
            'tiekejai' => 'UAB_Langai',
        ]);
        Tiekejai::create([
        
            'tiekejai' => 'UAB_Duris',
        ]);
        Tiekejai::create([
      
            'tiekejai' => 'UAB_Striukes',
        ]);
        Tiekejai::create([
        
            'tiekejai' => 'UAB_Stalai',
        ]);
    }
}
