$('#toggle').click(function() {

    $(this).toggleClass('active');

    $('#overlayHamb').toggleClass('open');

    $('#herovideo').toggleClass('hidden');

});



$('.overlay-menu a').click(function(){

  $('#toggle').toggleClass('active');

  $('#overlayHamb').toggleClass('open');

  $('#herovideo').toggleClass('hidden');




})



$(function () {

  $(document).scroll(function () {

    var $nav = $(".navbar");

    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

  });

});



$(document).ready(() => {



$(document).on('click', '.menuLink', (event) => {

    $('.selected').removeClass('selected');

    $(event.target).addClass('selected');

    for(let i = 1 ; i < 5 ; i+=1) {

        $(`#menu${i}`).toggleClass('hidden', true);

      }

      $(`#menu${event.target.id}`).removeClass('hidden');

  });





});

