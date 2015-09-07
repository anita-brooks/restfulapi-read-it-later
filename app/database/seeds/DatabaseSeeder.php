<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('users')->delete();
        
        User::create(array(
            'username' => 'userOne',
            'password' => Hash::make('root')
        ));
        
        USer::create(array(
            'username' => 'userTwo',
            'password' => Hash::make('root')
        ));
    
    }
}