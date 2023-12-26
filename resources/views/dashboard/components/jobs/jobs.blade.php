<?php $theme = 'light' ?>
<div class="jobs_statistics_block">
    <div class="jobs_statistics_offers">
        <div class="jobs_statistics row-3 statistics">
            <div class="border_dashboard br-10">
                <h2 class="h1">0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium" src="../../img/svg/icons/<?= $theme ?>/icon _favorite_.svg"> 0
                    supporter</p>
            </div>
            <div class="border_dashboard br-10">
                <h2 class="h1">$0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium" src="../../img/svg/icons/<?= $theme ?>/ic_date_range_48px.svg">
                    Last 30 Days</p>
            </div>
            <div class="border_dashboard br-10">
                <h2 class="h1">$0</h2>
                <p class="s-18 mt-16"><img class="_icon_medium" src="../../img/svg/icons/<?= $theme ?>/icon _attach money_.svg">
                    All time</p>
            </div>
        </div>
        <div class="jobs_offers">
            @if(count($jobs) > 0)
                @foreach($jobs as $item)
                    <div class="job_offer br-10 mt-32 border_dashboard3">
                        <div class="job_offer_info">
                            <h3 class="semibold s-20"><a href="/jobs/{{$item->id}}">{{ $item -> title }}</a></h3>
                            <span class="s-14">Budget: $ {{ $item->budget }}</span>
                            <p>{{ $item ->description }}</p>
                        </div>
                        <div class="job_offer_actions">
                            <a href="./jobs/{{$item->id}}" class="button button_1 flex flex-center main_color_important">
                                View offer
                            </a>

                            <div class="button button_2 flex flex-center choose_offer_date">
                                Choose a date
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>
    </div>
    <div id="jobs_calendar" class=" date-picker border_dashboard3 br-10">
        <div class="calendar_header">
            <div class="s-14 medium">Select date</div>
            <div>
                <h2 class="s-32 calendar_date_preview">Mon, Sep 25</h2>
                <img class="_icon" src="../../img/svg/icons/<?= $theme ?>/mode_edit_24px.svg">
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
@include('dashboard.components.jobs.active_contracts')

<script>
    $(document).ready(function () {
        createCalendar('#jobs_calendar');
    });

</script>
<script src="../../js/date-picker.js"></script>
