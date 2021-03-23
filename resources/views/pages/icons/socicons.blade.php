{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <!--begin::Notice-->
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
        <div class="alert-icon">
            <?php echo Metronic::getSVG("media/svg/icons/Tools/Compass.svg",
                "svg-icon-primary svg-icon-xl");?>
        </div>
        <div class="alert-text">
            Socicon is a social icons font with more than 170 icons from all major services. Socicon is free and easy to use.
            For more info please visit
            <a class="font-weight-bold" href="http://www.socicon.com" target="_blank">Socicon's Home</a>.
        </div>
    </div>
    <!--end::Notice-->

    <!--begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Base Examples</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Example-->
                    <div>
                        <p>
                            <code>Socicon</code> icons can be used as through class names as shown below.
                        </p>
                        <div class="example-preview">
                            <i class="socicon-vimeo mr-5"></i>
                            <i class="socicon-telegram mr-5"></i>
                            <i class="socicon-facebook mr-5"></i>
                            <i class="socicon-android mr-5"></i>
                            <i class="socicon-amazon mr-5"></i>
                            <i class="socicon-google"></i>
                        </div>
                    </div>
                    <!--end::Example-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Color Options</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Example-->
                    <div>
                        <p>
                            Use <code>.icon-{color}</code> class format to set different colors.
                        </p>
                        <div class="example-preview">
                            <i class="socicon-vimeo text-success mr-5"></i>
                            <i class="socicon-telegram text-primary mr-5"></i>
                            <i class="socicon-facebook text-danger mr-5"></i>
                            <i class="socicon-android text-warning mr-5"></i>
                            <i class="socicon-amazon text-info mr-5"></i>
                            <i class="socicon-google text-dark"></i>
                        </div>
                    </div>
                    <!--end::Example-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Sizes</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Example-->
                    <div>
                        <p>
                            Use <code>.icon-{size}</code> class format to set different sizes.
                        </p>
                        <div class="example-preview">
                            <i class="socicon-android icon-xs mr-5"></i>
                            <i class="socicon-android icon-sm mr-5"></i>
                            <i class="socicon-android icon-nm mr-5"></i>
                            <i class="socicon-android icon-md mr-5"></i>
                            <i class="socicon-android icon-lg mr-5"></i>
                            <i class="socicon-android icon-xl mr-5"></i>
                            <i class="socicon-android icon-2x mr-5"></i>
                            <i class="socicon-android icon-3x mr-5"></i>
                            <i class="socicon-android icon-4x mr-5"></i>
                            <i class="socicon-android icon-5x mr-5"></i>
                            <i class="socicon-android icon-6x mr-5"></i>
                            <i class="socicon-android icon-7x mr-5"></i>
                            <i class="socicon-android icon-8x mr-5"></i>
                            <i class="socicon-android icon-9x mr-5"></i>
                            <i class="socicon-android icon-10x mr-5"></i>
                        </div>
                    </div>
                    <!--end::Example-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Integration</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Example-->
                    <div>
                        <p>
                            You can use Flaticons literally with any element within Metronic.
                        </p>
                        <div class="example-preview">
                            <a href="#" class="btn btn-success font-weight-bold mr-2">
                                <i class="socicon-foursquare"></i> Button
                            </a>

                            <a href="#" class="btn btn-light-danger font-weight-bold mr-2">
                                <i class="socicon-skype"></i> Button 2
                            </a>

                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="socicon-airbnb"></i> Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-md py-5" style="">
                                    <ul class="navi navi-hover">
                                        <li class="navi-item">
                                            <a class="navi-link" href="#">
                                                <span class="navi-icon"><i class="socicon-chrome text-danger"></i></span>
                                                <span class="navi-text">Messages</span>
                                                <span class="label label-light-danger font-weight-bold label-inline">new</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a class="navi-link" href="#">
                                                <span class="navi-icon"><i class="socicon-dribbble text-warning"></i></span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a class="navi-link" href="#">
                                                <span class="navi-icon"><i class="socicon-apple text-success"></i></span>
                                                <span class="navi-text">Tasks</span>
                                                <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a class="navi-link" href="#">
                                                <span class="navi-icon"><i class="socicon-envato text-primary"></i></span>
                                                <span class="navi-text">Orders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Example-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Row-->
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Socicons</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-modelmayhem"></i>
                                </div>
                                <div class="text-muted">socicon-modelmayhem</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-mixcloud"></i>
                                </div>
                                <div class="text-muted">socicon-mixcloud</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-drupal"></i>
                                </div>
                                <div class="text-muted">socicon-drupal</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-swarm"></i>
                                </div>
                                <div class="text-muted">socicon-swarm</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-istock"></i>
                                </div>
                                <div class="text-muted">socicon-istock</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-yammer"></i>
                                </div>
                                <div class="text-muted">socicon-yammer</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-ello"></i>
                                </div>
                                <div class="text-muted">socicon-ello</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-stackoverflow"></i>
                                </div>
                                <div class="text-muted">socicon-stackoverflow</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-persona"></i>
                                </div>
                                <div class="text-muted">socicon-persona</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-triplej"></i>
                                </div>
                                <div class="text-muted">socicon-triplej</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-houzz"></i>
                                </div>
                                <div class="text-muted">socicon-houzz</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-rss"></i>
                                </div>
                                <div class="text-muted">socicon-rss</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-paypal"></i>
                                </div>
                                <div class="text-muted">socicon-paypal</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-odnoklassniki"></i>
                                </div>
                                <div class="text-muted">socicon-odnoklassniki</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-airbnb"></i>
                                </div>
                                <div class="text-muted">socicon-airbnb</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-periscope"></i>
                                </div>
                                <div class="text-muted">socicon-periscope</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-outlook"></i>
                                </div>
                                <div class="text-muted">socicon-outlook</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-coderwall"></i>
                                </div>
                                <div class="text-muted">socicon-coderwall</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-tripadvisor"></i>
                                </div>
                                <div class="text-muted">socicon-tripadvisor</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-appnet"></i>
                                </div>
                                <div class="text-muted">socicon-appnet</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-goodreads"></i>
                                </div>
                                <div class="text-muted">socicon-goodreads</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-tripit"></i>
                                </div>
                                <div class="text-muted">socicon-tripit</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-lanyrd"></i>
                                </div>
                                <div class="text-muted">socicon-lanyrd</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-slideshare"></i>
                                </div>
                                <div class="text-muted">socicon-slideshare</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-buffer"></i>
                                </div>
                                <div class="text-muted">socicon-buffer</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-disqus"></i>
                                </div>
                                <div class="text-muted">socicon-disqus</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-vkontakte"></i>
                                </div>
                                <div class="text-muted">socicon-vkontakte</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-whatsapp"></i>
                                </div>
                                <div class="text-muted">socicon-whatsapp</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-patreon"></i>
                                </div>
                                <div class="text-muted">socicon-patreon</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-storehouse"></i>
                                </div>
                                <div class="text-muted">socicon-storehouse</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-pocket"></i>
                                </div>
                                <div class="text-muted">socicon-pocket</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-mail"></i>
                                </div>
                                <div class="text-muted">socicon-mail</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-blogger"></i>
                                </div>
                                <div class="text-muted">socicon-blogger</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-technorati"></i>
                                </div>
                                <div class="text-muted">socicon-technorati</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-reddit"></i>
                                </div>
                                <div class="text-muted">socicon-reddit</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-dribbble"></i>
                                </div>
                                <div class="text-muted">socicon-dribbble</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-stumbleupon"></i>
                                </div>
                                <div class="text-muted">socicon-stumbleupon</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-digg"></i>
                                </div>
                                <div class="text-muted">socicon-digg</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-envato"></i>
                                </div>
                                <div class="text-muted">socicon-envato</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-behance"></i>
                                </div>
                                <div class="text-muted">socicon-behance</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-delicious"></i>
                                </div>
                                <div class="text-muted">socicon-delicious</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-deviantart"></i>
                                </div>
                                <div class="text-muted">socicon-deviantart</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-forrst"></i>
                                </div>
                                <div class="text-muted">socicon-forrst</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-play"></i>
                                </div>
                                <div class="text-muted">socicon-play</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-zerply"></i>
                                </div>
                                <div class="text-muted">socicon-zerply</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-wikipedia"></i>
                                </div>
                                <div class="text-muted">socicon-wikipedia</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-apple"></i>
                                </div>
                                <div class="text-muted">socicon-apple</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-flattr"></i>
                                </div>
                                <div class="text-muted">socicon-flattr</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-github"></i>
                                </div>
                                <div class="text-muted">socicon-github</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-renren"></i>
                                </div>
                                <div class="text-muted">socicon-renren</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-friendfeed"></i>
                                </div>
                                <div class="text-muted">socicon-friendfeed</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-newsvine"></i>
                                </div>
                                <div class="text-muted">socicon-newsvine</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-identica"></i>
                                </div>
                                <div class="text-muted">socicon-identica</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-bebo"></i>
                                </div>
                                <div class="text-muted">socicon-bebo</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-zynga"></i>
                                </div>
                                <div class="text-muted">socicon-zynga</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-steam"></i>
                                </div>
                                <div class="text-muted">socicon-steam</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-xbox"></i>
                                </div>
                                <div class="text-muted">socicon-xbox</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-windows"></i>
                                </div>
                                <div class="text-muted">socicon-windows</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-qq"></i>
                                </div>
                                <div class="text-muted">socicon-qq</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-douban"></i>
                                </div>
                                <div class="text-muted">socicon-douban</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-meetup"></i>
                                </div>
                                <div class="text-muted">socicon-meetup</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-playstation"></i>
                                </div>
                                <div class="text-muted">socicon-playstation</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-android"></i>
                                </div>
                                <div class="text-muted">socicon-android</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-snapchat"></i>
                                </div>
                                <div class="text-muted">socicon-snapchat</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-twitter"></i>
                                </div>
                                <div class="text-muted">socicon-twitter</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-facebook"></i>
                                </div>
                                <div class="text-muted">socicon-facebook</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-googleplus"></i>
                                </div>
                                <div class="text-muted">socicon-googleplus</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-pinterest"></i>
                                </div>
                                <div class="text-muted">socicon-pinterest</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-foursquare"></i>
                                </div>
                                <div class="text-muted">socicon-foursquare</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-yahoo"></i>
                                </div>
                                <div class="text-muted">socicon-yahoo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-skype"></i>
                                </div>
                                <div class="text-muted">socicon-skype</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-yelp"></i>
                                </div>
                                <div class="text-muted">socicon-yelp</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-feedburner"></i>
                                </div>
                                <div class="text-muted">socicon-feedburner</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-linkedin"></i>
                                </div>
                                <div class="text-muted">socicon-linkedin</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-viadeo"></i>
                                </div>
                                <div class="text-muted">socicon-viadeo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-xing"></i>
                                </div>
                                <div class="text-muted">socicon-xing</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-myspace"></i>
                                </div>
                                <div class="text-muted">socicon-myspace</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-soundcloud"></i>
                                </div>
                                <div class="text-muted">socicon-soundcloud</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-spotify"></i>
                                </div>
                                <div class="text-muted">socicon-spotify</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-grooveshark"></i>
                                </div>
                                <div class="text-muted">socicon-grooveshark</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-lastfm"></i>
                                </div>
                                <div class="text-muted">socicon-lastfm</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-youtube"></i>
                                </div>
                                <div class="text-muted">socicon-youtube</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-vimeo"></i>
                                </div>
                                <div class="text-muted">socicon-vimeo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-dailymotion"></i>
                                </div>
                                <div class="text-muted">socicon-dailymotion</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-vine"></i>
                                </div>
                                <div class="text-muted">socicon-vine</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-flickr"></i>
                                </div>
                                <div class="text-muted">socicon-flickr</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-500px"></i>
                                </div>
                                <div class="text-muted">socicon-500px</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-wordpress"></i>
                                </div>
                                <div class="text-muted">socicon-wordpress</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-tumblr"></i>
                                </div>
                                <div class="text-muted">socicon-tumblr</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-twitch"></i>
                                </div>
                                <div class="text-muted">socicon-twitch</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-8tracks"></i>
                                </div>
                                <div class="text-muted">socicon-8tracks</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-amazon"></i>
                                </div>
                                <div class="text-muted">socicon-amazon</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-icq"></i>
                                </div>
                                <div class="text-muted">socicon-icq</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-smugmug"></i>
                                </div>
                                <div class="text-muted">socicon-smugmug</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-ravelry"></i>
                                </div>
                                <div class="text-muted">socicon-ravelry</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-weibo"></i>
                                </div>
                                <div class="text-muted">socicon-weibo</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-baidu"></i>
                                </div>
                                <div class="text-muted">socicon-baidu</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-angellist"></i>
                                </div>
                                <div class="text-muted">socicon-angellist</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-ebay"></i>
                                </div>
                                <div class="text-muted">socicon-ebay</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-imdb"></i>
                                </div>
                                <div class="text-muted">socicon-imdb</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-stayfriends"></i>
                                </div>
                                <div class="text-muted">socicon-stayfriends</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-residentadvisor"></i>
                                </div>
                                <div class="text-muted">socicon-residentadvisor</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-google"></i>
                                </div>
                                <div class="text-muted">socicon-google</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-yandex"></i>
                                </div>
                                <div class="text-muted">socicon-yandex</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-sharethis"></i>
                                </div>
                                <div class="text-muted">socicon-sharethis</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-bandcamp"></i>
                                </div>
                                <div class="text-muted">socicon-bandcamp</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-itunes"></i>
                                </div>
                                <div class="text-muted">socicon-itunes</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-deezer"></i>
                                </div>
                                <div class="text-muted">socicon-deezer</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-telegram"></i>
                                </div>
                                <div class="text-muted">socicon-telegram</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-openid"></i>
                                </div>
                                <div class="text-muted">socicon-openid</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-amplement"></i>
                                </div>
                                <div class="text-muted">socicon-amplement</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-viber"></i>
                                </div>
                                <div class="text-muted">socicon-viber</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-zomato"></i>
                                </div>
                                <div class="text-muted">socicon-zomato</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-draugiem"></i>
                                </div>
                                <div class="text-muted">socicon-draugiem</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-endomodo"></i>
                                </div>
                                <div class="text-muted">socicon-endomodo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-filmweb"></i>
                                </div>
                                <div class="text-muted">socicon-filmweb</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-stackexchange"></i>
                                </div>
                                <div class="text-muted">socicon-stackexchange</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-wykop"></i>
                                </div>
                                <div class="text-muted">socicon-wykop</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-teamspeak"></i>
                                </div>
                                <div class="text-muted">socicon-teamspeak</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-teamviewer"></i>
                                </div>
                                <div class="text-muted">socicon-teamviewer</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-ventrilo"></i>
                                </div>
                                <div class="text-muted">socicon-ventrilo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-younow"></i>
                                </div>
                                <div class="text-muted">socicon-younow</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-raidcall"></i>
                                </div>
                                <div class="text-muted">socicon-raidcall</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-mumble"></i>
                                </div>
                                <div class="text-muted">socicon-mumble</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-medium"></i>
                                </div>
                                <div class="text-muted">socicon-medium</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-bebee"></i>
                                </div>
                                <div class="text-muted">socicon-bebee</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-hitbox"></i>
                                </div>
                                <div class="text-muted">socicon-hitbox</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-reverbnation"></i>
                                </div>
                                <div class="text-muted">socicon-reverbnation</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-formulr"></i>
                                </div>
                                <div class="text-muted">socicon-formulr</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-instagram"></i>
                                </div>
                                <div class="text-muted">socicon-instagram</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-battlenet"></i>
                                </div>
                                <div class="text-muted">socicon-battlenet</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-chrome"></i>
                                </div>
                                <div class="text-muted">socicon-chrome</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-discord"></i>
                                </div>
                                <div class="text-muted">socicon-discord</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-issuu"></i>
                                </div>
                                <div class="text-muted">socicon-issuu</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-macos"></i>
                                </div>
                                <div class="text-muted">socicon-macos</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-firefox"></i>
                                </div>
                                <div class="text-muted">socicon-firefox</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-opera"></i>
                                </div>
                                <div class="text-muted">socicon-opera</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-keybase"></i>
                                </div>
                                <div class="text-muted">socicon-keybase</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-alliance"></i>
                                </div>
                                <div class="text-muted">socicon-alliance</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-livejournal"></i>
                                </div>
                                <div class="text-muted">socicon-livejournal</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-googlephotos"></i>
                                </div>
                                <div class="text-muted">socicon-googlephotos</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-horde"></i>
                                </div>
                                <div class="text-muted">socicon-horde</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-etsy"></i>
                                </div>
                                <div class="text-muted">socicon-etsy</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-zapier"></i>
                                </div>
                                <div class="text-muted">socicon-zapier</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-google-scholar"></i>
                                </div>
                                <div class="text-muted">socicon-google-scholar</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-researchgate"></i>
                                </div>
                                <div class="text-muted">socicon-researchgate</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-wechat"></i>
                                </div>
                                <div class="text-muted">socicon-wechat</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-strava"></i>
                                </div>
                                <div class="text-muted">socicon-strava</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-line"></i>
                                </div>
                                <div class="text-muted">socicon-line</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-lyft"></i>
                                </div>
                                <div class="text-muted">socicon-lyft</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-uber"></i>
                                </div>
                                <div class="text-muted">socicon-uber</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-songkick"></i>
                                </div>
                                <div class="text-muted">socicon-songkick</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-viewbug"></i>
                                </div>
                                <div class="text-muted">socicon-viewbug</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-googlegroups"></i>
                                </div>
                                <div class="text-muted">socicon-googlegroups</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-quora"></i>
                                </div>
                                <div class="text-muted">socicon-quora</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-diablo"></i>
                                </div>
                                <div class="text-muted">socicon-diablo</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-blizzard"></i>
                                </div>
                                <div class="text-muted">socicon-blizzard</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-hearthstone"></i>
                                </div>
                                <div class="text-muted">socicon-hearthstone</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-heroes"></i>
                                </div>
                                <div class="text-muted">socicon-heroes</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-overwatch"></i>
                                </div>
                                <div class="text-muted">socicon-overwatch</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-warcraft"></i>
                                </div>
                                <div class="text-muted">socicon-warcraft</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-starcraft"></i>
                                </div>
                                <div class="text-muted">socicon-starcraft</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-beam"></i>
                                </div>
                                <div class="text-muted">socicon-beam</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-curse"></i>
                                </div>
                                <div class="text-muted">socicon-curse</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-player"></i>
                                </div>
                                <div class="text-muted">socicon-player</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-streamjar"></i>
                                </div>
                                <div class="text-muted">socicon-streamjar</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-nintendo"></i>
                                </div>
                                <div class="text-muted">socicon-nintendo</div>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch">
                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                    <i class="icon-2x la text-dark-50 socicon-hellocoton"></i>
                                </div>
                                <div class="text-muted">socicon-hellocoton</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
@endsection
