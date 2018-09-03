<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $guarded = [ ];

    public function bandeira()
    {
        return $this->hasOne(Bandeiras::class);
    }

}
