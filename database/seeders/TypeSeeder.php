<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__.'/csv/types.csv', 'r');
        $isFirstRow = true;
        while(!feof($file)) {
            $type = fgetcsv($file);
            if (!$isFirstRow) {
                $new_type = new Type();
                $new_type->name = $type[0];
                $new_type->image = $type[1];
                $new_type->description = $type[2];
                $new_type->slug = Type::createSlug($new_type->name);

                $new_type->save();
            }
            $isFirstRow = false;
        }
    }
}
