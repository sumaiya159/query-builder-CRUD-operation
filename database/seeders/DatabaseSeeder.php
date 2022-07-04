<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
          CategorySeeder::class, 
       
        ]);

        
    }
}
