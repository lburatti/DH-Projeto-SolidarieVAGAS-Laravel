<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(ContratantesTableSeeder::class);
        $this->call(ProfissionaisTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
        $this->call(ContratantesTableSeeder::class);
        $this->call(OngsTableSeeder::class);
        $this->call(NiveisAcessoTableSeeder::class);

    }
}
