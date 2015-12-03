//var user_ip;
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
            
            var guid = guid();
            var time = 4;
            var wlogin = btoa('wlogin'); //atob
            createCookie(wlogin, guid, time); //time in days

            var user_id = $("#idszka").text();
            $("#uuu").text(user_id);
            saveCookie(wlogin, guid, user_id, time);
            
                var nottitle = "Hi " + nickname + "!";
                var notBody = "Welcome back";
                var noticon = BASE_URL + "/img/user.jpg";
                var nottag = "hi";
                notifyMe(nottitle, notBody, noticon, nottag);
            
            //LoadNotepadWhenLogin(user_id);
            location.reload();
        }else{
            alert("Error in password or nickname! Try again please. " + data);
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
            $("#uuu").text($("#idszka").text());
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

function loadUserFiles(userId, fileType, fileCategory){
    var url = "index.php";
    $.post(url,
            {
                action: "loadUserFiles",
                userId: userId,
                fileType: fileType
            },
    function (data, status) {
        if (status == "success") {
            setTimeout(function(){
                $(".startpopup").html("<div class='file-viewer'><div class='file-panel'><h1 class='text-center'></h1></div></div>");
                //$(".file-viewer").html(data);
                $(".file-viewer").append(data);
                $(".file-panel h1").html(fileCategory + "<div class='viewer-close'></div>");
                $(".file-viewer").fadeIn("fast");
                $(".files-content").slimscroll();
            }, 1000);
        } else {
            alert("error");
            //location.reload();
        }
    });
}

function removeFile(fileId, userId, fileName, fileCategory){
    var url = "index.php";
    $.post(url,
            {
                action: "removeFile",
                fileId: fileId,
                userId: userId,
                fileName: fileName,
                fileCategory: fileCategory
            },
    function (data, status) {
        if (status == "success") {
            $(".file-block[file-id='"+fileId+"']").addClass("removing");
            setTimeout(function () {
                $(".file-block[file-id='"+fileId+"']").parent().remove();
            }, 250);
        } else {
            alert("error");
        }
    });
}

function loadUserData(userId){
    var url = "index.php";
    $.post(url,
            {
                action: "loadUserData",
                userId: userId
            },
    function (data, status) {
        if (status == "success") {
            $(".user-bar").removeClass("active");
            $(".panel-desktop").removeClass("click");
            $(".desktop").fadeOut("fast");
            $(".panel-activator").removeClass("act");

            setTimeout(function(){
                $(".startpopup").html("<div class='file-viewer'><div class='file-panel'><h1 class='text-center'></h1></div></div>");
                $(".file-viewer").append(data);
                $(".file-panel h1").html("Your profile" + "<div class='viewer-close'></div>");
                $(".file-viewer").fadeIn("fast");
                $(".files-content").slimscroll();
            }, 1000);
        } else {
            alert("error");
            //location.reload();
        }
    });
}

function saveUserData(formData, isPasswordForm, userId){
    var url = "index.php";
    $.post(url,
            {
                action: "saveUserData",
                data: formData,
                changePassword: isPasswordForm,
                userId: userId
            },
    function (data, status) {
        if (status == "success") {
            $(".save-user-data").text("Save");
            
            var klasa1 = "alert";
            var klasa2;
            switch(data) {
                case "Data have been changed":
                    klasa2 = "alert-success";
                    break;
                case "invalid password":
                    klasa2 = "alert-danger";
                    break;
                case "confirm password is invalid":
                    klasa2 = "alert-warning";
                    break;
                case "complete all fields":
                    klasa2 = "alert-warning";
                    break;
                default:
                    klasa2 = "alert-success";
            }
            $("#form-status").attr("class", "");
            $("#form-status").addClass(klasa1).addClass(klasa2);
            $("#form-status").text(data);
        } else {
            alert("error");
            location.reload();
        }
    });
}


function loadUserManager(userId){
    var url = "index.php";
    $.post(url,
            {
                action: "loadUserManager",
                userId: userId
            },
    function (data, status) {
        if (status == "success") {
            $(".user-bar").removeClass("active");
            $(".panel-desktop").removeClass("click");
            $(".desktop").fadeOut("fast");
            $(".panel-activator").removeClass("act");

            setTimeout(function(){
                $(".startpopup").html("<div class='file-viewer'><div class='file-panel'><h1 class='text-center'></h1></div></div>");
                $(".file-viewer").append(data);
                $(".file-panel h1").html("Users Manager" + "<div class='viewer-close'></div>");
                $(".file-viewer").fadeIn("fast");
                $(".files-content").slimscroll();
            }, 1000);
        } else {
            alert("error");
            //location.reload();
        }
    });
}

