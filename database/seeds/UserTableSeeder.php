<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblAdmin')
			->delete();

		DB::table('tblAdmin')
			->insert([
				'strUsername'			=> 'djfable02',
				'strFirstName'			=> 'Jerald John',
				'strMiddleName'			=> 'Rifareal',
				'strLastName'			=> 'Pormon',
				'strPassword'			=> Hash::make('admin12345'),
				'strGender'				=> 'Male',
				'strEmail'				=> 'djfable02@gmail.com',
				'strContactNo'			=> '09104732496',
				'txtPermanentAddress'	=> 'Makati City',
				'txtCurrentAddress'		=> 'Makati City',
				'zipCode'				=> '1234',
				'boolStatus'			=> 1,
				'dateBirthday'			=> '1996-08-02',
				'created_at'			=> date('Y-m-d H:i:s')
			]);
    }
}
