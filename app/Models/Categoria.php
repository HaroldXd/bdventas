<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use ProductosController
class Categoria extends Model{
    use HasFactory;
    protected $table = 'categorias';
    protected $primaryKey = 'idcategoria';
    public $timestamps=false;protected $fillable=['descripcion','estado'];


    public function productos(){
    return $this->hasMany(Productos::class,'idcategoria','idcategoria')->where('estado','=','1');
    }
 
}
