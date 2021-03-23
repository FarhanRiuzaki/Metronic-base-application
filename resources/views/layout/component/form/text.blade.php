<div class="form-group">
    @php
        $cek = 'form-control ' . $class;
        if($errors->has($name)){
            $cek = 'form-control ' . $class . isValid($errors->has($name)) ;
        }
    @endphp
    <strong>{{$label}}</strong>
    {{ Form::text($name, $value, array_merge(['class' => $cek, 'id' => $name], $attributes)) }}
    <p class="invalid-feedback">{{ $errors->first($name) }}</p>
</div>