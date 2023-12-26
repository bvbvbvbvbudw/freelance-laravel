@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')

        <div class="content">

            <div class="dashboard_membership_block border_dashboard dashboard_block bg_secondary">
                <div class="membership_header">
                    <h2 class="h2">Memberhip</h2>
                    <h3 class="h3 mt-24">HIGHLY RECOMMENDED</h3>
                    <a href="/membership/enable"
                       class="button button_1 button_large inline-block s-30 mt-24">Enable
                        membership</a>
                </div>
                <div class="membersip_blocks">
                    <div class="membersip_block">
                        <img style="float:left" src="../img/png/room.png">
                        <h3 class="h3">Earn recurring income</h3>
                        <p>Memberships are a great way to build recurring revenue, create engagement, and build deep and meaningful
                            relationships with your fans. Start earning monthly/yearly upfront payments doing what you love!</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="membersip_block">
                        <img style="float:right" src="../img/png/room.png">
                        <h3 class="h3">Earn recurring income</h3>
                        <p>Memberships are a great way to build recurring revenue, create engagement, and build deep and meaningful
                            relationships with your fans. Start earning monthly/yearly upfront payments doing what you love!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </main>
@endsection
