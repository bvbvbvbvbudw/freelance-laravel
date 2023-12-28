@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">
        @include('brand.components.info.2')
             <div class="dashboard_myjobs_block border_dashboard dashboard_block bg_secondary">
            <div class="contracts_header">
                <h3 class="s-20 semibold">Active Contracts</h3>
                <div class="border_dashboard3 input_group">
          <span class="input_grop_text"><img class="_icon"
                                             src="{{ asset('img/svg/icons/' . $theme . '/ic_search_48px3.svg') }}" alt="icon"></span>
                    <input class="input-transparent input_group_control" placeholder="Search contracts">
                </div>
            </div>
            <div class="myposts_list">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="mypost p-24-16 border_dashboard3 br-10">
                    <div class="mypost_header flex flex-between">
                        <h2 class="s-20-s">Creating viral reels for Instagram</h2>
                        <div>
                            <a>
                                <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_pan_tool_48px2.svg') }}" alt="icon">
                            </a>
                            <a>
                                <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px2.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                    <div class="mypost_info">
                        <div><span class="s-16 medium">Fixed price</span> - Expert - Est. Budget: $100 - Posted 30 minutes ago.
                        </div>
                        <div class="mypost_location">
                            <img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_language_48px.svg') }}" alt="icon">
                            United Kingdom
                        </div>

                    </div>
                    <div class="mypost_content mt-16">
                        UI UX Desktop designer wanted to work on the desktop version of our social video platform.<br><br>

                        Some of our existing designs will be provided to help you navigate quickly and create a better user
                        experience and flow. From login to creating a profile and more features.<br><br>

                        The landing page needs reviews as well as adding video to make it more engaging.<br><br>

                        Exclusively If you are creative and have some experience in designing Social platforms, Video streaming, and
                        Saas, then we definitely want to hear from you.<br><br>
                        This is a video social platform so no interest in sharing any corporate or projects that are not in the same
                        space.<br><br>

                        <b>Look forward to receiving your proposals!</b>
                    </div>
                    <div class="mypost_actions mt-16">
                        <a href="#" class="button button_1 button-br_md main_color_important">Apply Now</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</main>
<script src="{{ asset('js/date-picker.js') }}"></script>
@include('brand.components.footer')
@endsection
