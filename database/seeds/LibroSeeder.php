<?php

use App\libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Libro::create([
           'nombre'=> 'Padre rico padre pobre',
           'autor'=> 'Robert R. Kiyosaki',
           'genero'=> 'Finanzas',
           'editoria' => 'De Bolsillo',
           'descripcion' => 'Lorem ipsum dolor sit amet consectetur, adipiscing elit perturient sapien felis, facilisis litora volutpat proin',

      ]);

           Libro::create([
               'nombre' => ' El Principito',
               'autor'=> 'Antoine de Saint-Exupèry',
               'genero'=> 'Novela',
               'editoria' => 'Reynal $ Hitchcock',
               'descripcion' => 'Lorem ipsum dolor sit amet consectetur, adipiscing elit perturient sapien felis, facilisis litora volutpat proin',

           

           

       ]);
      
    }
}
