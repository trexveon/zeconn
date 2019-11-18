<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpreendimentosDado extends Model
{
    public function Empreendimento()
    {
        return $this->belongsTo('App\Empreendimento');
    }
}
