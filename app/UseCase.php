<?php

namespace App;

use App\MiniModule;
use App\CaseCategory;
use Illuminate\Database\Eloquent\Model;

class UseCase extends Model
{
    //
    public function caseCategories()
    {
        return $this->belongsToMany(CaseCategory::class);
    }

    public function miniModules()
    {
        return $this->belongsToMany(MiniModule::class);
    }
}
