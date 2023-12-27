<div class="popup-container">
    <div class="popup popup_light create_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="{{ route('img/svg/icons/ ' . $theme . '/ic_close_48px.svg') }}" alt="icon">
        </div>
        <div class="create_popup">
            <h2 style="margin-top:-25px" class="s-20 bold">What you want to create?</h2>
            <div class="popup_tiles">
                <a href="{{ route('viewPublishPage') }}"><img class="_icon" src="{{ asset('img/svg/icons/popup/' . $theme . '/view.svg') }}"
                                                     alt="icon">View</a>
                <a href="{{ route('viewJobsPage.index') }}"><img class="_icon" src="{{ asset('img/svg/icons/popup/' . $theme . '/post.svg') }}"
                                                     alt="icon">Post</a>

                <a href="{{ route('viewMembershipPage') }}"><img class="_icon"
                                                           src="{{ asset('img/svg/icons/popup/' . $theme . '/membership.svg') }}" alt="icon">Membership</a>
                <a href="{{ route('viewExtrasPage') }}"><img class="_icon" src="{{ asset('img/svg/icons/popup/' . $theme . '/extra.svg') }}"
                                                       alt="">Extra</a>
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
