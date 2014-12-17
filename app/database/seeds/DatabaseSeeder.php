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

		Client::create([
			'name'    => 'PT Kumis Kucing',
			'address' => 'Jln. Seturan III, Sleman, Jogjakarta',
			'phone'   => '027412345',
		]);

		Client::create([
			'name'    => 'Studio Foto',
			'address' => 'Tasbi II, Medan',
			'phone'   => '0812345678',
		]);

		Invoice::create([
			'client_id'   => 1,
			'description' => 'Makan nasi',
			'amount'      => 300000
		]);

		Invoice::create([
			'client_id'   => 1,
			'description' => 'Minum susu',
			'amount'      => 100000
		]);

		Invoice::create([
			'client_id'   => 1,
			'description' => 'Beli baju',
			'amount'      => 50000
		]);

		Invoice::create([
			'client_id'   => 2,
			'description' => 'Beli minuman dingin menyegarkan',
			'amount'      => 640000
		]);

		Invoice::create([
			'client_id'   => 2,
			'description' => 'Makan sate padang',
			'amount'      => 120000
		]);

		// $this->call('UserTableSeeder');
	}

}
