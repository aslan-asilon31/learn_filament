<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $records = [
      [
        'id' => str('Developer1')->slug('_'),
        'name' => 'Developer1',
        'created_by' => 'system',
        'updated_by' => 'system',
        'created_at' => now(),
        'updated_at' => now(),
        'is_activated' => true,
      ],
      [
        'id' => str('Admin1')->slug('_'),
        'name' => 'Admin1',
        'created_by' => 'system',
        'updated_by' => 'system',
        'created_at' => now(),
        'updated_at' => now(),
        'is_activated' => true,
      ],
    ];

    Position::insert($records);
  }
}
