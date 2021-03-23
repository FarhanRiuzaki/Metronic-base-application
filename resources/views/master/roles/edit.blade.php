@extends('layout.default')

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Header
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4" >
                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id], 'id' => 'MyForm']) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            @if ($role->id != '2')
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            @else
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'readonly')) !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br />
                            {{-- @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br />
                            @endforeach --}}

                            <table class="table table-bordered">
                                @php
                                    $array = [];
                                    $i= 0;
                                @endphp
                                @foreach ($permission as $key => $value)
                                    @php
                                        $key = explode('.', $value->name);
                                        $key = $key[0];

                                        $arr[$key][$value->id] = $value->name;
                                        $i++;
                                    @endphp
                                @endforeach

                                <thead>
                                    <tr>
                                        <th class="bg-dark text-center" width='50px'><input type="checkbox" onchange="checkAll(this)" name="chk[]" > </th>
                                        <th class="bg-dark text-white">Check All Permission</th>
                                    </tr>
                                </thead>

                                @foreach ($arr as $key => $item)
                                    <thead>
                                        <tr>
                                            {{-- <th class="bg-dark" width='50px'></th> --}}
                                            <th class="bg-dark text-white" colspan="2">[ {{ strtoupper($key) }} ] Permission</th>
                                        </tr>
                                    </thead>

                                    @foreach ($item as $keys => $val)
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                        {{ Form::checkbox('permission[]', $keys, in_array($keys, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                </td>
                                                <td>{{ $val }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
    function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox'  && !(checkboxes[i].disabled) ) {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }
    </script>
@endsection
