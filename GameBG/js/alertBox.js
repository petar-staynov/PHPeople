function alertBox(message, successful) {
    var box = $('<div></div>').text(message);
    box.hide();
    box.fadeIn();
    if (successful){
        box.css('background-color', 'green');
    }else{
        box.css('background-color', 'orange');
    }
    box.css('color', 'white');
    box.css('border-radius', '3px');
    box.css('top', '11%');
    box.css('text-align', 'center');
    $('body').append(box);
    setTimeout(hideMsg, 2000);
    function hideMsg() {
        box.fadeOut();
    }
}
