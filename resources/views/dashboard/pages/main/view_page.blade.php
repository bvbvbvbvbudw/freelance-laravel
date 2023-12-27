<?php $theme = 'dark' ?>
<?php $page = 'home';
$is_current_user = false;
$hide_edit_block = false;
if($user && $req_user) {
    if(isset($user->id) && isset($req_user->id)) {
        if($user->id === $req_user->id) {
            $is_current_user = $user;
            $hide_edit_block = true;
        } else {
            $is_current_user = $req_user;
        }
    }
}
?>


@extends('layout.app')
@section('content')
    <div class="profile_container">
        <hr class="profile_hr">
        <div class="profile_block profile_border1 br-20 support_block p-24-24 mt-32">
            @if(!$hide_edit_block)
                <div class="profile_border1 br-20 p-24-24 my_support_block">
                    <div class="my_support_nav">
                        <div data-num="1" class="s-18"><img class="_icon_medium"
                                                            src="{{ asset('img/svg/icons/' . $theme . '/ic_pan_tool_48px.svg') }}" alt="icon">
                            Invite</div>
                        <div data-num="2" class="active s-18"><img class="_icon_medium"
                                                                   src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px2.svg') }}" alt="icon"> Support</div>
                    </div>
                    <div class="my_support_content">
                        <h3 class="s-20 bold text-center">Send <span class="s-20 bold">Alex Jeleazco</span> support</h3>
                        <div class="my_support_select_support">
                            <div>😍</div>
                            <div>x</div>
                            <div class="support_select">
                                <div class="active">1</div>
                                <div>3</div>
                                <div>5</div>
                                <div><input type="text" name="" id="" value="10"></div>
                            </div>
                        </div>
                        <div class="border_dashboard input_group input_group_full">
                            <input class="input-transparent input_group_control  " placeholder="Name or @yourwritter (optional)">
                        </div>
                        <div class="border_dashboard input_group input_group_full">
          <textarea style="height:95px" class="input-transparent noresize "
                    placeholder="Say something nice (optional)"></textarea>
                        </div>
                        <div>
                            <button onclick="paymentBlock()" id="support_button" class="w_full blue_btn">Support $5</button>
                        </div>
                    </div>
                    <form class="my_invite_content" style="display:none">
                        <div>
                            <img src=".{{ asset('img/png/avatar2.png') }}" alt="icon">
                        </div>
                        <div>
                            <p class="s-18 bold">Take part in Alex Jeleazco<br> view!</p>
                        </div>
                        <div><a href="{{ route('brandDashboard') }}" class="blue_btn">Invite for job</a></div>
                        <div><a href="{{ route('login') }}" class="white_btn">Log in</a></div>
                        <div><a onclick="applyBrandPopup()" class="white_btn">Apply as brand</a></div>
                    </form>

                </div>
            @endif

            <div class="profile_border1 br-20 p-24-24" @if($hide_edit_block) style="width: 100%" @endif >
                <div>
                    {{isset($is_current_user->info) ? $is_current_user->info->description : "" }}
{{--                    Hey there, thanks for watching and following along in my journey. A few people have asked how they can do--}}
{{--                    something nice for me directly, whether it be, sand me love and support or otherwise invite me for a job.--}}
{{--                    <br><br>I love to travel and especially go for good views of nature, exotic islands, tasty restaurants with a--}}
{{--                    special atmosphere and hotels with amazing views. Thanks for your love and support!<br> <br>1x 😍 as a thank--}}
{{--                    you.<br><br>3x 😍 to make my day!<br><br>5x 😍 to make my meal!!<br><br>10x 😍 or more and I go for a new view!--}}
{{--                    😍<br><br>I created this community for travelers & creators like me to help travel and make a living from--}}
{{--                    it!<br>Now available, Live event ticket, membership and much more, visit https://mytripview.com<br><br>Alex--}}
{{--                    Jeleazco, CO founder--}}
                </div>
{{--                <div class="flex">--}}
{{--                    <a class="support_play_arrow"><img class="_icon_medium"--}}
{{--                                                       src="../img/svg/icons/<?= $theme ?>/ic_play_arrow_48px.svg" alt=""></a>--}}
{{--                </div>--}}

            </div>
        </div>
        <div class="profile_block profile_border1 br-20 recent_supporters_block p-24-24 mt-32">
            <h2 class="s-24 semibold supporters_header">RECENT SUPPORTERS</h2>
            <div class="recent_supporters_list">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="recent_supporter profile_border2 br-20">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/Color logo - no background.png') }}" alt="bg">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">Someone</span>
                                    <span class="supporter_action s-18">Send 😍</span>
                                </div>
                                <div class="s-18">27 Sep, 2023</div>
                            </div>
                            <div class="supporter_message_text"></div>
                        </div>
                    </div>
                </div>
                <div class="recent_supporter profile_border2 br-20">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/Color logo - no background.png') }}" alt="bg">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">Lon</span>
                                    <span class="supporter_action s-18">Send 😍 x5</span>
                                </div>
                                <div class="s-18">27 Sep, 2023</div>
                            </div>
                            <div class="supporter_message_text"></div>
                        </div>
                    </div>
                </div>
                <div class="recent_supporter profile_border2 br-20">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/Color logo - no background.png') }}" alt="bg">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">Lon</span>
                                    <span class="supporter_action s-18">replied</span>
                                </div>
                                <div class="s-18">27 Sep, 2023</div>
                            </div>
                            <div class="supporter_message_text">
                                raining here, and that sucks balls. hope you are having a grand day, have a coupple of beers on me. and
                                ps: say hello to Josepine from me🇳🇴🍺😍
                            </div>
                        </div>
                    </div>
                    <hr class="profile_hr">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/avatar3.png') }}" alt="avatar">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">JohnnyFD</span>
                                    <span class="supporter_action s-18">replied</span>
                                </div>

                            </div>
                            <div class="supporter_message_text">
                                Will do Jon!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recent_supporter profile_border2 br-20">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/Color logo - no background.png') }}" alt="bg">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">AlexN</span>
                                    <span class="supporter_action s-18">Sand 😍 x 20 </span>
                                </div>
                                <div class="s-18">27 Sep, 2023</div>
                            </div>
                            <div class="supporter_message_text">
                                Hey man, have been watching your channel for a while. Thank you for the info you provide, I found the most
                                recent episode (Guliver shopping excursion) to be particularly interesting as it illuminates financial
                                challenges faced by Ukrainians and gives an excellent perspective on the economic situation. Please don't
                                drink all the beers in one sitting 😉
                            </div>
                        </div>
                    </div>
                    <hr class="profile_hr">
                    <div class="supporter_message_block">
                        <div class="supporter_image">
                            <img src="{{ asset('img/png/avatar3.png') }}" alt="avatar">
                        </div>
                        <div>
                            <div class="supporter_message_info">
                                <div>
                                    <span class="supporter_name s-20-s">JohnnyFD</span>
                                    <span class="supporter_action s-18">replied</span>
                                </div>

                            </div>
                            <div class="supporter_message_text">
                                Wow! Thank you so much for the generous gift Alex!
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="recent_supporters_seemore">
                <button class="button button_1">See more</button>
            </div>
        </div>
    </div>
    <script>
        {{--$(document).ready(function () {--}}
        {{--    <?php if ($_GET['edit_popup']) { ?>--}}
        {{--    editPopup();--}}
        {{--    <?php } ?>--}}
        {{--});--}}

        $('.support_select > *').click(function () {
            $('.support_select > *').removeClass('active');
            $(this).addClass('active');
            let price = 0;
            if ($(this).find('input').length > 0) {
                price = $(this).find('input').val() * 5;
            } else {
                price = $(this).text() * 5;
            }

            $('#support_button').text('Support $' + price)
            $('#support_qtty').text(price);
        });
        $('.support_select input').on('change', function () {
            let price = $(this).val() * 5;
            $('#support_button').text('Support $' + price)
            $('#support_qtty').text(price);
        });


        let nav_img1 = "../img/svg/icons/<?= $theme ?>/ic_pan_tool_48px.svg";
        let nav_img1_active = "../img/svg/icons/<?= $theme ?>/ic_pan_tool_48px2.svg";
        let nav_img2 = "../img/svg/icons/<?= $theme ?>/ic_favorite_border_48px.svg";
        let nav_img2_active = "../img/svg/icons/<?= $theme ?>/ic_favorite_border_48px2.svg";

        $('.my_support_nav > div').click(function () {
            let num = $(this).data('num');
            if (num == 1) {
                let active = $('.my_support_nav > div:nth-child(1)');
                let disabled = $('.my_support_nav > div:nth-child(2)');
                active.addClass('active');
                disabled.removeClass('active');
                active.find('img').attr('src', nav_img1_active);
                disabled.find('img').attr('src', nav_img2);
                $('.my_invite_content').show();
                $('.my_support_content').hide();
            } else {
                let active = $('.my_support_nav > div:nth-child(2)');
                let disabled = $('.my_support_nav > div:nth-child(1)');
                active.addClass('active');
                disabled.removeClass('active');
                active.find('img').attr('src', nav_img2_active);
                disabled.find('img').attr('src', nav_img1);
                $('.my_invite_content').hide();
                $('.my_support_content').show();
            }


        });

        function paymentBlock() {
            paymentPopup();
        }

        $('.card_input_block input').unbind('keyup change input paste').bind('keyup change input paste', function (e) {
            var $this = $(this);
            var val = $this.val();
            var valLength = val.length;
            var maxCount = $this.attr('maxlength');
            if (valLength > maxCount) {
                $this.val($this.val().substring(0, maxCount));
            }
        });



    </script>
@endsection
