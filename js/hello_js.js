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
            document.getElementById("hello1").innerHTML=xmlhttp.responseText;
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
                }
            }
        }
    }

    xmlhttp.open("POST","../authenticate.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(vars);
}

function loadNextPage2(){
    var xmlhttp;
    if (window.XMLHttpRequest)
        xmlhttp=new XMLHttpRequest();
    else
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

    //var uname = document.getElementById('login_email').value;
    //var passwd = document.getElementById('login_password').value;
    var vars = "uname=teststh&passwd=foobar";

    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            //document.getElementById("hello1").innerHTML=xmlhttp.responseText;
            $('#blue-text-name').html(xmlhttp.responseText);
        }
    }

    xmlhttp.open("POST","../content.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(vars);
}