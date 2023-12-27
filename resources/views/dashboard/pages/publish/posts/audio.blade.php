<?php $theme = 'light';
$theme_reverse = 'dark' ?>
@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <div class="dashboard_newpost_block dashboard_audio border_dashboard dashboard_block bg_secondary">
                <div class="dashboard_audio_header">

                    <a href="{{ route('viewPostsPage') }}" class="h2 align-center"><img
                            src="{{ asset('img/svg/icons/' . $theme . '/ic_keyboard_arrow_left_48px.svg') }}"> Write a post</a>

                    <div>
                        <div class="button button_2">Save as draft</div>
                        <div class="button button_1">Next</div>
                    </div>
                </div>
                <hr class="mt-16">
                <div class="mt-16">
                    <div class="audio_buttons">
                        <div class="br-20"><img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/file_upload.svg') }}">Upload
                            audio</div>
                        <div class="br-20"><img class="_icon"
                                                src="{{ asset('img/svg/icons/' . $theme . '/ic_keyboard_voice_48px.svg') }}">Record audio
                        </div>
                    </div>
                    <div class="mt-16">
                        <h2 class="h2">Title</h2>
                        <input type="text" class="input-colormain placeholder-default input-transparent border_dashboard2 mt-16"
                               placeholder="Enter title">
                    </div>
                </div>
                <hr class="mt-16">
                <div>
                    <p class="semibold s-18">Description (shownotes)</p>
                    <textarea style="resize:none" type="text"
                              class="input-colormain placeholder-default input-transparent border_dashboard2 mt-16"
                              placeholder="Write something here"></textarea>
                </div>

            </div>

        </div>

        </div>
    </main>
@endsection

