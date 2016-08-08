function submitChat() {
    //check if both UserName and ChatBox have been filled out;
    if (document.getElementById('uname').value == '' || document.getElementById('msg').value == ''){
        alert("Type your Username AND your message!");
        return true;
    }
    //lock in your userName;
    document.getElementById('uname').readOnly = true;
    //establish a new http connection and open insert.php with the current uname and msg;
    let uname = document.getElementById('uname').value;
    let msg = document.getElementById('msg').value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
    xmlhttp.send();
    //empty messageBox;
    $('#msg').val('');
    //renew/Change text of the chatLogs;
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('chatLogs').innerHTML = xmlhttp.responseText;
        }
    };
}
$(document).ready(function () {
    $.ajaxSetup({cache:false});
    var hiddenChat = false;
    $("#openChatButton").hide();
    if (!hiddenChat){
        //if open Chat button is clicked ---> then load logs.php;
        var intervalLoadingLogs = setInterval(function () {
            $('#chatLogs').load('logs.php');
        }, 1000);
        var intervalScrollingBox;
        //scroll to the bottom of our chatLogs
        $("#chatLogs").mouseleave(function () {
            intervalScrollingBox = setInterval(function () {
                $('#chatLogs').stop().animate({
                    scrollTop: $('#chatLogs')[0].scrollHeight
                }, 420);
            }, 1000);
        });
        //stop scrolling to the bottom of chatLogs;
        $("#chatLogs").mouseenter(function () {
            clearInterval(intervalScrollingBox);
        });
        //close the whole Chat and renew our hiddenChat var to True;
        $("#closeChatButton").click(function () {
            $("#ChatContainer").fadeOut('fast');
            $(this).fadeOut('fast');
            $("#openChatButton").fadeIn('fast');
            hiddenChat = true;
        });
    }
    //open the whole Chat and renew our hiddenChat var to False;
    $("#openChatButton").click(function () {
            $("#ChatContainer").fadeIn('fast');
            $("#closeChatButton").fadeIn('fast');
            $("#openChatButton").fadeOut('fast');
            hiddenChat = false;
    });

});
