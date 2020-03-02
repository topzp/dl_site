<?php

namespace App;

use App\UseCase;
use Illuminate\Database\Eloquent\Model;

class CaseCategory extends Model
{
    //
    public function useCases()
    {
        return $this->belongsToMany(UseCase::class);
    }
}
