<?php 
    session_start();
    // if(!$_SESSION['AUID']){
    //     echo "<script>
    //     alert('접근 권한이 없습니다.');
    //     history.back();
    //     </script>";
    // };
    include $_SERVER['DOCUMENT_ROOT']."/inc/db.php";
    include $_SERVER['DOCUMENT_ROOT']."/inc/head.php";
    

// abcmall/product list.php 참조
// ========== 검색
//제목,글쓴이,내용

// $search_where = " like '".$scate."%'";


    /* ================== 페이지네이션 =================== */

$page = $_GET['page'] ?? 1; //넘어오는거 없으면 1페이지

$pagesql = "SELECT COUNT(*) as cnt FROM board"; //보드의 모든 것을 cnt 로 받고 개수를 구함
$page_result = $conn -> query($pagesql);
$page_row = $page_result ->fetch_assoc();
$row_num = $page_row['cnt'];//전체 게시물 수

$list = 5; //한페이지에(페이지 당) 출력할 게시물 수
$block_ct = 5; //출력할 페이지네이션 수(버튼5개)
$block_num = ceil($page/$block_ct); //6부터 시작한다면 2블록 - 6/5 -> 1.2 -> 2 2번째 블록카운트부터 시작해야한다
// 6/5 1.2 2 block_num 2

$block_start = (($block_num -1 )*$block_ct) + 1; //페이지 1 -> start 1
$block_end = $block_start + $block_ct - 1; //시작번호 1일때 끝번호가 5가 될수 있도록.

$total_page = ceil($row_num/$list); //몇페이지가 나와야 되냐
// 총 게시물이 32개 > 7페이지가 나와야함 -> total page:7
if($block_end > $total_page) $block_end = $total_page; //10번까지 안만들고 7번까지만 만든다

$total_block = ceil($total_page/$block_ct); //총 32개, total block : 2개 (1~5, 6~7 /// 한세트, 두세트. 이 블록의 개수)

//page가 1이에요 -> 0번째부터 10까지 추출해야해요 / page 2> 10번재부터 10개
$start_num = ($page - 1) * $list;



    /* ================== 값 조회 =================== */

    $sql = "SELECT * from board order by idx desc limit $start_num, $list";
    $result = $mysqli -> query($sql) or die("Query Error! => ".$mysqli->error);;
    while($rs = $result->fetch_object()){
        $rsc[] = $rs;
    }

    
?>

<link rel="stylesheet" href="../css/board_list.css" />

<?php     
    include $_SERVER['DOCUMENT_ROOT']."/inc/common.php"; 
?>

        <!-- 본문시작 -->

        <h2 class="page-title">공지사항</h2>

        <div class="borad_top">
          <div class="row pd-54">
            <a href="#" class="y-btn big-btn btn-navy">글쓰기</a>
          </div>
          <div class="borad_search_form">
            <form class="row pd-54">
              <select
                class="form-select"
                name="search_board"
                name="search_board"
              >
                <option value="title">제목</option>
                <option value="name">글쓴이</option>
                <option value="content">내용</option>
              </select>
              <input
                class="form-control"
                type="search"
                name="search"
                required
              />
            </form>
          </div>
        </div>

        <table>
          <thead>
            <tr>
              <th>번호</th>
              <th>제목</th>
              <th>작성자</th>
              <th>등록일</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
                if(isset($rsc)){
                    foreach($rsc as $r){ //조회된 글 출력
            ?>
            <tr>
              <td><?= $r->idx;?></td>
              <td><?= $r->title;?></td>
              <td><?= $r->name;?></td>
              <td><?= $r->date;?></td>
              <th>
                <a class="edit" type="button">수정</a>
                <a class="del" type="button">삭제</a>
              </th>
            </tr>
            <?php 
                } 
              }  ?>
              
            <!-- <tr>
              <td>4</td>
              <td>3월 한정! 신규강의 런칭 특가 이벤트 안내</td>
              <td>관리자</td>
              <td>2023.3.10</td>
              <th>
                <a class="edit" type="button">수정</a>
                <a class="del" type="button">삭제</a>
              </th>
            </tr>
            <tr>
              <td>3</td>
              <td>K - 디지털 트레이닝 안내 사항</td>
              <td>관리자</td>
              <td>2023.2.28</td>
              <th>
                <a class="edit" type="button">수정</a>
                <a class="del" type="button">삭제</a>
              </th>
            </tr>
            <tr>
              <td>2</td>
              <td>국비지원 내일배움 아카데미 오픈</td>
              <td>관리자</td>
              <td>2023.2.10</td>
              <th>
                <a class="edit" type="button">수정</a>
                <a class="del" type="button">삭제</a>
              </th>
            </tr>
            <tr>
              <td>1</td>
              <td>2023년 2월 시스템 점검 안내</td>
              <td>관리자</td>
              <td>2023.2.01</td>
              <th>
                <a class="edit" type="button">수정</a>
                <a class="del" type="button">삭제</a>
              </th>
            </tr> -->
          </tbody>
        </table>

        <div class="pagenation">
          <ul>
            <li><i class="fa-solid fa-chevron-left"></i></li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li><i class="fa-solid fa-chevron-right"></i></li>
          </ul>
        </div>

        <!-- 본문끝 -->

<?php 
    include $_SERVER['DOCUMENT_ROOT']."/inc/foot.php";
 ?>