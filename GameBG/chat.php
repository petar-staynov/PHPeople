<html>
<head>
    <title>Chat</title>
    <link href="style2.css" rel="stylesheet">
    <script src="js/jquery-3.0.0.js"></script>
    <script src="chat.js" rel="script"></script>
</head>
<body style="background-color: cornflowerblue; color: white;">
<input type="text" id="uname" placeholder="Username"/>
<div id="openChatButton">Open Public Chat</div>
<div id="ChatContainer">
    <div id="chatLogs" align="center" class="ScrollStyle">
        <img id="loadingChatImage" src="loading.gif">
    </div>
    <div id="typeArea">
        <form  id="messageForm" name="msgForm" style="text-align: center;">
            <textarea id="msg"></textarea>
            <br>
            <a id="sendMsgButton" href="#" onclick="submitChat()">Send Message</a>
            <br>
        </form>
    </div>
</div>
<div id="closeChatButton">X</div>
</body>
</html>