<div class="creators_list mt-16">
    <?php for ($i = 0; $i < 3; $i++) { ?>
    <div class="creator border_dashboard2 br-10">
        <div>
            <div class="recent_avatar">
                <img src="{{ asset('img/png/avatar2.png') }}" alt="avatars2">
            </div>
            <div class="creator_info">
                <span>Johnny FD</span>
                <span class="user_country border_dashboard3 br-5 s-20-s"><img src="{{ asset('img/png/flags/UK.png') }}" alt="UK flag"> UK</span>
                <div class="creator_social">
                    <a href="">
                        <img src="{{ asset('img/svg/icons/tiktok.svg') }}" alt="Tiktok icon">
                    </a>
                    <a href="">
                        <img src="{{ asset('img/svg/icons/youtube.svg') }}" alt="YT Icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="s-20-s">Creating viral reels for Instagram</div>
        <div class="creator_actions">
            <a href="" class="button button_1 button-br_md">Expectations</a>
            <a href="" class="button button_2 button-br_md">View invitation</a>
        </div>
    </div>
    <?php } ?>
</div>
