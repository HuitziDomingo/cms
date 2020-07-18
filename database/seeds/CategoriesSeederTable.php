<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['user_id' => '1',
            'name' => 'Laravel',
            'slug' => 'laravel',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],

            ['user_id' => '1',
            'name' => 'Sinatra',
            'slug' => 'sinatra',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],

            ['user_id' => '1',
            'name' => 'OnRails',
            'slug' => 'onrails',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],

            ['user_id' => '1',
            'name' => 'Django',
            'slug' => 'django',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],

            ['user_id' => '1',
            'name' => 'Flask',
            'slug' => 'flask',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
        ]);
    }
}
