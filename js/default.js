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

	var latestStep = 0;

	// When user clicks on "Continue" button
  $('.continue').click(function(e) {

  	var currentStep = $('.step.active').attr('id').substr(-1);
  	var nextStep = (parseInt(currentStep)+1).toString();

  	$('#step-'+currentStep).removeClass('active')
  		.addClass('complete')
  		.hide("slide", { direction: "left" }, 200);
  	$('#nav_'+currentStep).removeClass('active')
  		.addClass('complete');
  	$('#step-'+nextStep).addClass('active')
  		.fadeIn(600);
		$('#nav_'+nextStep).addClass('active');

	if (nextStep > latestStep) latestStep = nextStep;

	e.preventDefault();
  });

  // When user clicks on a navigation button
  $('.nav-container').click(function(e) {
  	var clickedStep = $(this).attr('id').substr(-1);
  	if (clickedStep < latestStep) {
  		switchStep(clickedStep);
  	}
  	e.preventDefault();
  });


	$('#login_email').focus(function(e) {
		if ($(this).val() == 'email@reisystems.com') {
			$(this).val('@reisystems.com');
			setCaretToPos(this, 0);
		}
	});
	$('#login_email').blur(function(e) {
		if ($('#login_email').val() == '') {
			$('#login_email').val('email@reisystems.com');
		}
		if ($('#login_email').val() == '@reisystems.com') {
			$('#login_email').val('email@reisystems.com');
		}
	});

	$('#login_password').focus(function(e) {
		if ($('#login_password').val() == 'password') {
			$('#login_password').val('');
		}
	});
	$('#login_password').blur(function(e) {
		if ($('#login_password').val() == '') {
			$('#login_password').val('password');
		}
	});
});

function switchStep(step) {
	var step = step.toString();
	//var nextStep = (parseInt(step) + 1).toString();

	$('.step.active').removeClass('active')
  		.hide("slide", { direction: "left" }, 200);
  	//$('#nav_'+currentStep).removeClass('active');
  	setTimeout(function(){
  		$('#step-'+step).addClass('active')
  			.fadeIn(600);
  	},400);
	$('#nav_'+step).addClass('active');
}

function setSelectionRange(input, selectionStart, selectionEnd) {
	if (input.setSelectionRange) {
		input.focus();
		input.setSelectionRange(selectionStart, selectionEnd);
	}
	else if (input.createTextRange) {
		var range = input.createTextRange();
		range.collapse(true);
		range.moveEnd('character', selectionEnd);
		range.moveStart('character', selectionStart);
		range.select();
	}
}

function setCaretToPos (input, pos) {
	setSelectionRange(input, pos, pos);
}