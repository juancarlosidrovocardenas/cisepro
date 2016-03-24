<?php
/**
 * Created by PhpStorm.
 * User: ANALISTA SISTEMAS
 * Date: 8/3/2016
 * Time: 16:07
 */

namespace webcisepro\Http\Controllers\Cadenas;
use webcisepro\Http\Controllers\Controller;

class CadenasController extends Controller
{
    protected $required;
    protected $min;
    protected $max;

    //MUTADORES
    public function required($value)
    {
      $this->required  =$value;
        return $this; //CadenasController
    }
    public function min($value)
    {
        $this->min= $value;
        return $this;
    }
    public function max($value)
    {
        $this->max= $value;
        return $this;
    }
    public function getIndex()
    {
        $cadenas = new CadenasController();
        $reglas = new rolesColeccion();
//        $cadenas->required(true);
//        $cadenas->min(10);
//        $cadenas->max(100);
        $cadenas->required(true)->min(50)->max(200);
        $reglas->string('titulo');
        $reglas->string('nombre');
        dd("METHOD CHAINING",$cadenas,$reglas);
    }
    public function _construct()
    {

    }
}
class rolesColeccion
{
    protected $roles=array();
    public function string($name)
    {
        $this->roles[$name]= new rolesColeccion();
        return $this->roles[$name];
    }
}