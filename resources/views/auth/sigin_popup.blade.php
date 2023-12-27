<div class="popup-container">
  <div class="popup popup_light signin_popup_block">
    <form id="signinForm"
          action="{{route('login')}}" method="POST"
          class="signin_popup">
        @csrf
      <h2 class="s-20 medium">Sign in</h2>
      <div class="login_field_block">
        <label for="email">Mobile phone number or email</label>
        <div class="login_field">
          <input id="email" type="text" name="email">
        </div>
        <label id="email-error" class="error" for="email"></label>
      </div>
      <div class="login_field_block">
        <label for="password">Password</label>
        <div class="login_field">
          <input id="password" type="password" name="password">
        </div>
        <label id="password-error" class="error" for="password"></label>
      </div>
      <div>
        <a class="s-12 light_grey" href="#">Forgot your password?</a>
      </div>
      <div> <button type="submit" class="blue_btn">Sign In</button></div>
      <div>
        <p class="s-10" style="font-size: 10px">By creating an account, you agree <a href="" style="color:blue;">Conditions of Use</a> and <a href="" style="color:blue;">Privacy
            Notice</a> </p>
      </div>
      <div> <a onclick="createAccountPopup()" class="white_btn">Create account</a></div>
    </form>
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
