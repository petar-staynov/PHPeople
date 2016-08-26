function submitChat() {
    //check if both UserName and ChatBox have been filled out;
    if (document.getElementById('msg').value == ''){
        alert("Type your Username AND your message!");
        return true;
    }
    //lock in your userName;
    //establish a new http connection and open insert.php with the current uname and msg;
    let msg = document.getElementById('msg').value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET','insert.php?&msg='+msg,true);
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
    var hiddenChat = true;
    $("#openChatButton").hide();
    var h;
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


        $("#chat-button").click(function (e) {
            e.preventDefault();
            if (hiddenChat){
                $("#ChatContainer").animate({opacity: 1, height: 500}, 'slow', function () {
                    hiddenChat = false;
                });
            }else{
                h = $("#ChatContainer").height();
                $('#ChatContainer').animate({ opacity: 0, height: 300 }, 'slow', function () {
                    hiddenChat = true;
                });
            }
        });
});
