
$(document).ready(function (){

	
	$('.status').animate({left:'500px'}, 4000, function hideStatus(){
		$('.status').hide(3000);
	})
		
	
	$('.ticket-no').fadeIn(3000)
	$('.results').delay(3000).fadeIn(3000)

	//this fades the ticket id 
	$('.adc-welcome-button').animate({bottom:'200px'}, 2000)
	$('.adc-welcome-text').fadeIn(5000)
	$('.home-image').toggle(1000);
	$('.plus-icon').click(function(){
		$('.bank-list').fadeToggle();
	});
	$('.plus-icon1').click(function(){
		$('.latest-activities').fadeToggle();

	});
	$('.ticket-index-card').fadeIn(3000);

	$('.not-solved').click(function() {
		$('.why-not-solved').fadeIn();
	});
		$('.solved').click(function() {
		$('.why-not-solved').fadeOut();
	});
	$('.show-adc-field-data').click(function(){
		$('.adc-field-data').slideToggle();
	});
	//admin scripts
	$('.admin-nav').delay(1000).fadeIn(2000);
	$('.bank-tickets').fadeIn(1000);
	$('.admin-pending').delay(2000).fadeIn(3000);
	$('.admin-closed').delay(3000).fadeIn(4000);
	$('.admin-reports').delay(4000).fadeIn(5000);

	$('.admin-pending').click(function(){
		$('.pending-tickets').fadeToggle(2000);
	});
		$('.admin-closed').click(function(){
		$('.closed-tickets').fadeToggle(2000);
	});

	//end of admin scripts

	//ticket blade scripts
	$('.ticket-nav').delay(1000).fadeIn(2000);
	//end ticket scripts
})
