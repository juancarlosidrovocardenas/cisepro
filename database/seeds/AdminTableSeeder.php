<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as DATOS;
class AdminTableSeeder extends Seeder {
  /*  public function run(){
        User::create(array(
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }*/
    public function run()
    {
        $time = time();
      $id = DATOS::table('users')->insertGetId(array(
            'first_name'=>'administrador',
            'last_name'=>'admin',
            'email'=>'administrador@cisepro.com.ec',
            'password'=>\Hash::make('secret'),
            'active'=>true,
            'type'=>'admin',
            'remember_token'=>'',
            'created_at'=>date("Y-m-d H:i:s", $time),
            'updated_at'=>date("Y-m-d H:i:s", $time)

        ));
        DATOS::table('user_profiles')->insert(array(
            'bio'          =>'Analista de Sistemas',
            'twitter'      =>'http://www.twtter.com/juancarlosidrov',
            'website'      =>'http://www.cisepro.com',
            'birthdate'      =>'1984-10-10',
            'user_id'      =>$id,
            'created_at'   =>date("Y-m-d H:i:s", $time),
            'updated_at'   =>date("Y-m-d H:i:s", $time)
        ));
    }
}