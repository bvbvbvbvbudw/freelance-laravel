<!DOCTYPE html>
<html data-theme="<?= $theme ?>" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home for talent</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/switcher.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
<header class="dashboard_header bg_third">
    <div class="dashboard_header-logo">
        <img src="../img/png/<?= $theme ?>/logo_no_background.png">
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
    <div class="sharepage_button-block dropdown dropdown_color2">
        <div class="profile_header-nav-profile  dashboard_header-nav-profile p_profile_header-nav-profile dropbtn">
            <div class="profile_header-nav-profile-button  dashboard_header-nav-profile-button left_panel_open_button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="profile_header-nav-profile-icon dashboard_header-nav-profile-icon">
                <img src="../img/svg/profile_icon.svg">
            </div>
        </div>
        <div class="dropdown-content-block dropdown-left ">
            <div class="dropdown-content sharepage_dropdown ">
                <ul class="dropdown-list">
                    <li>
                        <a href="../profile/sign_up.php">Start a page</a>
                    </li>
                    <li>
                        <a href="../profile/login.php">Log in</a>
                    </li>
                    <li>
                        <a href="../profile/ ">View my page</a>
                    </li>
                    <li>
                        <a href="../dashboard/ ">Dashboard</a>
                    </li>
                    <li>
                        <a href="../profile/home.php">Creators I
                            follow</a>
                    </li>
                    <li class="divider">
                        <a href="../dashboard/edit_profile.php">My account</a>
                    </li>

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
@yield('content')