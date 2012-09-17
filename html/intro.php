<?php
	$checklist_html = '
		<div class="checklist-footer-container">
			<div class="checklist-footer checklist-footer-expanded" style="display: none">
				<div class="title-row">
					<div class="title">checklist overview</div>
					<div class="toggle"><img src="../images/minus_icon.png"></div>
					<div class="clear"></div><!-- intentionally blank -->
				</div>
				<div class="progress-row">
					<div class="item partial-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">3/4</div>
							<div class="category">Software</div>
						</div>
					</div>
					<div class="item complete-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">1/1</div>
							<div class="category">Your Gear</div>
						</div>
					</div>
					<div class="item partial-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">1/2</div>
							<div class="category">Program</div>
						</div>
					</div>
					<div class="item partial-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">1/2</div>
							<div class="category">People</div>
						</div>
					</div>
					<div class="item partial-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">2/4</div>
							<div class="category">Reading</div>
						</div>
					</div>
					<div class="item empty-item">
						<div class="floater"></div><!-- intentionally blank -->
						<div class="container">
							<div class="progress">0/4</div>
							<div class="category">Forms</div>
						</div>
					</div>
					<div class="clear"></div><!-- intentionally blank -->
				</div>
			</div>
			<div class="checklist-footer checklist-footer-collapsed">
				<div class="title-row">
					<div class="title">checklist overview</div>
					<div class="toggle"><img src="../images/plus_icon.png"></div>
					<div class="clear"></div><!-- intentionally blank -->
				</div>
			</div>
		</div>
	';
?>
<html>
	<head>
		<title>Hello,</title>
		<link href='http://fonts.googleapis.com/css?family=Bitter:700,400italic,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="../js/default.js" type="text/javascript"></script>
		<script type='text/javascript' src='../js/hello_js.js'></script>
		<script type="text/javascript" src="../js/jQuery_webcam_as3/jquery.webcam.as3.js"></script>
		<script type='text/javascript' src='../js/camera.js'></script>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	</head>

	<body>
		<div id="navigation" style='display:none;'>
			<div class="nav-region">
				<div id="nav_1" class="nav-container">
					<div class="nav-step">1</div>
					<div class="label highlighted-label">Welcome</div>
				</div>
				
				<div id="nav_2" class="nav-container">
					<div class="nav-step">2</div>
					<div class="label">Checklist</div>
				</div>
				
				<div id="nav_3" class="nav-container">
					<div class="nav-step">3</div>
					<div class="label">Paperwork</div>
				</div>
				
				<div id="nav_4" class="nav-container">
					<div class="nav-step">4</div>
					<div class="label">Training</div>
				</div>
				
				<div id="nav_5" class="nav-container">
					<div class="nav-step">5</div>
					<div class="label">Resources</div>
				</div>
				
				<div id="nav_6" class="nav-container">
					<div class="nav-step">6</div>
					<div class="label">Let's go!</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="main-region">
            <div id="login-floater"></div><!-- intentionally blank -->
            <?php // Login screen ?>
            <div id="step-0" class="step active">
				<div id="login-container" class="login-container">
					<div class="main-region">
						<div id="login-blurb-block" class="blurb-block">
							<div class="huge-hello blue-text">Hello,</div>
							<div>welcome to REI Systems.</div>
							<div>We're excited to have you on board.</div>
							<div class="blue-text">Let's get you up and running!</div>
						</div>
						<!-- <div id="hello1"></div> -->
						<div id="login-form-block" class="form-block">
							<form method="POST" action="" onsubmit="loadNextPage();return false;">
								<div class="text-input"><input type="text" name="login_email" id="login_email" value="email@reisystems.com" /></div>
								<div class="text-input"><input type="password" name="login_password" id="login_password" value="password" /></div>
								<div class="submit-button"><input type="submit" value="log in" /></div>
							</form>
						</div>
					</div>
				</div>
            </div>
            <?php // Welcome ?>
			<div id="step-1" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar size440x330">
						<div id="webcam-frame"><img src="../images/circle.png"></div>
						<div id="change-dialog">
							<div>Change Photo!</div>
						</div>
						<div id="stored-picture"><img src="../images/profile_photo2.png"></div>
						<div id="webcam" class="size440x330"></div>
						<div><select id="popup-webcam-cams"></select></div>
						<div>
							<input id="popup-webcam-take-photo" type="button" disabled="disabled" value="Take a photo" style="display:none" />
						</div>
					</div>

					<div class="huge-welcome">Hello, <span class="blue-text" id="blue-text-name"></span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text" id="blue-text-title"></span>
						on the <span class="blue-text" id="blue-text-project"></span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text" id="blue-text-resource-mgr"></span>.
                        You'll be working on the Open Government team which is led by <span class="blue-text">Amit Yadav</span>.
					</div>
					<div style="margin:0 auto;width:700px;">
					<div class="handwritten">Don't worry about writing this down, we'll email it to you.</div>
					</div>
				</div>
				<div class="intro-form-block form-block">
                    <form method="POST" action="" onsubmit="loadNextPage2();return false;">
						<div class="submit-button"><input class="continue--" type="submit" value="continue" /></div>
					</form>
				</div>
				<p class="webcam-error"></p>
			</div>
			<?php // Network ?>
			<div id="step-1b" class="step">
				<div id="network-blurb-block" class="blurb-block">
					<div class="avatars">
						<div id="avatar-program-manager" class="text-left">
							<div class="text-container">
								<div class="name blue-text">Amit Yadav</div>
								<div class="title">Program Manager</div>
							</div>
							<div class="avatar small"><img src="../uploads/amit.png" /></div>
							<div class="clear"></div>
						</div>
						<div id="avatar-program-coordinator" class="text-left">
							<div class="text-container">
								<div class="name blue-text">Anita Kozak</div>
								<div class="title">Program Coordinator</div>
							</div>
							<div class="avatar small"><img src="../uploads/anita.png" /></div>
							<div class="clear"></div>
						</div>
						<div id="avatar-resource-manager" class="text-top">
							<div class="text-container">
								<div class="floater"></div>
								<div class="content">
									<div class="name blue-text">Tim Molinaro</div>
									<div class="title">Resource Manager</div>
								</div>
							</div>
							<div class="avatar small"><img src="../uploads/tim.png" /></div>
							<div class="clear"></div>
						</div>
						<div id="avatar-mentor" class="text-right">
							<div class="text-container">
								<div class="name blue-text">Z. Tegegn</div>
								<div class="title">Mentor</div>
							</div>
							<div class="avatar small"><img src="../uploads/z.png" /></div>
							<div class="clear"></div>
						</div>
						<div id="avatar-everyone-else" class="text-right">
							<div class="text-container">
								<div class="name blue-text">Everyone Else</div>
							</div>
							<div class="avatar small"><img src="../uploads/other.png" /></div>
							<div class="clear"></div>
						</div>
						<div id="avatar-self"><img src="../images/profile_photo.png" /></div>
					</div>

					<div class="blurb">
						Let's introduce you to a few import team members. Click on any of them
						to send them a quick "Hello" email.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form method="POST" action="" onsubmit="return false;">
						<div class="submit-button"><input class="continue" type="submit" value="continue" /></div>
					</form>
				</div>
			</div>
			<?php // Checklist ?>
			<div id="step-2" class="step">
                <div id='checklist-container'></div>
				<div class="column-1">
					<div class="checklist-blurb-block blurb-block checklist-organiser">
                            <div class="field-group">Software<span class="subtext">Subtext here</span><span class="subtext">Subtext here</span></div>
                            <div class="checkbox-input"><label for="photoshop"><input type="checkbox" name="photoshop" id="photoshop">Adobe Photoshop CS6</label></div>
                            <div class="checkbox-input"><label for="illustrator"><input type="checkbox" name="illustrator" id="illustrator">Adobe Illustrator CS6</label></div>
                            <div class="checkbox-input"><label for="indesign"><input type="checkbox" name="indesign" id="indesign">Adobe InDesign CS6</label></div>
                        <div class="checkbox-input"><label for="word"><input type="checkbox" name="word" id="word">Microsoft Word for Mac 2011</label></div>
					</div>
                    <div class="checklist-blurb-block blurb-block checklist-organiser">
                        <div class="field-group">Your Gear<span class="subtext">Subtext here</span></div>
                        <div class="checkbox-input"><label for="laptop"><input type="checkbox" name="laptop" id="laptop">Laptop -- you can pick Mac or PC!</label></div>
                    </div>
                    <div class="checklist-blurb-block blurb-block checklist-organiser">
                        <div class="field-group">Program<span class="subtext">Subtext here</span></div>
                        <div class="checkbox-input"><label for="jira"><input type="checkbox" name="jira" id="jira">Hooked up to Jira</label></div>
                        <div class="checkbox-input"><label for="vpn"><input type="vpn" name="illustrator" id="vpn">Have your VPN client</label></div>
                    </div>
				</div>
				<div class="column-2">
                    <div class="checklist-blurb-block blurb-block checklist-organiser">
                            <div class="field-group">People<span class="subtext">Subtext here</span><span class="subtext">Subtext here</span></div>
                            <div class="checkbox-input"><label for="anita"><input type="checkbox" name="anita" id="anita">Have you met Anita Kozak?</label></div>
                            <div class="checkbox-input"><label for="amit"><input type="checkbox" name="amit" id="amit">Have you met Amit Yadav?</label></div>
                     </div>
                    <div class="checklist-blurb-block blurb-block checklist-organiser">
                        <div class="field-group">Reading<span class="subtext">Subtext here</span></div>
                        <div class="checkbox-input"><label for="handbook"><input type="checkbox" name="handbook" id="handbook">Employee Handbook</label></div>
                        <div class="checkbox-input"><label for="401k"><input type="checkbox" name="401k" id="401k">401k Plan Info</label></div>
                        <div class="checkbox-input"><label for="retirement"><input type="checkbox" name="retirement" id="retirement">Retirement Plans</label></div>
                        <div class="checkbox-input"><label for="insurance"><input type="checkbox" name="insurance" id="insurance">Health Insurance</label></div>
                    </div>
                    <div class="checklist-blurb-block blurb-block checklist-organiser">
                        <div class="field-group">Forms<span class="subtext">Subtext here</span></div>
                        <div class="checkbox-input"><label for="form-handbook"><input type="checkbox" name="form-handbook" id="form-handbook">Employee Handbook</label></div>
                        <div class="checkbox-input"><label for="form-401k"><input type="checkbox" name="form-401k" id="form-401k">401k Plan Info</label></div>
                        <div class="checkbox-input"><label for="form-retirement"><input type="checkbox" name="form-retirement" id="form-retirement">Retirement Plans</label></div>
                        <div class="checkbox-input"><label for="form-insurance"><input type="checkbox" name="form-insurance" id="form-insurance">Health Insurance</label></div>
                    </div>
				</div>
				<div class="checklist-form-block form-block">
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
				</div>
			</div>

			<div id="step-3" class="step step-with-overlay">
				<div id="paperwork-blurb-block" class="blurb-block">
					<div class="instruction blue-text">Let's fill out some paperwork</div>
					<div>Don't worry, we'll walk you through it.</div>

				</div>
				<div id="paperwork-form-block" class="form-block">
					<form>
						<div class="field-group">Your Full Name</div>
						<div class="text-input"><input type="text" name="fname" id="fname" value="First Name"></div>
						<div class="text-input"><input type="text" name="mname" id="mname" value="Middle Name"></div>
						<div class="text-input"><input type="text" name="lname" id="lname" value="Last Name"></div>
						<div class="field-group">Social Security Number</div>
						<div class="text-input"><input type="text" name="ssn" id="ssn" value="SSN #"></div>
						<div class="field-group">Place of Birth</div>
						<div class="text-input"><input type="text" name="birth_city" id="birth_city" value="Birth City"></div>
						<div class="text-input"><input type="text" name="birth_state_country" id="birth_state_country" value="Birth State or Country"></div>
						<div class="field-group">Date of Birth</div>
						<div class="text-input"><input type="text" name="dob" id="dob" value="Date of Birth"></div>
						<div class="field-group">Phone Numbers</div>
						<div class="text-input"><input type="text" name="phone_day" id="phone_day" value="Daytime Phone"></div>
						<div class="text-input"><input type="text" name="phone_night" id="phone_night" value="Nighttime Phone"></div>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
				<?= $checklist_html ?>
			</div>

			<div id="step-4" class="step step-with-overlay">
				<div style="width:670px;margin:0 auto;pading: 0 0 0 40px;">
				<a href="http://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img src="../images/drupal.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				<a href="https://www.youtube.com/watch?v=ylMqfFIebuw" target="_blank"><img src="../images/jira.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				<a href="https://www.youtube.com/watch?v=GUNJqFwzrjY&feature=fvst" target="_blank"><img src="../images/skype.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				<a href="https://www.youtube.com/watch?v=TPY8UwlTIc0" target="_blank"><img src="../images/github.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				<a href="https://www.youtube.com/watch?v=ne7wlDSg_D8" target="_blank"><img src="../images/mamp.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				<a href="https://www.youtube.com/watch?v=4iGuZRvrRP0" target="_blank"><img src="../images/adobe.png" style="margin:40px 40px 0 0;box-shadow: 0 2px 4px rgba(0,0,0,0.1);"/></a>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
				<?= $checklist_html ?>
			</div>

			<div id="step-5" class="step step-with-overlay">
                <div class="intro-blurb-block blurb-block" id='resources-container'>

                    <div class="instruction blue-text">Here are some links to get you started!</div>
                    <div class='res-title'>Feel free to ping <a href='mailto:akozak@reisystems.com'>Anita</a> if you still have any questions.</div>
                    <div class='column-1 column'>
                        <div class='res-header'>Admin</div>
                        <div class='blue-text'>Deltek</div>
                        <div class='blue-text'>OMB Calendar</div>
                        <div class='blue-text'>Portal</div>
                        <div class='blue-text'>Vacation WFH/Policies</div>
                        <div class='blue-text'>Email signature policy</div>
                        <div class='blue-text'>Work policies</div>
                    </div>
                    <div class='column-2 column'>
                        <div class='res-header'>Technical</div>
                        <div class='blue-text'>VPN access</div>
                        <div class='blue-text'>Software requirements</div>
                        <div class='blue-text'>W3Schools</div>
                        <div class='blue-text'>Drupalize.me</div>
                        <div class='blue-text'>php.net</div>
                        <div class='blue-text'>github.com</div>
                    </div>


                <div class="intro-form-block form-block">
                    <form>
                        <div class="submit-button"><input class="continue" type="button" value="continue" /></div>
                    </form>
                </div>

                </div>
				<?= $checklist_html ?>
			</div>

			<div id="step-6" class="step step-with-overlay">
				<div class="blue_bg"></div>
				<div class="done">Congratulations, you're done!</div>
				<div class="doneSubtext">If you forget anything or just want quick reference, you can always come back.</div>
				<?= $checklist_html ?>
			</div>

		</div>
		<div id="hidden-region" style="display: none;">
			<div id="hidden-user-id"></div>
		</div>
	</body>
</html>