<?php

use App\User;
use App\Website;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin1@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'email_verified_at'=>'1',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '3',
            'dob' => '21-3-1998',
            'course' => 'Guitar',
            'email_verified_at'=>'1',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);
        User::create([
            'fname' => 'Student',
            'lname' => 'Student',
            'email' => 'student@gmail.com',
            'role' => '1',
            'dob' => '21-3-1998',
            'email_verified_at'=>'1',
            'course' => 'Guitar',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);
        User::create([
            'fname' => 'Coach',
            'lname' => 'Coach',
            'email' => 'coach@gmail.com',
            'role' => '2',
            'phone' => '00000000',
            'dob' => '21-3-1998',
            'course' => 'Guitar',
            'email_verified_at'=>'1',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);

        Website::create([
            'logo' => 'music/logo.jpeg',
            'sitename' => 'Ejay Studio',
            'phone' => '1.800.321.9876',
            'email' => 'info@westindescare.com',
            'address' => '70 Greenview Ave. Temple Hills MD 20748, USA',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'time' => 'Mon to Friday',
            'footer_text' => 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'footer_logo' => 'front/images/bg/footer.png',

            'simage1' => 'front/images/1.jpg',
            'simage2' => 'front/images/1.jpg',
            'simage3' => 'front/images/1.jpg',

            'mission' => ' Des nutriments appropri??s, une alimentation ??quilibr??e et des options ajout??es ?? votre style de vie, vous permettront d\'optimiser cet ensemble afin de repartir sur de nouvelles bases.',
            'mimage1' => 'front/images/bg/2.jpg',
            'mimage2' => 'front/images/bg/3.jpg',
            'mtitle1' => 'West Indies Care',
            'mtitle2' => 'Specialement Pourlestherapeutes',

            'video' => 'https://player.vimeo.com/video/23534361',
            'vimage' => 'front/images/home_02/s2.jpg',

            'about' => 'Nous vous aidons ?? d??velopper pour vous-m??me un style de vie sain, des habitudes di??t??tiques et un r??gime alimentaire qui vont de pair avec ces besoins.
                        Nous vous aidons ?? d??velopper pour vous-m??me un style de vie sain, des habitudes di??t??tiques et un r??gime alimentaire qui vont de pair avec ces besoins.',
            'aboutimage' => 'front/images/home_01/1.jpg',
        ]);
    }
}
