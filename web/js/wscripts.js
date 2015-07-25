/*
 * @Author: Ivan Dublianski 2015
 */
var ip;
$(document).ready(function(){
    var htmldoc = $('html');
    
    var nottitle = "Hi " + name + "!";
    var notBody = "Welcome back";
    var noticon = "http://localhost/webdesktop/web/img/user.jpg";
    var nottag = "hi";
    var idszka;
    
    var wloginCookie = readCookie(btoa('wlogin'));
    if(!wloginCookie){
        startPopup();
        $(".registration").click(function(){
            startRegistration();
        });
    }else{
        $.getJSON('getip.php', function (data) {
            ip = data.ip;
            checkIpAddress(ip);
        });
        //LoginByUser(); // LogIn without checking IP address

        //eraseCookie(btoa('wlogin'));
        //notifyMe(nottitle, notBody, noticon, nottag);
    }
    
    $(".panel-activator").click(function(){
        $(".desktop").fadeIn("fast"); 
        $(".panel-desktop").toggleClass("click");
        $(this).toggleClass("act");
        //$(".user-bar").toggle('slide');
        $(".user-bar").toggleClass("active");
    });
    $(".desktop").click(function(){
        disableAll();
    });
    
    $(".login").click(function(){
        Login();
    });
    $(document).on('click', '.delete-item', function(){
        var itemId = $(this).attr("id");
        deleteItem(itemId);
    });
    $(document).on('click', '.add-item', function(){
        $(".notepad-window").hide();
        //openWindow();
        $("#notepad-add").fadeIn("fast");
        $(".genpopup").fadeIn("fast");
        //disableAll();
    });
    $(document).on('click', '.notepad-item-wrap', function(){
        var itemId = $(this).attr("ident");
        openWindow();
        //disableAll();
        editNotepadItem(itemId);
    });
    $(".genpopup").click(function(){
        disableWindows();
    });
//    $(".window-close").click(function(){
//        disableWindows();
//    });
    $(document).on('click', '.window-close', function(){
        disableWindows();
    });

    $("input.note-title").hideObtrusiveText();
    
    $(".save-note").click(function(){
        var noteTitle = $("input.note-title").val();
        var noteContent = tinyMCE.get('content').getContent();
        addNote(noteTitle, noteContent);
    });
    
    $(document).on('click', '.file-upload', function(){
        $(".angular-user-uploader").addClass("act");
    });

    htmldoc.bind('dragenter', function(){
        $('.angular-user-uploader').addClass("act");
    });
    
    htmldoc.bind('dragleave', function(){
        $('.angular-user-uploader').removeClass("act");
    });

    $('.drophere').bind('dragenter', function(){
        console.log("eee");
        $(this).addClass("act");
    }, function(){
        $(this).removeClass("act");
    });
 
   
});

function disableAll(){
    $(".panel-activator").removeClass("act");
    $(".panel-desktop").removeClass("click");
    $(".user-bar").removeClass("active");
    $(".desktop").fadeOut("fast");
    $(".angular-user-uploader").removeClass("act");
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

function disableWindows(){
    $(".genpopup").fadeOut("fast");
    $(".notepad-window").fadeOut("fast");
    $("#notepad-add").fadeOut("fast");
    $("#notepad-edit").fadeOut("fast");
    $(".notepad-item[ident]").removeClass('act');
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

function openWindow(){
    $("#notepad-add").hide();
    $(".notepad-window").fadeIn("fast");
    $(".genpopup").fadeIn("fast");
}

jQuery.fn.hideObtrusiveText = function (){
    return this.each(function (){
        var v = this.value;
        $(this).blur(function (){
            if (this.value.length == 0) this.value = v;
        }).focus(function (){
            this.value = "";
        }); 
    });
};

function checkIpAddress(ip){
    var cookieVal = readCookie(btoa('wlogin'));
    var cookieName = btoa('wlogin');
    //var result = ajaxCheckIpAddress(cookieName, cookieVal, ip);
    
    
    var url = "index.php";
    $.post(url,
            {
                action: "checkIpAddress",
                cookieName: cookieName,
                cookieVal: cookieVal,
                ip: ip
            },
    function (data, status) {
        if (status == "success") {
            if(data == "true"){
                LoginByUser();
            }else{
                eraseCookie(btoa('wlogin'));
                startPopup();
            }
        } else {
            eraseCookie(btoa('wlogin'));
            startPopup();
            return false;
        }
    });
    

}