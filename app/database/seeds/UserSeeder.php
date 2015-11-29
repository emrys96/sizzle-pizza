// app/database/seeds/CustomerTableSeeder.php

<?php

class UserSeeder extends Seeder
{


	public function run()
{
    $users = [
            [
                'name'	=> 'Alexander Olly',
		    	'address' => 'Melbourne, Australia',
		    	'bday' => '03-18-1996',
		    	'contact_no'=> '09058593592',
		    	'username'    => 'alexander90',
		        'password' => Hash::make('awesome'),
		        'role' => 'admin'	
            ],
            [
                'name'	=> 'Justin Bieber',
		    	'address' => 'Stratford, Ontario, Canada',
		    	'bday' => '03-01-1994',
		    	'contact_no'=> '09058593592',
		    	'username'    => 'kidrauhl',
		        'password' => Hash::make('jelena'),
		        'role' => 'customer'	
            ],
            [
                'name'	=> 'Gabrielle Luna',
		    	'address' => 'Maranding, Lala, Lanao del Norte',
		    	'bday' => '03-18-1996',
		    	'contact_no'=> '09058593592',
		    	'username'    => 'gaboluna96',
		        'password' => Hash::make('keeperoflight'),
		        'role' => 'cashier'	
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
}

}