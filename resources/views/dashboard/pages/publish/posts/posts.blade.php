<?php $theme = 'light' ?>
@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <div class="dashboard_post_block border_dashboard dashboard_block bg_secondary">
                <div class="dashboard_block-header">
                    <h2 class="h2">Create a new post</h2>

                </div>
                <div class="dashboard_actions mt-16">
                    <a href="{{route('viewPostsCreatePage')}}" class="dashboard_action border_dashboard br-10 s-20 medium bg_four">
                        <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/icon _lock_.svg') }}" alt="icon">
                        Write a post
                    </a>
                    <a href="{{ route('viewPostsAlbumCreatePage') }}" class="dashboard_action border_dashboard br-10 s-20 medium bg_four">
                        <img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/icon _shopping bag_.svg') }}">
                        Add an album
                    </a>

                </div>
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="published" class="active">Published</li>
                        <li data-nav="drafted">Drafted</li>
                        <li data-nav="scheduled">Scheduled</li>
                    </ul>
                    <div class=" dashboard_navsearch_block-actions">
                        <button class="button_noappearance">
                            <img class=" _icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_search_48px.svg') }}">
                        </button>
                    </div>
                </div>

            </div>

            <div class="navs_block " id="published_block">
                <div class="dashboard_post border_dashboard dashboard_block bg_secondary">
                    <div class="dashboard_post_info">
                        <div>Posted at Sep 29,2023 at 3:49 PM</div>
                        <div>
                            <img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/ic_more_horiz_48px.svg') }}">
                        </div>
                    </div>
                    <div class="dashboard_post_text mt-16">
                        Hello
                    </div>
                    <div class="dashboard_post_activity-block mt-16">
                        <div>
                            All supporters
                        </div>
                        <div class="dashboard_post_activity">
                            <div>0 likes</div>
                            <div>0 comments</div>
                        </div>
                    </div>
                </div>
                <div class="dashboard_supporters_block border_dashboard dashboard_block dashboard_info_block bg_secondary">
                    <img class="_icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}">
                    <h2 class="h2">Publish your first post</h2>
                    <p>Post public posts or make them exclusive to your supporters or members. Creators who post exclusives
                        regularly
                        tend to earn more support.</p>
                </div>
            </div>
            <div class="navs_block" id="drafted_block" style="display:none">
                <div class="dashboard_supporters_block border_dashboard dashboard_block bg_secondary">
                    <img class="_icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}">
                    <h2 class="h2">Manage your drafts</h2>
                    <p>This is a place for all your unfinished posts. If you wish to save the progress on your post and finish it
                        later, save it as a draft.</p>
                </div>
            </div>
            <div class="navs_block" id="scheduled_block" style="display:none">
                <div class="dashboard_supporters_block border_dashboard dashboard_block bg_secondary">
                    <img class="_icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}">
                    <h2 class="h2">Schedule posts to publish later</h2>
                    <p>Taking some time off? Prepare your post and schedule it out for a later date and time.</p>
                </div>
            </div>
        </div>
    </main>
@endsection

