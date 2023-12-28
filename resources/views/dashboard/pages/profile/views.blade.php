@extends('layout.app')
@section('content')
    <?php
    $is_current_user = false;
    $not_hide_edit_block = false;
    if($user && $req_user) {
        if(isset($user->id) && isset($req_user->id)) {
            if($user->id === $req_user->id) {
                $is_current_user = $user;
                $not_hide_edit_block = true;
            } else {
                $is_current_user = $req_user;
            }
        }
    }

    ?>
    <div class="profile_container">

        <div class="profile_block profile_border1 br-20 p_info_block">
            <div class="p_info_block_container">
{{--                <img class="_icon-big" src="../img/svg/icons/<?= $theme ?>/icon _favorite_2.svg">--}}
                <img class="_icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}" alt="icon">
                @if($not_hide_edit_block)
                    <h2 class="h2">You haven't added views yet, upload a new view or add your social feeds</h2>
                    <div class="p_info_block_actions">
                        <a onclick="addViewPopup()" href="#" class="button button_b button_medium">Add view</a>
                        <a href="{{ route('viewIntegrationsPage') }}" class="button button_b_r button_medium">Add social feed</a>
                    </div>
                @else
                    <h2 class="h2">This user hasn't added views yet</h2>
                @endif

            </div>
        </div>
    </div>
@endsection
