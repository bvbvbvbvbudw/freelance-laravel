<div class="popup-container">
    <div class="popup popup_light share_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="{{ asset('img/svg/icons/' . $theme . '/ic_close_48px.svg') }}" alt="icon">
        </div>
        <div class="share_popup  ">
            <h2 style="margin-top:-25px" class="s-20 bold">Share <span class="s-20 bold">Alex Jeleazco’s</span> page</h2>
            <div class="popup_tiles">
                <div><img class="_icon" src="{{ asset('img/svg/icons/popup/'. $theme . '/instagram.svg') }}" alt="icon">Instagram</div>
                <div><img class="_icon" src="{{ asset('img/svg/icons/youtube.svg') }}" alt="icon">Youtube</div>
                <div><img class="_icon" src="{{ asset('img/svg/icons/facebook.svg') }}" alt="icon">Facebook</div>
                <div><img class="_icon" src="{{ asset('img/svg/icons/popup/'. $theme . '/email.svg') }}" alt="icon">Email</div>

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
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/popup/'. $theme . '/instagram.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/youtube.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/x.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/facebook.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/pinterest.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/tiktok.svg') }}" alt="icon"></a>
                    <a href=""><img class="_icon" src="{{ asset('img/svg/icons/twitch.svg') }}" alt="icon"></a>
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
