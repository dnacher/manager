function fix_layout(){
    var wraph = document.getElementById('wrapper').offsetHeight;
    if(wraph<screen.height){ //if content is less than screenheight
        var headh   = document.getElementById('header').offsetHeight;
        var conth   = document.getElementById('content').offsetHeight;
        var footh   = document.getElementById('footer').offsetHeight;
        var foottop = screen.height - (headh + conth + footh);
        $("#footer").css({top:foottop+'px'});
    }
}