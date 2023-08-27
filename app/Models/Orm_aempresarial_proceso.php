<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orm_aempresarial_proceso extends Model
{
    use HasFactory;

    protected $table = 'ae_pp';
    public $timestamps = false;

    public function proceso_aempresarial(){
        return $this->belongsTo('App\Models\Orm_proceso', 'IdProceso', 'IdProceso');
    }

}
