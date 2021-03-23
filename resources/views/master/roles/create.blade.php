@extends('layout.default')

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Create Roles
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4" >
                {!! Form::open(array('route' => 'roles.store','method'=>'POST','id' => 'MyForm')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        {{ Form::inputText('Name: ', 'name', null, null, ['placeholder' => 'Name', 'required']) }}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <br>
                        <div class="form-group">
                            <strong>Permission: </strong>
                            <br />
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
                                                        {{ Form::checkbox('permission[]', $keys, false, array('class' => 'name checkable')) }}
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
