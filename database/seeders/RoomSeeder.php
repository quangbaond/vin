<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::query()->create([
            'name' => 'Sơ cấp',
            'open_time' => '08:00:00',
            'close_time' => '22:00:00',
        ]);

        Room::query()->create([
            'name' => 'Trung cấp',
            'open_time' => '08:00:00',
            'close_time' => '22:00:00',
        ]);

        Room::query()->create([
            'name' => 'Cao cấp',
            'open_time' => '08:00:00',
            'close_time' => '22:00:00',
        ]);

        Room::query()->create([
            'name' => 'Vip',
            'open_time' => '08:00:00',
            'close_time' => '22:00:00',
        ]);
    }
}
