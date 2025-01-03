<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['АСТ', 'Oxford University Press', 'Эксмо'] as $obj) {
            Publisher::create(['name' => $obj]);
        }
    }
}
