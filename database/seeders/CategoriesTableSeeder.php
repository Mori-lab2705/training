<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '胸', '背中', '肩', '腕(上腕三頭筋)', '腕(上腕二頭筋)', 'お腹',
            'お尻・もも裏', 'もも前', 'ふくらはぎ'
        ];

        $chest_categories = [
            '大胸筋上部', '大胸筋中部', '大胸筋下部'
        ];

        $back_categories =[
            '広背筋', '僧帽筋', '脊柱起立筋'
        ];

        $shoulder_categories = [
            '三角筋前部', '三角筋中部', '三角筋後部',
        ];

        $arm3_categories = [
            '長頭', '外側頭・内側頭',
        ];

        $arm2_categories = [
            '長頭', '短頭',
        ];

        $ab_categories = [
            '腹直筋', '腹斜筋',
        ];

        $hip_categories = [
            '大臀筋・大腿二頭筋',
        ];

        $frontleg_categories = [
            '大腿四頭筋',
        ];

        $calf_categories = [
            '腓腹筋', 'ヒラメ筋',
        ];

        foreach ($major_category_names as $major_category_name) {
            if($major_category_name == '胸') {
                foreach ($chest_categories as $chest_category){
                    Category::create([
                        'name' => $chest_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '背中') {
                foreach ($back_categories as $back_category) {
                    Category::create([
                        'name' => $back_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '肩') {
                foreach ($shoulder_categories as $shoulder_category) {
                    Category::create([
                        'name' => $shoulder_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '腕(上腕三頭筋)') {
                foreach ($arm3_categories as $arm3_category) {
                    Category::create([
                        'name' => $arm3_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '腕(上腕二頭筋)') {
                foreach ($arm2_categories as $arm2_category) {
                    Category::create([
                        'name' => $arm2_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'お腹') {
                foreach ($ab_categories as $ab_category) {
                    Category::create([
                        'name' => $ab_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'お尻・もも裏') {
                foreach ($hip_categories as $hip_category) {
                    Category::create([
                        'name' => $hip_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'もも前') {
                foreach ($frontleg_categories as $frontleg_category) {
                    Category::create([
                        'name' => $frontleg_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'ふくらはぎ') {
                foreach ($calf_categories as $calf_category) {
                    Category::create([
                        'name' => $calf_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
    }
}
