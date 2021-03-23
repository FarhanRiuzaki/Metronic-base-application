<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // DEFINE FORM
        // array 1 : label
        // array 2 : nama & id
        // array 3 : value isinya
        // array 4 : class
        // array 5 : attribute
        Form::component('textRow', 'layout.component.form.textRow', [
            'label',            // 1
            'name',             // 2
            'value' => null,    // 3
            'class',            // 4
            'attributes' => []  // 5
        ]);
        Form::component('inputText', 'layout.component.form.text', ['label', 'name', 'value' => null, 'class',  'attributes' => []]);
        Form::component('inputTextarea', 'layout.component.form.textarea', ['label', 'name', 'value' => null, 'class',  'attributes' => []]);
        Form::component('inputPassword', 'layout.component.form.password', ['label', 'name', 'value' => null, 'class',  'attributes' => []]);
    }
}
