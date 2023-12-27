const navtt = $('.dashboard_navsearch_block-nav');
const options = navtt.find('li');

options.on('click', function () {

  const open = $(this).data('nav');
  $('.navs_block').hide();
  $("div#" + open + '_block').show();
  options.removeClass('active');
  $(this).addClass('active');
});
