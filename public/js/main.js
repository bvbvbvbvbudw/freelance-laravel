﻿$('.left_panel_open_button').on('click', function () {
    $('.mob_left_column').addClass('active');
    $('body').addClass('noscroll');
});
$('.left_panel_close_button').on('click', function () {
    $('.mob_left_column').removeClass('active');
    $('body').removeClass('noscroll');
});
// function themeSelect(button) {
//     let theme = $(button).is(':checked') ? 'dark' : 'light';
//     console.log(theme);
//     $('input[name="theme"]').val(theme);
//     setTimeout(() => { $('#themeForm').submit(); }, '300');
// }



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
    openPopup('share_popup_profile')
}

function createPopup() {
    // openPopup('create_popup.php')
    openPopup('create_popup_profile')
}

function extraPopup() {
    openPopup('extra_popup.php')
}
function membershipPopup() {
    openPopup('member_popup.php')
}
function editPopup() {
    // openPopup('edit_popup.php')
    openPopup('edit_popup_profile')
}
function signInPopup() {
    openPopup('singin-popup')
}
function createAccountPopup() {
    openPopup('singin-popups')
}
function addViewPopup() {
    openPopup('add_view_popup.php')
}
function authorizePopup() {
    openPopup('social_authorize_popup.php')
}


function applyBrandPopup() {
    openPopup('brand_popup')
}

function openPopup(file) {
    closePopup();
    $.ajax({
        url: "/popups/" + file,
        type: 'GET',
        success: function (data) {
            $('body').append(data);
        }
    });
}

