<?php session_start();
$theme = $_SESSION['theme'] ? $_SESSION['theme'] : 'dark';
$theme_reverse = $theme == 'light' ? 'dark' : 'light';
?>
<div class="popup-container">
    <div class="popup popup_light member_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="../img/svg/icons/<?= $theme ?>/ic_close_48px.svg" alt="">
        </div>
        <form class="member_popup ">
            <div><img src="../img/png/avatar.png" alt=""></div>
            <p class="s-20 bold">Become a member</p>
            <div class="member_popup_plan">
                <div class="active">$7 per month</div>
                <div>$75 per year</div>
            </div>
            <p class="bold">
                Johnny's Monthly Beer Club!
            </p>
            <div>
                If you're a long time fan and want to show your support, sign up for the monthly beer club! This club is for
                loyal viewers only! Thanks for your long term support!
                <ul class="listed">
                    <li>Support me on a monthly basis</li>
                    <li>Unlock exclusive posts</li>
                </ul>
            </div>
            <div class="member_popup_textarea input_group input_group_full">
        <textarea style="height:95px" class="input-transparent noresize reverse_color_important"
                  placeholder="Say something nice optional"></textarea>
            </div>
            <button id="join_btn" class="blue_btn">Join $7 per month</button>
        </form>
    </div>
</div>

<script>
    $('.member_popup_plan > div').click(function () {
        $('.member_popup_plan > div').removeClass('active');
        $(this).addClass('active');
        $('#join_btn').text('Join ' + $(this).text())
    });

</script>
