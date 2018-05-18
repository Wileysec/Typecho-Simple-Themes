$(document).ready(function(){
    function PageHeight(){
        
        // 获取内容框的高度
        ch=$('.content').outerHeight();
        
        // 获取侧边栏的高度
        sh=$('.sidebar').outerHeight();
        
        // 如果内容框高度大于侧边栏高度
        if(ch>sh){
            $('.sidebar').css({'height':ch+'px'});
        }
        if(sh>ch){
            $('.content').css({'height':sh+'px'});
        }
    }

    PageHeight();
    
    // 当页面尺寸调整时触发PageHeight事件
    $(window).resize(function(){
        PageHeight();
    });
    $('#searchModal').on('shown.bs.modal',function(e){
        $('#search').focus(); //通过ID找到对应输入框，让其获得焦点
    });
    
    // 当滚动到80px时，隐藏导航条。回到顶部，显示导航条
    $(document).scroll(function(){
        if($(document).scrollTop()>80){
            $('.navbar').fadeOut(500);
        }else{
            $('.navbar').fadeIn(500);
        }
    });
});
