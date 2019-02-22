$(document).ready(function() {
  $(".menu").mouseover(function(){
    $('.list').css('display', 'flex');
    $(".list").stop().animate({
      height:"40px"
    },500);
  });
  $(".recherche").click(function () {
    $(".profils").stop().animate({
      height:"0px"
    },500);
    $('.filter').css('display', 'block');
    $(".filter").stop().animate({
      height:"100%",
    },500);
    $('.profils').css('display', 'none');
  });
  $(".profil").click(function () {
    $(".filter").stop().animate({
      height:"0px"
    },500);
    $('.profils').css('display', 'block');
    $(".profils").stop().animate({
      height:"100%"
    },500);
  });
  $(".menu").mouseout(function(){
    $(".list").stop().animate({
      height:"0px"
    },500);
  });

  $(".mod").click(function () {
    $(".profils > ul > li").css("display", "none");
    $(".profils > ul > label").css("display", "block");
    if ($(".ville").unbind().click(function () {
      $(".in").attr("name", "ville");
      $(".in").prop("type", "text");
      $(".in").attr("placeholder", "Ville");
      $(".in").css("display", "block");
      $(".sn").css("display", "block");
    }));
    if ($(".mail").unbind().click(function () {
      $(".in").attr("name", "mail");
      $(".in").prop("type", "mail");
      $(".in").attr("placeholder", "Mail");
      $(".in").css("display", "block");
      $(".sn").css("display", "block");
    }));
    if ($(".passe").unbind().click(function () {
      $(".in").attr("name", "passe");
      $(".in").prop("type", "password");
      $(".in").attr("placeholder", "Mot de passe");
      $(".in").css("display", "block");
      $(".sn").css("display", "block");
    }));
  });
});
