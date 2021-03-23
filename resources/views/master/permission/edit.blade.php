{!! Form::model($permission_edit, ['method' => 'PATCH','route' => ['permissions.update', Crypt::encrypt($permission_edit->id)], 'id' => 'MyForm']) !!}

{{ Form::inputText('Permission: ', 'name', null, null, ['placeholder' => 'permission name', 'required']) }}

<button onclick="CheckValidation();" type="submit" id="btn-submit" class="btn font-weight-bold btn-block btn-primary">
        Submit Permission
</button>

{!! Form::close() !!}
