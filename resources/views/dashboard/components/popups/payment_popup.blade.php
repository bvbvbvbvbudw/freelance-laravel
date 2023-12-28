
<div class="popup-container">
  <div class="popup popup_light payment_popup_block">
    <div class="popup_close" onclick="closePopup()"><img class="_icon"
        src="/app/img/svg/icons/<?= $theme ?>/ic_close_48px.svg" alt="">
    </div>
    <form class="my_support_payment_block">
      <div>
        <p class="s-20 bold">Support {{isset($req_user) ? $req_user->name : "" }}</p>
        <p class="s-14 bold">You’ll be charget $<span id="support_qtty">{{isset($donate) ?$donate : "" }}</span></p>
        <p class="s-16 bold">PAY WITH</p>
      </div>
      <div>
        <div class="border_dashboard3 input_group card_input_block">
          <input class="input-transparent   " type="number" placeholder="Card Number" name="number">
          <input class="input-transparent   " type="number" placeholder="MM" name="YY" maxlength="2">
          <span>/</span>
          <input class="input-transparent   " type="number" placeholder="YY" name="YY" maxlength="2">
          <input class="input-transparent   " type="number" placeholder="CVC" name="cvc" maxlength="3">
        </div>
      </div>
      <div><button class="blue_btn">Pay with card</button></div>
      <div><button class="white_btn">Pay with link</button></div>
      <div>
        <p>Payment secured by Stripe . You’ll be taken to a thank you page after the payment. <a href="">Terms and
            Privacy.</a></p>
      </div>
    </form>
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
