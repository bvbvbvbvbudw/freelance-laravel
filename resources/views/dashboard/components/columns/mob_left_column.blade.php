<?php $theme = 'light' ?>

<nav class="mob_left_column left_column bg_secondary">
    <div class="left_panel_close_button">
        <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme .'/ic_close_48px.svg') }}" alt="icon"></div>
    <div class="nav_category">
        <ul class="nav_category-list">
            <li>
                <a href="{{route('mainPage')}}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _home_.svg') }}" alt="icon">
                    Home
                </a>
            </li>
            <li><a href="{{route('viewViewProfilePage', auth()->user()->name)}}"><img src="{{ asset('img/svg/icons/' . $theme . '/icon _dashboard_.svg') }}" alt="icon">View
                    Page</a></li>
        </ul>
        <div class="nav_category-name">Monetize</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewDonate') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}" alt="icon">Donations</a></li>
            <li><a href="{{ route('viewJobsPage.index') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _people_.svg') }}" alt="icon">Jobs</a></li>
            <li><a href="{{ route('viewMembershipPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _lock_.svg') }}" alt="icon">Membership</a></li>
            <li><a href="{{ route('viewExtrasPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _shopping bag_.svg') }}" alt="icon">Extras</a></li>
            <li><a href="{{ route('viewCommissionsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}" alt="icon">Commissions</a></li>
        </ul>
        <div class="nav_category-name">Publish</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewPublishPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _analytics_.svg') }}" alt="icon">View</a>
            </li>
            <li><a href="{{ route('viewPostsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _list alt_.svg') }}" alt="icon">Posts</a>
            </li>
            <li><a href="{{ route('viewMessagePage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _email_.svg') }}" alt="icon">Messages</a></li>
        </ul>
        <div class="nav_category-name">Settings</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewButtonsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _analytics_.svg') }}" alt="icon">Buttons &
                    Graphics</a></li>
            <li><a href="{{ route('viewIntegrationsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _list alt_.svg') }}" alt="icon">Integrations</a></li>
            <li><a href="{{ route('viewPayoutsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _attach money_.svg') }}" alt="icon">Payouts</a></li>
            <li>
                <a href="{{ route('viewSettingsPage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _settings_.svg') }}" alt="icon">Settings</a>
            </li>
        </ul>
        <div class="nav_category-name">More</div>
        <ul class="nav_category-list">
            <li><a href="{{route('mainPage')}}"><img class="_icon"
                                                     src="{{ asset('img/svg/icons/' . $theme . '/icon _people_.svg') }}">Creators I follow</a>
            </li>
            <li> <a href="{{route('viewEditProfilePage', auth()->user()->name)}}">My account</a></li>
            <li>
                <a href=""><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/logout.svg') }}" alt="icon">Logout</a>
            </li>
        </ul>
    </div>
</nav>
