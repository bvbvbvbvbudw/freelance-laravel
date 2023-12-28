<nav class="left_column bg_secondary">
    <div class="nav_category">
        <ul class="nav_category-list">
            <li><a href="{{ route('brandDashboard') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _home_.svg') }}">Home</a>
            </li>
            <li><a href="{{ route('viewProfilePage', auth()->user()->name) }}"><img src="{{ asset('img/svg/icons/' . $theme . '/icon _dashboard_.svg') }}">View
                    Page</a></li>
            <li><a href="{{ route('brandExplore') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}">Explore creators</a></li>
            <li><a href="{{ route('brandMyJob') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _people_.svg') }}">My jobs</a></li>
            <li><a href="{{ route('brandCampaigns') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _lock_.svg') }}">All campaigns</a></li>
            <li><a href="{{ route('brandCommissions') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _shopping bag_.svg') }}">Commissions</a></li>
        </ul>
        <div class="nav_category-name">Publish</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('brandJob') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _analytics_.svg') }}">Post a job</a>
            </li>
            <li><a href="{{ route('brandMessage') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _email_.svg') }}">Messages</a></li>
        </ul>
        <div class="nav_category-name">Settings</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('brandButtons') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _analytics_.svg') }}" alt="icon">Buttons &
                    Graphics</a></li>
            <li><a href="{{ route('brandIntegrations') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _list alt_.svg') }}">Integrations</a></li>
            <li><a href="{{ route('brandPayouts') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _attach money_.svg') }}">Payouts</a></li>
            <li>
                <a href="{{ route('brandSettings') }}"><img
                        src="{{ asset('img/svg/icons/' . $theme . '/icon _settings_.svg') }}">Settings</a>
            </li>
        </ul>
    </div>
</nav>
