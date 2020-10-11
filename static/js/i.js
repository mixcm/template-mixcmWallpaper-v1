//other start
$.material.init();
InstantClick.on('change', function() {
    $.material.init();
});
//other end
function message(html) {
    var data_id = new Date().getTime();
    document.getElementById("message").className = "message-appear-info";
    $('#message').prepend('<div class="info" id="' + data_id + '">' + html + '</div>');
    setTimeout(function() {
        $("#" + data_id).fadeOut(300);
    }, 5000);
}