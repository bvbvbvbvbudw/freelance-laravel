
<div class="popup-container">
    <div class="popup popup_light applybrand_popup_block">
        <div class="popup_close" onclick="closePopup()"><img class="_icon"
                                                             src="../img/svg/icons/<?= $theme ?>/ic_close_48px.svg" alt="">
        </div>
        <form class="apply brand_popup" action="{{ route('register') }}" method="POST">
            @csrf
            <input type="hidden" value="2" name="role">
            <div class="flex gap-16">
                <div class="input_block">
                    <p>First Name</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="name">
                    </div>
                </div>
                <div class="input_block">
                    <p>Surname</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="surname">
                    </div>
                </div>
            </div>
            <div class="flex gap-16">
                <div class="input_block">
                    <p>Email</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="email">
                    </div>
                </div>
                <div class="input_block">
                    <p>Phone Number</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="phone">
                    </div>
                </div>
            </div>
            <div class="flex gap-16">
                <div class="input_block">
                    <p>Password</p>
                    <div class="edit_popup_input_group">
                        <input type="password" class="edit_input" value="" name="password">
                    </div>
                </div>
                <div class="input_block">
                    <p>Password confirm</p>
                    <div class="edit_popup_input_group">
                        <input type="password" class="edit_input" value="" name="password-confirm">
                    </div>
                </div>
            </div>
            <div class="flex gap-16">
                <div class="input_block">
                    <p>Job Title</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="jobTitle">
                    </div>
                </div>
                <div class="input_block">
                    <p>Job Level</p>
                    <div class="edit_popup_input_group">
                        <select class="edit_input" name="jobLevel">
                            <option selected disabled value="">Please select</option>
                            <option value="executive">Executive</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex gap-16">
                <div class="input_block">
                    <p>Company Name</p>
                    <div class="edit_popup_input_group">
                        <input type="text" class="edit_input" value="" name="companyName">
                    </div>
                </div>
                <div class="input_block">
                    <p>Company Size</p>
                    <div class="edit_popup_input_group">
                        <select class="edit_input" name="size">
                            <option selected disabled value="">Please select</option>
                            <option value="1">1-5</option>
                            <option value="2">6-25</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input_block">
                <p>Business type</p>
                <div class="edit_popup_input_group">
                    <select class="edit_input" name="busType">
                        <option selected disabled value="">Please select</option>
                        <option value="hotel">Hotel</option>
                        <option value="air">Airbnb apartment</option>
                        <option value="rest">Restaurant </option>
                        <option value="tourist">Tourist attraction </option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="flex gap-16">
                <div class="input_block">
                    <p>Country</p>
                    <div class="edit_popup_input_group">
                        <input type="text" name="country">
{{--                        <select class="edit_input">--}}
{{--                            <option selected disabled value="">Please select</option>--}}
{{--                            <option value="">United States</option>--}}
{{--                        </select>--}}
                    </div>
                </div>
                <div class="input_block">
                    <p>Region</p>
                    <div class="edit_popup_input_group">
{{--                        <select class="edit_input">--}}
{{--                            <option selected disabled value="">Please select</option>--}}
{{--                            <option value="">United States</option>--}}
{{--                        </select>--}}
                        <input type="text" name="region">

                    </div>
                </div>
            </div>
            <div class="flex gap-16">
                <div class="input_block">
                    <p>Campaign Budget</p>
                    <div class="edit_popup_input_group">
{{--                        <select class="edit_input">--}}
{{--                            <option selected disabled value="">Please select</option>--}}
{{--                            <option value="">$100 - $1000</option>--}}
{{--                        </select>--}}
                        <input type="number" name="budget">

                    </div>
                </div>
                <div class="input_block">
                    <p>Where did you hear about influencer?</p>
                    <div class="edit_popup_input_group">
                        <select class="edit_input" name="whereHear">
                            <option selected disabled value="">Please select</option>
                            <option value="search">Search</option>
                            <option value="social">Social Media</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="w_full flex flex-center blue_btn" type="submit">Submit</button>
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
