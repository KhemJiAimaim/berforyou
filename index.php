<!DOCTYPE html>
<html lang="en">

<?php
$url = explode('/', $_SERVER['REQUEST_URI']);
$slug = urldecode($url[2]);
?>

<head>
    <?php include('template/css.php') ?>
</head>

<body>

    <?php include('template/header.php'); ?>

    <section>
        <div class="container content">
            <!-- เมนูข้าง -->
            <?php include('template/sidebar.php'); ?>

            <!-- ส่วนเนื้อหา -->
            <?php
            switch ($slug) {
                case '':
                    include('template/main.php');
                    break;
                case 'home':
                    include('template/main.php');
                    break;
                case 'about':
                    include('template/about.php');
                    break;
                case 'contact':
                    include('template/contact.php');
                    break;
                case 'howtobuy':
                    include('template/howtobuy.php');
                    break;
                case 'article':
                    include('template/article.php');
                    break;
                case 'article-detail':
                    include('template/article-detail.php');
                    break;
                case 'fortune-ber':
                    include('template/fortune-ber.php');
                    break;
                case 'detail-ber':
                    include('template/detail-ber.php');
                    break;
                case 'sum-ber':
                    include('template/sum-ber.php');
                    break;
                case 'cate-ber':
                    include('template/cate-ber.php');
                    break;
                case 'last-releast':
                    include('template/last-releast.php');
                    break;
                case 'cart':
                    include('template/cart.php');
                    break;
                case 'review':
                    include('template/review.php');
                    break;
                case 'ber-mean':
                    include('template/number-no-imi.php');
                    break;
                case 'delivery-check':
                    include('template/delivery-check.php');
                    break;
            }
            ?>

        </div>

        <!-- back to top button -->
        <a href="#back-top" id="myP" class="back-to-top">
            <img src="img/7756294.png" alt="" class="img-backtop">
        </a>

        <!-- รีวิว -->
        <div class="review">
            <div class="review-box container">
                <div class="head-text">
                    <h2>บทความที่น่าสนใจ</h2>
                    <!-- <a href="review"><button>ทั้งหมด</button></a> -->
                </div>

                <!-- <div class="slide-review owl-carousel">
                    <figure>
                        <img src="img/review5.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review6.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review7.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review6.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review5.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review6.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                    <figure>
                        <img src="img/review7.jpg" alt="">
                        <div class="hover-img">
                            <i class="fas fa-eye"></i>
                            <span>view</span>
                        </div>
                    </figure>
                </div> -->



                <div class="flex-container">
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 684.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 659.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 660.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 661.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 662.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                    <div class="article-img">
                        <a href="#">
                            <img src="img/article/Rectangle 688.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">
                                    <img src="img/article/mdi_eye.png" alt="">
                                    <p>Detail</p>
                                </div>
                            </div>
                            <div class="article-text">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="foot-text">
                    <a href="article"><button class="button-2" role="button">บทความทั้งหมด</button></a>
                </div>
            </div>
            <div class="show-review">
                <div class="box-show">
                    <figure><img src="" alt=""></figure>
                    <div class="close-button"><i class="fas fa-times-circle"></i></div>
                </div>
            </div>
        </div>


    </section>

    <?php include('template/footer.php') ?>
</body>

<script>
    window.addEventListener('scroll', function() {
        let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        let backToTop = document.getElementById('myP');

        if (scrollPosition >= 500) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
</script>

</html>