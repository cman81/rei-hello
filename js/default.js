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
  		switchStep(clickedStep, latestStep);
  	}
  	e.preventDefault();
  });


  	// Intro step
	$('#login_email').focus(function(e) {
		if ($(this).val() == 'email@reisystems.com') {
			// TODO: this is not working in Chrome, so we're just clearing for now
			/*
				$(this).val('@reisystems.com');
				setCaretToPos(this, 0);
			*/
			$(this).val('');
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
	$('#fname').focus(function(e) {
		if ($('#fname').val() == 'First Name') {
			$('#fname').val('');
		}
	});
	$('#fname').blur(function(e) {
		if ($('#fname').val() == '') {
			$('#fname').val('First Name');
		}
	});
	$('#mname').focus(function(e) {
		if ($('#mname').val() == 'Middle Name') {
			$('#mname').val('');
		}
	});
	$('#mname').blur(function(e) {
		if ($('#mname').val() == '') {
			$('#mname').val('Middle Name');
		}
	});
	$('#lname').focus(function(e) {
		if ($('#lname').val() == 'Last Name') {
			$('#lname').val('');
		}
	});
	$('#lname').blur(function(e) {
		if ($('#lname').val() == '') {
			$('#lname').val('Last Name');
		}
	});
	$('#ssn').focus(function(e) {
		if ($('#ssn').val() == 'SSN #') {
			$('#ssn').val('');
		}
	});
	$('#ssn').blur(function(e) {
		if ($('#ssn').val() == '') {
			$('#ssn').val('SSN #');
		}
	});
	$('#birth_city').focus(function(e) {
		if ($('#birth_city').val() == 'Birth City') {
			$('#birth_city').val('');
		}
	});
	$('#birth_city').blur(function(e) {
		if ($('#birth_city').val() == '') {
			$('#birth_city').val('Birth City');
		}
	});
	$('#birth_state_country').focus(function(e) {
		if ($('#birth_state_country').val() == 'Birth State or Country') {
			$('#birth_state_country').val('');
		}
	});
	$('#birth_state_country').blur(function(e) {
		if ($('#birth_state_country').val() == '') {
			$('#birth_state_country').val('Birth State or Country');
		}
	});
	$('#dob').focus(function(e) {
		if ($('#dob').val() == 'Date of Birth') {
			$('#dob').val('');
		}
	});
	$('#dob').blur(function(e) {
		if ($('#dob').val() == '') {
			$('#dob').val('Date of Birth');
		}
	});
	$('#phone_day').focus(function(e) {
		if ($('#phone_day').val() == 'Daytime Phone') {
			$('#phone_day').val('');
		}
	});
	$('#phone_day').blur(function(e) {
		if ($('#phone_day').val() == '') {
			$('#phone_day').val('Daytime Phone');
		}
	});
	$('#phone_night').focus(function(e) {
		if ($('#phone_night').val() == 'Nighttime Phone') {
			$('#phone_night').val('');
		}
	});
	$('#phone_night').blur(function(e) {
		if ($('#phone_night').val() == '') {
			$('#phone_night').val('Nighttime Phone');
		}
	});

	// Checklist step
	$('.checklist-blurb-block .checkbox-input label').each(function() {
		$(this).hover(function() {
				if ($(this).children().attr('checked') == 'checked') {
					$(this).css('background-image','url("../images/checkbox-bg-checked-hover.png")');
				}
				else {
					$(this).css('background-image','url("../images/checkbox-bg-hover.png")');	
				}
			}, function() {
				if ($(this).children().attr('checked') == 'checked') {
					$(this).css('background-image','url("../images/checkbox-bg-checked.png")');
				}
				else {
					$(this).css('background-image','url("../images/checkbox-bg-default.png")');	
				}
			})
			.toggle(function() {
				$(this).css('background-image','url("../images/checkbox-bg-checked.png")');
				$(this).children().attr('checked','checked');

			}, function() {
				$(this).css('background-image','url("../images/checkbox-bg-default.png")');
				$(this).children().removeAttr('checked');
			});
	});

	$('.checklist-footer .toggle').click(function(e) {
		$('.checklist-footer').slideToggle();
		if ($('#main-region .step-with-overlay').css('margin-bottom') == '200px') {
			$('#main-region .step-with-overlay').css('margin-bottom', '100px');
		} else {
			$('#main-region .step-with-overlay').css('margin-bottom', '200px');
		}
	});
});

function switchStep(step, latest) {
	var step = step.toString();
	//var nextStep = (parseInt(step) + 1).toString();

	$('.step.active').removeClass('active')
  		.hide("slide", { direction: "left" }, 200);
    $('#step-'+latest).removeClass('active')
        .hide("slide", { direction: "left" }, 200);
  	//$('#nav_'+currentStep).removeClass('active');
  	setTimeout(function(){
  		
  		$('#step-'+step).addClass('active')
  			.fadeIn(600);
  	},400);
	//$('#nav_'+step).addClass('active');
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