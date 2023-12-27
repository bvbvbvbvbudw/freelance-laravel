$('.left_panel_open_button').on('click', function () {
    $('.mob_left_column').addClass('active');
    $('body').addClass('noscroll');
});
$('.left_panel_close_button').on('click', function () {
    $('.mob_left_column').removeClass('active');
    $('body').removeClass('noscroll');
});
function themeSelect(button) {
    let theme = $(button).is(':checked') ? 'dark' : 'light';
    console.log(theme);
    $('input[name="theme"]').val(theme);
    setTimeout(() => { $('#themeForm').submit(); }, '300');
}



function offerPopup() {
    $.ajax({
        url: "/app/dashboard/offer_popup.php",
        type: 'GET',
        success: function (data) {
            $('body').append(data);

        }
    });
}

function closePopup() {
    $('.popup-container').remove();
}

function viewPopup() {
    openPopup('view_popup.php')
}

function postImagePopup() {
    openPopup('post_image_popup.php')
}

function sharePopup() {
    openPopup('share_popup.php')
}

function createPopup() {
    openPopup('create_popup.php')
}

function extraPopup() {
    openPopup('extra_popup.php')
}
function membershipPopup() {
    openPopup('member_popup.php')
}
function editPopup() {
    openPopup('edit_popup.php')
}
function signInPopup() {
    openPopup('signin_popup.php')
}
function createAccountPopup() {
    openPopup('create_account_popup.php')
}
function addViewPopup() {
    openPopup('add_view_popup.php')
}
function authorizePopup() {
    openPopup('social_authorize_popup.php')
}
function paymentPopup() {
    openPopup('payment_popup.php')
}

function applyBrandPopup() {
    openPopup('applybrand_popup.php')
}

function openPopup(file) {
    closePopup();
    $.ajax({
        url: "/app/profile/" + file,
        type: 'GET',
        success: function (data) {
            $('body').append(data);
        }
    });
}
