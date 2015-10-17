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
    notBody = 'Thanks for join to us';
    notIcon  = BASE_URL + "/img/author.jpg";
    notTag = 'author';
    notifyAlert(notTitle, notBody, notIcon, notTag);
}
function showCookiesNotification(){
    notTitle = 'V Webdesktop admin';
    notBody = 'Webdesktop uses cookies!!! JavaScript and cookies are necessary to correctly working of application.';
    notIcon  = '';
    notTag = 'cookie';
    notifyAlert(notTitle, notBody, notIcon, notTag);
}