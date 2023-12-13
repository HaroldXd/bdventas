<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincia';
    protected $primaryKey = 'idprovincia';
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];    
    public function distrito(){
        return $this->hasOne(Distrito::class,'iddistrito','iddistrito');
        }
        public function provincia(){
            return $this->hasOne(Provincia::class,'idprovincia','idprovincia');
            }
}
