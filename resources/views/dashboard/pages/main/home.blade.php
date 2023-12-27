<?php $theme = 'light' ?>
@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
    @include('dashboard.components.columns.left_column')
    <div class="content">
        <div class="dashboard_user_block border_dashboard dashboard_block bg_secondary">
            <div class="dashboard_user_block-profile">
                <div class="dashboard_user_block-profile-info">
                    <div>
                        <img src="../img/png/avatar.png" alt="avatar">
                    </div>
                    <div>
                        <h2 class="h2">Hi, {{ $user -> name }}!</h2>
                        <p>buymeacoffee.com/websitedev4</p>
                    </div>
                </div>
                <div class="dashboard_user_block-profile-share">
                    <div class="sharepage_button-block dropdown">
                        <div class="sharepage_button dropbtn light_border">
                            <img class="_icon" src="../img/svg/icons/light/Share Rounded.svg">
                            Share page
                        </div>
                        <div class="dropdown-content-block dropdown-left sm-dropdown-right">
                            <div class="dropdown-content sharepage_dropdown ">
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#"><img class="_icon" src="../img/svg/icons/light/ic_content_copy_48px.svg">Copy
                                            link</a>
                                    </li>
                                    <li>
                                        <a href=" #"><img class="_icon" src="../img/svg/icons/light/twitter.svg">Tweet</a>
                                    </li>
                                    <li>
                                        <a href=" #"><img class="_icon" src="../img/svg/icons/light/facebook.svg">Share</a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="_icon" src="../img/svg/icons/light/ic_photo_camera_48px.svg">Get
                                            my
                                            QR
                                            code</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard_user_block-earnings">
                <div class="dashboard_user_block-earnings-header">
                    <h2 class="h2">Earnings</h2>
                    <div class="sharepage_button-block dropdown">
                        <div class="sharepage_button dropbtn light_border">
                            <img class="_icon" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
                            Last 30 days
                        </div>
                        <div class="dropdown-content-block dropdown-left sm-dropdown-right">
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
                </div>
                <div class="dashboard_user_block-earnings-total">
                    <h2 class="h1">$0</h2>
                </div>
                <div class="dashboard_user_block-earnings-groups">
                    <div>
                        <span class="square square-yellow"></span>
                        $0 Donations
                    </div>
                    <div>
                        <span class="square square-green"></span>
                        $0 Jobs
                    </div>
                    <div>
                        <span class="square square-red"></span>
                        $0 Membership
                    </div>
                    <div>
                        <span class="square square-blue"></span>
                        $0 Extras
                    </div>
                    <div>
                        <span class="square square-purple"></span>
                        $0 Commissions
                    </div>
                </div>
            </div>
        </div>
        @if(count($posts) === 0)
            <div class="dashboard_supporters_block border_dashboard dashboard_block bg_secondary">
                <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _favorite_2.svg">
                <h2 class="h2">You don't have any updates yet</h2>
                <p class="s-30">Share your page with your audience to get started.</p>
            </div>
        @else
            <div class="wrapper-post">
                @foreach($posts as $post)
                    <div class="item-post" style="border-bottom: 1px solid black">
                        <h3 class="h2">{{ $post -> title }}</h3>
                        <img src="{{ asset($post -> photo_path) }}" alt="photo post">
                        <p>{{ $post -> description }} | {{ $post->created_at }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="dashboard_moreways_block  dashboard_block">
            <h2 class="h2 dashboard_moreways_header">Best ways to earn</h2>
            <div class="dashboard_moreways_cards">
                <div class="dashboard_moreways_card border_dashboard bg_secondary">
                    <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _lock_2.svg">
                    <h3>Enable membership</h3>
                    <p class="dashboard_moreways_card-description">Monthly membership for your biggest fans.</p>
                    <a href="../dashboard/membership.php" class="dashboard_moreways_card-setup">Set up</a>
                </div>
                <div class="dashboard_moreways_card border_dashboard bg_secondary">
                    <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _shopping bag_2.svg">
                    <h3>Sell Extras</h3>
                    <p class="dashboard_moreways_card-description">Introducing extras, the creative way to sell.</p>
                    <a href="../dashboard/extras.php" class="dashboard_moreways_card-setup">Set up</a>
                </div>
                <div class="dashboard_moreways_card border_dashboard bg_secondary">
                    <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/mode_edit_24px2.svg">
                    <h3>Collaborate</h3>
                    <p class="dashboard_moreways_card-description">We have a lot of opportunities for you, the new way to Travel &
                        Earn!</p>
                    <a href="../dashboard/jobs.php" class="dashboard_moreways_card-setup">Learn more</a>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
