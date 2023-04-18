<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | FASTCODE</title>
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <dialog>
    <div class="main-popup">
      <h3 class="dialog-title">LMS사이트 관리자 페이지</h3>
      <div class="popup-content">
        <h4 class="point_color">박민지</h4>
        <p class="point_color"><strong>구현파트</strong> : 로그인페이지 / 대시보드페이지 / common 파일</p>
        <p class="point_color"><strong>구현언어</strong> : HTML, CSS, JQUERY 사용 (Front)</p>
        <p class="point_color"><strong>주요기능</strong> : 사이드바 메뉴의 스크롤바js, 일정 캘린더 js 외</p>
        <p>- ID : guset / PW : guestonly 로 접속가능합니다.</p>
      </div>
      <hr>
      <div class="popup-content">
        <p>본 사이트는 팀 프로젝트 포트폴리오 사이트입니다.</p>
        <p>제작기간 : 2023.02.13 ~ 2023.03.15</p>
        <p>특징 : html, css, jquery, 라이브러리 활용 외 데이터베이스를 연동</p>
        <p>팀원 : 손*진, 이*희, 유*은, 오*경, 장*홍, <span class="point_color">박민지</span></p>
        <p>- 2인 1조로 기획, 디자인, 구현을 분담하여 진행하였습니다.</p>
        <p>- 과정 말기 작품으로 프론트와 백엔드를 연동했습니다.</p>
        <p>- <a href="http://mzeeyy.dothome.co.kr/fastcode/user/index.php" class="point_color">사용자페이지</a> 바로가기</p>
      </div>
      <hr>
      <form>
        <input type="checkbox" id="daycheck" />
        <label for="daycheck">24시간 보지 않기</label>
      </form>
    </div>
    <div class="popup_close">
      <i class="fa-solid fa-x ft24"></i>
    </div>
  </dialog>
  <main>
    <h1 id="main-logo"><a href="/"><img src="img/fastcode_logo_big.png" alt="Fastcode"><span>fastcode</span></a></h1>
    <form action="login_ok.php" method="post">
      <h2 class="content-title">admin</h2>
      <p class="field">
        <label for="username">username</label>
        <i class="fa-solid fa-user"></i>
        <input type="text" id="username" name="userid" placeholder="username">
      </p>
      <p class="field">
        <label for="password">password</label>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="password" name="passwd" placeholder="password">
      </p>
      <input type="submit" value="LOGIN" class="y-btn login-btn btn-navy">
    </form>
  </main>
  <!-- <div class="login-bg"> -->
    <img src="img/login_wave_bg.png" alt="background" class="bg-bottom">
    <div><i class="fa-solid fa-sailboat"></i></div>
    <img src="img/login_wave_top.png" alt="background" class="bg-top">
  <!-- </div> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    //팝업
    let popup = $('dialog'),
    popupClose = $('.popup_close > i'),
    dayCheck = popup.find('#daycheck');

    //쿠키 설정 24시간
    function setCookie(name,value,day){
      let date = new Date();
      date.setDate(date.getDate()+day);
      document.cookie = `${name}=${value};expires=${date.toGMTString()}`;
    }
    //쿠키 가져오기
      function getCookie(name){
        let cookieArr = document.cookie.split(';');
        console.log(cookieArr);
        let visited = false;
        for(let cookie of cookieArr){
          if(cookie.search(name) > -1){
            visited = true;
            break;
          }
        }
        if(visited == false){
          popup.attr('open','');
        } else {
          popup.removeAttr('open');
        }
    }
    //X버튼 클릭하면 닫기
    getCookie('ss');
    popupClose.click(()=>{
      if(dayCheck.is(":checked")){
        setCookie('ss','home',1);
      }else{
        setCookie('ss','home',-1);
      }
      popup.removeAttr('open');console.log(document.cookie);
    });
  </script>
</body>
</html>
