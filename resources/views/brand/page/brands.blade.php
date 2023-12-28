@extends('brand.app')
@section('content')
    <main class="dashboard_main">
        @include('brand.components.columns.brands_left_column')
        <div class="content">
            @include('brand.components.info.3')
            <div class="dashboard_user_block border_dashboard dashboard_block bg_secondary">
                <div>
                    <div class="jobs_statistics_block">
                        <div class="jobs_statistics_offers">
                            <div class="jobs_statistics row-3 statistics">
                                <div class="border_dashboard br-10">
                                    <h2 class="h1">0</h2>
                                    <p class="s-18 mt-16">
                                        <img class="_icon_medium" src='{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}' alt="icon"> 0
                                        supporter</p>
                                </div>
                                <div class="border_dashboard br-10">
                                    <h2 class="h1">$0</h2>
                                    <p class="s-18 mt-16">
                                        <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_date_range_48px.svg') }}" alt="icon">
                                        Last 30 Days</p>
                                </div>
                                <div class="border_dashboard br-10">
                                    <h2 class="h1">$0</h2>
                                    <p class="s-18 mt-16">
                                        <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/icon _attach money_.svg') }}" alt="icon">
                                        All time</p>
                                </div>
                            </div>
                            <div class="jobs_offers">
                                <div class="job_offer br-10 mt-32 border_dashboard3">
                                    <div class="job_offer_info">
                                        <h3 class="semibold s-20">
                                            Congratulations, your invitation to work with <a href="">Anna DD has been confirmed.</a>
                                        </h3>
                                        <span class="s-14">Sep 25 - Present</span>
                                    </div>
                                    <div class="s-20-s">Creating viral reels for Instagram</div>
                                    <div class="job_offer_actions">
                                        <div onclick="offerPopup()" href="../dashboard/job_details.php"
                                             class="button button_1 flex flex-center main_color_important">View
                                            offer</div>
                                        <div onclick="" class="button button_2 flex flex-center choose_offer_date">
                                            Choose a date</div>
                                    </div>
                                </div>
                                <div class="job_offer br-10 mt-32 border_dashboard3">
                                    <div class="job_offer_info">
                                        <h3 class="semibold s-20">
                                            Congratulations, you have a new job invite to New York from Ritz Carlton Hotel for 3 days and 2
                                            nights!!
                                        </h3>
                                        <span class="s-14">Sep 25 - Present</span>
                                    </div>
                                    <div class="s-20-s">Creating viral reels for Instagram</div>
                                    <div class="job_offer_actions">
                                        <div onclick="offerPopup()" href="#" class="button button_1 flex flex-center main_color_important">
                                            View offer</div>
                                        <div onclick="" class="button button_2 flex flex-center choose_offer_date">
                                            Choose a date</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="jobs_calendar" class=" date-picker border_dashboard3 br-10 " style="display:none">
                            <div class="calendar_header">
                                <div class="s-14 medium">Select date</div>
                                <div>
                                    <h2 class="s-32 calendar_date_preview">Mon, Sep 25</h2>
                                    <img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/mode_edit_24px.svg') }}" alt="icon">
                                </div>
                            </div>
                            <div class="date-picker-table"></div>
                            <div class="calendar_footer">
                                <span onclick='ClearDatePicker("#jobs_calendar")'>Cancel</span><span
                                    onclick='ChooseDate("#jobs_calendar")'>Ok</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-16">
                </div>
            </div>
            <div class="dashboard_recent_block border_dashboard  dashboard_block bg_secondary">

                <div class="contract_header_nav">
                    <div style="margin-top:10px;margin-bottom:0"
                         class="dashboard_navsearch_block dashboard_navsearch_block_noborder mt-16">
                        <ul class="dashboard_navsearch_block-nav">
                            <li data-nav="active_contact" class="active">Active contract</li>
                            <li data-nav="applications">Applications</li>
                            <li data-nav="invited">Invited</li>

                        </ul>
                    </div>
                    <div class="contracts_header">
                        <div class="s-20 medium">Earnings available now: <span class="s-20 medium text-active">$400</span></div>
                        <div class="dropdown">
                            <div class="dropbtn dropbtn-image transparent more more_circle more_color2">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="dropdown-content-block dropdown-right">
                                <div class="dropdown-content sharepage_dropdown ">
                                    <ul class="dropdown-list">
                                        <li>
                                            <a href="#">Get paid</a>
                                        </li>
                                        <li>
                                            <a href="#">View pending earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border_dashboard3 input_group">
            <span class="input_grop_text"><img class="_icon"
                                               src="{{ asset('img/svg/icons/' . $theme . '/ic_search_48px3.svg') }}" alt="icon"></span>
                            <input class="input-transparent input_group_control" placeholder="Search contracts">
                        </div>
                    </div>
                </div>
                <div class="navs_block" id="active_contact_block">
                    @include('brand.components.creators.contract_creators')
                </div>
                <div class="navs_block" id="applications_block" style="display:none">
                    @include('brand.components.creators.applied_creators')
                </div>
                <div class="navs_block" id="invited_block" style="display:none">
                    @include('brand.components.creators.invited_creators')
                </div>
                <div class="navs_block" id="settings_block" style="display:none">
                    @include('brand.components.creators.settings_creators')
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function () {
            createCalendar('#jobs_calendar');
        });
    </script>
    <script src="{{ asset('js/date-picker.js') }}"></script>
    @include('brand.components.footer')
@endsection
