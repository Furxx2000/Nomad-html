<?php include __DIR__. '/parts-php/config.php'; ?>
<?php
$title = '成就頁';
$pageName = 'cart-confirm';

if(! isset($_SESSION['user'])){
    header('Location: signUp.php');
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nomadHomePage.css">
    <link rel="stylesheet" href="./css/achievement.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>成就</title>
    <style>
    .imgbox {
        cursor: pointer;
    }
    </style>

</head>

<body>
    <?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
    <div class="progress-bar horizontal top"></div>
    <div class="progress-bar horizontal bottom"></div>
    <div class="progress-bar vertical left"></div>
    <div class="progress-bar vertical right"></div>

    <div class="navbartop hero-section">
        <div class="navbartop-image">
            <div class="navbox">
                <?php if(isset($_SESSION['user'])) :?>
                <?php if(! empty($_SESSION['user']['profile_image'])): ?>
                <div class="member">
                    <img src="./images/<?= $img ?>">
                </div>
                <?php else: ?>
                <a href="#">
                    <svg class="icon-account-user svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-account-user"></use>
                    </svg>
                </a>
                <?php endif; ?>
                <?php else: ?>
                <a href="./signUp.php">
                    <svg class="icon-account-user svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-account-user"></use>
                    </svg>
                </a>
                <?php endif; ?>
                <div class="textbox">
                    <h1 class="title ff-noto"><?= htmlentities($_SESSION['user']['nickname']) ?></h1>
                    <span class="rank ff-raleway">Gold</span>
                    <div class="trophy">
                        <img src="./img/p2-gold-trophy.png">
                    </div>
                    <span1 class="ff-noto">於2018年5月加入Nomad</span1>
                </div>
            </div>
        </div>
    </div>
    <div class="container hero-section">
        <div class="trophy-flex flex">
            <div class="trophy-text">
                <p class="title ff-noto">獎<br>盃</p>
            </div>
            <div class="trophy">
                <div class="trophy-text2">
                    <p1 class="text ff-noto">獎盃</p1>
                </div>
                <div class="victory-img">
                    <img src="./img/victory2.png" alt="" width="100%" height="auto">
                </div>
                <div class="trophy-img flex">
                    <div class="box">
                        <p class="text ff-noto">已完成行程</p>
                        <p class="num ff-raleway">5</p>
                    </div>
                    <div class="chart">
                        <p id="value1" class="num ff-raleway">100</p>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="trophy-box flex">
                    <li>
                        <div class="img">
                            <img src="./img/p1-platinum-trophy.png" alt="">
                        </div>
                        <span class="num ff-raleway">4</span>
                    </li>
                    <li>
                        <div class="img">
                            <img src="./img/p2-gold-trophy.png" alt="">
                        </div>
                        <span class="num ff-raleway">4</span>
                    </li>
                    <li>
                        <div class="img">
                            <img src="./img/p3-silver-trophy.png" alt="">
                        </div>
                        <span class="num ff-raleway">7</span>
                    </li>
                    <li>
                        <div class="img">
                            <img src="./img/p4-bronze-trophy.png" alt="">
                        </div>
                        <span class="num ff-raleway">17</span>
                    </li>

                    <li class="trophy-point">
                        <p class="text ff-noto">合計：<span class="num ff-raleway">32</span></p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ----------------底下是小卡------------------ -->
        <div class="container1">

            <div class="cardinfobox flex">
                <div class="imgbox">
                    <a href="./achievement_detail1.php">
                        <img src="./img/奇萊主北4.jpg" alt="">
                    </a>
                </div>
                <div class="boxinfo">
                    <h4 class="title ff-noto">奇萊主峰</h4>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                    <span class="num ff-raleway">5</span>
                    <span class="text ff-noto">(20則評價)</span>
                    <p class="text ff-noto">B級</p>
                    <p class="departure_date ff-noto">2021年6月9日-21日</p>
                    <p class="percentage ff-raleway">100%</p>
                    <div class="bars">
                        <div class="progressBar-up"></div>
                        <div class="progressBar-down"></div>
                    </div>
                    <ul class="trophy-box flex">
                        <li>
                            <div class="img">
                                <img src="./img/p1-platinum-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p2-gold-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p3-silver-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">2</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p4-bronze-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">2</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cardinfobox flex">
                <div class="imgbox">
                    <a href="./achievement_detail1.php">
                        <img src="./images/B0004/B0004.jpeg" alt="">
                    </a>
                </div>
                <div class="boxinfo">
                    <h4 class="title ff-noto">武陵四秀</h4>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                    <span class="num ff-raleway">5</span>
                    <span class="text ff-noto">(15則評價)</span>
                    <p class="text ff-noto">B級</p>
                    <p class="departure_date ff-noto">2021年6月03日-05日</p>
                    <p class="percentage ff-raleway">60%</p>
                    <div class="bars">
                        <div class="progressBar-up" style="width: 60%;"></div>
                        <div class="progressBar-down"></div>
                    </div>
                    <ul class="trophy-box flex">
                        <li>
                            <div class="img">
                                <img src="./img/p1-platinum-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p2-gold-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p3-silver-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p4-bronze-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">2</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cardinfobox flex">
                <div class="imgbox">
                    <a href="./achievement_detail1.php">
                        <img src="./images/B0009/B0009.jpeg" alt="">
                    </a>
                </div>
                <div class="boxinfo">
                    <h4 class="title ff-noto">大霸尖山</h4>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                    <span class="num ff-raleway">5</span>
                    <span class="text ff-noto">(10則評價)</span>
                    <p class="text ff-noto">B級</p>
                    <p class="departure_date ff-noto">2021年6月23日-25日</p>
                    <p class="percentage ff-raleway">100%</p>
                    <div class="bars">
                        <div class="progressBar-up"></div>
                        <div class="progressBar-down"></div>
                    </div>
                    <ul class="trophy-box flex">
                        <li>
                            <div class="img">
                                <img src="./img/p1-platinum-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p2-gold-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p3-silver-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p4-bronze-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">2</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cardinfobox flex">
                <div class="imgbox">
                    <a href="./achievement_detail1.php">
                        <img src="./images/A0014/A0014.jpeg" alt="">
                    </a>
                </div>
                <div class="boxinfo">
                    <h4 class="title ff-noto">嘉明湖</h4>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                    <span class="num ff-raleway">5</span>
                    <span class="text ff-noto">(32則評價)</span>
                    <p class="text ff-noto">A級</p>
                    <p class="departure_date ff-noto">2021年9月15日-17日</p>
                    <p class="percentage ff-raleway">60%</p>
                    <div class="bars">
                        <div class="progressBar-up" style="width: 60%;"></div>
                        <div class="progressBar-down"></div>
                    </div>
                    <ul class="trophy-box flex">
                        <li>
                            <div class="img">
                                <img src="./img/p1-platinum-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p2-gold-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p3-silver-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">1</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p4-bronze-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">2</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cardinfobox flex">
                <div class="imgbox">
                    <a href="./achievement_detail1.php">
                        <img src="./images/A0001/A0001.jpeg" alt="">
                    </a>
                </div>
                <div class="boxinfo">
                    <h4 class="title ff-noto">北大武山</h4>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                    <span class="num ff-raleway">5</span>
                    <span class="text ff-noto">(16則評價)</span>
                    <p class="text ff-noto">A級</p>
                    <p class="departure_date ff-noto">2021年6月9日-11日</p>
                    <p class="percentage ff-raleway">20%</p>
                    <div class="bars">
                        <div class="progressBar-up" style="width: 20%;"></div>
                        <div class="progressBar-down"></div>
                    </div>
                    <ul class="trophy-box flex">
                        <li>
                            <div class="img">
                                <img src="./img/p1-platinum-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p2-gold-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p3-silver-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/p4-bronze-trophy.png" alt="">
                            </div>
                            <span class="num ff-raleway">0</span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="cardinfobox"></div>
        </div>
        <div class="page">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="25px" height="25px">
                <path
                    d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
            </svg>
            <span class="num ff-raleway">1</span>
            <span class="num ff-raleway">2</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="25px" height="25px">

                <path
                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
            </svg>
        </div>

    </div>
    </div>

    <?php include __DIR__. '/parts-php/html-fixedBar.php'; ?>
    <?php include __DIR__. '/parts-php/html-footer.php'; ?>
    <?php include __DIR__. '/parts-php/html-scripts.php'; ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>



    <script>
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight',
        htop = document.querySelector('.progress-bar.horizontal.top'),
        hbot = document.querySelector('.progress-bar.horizontal.bottom'),
        vleft = document.querySelector('.progress-bar.vertical.left'),
        vright = document.querySelector('.progress-bar.vertical.right'),
        scroll;

    document.addEventListener('scroll', function() {
        // let's calculate the scroll position
        // ( body.scrollTop / ( body.scrollHeight - document.height ) ) * 100
        // multiplying by 100 here gives us a percent value
        scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;

        // set our variable for CSS to use
        htop.style.setProperty('--scroll', scroll + '%');
        hbot.style.setProperty('--scroll', scroll + '%');
        vleft.style.setProperty('--scroll', scroll + '%');
        vright.style.setProperty('--scroll', scroll + '%');
    });
    </script>
    <script>
    function increase() {
        // 更改變量以修改數字的速度，從0增加到（ms）
        let SPEED = 20;
        // 百分比值
        let limit = parseInt(document.getElementById("value1").innerHTML, 10);

        for (let i = 0; i <= limit; i++) {
            setTimeout(function() {
                document.getElementById("value1").innerHTML = i + "%";
            }, SPEED * i);
        }
    }

    increase();
    </script>
    <?php include __DIR__. '/parts-php/html-endingTag.php'; ?>