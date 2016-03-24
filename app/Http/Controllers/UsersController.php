<?php namespace webcisepro\Http\Controllers;
use Illuminate\Support\Facades\DB as DATOS;
use Carbon\Carbon as fecha;
use webcisepro\User;

class UsersController extends Controller
{
    public function getIndex()
    {
        //$this->usuariosPerfiles();
      // $this-> usuariosPerfilesOrdenados();
       // $this->usuarios();
      //  $this-> getOrm();
      // $this-> getUsuariosProfiles();
        $this->index();
    }
    public function usuarios()
    {
        $result=DATOS::table('users')
            ->select('users.*')
            ->get();
        return dd($result);
    }
    //=======================================================================================================================================================================
    public function usuariosPerfiles()
    {
        $result=DATOS::table('users')
            ->select(['users.id','users.name','email','user_profiles.bio','user_profiles.id as id_profiles','user_profiles.user_id as id_user'])
            ->where('name','<>','administrador')
            ->orderBy('name','ASC')
            //   ->orderBy(DATOS::raw('RAND()'))//PARA USAR COMANDOS PROPIOS DE SQL NO PROTEGE DE SQL INJECTION
            ->join('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

      /*  foreach ($result as $item)
        {
            return dd(  $item->datos = $item->name.' correo: '.$item->email);
        }*/

          return dd($result);
    }
    //=====================================================================================================================================================================
    public function usuariosPerfilesOrdenados()
    {
        $result=DATOS::table('users')
            ->select('users.*',
                     'user_profiles.id as id_user',
                     'user_profiles.birthdate'
            )
            ->orderBy('id','ASC')
            ->Join('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

          foreach ($result as &$row)
          {
              $row->datos = $row->first_name . ' '. $row->last_name;
              $row->edad=fecha::parse($row->birthdate)->age;
          }

        return dd($result);
    }
    //TRAER UN MAPEO DE OBJETO RELACIONAL==================================================================================================================================
    public function getOrm()
    {
      $user= User::first();
        dd($user->NombresCompletos,$user->profile->edad,$user->profile->Biografia);
    }
    //=====================================================================================================================================================================
    public function getUsuarios()
    {
        //ELOQUENT VIENE INCORPORADO CON FLUENT =========================
        $users= User::where('first_name','<>','administrador')->get();
      //  $users= User::get();
        dd($users->toArray());
    }
    public function getUsuariosProfiles()
    {
        //ELOQUENT VIENE INCORPORADO CON FLUENT =========================
        $users= User::select('id','first_name')
            ->with('profile')
            ->where('first_name','<>','administrador')
            ->orderBy('first_name','ASC')
            ->get();
            dd($users->toArray());
    }
    //=====================================================================================================================================================================
    public function index()
    {
       return dd($users = User::paginate());
    }
}