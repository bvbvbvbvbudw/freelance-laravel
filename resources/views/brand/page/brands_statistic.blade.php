@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">
        <div class="border_dashboard dashboard_block bg_secondary brand_statistic_block">
            <div class="brand_statistic_header">
                <h2 class="h2">Statistic</h2>
                <div class="brand_statistic_header_filter">
                    <div class=" dropdown">
                        <div class="dropbtn light_border">
                            <img class="_icon" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
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
                            <img class="_icon" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
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

            </div>

            <div class="statistic_list">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="statistic_row border_dashboard3 p-24-16 mt-24 br-10">
                    <div class="creator ">
                        <div>
                            <div class="recent_avatar">
                                <img src="../img/png/avatar2.png" alt="">
                            </div>
                            <div class="creator_info">
                                <div>
                                    <span>Johnny FD</span>
                                    <span class="user_country border_dashboard3 br-5 s-20-s"><img src="../img/png/flags/uk.png">
                      UK</span>
                                </div>
                                <div class="creator_social">
                                    <a href="">
                                        <img src="../img/svg/icons/tiktok.svg" alt="">
                                    </a>
                                    <a href="">
                                        <img src="../img/svg/icons/youtube.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="s-20-s">Creating viral reels for Instagram</div>
                        <div class="s-20-s">Amount <span class="s-20-s text-active">400$</span></div>
                        <div class="creator_actions">
                            <a href="" class="button button_2 button-br_md">View contract</a>
                            <a href="../dashboard/brands_statistics_contract.php"
                               class="button button_1 button-br_md main_color_important">Statistic</a>

                        </div>
                    </div>
                    <hr class="mt-32">

                    <div class="earnings_row earnings_colored mt-32">
                        <div class="earnings_col">
                            <div class="statistic_name">Impression</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 (+ 5 %) </span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Likes</div>
                            <div class="statistic_val">350,090</div>
                            <div class="statisctic_increase">
                                <span>+1,900 (+ 5 %)</span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Comments</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 </span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Shares</div>
                            <div class="statistic_val">2,345</div>
                            <div class="statisctic_increase">
                                <span>+345 (+ 5 %) </span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Site visits</div>
                            <div class="statistic_val">550</div>
                            <div class="statisctic_increase">
                                <span>+50 (+ 5 %) </span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                        <div class="earnings_col">
                            <div class="statistic_name">Sales</div>
                            <div class="statistic_val">1550</div>
                            <div class="statisctic_increase">
                                <span>+150 (+ 10 %) </span>
                                <img src="../img/svg/icons/light/ic_arrow_upward_48px2.svg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<script src="../js/date-picker.js"></script>
@include('brand.components.footer')
@endsection
