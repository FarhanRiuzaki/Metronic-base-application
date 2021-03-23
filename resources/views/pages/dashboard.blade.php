{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}

<div class="row">
    {{-- <div class="col-lg-6 col-xxl-4">
            @include('pages.widgets._widget-1', ['class' => 'card-stretch gutter-b'])
        </div> --}}
    <div class="col-lg-4 col-xxl-4">
        @include('pages.widgets._widget-3', ['class' => 'card-stretch card-stretch-half gutter-b'])
        @include('pages.widgets._widget-4', ['class' => 'card-stretch card-stretch-half gutter-b'])
    </div>

    <div class="col-xxl-8 col-lg-8 order-2 order-xxl-1">
        @include('pages.widgets._widget-6', ['class' => 'card-stretch gutter-b'])
    </div>
</div>
<div class="row">

    <div class="col-lg-8 col-xxl-8">
        @include('pages.widgets._widget-2', ['class' => 'card-stretch gutter-b'])
    </div>
    <div class="col-md-4 col-xxl-4">
        <div class="card card-custom card-stretch gutter-b">
            {{-- Header --}}
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Currently Logged In Devices</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ count($devices) > 1 ? '/logouts/all' : '#' }}" class="btn btn-danger {{ count($devices) == 1 ? 'disabled' : '' }}">Remove All Devices</a>
                </div>
            </div>
            <div class="card-body pt-4 table-responsive" data-scroll="true" data-wheel-propagation="true" style="height: 400px">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center align-center">
                            <th width='65%'>Device</th>
                            <th width='10%'>IP</th>
                            <th style="width:20%">Last Activity</th>
                            <th style="width:15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                        <tr>
                            <td>{{ $device->user_agent }}</td>
                            <td>{{ $device->ip_address }}</td>
                            <td>{{ Carbon\Carbon::parse($device->last_activity)->diffForHumans() }}</td>
                            @if ($current_session_id == $device->id)
                            <td><button type="button" :disabled="true" class="btn btn-primary">This Device</button></td>
                            @else
                            <td><a href="/logouts/{{$device->id}}" class="btn btn-danger">Remove</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
        @include('pages.widgets._widget-5', ['class' => 'card-stretch gutter-b'])
    </div>

    <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
        @include('pages.widgets._widget-7', ['class' => 'card-stretch gutter-b'])
    </div>

    <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
        @include('pages.widgets._widget-8', ['class' => 'card-stretch gutter-b'])
    </div>

    <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
        @include('pages.widgets._widget-9', ['class' => 'card-stretch gutter-b'])
    </div>
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
