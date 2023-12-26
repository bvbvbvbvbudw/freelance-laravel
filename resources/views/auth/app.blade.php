<!DOCTYPE html>
<html lang="en" data-theme="<?= $theme ?>" style="background-color:inherit">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" href="../../freelance/resources/css/styles.css">
    <link rel="stylesheet" href="../../freelance/resources/css/switcher.css">
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
    <link rel="stylesheet" href="../../freelance/resources/css/dropzone.css" type="text/css" />
</head>
<body class="bg_third">
    <div class="profile_main_content">
        @yield('content')
    </div>
<script src="../js/main.js"></script>
<script src="../js/navsearch.js"></script>
</body>
</html>
