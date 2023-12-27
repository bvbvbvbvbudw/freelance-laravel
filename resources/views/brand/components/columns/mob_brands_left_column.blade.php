<nav class="left_column bg_secondary">
    <div class="nav_category">
        <ul class="nav_category-list">
            <li><a href="{{ route('brandDashboard') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _home_.svg') }}" alt="icon">Home</a>
            </li>
            <li><a href="../profile/ ">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _dashboard_.svg') }}" alt="icon">View
                    Page</a></li>
            <li><a href="{{ route('brandExplore') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}" alt="icon">Explore creators</a></li>
            <li><a href="{{ route('brandMyJob') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _people_.svg') }}" alt="icon">My jobs</a></li>
            <li><a href="{{ route('brandCampaigns') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _lock_.svg') }}" alt="icon">All campaigns</a></li>
            <li><a href="{{ route('brandCommissions') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _shopping bag_.svg') }}" alt="icon">Commissions</a></li>

        </ul>
        <div class="nav_category-name">Publish</div>
        <ul class="nav_category-list">
            <li><a href="{{ route('brandJob') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _analytics_.svg') }}" alt="icon">Post a job</a>
            </li>
            <li><a href="{{ route('brandMessage') }}">
                    <img src="src="{{ asset('img/svg/icons/' . $theme . '/icon _email_.svg') }}" alt="icon">Messages</a></li>
        </ul>
        <div class="nav_category-name">Settings</div>
        <ul class="nav_category-list">
            <li><a href=".{{ route('brandIntegrations') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _list alt_.svg') }}" alt="icon">Integrations</a></li>
            <li><a href="{{ route('brandPayouts') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _attach money_.svg') }}" alt="icon">Payouts</a></li>
            <li>
                <a href="{{ route('brandSettings') }}">
                    <img src="{{ asset('img/svg/icons/' . $theme . '/icon _settings_.svg') }}" alt="icon">Settings</a>
            </li>
        </ul>
    </div>
</nav>
