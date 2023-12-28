@extends('dashboard.app')
@section('content')
<main class="dashboard_main">
    @include('dashboard.components.columns.left_column')
    <div class="content">
        <h2 class="s-20 semibold">Recent</h2>
        <div class="dashboard_home_block">
            <div class="home_following_posts_block">
                <div class="home_following_posts_list">
                    <div class="home_following_post border_dashboard bg_secondary br-10">
                        <div class="home_post_header">
                            <img src="{{ asset('img/png/avatar2.png') }}" alt="avatar">
                            <span>Buy Me a Coffee</span>
                        </div>
                        <div class="home_post_image">
                            <img src="{{ asset('img/png/profile_bg.png') }}" alt="bg">
                        </div>
                        <div class="home_post_info">
                            <div class="s-12">OCT 04, 2023</div>
                            <div class="s-18 semibold">Display Your Sales Stats and Show Off Your Success!</div>
                        </div>
                        <div class="home_post_actions">
                            <div>
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px.svg') }}" alt="icon"></div>
                                <div>134</div>
                            </div>
                            <div>
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_message_48px.svg') }}" alt=""></div>
                                <div>18</div>
                            </div>
                            <div style="margin-left:auto">
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/file_upload.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="home_following_post border_dashboard bg_secondary br-10">
                        <div class="home_post_header">
                            <img src="{{ asset('img/png/avatar2.png') }}" alt="avatar">
                            <span>Buy Me a Coffee</span>
                        </div>
                        <div class="home_post_image">
                            <img src="{{ asset('img/png/profile_bg.png') }}" alt="bg">
                        </div>
                        <div class="home_post_info">
                            <div class="s-12">OCT 04, 2023</div>
                            <div class="s-18 semibold">Display Your Sales Stats and Show Off Your Success!</div>
                        </div>
                        <div class="home_post_actions">
                            <div>
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px.svg') }}" alt="icon"></div>
                                <div>134</div>
                            </div>
                            <div>
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_message_48px.svg') }}" alt=""></div>
                                <div>18</div>
                            </div>
                            <div style="margin-left:auto">
                                <div><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/file_upload.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home_following_list_block">
                <p class="s-14 medium">FOLLOWING</p>
                <div class="home_following_list">
                    <div class="home_following">
                        <img src="{{ asset('img/png/avatar.png') }}" alt="avatar">
                        <span>Buy Me a Coffee</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
