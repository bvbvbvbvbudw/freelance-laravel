@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <div class="dashboard_jobs_block border_dashboard dashboard_block p-32-24 bg_secondary">
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="jobs" class="active">Jobs</li>
                        <li data-nav="explore">Explore jobs</li>
                        <li data-nav="settings">Settings</li>
                    </ul>
                </div>
                <div id="jobs_block" class="navs_block">
                    @include('dashboard.components.jobs.jobs')
                </div>
                <div id="explore_block" style="display:none" class="navs_block">
                    @include('dashboard.components.jobs.explore')
                </div>
                <div id="settings_block" style="display:none" class="navs_block">
                    @include('dashboard.components.jobs.settings')
                </div>
            </div>

        </div>
    </main>
@endsection
