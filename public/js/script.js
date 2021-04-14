$(document).ready(function() {
    var square = $('#square').val();
    var cena = $('#cena').text();

    $('#price').val(square*cena)

});
$(function() {
	$('#square').keyup(function(){
		var square = $(this).val();
		var cena = $('#cena').text();

		$('#price').val(square*cena)
	});
	$('#price').keyup(function(){
        var cena = $('#cena').text();
		var price = $(this).val();
		$('#square').val((price/cena).toFixed(2))
	});

	$('.ask-blocks .item h4').click(function(){
		var thisH4 = $(this),
			thisSpan = $('div', $(this).parent()),
			outherH4 = $('.ask-blocks .item h4').not(thisH4),
			outherSpan = $('.ask-blocks .item div').not(thisSpan);
		outherH4.removeClass('active');
		outherSpan.hide().removeClass('active');
		thisH4.toggleClass('active');
		thisSpan.fadeToggle().toggleClass('active');
	});
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
		if( ($(window).width() <= 767)  ) {
	        myMap = new ymaps.Map("map", {
		            center: [52.285577, 76.940722],
		            zoom: 8
		        });
		} else {
	        myMap = new ymaps.Map("map", {
	            center: [52.285577, 76.940722],
	            zoom: 8
	        });
		}

        myPlacemark = new ymaps.Placemark([55.75399400, 37.62209300], {
            hintContent: 'Алматы',
            balloonContent: 'г. Алматы, пр. Достык, д. 291/3'
        });
        myMap.geoObjects.add(myPlacemark);
    }
    $('.up').click(function(e){
    	e.preventDefault();
    	$('html,body').animate({
          scrollTop: 0
        }, 1000);
    });
    $("input.tel").click(function(){
    	$(this).val('+7');
    });
	$(window).scroll(function() {
		var pos = 86;
		if( ($(window).width() <= 1199) || ($(window).width() >= 768) ) {
			pos = 150;
		}
		if( ($(window).width() <= 767) || ($(window).width() >= 576) ) {
			pos = 150;
		}
		if($(window).width() <= 575) {
			pos = 290;
		}

		if($(this).scrollTop() >= pos) {
			$('nav').addClass('stickytop');
		}
		else{
			$('nav').removeClass('stickytop');
		}
	});
    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
          scrollTop: top
        }, 1000);
    });

	$('.modal').on('hidden.bs.modal', function (e) {
	  $('input:not(.type)', $(this)).val('');
	});
	$('form').submit(function(e){
	    e.preventDefault();
		var form_data = {
			'name':$(".name", $(this)).val(),
			'tel':$(".tel", $(this)).val(),
			'price':$("#price", $(this)).val(),
			'square':$("#square", $(this)).val(),
			'type':$(".type", $(this)).val()
		};
		$.ajax({
		  type: "POST",
		  url: "/mail",
            data: {
                "_token": $('#token').val(),
                "form_data": form_data
            },
		  success: function(data){
		  	// console.log(data);
		    $('.modal').modal('hide');
		    setTimeout(function() {
		    	$('.success').fadeToggle();
		    }, 1000);
		    setTimeout(function() {
		    	$('.success').fadeToggle();
		    }, 2500);
		  },
		  error: function() {
		  	alert("Произошла какая то ошибка!");
		  }
		});
	});
	new WOW().init();
});
