@extends('layout.default')

@section('page_toolbar')
    @php
        $button = [
            ['route'=> '.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info']
        ];
    @endphp

@endsection

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">{{ @$page_description }}
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4" >

            </div>
        </div>
    </div>
</div>

@endsection

