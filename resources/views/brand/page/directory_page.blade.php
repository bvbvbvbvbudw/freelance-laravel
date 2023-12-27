@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">


        <div class="dashboard_user_block border_dashboard dashboard_block bg_secondary">
            <div class="recommended_block ">
                <div class="recommended_header">
                    <h3 class="h3">Recommended for you</h3>
                    <p class="s-18 mt-16">Based on your profile and search history</p>
                </div>
                <div class="recommended_flter mt-24">
                    <div class="s-20-s">Filter</div>
                    <div class="mt-16 row_filter">
                        <div class="filter border_dashboard3">
                            <div class="filter_searchline">
                                <div class="filter_back">
                                    <img src="../img/svg/icons/left_arrow.svg" alt="">
                                </div>
                                <div class="filter_search">
                                    <div>
                                        <span class="filter_circle circle_red"></span>
                                        <span>Hotels</span>
                                        <img src="../img/svg/icons/cancel_filled.svg" alt="">
                                    </div>
                                    <input placeholder="Filter..." type="text">
                                </div>
                                <div class="filter_dialog">
                                    <div class="filter_tick"> <img src="../img/svg/icons/tick.svg" alt=""></div>
                                    <div class="filter_cancel"> <img src="../img/svg/icons/cancel.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="filter_list_block">
                                <div class="filter_list_header">
                                    Filter
                                </div>
                                <div class="filter_list">
                                    <div>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_red"></span> Hotels
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_orange"></span> Airbnb
                                            apartments
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"> <span class="filter_circle circle_blue"></span>Restaurants
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_green"></span> Tourist
                                            attraction
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="filter border_dashboard3">
                            <div class="filter_searchline">
                                <div class="filter_back">
                                    <img src="../img/svg/icons/left_arrow.svg" alt="">
                                </div>
                                <div class="filter_search">
                                    <div>
                                        <span class="filter_circle circle_red"></span>
                                        <span>Facebook</span>
                                        <img src="../img/svg/icons/cancel_filled.svg" alt="">
                                    </div>
                                    <input placeholder="Filter..." type="text">
                                </div>
                                <div class="filter_dialog">
                                    <div class="filter_tick"> <img src="../img/svg/icons/tick.svg" alt=""></div>
                                    <div class="filter_cancel"> <img src="../img/svg/icons/cancel.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="filter_list_block">
                                <div class="filter_list_header">
                                    Filter
                                </div>
                                <div class="filter_list">
                                    <div>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_red"></span> Facebook
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_orange"></span> Instagram
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"> <span class="filter_circle circle_blue"></span>Pinterest
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_green"></span> TikTok
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_red"></span> Youtube
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="filter border_dashboard3">
                            <div class="filter_searchline">
                                <div class="filter_back">
                                    <img src="../img/svg/icons/left_arrow.svg" alt="">
                                </div>
                                <div class="filter_search">
                                    <div>
                                        <span class="filter_circle circle_red"></span>
                                        <span>Germany</span>
                                        <img src="../img/svg/icons/cancel_filled.svg" alt="">
                                    </div>
                                    <input placeholder="Filter..." type="text">
                                </div>
                                <div class="filter_dialog">
                                    <div class="filter_tick"> <img src="../img/svg/icons/tick.svg" alt=""></div>
                                    <div class="filter_cancel"> <img src="../img/svg/icons/cancel.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="filter_list_block">
                                <div class="filter_list_header">
                                    Filter
                                </div>
                                <div class="filter_list">
                                    <div>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_red"></span> Germany
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_orange"></span> Italy
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"> <span class="filter_circle circle_blue"></span>Spain
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_green"></span> UK
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox_group_filter"><span class="filter_circle circle_orange"></span> USA
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="recommended_list mt-24">
                    @include('brand.components.lists.brands_recommended')
                    <div id="recommended_calendar" class=" date-picker border_dashboard3 br-10">
                        <div class="calendar_header">
                            <div class="s-14 medium">Select date</div>
                            <div>
                                <h2 class="s-32 calendar_date_preview">Mon, Sep 25</h2>
                                <img class="_icon" src="../img/svg/icons/<?= $theme ?>/mode_edit_24px.svg">
                            </div>
                        </div>
                        <div class="date-picker-table"></div>
                        <div class="calendar_footer">
                            <span onclick='ClearDatePicker("#recomended_calendar")'>Cancel</span><span
                                onclick='ChooseDate("#recomended_calendar")'>Ok</span>
                        </div>
                    </div>

                </div>
            </div>


            <script>
                $(document).ready(function () {
                    createCalendar('#recommended_calendar');
                })

            </script>
        </div>

    </div>
</main>
<script src="../js/date-picker.js"></script>
@include('brand.components.footer')
@endsection
