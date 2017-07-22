$(function(){
    $('.option_list li').click(function(val,index){
        console.log($(this).index());
        $('.option_list li').removeClass('active');
        $('.right .base_set').removeClass('active1');
        $(this).addClass('active');
        $('.right .base_set').eq($(this).index()).addClass('active1');
    })
})