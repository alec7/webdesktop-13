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
            
                var nottitle = "Hi " + nickname + "!";
                var notBody = "Welcome back";
                var noticon = "http://localhost/webdesktop/web/img/user.jpg";
                var nottag = "hi"
                notifyMe(nottitle, notBody, noticon, nottag);
            
            LoadNotepadWhenLogin(user_id);

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
            LoadNotepad();
        } else {
            //alert("error");
            startPopup();
        }
    });
}


function LoadNotepad(){
    idszka = $("#idszka").text();
    
    var url = "index.php";
    $.post(url,
            {
                action: "loadNotepad",
                user_id: idszka

            },
    function (data, status) {
        if (status == "success") {
            $(".user-notepad").html(data);
        } else {
            alert("error");
        }
    });
}

function LoadNotepadWhenLogin(user_id){
    var url = "index.php";
    $.post(url,
            {
                action: "loadNotepad",
                user_id: user_id

            },
    function (data, status) {
        if (status == "success") {
            $(".user-notepad").html(data);
        } else {
            alert("error");
        }
    });
}

function deleteItem(itemId){
    var url = "index.php";
    $.post(url,
            {
                action: "deleteNotepadItem",
                itemId: itemId

            },
    function (data, status) {
        if (status == "success") {
            $("#notepad_item_"+itemId).fadeOut("fast");
            LoadNotepad();
        } else {
            //alert("Error! Please reload the page");
        }
    });
}

function editNotepadItem(itemId){
    var url = "index.php";
    $.post(url,
            {
                action: "editNotepad",
                itemId: itemId

            },
    function (data, status) {
        if (status == "success") {
            $(".notepad-window").html(data);
            $(".notepad-item[ident='"+itemId+"']").addClass("act").siblings().removeClass('act');
        } else {
            alert("error");
        }
    });
}

function addNote(noteTitle, noteContent){
    var idszka = $("#idszka").text();
    
    var url = "index.php";
    $.post(url,
            {
                action: "addNote",
                title: noteTitle,
                content: noteContent,
                user_id: idszka

            },
    function (data, status) {
        if (status == "success") {
            LoadNotepad();
            
            disableWindows();
            $("input.note-title").val("the title of my own note");
            tinyMCE.get('content').setContent('');
            
        } else {
            alert("Error! Reload the page and complete again please");
        }
    });
}