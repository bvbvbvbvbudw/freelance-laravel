@extends("dashboard.app")
@section('content')
    <main class="dashboard_main">
        @include('brand.components.columns.brands_left_column')
        <div class="content">
            <div class="dashboard_jobs_block border_dashboard dashboard_block p-32-24 bg_secondary">
                <h3 class="h3">Messages</h3>
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="all_messages" class="active">All</li>
                        <li data-nav="unread">Unread</li>
                    </ul>
                    <div class=" dashboard_navsearch_block-actions">
                        <button class="button_noappearance">
                            <img class=" _icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/add_24px3.svg') }}" alt="icon">
                        </button>
                        <button class="button_noappearance">
                            <img class=" _icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_search_48px3.svg') }}" alt="icon">
                        </button>
                        <button class="button_noappearance">
                            <img class=" _icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/icon _settings_3.svg') }}" alt="icon">
                        </button>
                    </div>
                </div>
                <hr>
                <div id="all_messages_block" class="navs_block">
                    @include('dashboard.components.messages.all')
                </div>
                <div id="unread_block" class="navs_block" style="display:none">
                    @include('dashboard.components.messages.unread')
                </div>
            </div>
        </div>
    </main>
@endsection

