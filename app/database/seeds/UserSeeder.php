// app/database/seeds/CustomerTableSeeder.php

<?php

class UserSeeder extends Seeder
{

public function run()
{
    User::create(array(

    	'name'	=> 'Alexander Olly',
    	'address' => 'Melbourne, Australia',
    	'bday' => '03-18-1996',
    	'contact_no'=> '09058593592',
    	'username'    => 'alexander90',
        'password' => Hash::make('awesome'),
    ));
}

}