<?php
  include $_SERVER['DOCUMENT_ROOT']."/fastcode/inc/db.php";
  include $_SERVER['DOCUMENT_ROOT']."/fastcode/inc/user/head.php";

  $userID = $_SESSION['USERID'];
?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/lecture_list.css" />

<?php
  include $_SERVER['DOCUMENT_ROOT']."/fastcode/inc/user/header.php";

  $searchKeyword = $_POST['search_keyword'];
  if(isset($searchKeyword)){
    $sql_and .= " AND A.name LIKE '%".$searchKeyword."%'";
  }else{
    $sql_and .="";
  }

  $sql_cate = "SELECT X.*
                 FROM (
                         SELECT A.*
                               , ROW_NUMBER() OVER(ORDER BY A.lecid DESC) AS rownum
                         FROM (
                                 SELECT L.lecid, L.name, L.thumbnail, L.recom
                                       , L.forbegin, L.forbasic, L.forinter, L.foradv
                                       , L.lec_date, L.lec_end_date, L.cate_big, C.big_name, L.cate_mid, C.mid_name, L.cate_sm, C.sm_name
                                       , TIMESTAMPDIFF(DAY, now(), L.lec_end_date) AS date_calc
                                       , CASE WHEN L.price = 0 THEN '무료'
                                              ELSE CONCAT(FORMAT(L.price, 0), '원')
                                         END AS price
                                       , L.price AS priceComp
                                 FROM lectures L
                                 INNER JOIN category_sh C ON L.cate_big = C.big_code AND L.cate_mid = C.mid_code AND L.cate_sm = C.sm_code
                                 WHERE L.sale_status != '판매대기'
                             ) A
                         WHERE 1=1
                         ".$sql_and."
                 ) X
                 WHERE X.rownum BETWEEN 1 AND 9";

  $result_cate = $mysqli -> query($sql_cate);

  while($rs_cate = $result_cate ->fetch_object()) {
    $lecture_list[] = $rs_cate;
  }
  
  $sql_minMaxPrice = "SELECT MIN(PRICE) AS min, MAX(PRICE) AS max FROM lectures";
  $result_minMaxPrice = $mysqli -> query($sql_minMaxPrice);

  while($rs_minMaxPrice = $result_minMaxPrice ->fetch_object()) {
    $minMaxPrice[] = $rs_minMaxPrice;
  }
  

  $sql_labels = "SELECT C.mid_name AS 'labels',
        CASE WHEN C.mid_name = '프론트엔드' THEN 1
        WHEN C.mid_name = '백엔드' THEN 2
        WHEN C.mid_name = 'UX/UI' THEN 3
        WHEN C.mid_name = '일반디자인' THEN 4
        WHEN C.mid_name = '기타' THEN 5
        ELSE 100
        END AS 'orderNumber'
        FROM lectures L
        JOIN category_sh C 
        ON L.cate_mid = C.mid_code
        GROUP by C.mid_name
        ORDER BY orderNumber ASC";
  $result_labels = $mysqli -> query($sql_labels);

  while($rs_labels = $result_labels ->fetch_object()) {
    $labels[] = $rs_labels->labels; 
  }
?>

  <main class="container-xxl d-flex">
    <section class="select_box">
      <h2 class="hidden">Select Box</h2>
      <div class="category_box">
        <form method="get" action="">
          <div class="box_title d-flex">
            <p>카테고리 분류</p><i class="fa-solid fa-chevron-up"></i>
          </div>
          <div class="check_wrap">
            <?php foreach($labels as $label) { ?>
            <label><input type="checkbox" name="category" value="<?php echo $label; ?>"><?php echo $label; ?></label>
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="level_box">     
        <div class="box_title d-flex">
          <p>수업 난이도</p><i class="fa-solid fa-chevron-up"></i>
        </div>
        <div class="check_wrap">
          <label><input type="checkbox" name="level" value="입문"> 입문</label>
          <label><input type="checkbox" name="level" value="초급"> 초급</label>
          <label><input type="checkbox" name="level" value="중급"> 중급</label>
          <label><input type="checkbox" name="level" value="상급"> 상급</label>
        </div>
      
      </div>
      <div class="period_box">
        <div class="box_title d-flex">
          <p>수강 기간</p><i class="fa-solid fa-chevron-up"></i>
        </div>
        <div class="check_wrap">
          <label><input type="checkbox" name="period" data-period="time" value="무제한"> 무제한</label>
          <label><input type="checkbox" name="period" data-period="time" value="30일"> 30일 이내</label>
          <label><input type="checkbox" name="period" data-period="time" value="1개월"> 1개월 이상</label>
        </div>
      </div>
      <div class="price_box">
        <div class="box_title d-flex">
          <p>가격</p><i class="fa-solid fa-chevron-up"></i>
        </div>
        <div class="check_wrap">
          <label><input type="checkbox" name="price" id="free" value="무료"> 무료</label>
          <div class="price_show d-flex" >
            <div id="slider-range"></div>
            <p>
              <label for="amount1">최소금액<input type="text" id="amount1" value="" readonly></label>
              <span class="price_space">~</span>
              <label for="amount2">최대금액<input type="text" id="amount2" value="" readonly></label>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="lecture_list">
        <h2 class="hidden">Lecture List</h2>
        <div class="recommend">
          <button class="course_recom" id="recom" name="recommond" value="추천강좌"><img src="../img/recommend1.png" alt="">추천강좌</button>
          <button class="course_recom" value="Javascript" name="soCategory"><img src="../img/javascript_icon1.png" alt="">Javascript</button>
          <button class="course_recom" value="HTML" name="soCategory"><img src="../img/html1.png" alt="">HTML</button>
          <button class="course_recom" value="Figma" name="soCategory"><img src="../img/figma_icon1.png" alt="">Figma</button>
          <button class="course_recom" value="Photoshop" name="soCategory"><img src="../img/photoshop1.png" alt="">Photoshop</button>
          <button class="course_recom" value="Python" name="soCategory"><img src="../img/python1.png" alt="">Python</button>
        </div>
        <div class="lecture_wrap">
            <!-- 강좌리스트 출력 -->
            <ul class="lecture_handle">
            <?php 
            if($lecture_list) {
                foreach($lecture_list as $list) { ?>
                <li class="lecture">
                  <a href="lecture_view.php?lecid=<?php echo $list->lecid;?>" >
                  <figure>
                    <img src="../..<?php echo $list->thumbnail; ?>" alt="">
                  </figure>
                  <div class="info_wrap">
                    <p class="title"><?php echo $list->name; ?></p>
                    <div class="lecture_info d-flex">
                      <p><?php echo $list->mid_name; ?></p>
                      <p><?php echo $list->price ?></p>
                    </div>
                  </div>
                 </a>
                </li>
            <?php } } else { ?>
                <p>검색결과가 없습니다.</p>
            <?php } ?>
          </ul>
        </div>
    </section>
  </main>
 <!-- Footer -->
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/fastcode/inc/user/footer.php";
  ?> 
   <script src="../js/common.js"></script>


  <script>
  let minMaxPrice = <?php echo json_encode($minMaxPrice); ?>;

  $(".box_title").click(function () {
    let icon = $(this).find(".fa-chevron-up");

    $(this).next(".check_wrap").stop().slideToggle(300);
    $(this).toggleClass("on").siblings().removeClass("on");
    icon.toggleClass("rotate");
    
  }); 
  
  
  
  function number_format(num){
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g,',');
  }
  
  
  /********** 체크 *********/
  let jsonArray = <?php echo json_encode($lecture_list);?>;
  let levelsArray = new Array();
  
  //수간기간 제한
  let i = 0;
  while(i < levelsArray.length) {
    levelsArray[i] = jsonArray[i].labels;
    i++;
  }
  
  let searchKeyword = '';
  let recomCategory = '';
  let checkedCate = [];
  let checkedLevels = []; 
  let checkedPrice = []; 
  let checkedPeriod = []; 
  let rangePrice = [];

  $(document).ready(function(e) {
    $( "#slider-range" ).slider({
      range: true,
      min: Number(minMaxPrice[0].min),
      max: Number(minMaxPrice[0].max),
      step: 1000,
      values: [Number(minMaxPrice[0].min), Number(minMaxPrice[0].max)],
      slide: function( event, ui ) {
        $( "#amount1" ).val( ui.values[ 0 ] + "원");
        $( "#amount2" ).val( ui.values[ 1 ] + "원");
      },
      stop: function(event, ui){
         getLecture();
      }
    });
    $( "#amount1" ).val( $( "#slider-range" ).slider( "values", 0 ) + "원");
    $( "#amount2" ).val( $( "#slider-range" ).slider( "values", 1 ) + "원");


    // 1단계 - 이벤트 생성
    //1. 카테고리 click 이벤트
    $('.course_recom').click(function() {

      $('input[type="checkbox"]').each(function() {
        $(this).prop('checked', false);

      });
      
      // 2단계 - 데이터 조작
      if(recomCategory == $(this).val()){
        $('.active').removeClass('active');
        recomCategory = '';
      } else{
        $('.active').removeClass('active');
        recomCategory = $(this).val();
        $(this).addClass('active');
      }
      checkedCate = [];
      checkedLevels = [];
      checkedPrice = [];
      checkedPeriod = [];

      // 3단계 - ajax 호출
      getLecture();
        
    });

    //2. 왼쪽 filter changed 이벤트
    $('input[type="checkbox"]').change(function() {
      
      $('.active').removeClass('active');
      recomCategory = '';

      // 2단계 - 데이터 조작
      checkedCate = [];
      checkedLevels = [];
      checkedPrice = [];
      checkedPeriod = [];

      let inputCate = $('input[name="category"]');
      inputCate.each(function() {
        if($(this).is(':checked') == true){
          checkedCate.push($(this).val());
        }
      });
      
      let inputLevel = $('input[name="level"]');
      inputLevel.each(function() {
        if($(this).is(':checked') == true){
          checkedLevels.push($(this).val());
        }
      });

      //무제한, 제한
      let unlimitPeriod = $('input[name="period"]');
      unlimitPeriod.each(function() {
        if($(this).is(':checked') == true){
          checkedPeriod.push($(this).val());
        }
      });
      
      //가격 로직
      //무료
      let inputPrice = $('input[name="price"]');
      inputPrice.each(function() {
        if($(this).is(':checked') == true){
          checkedPrice.push($(this).val());
          $( "#slider-range" ).slider('disable');
        } else {
          $( "#slider-range" ).slider('enable');
        }
      });
      
      // 3단계 - ajax 호출
      getLecture();
    });
    let footerScroll = $('footer').outerHeight(); // footer 크기
    let windowHeight = window.innerHeight;        // 현재 내 화면 크기
    let fullHeight = document.body.scrollHeight;  // 문서 전체 크기
    let myScrollLocation = $(window).scrollTop();   //현재 스크롤 위치
    let eventScroll = (fullHeight - footerScroll) - windowHeight - 10;
    let listCount = $('.lecture').length;
    let lectureCount = listCount;
    let scrollIndex = 2;

    $(window).scroll(function() {
      myScrollLocation = $(window).scrollTop();
      
      if(myScrollLocation > eventScroll) {
        lectureCount = 6 * scrollIndex + 3;
        scrollIndex++;
        eventScroll += (fullHeight - footerScroll) - windowHeight - 10;
 
        getLecture();
      }
    });
 ['php', 'html', 'css']
    // 3단계 - ajax 호출
    //강좌 조회
    function getLecture() {
      rangePrice = [];
      if(checkedPrice.length == 0){
        rangePrice.push($( "#slider-range" ).slider( "values", 0 ));
        rangePrice.push($( "#slider-range" ).slider( "values", 1 ));
      }

      let data = {
        recomCategory: recomCategory,
        checkedCate: checkedCate,
        checkedLevels: checkedLevels,
        checkedPeriod: checkedPeriod,
        checkedPrice: checkedPrice,
        rangePrice: rangePrice,
        lectureCount : lectureCount,
        searchKeyword: searchKeyword
      };
      $.ajax({

        url:'search_lecture.php',
        type: 'post',
        dataType: 'html',
        data: data,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        error: function(){
          alert('실패');
        },
        success: function(response){
          // console.log(response);
          $('.lecture_handle').html('');
          let jsonData = JSON.parse(response);

          let data_aa = jsonData;
          let lectureHTML = '';

          
            $.each(data_aa, function(index, aa) {
              lectureHTML += `
                <li class="lecture">
                  <a href="lecture_view.php?lecid=${aa.lecid}" >
                    <figure>
                      <img src="../..${aa.thumbnail}" alt="">
                    </figure>
                    <div class="info_wrap">
                      <p class="title">${aa.name}</p>
                      <div class="lecture_info d-flex">
                        <p>${aa.mid_name}</p>
                        <p>${aa.price}</p>
                      </div>
                    </div>
                  </a>
                </li>`;
            });
          if(data_aa == '') {  
            lectureHTML += "<li class='lecture_empty'><p><i class='fa-regular fa-face-sad-tear'></i> 검색 결과가 없습니다.</p></li>";
          }

          if(data_aa.length < 7) {
            $('html, body').animate({scrollTop: 0 , behavior : 'smooth'}, 500);
          }

          $('.lecture_handle').html(lectureHTML);
        }

      });
    }

  });
  </script>
<?php
  include $_SERVER["DOCUMENT_ROOT"]."/fastcode/inc/user/tail.php";
?>
