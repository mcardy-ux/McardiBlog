<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => '¿Que beneficios puede aportar tu propio logo?',
            'contenido' => 'Uno de los objetivos al plasmar tu marca o idea en una imagen es que sea fácil de reconocer, recordar y evocar un buen pensamiento en la persona que lo ve. Y desde luego es muy importante apelar a las conexiones que tenemos como seres humanos como a nivel de gusto, identificación y representación. Pero ademas de tener estos objetivos en mente, puedes ponerte como meta estos objetivos para que tu propio logo genere beneficios. <br> 🎯 Atrae a tu publico y crea una conexión.',
            'fecha_publicacion' => '2020-07-01',
            'tiempo_lectura' => '15',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
