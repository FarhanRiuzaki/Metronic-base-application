@extends('layout.default')

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
                <table class="table table-bordered">
                    <tr class="bg-dark text-white">
                        <td colspan="2">INFO</td>
                    </tr>
                    <tr>
                        <td width='30%'>Type</td>
                        <td>{!! eventType($record->event) !!}</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>{{ $record->auditable_type }}</td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td>{{ Carbon\Carbon::parse($record->created_at)->diffForHumans() . " - ". $record->created_at->format('Y F d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <td>Done By</td>
                        <td>{{ $record->user->name . ' - ' . $record->user->email }}</td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr class="bg-dark text-white">
                        <td width='33%'>Field</td>
                        <td width='33%'>Old Values</td>
                        <td width='33%'>New Values</td>
                    </tr>
                    @forelse ($old_values as $key => $item)
                        @if (@$new_values)
                            @if ($item == $new_values[$key])
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $item }}</td>
                                    <td>{{ $new_values[$key] }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td class="bg-warning text-white">{{ $item }}</td>
                                    <td class="bg-warning text-white">{{ $new_values[$key] }}</td>
                                </tr>
                            @endif
                        @else
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $item }}</td>
                                <td class="text-center">-</td>
                            </tr>
                        @endif
                    @empty
                        @foreach ($new_values as $key => $item)
                            <tr>
                                <td>{{ $key }}</td>
                                <td class="text-center">-</td>
                                <td>{{ $item }}</td>
                            </tr>
                        @endforeach
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

