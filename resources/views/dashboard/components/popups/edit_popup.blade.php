<div class="popup-container">
    <div class="popup popup_light edit_popup_block">

        <form class="edit_popup " action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="edit_popup_header">
                <div class="h2">Edit page</div>
                <div class="edit_popup_actions">
                    <button onclick="closePopup()" class="grey_btn">Cancel</button>
                    <button class="blue_btn">Save</button>
                </div>

            </div>
            <div class="edit_popup_content">
                <div>
                    <div>Profile photo</div>
                    <div>
                        <div class="edit_avatar_block">
                                <input type="file" name="avatar" id="avatar-input">
                                <label for="avatar-input">

{{--                                    <img id="avatar" src="../img/png/avatar.png" alt="">--}}
                                    <img id="avatar" src="{{isset($user_info->avatar) ? asset($user_info->avatar) : asset('img/png/avatar.png')}}" alt="">

                                </label>
                                <div class="edit_avatar_icon">
                                    <img src="{{ asset('img/svg/icons/popup/' . $theme . '/ic_camera_enhance_24px.svg') }}" alt="icon">
                                </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>Full name</div>
                    <div>
                        <div class="edit_popup_input_group">
                            <input type="text" class="edit_input" name="username" value="{{isset($user) ? $user->name : ''}}">
                        </div>
                    </div>
                </div>
                <div>
                    <div>What are you creating?</div>
                    <div>
                        <div class="edit_popup_input_group">
                            <input type="text" class="edit_input" name="creating" value="{{isset($user_info) ? $user_info->creating : ''}}">
                        </div>
                    </div>
                </div>
                <div>
                    <div>About me</div>
                    <div>
                        <div class="edit_popup_input_group input_group_column">
                            <div class="edit_input_text"><img src="{{ asset('img/svg/icons/popup/' . $theme . '/ic_link_48px.svg') }}"
                                                              class="_icon" alt="icon"></div>
                            <hr>
                            <div>
                                <textarea class="edit_input" name="description" placeholder="Type your description here">{{isset($user_info) ? $user_info->description : ''}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>Featured video</div>
                    <div>
                        <div class="edit_popup_input_group">
                            <input type="text" class="edit_input" name="ytlink" placeholder="Pate your YouTube or Video link here" value="{{isset($user_info) ? $user_info->yt_link : ''}}">
                        </div>
                    </div>
                </div>
                <div class="social_links_block">
                    <div>Social links</div>
                    <div>
                        <div class="social_link_list">
                            <div class="edit_popup_input_group">
                                <img class="edit_input_text" src="{{ asset('img/svg/icons/popup/' . $theme . '/ic_link_48px.svg') }}"
                                     alt="icon">
                                <input type="text" name="website" class="edit_input" value="https://Website.com">
                                <img onclick="removeSocial(this)" class="edit_input_text _icon"
                                     src="{{ asset('img/svg/icons/popup/' . $theme . '/ic_link_48px.svg') }}" alt="icon">
                            </div>
                        </div>
                        <div>
                            <div onclick="addSocial()" class="blue_btn sociallink_button">
                                <img class="_icon" src="../img/svg/icons/dark/add_24px.svg" alt="">
                                <img class="_icon" src="{{ asset('img/svg/icons/' . $theme . '/add_24px.svg') }}" alt="icon">
                                Add social link
                            </div>
                        </div>
                    </div>

                </div>
                <div class="">
                    <div>Theme color</div>
                    <div>
                        <div class="edit_popup_input_group edit_popup_input_group_transparent">
                            <span style="height:15px;width:15px;background-color:#5F7FFF"></span>
                            <select type="text" class="edit_input">
                                <option selected value="5F7FFF">#5F7FFF</option>
                            </select>

                        </div>

                    </div>

                </div>
                <div class="">
                    <div>Display supporter count</div>
                    <div>
            <span class="switcher switcher_purple">
              <input type="checkbox" id="switch_display"><label for="switch_display">Toggle</label>
            </span>

                    </div>

                </div>
                <div class="">
                    <div>Social sharing</div>
                    <div>
                        <div class="edit_popup_input_group">
                            <span>@</span>
                            <input type="text" class="edit_input" name="username-link" value="{{isset($user_info) ? $user_info->username_link : ''}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function removeSocial(elem) {
        $(elem).parent().remove();
    }
    function addSocial() {
        $('.social_link_list').append('<div class="edit_popup_input_group"><img class= "edit_input_text _icon" src = "../img/svg/icons/popup/<?= $theme ?>/ic_link_48px.svg" class= "_icon" alt = "" ><input type="text" class="edit_input" value=""><img class="edit_input_text _icon" onclick="removeSocial(this)" src="../img/svg/icons/<?= $theme ?>/ic_close_48px.svg" class="_icon" alt=""></div>');
    }
    let imgInp = document.querySelector('#avatar-input');
    let blah = document.querySelector('#avatar');
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

</script>
<script>
    $(document).ready(function(){
        $('#avatar-input').change(function(){
            const file = $(this)[0].files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                $('#avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(file);
        });
    });
</script>
