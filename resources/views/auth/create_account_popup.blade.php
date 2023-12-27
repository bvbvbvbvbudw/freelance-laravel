
<div class="popup-container">
    <div class="popup popup_light create_account_popup_block">

        <form id="popup_create" action="{{route('register')}}" method="POST" class="create_account_popup">
            @csrf
            <input type="hidden" value="2" name="role">
            <h2 class="s-20 medium">Create account</h2>
            <div class="login_field_block">
                <label for="name">Your name</label>
                <div class="login_field">
                    <input required id="name" type="text" name="name">
                </div>
                <label id="name-error" class="error" for="name"></label>
            </div>
            <div class="login_field_block">
                <label for="email">Email</label>
                <div class="login_field">
                    <input required id="email" type="text" name="email">
                </div>
                <label id="email-error" class="error" for="email"></label>
            </div>
            <div class="login_field_block">
                <label for="password">Password</label>
                <div class="login_field">
                    <input required id="password" type="password" name="password">
                </div>
                <label id="password-error" class="error" for="password"></label>
            </div>
            <div class="login_field_block">
                <label for="password_confirmation">Re-enter password</label>
                <div class="login_field">
                    <input id="password_confirmation" type="password" name="password_confirmation">
                </div>
                <label id="password_confirmation-error" class="error" for="password_confirmation"></label>
            </div>
            <div> <button class="blue_btn w_full text-center" type="submit" form="popup_create">Create your account</button></div>
            <div class="login_small_text">
                <p class="s-10">By creating an account, you agree <a href="">Conditions of Use</a> and <a href="">Privacy
                        Notice</a> </p>
            </div>
            <div class="flex flex-between login_small_text align-center">
                <p class="s-10">Do you already have account? </p>
                <p onclick="signInPopup()" class="flex align-center singin_text">Sign in <img style="margin-left:10px"
                                                                                              class="_icon" src="../img/svg/icons/popup/<?= $theme ?>/ic_keyboard_arrow_down_48px.svg" alt=""></p>
            </div>


        </form>
    </div>
</div>
</div>
<script>


    $('#createAccountForm').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,

            },
            password: {
                required: true,
                minlength: 6,
            },
            r_password: {
                equalTo: "#password",
            }
        },
        messages: {
            name: "Name is required",
            email: "Email is required",
            password: {
                required: "Password is required",
                minlength: "Password must be at least 6 characters"
            },
            r_password: {
                equalTo: "Passwords not same"
            }
        },

    });
</script>
