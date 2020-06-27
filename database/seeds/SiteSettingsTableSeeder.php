<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\SiteSettings;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sedding Start Here
        DB::table('site_settings')->insert([
            'id' => '1',
            'site_phnNumber' => '01722476360',
            'site_mail' => 'crescendosolutionbd@gmail.com',
            'site_address' => 'H#20 (3rd floor), R#09, S#11, Uttara, Dhaka-1230, Bangladesh.',
            'site_shortDescription' => Str::random(25),
            'site_fbLink' => 'https://www.facebook.com/groups/crescendosolution/',
            'site_ytLink' => 'https://www.youtube.com/channel/UCEbJOmtsspQtAxIlb43aC9g',

        ]);
    }
}
