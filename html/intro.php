<html>
	<head>
		<title>Hello.</title>
		<link href='http://fonts.googleapis.com/css?family=Bitter:700,400italic,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="../js/default.js" type="text/javascript"></script>
        <script type='text/javascript' src='../js/hello_js.js'></script>
	</head>

	<body>
		<div id="navigation" style='display:none;'>
			<div class="nav-region">
				<div id="nav_1" class="nav-container active">
					<div class="nav-step">1</div>
					<div class="label highlighted-label">Welcome</div>
				</div>
				<div class="nav_spacer_active"></div>
				<div id="nav_2" class="nav-container">
					<div class="nav-step">2</div>
					<div class="label">Checklist</div>
				</div>
				<div class="nav_spacer_incomplete"></div>
				<div id="nav_3" class="nav-container">
					<div class="nav-step">3</div>
					<div class="label">Paperwork</div>
				</div>
				<div class="nav_spacer_incomplete"></div>
				<div id="nav_4" class="nav-container">
					<div class="nav-step">4</div>
					<div class="label">Tutorials</div>
				</div>
				<div class="nav_spacer_incomplete"></div>
				<div id="nav_5" class="nav-container">
					<div class="nav-step">5</div>
					<div class="label">Resources</div>
				</div>
				<div class="nav_spacer_incomplete"></div>
				<div id="nav_6" class="nav-container">
					<div class="nav-step">6</div>
					<div class="label">Let's go!</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="main-region">
            <div id="login-floater"></div><!-- intentionally blank -->
            <div id="step-0" class="step active">
            <div id="login-container" class="login-container">
                <div class="main-region">
                    <div id="login-blurb-block" class="blurb-block">
                        <div class="huge-hello">Hello,</div>
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
			<div id="step-1" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
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
				</div>
				<div class="intro-form-block form-block">
                    <form method="POST" action="" onsubmit="loadNextPage2();return false;">
						<div class="submit-button"><input class="continue--" type="submit" value="continue" /></div>
					</form>
				</div>
			</div>

			<div id="step-2" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
					</div>
					<div class="huge-welcome">OPPA <span class="blue-text">GANGNAM STYLE! 2</span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text">Associate Database Engineer</span>
						on the <span class="blue-text">NYC Checkbook</span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text">Amanandan
						Dhami</span>. You'll be working on the Open Government team which is led by <span class="blue-text">Amit
						Yadav</span>.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
			</div>

			<div id="step-3" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
					</div>
					<div class="huge-welcome">OPPA <span class="blue-text">GANGNAM STYLE! 3</span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text">Associate Database Engineer</span>
						on the <span class="blue-text">NYC Checkbook</span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text">Amanandan
						Dhami</span>. You'll be working on the Open Government team which is led by <span class="blue-text">Amit
						Yadav</span>.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
			</div>

			<div id="step-4" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
					</div>
					<div class="huge-welcome">OPPA <span class="blue-text">GANGNAM STYLE! 4</span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text">Associate Database Engineer</span>
						on the <span class="blue-text">NYC Checkbook</span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text">Amanandan
						Dhami</span>. You'll be working on the Open Government team which is led by <span class="blue-text">Amit
						Yadav</span>.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
			</div>

			<div id="step-5" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
					</div>
					<div class="huge-welcome">OPPA <span class="blue-text">GANGNAM STYLE! 5</span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text">Associate Database Engineer</span>
						on the <span class="blue-text">NYC Checkbook</span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text">Amanandan
						Dhami</span>. You'll be working on the Open Government team which is led by <span class="blue-text">Amit
						Yadav</span>.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input class="continue" type="button" value="continue" /></div>
					</form>
				</div>
			</div>

			<div id="step-6" class="step">
				<div class="intro-blurb-block blurb-block">
					<div class="avatar">
						<img src="../images/profile_photo.png" />
					</div>
					<div class="huge-welcome">OPPA <span class="blue-text">GANGNAM STYLE! 6</span></div>
					<div class="blurb">
						We know you're new here, and we want to make your first steps as painless as possible. Just in case
						you didn't already know, you're the new <span class="blue-text">Associate Database Engineer</span>
						on the <span class="blue-text">NYC Checkbook</span> project in the <span class="blue-text">Open
						Government</span> program. Your mentor will be <span class="blue-text">Anita Kozak</span>; she can
						answer any questions you may have. Starting today, you'll report to <span class="blue-text">Amanandan
						Dhami</span>. You'll be working on the Open Government team which is led by <span class="blue-text">Amit
						Yadav</span>.
					</div>
				</div>
				<div class="intro-form-block form-block">
					<form>
						<div class="submit-button"><input id="continue" type="button" value="submit" /></div>
					</form>
				</div>
			</div>

		</div>
	</body>
</html>