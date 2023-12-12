<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    protected $table = 'distrito';
    protected $primaryKey = 'iddistrito';
    public $timestamps = false;

    protected $fillable = [
        'nombre','idprovincia'
    ];    
    public function distrito(){
        return $this->hasOne(Distrito::class,'iddistrito','iddistrito');
        }
        public function provincia(){
            return $this->hasOne(Provincia::class,'idprovincia','idprovincia');
            }
}
