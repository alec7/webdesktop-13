function getLogin(nickname, password){
    var url = "index.php";
$.post(url,
    {
      login: "login",
      nickname: nickname,
      password: password
      
    },
    function(data,status){
      if(status=="success"){
        $(".user-bar").append(data);
        var returned = $(".panel-login").text();
        if(returned == nickname){
            startPopupDissable();

            function guid(){
                function s4() {
                    return Math.floor((1 + Math.random()) * 0x10000)
                        .toString(16)
                        .substring(1);
                }
                return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
                        s4() + '-' + s4() + s4() + s4();
            }
 
            var user_ip;
            $.getJSON("http://jsonip.appspot.com?callback=?",
                function(data){
                    user_ip = data.ip;
                    return user_ip;
                });
            
            var guid = guid();
            var time = 4;
            var wlogin = btoa('wlogin'); //atob
            createCookie(wlogin, guid, time); //time in days

            var user_id = $("#idszka").text();
            saveCookie(wlogin, guid, user_id, user_ip, time);


        }else{
            alert("Error in password or nickname! Try again please :)");
        }
      }else{
        alert("error");
      }
    });
  }








function saveCookie(wlogin, guid, user_id, user_ip, time){
    var url = "index.php";
    $.post(url,
            {
                login: "saveCookie",
                wlogin: wlogin,
                guid: guid,
                user_id: user_id,
                user_ip: user_ip,
                time: time

            },
    function (data, status) {
        if (status == "success") {
        } else {
            //alert("error");
            startPopup();
        }
    });
}

function LoginAsUser(cookieName, cookieVal){
    var url = "index.php";
    $.post(url,
            {
                action: "loadByCookie",
                cookieName: cookieName,
                cookieVal: cookieVal

            },
    function (data, status) {
        if (status == "success") {
            $(".user-bar").append(data);
            name = $(".panel-login").text();
        } else {
            //alert("error");
            startPopup();
        }
    });
}