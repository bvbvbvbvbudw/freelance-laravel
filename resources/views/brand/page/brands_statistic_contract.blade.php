@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">
        <div class="border_dashboard dashboard_block bg_secondary brand_statistic_block">
            <div class="contracts_header">
                <h2 class="h2">All contract</h2>
                <div class="brand_statistic_header_filter" style="margin-right:auto;margin-left:0">
                    <div class=" dropdown">
                        <div class="dropbtn light_border">
                            <img class="_icon" src="{{ asset('img/svg/icons/light/ic_keyboard_arrow_down_48px.svg') }}" alt="icon">
                            Last 30 days
                        </div>
                        <div class="dropdown-content-block drodown-right">
                            <div class="dropdown-content sharepage_dropdown ">
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a href="#">Last 90 days</a>
                                    </li>
                                    <li>
                                        <a href="#">All time</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="dropbtn light_border">
                            <img class="_icon" src="{{ asset('img/svg/icons/light/ic_keyboard_arrow_down_48px.svg') }}" alt="icon">
                            By platform
                        </div>
                        <div class="dropdown-content-block dropdown-left">
                            <div class="dropdown-content sharepage_dropdown ">
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Youtube</a>
                                    </li>
                                    <li>
                                        <a href="#">Tictok</a>
                                    </li>
                                    <li>
                                        <a href="#">Instagram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-20 medium">Earnings available now: <span>$400</span></div>
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

            <div class="statistic_list ">

                <div class="statistic_row border_dashboard p-24-16 mt-24 br-10 border_dashboard3">
                    <div class="creator ">
                        <div>
                            <div class="recent_avatar">
                                <img src="{{ asset('img/png/avatar2.png') }}" alt="avatar">
                            </div>
                            <div class="creator_info">
                                <div>
                                    <span>Johnny FD</span>
                                    <span class="user_country border_dashboard3 br-5 s-20-s">
                                        <img src="{{ asset('img/png/flags/uk.png') }}" alt="flag UK">UK</span>
                                </div>
                                <div class="creator_social">
                                    <a href="">
                                        <img src="{{ asset('img/svg/icons/tiktok.svg') }}" alt="icon">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('img/svg/icons/youtube.svg') }}" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="s-20-s">Creating viral reels for Instagram</div>
                        <div class="s-20-s">Amount <span class="s-20-s text-active">400$</span></div>
                        <div class="creator_actions">
                            <a href="" class="button button_2 button-br_md">View contract</a>
                            <a href="" class="button button_1 button-br_md main_color_important">Statistic</a>

                        </div>
                    </div>
                    <hr class="mt-32">

                    <div class="earnings_row earnings_colored mt-32">
                        <div class="earnings_col">
                            <div class="statistic_name">Impression</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 (+ 5 %) </span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Likes</div>
                            <div class="statistic_val">350,090</div>
                            <div class="statisctic_increase">
                                <span>+1,900 (+ 5 %)</span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Comments</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 </span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Shares</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 (+ 5 %) </span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Site visits</div>
                            <div class="statistic_val">550</div>
                            <div class="statisctic_increase">
                                <span>+50 (+ 5 %) </span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Sales</div>
                            <div class="statistic_val">1550</div>
                            <div class="statisctic_increase">
                                <span>+150 (+ 10 %) </span>
                                <img src="{{ asset('img/svg/icons/light/ic_arrow_upward_48px2.svg') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-32">
                    <div class="contract_statistics_1 mt-32">
                        <div>
                            <h2 class="h2">Summary</h2>
                            <div class="contract_statistics_list">
                                <div><span>Contract type</span><span>Hourly</span></div>
                                <div><span>Rate</span><span>$10</span></div>
                                <div><span>Weekly limit</span><span>40 hrs/week</span></div>
                                <div><span>Manual time</span><span>Manual time allowed</span></div>
                                <div><span>Start date</span><span>Sep 29, 2023</span></div>
                            </div>
                        </div>
                        <div>
                            <h2 class="h2">Details</h2>
                            <div class="contract_statistics_list">
                                <div><span>Verified name</span><span>Johnny FD</span></div>
                                <div><span>Contract</span><span>45667876</span></div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-32">
                    <div class="contract_statistics_2 mt-32">
                        <h2 class="h2">Description</h2>
                        <p class="s-20 mt-32">Creating viral reels for Instagram</p>
                    </div>
                    <hr class="mt-32">
                    <div class="contract_statistics_3 mt-32">
                        <div class="contract_statistics_list2">

                            <div><span>Date</span><span>Sep 29</span></div>
                            <div><span>Description</span><span>You accepted EvaCosmeticsBrand offer at $10 per hour with a rate
                  increase of
                  5% every 3 monts.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('js/date-picker.js') }}"></script>
@include('brand.components.footer')
@endsection
