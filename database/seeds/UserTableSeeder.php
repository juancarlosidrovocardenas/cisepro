<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB as DATOS;
class UserTableSeeder extends Seeder {
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
        setlocale(LC_ALL,"es_EC");
        $time = time();
        $faker =Faker::create();
        for ($i=0; $i<1000;$i++)
        {
            //insert o insertGetId
         $id =  DATOS::table('users')->insertGetId(array(
                'first_name'        =>$faker->firstName,
                'last_name'         =>$faker->lastName,
                'email'             =>$faker->unique()->email,
                'password'          =>\Hash::make('secret'),
                'active'            =>true,
                'type'              =>'user',
                'remember_token'    =>'',
                'created_at'        =>date("Y-m-d H:i:s", $time),
                'updated_at'        =>date("Y-m-d H:i:s", $time)


            ));
            \DB::table('user_profiles')->insert(array(
                'bio'          =>$faker->paragraph(rand(2,5)),
                'twitter'      =>'http://www.twtter.com/'.$faker->userName,
                'website'      =>'http://www.'.$faker->domainName,
                'birthdate'    =>date("Y-m-d H:i:s", $time),
                'user_id'      =>$id,
                'created_at'   =>date("Y-m-d H:i:s", $time),
                'updated_at'   =>date("Y-m-d H:i:s", $time)
            ));
        }
    }
}