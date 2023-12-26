@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="dashboard_extra_block border_dashboard dashboard_block p-32-24 bg_secondary">
                <div class="extra_header">
                    <h2 class="h2">Add a new Extra</h2>
                    <h3 class="h3 mt-24">Pick a template or start from scratch</h3>
                </div>
                <div class="extra_list">
                    <a href="../dashboard/extra/scracth.php" class="extra extra_new">Start from scracth</a>
                    <a href="../dashboard/extra/tour.php" class="extra"><img class="_icon-big"
                                                                             src="../img/svg/icons/light/ic_palette_48px.svg">Virtual
                        Tour</a>
                    <a href="../dashboard/extra/youtube.php" class="extra"><img class="_icon-big"
                                                                                src="../img/svg/icons/light/ic_camera_enhance_24px.svg">Youtube
                        channel memberships</a>
                    <a href="../dashboard/extra/live.php" class="extra"><img class="_icon-big"
                                                                             src="../img/svg/icons/light/ic_videocam_48px.svg">Live Event
                        Ticket
                    </a>
                    <a href="../dashboard/extra/digital.php" class="extra"><img class="_icon-big"
                                                                                src="../img/svg/icons/light/ic_import_contacts_48px.svg">Digital
                        Download
                    </a>
                    <a href="../dashboard/extra/instagram.php" class="extra"><img class="_icon-big"
                                                                                  src="../img/svg/icons/light/ic_vpn_key_48px.svg">Join
                        Instagram
                        Close Friends
                    </a>
                    <div class="dashboard_block dashboard_info_block">
                        <img class="_icon-big" src="../img/svg/icons/light/icon _favorite_2.svg">
                        <h2 class="h2">You haven't added anything yet.</h2>
                        <p>Extras is a simple and effective way to offer something to your audience. It could be anything. See some
                            examples <a class="link_underline" href="#">here</a>, <a class="link_underline" href="#">here</a>, and <a
                                class="link_underline" href="#">here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
