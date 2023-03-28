<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/db.php";
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>회원가입</title>
        <link rel="stylesheet" href="../css/common.css" />
        <link rel="stylesheet" href="../css/signup.css" />
    </head>
    <body>
        <div class="container d-flex justify-content-between">
            <section class="deco">
                <svg xmlns="http://www.w3.org/2000/svg" width="536" height="108" viewBox="0 0 536 108" fill="none">
                    <path d="M101.099 41.6369H72.4921L68.1475 53.2265H94.6659L90.1481 65.2768H63.6296L53.6536 91.8864H37.7007L61.0561 29.5884H105.616L101.099 41.6369Z" fill="black" />
                    <path d="M153.009 91.8864H136.448L135.59 79.2927H112.578L104.773 91.8864H88.6121L128.764 29.5884H147.223L153.009 91.8864ZM134.885 67.8703L133.39 45.5515L119.583 67.8703H134.885Z" fill="black" />
                    <path
                        d="M216.258 72.3047C214.565 78.4417 210.594 83.4275 204.344 87.2628C198.093 91.0982 190.514 93.015 181.605 93.015C176.454 93.015 172.09 92.5612 168.511 91.6555C164.933 90.7489 161.666 89.5985 158.71 88.2034L162.83 73.267H164.584C167.165 75.9171 170.314 77.9532 174.029 79.3753C177.743 80.7983 181.493 81.5098 185.279 81.5098C186.254 81.5098 187.557 81.4254 189.191 81.2582C190.824 81.0918 192.195 80.8123 193.305 80.4212C194.668 79.9196 195.852 79.2917 196.852 78.5384C197.853 77.786 198.558 76.6704 198.965 75.1916C199.342 73.8252 199.089 72.6461 198.207 71.6559C197.324 70.6657 195.843 69.9054 193.762 69.3751C191.578 68.8177 189.251 68.2952 186.782 67.8066C184.313 67.3181 182.042 66.698 179.967 65.9438C175.201 64.243 172.073 61.9343 170.579 59.0204C169.087 56.1056 168.936 52.4862 170.129 48.1623C171.728 42.3614 175.63 37.6265 181.835 33.9575C188.039 30.2902 195.22 28.457 203.377 28.457C207.47 28.457 211.404 28.8533 215.18 29.6493C218.955 30.4435 222.139 31.4415 224.732 32.6407L220.774 46.9919H219.062C217.11 44.9836 214.504 43.3037 211.244 41.9504C207.984 40.597 204.46 39.9212 200.674 39.9212C199.338 39.9212 197.983 40.0118 196.612 40.1929C195.239 40.3749 193.871 40.7172 192.507 41.2188C191.306 41.6368 190.198 42.2717 189.184 43.1226C188.17 43.9743 187.513 44.9427 187.213 46.0313C186.758 47.6772 187.038 48.9383 188.047 49.8178C189.058 50.6966 191.203 51.4986 194.483 52.2232C196.635 52.6978 198.7 53.1585 200.68 53.6044C202.658 54.0512 204.752 54.6643 206.959 55.4446C211.288 57.0078 214.216 59.1336 215.743 61.8255C217.271 64.5165 217.442 68.0104 216.258 72.3047Z"
                        fill="black"
                    />
                    <path d="M285.221 41.6368H265.802L251.943 91.8854H235.907L249.766 41.6368H230.346L233.669 29.5874H288.544L285.221 41.6368Z" fill="black" />
                    <path
                        d="M310.585 93.0152C305.953 93.0152 301.871 92.3411 298.34 90.993C294.808 89.6457 292.019 87.6375 289.971 84.97C287.924 82.3025 286.702 78.9732 286.306 74.9846C285.91 70.9968 286.466 66.389 287.976 61.1629C289.382 56.2956 291.397 51.8803 294.02 47.9195C296.643 43.9588 299.773 40.5615 303.409 37.7285C306.903 35.0045 310.866 32.9013 315.299 31.4147C319.732 29.9299 324.321 29.187 329.064 29.187C331.686 29.187 334.01 29.3316 336.034 29.6198C338.057 29.909 339.893 30.2878 341.544 30.7555C343.262 31.278 344.788 31.8623 346.123 32.5085C347.456 33.1547 348.616 33.753 349.601 34.3034L345.298 49.198H343.456C342.864 48.5422 342.106 47.761 341.182 46.8579C340.256 45.9557 339.167 45.0648 337.913 44.1896C336.632 43.3143 335.184 42.575 333.573 41.9732C331.96 41.3723 330.136 41.0701 328.1 41.0701C325.84 41.0701 323.589 41.4211 321.352 42.1204C319.112 42.8214 316.893 43.9806 314.696 45.6004C312.597 47.1645 310.666 49.238 308.903 51.8176C307.139 54.3971 305.726 57.527 304.662 61.2056C303.552 65.0488 303.175 68.2605 303.532 70.8401C303.888 73.4205 304.69 75.4522 305.936 76.9336C307.201 78.4428 308.788 79.521 310.694 80.1654C312.6 80.8107 314.572 81.1321 316.609 81.1321C318.562 81.1321 320.577 80.8456 322.655 80.2708C324.732 79.6951 326.723 78.9157 328.626 77.9307C330.222 77.1374 331.737 76.2883 333.169 75.386C334.603 74.4821 335.791 73.7018 336.734 73.0451H338.408L334.164 87.7333C332.403 88.4213 330.723 89.0675 329.126 89.6719C327.528 90.2771 325.884 90.7997 324.195 91.2394C321.991 91.8177 319.953 92.2566 318.079 92.5606C316.209 92.8636 313.709 93.0152 310.585 93.0152Z"
                        fill="black"
                    />
                    <path
                        d="M411.524 61.0828C408.692 70.7861 403.635 78.4933 396.352 84.2036C389.069 89.914 380.471 92.7687 370.559 92.7687C360.673 92.7687 353.756 89.914 349.805 84.2036C345.855 78.4933 345.295 70.7869 348.126 61.0828C350.982 51.2976 356.047 43.5625 363.322 37.8801C370.597 32.1959 379.177 29.356 389.062 29.356C398.918 29.356 405.841 32.1967 409.827 37.8801C413.813 43.5625 414.378 51.2976 411.524 61.0828ZM386.004 76.4964C388.086 74.6432 389.867 72.4555 391.346 69.9344C392.825 67.414 394.062 64.4496 395.056 61.0419C396.122 57.3903 396.601 54.283 396.496 51.72C396.39 49.1579 395.879 47.0861 394.964 45.5055C394.036 43.87 392.765 42.6847 391.148 41.9488C389.532 41.212 387.732 40.8454 385.75 40.8454C383.74 40.8454 381.744 41.1998 379.761 41.9079C377.778 42.6176 375.804 43.7898 373.84 45.4253C372.018 46.9511 370.282 49.0569 368.632 51.7418C366.981 54.4267 365.638 57.5409 364.604 61.0845C363.546 64.71 363.066 67.7964 363.162 70.3445C363.258 72.8945 363.759 74.9724 364.668 76.5791C365.575 78.1885 366.839 79.3738 368.462 80.1358C370.084 80.8995 371.913 81.281 373.951 81.281C375.988 81.281 378.043 80.8926 380.114 80.1158C382.187 79.3389 384.15 78.1319 386.004 76.4964Z"
                        fill="black"
                    />
                    <path
                        d="M473.661 61.0139C471.97 66.7826 469.206 71.9486 465.373 76.5094C461.538 81.071 457.358 84.5728 452.832 87.013C449.43 88.8436 445.916 90.1185 442.288 90.8396C438.66 91.5607 434.507 91.9213 429.829 91.9213H409.133L427.291 29.9829H448.579C453.362 29.9829 457.364 30.4062 460.585 31.2518C463.806 32.0983 466.372 33.2975 468.282 34.8494C471.564 37.4568 473.721 40.9707 474.749 45.3948C475.78 49.8197 475.417 55.024 473.661 61.0139ZM458.047 60.8903C459.242 56.8137 459.561 53.3267 459.005 50.4284C458.448 47.5319 456.886 45.2641 454.317 43.6278C453.002 42.824 451.579 42.2762 450.048 41.9853C448.517 41.6936 446.122 41.5481 442.864 41.5481H439.04L427.675 80.3169H431.499C435.099 80.3169 437.791 80.1436 439.575 79.7961C441.358 79.4495 443.186 78.819 445.057 77.9037C448.305 76.2394 450.98 74.0143 453.086 71.2275C455.189 68.4399 456.843 64.9938 458.047 60.8903Z"
                        fill="black"
                    />
                    <path d="M517.842 91.8934H473.434L491.592 29.9551H536L532.488 41.9357H503.832L500.698 52.6257H527.292L523.78 64.6054H497.186L492.698 79.9128H521.354L517.842 91.8934Z" fill="black" />
                    <path
                        d="M18.8481 102C18.9259 93.2077 20.3656 84.4684 22.3452 75.899C23.3359 71.6082 24.5714 67.3758 25.9342 63.186C26.6068 61.0872 27.3597 59.0154 28.103 56.9409C28.8949 54.8839 29.6699 52.8191 30.5342 50.79C31.3659 48.7469 32.3115 46.7526 33.2174 44.7409C34.1851 42.7579 35.1148 40.7566 36.1533 38.8085C38.1612 34.8782 40.3503 31.0385 42.6826 27.2885C43.881 25.4327 45.0378 23.5516 46.3087 21.7437L48.1805 19.0109L50.1328 16.3329C51.4186 14.5372 52.8283 12.8311 54.1822 11.0868C55.5538 9.35287 57.012 7.6895 58.4331 6L56.4022 8.61524C55.7288 9.4896 55.0218 10.337 54.3819 11.2348C53.0863 13.0193 51.7368 14.7636 50.5128 16.5959L48.6224 19.3052L46.8107 22.065C45.5804 23.8913 44.4651 25.788 43.3083 27.6578C42.7268 28.5905 42.2044 29.5589 41.6503 30.5082C41.1086 31.4644 40.5262 32.398 40.0145 33.3699L38.4378 36.2638C37.904 37.2243 37.4312 38.2154 36.9248 39.1899C35.904 41.1354 34.992 43.1324 34.0419 45.1119C33.1537 47.1184 32.2284 49.1092 31.4109 51.1453C27.9563 59.2148 25.229 67.5761 23.0514 76.0662C21.9661 80.3144 21.0629 84.6078 20.3408 88.9325C19.6126 93.2556 19.0505 97.6134 18.8481 102Z"
                        fill="#1C38F4"
                    />
                    <path d="M40.7003 20.1396C26.7553 41.0912 19.9096 61.2772 16.5583 75.7015C16.8712 75.86 17.1841 76.0185 17.5022 76.1674C20.8234 61.7692 27.6612 41.5127 41.6893 20.4984C41.3614 20.373 41.0326 20.2529 40.7003 20.1396Z" fill="#1C38F4" />
                    <path d="M36.1595 18.9639C22.6803 39.3502 15.9044 58.9788 12.5081 73.2385C12.8059 73.4528 13.1073 73.6644 13.413 73.8682C16.7758 59.5841 23.5676 39.7569 37.2448 19.1772C36.8851 19.0997 36.5237 19.0292 36.1595 18.9639Z" fill="#1C38F4" />
                    <path d="M31.1724 18.479C18.6909 37.6774 12.1174 56.1278 8.66455 69.9599C8.94294 70.2403 9.2284 70.5138 9.51827 70.7829C12.9402 56.8506 19.5614 38.0571 32.3638 18.5165C31.9687 18.4947 31.571 18.486 31.1724 18.479Z" fill="#1C38F4" />
                    <path d="M25.6374 18.8711C14.7475 36.137 8.58854 52.6819 5.10913 65.6719C5.35835 66.0368 5.61818 66.3938 5.88243 66.7474C9.3477 53.5397 15.6234 36.4767 26.9639 18.6899C26.5185 18.7422 26.0766 18.8005 25.6374 18.8711Z" fill="#1C38F4" />
                    <path d="M19.3501 20.578C10.7899 34.8542 5.40774 48.5061 2.03174 59.9015C2.23147 60.3987 2.44358 60.8899 2.66805 61.3732C6.07941 49.5354 11.6808 35.1103 20.8702 20.0337C20.3567 20.2018 19.8503 20.3838 19.3501 20.578Z" fill="#1C38F4" />
                    <path d="M11.7038 24.8906C6.58144 34.2534 2.79714 43.2373 0 51.3652C0.0689341 52.1542 0.164381 52.9336 0.292528 53.7026C3.30442 44.5776 7.57922 34.2717 13.641 23.5103C12.9755 23.9457 12.3304 24.4073 11.7038 24.8906Z" fill="#1C38F4" />
                    <path d="M0.434814 43.0203C1.98672 39.1074 3.77017 35.0448 5.81079 30.8794C3.17185 34.43 1.30533 38.5596 0.434814 43.0203Z" fill="#1C38F4" />
                </svg>
                <p>빠르게 배우는 코딩</p>
                <p>쉽게 배우는 코딩</p>
                <p>재밌게 배우는 코딩</p>
            </section>
            <section class="signup">
                <div class="member_btn d-flex justify-content-evenly">
                    <a href="login.php" class="d-flex flex-column-reverse login_btn">
                        <h3 class="content-text-1">로그인</h3>
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </a>
                    <a href="signup.php" class="d-flex flex-column-reverse signup_btn">
                        <h3 class="content-text-1">회원가입</h3>
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                </div>
                <form action="signup_ok.php" method="post">
                    <h2 class="main-title">회원가입</h2>
                    <div class="input_info">
                        <label for="username" class="form-label">이름</label><i class="fa-solid fa-asterisk"></i>
                        <input type="text" class="form-control" name="username" id="username" placeholder="이름을 입력하세요" required />
                    </div>
                    <div class="input_info">
                        <label for="userid" class="form-label">아이디</label><i class="fa-solid fa-asterisk"></i>
                        <input type="text" class="form-control" name="userid" id="userid" placeholder="아이디를 입력하세요" required />
                    </div>
                    <div class="input_info">
                        <label for="passwd" class="form-label">비밀번호</label><i class="fa-solid fa-asterisk"></i>
                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="비밀번호를 입력하세요" required />
                    </div>
                    <div class="input_info passwd_check">
                        <label for="passwd_ok" class="form-label">비밀번호 확인</label><i class="fa-solid fa-asterisk"></i>
                        <input type="password" class="form-control" id="passwd_ok" placeholder="비밀번호를 입력하세요" required onchange="check_pw()"/>
                        <span id="check"></span>
                    </div>

                    <div class="input_info">
                        <h3>프로필 이미지</h3>
                        <label class="profile_img_btn" for="profile_img">파일 선택</label>
                        <input type="file" name="profile_img" id="profile_img" />
                    </div>

                    <div class="plus_info">
                        <h3>관심 카테고리</h3>
                        <?php
                            $query = "SELECT * from category where step=3";
                            $result = $mysqli -> query($query) or die("query error =>".$mysqli-->error);
                            while($rs = $result -> fetch_object()){
                                $cate3[]=$rs;
                            }
                        ?>
                        <div class="input_info cate_like">
                            <label for="cate1" class="form-label">관심 카테고리1</label>
                            <select name="cate1" id="cate1" class="form-select">
                                <option selected value="">관심있는 카테고리를 선택하세요</option>
                                <?php 
                                    foreach($cate3 as $c){
                                ?>
                                    <option value="<?php echo $c->code; ?>"><?php echo $c->name; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input_info cate_like">
                            <label for="cate2" class="form-label">관심 카테고리2</label>
                            <select name="cate2" id="cate2" class="form-select">
                                <option selected value="">관심있는 카테고리를 선택하세요</option>
                                <?php 
                                    foreach($cate3 as $c){
                                ?>
                                    <option value="<?php echo $c->code; ?>"><?php echo $c->name; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <label for="ability_range" class="form-label ability_range">나의 실력</label>
                        <input type="range" class="form-range" min="0" max="5" name="ability_range" id="ability_range" />
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="total-agree" />
                        <label for="total-agree" class="form-check-label">전체 약관 동의</label>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="use_agree" id="use_agree" value="1" required />
                        <div class="view_more d-flex justify-content-between"> 
                            <label for="use_agree" class="form-check-label">[필수] 패스트코드 이용 약관에 동의<i class="fa-solid fa-asterisk"></i></label><i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="personalinfo_agree" id="personalinfo_agree" value="1" required />
                        <div class="view_more d-flex justify-content-between">
                            <label for="personalinfo_agree" class="form-check-label">[필수] 개인정보 수집 및 이용에 동의<i class="fa-solid fa-asterisk"></i></label>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="marketing_agree" id="marketing_agree" value="1" />
                        <div class="view_more d-flex justify-content-between"><label for="marketing_agree" class="form-check-label">[선택] 마케팅 정보 수신 및 선택적 개인정보 제공</label><i class="fa-solid fa-angle-right"></i></div>
                    </div>

                    <button type="button" class="big-btn btn-red" id="signup">회원가입</button>
                </form>
            </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <script>
            function check_pw() {
                let pw = document.getElementById("passwd").value;
                let pw2 = document.getElementById("passwd_ok").value;
                let check = document.getElementById("check");

                if (pw != "" && pw2 != "") {
                    if (pw == pw2) {
                        check.innerHTML = "비밀번호가 일치합니다.";
                        check.style.color = "blue";
                    } else {
                        check.innerHTML = "비밀번호가 일치하지 않습니다.";
                        check.style.color = "red";
                    }
                }
            }

            $('#signup').click(function(){
                let username = $('#username').val();
                let userid = $('#userid').val();

                var data={
                    username : username,
                    userid : userid
                }
                $.ajax({
                    async:false,
                    type:'post',
                    url:'signup_check.php',
                    data:data,
                    dataType:'json',
                    success : function(result){
                        if(result.cnt>0){
                            alert('이미 가입된 회원입니다. 다시 확인해주세요.');
                        } else{
                            $('form').submit();
                        }
                    }
                })
            });
        </script>
    </body>
</html>
