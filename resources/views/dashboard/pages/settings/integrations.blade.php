@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="integration_social_block bg_secondary br-10 ">
                <h2 class="h2">Social Feed</h2>
                <p class="s-18 mt-24 light_grey">Here's an ongoing list of integrations to help you earn more supporters and to
                    better
                    connect with them.</p>
                <div class="integration_social_list mt-24">
                    <div class="integration_social border_dashboard br-10 border_dashboard3">
                        <div class="integration_social_img">
                            <img src="../img/png/instagram.png" alt="">
                        </div>
                        <div class="integration_social_text">
                            <p class="s-20 medium">Instagram Shout-outs</p>
                            <p class="s-18 light_grey">Automatically tweet a shout-out when you get a coffee with a message. Your fans
                                would love
                                it!</p>
                        </div>
                        <div class="integration_social_button">
                            <a onclick="authorizePopup()" class="blue_btn" href="#">Connect</a>
                        </div>
                    </div>
                    <div class="integration_social border_dashboard br-10 border_dashboard3">
                        <div class="integration_social_img">
                            <img src="../img/png/youtube.png" alt="">
                        </div>
                        <div class="integration_social_text">
                            <p class="s-20 medium">YouTube</p>
                            <p class="s-18 light_grey">Automatically tweet a shout-out when you get a coffee with a message. Your fans
                                would love
                                it!</p>
                        </div>
                        <div class="integration_social_button">
                            <a onclick="authorizePopup()" class="blue_btn" href="#">Connect</a>
                        </div>
                    </div>
                    <div class="integration_social border_dashboard br-10 border_dashboard3">
                        <div class="integration_social_img">
                            <img src="../img/png/tiktok.png" alt="">
                        </div>
                        <div class="integration_social_text">
                            <p class="s-20 medium">TikTok</p>
                            <p class="s-18 light_grey">Automatically tweet a shout-out when you get a coffee with a message. Your fans
                                would love
                                it!</p>
                        </div>
                        <div class="integration_social_button">
                            <a onclick="authorizePopup()" class="blue_btn" href="#">Connect</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
@endsection
