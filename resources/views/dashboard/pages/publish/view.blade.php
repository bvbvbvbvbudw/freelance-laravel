<?php
$theme = 'light';
$theme_reverse = 'dark';
?>
@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <div class="dashboard_views_block border_dashboard dashboard_block bg_secondary">
                <div class="dashboard_block-header">
                    <h2 class="h2">Views</h2>
                    <div>
                        <a href="">
                            <div class="button button_1 button_with_icon"><img class="_icon"
                                                                               src="../img/svg/icons/<?= $theme_reverse ?>/add_24px.svg"> Add view
                            </div>
                        </a>
                    </div>
                </div>
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li class="active">Published</li>
                    </ul>
                    <div class=" dashboard_navsearch_block-actions">
                        <button class="button_noappearance"><img class=" _icon_medium"
                                                                  src="../img/svg/icons/<?= $theme ?>/ic_search_48px.svg"></button>
                    </div>
                </div>

            </div>

            <div class="dashboard_supporters_block border_dashboard dashboard_block dashboard_info_block bg_secondary">
                <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _favorite_2.svg">
                <h2 class="h2">Publish your first view</h2>
                <p>Share your work, inspirations, or behind-the-scenes images with everyone or keep it exclusive for your members.
                    Creators who update their gallery regularly tend to earn more support.</p>
            </div>

        </div>
    </main>
@endsection
