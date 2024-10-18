<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">@lang('translation.Dashboard')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">@lang('translation.Apps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ url('/apps-invoices-list') }}" class="">
                                <span data-key="t-invoices">@lang('translation.Invoice_List')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-recoverpw" data-key="t-recover-password">@lang('translation.Recover_Password')</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">@lang('translation.Pages')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">@lang('translation.Maintenance')</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts">@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" data-key="t-apex-charts">@lang('translation.Apexcharts')</a></li>

                    </ul>
                </li>

            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="build/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">@lang('translation.Unlimited_Access')</h5>
                        <p class="font-size-13">
                            @lang("translation.Upgrade_your_plan_from_a_Free_trial,_to_select_‘Business_Plan’").</p>
                        <a href="#!" class="btn btn-primary mt-2">@lang('translation.Upgrade_Now')</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->


{{--                        Calendar--}}
{{--                        <li>--}}
{{--                            <a href="apps-calendar">--}}
{{--                                <span data-key="t-calendar">@lang('translation.Calendar')</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                            Chat======--}}
{{--                        <li>--}}
{{--                            <a href="apps-chat">--}}
{{--                                <span data-key="t-chat">@lang('translation.Chat')</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                            Email======--}}
{{--                        <li>--}}
{{--                            <a href="javascript: void(0);" class="has-arrow">--}}
{{--                                <span data-key="t-email">@lang('translation.Email')</span>--}}
{{--                            </a>--}}
{{--                            <ul class="sub-menu" aria-expanded="false">--}}
{{--                                <li><a href="apps-email-inbox" data-key="t-inbox">@lang('translation.Inbox')</a></li>--}}
{{--                                <li><a href="apps-email-read" data-key="t-read-email">@lang('translation.Read_Email')</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}


{{--<li><a href="auth-login" data-key="t-login">@lang('translation.Login')</a></li>--}}
{{--<li><a href="auth-register" data-key="t-register">@lang('translation.Register')</a></li>--}}
{{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">@lang('translation.Pages')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">@lang('translation.Maintenance')</a>
                        </li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                        </li>
                        <li><a href="pages-timeline" data-key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs" data-key="t-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing" data-key="t-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404" data-key="t-error-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500" data-key="t-error-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>
--}}
{{--<li>
                            <a href="javascript: void(0);" class="">
                                <span data-key="t-blog">@lang('translation.Blog')</span>
                                <span class="badge rounded-pill badge-soft-danger float-end" key="t-new">New</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-blog-list" data-key="t-blog-list">@lang('translation.Blog_list')</a></li>
                            </ul>
                        </li>--}}

{{-- <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill badge-soft-danger text-danger float-end">7</span>
                        <span data-key="t-forms">@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" data-key="t-form-elements">@lang('translation.Basic_Elements')</a>
                        </li>
                        <li><a href="form-validation" data-key="t-form-validation">@lang('translation.Validation')</a>
                        </li>
                        <li><a href="form-advanced" data-key="t-form-advanced">@lang('translation.Advanced_Plugins')</a>
                        </li>
                        <li><a href="form-editors" data-key="t-form-editors">@lang('translation.Editors')</a></li>
                        <li><a href="form-uploads" data-key="t-form-upload">@lang('translation.File_Upload')</a></li>
                        <li><a href="form-wizard" data-key="t-form-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="form-mask" data-key="t-form-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

--}}
