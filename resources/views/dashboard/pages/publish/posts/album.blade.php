<?php $theme = 'light';
$theme_reverse = 'dark' ?>
@extends('dashboard.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/dropzone.css" type="text/css" />
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <style>
                /* Style for the file input label */
                .file-label {
                    display: block;
                    cursor: pointer;
                }

                /* Style to hide the actual file input */
                .file-input {
                    display: none;
                }
            </style>
            <div class="dashboard_newpost_block border_dashboard dashboard_block bg_secondary" id="albumForm">
                <form action="{{route('post_create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="newpost_col2">
                    <div>
                        <h2 class="h2">Write a post</h2>
                        <input class="h2 mt-16 input-colormain input-transparent" type="text" name="title" placeholder="Add Title">
                        <div id="dropzone-container" class="dropzone br-10 mt-16">
                            <label for="fileInput" class="file-label">
                                <div class="dz-default dz-message">
                                    <div><img src="../img/svg/icons/<?= $theme ?>/ic_filter_48px3.svg"></div>
                                    <h2 class="mt-16">Upload image or <span id="fileLabel">drag and drop.</span></h2>
                                </div>
                            </label>
                            <input type="file" name="images[]" id="fileInput" class="file-input" style="display: none;" multiple>
                        </div>

                        <div id="file-list" class="file-list"></div>
                    </div>
                    <div class="newpost_actions">
                        <a href="../dashboard/post.php" class="button button_2">
                            <img class="_icon" src="../img/svg/icons/<?= $theme ?>/ic_keyboard_arrow_left_48px2.svg">
                            Dashboard
                        </a>
                        <div class="button_with_dropdown  mt-16">
                            <button class="dropbtn light_border" type="submit">Publish now</button>
                            <div class="dropdown">
                                <div class="dropbtn arrow_dropbtn light_border">
                                    <img class="_icon-big" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
                                </div>
                                <select name="statuses_post" id="">
                                    <option value="1">Public now</option>
                                    <option value="2">Schedule</option>
                                    <option value="3">Save as draft</option>
                                </select>
{{--                                <div class="dropdown-content-block dropdown-left">--}}
{{--                                    <div class="dropdown-content sharepage_dropdown ">--}}
{{--                                        <ul class="dropdown-list">--}}
{{--                                            <li>--}}
{{--                                                <a href="#">Public now--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href=" #">Schedule</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href=" #">Save as draft</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="post_access border_dashboard br-10 mt-16 light_border">
                            <p>Who can see this post?</p>
                            <select name="permission_post" id="">
                                <option value="1">Public</option>
                                <option value="2">Supporters</option>
                            </select>
{{--                            <div class="dropdown mt-16">--}}
{{--                                <div class="dropbtn dropdown_select">--}}
{{--                                    <img class="_icon" src="../img/svg/icons/light/ic_language_48px.svg">--}}
{{--                                    Public--}}
{{--                                    <img class="_icon" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">--}}
{{--                                </div>--}}
{{--                                <div class="dropdown-content-block dropdown-content-close dropdown-left">--}}
{{--                                    <div class="dropdown-content sharepage_dropdown ">--}}
{{--                                        <ul class="dropdown-list">--}}
{{--                                            <li>--}}
{{--                                                <a href="#">Public--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href=" #">Supporters</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <hr class="mt-16">
                <div class="newpost_text_block mt-16">
                    <input class="input-colormain input-transparent" type="text" name="description" placeholder="Type something here (optional)">
                </div>
                </form>

            </div>

        </div>
        <script>
            $(document).ready(function () {
                // Handle click on the file input label
                $('.file-label').on('click', function () {
                    // Trigger a click on the hidden file input
                    $('#fileInput').click();
                });

                // Handle file input change
                $('#fileInput').on('change', function () {
                    // Get the selected file name
                    const fileName = $(this).val().split('\\').pop();

                    // Update the label text with the file name
                    $('#fileLabel').text(fileName || 'drag and drop.');
                });
            });

            {{--            Dropzone.autoDiscover = false;--}}

{{--            const myDropzone = new Dropzone('#dropzone-container', {--}}
{{--                url: '#',--}}
{{--                addRemoveLinks: true,--}}
{{--                autoProcessQueue: false,--}}
{{--            });--}}

        </script>
    </main>
@endsection

