<?php

use App\City;
use App\Country;
use App\District;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country01      = Country::create(['name'=>'Jordan']);
        $city011        = City::create(['name'=>'Amman' , 'country_id'=>$country01->id]);
        $distnict0111    = District::create(['name'=>'Abu Essoos','country_id'=>$country01->id, 'city_id'=>$city011->id]);
        $distnict0112    = District::create(['name'=>'Abu Hlaileefah','country_id'=>$country01->id, 'city_id'=>$city011->id]);
        $distnict0113    = District::create(['name'=>'Khalda','country_id'=>$country01->id, 'city_id'=>$city011->id]);
        $distnict0114   = District::create(['name'=>'Marka','country_id'=>$country01->id, 'city_id'=>$city011->id]);

        $city012        = City::create(['name'=>'Balqa' , 'country_id'=>$country01->id]);
        $distnict0121    = District::create(['name'=>'Zayy','country_id'=>$country01->id, 'city_id'=>$city012->id]);
        $distnict0122    = District::create(['name'=>'Safut','country_id'=>$country01->id, 'city_id'=>$city012->id]);
        $distnict0123    = District::create(['name'=>'As-salt','country_id'=>$country01->id, 'city_id'=>$city012->id]);
        $distnict0124    = District::create(['name'=>'Allan','country_id'=>$country01->id, 'city_id'=>$city012->id]);

        $city013        = City::create(['name'=>'Irbid' , 'country_id'=>$country01->id]);
        $distnict0131    = District::create(['name'=>'Al\'al','country_id'=>$country01->id, 'city_id'=>$city013->id]);
        $distnict0132    = District::create(['name'=>'Alshah','country_id'=>$country01->id, 'city_id'=>$city013->id]);
        $distnict0133    = District::create(['name'=>'Yarmook','country_id'=>$country01->id, 'city_id'=>$city013->id]);
        $distnict0134    = District::create(['name'=>'Marzeh','country_id'=>$country01->id, 'city_id'=>$city013->id]);



        $country02      = Country::create(['name'=>'Palestine']);
        $city021        = City::create(['name'=>'Qalqilya' , 'country_id'=>$country02->id]);
        $distnict0211    = District::create(['name'=>'Souq Shaheen','country_id'=>$country02->id, 'city_id'=>$city021->id]);
        $distnict0212    = District::create(['name'=>'Souq Abu Amsha','country_id'=>$country02->id, 'city_id'=>$city021->id]);
        $distnict0213    = District::create(['name'=>'Souq Beshara ','country_id'=>$country02->id, 'city_id'=>$city021->id]);
        $distnict0214    = District::create(['name'=>'Souq Shawer','country_id'=>$country02->id, 'city_id'=>$city021->id]);

        $city022        = City::create(['name'=>'Nablus' , 'country_id'=>$country02->id]);
        $distnict0221    = District::create(['name'=>'Nahiya Jabal Sami','country_id'=>$country02->id, 'city_id'=>$city022->id]);
        $distnict0222    = District::create(['name'=>'Nahiya Jabal Qubal','country_id'=>$country02->id, 'city_id'=>$city022->id]);
        $distnict0223    = District::create(['name'=>'As-Nahiya Qaqun','country_id'=>$country02->id, 'city_id'=>$city022->id]);
        $distnict0224    = District::create(['name'=>'Nahiya Bani Sa\'b','country_id'=>$country02->id, 'city_id'=>$city022->id]);

        $city023        = City::create(['name'=>'Jenin' , 'country_id'=>$country02->id]);
        $distnict0231    = District::create(['name'=>'Ajjah','country_id'=>$country02->id, 'city_id'=>$city023->id]);
        $distnict0232    = District::create(['name'=>'Burqin','country_id'=>$country02->id, 'city_id'=>$city023->id]);
        $distnict0233    = District::create(['name'=>'Jaba','country_id'=>$country02->id, 'city_id'=>$city023->id]);
        $distnict0234    = District::create(['name'=>'Meithalun','country_id'=>$country02->id, 'city_id'=>$city023->id]);

    }
}
