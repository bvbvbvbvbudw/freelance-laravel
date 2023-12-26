<?php $theme = 'light' ?>

@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="dashboard_supporters_block border_dashboard dashboard_block dashboard_info_block bg_secondary">
                <img class="_icon-big" src="..//img/svg/icons/<?= $theme ?>/icon _favorite_2.svg">
                <p>The tool is not available yet, we are working on this, we'll update you as soon as it's ready for use</p>
            </div>
        </div>
    </main>
@endsection
