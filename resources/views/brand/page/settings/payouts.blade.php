<?php $theme = 'light' ?>
@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('brand.components.columns.brands_left_column')
        <div class="content">
            <div style="align-items:center" class=" border_dashboard dashboard_block flex flex-between bg_secondary">
                <div>
                    <p class="s-20">Outstanding balance</p>
                    <h3 class="h2 mt-16">0$</h3>
                </div>
                <a class="button button_1 s-16 button_large" href="#">Withdraw</a>

            </div>
            <div class="dashboard_supporters_block border_dashboard dashboard_block dashboard_info_block bg_secondary">
                <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _bolt_2.svg">
                <h2 class="h2"> Set up Instant Payouts</h2>
                <p>Get paid to your local bank account automatically. No minimum threshold. If you don’t have a Stripe account,
                    you’ll be asked to create one for free.</p>
                <div class="flex flex-center">
                    <a class="button button_1 s-16 button_large" href="#">Connect Strip</a>
                </div>
            </div>
        </div>
    </main>
@endsection
