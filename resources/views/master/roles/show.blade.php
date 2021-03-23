@extends('layout.default')

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Show Role
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                <table class="table table-bordered">
                                    @php
                                        $array = [];
                                        $i= 0;
                                    @endphp
                                    @foreach ($rolePermissions as $key => $value)
                                        @php
                                            $key = explode('.', $value->name);
                                            $key = $key[0];

                                            $arr[$key][$value->id] = $value->name;
                                            $i++;
                                        @endphp
                                    @endforeach

                                    @foreach ($arr as $key => $item)
                                        <thead>
                                            <tr>
                                                <th class="bg-dark text-white">[ {{ strtoupper($key) }} ] Permission</th>
                                            </tr>
                                        </thead>

                                        @foreach ($item as $keys => $val)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $val }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    @endforeach
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
