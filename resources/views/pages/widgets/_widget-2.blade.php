{{-- List Widget 9 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
            <span class="font-weight-bolder text-dark">Login Activities</span>
            {{-- <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ count(auth()->user()->authentications)}}</span> --}}
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-4" data-scroll="true" data-wheel-propagation="true" style="height: 400px">
        <div class="timeline timeline-6 mt-3 mb-10">
            <div class="timeline-item align-items-start">
                <!--begin::Label-->
                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{ date('Y-m-d')}}</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-info icon-xl"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Text-->
                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Login Activity today: {{ auth()->user()->name }}</div>
                <!--end::Text-->
            </div>
            @if (auth()->user()->authentications)
                @foreach (auth()->user()->authentications as $item)
                    @if ($item->logout_at)
                        @if ($item->logout_at->format('Y-m-d') == date('Y-m-d'))
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$item->logout_at->format('H:i')}}</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->

                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">User Logout on IP Address {{ $item->ip_address}}</div>
                                <!--end::Desc-->
                            </div>
                        @endif
                    @endif
                    @if ($item->login_at)
                        @if ($item->login_at->format('Y-m-d') == date('Y-m-d'))
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$item->login_at->format('H:i')}}</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Content-->

                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">User Login on {{ $item->user_agent}} with IP Address {{ $item->ip_address}}</div>
                                <!--end::Content-->
                            </div>
                        @endif
                    @endif
                @endforeach
            @endif

        </div>
    </div>
</div>
