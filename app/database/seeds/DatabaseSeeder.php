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

		$this->call('PersonaTableSeeder');
	}

}

class PersonaTableSeeder extends Seeder {

    public function run(){

        DB::table('personas')->delete();

        Persona::create(array('nombre' => 'Ariel Orozco','email' => 'arielorozco@gmail.com', 'bio' => 'esta es mi bio'));
        Persona::create(array('nombre' => 'Carolina Rovira','email' => 'carovi88@gmail.com', 'bio' => 'esta es mi bio'));
        Persona::create(array('nombre' => 'Juan Perez','email' => 'juan@gmail.com', 'bio' => 'esta es mi bio'));


    }

}