<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/user/head.php";
?>

        <link rel="stylesheet" href="../css/common.css" />
        <link rel="stylesheet" href="../css/signup.css" />
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/user/header.php";
?>
        <div class="inner d-flex">
            <section class="deco_container">
                <div class="deco sticky">
                    <svg width="536" height="108" viewBox="0 0 536 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="f" d="M101.099 41.6364H72.4926L68.148 53.226H94.6664L90.1485 65.2763H63.6301L53.6541 91.8859H37.7012L61.0566 29.5879H105.616L101.099 41.6364Z" fill="black" class="svg-name"></path>
                        <path id="a" d="M153.01 91.8859H136.449L135.591 79.2922H112.579L104.774 91.8859H88.6133L128.766 29.5879H147.224L153.01 91.8859ZM134.886 67.8698L133.391 45.551L119.584 67.8698H134.886Z" fill="black" class="svg-name"></path>
                        <path id="s" d="M216.259 72.3047C214.566 78.4417 210.594 83.4275 204.344 87.2628C198.094 91.0982 190.514 93.015 181.606 93.015C176.454 93.015 172.09 92.5612 168.512 91.6555C164.934 90.7489 161.667 89.5985 158.711 88.2034L162.831 73.267H164.584C167.166 75.9171 170.315 77.9532 174.029 79.3753C177.744 80.7983 181.494 81.5098 185.28 81.5098C186.255 81.5098 187.558 81.4254 189.191 81.2582C190.825 81.0918 192.196 80.8123 193.306 80.4212C194.669 79.9196 195.852 79.2917 196.853 78.5384C197.854 77.786 198.558 76.6704 198.966 75.1916C199.343 73.8252 199.09 72.6461 198.208 71.6559C197.325 70.6657 195.843 69.9054 193.763 69.3751C191.578 68.8177 189.251 68.2952 186.783 67.8066C184.314 67.3181 182.042 66.698 179.967 65.9438C175.202 64.243 172.074 61.9343 170.58 59.0204C169.087 56.1056 168.937 52.4862 170.129 48.1623C171.729 42.3614 175.631 37.6265 181.836 33.9575C188.04 30.2902 195.22 28.457 203.378 28.457C207.47 28.457 211.405 28.8533 215.18 29.6493C218.956 30.4435 222.14 31.4415 224.733 32.6407L220.775 46.9919H219.063C217.111 44.9836 214.505 43.3037 211.245 41.9504C207.985 40.597 204.461 39.9212 200.675 39.9212C199.339 39.9212 197.984 40.0118 196.612 40.1929C195.24 40.3749 193.872 40.7172 192.508 41.2188C191.307 41.6368 190.199 42.2717 189.185 43.1226C188.171 43.9743 187.514 44.9427 187.213 46.0313C186.759 47.6772 187.038 48.9383 188.048 49.8178C189.059 50.6966 191.204 51.4986 194.484 52.2232C196.636 52.6978 198.701 53.1585 200.681 53.6044C202.659 54.0512 204.753 54.6643 206.96 55.4446C211.289 57.0078 214.217 59.1336 215.744 61.8255C217.271 64.5165 217.443 68.0104 216.259 72.3047Z" fill="black" class="svg-name"></path>
                        <path id="t" d="M285.221 41.6373H265.802L251.942 91.8859H235.906L249.766 41.6373H230.346L233.669 29.5879H288.544L285.221 41.6373Z" fill="black" class="svg-name"></path>
                        <path id="c" d="M310.584 93.0156C305.952 93.0156 301.87 92.3416 298.339 90.9935C294.808 89.6462 292.019 87.638 289.971 84.9705C287.923 82.303 286.702 78.9737 286.305 74.9851C285.909 70.9973 286.465 66.3895 287.975 61.1634C289.382 56.2961 291.397 51.8808 294.02 47.92C296.643 43.9593 299.772 40.562 303.409 37.729C306.902 35.0049 310.865 32.9018 315.299 31.4152C319.732 29.9304 324.321 29.1875 329.064 29.1875C331.686 29.1875 334.009 29.3321 336.033 29.6203C338.056 29.9095 339.893 30.2883 341.543 30.7559C343.262 31.2785 344.788 31.8628 346.122 32.509C347.456 33.1552 348.615 33.7535 349.601 34.3039L345.298 49.1985H343.456C342.864 48.5427 342.106 47.7615 341.181 46.8584C340.256 45.9562 339.167 45.0653 337.913 44.1901C336.631 43.3148 335.184 42.5755 333.573 41.9737C331.96 41.3728 330.136 41.0706 328.1 41.0706C325.84 41.0706 323.589 41.4215 321.351 42.1209C319.112 42.8219 316.892 43.981 314.695 45.6009C312.596 47.165 310.665 49.2385 308.902 51.8181C307.138 54.3976 305.725 57.5275 304.662 61.2061C303.552 65.0492 303.175 68.261 303.532 70.8406C303.888 73.421 304.689 75.4527 305.935 76.9341C307.201 78.4433 308.787 79.5214 310.694 80.1659C312.6 80.8112 314.572 81.1326 316.609 81.1326C318.562 81.1326 320.577 80.846 322.655 80.2713C324.731 79.6956 326.723 78.9162 328.625 77.9312C330.221 77.1379 331.736 76.2888 333.169 75.3865C334.602 74.4826 335.79 73.7023 336.733 73.0456H338.408L334.164 87.7338C332.403 88.4218 330.723 89.068 329.126 89.6724C327.528 90.2776 325.884 90.8001 324.194 91.2399C321.99 91.8182 319.952 92.2571 318.078 92.5611C316.208 92.8641 313.708 93.0156 310.584 93.0156Z" fill="black" class="svg-name"></path>
                        <path id="o" d="M411.524 61.0843C408.692 70.7875 403.635 78.4948 396.352 84.2051C389.069 89.9154 380.472 92.7702 370.559 92.7702C360.673 92.7702 353.756 89.9154 349.806 84.2051C345.855 78.4948 345.295 70.7884 348.127 61.0843C350.982 51.2991 356.047 43.564 363.322 37.8815C370.597 32.1973 379.177 29.3574 389.062 29.3574C398.919 29.3574 405.841 32.1982 409.827 37.8815C413.813 43.564 414.378 51.2991 411.524 61.0843ZM386.004 76.4979C388.086 74.6446 389.867 72.457 391.346 69.9358C392.825 67.4155 394.062 64.451 395.057 61.0433C396.122 57.3917 396.601 54.2845 396.496 51.7215C396.39 49.1594 395.879 47.0876 394.964 45.5069C394.037 43.8714 392.765 42.6862 391.149 41.9503C389.532 41.2135 387.733 40.8469 385.75 40.8469C383.74 40.8469 381.744 41.2013 379.761 41.9093C377.778 42.6191 375.804 43.7913 373.841 45.4268C372.018 46.9526 370.282 49.0583 368.632 51.7432C366.981 54.4282 365.638 57.5424 364.604 61.086C363.547 64.7114 363.066 67.7978 363.162 70.346C363.258 72.8959 363.76 74.9738 364.668 76.5806C365.575 78.19 366.84 79.3752 368.462 80.1372C370.084 80.901 371.913 81.2824 373.951 81.2824C375.988 81.2824 378.043 80.894 380.115 80.1172C382.187 79.3404 384.15 78.1334 386.004 76.4979Z" fill="black" class="svg-name"></path>
                        <path id="d" d="M473.66 61.0154C471.97 66.7841 469.206 71.9501 465.372 76.5109C461.538 81.0725 457.358 84.5743 452.832 87.0145C449.43 88.8451 445.915 90.12 442.287 90.8411C438.66 91.5622 434.507 91.9227 429.829 91.9227H409.133L427.291 29.9844H448.579C453.362 29.9844 457.364 30.4076 460.585 31.2532C463.806 32.0997 466.372 33.2989 468.282 34.8508C471.564 37.4582 473.721 40.9722 474.749 45.3962C475.78 49.8212 475.416 55.0255 473.66 61.0154ZM458.047 60.8917C459.242 56.8152 459.561 53.3282 459.005 50.4299C458.448 47.5334 456.886 45.2656 454.316 43.6292C453.001 42.8254 451.579 42.2776 450.048 41.9868C448.517 41.695 446.122 41.5496 442.864 41.5496H439.04L427.674 80.3183H431.498C435.099 80.3183 437.791 80.145 439.574 79.7975C441.358 79.4509 443.185 78.8204 445.057 77.9051C448.305 76.2409 450.98 74.0158 453.085 71.229C455.189 68.4413 456.843 64.9953 458.047 60.8917Z" fill="black" class="svg-name"></path>
                        <path id="e" d="M517.841 91.8934H473.434L491.592 29.9551H535.999L532.487 41.9357H503.831L500.697 52.6257H527.291L523.779 64.6054H497.185L492.697 79.9128H521.353L517.841 91.8934Z" fill="black" class="svg-name"></path>
                        <path id="l1" d="M18.8477 102C18.9254 93.2077 20.3651 84.4684 22.3447 75.899C23.3354 71.6082 24.571 67.3758 25.9337 63.186C26.6063 61.0872 27.3593 59.0154 28.1025 56.9409C28.8944 54.8839 29.6694 52.8191 30.5338 50.79C31.3654 48.7469 32.311 46.7526 33.2169 44.7409C34.1846 42.7579 35.1143 40.7566 36.1528 38.8085C38.1607 34.8782 40.3498 31.0385 42.6821 27.2885C43.8805 25.4327 45.0373 23.5516 46.3082 21.7437L48.18 19.0109L50.1323 16.3329C51.4182 14.5372 52.8278 12.8311 54.1817 11.0868C55.5533 9.35287 57.0115 7.6895 58.4326 6L56.4017 8.61524C55.7283 9.4896 55.0213 10.337 54.3814 11.2348C53.0858 13.0193 51.7363 14.7636 50.5123 16.5959L48.6219 19.3052L46.8102 22.065C45.58 23.8913 44.4646 25.788 43.3078 27.6578C42.7263 28.5905 42.204 29.5589 41.6498 30.5082C41.1081 31.4644 40.5257 32.398 40.014 33.3699L38.4373 36.2638C37.9035 37.2243 37.4307 38.2154 36.9243 39.1899C35.9036 41.1354 34.9915 43.1324 34.0414 45.1119C33.1533 47.1184 32.2279 49.1092 31.4105 51.1453C27.9558 59.2148 25.2285 67.5761 23.0509 76.0662C21.9656 80.3144 21.0624 84.6078 20.3403 88.9325C19.6121 93.2556 19.05 97.6134 18.8477 102Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l2" d="M40.7006 20.1387C26.7555 41.0902 19.9099 61.2762 16.5586 75.7005C16.8714 75.859 17.1843 76.0175 17.5025 76.1664C20.8237 61.7682 27.6614 41.5117 41.6895 20.4975C41.3616 20.3721 41.0329 20.2519 40.7006 20.1387Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l3" d="M36.1593 18.9629C22.68 39.3492 15.9041 58.9778 12.5078 73.2375C12.8056 73.4518 13.107 73.6634 13.4128 73.8672C16.7755 59.5831 23.5673 39.7559 37.2446 19.1763C36.8849 19.0987 36.5234 19.0282 36.1593 18.9629Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l4" d="M31.1719 18.4785C18.6904 37.6769 12.117 56.1273 8.66406 69.9594C8.94245 70.2398 9.22791 70.5133 9.51779 70.7824C12.9397 56.8501 19.561 38.0566 32.3633 18.516C31.9682 18.4942 31.5705 18.4855 31.1719 18.4785Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l5" d="M25.6376 18.8706C14.7478 36.1366 8.58878 52.6814 5.10938 65.6714C5.3586 66.0363 5.61843 66.3934 5.88267 66.7469C9.34794 53.5392 15.6236 36.4762 26.9641 18.6895C26.5187 18.7417 26.0768 18.8001 25.6376 18.8706Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l6" d="M19.3496 20.5775C10.7894 34.8537 5.40726 48.5056 2.03125 59.901C2.23098 60.3982 2.44309 60.8894 2.66757 61.3728C6.07892 49.535 11.6803 35.1098 20.8697 20.0332C20.3562 20.2013 19.8498 20.3833 19.3496 20.5775Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l7" d="M11.7038 24.8901C6.58144 34.2529 2.79714 43.2368 0 51.3647C0.0689341 52.1537 0.164381 52.9331 0.292528 53.7021C3.30442 44.5771 7.57922 34.2712 13.641 23.5098C12.9755 23.9452 12.3304 24.4068 11.7038 24.8901Z" fill="#1C38F4" class="svg-elem"></path>
                        <path id="l8" d="M0.435547 43.0198C1.98745 39.1069 3.7709 35.0443 5.81152 30.8789C3.17258 34.4295 1.30606 38.5591 0.435547 43.0198Z" fill="#1C38F4" class="svg-elem"></path>
                    </svg>
                    <div class="slogan"><span class="keyword"></span> 배우는 코딩</div>
                    <img class="col-5" src="../img/banner1.png" alt="" />
                </div>
            </section>
            <section class="signup sticky">
                <form action="signup_ok.php" class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                    <h2 class="main-title">회원가입</h2>
                    <div class="input_info">
                        <label for="username" class="form-label">이름</label><i class="fa-solid fa-asterisk"></i>
                        <span class="invalid-feedback"> 이름을 입력해주세요. </span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="이름을 입력하세요" required onchange="noblank()"/>
                    </div>
                    <div class="input_info">
                        <label for="userid" class="form-label">아이디</label><i class="fa-solid fa-asterisk"></i>
                        <span class="invalid-feedback"> 아이디를 입력해주세요. </span>
                        <input type="text" class="form-control" name="userid" id="userid" placeholder="아이디를 입력하세요" required onchange="noblank()" />
                    </div>
                    <div class="input_info">
                        <label for="passwd" class="form-label">비밀번호</label><i class="fa-solid fa-asterisk"></i>
                        <span class="invalid-feedback"> 비밀번호를 입력해주세요. </span>
                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="비밀번호를 입력하세요" required onchange="noblank()"/>
                    </div>
                    <div class="input_info passwd_check">
                        <label for="passwd_ok" class="form-label">비밀번호 확인</label><i class="fa-solid fa-asterisk"></i>
                        <span class="invalid-feedback"> 비밀번호를 다시 입력해주세요. </span>
                        <input type="password" class="form-control" id="passwd_ok" placeholder="비밀번호를 입력하세요" required onchange="noblank()"/>
                        <span id="check"></span>
                    </div>

                    <div class="input_info">
                        <h3>프로필 이미지</h3>
                        <label class="profile_img_btn" for="profile_img">파일 선택</label>
                        <input type="file" name="profile_img" id="profile_img"/>
                    </div>

                    <div class="plus_info">
                        <h3>관심 카테고리<i class="fa-regular fa-circle-question" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="해당 카테고리에 대한 강의를 추천받을 수 있습니다."></i></h3>
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
                                <option selected value="none">관심있는 카테고리를 선택하세요</option>
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
                                <option selected value="none">관심있는 카테고리를 선택하세요</option>
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
                        <span id="range">당신의 실력을 알려주세요</span>
                        <input type="range" class="form-range" min="0" max="5" name="ability_range" id="ability_range" onchange="check_ability()"/>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="total-agree" />
                        <label for="total-agree" class="form-check-label">전체 약관 동의</label>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input autocheck" name="use_agree" id="use_agree" value="1" required onchange="noblank()"/>
                        <div class="d-flex justify-content-between"> 
                            <label for="use_agree" class="form-check-label">[필수] 패스트코드 이용 약관에 동의<i class="fa-solid fa-asterisk"></i></label>
                            <span class="invalid-feedback"> 필수 동의 요소입니다. </span>

                            <!-- Button trigger modal -->
                            <button type="button" class="see_more" data-bs-toggle="modal" data-bs-target="#use_agreeModal">
                            <i class="fa-solid fa-angle-right"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="use_agreeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">[필수] 패스트코드 이용 약관에 동의</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body content-text-3">
                                    <?php 
                                        $query = "SELECT * from terms where termtype='use_agree'"; 
                                        $result = $mysqli -> query($query) or die("query error =>".$mysqli-->error);
                                        $rs = $result -> fetch_object();
                                        echo nl2br($rs -> content);
                                    ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" id="modal_use_agree" class="btn btn-primary" data-bs-dismiss="modal">약관 동의</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input autocheck" name="personalinfo_agree" id="personalinfo_agree" value="1" required onchange="noblank()"/>
                        <div class="d-flex justify-content-between">
                            <label for="personalinfo_agree" class="form-check-label">[필수] 개인정보 수집 및 이용에 동의<i class="fa-solid fa-asterisk"></i></label>
                            <span class="invalid-feedback"> 필수 동의 요소입니다. </span>
                            <!-- Button trigger modal -->
                            <button type="button" class="see_more" data-bs-toggle="modal" data-bs-target="#personalinfo_agreeModal">
                            <i class="fa-solid fa-angle-right"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="personalinfo_agreeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">[필수] 개인정보 수집 및 이용에 동의</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body content-text-3">
                                    <?php 
                                        $query = "SELECT * from terms where termtype='personalinfo_agree'"; 
                                        $result = $mysqli -> query($query) or die("query error =>".$mysqli-->error);
                                        $rs = $result -> fetch_object();
                                        echo nl2br($rs -> content);
                                    ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" id="modal_personalinfo_agree" class="btn btn-primary" data-bs-dismiss="modal">약관 동의</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input autocheck" name="marketing_agree" id="marketing_agree" value="1" />
                        <div class="d-flex justify-content-between"><label for="marketing_agree" class="form-check-label">[선택] 마케팅 정보 수신 및 선택적 개인정보 제공</label>
                            <!-- Button trigger modal -->
                            <button type="button" class="see_more" data-bs-toggle="modal" data-bs-target="#marketing_agreeModal">
                            <i class="fa-solid fa-angle-right"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="marketing_agreeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">[선택] 마케팅 정보 수신 및 선택적 개인정보 제공</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body content-text-3">
                                    <?php 
                                        $query = "SELECT * from terms where termtype='marketing_agree'"; 
                                        $result = $mysqli -> query($query) or die("query error =>".$mysqli-->error);
                                        $rs = $result -> fetch_object();
                                        echo nl2br($rs -> content);
                                    ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" id="modal_marketing_agree" class="btn btn-primary" data-bs-dismiss="modal">약관 동의</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="big-btn btn-red" id="signup">회원가입</button>

                    <div class="go_link d-flex justify-content-center content-text-1">
                        <p>이미 회원이신가요?</p>
                        <a href="login.php">로그인 하기</a>
                    </div>
                </form>
            </section>
        </div>
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/inc/user/footer.php";
?>
        <script src="../js/signup.js"></script>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/inc/user/tail.php";
?>