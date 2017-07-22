$(function(){
    $(function(){
        //提示信息函数
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
        //登录验证函数
        function login_in(){
            //serialize()将表单中的数据自动组合
            var str=$('.login_form input').serialize();
            $.ajax({
                url:'index.php?d=index&f=login&a=check_login',
                type:'post',
                data:str,
                success:function(e){
                    if(e=='验证码错误'){
                        tip_message(e);
                    }
                    if(e=='用户名不能为空'){
                        tip_message(e);
                    }
                    if(e=='密码不能为空'){
                        tip_message(e);
                    }
                    if(e=='用户名或密码错误'){
                        tip_message(e);
                    }
                    if(e=='登录成功,即将跳转....'){
                        tip_message(e);
                        setTimeout(function(){
                            location.href='index.php';
                        },1500)

                    }
                }
            })
        }
        //注册验证函数
        function reg(){
            //serialize()将表单中的数据自动组合
            var str=$('.reg_form input').serialize();
            $.ajax({
                url:'index.php?d=index&f=login&a=check_reg',
                type:'post',
                data:str,
                success:function(e){
                    if(e=='昵称不能为空'){
                        tip_message(e);
                    }
                    if(e=='用户名不能为空'){
                        tip_message(e);
                    }
                    if(e=='用户名存在'){
                        tip_message(e);
                    }
                    if(e=='密码不能为空'){
                        tip_message(e);
                    }
                    if(e=='确定密码不能为空'){
                        tip_message(e);
                    }
                    if(e=='两次密码不一致'){
                        tip_message(e);
                    }
                    if(e=='注册成功,请登录'){
                        tip_message(e);
                        setTimeout(function(){

                        },1000)
                    }
                }
            })
        }

        $('.write_artic_btn').click(function(){
            //ajax验证登录状态(写文章)
            $.ajax({
                url:'index.php?d=index&f=info&a=add',
                type:'post',
                success:function(e){
                    if(e=='noLogined'){
                        $('.zhezao').css('display','block');
                        $('.loginBox').css('display','block').css('top','150px');
                        tip_message();
                        $('.close_btn').click(function(){
                            $('.loginBox').css('display','none');
                            $('.zhezao').css('display','none');
                        })
                        //阻止默认的表单提交
                        $('input[type=submit]').click(function(){
                            return false;
                        })
                        //通过ajax提交表单数据到后台,验证登录
                        $('.sub_login input').click(function(){
                            login_in();

                        })
                        //通过ajax提交表单数据到后台,验证注册
                        $('.sub_reg input').click(function(){
                            reg();
                        })
                    }else{
                        location.href='index.php?d=index&f=category&a=select';
                    }
                }

            })
        })
        //登录注册选项卡
        $('.xue li').click(function(){
            $('.xue li').removeClass('active');
            $(this).addClass('active');
            $('.box form').removeClass('active1');
            $('.box form').eq($(this).index()).addClass('active1');
        })
        //退出登录
        $('.loginOut').click(function(){
            alert(1);
            $.ajax({
                url:'index.php?d=index&f=login&a=out_login',
                type:'post',
                success:function(e){
                    if(e=='退出成功'){
                        tip_message(e);
                        setTimeout(function(){
                            location.href='index.php'
                        },2000)
                        ;
                    }
                },
            })

        })
        //登录
        $('.sub_login input').click(function(){
            return false;
        })
        $('.sub_reg input').click(function(){
            return false;
        })
        $('.login_btn').click(function(){
            $('.zhezao').css('display','block');
            $('.loginBox').css('display','block').css('top','150px');
            tip_message('请登录');
            $('.close_btn').click(function(){
                $('.loginBox').css('display','none');
                $('.zhezao').css('display','none');
            })
        })
        $('.sub_login input').click(function(){
            login_in();

        })

        //注册
        $('.reg_btn').click(function(){
            $('.zhezao').css('display','block');
            $('.loginBox').css('display','block').css('top','150px');
            tip_message('请注册');
            $('.close_btn').click(function(){
                $('.loginBox').css('display','none');
                $('.zhezao').css('display','none');
            })
        })
        $('.sub_reg input').click(function(){
            reg();
        })
        //搜索
        $('.search').focus(function(){
            $(this).css('width','260px');
            $(this).next().css('background','#969696');
            $(this).next().css('color','#fff');
        })
        $('.search').blur(function(){
            $(this).css('width','160px').css('background','#eee');
            $(this).next().css('background','#eee');
            $(this).next().css('color','#969696');
        })
        //个人中心
        $('.person_box').hover(function(){
            $(this).show();
            $(this).css('background','#EEEEEE')
        },function(){
            $(this).hide();
            $('.login_out_btn').css('background','#fff')
        })
        $('.login_out_btn').hover(function(){
            $('.person_box').show();
            $(this).css('background','#EEEEEE')
        },function(){
            $('.person_box').hide();
            $(this).css('background','#fff');
        })

    })



})