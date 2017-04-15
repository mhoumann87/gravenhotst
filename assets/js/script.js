$(document).ready(function(){
    //sætter doubleTab scriptet til kun at virke på li poster med underliggende menu
    $( '#nav li:has(ul)' ).doubleTapToGo();

    	rotatePicsGraven(1);
    	rotatePicsScan(1);

});


//script til at validere kontaktformen, og sende resultatet til php


	function sendKontakt() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "send-kontakt.php",
		data:'navn='+$("#navn").val()
		+'&email='+$("#email").val()
		+'&swebsite='+$("#website").val()
		+'&besked='+$("#besked").val(),
		type: "POST",
		success:function(data){
		$("#meddelse-fra-form").html(data);
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".textfelt").css('background-color','');
	$(".info").html('');
	
	if(!$("#navn").val()) {
		$("#navn-info").html("(Skal indtastes)");
		$("#navn").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#email").val()) {
		$("#email-info").html(" (Skal indtastes)");
		$("#email").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-info").html(" (Ikke gyldig)");
		$("#email").css('background-color','#FFFFDF');
		valid = false;
	}
	if($("#website").val()) {
		$("#web-info").html(" (Skal være tom)");
		$("#website").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#besked").val()) {
		$("#besked-info").html(" (Skal udfyldes)");
		$("#besked").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}


function rotatePicsGraven(currentPhoto) {

var numberOfPhotos = $('#gravenSlider img').length;

currentPhoto = currentPhoto % numberOfPhotos;

$('#gravenSlider img').eq(currentPhoto).fadeOut(function() {
    $('#gravenSlider img').each(function(i) {
        $(this).css(
            'zIndex', ((numberOfPhotos - i ) + currentPhoto) % numberOfPhotos
        );
    });
    $(this).show();
    setTimeout(function() {rotatePicsGraven(++currentPhoto);}, 5000);
});

}//rotatePicsGravem

function rotatePicsScan(currentPhoto) {

    var numberOfPhotos = $('#scanSlider img').length;

    currentPhoto = currentPhoto % numberOfPhotos;

    $('#scanSlider img').eq(currentPhoto).fadeOut(function() {
        $('#scanSlider img').each(function(i) {
            $(this).css(
                'zIndex', ((numberOfPhotos - i ) + currentPhoto) % numberOfPhotos
            );
        });
        $(this).show();
        setTimeout(function() {rotatePicsScan(++currentPhoto);}, 4000);
    });

}//rotatePicsScan



