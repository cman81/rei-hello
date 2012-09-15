$(document).ready(function() {
  
	/*
	 * Wizard
	 */
    $step0 = $('#step-0');
	$step1 = $('#step-1');
	$step2 = $('#step-2');
	$step3 = $('#step-3');
	$step4 = $('#step-4');
	$step5 = $('#step-5');
	$step6 = $('#step-6');

	$step0.fadeIn('slow');

	

  $('.continue').click(function(e) {
  	e.preventDefault();

  	var currentStep = $('.step.active').attr('id').substr(-1);
  	var nextStep = (parseInt(currentStep)+1).toString();

  	$('#step-'+currentStep).removeClass('active')
  		.hide("slide", { direction: "left" }, 200);
  	//$('#nav_'+currentStep).removeClass('active');
  	$('#step-'+nextStep).addClass('active')
  		.fadeIn(600);
		$('#nav_'+nextStep).addClass('active');
  });
});