$(function(){
    $('textarea').html($('textarea').val());
    function tip_message2(tip='继续操作前请登录或注册'){
        $(".tip_message2").html(tip);
        setTimeout(function(){
            $(".tip_message2").css("display","block")
            $('.tip_message2').css('animation','tip 3s linear').css('height','0').css('border','1px solid #42C02E');
        },500);
        //监听动画完成
        $(".tip_message2")[0].addEventListener("webkitAnimationEnd",function(){
            $(".tip_message2").css("display","none")
        })
    }
    function tip_message(tip='继续操作前请登录或注册'){
        $(".tip_message").html(tip);
        setTimeout(function(){
            $(".tip_message").css("display","block")
            $('.tip_message').css('animation','tip 3s linear').css('height','0').css('border','1px solid #E05244');
        },500);
        //监听动画完成
        $(".tip_message")[0].addEventListener("webkitAnimationEnd",function(){
            $(".tip_message").css("display","none")
        })
    }
})