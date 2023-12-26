<div class="popup-container">
    <div class="popup popup_light create_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="../img/svg/icons/<?= $theme ?>/ic_close_48px.svg" alt="">
        </div>
        <div class="create_popup">
            <h2 style="margin-top:-25px" class="s-20 bold">What you want to create?</h2>
            <div class="popup_tiles">
                <a href="../dashboard/view.php"><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/view.svg"
                                                     alt="">View</a>
                <a href="../dashboard/post.php"><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/post.svg"
                                                     alt="">Post</a>
                <a href="../dashboard/membership.php"><img class="_icon"
                                                           src="../img/svg/icons/popup/<?= $theme ?>/membership.svg" alt="">Membership</a>
                <a href="../dashboard/extras.php"><img class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/extra.svg"
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
