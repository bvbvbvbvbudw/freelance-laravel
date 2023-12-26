<?php $theme = 'light' ?>
<nav class="left_column bg_secondary">
    <div class="nav_category">
        <ul class="nav_category-list">
            <li><a href="{{route('mainPage')}}"><img src="../img/svg/icons/<?= $theme ?>/icon _home_.svg">Home</a>
            </li>
            <li><a href="{{route('viewProfilePage', auth()->user()->name)}}"><img src="../img/svg/icons/<?= $theme ?>/icon _dashboard_.svg">View
                    Page</a></li>
        </ul>
        <div class="nav_category-name">Monetize</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewDonate') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _favorite_.svg">Donations</a></li>
            <li><a href="{{ route('viewJobsPage.index') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _people_.svg">Jobs</a></li>
            <li><a href="{{ route('viewMembershipPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _lock_.svg">Membership</a></li>
            <li><a href="{{ route('viewExtrasPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _shopping bag_.svg">Extras</a></li>
            <li><a href="{{ route('viewCommissionsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _favorite_.svg">Commissions</a></li>
        </ul>
        <div class="nav_category-name">Publish</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewPublishPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _analytics_.svg">View</a>
            </li>
            <li><a href="{{ route('viewPostsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _list alt_.svg">Posts</a>
            </li>
            <li><a href="{{ route('viewMessagePage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _email_.svg">Messages</a></li>
        </ul>
        <div class="nav_category-name">Settings</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('viewButtonsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _analytics_.svg">Buttons &
                    Graphics</a></li>
            <li><a href="{{ route('viewIntegrationsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _list alt_.svg">Integrations</a></li>
            <li><a href="{{ route('viewPayoutsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _attach money_.svg">Payouts</a></li>
            <li>
                <a href="{{ route('viewSettingsPage') }}"><img
                        src="../img/svg/icons/<?= $theme ?>/icon _settings_.svg">Settings</a>
            </li>
        </ul>
    </div>
</nav>
