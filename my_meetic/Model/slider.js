$(document).ready(function () {
  var $carrousel = $('#carrousel'),
    $img = $('#carrousel ul'),
    indexImg = $img.length - 1,
    i = 0,
    $currentImg = $img.eq(i);
    $img.css('display', 'none');
    $currentImg.css('display', 'block');
    var $btn1 = '<div class="controls"><bottom type="buttom"';
    $btn1 += 'class="prev btn btn-primary">Precedent</bottom></div>';
    var $btn2 = '<bottom type="buttom" class="next btn btn-primary">';
    $btn2 += 'Suivant</bottom>';
    $carrousel.append($btn1);
    $('.controls').append($btn2);

    $('.next').click(function(){
      i++;
      if( i <= indexImg ){
        $currentImg = $img.eq(i);
        $currentImg.stop().animate({
          height:"5px"
        },100);
        $img.css('display', 'none');
        $currentImg.animate({
          height:"61%"
        },800);
        $currentImg.css('display', 'block');
       }
       else{
           i = -1;
       }
    });

    $('.prev').click(function(){
      i--;
      if( i >= 0 ){
        $currentImg = $img.eq(i);
        $currentImg.stop().animate({
          height:"5px"
        },100);
        $img.css('display', 'none');
        $currentImg.animate({
          height:"61%"
        },800);
        $currentImg.css('display', 'block');
      }
      else{
          i = 0;
      }
    });

    function slideImg(){
    setTimeout(function(){
      if(i < indexImg){
  	    i++;
    	}
    	else{
    	    i = 0;
    	}
      $currentImg = $img.eq(i);
       $currentImg.stop().animate({
         height:"5px"
       },100);
       $img.css('display', 'none');
       $currentImg.animate({
         height:"61%"
       },800);
       $currentImg.css('display', 'block');
    	    slideImg();
      }, 7000);
    }
    slideImg();

});
