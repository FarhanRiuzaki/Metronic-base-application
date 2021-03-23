<?php

namespace App\Traits;

use app\Observers\ModelObserver;
use Illuminate\Support\Facades\Auth;

trait RecordSignature
{

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $model->updated_by = Auth::User()->id;
        });

        static::creating(function ($model) {
            // dd(\Auth::User());
            if(Auth::User() != null){
                $model->created_by = Auth::User()->id;
            }
            // dd($model);
        });
        //etc

    }
}
