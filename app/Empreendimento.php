<?php

namespace App;

use App\Tipo;

use Illuminate\Database\Eloquent\Model;


class Empreendimento extends Model
{
    public function EmpreendimentosDado()
    {
        return $this->hasOne('App\EmpreendimentosDado');
    }
    public function Planta()
    {
        return $this->hasMany('App\Planta');
    }
    public function Slide()
    {
        return $this->hasMany('App\Slide');
    }
    public function EmpreendimentosTipo()
    {
        return $this->belongsTo('App\EmpreendimentosTipo');
    }
    
}
