@extends('layout.app')
@section('content')
    <div class="profile_container">

        <div class="profile_block profile_border1 br-20 p_info_block">
            <div class="p_info_block_container">
                <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _favorite_2.svg">
                <h2 class="h2">You haven't added views yet, upload a new view or add your social feeds</h2>
                <div class="p_info_block_actions">
                    <a onclick="addViewPopup()" href="#" class="button button_b button_medium">Add view</a>
                    <a href="{{ route('viewIntegrationsPage') }}" class="button button_b_r button_medium">Add social feed</a>
                </div>
            </div>
        </div>
    </div>
@endsection
