<div class="form-group">
    @php
        $cek = 'form-control ' . $class;
        if($errors->has($name)){
            $cek = 'form-control' . $class . isValid($errors->has($name)) ;
        }
    @endphp
    <div class="row">
        @if ($label)
            <div class="col-md-3">
                {{-- {{ Form::label($label, null, ['class' => 'control-label']) }} --}}
                <strong>{{$label}}</strong>
            </div>
            <div class="col-md-9">
                {{ Form::text($name, $value, array_merge(['class' => $cek, 'id' => $name], $attributes)) }}
                <p class="invalid-feedback">{{ $errors->first($name) }}</p>
            </div>
        @else
            <div class="col-md-12">
                {{ Form::text($name, $value, array_merge(['class' => $cek, 'id' => $name], $attributes)) }}
                <p class="invalid-feedback">{{ $errors->first($name) }}</p>
            </div>
        @endif
    </div>
</div>