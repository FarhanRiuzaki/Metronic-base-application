@php
	$direction = config('layout.extras.quick-panel.offcanvas.direction', 'right');
@endphp
{{-- Quick Panel --}}
<div id="kt_quick_panel" class="offcanvas offcanvas-{{ $direction }} pt-5 pb-10">
	{{-- Header --}}
	<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
		<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs" >Login Activity</a>
			</li>
		</ul>
		<div class="offcanvas-close mt-n1 pr-5">
			<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
			<i class="ki ki-close icon-xs text-muted"></i>
			</a>
		</div>
	</div>

	{{-- Content --}}
	<div class="offcanvas-content px-10">
		<div class="tab-content">
			{{-- Tabpane --}}
			<div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
				{{-- <div class="tab-pane active show " id="topbar_notifications_logs" role="tabpanel"> --}}
                    {{-- Nav --}}
                    <div class="d-flex flex-center text-center text-muted">
                    <div data-scroll="true" data-wheel-propagation="true">
                        <h6 class="text-bold">Login Activity today: {{ auth()->user()->name }}</h6>
                        <br>
                            <div class="timeline timeline-6 mt-3">
                                {{-- <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{ date('Y-m-d')}}</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-info icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <!--end::Text-->
                                </div> --}}
                                @if (auth()->user()->authentications)
                                    @forelse (auth()->user()->authentications as $item)
                                        @if ($item->logout_at)
                                            @if ($item->logout_at->format('Y-m-d') == date('Y-m-d'))
                                                <div class="timeline-item align-items-start text-left">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$item->logout_at->format('H:i')}}</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Desc-->
                                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                                        User Logout on IP Address {{ $item->ip_address}}
                                                    </div>
                                                    <!--end::Desc-->
                                                </div>
                                            @endif
                                        @endif
                                        @if ($item->login_at)
                                            @if ($item->login_at->format('Y-m-d') == date('Y-m-d'))
                                                <div class="timeline-item align-items-start text-left">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$item->login_at->format('H:i')}}</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-success icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Content-->
                                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                                        User Login on {{ $item->user_agent}}
                                                    <br>
                                                        IP Address {{ $item->ip_address}}
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                            @endif
                                        @endif

                                    @empty
                                    All caught up!
                                    <br/>
                                    No new notifications.
                                    @endforelse
                                @endif

                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

			</div>

		</div>
	</div>
</div>
