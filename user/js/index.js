$('.no_link').click(function(e) {
	e.preventDefault();		
});
$('.cate_search').click(function(e) {
	e.preventDefault();	

    let searchCate = $(this).attr('data-cate');
    console.log(searchCate);

    $('#search_cate').val(searchCate);
    $('#cate_search').submit();

});

$("#tabs").tabs();


function bannerPlugin({ swiper, extendParams, on }) {
    on('slideChange', () => {
        if (!swiper.params.debugger) return;
        $('.swiper-slide').eq(swiper.previousIndex).find('img').removeClass('active');
        $('.swiper-slide').eq(swiper.activeIndex).find('img').addClass('active');
        $('.swiper-slide').eq(swiper.previousIndex).find('.banner_text').removeClass('active');
        $('.swiper-slide').eq(swiper.activeIndex).find('.banner_text').addClass('active');
      });
}

var swiper = new Swiper(".bannerSwiper", {
    modules: [bannerPlugin],
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".banner-next",
        prevEl: ".banner-prev",
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    debugger: true,
});



var lecture_swiper = new Swiper(".lectureSwiper", {
    slidesPerView: 4,
    spaceBetween: 0,
    navigation: {
        nextEl: ".lecture-next",
        prevEl: ".lecture-prev",
    },
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
});


    // //팝업
    // let popup = $('dialog'),
    // popupClose = $('.popup_close > i'),
    // dayCheck = popup.find('#daycheck');

    // //쿠키 설정 24시간
    // function setCookie(name,value,day){
    //   let date = new Date();
    //   date.setDate(date.getDate()+day);
    //   document.cookie = `${name}=${value};expires=${date.toGMTString()}`;
    // }
    // //쿠키 가져오기
    //   function getCookie(name){
    //     let cookieArr = document.cookie.split(';');
    //     console.log(cookieArr);
    //     let visited = false;
    //     for(let cookie of cookieArr){
    //       if(cookie.search(name) > -1){
    //         visited = true;
    //         break;
    //       }
    //     }
    //     if(visited == false){
    //       popup.attr('open','');
    //     } else {
    //       popup.removeAttr('open');
    //     }
    // }
    // //X버튼 클릭하면 닫기
    // getCookie('ss');
    // popupClose.click(()=>{
    //   if(dayCheck.is(":checked")){
    //     setCookie('ss','home',1);
    //   }else{
    //     setCookie('ss','home',-1);
    //   }
    //   popup.removeAttr('open');console.log(document.cookie);
    // });