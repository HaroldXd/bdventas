<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Unidades;
use DB;
class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    public $timestamps=false;
    protected $fillable=['descripcion','imagen','idcategoria','idunidad','stock','precio','estado'];

    public function categorias(){
        return $this->hasOne(Categoria::class, 'idcategoria', 'idcategoria') ;
    }
    public function unidades(){
        return $this->hasOne(Unidades::class, 'idunidad', 'idunidad');
 
    }
    public static function ActualizarStock($idproducto,$cantidad){
        return DB::select(
        DB::raw("UPDATE productos set stock = stock - '".$cantidad."' where idproducto='".$idproducto."'"));
       
    }


}
