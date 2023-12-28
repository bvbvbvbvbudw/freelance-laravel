<?php

if(substr_count(url()->current(), '/') === 4) {
    $page =  urldecode(basename(parse_url(url()->current(), PHP_URL_PATH)));
} else {
    $page = 'home';
}
$is_current_user = false;
$not_hide_edit_block = false;
if($user && $req_user) {
    if(isset($user->id) && isset($req_user->id)) {
        if($user->id === $req_user->id) {
            $is_current_user = $user;
            $not_hide_edit_block = true;
        } else {
            $is_current_user = $req_user;
        }
    }
} else  {
    var_dump("ERROR: USERS NOT FOUND");
}

?>

<!DOCTYPE html>
<html lang="en" data-theme="{{ $theme }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" href="../../css/styles.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="stylesheet" href="{{ asset('css/switcher.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="
https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js
"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
          type="text/css" />
    <link rel="stylesheet" href="../../css/dropzone.css" type="text/css" />
</head>

<body class="bg_third">
<header class="profile_header bg_third">
    <div class="profile_header-logo">
        <img src="../img/png/light/logo_no_background.png">
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
            // Update the hidden input value
            $('#themeForm input[name="theme"]').val(checkbox.checked ? 'dark' : 'light');
            // Send an AJAX request to update the theme on the server
            $.ajax({
                type: 'GET',
                url: '/update-theme', // Replace with your actual route for updating the theme
                data: $('#themeForm').serialize(), // Send the form data
                success: function(response) {
                    // Handle the response if needed
                    console.log('Theme updated successfully');

                    // Reload the page after updating the theme
                    location.reload();
                },
                error: function(error) {
                    // Handle errors if needed
                    console.error('Failed to update theme');
                }
            });
        }
    </script>
    @if($not_hide_edit_block)
                <Div class="profile_header_buttons">
                    <a onclick="editPopup()" class="p_button_1" href="#">Edit</a>
                    <a onclick="createPopup()" class="p_button_2" href="#">Create</a>
                    <a onclick="sharePopup()" class="p_button_1 p_button_round" href="#"><img class="_icon_medium" src="../img/svg/icons/light/Share Rounded.svg" alt=""></a>
                </Div>
    @endif
    <div class="sharepage_button-block dropdown dropdown_color2">
        <div class="profile_header-nav-profile  dashboard_header-nav-profile p_profile_header-nav-profile dropbtn">
            <div class="profile_header-nav-profile-button  dashboard_header-nav-profile-button left_panel_open_button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="profile_header-nav-profile-icon dashboard_header-nav-profile-icon">
                <img src="../../img/svg/profile_icon.svg">
            </div>
        </div>
        <div class="dropdown-content-block dropdown-left ">
            <div class="dropdown-content sharepage_dropdown ">
                <ul class="dropdown-list">
                    <li>
                        <a href="{{ route('viewProfilePage', auth()->user()->name) }}">View my page</a>
                    </li>
                    <li>
                        @if(auth()->user()->role_id === 1)
                            <a href="{{ route('mainPage') }}">Dashboard</a>
                        @else
                            <a href="{{ route('brandDashboard') }}">Dashboard</a>
                        @endif
                    </li>
{{--                    <li>--}}
{{--                        <a href="../profile/home.php">Creators I--}}
{{--                            follow</a>--}}
{{--                    </li>--}}
{{--                    <li class="divider">--}}
{{--                        <a href="../dashboard/edit_profile.php">My account</a>--}}
{{--                    </li>--}}

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
<main class="profile_main">
    <div class="profile_main_header">
        <div class="profile_container">
            <div class="profile_user_info_block ">
                <div class="profile_user_info_ ">
                    <div class="profile_user_info ">
                        <div>
                            <img src="{{isset($is_current_user->info->avatar) ? asset($is_current_user->info->avatar) : "../../img/png/avatar3.png"  }}" alt="">
{{--                            <img src="../../img/png/avatar3.png" alt="">--}}
                        </div>
                        <div class="profile_user_info-info">
                            <h2 class="h2">
                                {{$is_current_user ? $is_current_user->name : null}}</h2>
                            <p class="s-24 mt-16">42 supporters</p>
                        </div>

                    </div>
                    <div class="profile_user_nav">
                        <a href="/{{$is_current_user ? $is_current_user->name : null}}" <?php  if ($page == 'home') { ?> class="active" <?php } ?>>Home</a>
                        <a href="/{{$is_current_user ? $is_current_user->name : null}}/views" <?php if ($page == 'views') { ?> class="active" <?php } ?>>Views</a>
                        <a href="/{{$is_current_user ? $is_current_user->name : null}}/extra" <?php if ($page == 'extra') { ?> class="active" <?php } ?>>Extra</a>
                        <a href="/{{$is_current_user ? $is_current_user->name : null}}/membership" <?php if ($page == 'membership') { ?> class="active" <?php } ?>>Membership</a>
                        <a href="/{{$is_current_user ? $is_current_user->name : null}}/post" <?php if ($page == 'post') { ?> class="active" <?php } ?>>Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile_main_content">


        @yield('content')


    </div>
</main>
<footer class="dashboard_footer bg_third">
    <ul>
        <li>c.2023 Mytripview</li>
        <li>Privacy</li>
        <li>Terms</li>
        <li>Report</li>
    </ul>
</footer>
<script src="../js/main.js"></script>
<script src="../js/navsearch.js"></script>

</body>

</html>
