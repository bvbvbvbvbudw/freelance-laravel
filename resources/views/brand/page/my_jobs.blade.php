@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">

        @include('brand.components.info.2')
            <!--
    <div class="dashboard_user_block border_dashboard dashboard_block bg_secondary">
      <div class="dashboard_navsearch_block mt-16">
        <ul class="dashboard_navsearch_block-nav">
          <li data-nav="active_contact" class="active">Active contract</li>
          <li data-nav="applications">Applications</li>
          <li data-nav="invited">Invited</li>
          <li data-nav="settings">Settings</li>
        </ul>
      </div>
      <div>
        <div class="jobs_statistics_block">
          <div class="jobs_statistics_offers">
            <div class="jobs_statistics row-3 statistics">
              <div class="border_dashboard br-10">
                <h2 class="h1">0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium"
                    src="../img/svg/icons/<?= $theme ?>/icon _favorite_.svg"> 0
                  supporter</p>
              </div>
              <div class="border_dashboard br-10">
                <h2 class="h1">$0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium"
                    src="../img/svg/icons/<?= $theme ?>/ic_date_range_48px.svg">
                  Last 30 Days</p>
              </div>
              <div class="border_dashboard br-10">
                <h2 class="h1">$0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium"
                    src="../img/svg/icons/<?= $theme ?>/icon _attach money_.svg">
                  All time</p>
              </div>
            </div>
            <div class="jobs_offers">
              <div class="job_offer br-10 mt-32 border_dashboard">
                <div class="job_offer_info">
                  <h3 class="semibold s-20">
                    Congratulations, your invitation to work with <a href="">Anna DD has been confirmed.</a>
                  </h3>
                  <span class="s-14">Sep 25 - Present</span>
                </div>
                <div class="s-20-s">Creating viral reels for Instagram</div>
                <div class="job_offer_actions">
                  <a href="../dashboard/job_details.php"
                    class="button button_1 flex flex-center main_color_important">View
                    offer</a>
                  <div onclick="createCalendar('#jobs_calendar')"
                    class="button button_2 flex flex-center choose_offer_date">
                    Choose a date</div>
                </div>
              </div>
              <div class="job_offer br-10 mt-32 border_dashboard">
                <div class="job_offer_info">
                  <h3 class="semibold s-20">
                    Congratulations, you have a new job invite to New York from Ritz Carlton Hotel for 3 days and 2
                    nights!!
                  </h3>
                  <span class="s-14">Sep 25 - Present</span>
                </div>
                <div class="s-20-s">Creating viral reels for Instagram</div>
                <div class="job_offer_actions">
                  <a href="#" class="button button_1 flex flex-center main_color_important">View offer</a>
                  <div onclick="createCalendar('#jobs_calendar')"
                    class="button button_2 flex flex-center choose_offer_date">
                    Choose a date</div>
                </div>
              </div>
            </div>
          </div>
          <div id="jobs_calendar" class=" date-picker border_dashboard br-10" style="display:none">
            <div class="calendar_header">
              <div class="s-14 medium">Select date</div>
              <div>
                <h2 class="s-32 calendar_date_preview">Mon, Sep 25</h2>
                <img class="_icon" src="../img/svg/icons/<?= $theme ?>/mode_edit_24px.svg">
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
-->

        <div class="dashboard_myjobs_block border_dashboard dashboard_block bg_secondary">
            <div class="contracts_header">
                <h3 class="s-20 semibold">Active Contracts</h3>
                <div class="border_dashboard3 input_group">
          <span class="input_grop_text"><img class="_icon"
                                             src="../img/svg/icons/<?= $theme ?>/ic_search_48px3.svg"></span>
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
                                <img class="_icon_medium" src="../img/svg/icons/<?= $theme ?>/ic_pan_tool_48px2.svg">
                            </a>
                            <a>
                                <img class="_icon_medium" src="../img/svg/icons/<?= $theme ?>/ic_favorite_border_48px2.svg">
                            </a>
                        </div>
                    </div>
                    <div class="mypost_info">
                        <div><span class="s-16 medium">Fixed price</span> - Expert - Est. Budget: $100 - Posted 30 minutes ago.
                        </div>
                        <div class="mypost_location">
                            <img class="_icon" src="../img/svg/icons/<?= $theme ?>/ic_language_48px.svg" alt="">
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
<script src="../js/date-picker.js"></script>
@include('brand.components.footer')
@endsection
