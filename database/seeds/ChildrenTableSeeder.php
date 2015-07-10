<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('children')->delete();

        $children = array(
            ['id' => 1, 'lastname' => 'Morocho', 'firstname' => 'Nathan','slug' => 'NathanMorocho', 'dob' => new DateTime('05/04/2012'), 'childid' => '20741', 'servicestartdate' => new DateTime('05/04/2014'), 'serviceenddate' => new DateTime('05/04/2016'), 'servicecoordinatorname' => 'Kathleen Hinistroza', 'parentcaregivername' => 'Sonia Meza',  'address' => '735 W 172nd St, New York, NY','zipcode' => '10032', 'phone' => '9173456789', 'frequency' => '2x30', 'document' => '','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'lastname' => 'Diaz', 'firstname' => 'Justin','slug' => 'JustinDiaz', 'dob' => new DateTime('05/04/2012'), 'childid' => '20741', 'servicestartdate' => new DateTime('05/04/2014'), 'serviceenddate' => new DateTime('05/04/2016'), 'servicecoordinatorname' => 'Kathleen Hinistroza', 'parentcaregivername' => 'Teresa Diaz',  'address' => '4395 Broadway APT 1D, New York, NY 10040','zipcode' => '10032', 'phone' => '9171234567', 'frequency' => '2x30', 'document' => '','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'lastname' => 'Rivera', 'firstname' => 'Isabella','slug' => 'IsabellaRivera', 'dob' => new DateTime('01/04/2012'), 'childid' => '20741', 'servicestartdate' => new DateTime('01/04/2014'), 'serviceenddate' => new DateTime('01/04/2016'), 'servicecoordinatorname' => 'Dileydy Hiches', 'parentcaregivername' => 'Sandra Castro',  'address' => '790 Riverside Dr APT 1F, New York, NY','zipcode' => '10032', 'phone' => '9173456789', 'frequency' => '2x30', 'document' => '','created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('children')->insert($children);
    }

}
