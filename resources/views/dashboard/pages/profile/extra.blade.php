@extends('layout.app')
@section('content')
    <div class="profile_container">
        <div class="profile_block p_extra_block">
            <div class="p_extra_header">
                <h2 class="s-20-s">Select a membership level</h2>
            </div>
            <div onclick="extraPopup()" class="profile_block profile_border1 br-20 p_membership_block p_extra_block_">
                <div class="p_memberhip_header">
                    <div><img src="../img/png/avatar.png" alt=""></div>
                </div>
                <div class="p_membership_text">
                    <p class="s-18 bold">
                        Live event ticket
                    </p>
                </div>
                <div class="p_extra_progress">
                    <div class="s-20 bold">$175</div>
                    <div>$160 for members</div>
                </div>
            </div>
        </div>
    </div>
@endsection
