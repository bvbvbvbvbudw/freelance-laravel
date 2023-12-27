<!DOCTYPE html>
<html data-theme="{{ $theme }}" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home for talent</title>
    {{--    <link rel="stylesheet" href="../../freelance/resources/css/styles.css">--}}
    {{--    <link rel="stylesheet" href="../../freelance/resources/css/switcher.css">--}}

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/switcher.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

@include('dashboard.components.columns.mob_left_column')

<header class="dashboard_header bg_third">
    <div class="dashboard_header-logo">
        <img src="{{ asset('img/png/' . $theme . '/logo_no_background.png') }}" alt="logo">
    </div>

    <form id="themeForm" class="dashboard_header-nav-theme">
        <input type="hidden" name="theme" value="{{ $theme }}">
        <span>Dark Theme</span>
        <span class="switcher">
        <input {{ $theme == 'dark' ? 'checked' : '' }} value="dark" onchange="themeSelect(this)" type="checkbox" id="switch">
        <label for="switch">Toggle</label>
    </span>
    </form>
    <script>
        function themeSelect(checkbox) {
            $('#themeForm input[name="theme"]').val(checkbox.checked ? 'dark' : 'light');
            $.ajax({
                type: 'GET',
                url: '/update-theme',
                data: $('#themeForm').serialize(),
                success: function(response) {
                    location.reload();
                },
                error: function(error) {
                    console.error('Failed to update theme');
                }
            });
        }
    </script>
    @if(isset($user) && $user)
        <div class="profile_header_buttons">
            <a onclick="editPopup()" class="p_button_1" href="#">Edit</a>
            <a onclick="createPopup()" class="p_button_2" href="#">Create</a>
            <a onclick="sharePopup()" class="p_button_1 p_button_round" href="#"><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/Share Rounded.svg') }}" alt=""></a>
        </div>
    @endif
    <div class="sharepage_button-block dropdown dropdown_color2">
        <div class="profile_header-nav-profile  dashboard_header-nav-profile p_profile_header-nav-profile dropbtn">
            <div class="profile_header-nav-profile-button  dashboard_header-nav-profile-button left_panel_open_button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="profile_header-nav-profile-icon dashboard_header-nav-profile-icon">
                <img src="{{ asset('img/svg/profile_icon.svg') }}" alt="profile icon">
            </div>
        </div>
        <div class="dropdown-content-block dropdown-left ">
            <div class="dropdown-content sharepage_dropdown ">
                <ul class="dropdown-list">

                    <li>
                        <a href="{{ route('viewProfilePage', auth()->user()->name) }}">View my page</a>
                    </li>
                    <li>
                        <a href="{{ route('mainPage') }}">Dashboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="main">
    @yield('content')
</main>


<footer class="dashboard_footer bg_third">
    <ul>
        <li>Contact</li>
        <li>Help Center</li>
        <li>FAQ</li>
        <li>Refer a Creator</li>
    </ul>
</footer>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/navsearch.js') }}"></script>
</body>

</html>
