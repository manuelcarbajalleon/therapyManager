<?php

use Illuminate\Database\Seeder;

class TherapistsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('therapists')->delete();

        $therapists = array(
            'id' => 1, 'lastname' => 'Diaz', 'firstname' => 'Alicia','slug' => 'AliciaDiaz', 'address' => '255 Chestnut St. Kearny, NJ','zipcode' => '07032', 'phone' => '9172504992', 'created_at' => new DateTime, 'updated_at' => new DateTime
        );

        // Uncomment the below to run the seeder
        DB::table('therapists')->insert($therapists);
    }

}
