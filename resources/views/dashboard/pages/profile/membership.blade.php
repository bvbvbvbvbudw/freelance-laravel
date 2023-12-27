@extends('layout.app')
@section('content')
    <div class="profile_container">
        <div onclick="membershipPopup()" class="profile_block profile_border1 br-20 p_membership_block">
            <div class="p_memberhip_header">
                <div><img src="{{ asset('img/png/avatar.png') }}" alt="avatar"></div>
                <div class="s-18 bold">Alex's Monthly view Club!</div>
                <div class="s-32 bold text text-active">$99</div>
                <div class="s-12 medium light_grey">PER MONTH</div>
            </div>
            <div class="p_membership_button">
                <a class="w_full button button_1 main_color_important flex flex-center">Join</a>
            </div>
            <div class="p_membership_text">
                <p class="s-14 light_grey">
                    If you're a long time fan and want to show your support, sign up for the monthly view club! This club is for
                    loyal viewers only! Thanks for your long term support!
                </p>
            </div>
            <div>
                <ul class="listed">
                    <li class="s-14 light_grey">Support me on a monthly basis</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
