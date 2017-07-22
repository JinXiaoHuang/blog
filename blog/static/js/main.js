$(document).ready(function(){
	//账户效果
	$('.uer-set a:last-child').click(function(){
		$('.hiddle').toggle();
		$(this).toggleClass('bg');
	})
	console.log($('.nav li a'))
	$('.nav li a').click(function(){
		console.log($(this).index())
	})
	//欢迎
	$('.welcome').click(function(){
		$(this).css('display','none');
	})
	//侧边栏
	console.log($('.sidebar-nav h2'))
	$('.sidebar-nav h2').click(function(){
		console.log($(this))
		$(this).next().stop().slideToggle();
		console.log($('this').next('section'))
	});
	//导航效果
	
	$('.nav li').click(function(e){
		e.preventDefault();
		//$(this).children().find('img').attr('src',`img/0.png)`);		
       $('.sidebar-nav').removeClass('xue')
       $('.sidebar-nav').eq($(this).index()).addClass('xue')      
     
       
	})
    $(document).ready(function(){
        $('h4').each(function(index,value){
            $(this).click(function(){
                $(this).next().slideToggle(200);
            })
        })
    })

})
