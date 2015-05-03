$(document).ready(function(){
    
    var nottitle = "Hi " + name + "!";
    var notBody = "Welcome back";
    var noticon = "http://localhost/webdesktop/web/img/user.jpg";
    var nottag = "hi"
    
    var wloginCookie = readCookie(btoa('wlogin'));
    //console.log(wloginCookie);
    if(!wloginCookie){
        startPopup();
        $(".registration").click(function(){
            startRegistration();
        });
    }else{
        //eraseCookie(btoa('wlogin'));
        LoginByUser();
        //notifyMe(nottitle, notBody, noticon, nottag);
    }
    
    $(".panel-activator").click(function(){
        $(".desktop").fadeIn("fast"); 
        $(".panel-desktop").toggleClass("click");
        $(this).toggleClass("act");
        $(".user-bar").toggle('slide');
    });
    $(".desktop").click(function(){
        disableAll();
    });
    
    $(".login").click(function(){
        Login();
    });
   
});

function disableAll(){
    $(".panel-activator").removeClass("act");
    $(".panel-desktop").removeClass("click");
    $(".user-bar").hide("slide");
    $(".desktop").fadeOut("fast");
    
}



function Login(){
    var nickname = $("input[name='nickname']").val();
    var password = $("input[name='password']").val();
    if (nickname == '' || password == '') {
        alert("The nickname and password fields should be completed !!! Try again please :)");
        return false;
    } else {
        $(".panel-login").html("Loading...");
        getLogin(nickname, password);
    }
    var nottitle = "Hi " + name + "!";
    var notBody = "Welcome back";
    var noticon = "http://localhost/webdesktop/web/img/user.jpg";
    var nottag = "hi"

    notifyMe(nottitle, notBody, noticon, nottag);
        
}
function LoginByUser(){
    var cookieVal = readCookie(btoa('wlogin'));
    var cookieName = btoa('wlogin');
    $(".panel-login").html("Loading...");
    LoginAsUser(cookieName, cookieVal);
}
function startPopup(){
    $(".onpopup").fadeIn(2500);
    $(".startpopup").fadeIn("fast");
}
function startPopupDissable(){
    $(".onpopup").fadeOut("fast");
    $(".startpopup").fadeOut(1000);
}

function startRegistration(){
    $(".login-form").hide();
    $(".registration-form").fadeIn("fast");
}

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    createCookie(name,"",-1);
}

function notifyMe(nottitle, notBody, noticon, nottag) {
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }
  else if (Notification.permission === "granted") {
        var mailNotification = new Notification(""+nottitle+"", {
            tag: ""+nottag+"",
            body: ""+notBody+"",
            icon: ""+noticon+""
        });
        mailNotification.onclick = function () {
            window.focus();
        };
  }

  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
            var mailNotification = new Notification(""+nottitle+"", {
                tag: ""+nottag+"",
                body: ""+notBody+"",
                icon: ""+noticon+""
            });
            mailNotification.onclick = function () {
                window.focus();
            };
      }
    });
  }
}