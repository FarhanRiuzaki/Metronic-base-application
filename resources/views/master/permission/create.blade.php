{!! Form::open(array('route' => 'permissions.store','method'=>'POST','id' => 'MyForm')) !!}

{{ Form::inputText('Permission: ', 'permission', null, null, ['placeholder' => 'permission name', 'required']) }}

<button onclick="CheckValidation();" type="submit" id="btn-submit" class="btn font-weight-bold btn-block btn-primary">
        Submit Permission
</button>

{!! Form::close() !!}
