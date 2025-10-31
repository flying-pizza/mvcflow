<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item; 

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::factory()->count(10)->create(); 
    }
}