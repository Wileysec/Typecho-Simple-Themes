$(document).ready(function(){
    function PageHeight(){
        ch=$('.content').outerHeight();
        sh=$('.sidebar').outerHeight();
        if(ch>sh){
            $('.sidebar').css({'height':ch+'px'});
        }
        if(sh>ch){
            $('.content').css({'height':sh+'px'});
        }
    }

    PageHeight();

    $(window).resize(function(){
        PageHeight();
    });
    $('#searchModal').on('shown.bs.modal',function(e){
        $('#search').focus(); //通过ID找到对应输入框，让其获得焦点
    });
});
