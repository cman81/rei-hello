$(document).ready(function() {
	$('#change-dialog').click(function() {
		$('#change-dialog').hide();
		$('#stored-picture').fadeOut();
	});

	$("#webcam").webcam({
		swffile: "../js/jQuery_webcam_as3/sAS3Cam.swf?v=20120613",

		previewWidth: 440,
		previewHeight: 330,

		resolutionWidth: 440,
		resolutionHeight: 330,

		noCameraFound: function () {
			this.debug('error', 'Web camera is not available');
		},

		swfApiFail: function(e) {
			this.debug('error', 'Internal camera plugin error');
		},

		cameraDisabled: function () {
			this.debug('error', 'Please allow access to your camera');
		},

		debug: function(type, string) {
			if (type == 'error') {
				$(".webcam-error").html(string);
			} else {
				$(".webcam-error").html('');
			}
		},

		cameraEnabled:  function () {
			this.debug('notice', 'Camera enabled');
			var cameraApi = this;
			if (cameraApi.isCameraEnabled) {
				return;
			} else {
				cameraApi.isCameraEnabled = true;
			}
			var cams = cameraApi.getCameraList();

			for(var i in cams) {
				$("#popup-webcam-cams").append("<option value='"+i+"'>" + cams[i] + "</option>");
			}

			setTimeout(function() {
				// TODO: uncomment this once backend supports saving photos
//				$("#popup-webcam-take-photo").removeAttr('disabled');
//				$("#popup-webcam-take-photo").show();
				cameraApi.setCamera('0');
			}, 750);

			$("#popup-webcam-cams").change(function() {
				var success = cameraApi.setCamera($(this).val());
				if (!success) {
					cameraApi.debug('error', 'Unable to select camera');
				} else {
					cameraApi.debug('notice', 'Camera changed');
				}
			});

			$('#popup-webcam-take-photo').click(function() {
				var result = cameraApi.save();
				if (result && result.length) {
					var actualShotResolution = cameraApi.getResolution();
					alert('base64encoded jpeg (' + actualShotResolution[0] + 'x' + actualShotResolution[1] + '): ' + result.length + 'chars');

					/* resume camera capture */
					cameraApi.setCamera($("#popup-webcam-cams").val());

					$.ajax({
						'url': "../savePhoto.php",
						'processData': false,
						'async': true,
						'cache': false,
						'type': 'POST',
						'dataType': 'json',
						'contentType': 'text/plain',
						'data': result,
						'error': function(xhr, textStatus, error) {
							cameraApi.debug('error', 'Server connection error ("' + textStatus + '"): ' + error);
							alert('some error callback here');
						},
						'success': function(response) {
							alert('some success callback here');
							//$('#webcam').css('visibility', 'hidden');
							cameraApi.setCamera($("#popup-webcam-cams").val());
							$('body').css('cursor', 'auto');
						}
					});
				} else {
					cameraApi.debug('error', 'Broken camera');
				}
			});


			var reload = function() {
				$('#popup-webcam-take-photo').show();
			};

			$('#popup-webcam-save').click(function() {
				reload();
			});
		}
	});
});