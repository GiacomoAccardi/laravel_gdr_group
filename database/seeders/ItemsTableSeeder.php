<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = config('items.items');

        foreach ($items as $item) {

            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->slug = $item['slug'];
            $new_item->category = $item['category'];
            $new_item->type = $item['type'];
            $new_item->weight = intval(str_replace('lb.', '', $item['weight']));
            $new_item->cost = $item['cost'];
            $new_item->dice = $item['damage_dice'];

            $new_item->save();
        }

    }
}