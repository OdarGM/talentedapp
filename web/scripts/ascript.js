var deg = 360
function Down(){
    $('html, body').animate({
        scrollTop: $("#Jeffrey").offset().top
    }, 1000)
    $("#img").css({
        'transform':'rotate('+deg+'deg)'
    })
    deg+=360
}
$(document).ready(()=>{
    console.log("a")
    console.log($(window).width())
    if($(window).width() > 1024){
        function animate_img(){
            $("#img").css({
                'transform':'rotate('+deg+'deg)'
            })
            deg+=360
        }
        setInterval(animate_img, 5000)
    }
    if($(window).width() <= 1024){
        $("[name='John']").css({
            'float': 'none',
            'text-align':'center',
            'margin': '0 auto',
            'width':'90%',
            'font-size':'180%'
        })
        $("[name='Peter']").css({
            'float': 'none',
            'margin': '0 auto',
            'padding':'5%'
        })
        $("[name='Juan']").css({
            'font-size':'280%',
        })
    }
})
