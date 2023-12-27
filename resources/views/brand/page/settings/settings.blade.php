@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('brand.components.columns.brands_left_column')
        <div class="content">
            <div class="border_dashboard dashboard_block p-32-24 bg_secondary">

                <div class="dashboard_navsearch_block mt-16 ">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="settings" class="active">Settings</li>
                        <li data-nav="notifications">Notifications</li>
                    </ul>
                </div>
                <div id="settings_block" class="navs_block">
                    @include('dashboard.components.settings.setings')
                </div>
                <div id="notifications_block" style="display:none" class="navs_block">
                    @include('dashboard.components.settings.notifications')
                </div>
            </div>
            @include('dashboard.components.settings.settings2')
        </div>
    </main>
@endsection
