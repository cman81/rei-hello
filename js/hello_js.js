/**
 * Created with JetBrains PhpStorm.
 * User: ztegegn
 * Date: 9/14/12
 * Time: 11:13 AM
 * To change this template use File | Settings | File Templates.
 */
function loadNextPage(){
    var xmlhttp;
    if (window.XMLHttpRequest)
        xmlhttp=new XMLHttpRequest();
    else
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

    var uname = document.getElementById('login_email').value;
    var passwd = document.getElementById('login_password').value;
    var vars = "uname="+uname+"&passwd="+passwd;

    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            //document.getElementById("hello1").innerHTML=xmlhttp.responseText;
            if(xmlhttp.responseText=='Wrong password')
                document.getElementById("login_password").style.border = '1px solid #ff4800';
            else if(xmlhttp.responseText=='Wrong username')
                document.getElementById("login_email").style.border = '1px solid #ff4800';
            else{
                $str = xmlhttp.responseText;
                var response_arr = $str.split('|');
                if(response_arr[0]=='Authenticated'){
                    var currentStep = $('.step.active').attr('id').substr(-1);
                    var nextStep = (parseInt(currentStep)+1).toString();
                    $('#step-'+currentStep).removeClass('active').hide("slide", { direction: "left" }, 200);
                    $('#step-'+nextStep).addClass('active').fadeIn(600);
                    $('#nav_'+nextStep).addClass('active');
                    $('#navigation').show();
                    $('#login-floater').hide();
                    $('#blue-text-name').html(response_arr[1]);
                    $('#blue-text-title').html(response_arr[2]);
                    $('#blue-text-project').html(response_arr[3]);
                    $('#blue-text-resource-mgr').html(response_arr[4]);
					$('#hidden-user-id').html(response_arr[5]);
                }
            }
        }
    }

    xmlhttp.open("POST","../authenticate.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(vars);
}

function loadNextPage2(){
	$('#step-1').removeClass('active').hide("slide", { direction: "left" }, 200);
	$('#step-1-5').addClass('active').fadeIn(600);
}

function loadNetwork(){
	var xmlhttp;
	if (window.XMLHttpRequest)
		xmlhttp=new XMLHttpRequest();
	else
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

	var vars = "uid=" + $('#hidden-user-id').html();

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var returnJson = eval("(" + xmlhttp.responseText + ")");
			var positionMap = {
				'Program Manager' : 'program-manager',
				'Program Coordinator' : 'program-coordinator',
				'Mentor' : 'mentor',
				'Resource Manager' : 'resource-manager'
			}


			for (i in returnJson) {
				var targetId = positionMap[returnJson[i].position];
				$('#' + targetId + ' .name').html(returnJson[i].first_name + " " + returnJson[i].last_name);
				$('#' + targetId + ' .title').html(returnJson[i].position);
				$('#' + targetId + ' .avatar').html(returnJson[i].avatar_path);
			}
		}
	}

	xmlhttp.open("POST","../network.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(vars);
}

function loadAllTeam(){
	var xmlhttp;
	if (window.XMLHttpRequest)
		xmlhttp=new XMLHttpRequest();
	else
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

	var vars = "uid=" + $('#hidden-user-id').html();

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var returnJson = eval("(" + xmlhttp.responseText + ")");

			for (i in returnJson) {
				var targetId = positionMap[returnJson[i].position];
				$('#' + targetId + ' .name').html(returnJson[i].first_name + " " + returnJson[i].last_name);
				$('#' + targetId + ' .title').html(returnJson[i].position);
				$('#' + targetId + ' .avatar').html(returnJson[i].avatar_path);
			}
		}
	}

	xmlhttp.open("POST","../allTeam.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(vars);
}
