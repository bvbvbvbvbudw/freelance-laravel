<div class="popup-container">
    <div class="popup popup_light share_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="../img/svg/icons/<?= $theme ?>/ic_close_48px.svg" alt="">
        </div>
        <div class="share_popup  ">
            <h2 style="margin-top:-25px" class="s-20 bold">Share <span class="s-20 bold">Alex Jeleazco’s</span> page</h2>
            <div class="popup_tiles">
                <div><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/instagram.svg" alt="">Instagram</div>
                <div><img class="_icon" src="../img/svg/icons/youtube.svg" alt="">Youtube</div>
                <div><img class="_icon" src="../img/svg/icons/facebook.svg" alt="">Facebook</div>
                <div><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/email.svg" alt="">Email</div>
            </div>
            <p class="bold">Share page link</p>
            <div class="postimage_popup_share_block share_popup_share_block">
                <div>
                    <input readonly class="input_noappearance" id="share_link" value="bymeacoffe.com/AlexJeleazco">
                </div>
                <div id="copy_btn">Copy</div>
            </div>
            <div class="share_tip">
                <p><span>Tip:</span> Add this link to your social bios.</p>
                <div>
                    <a href=""><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/instagram.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/youtube.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/x.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/facebook.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/pinterest.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/tiktok.svg" alt=""></a>
                    <a href=""><img class="_icon" src="../img/svg/icons/twitch.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const span = document.querySelector("#copy_btn");

    span.onclick = function () {
        document.execCommand("copy");
    }

    span.addEventListener("copy", function (event) {
        event.preventDefault();
        if (event.clipboardData) {
            event.clipboardData.setData("text/plain", document.querySelector("#share_link").value);
        }
    });
</script>
