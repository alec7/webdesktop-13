var notTitle;
var notBody;
var notIcon;
var notTag;
var cookiesInfo = true;

$(function(){
    showAuthorNotification();
    buttonHover();
});

function notifyAlert(notTitle, notBody, notIcon, notTag) {
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }else if (Notification.permission === "granted") {
        var mailNotification = new Notification(""+notTitle+"", {
            tag: ""+notTag+"",
            body: ""+notBody+"",
            icon: ""+notIcon+""
        });
        mailNotification.onclick = function () {
            window.focus();
            this.close();
        };
        mailNotification.onclose = function () {
//            if(notTag == 'cookie'){
//                $(".btn-blue").attr("onclick", "location.href='"+MAIN_URL+"'");
//            }
        };
            if(notTag == 'cookie'){
                $(".btn-blue").attr("href", ""+MAIN_URL+"");
            }
  }else if (Notification.permission !== 'denied') {
      Notification.requestPermission();
  }
}

function buttonHover(){
    $(".btn-blue").hover(function(){
        $(".full-block").addClass("hover");
        if(cookiesInfo === true){
            showCookiesNotification();
            cookiesInfo = false;
        }
    }, function(){
        $(".full-block").removeClass("hover");
    });
}

function showAuthorNotification(){
    notTitle = 'Author: Ivan Dublianskyi w49164';
    notBody = 'IID-TI WSIiZ';
    notIcon = BASE_URL + "/img/author.jpg";
    notTag = 'author';
    notifyAlert(notTitle, notBody, notIcon, notTag);
}
function showCookiesNotification(){
    notTitle = 'V Webdesktop uses cookies and JavaScript';
    notBody = 'If you are going to use V Webdesktop you accept the cookies policy which are necessary to correctly working of application';
    notIcon = BASE_URL + "/img/click.png";
    notTag = 'cookie';
    notifyAlert(notTitle, notBody, notIcon, notTag);
}