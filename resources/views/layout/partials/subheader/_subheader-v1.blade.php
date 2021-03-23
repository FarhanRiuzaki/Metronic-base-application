{{-- Subheader V1 --}}

<div class="subheader py-2 {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <div class="{{ Metronic::printClasses('subheader-container', false) }} d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                {{ @$page_title }}
            </h5>
            <!--end::Title-->
            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->
            <!--begin::Search Form-->
            <div class="d-flex align-items-center  mt-2 mb-2 mr-5" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                    @if (isset($page_description) && config('layout.subheader.displayDesc'))
                        {{ @$page_description }}
                    @endif
                </span>
            </div>
            <!--end::Search Form-->
            @if (!empty($page_breadcrumbs))
				{{-- Separator --}}
                <div class="subheader-separator subheader-separator-ver my-2 mr-4 d-none"></div>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>

				{{-- Breadcrumb --}}
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2">
                    {{-- <li class="breadcrumb-item"><a href="#"><i class="flaticon2-shelter text-muted icon-1x"></i></a></li> --}}
                    @php
                        $i = 0;
                        $len = count($page_breadcrumbs);
                    @endphp
                    @foreach ($page_breadcrumbs as $k => $item)
                        @php
                        if ($i == $len - 1) {
                            $class = ' text-primary';
                        }else{
                            $class = ' text-muted';
                        }
                        $i++;
                        @endphp
						<li class="breadcrumb-item">
                        	<a href="{{ url($item['page']) }}" class="{{ $class }}">
                            	{{ $item['title'] }}
                        	</a>
						</li>
                    @endforeach
                </ul>
            @endif
        </div>

		{{-- Toolbar --}}
        <div class="d-flex align-items-center">

            {{-- @hasSection('page_toolbar') --}}
                @yield('page_toolbar')

                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    @if (@$page_buttons)
                        @forelse ($page_buttons as $item)

                            @can(@$item['can'])

                                    @php
                                        $class = ' btn-default';
                                    @endphp
                                    @if (@$item['class'])
                                        @php
                                            $class = $item['class'];
                                        @endphp
                                    @endif

                                    {{-- Jika form submit, execute button form outside--}}
                                    @if (@$item['route'] == 'form')
                                        @php
                                            $id_form = $item['route'];
                                            if(@$item['id-form']){
                                                $id_form = $item['id-form'];
                                            }
                                        @endphp
                                        <button onclick="CheckValidation();" type="submit" id="btn-submit" class="btn font-weight-bold btn-sm px-3 font-size-base ml-2 {{ $class }}">
                                            @if (@$item['svg'])
                                                {{ Metronic::getSVG("media/svg/icons/" . $item['svg'], "svg-icon svg-icon-md") }}
                                            @endif
                                                {{ $item['title'] }}
                                        </button>
                                    @else
                                        <a href="{{ route($item['route']) }}" class="btn font-weight-bold btn-sm px-3 font-size-base ml-2 {{ $class }}">
                                        @if (@$item['svg'])
                                            {{ Metronic::getSVG("media/svg/icons/" . $item['svg'], "svg-icon svg-icon-md") }}
                                        @endif
                                            {{ $item['title'] }}
                                        </a>
                                    @endif

                                @endcan
                        @empty

                        @endforelse
                    @endif
                    {{-- <a href="{{ route('users.create') }}" class="btn btn-primary font-weight-bolder btn-sm px-3 font-size-base ml-2"> --}}

                    {{-- <a href="#" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> --}}
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    {{-- <div class="btn-group ml-2 show">
                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Submit</button>
                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                        <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-78px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <ul class="navi py-5">

                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-writing"></i>
                                        </span>
                                        <span class="navi-text">Save &amp; continue</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-medical-records"></i>
                                        </span>
                                        <span class="navi-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-hourglass-1"></i>
                                        </span>
                                        <span class="navi-text">Save &amp; exit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--end::Dropdown-->
                </div>
            {{-- @endif --}}

            <div style="display: none" class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Metronic::getSVG("media/svg/icons/Files/File-plus.svg", "svg-icon-success svg-icon-2x") }}
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    {{-- Navigation --}}
                    <ul class="navi navi-hover">
                        <li class="navi-header font-weight-bold">
                            Jump to:
                            <i class="flaticon2-information" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                        </li>
                        <li class="navi-separator mb-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                <span class="navi-text">Recent Orders</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
                                <span class="navi-text">Support Cases</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-telegram-logo"></i></span>
                                <span class="navi-text">Projects</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-new-email"></i></span>
                                <span class="navi-text">Messages</span>
                                <span class="navi-label">
                                    <span class="label label-success label-rounded">5</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-separator mt-3"></li>
                        <li class="navi-footer">
                            <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">Upgrade plan</a>
                            <a class="btn btn-clean font-weight-bold btn-sm" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
