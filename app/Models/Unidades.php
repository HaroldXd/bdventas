<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model{
    use HasFactory;
    protected $table = 'unidades';
    protected $primaryKey = 'idunidad';
    public $timestamps=false;protected $fillable=['descripcion','estado'];

    public function productos(){
        return $this->hasMany(Producto::class,'idcategoria','idcategoria');
        }
}

