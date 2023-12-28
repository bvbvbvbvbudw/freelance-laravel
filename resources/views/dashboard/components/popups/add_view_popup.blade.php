
<div class="popup-container">
    <div class="popup popup_light add_view_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="{{ asset('img/svg/icons/' . $theme . '/ic_close_48px.svg') }}" alt="icon">
        </div>
        <form id="signinForm" class="add_view_popup">
            <h2 class="h2">Add view</h2>
            <div>
                <div id="dropzone-container" class="dropzone dropzone_sm br-10 mt-16">
                    <div class="dz-default dz-message">
                        <div><img src="{{ asset('img/svg/icons/' . $theme . '/ic_filter_48px2.svg') }}" alt="icon"></div>
                        <h2 class="mt-16">Upload image or <span>drag and drop.</span></h2>
                    </div>
                </div>
                <div id="file-list" class="file-list"></div>
            </div>
            <div>
                <div class="add_view_popup_checkbox_block">
                    <label class="checkbox_group">Allow download in original quality
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="edit_popup_input_group">
                <input type="text" class="edit_input" placeholder="Title">
            </div>
            <div class="edit_popup_input_group">
                <textarea style="height:88px" type="text" class="edit_input" placeholder="Description"></textarea>
            </div>
            <div>
                <p class="s-18">Who can see this post</p>
            </div>
            <div class="edit_popup_input_group">
                <select type="text" class="edit_input">
                    <option selected value="public">Public</option>
                    <option selected value="followers">Followers</option>
                </select>
            </div>
            <div> <button class="blue_btn w_full text-center">Publish</button></div>
            <div>
                <p class="s-16">This post must follow the <a class="s-16" href="">Content Guidelines.</a> </p>
            </div>
        </form>
    </div>
</div>
</div>
<script>

    $('#signinForm').validate({
        rules: {

            email: {
                required: true,

            },
            password: {
                required: true,

            },

        },
        messages: {

            email: "Email is required",
            password: {
                required: "Password is required",

            },

        },

    });
</script>
<script>
    $(document).ready(function () {
        Dropzone.autoDiscover = false;

        const myDropzone = new Dropzone('#dropzone-container', {
            url: '#',
            addRemoveLinks: true,
            autoProcessQueue: false,
        });
    })


</script>
