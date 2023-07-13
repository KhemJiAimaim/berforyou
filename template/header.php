<!-- <?php echo $slug

?>  -->
<header>
    <section id="back-top">
        <nav>
            <div class="topnav">
                <div class="logo-nav">
                    <figure><a href="home"><img src="img/logo/logo white-02.png" alt=""></a></figure>
                </div>

                <!-- เมนูปกติ -->
                <ul class="nav-menu">
                    <li class="cate-mobile">
                        <a href="#">เมนูหมวดหมู่เบอร์</a>
                        <ul class="cateMobile">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <li>
                                    <a href="">
                                        <span>เบอร์มงคลมาใหม่</span>
                                        <span>200</span>
                                    </a>
                                </li>
                            <?php endfor; ?>
                            <div class="hide-button"><i class="fas fa-angle-double-left"></i></div>
                        </ul>
                    </li>
                    <li><a href="home" class="<?php print ($slug === 'home') ? "nav-active-menu" : ""; ?>">หน้าแรก</a>
                    </li>
                    <li><a href="fortune-ber" class="<?php print ($slug === 'fortune-ber') ? "nav-active-menu" : ""; ?>">ทำนายเบอร์</a>
                    <li><a href="ber-mean" class="<?php print ($slug === 'ber-mean') ? "nav-active-menu" : ""; ?>">ค้นหาเบอร์จากความหมาย</a>
                    <li><a href="howtobuy" class="<?php print ($slug === 'howtobuy') ? "nav-active-menu" : ""; ?>">วิธีการสั่งซื้อ</a>
                    <li><a href="delivery-check" class="<?php print ($slug === 'delivery-check') ? "nav-active-menu" : ""; ?>">เช็คการจัดส่งสินค้า</a>
                    <li><a href="article" class="<?php print ($slug === 'article') ? "nav-active-menu" : ""; ?>">บทความ</a>
                    <li><a href="about" class="<?php print ($slug === 'about') ? "nav-active-menu" : ""; ?>">เกี่ยวกับเรา</a></li>
                    <li><a href="contact" class="<?php print ($slug === 'contact') ? "nav-active-menu" : ""; ?>">ติดต่อเรา</a></li>
                    <li class="menu-cart">
                        <a href="#" class="cart">
                            <img src="img/logo/solar_cart.png" alt="">
                            <div class="num-shop-cart">
                                <span>99+</span>
                            </div>
                        </a>

                        <div class="cart-hover">
                            <ul>
                                <li class="head-hover">
                                    <p>
                                        จำนวนสินค้า
                                        <span>99</span>
                                        เบอร์ /
                                        <span>999999</span>
                                        บาท
                                    </p>
                                </li>
                                <div class="list-item">
                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>
                                </div>
                                <li class="total-cart"><a href="cart"><i class="fas fa-cart-arrow-down"></i><span>รายการทั้งหมด</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="buttonX"><i class="fas fa-times"></i></li>
                </ul>

                <!-- ปุ่มเมนูตอน responsive -->
                <div class="group-mobile-menu">
                    <div class="cart-mobile">
                        <li><img href="#" class="cart" src="img/logo/solar_cart.png" alt=""></li>
                        <div class="cart-hover">
                            <ul>
                                <li class="head-hover">
                                    <p>
                                        จำนวนสินค้า
                                        <span>99</span>
                                        เบอร์ /
                                        <span>999999</span>
                                        บาท
                                    </p>
                                </li>
                                <div class="list-item">
                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <img src="img/icon/ture move h-02.png" alt="">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="bottom">
                                            <span class="sum">ผลรวม 68</span>
                                            <span class="ber">0993216547</span>
                                            <span class="price">999999.-</span>
                                        </div>
                                    </li>
                                </div>
                                <li class="total-cart"><a href="cart"><i class="fas fa-cart-arrow-down"></i><span>รายการทั้งหมด</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="hamberger">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

            </div>
        </nav>
    </section>


    <!-- 
    <?php if ($slug === 'fortune-ber') { ?>
        <figure><img src="img/Rectangle 692.png" alt="" class="bandner-nav"></figure>
    <?php } ?>
    <?php if ($slug === 'detail-ber') { ?>
        <figure><img src="img/Rectangle 692.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'ber-mean') { ?>
        <figure><img src="img/Rectangle 6999.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'howtobuy') { ?>
        <figure><img src="img/Rectangle 69.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'article-detail') { ?>
        <figure><img alt="" class="bandner-nav"></figure>
    <?php } ?>
    <?php if ($slug === 'article') { ?>
        <figure><img src="img/Rectangle 213.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'about') { ?>
        <figure><img src="img/Rectangle 6.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'contact') { ?>
        <figure><img src="img/Rectangle 2.png" alt="" class="bandner-nav"></figure>
    <?php } ?>

    <?php if ($slug === 'delivery-check') { ?>
        <figure><img src="img/Rectangle 66.png" alt="" class="bandner-nav"></figure>
    <?php } ?>  

    <?php if ($slug === 'cart') { ?>
        <figure><img class="bandner-nav" style="margin-top: 20px;"></figure>
    <?php } ?>

    <?php if ($slug === 'home') { ?>
        <div class="slider owl-carousel">
            <figure><img src="img/Rectangle 7.png" alt=""></figure>
        </div>
    <?php } ?> -->

    <?php if ($slug === 'fortune-ber') : ?>
        <figure><img src="img/Rectangle 692.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'detail-ber') : ?>
        <figure><img src="img/Rectangle 692.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'ber-mean') : ?>
        <figure><img src="img/Rectangle 6999.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'howtobuy') : ?>
        <figure><img src="img/Rectangle 69.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'article-detail') : ?>
        <figure><img alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'article') : ?>
        <figure><img src="img/Rectangle 213.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'about') : ?>
        <figure><img src="img/Rectangle 6.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'contact') : ?>
        <figure><img src="img/Rectangle 2.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'delivery-check') : ?>
        <figure><img src="img/Rectangle 66.png" alt="" class="bandner-nav"></figure>
    <?php elseif ($slug === 'cart') : ?>
        <figure><img class="bandner-nav" style="height:0px"></figure>
    <?php else : ?>
        <div class="slider owl-carousel">
            <figure><img src="img/Rectangle 7.png" alt=""></figure>
        </div>


        <div class="container">
            <div class="text-box">
                <span>ยินดีต้อนรับเข้าสู่ Berforyou.com ศูนย์รวมจำหน่ายเบอร์สวย เบอร์มงคล เบอร์เสริมดวง บริการครบเครื่องเรื่องเบอร์ ระบบทำนายเบอร์อัตโนมัติ ระบบค้นหาเบอร์ที่ต้องการ ตรงจุด ทุกความต้องการ<br />
                    เสริมการเงิน การงาน ความรัก สุขภาพ โชคลาภ สะดวกสบายโดยการเลือกซื้อและชำระเงินผ่านหน้าเว็บไซต์ได้ทันที จัดส่งวันต่อวัน รวดเร็วทันใจ เบอร์ทุกเบอร์คุณภาพคัดเกรด มงคลทั้งเว็บ <br />ด้วยประสบการณ์ขายมากกว่า 10 ปี</span>
            </div>
            <!-- ค้นหาเบอร์ -->
            <!-- <section>
            <div class="search-box">
                <h2>ค้นหาเบอร์</h2>
                <div class="box">
                    <div class="left-box">
                        <form action="" class="fortune-box-num" id="search">
                            <div class="fortune-num">
                                <input type="tel" name="fortune-num" maxlength="10" placeholder="ทำนายเบอร์">
                                <a href=""><button type="submit">ทำนาย</button></a>
                            </div>
                        </form>

                        <div class="search-num">
                            <label>ค้นหาเบอร์</label>
                            <input type="number" data-position="0" class="search-box-num" value="0" readonly="readonly">
                            <input type="tel" data-position="1" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="2" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="3" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="4" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="5" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="6" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="7" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="8" class="search-box-num" maxlength="1" placeholder="-">
                            <input type="tel" data-position="9" class="search-box-num" maxlength="1" placeholder="-">
                        </div>

                        <span class="open-more-filter">ค้นหาแบบละเอียด</span>

                        <div class="more-filter">
                            <div class="cate-num">
                                <select name="" id="">
                                    <option value="">หมวดหมู่ เบอร์</option>
                                    <option value="">เบอร์ดี1</option>
                                    <option value="">เบอร์ดี2</option>
                                    <option value="">เบอร์ดี3</option>
                                    <option value="">เบอร์ดี4</option>
                                    <option value="">เบอร์ดี5</option>
                                    <option value="">เบอร์ดี6</option>
                                </select>
                            </div>

                            <div class="sum-network">
                                <div class="sum-num">
                                    <select name="" id="">
                                        <option value="">ผลรวม</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>

                                <div class="network">
                                    <select name="" id="">
                                        <option value="">เครือข่าย</option>
                                        <option value="">True</option>
                                        <option value="">Dtac</option>
                                        <option value="">Cat</option>
                                        <option value="">AIS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="search-some">
                                <label>ค้นหาบางเลข</label>
                                <input type="tel" maxlength="10">
                            </div>

                            <div class="range-price">
                                <label>ช่วงราคา</label>
                                <input type="tel" class="low" placeholder="9,999,999" maxlength="7">
                                <div class="keed"></div>
                                <input type="tel" class="high" placeholder="9,999,999" maxlength="7">
                                <label>บาท</label>
                            </div>
                        </div>

                    </div>

                    <div class="right-box">
                        <div class="favorite-num">
                            <div class="favorite">
                                <label>ตัวเลขที่ชอบ</label>
                                <div class="button-num">
                                    <button data-favnum="0">0</button>
                                    <button data-favnum="1">1</button>
                                    <button data-favnum="2">2</button>
                                    <button data-favnum="3">3</button>
                                    <button data-favnum="4">4</button>
                                    <button data-favnum="5">5</button>
                                    <button data-favnum="6">6</button>
                                    <button data-favnum="7">7</button>
                                    <button data-favnum="8">8</button>
                                    <button data-favnum="9">9</button>
                                </div>
                            </div>

                            <div class="kirai">
                                <label>ตัวเลขที่ไม่ชอบ</label>
                                <div class="button-num">
                                    <button data-favnum="0">0</button>
                                    <button data-favnum="1">1</button>
                                    <button data-favnum="2">2</button>
                                    <button data-favnum="3">3</button>
                                    <button data-favnum="4">4</button>
                                    <button data-favnum="5">5</button>
                                    <button data-favnum="6">6</button>
                                    <button data-favnum="7">7</button>
                                    <button data-favnum="8">8</button>
                                    <button data-favnum="9">9</button>
                                </div>
                            </div>
                        </div>

                        <div class="improve-luck">
                            <span>เสริมดวงด้าน</span>
                            <div class="luck-box">
                                <div class="button1">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>วาจา</label>
                                </div>
                                <div class="button2">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>กาย</label>
                                </div>
                                <div class="button3">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>ใจ</label>
                                </div>
                                <div class="button4">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>สติ</label>
                                </div>
                                <div class="button5">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>เงิน</label>
                                </div>
                                <div class="button6">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>ทอง</label>
                                </div>
                                <div class="button7">
                                    <figure><img src="img/icon/lips.svg" alt=""></figure>
                                    <label>รัก</label>
                                </div>
                            </div>
                        </div>

                        <div class="ber-goodluck">
                            <span>เบอร์มงคล</span>
                            <div class="goodluck-box">
                                <?php for ($i = 1; $i <= 12; $i++) : ?>
                                    <div class="button1">
                                        <figure><img src="img/icon/lips.svg" alt=""></figure>
                                        <label>แมว</label>
                                    </div>
                                <?php endfor; ?>

                                <div class="recomment-num">
                                    <div class="button">
                                        <figure><img src="img/icon/lips.svg" alt=""></figure>
                                        <label>แนะนำ</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="button-form">
                    <button class="reset">ล้างข้อมูล</button>
                    <button>ค้นหา</button>
                    
                </div>
            </div>
        </section> -->
            <section>
                <div class="search-box">
                    <div class="grid-container">
                        <div class="grid-top">
                            <div class="top-box">
                                <div class="search-number">
                                    <label>วิเคาระห์เบอร์</label>
                                    <div class="analyze-number">
                                        <input type="number" data-position="0" class="search-box-num" value="0" readonly="readonly">
                                        <input type="tel" data-position="1" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="2" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="2" class="search-box-nums" value="-" required disabled>
                                        <input type="tel" data-position="3" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="4" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="5" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="2" class="search-box-nums" value="-" required disabled>
                                        <input type="tel" data-position="6" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="7" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="8" class="search-box-num" maxlength="1" placeholder="0">
                                        <input type="tel" data-position="9" class="search-box-num" maxlength="1" placeholder="0">
                                        <button>วิเคาระห์เบอร์</button>
                                    </div>
                                </div>
                                <div class="search-num">
                                    <label>ค้นหาเบอร์</label><br />
                                    <input type="number" data-position="0" class="search-box-num" value="0" readonly="readonly">
                                    <input type="tel" data-position="1" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="2" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="2" class="search-box-nums" value="-" required disabled>
                                    <input type="tel" data-position="3" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="4" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="5" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="2" class="search-box-nums" value="-" required disabled>
                                    <input type="tel" data-position="6" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="7" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="8" class="search-box-num" maxlength="1" placeholder="0">
                                    <input type="tel" data-position="9" class="search-box-num" maxlength="1" placeholder="0">
                                </div>
                                <div class="like-number">
                                    <label for="">ชุดตัวเลขที่ชอบ</label><br />
                                    <input type="number" class="search-like-numbe" placeholder="เช่น 28,40,59">
                                </div>
                                <div class="favorite">
                                    <label>ตัวเลขที่ชอบ</label><br />
                                    <div class="button-num">
                                        <button id="button-0" data-favnum="0" class="btn">0</button>
                                        <button id="button-1" data-favnum="1" class="btn">1</button>
                                        <button id="button-2" data-favnum="2" class="btn">2</button>
                                        <button id="button-3" data-favnum="3" class="btn">3</button>
                                        <button id="button-4" data-favnum="4" class="btn">4</button>
                                        <button id="button-5" data-favnum="5" class="btn">5</button>
                                        <button id="button-6" data-favnum="6" class="btn">6</button>
                                        <button id="button-7" data-favnum="7" class="btn">7</button>
                                        <button id="button-8" data-favnum="8" class="btn">8</button>
                                        <button id="button-9" data-favnum="9" class="btn">9</button>
                                    </div>
                                </div>
                            </div>
                            <div class="center-box">
                                <div class="price">
                                    <div class="price-from-left">
                                        <label for="standard-select">ช่วงราคา (จาก)</label>
                                        <div class="select">
                                            <select class="left-select">
                                                <option value="Option 1">100 บาท</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                                <option value="Option 4">Option 4</option>
                                                <option value="Option 5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="price-from-right">
                                        <label for="standard-select">ช่วงราคา (ถึง)</label>
                                        <div class="select">
                                            <select class="right-select">
                                                <option value="Option 1">1,000 บาท</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                                <option value="Option 4">Option 4</option>
                                                <option value="Option 5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="sort-from">
                                    <label for="standard-select" style="color:white; font-size:16px">เรียงลำดับ</label>
                                    <div class="select">
                                        <select class="sort-select">
                                            <option value="Option 1">จากน้อยไปมาก</option>
                                            <option value="Option 2">Option 2</option>
                                            <option value="Option 3">Option 3</option>
                                            <option value="Option 4">Option 4</option>
                                            <option value="Option 5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="category-from">
                                    <label for="standard-select" style="color:white; font-size:16px">หมวดหมู่เบอร์</label>
                                    <div class="select">
                                        <select class="category-select">
                                            <option value="Option 1">เบอร์ทั้งหมด</option>
                                            <option value="Option 2">Option 2</option>
                                            <option value="Option 3">Option 3</option>
                                            <option value="Option 4">Option 4</option>
                                            <option value="Option 5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sum-from">
                                    <label for="standard-select" style="color:white; font-size:16px">ผลรวม</label>
                                    <div class="select">
                                        <select class="sum-select">
                                            <option value="Option 1">ผลรวม</option>
                                            <option value="Option 2">Option 2</option>
                                            <option value="Option 3">Option 3</option>
                                            <option value="Option 4">Option 4</option>
                                            <option value="Option 5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="network-from">
                                    <label for="standard-select" style="color:white; font-size:16px">เครือข่าย</label>
                                    <div class="select">
                                        <select class="network-select">
                                            <option value="Option 1">TRUE</option>
                                            <option value="Option 2">D-tac</option>
                                            <option value="Option 3">AIS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="favorite-d">
                                    <label>ตัวเลขที่ไม่ชอบ</label><br />
                                    <div class="button-num">
                                        <button id="button-0" data-favnum="0" class="btn">0</button>
                                        <button id="button-1" data-favnum="1" class="btn">1</button>
                                        <button id="button-2" data-favnum="2" class="btn">2</button>
                                        <button id="button-3" data-favnum="3" class="btn">3</button>
                                        <button id="button-4" data-favnum="4" class="btn">4</button>
                                        <button id="button-5" data-favnum="5" class="btn">5</button>
                                        <button id="button-6" data-favnum="6" class="btn">6</button>
                                        <button id="button-7" data-favnum="7" class="btn">7</button>
                                        <button id="button-8" data-favnum="8" class="btn">8</button>
                                        <button id="button-9" data-favnum="9" class="btn">9</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttom-box">
                            <div class="pic">
                                <span>เสริมดวงด้าน</span>
                                <div class="box-luck">
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/1.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/2.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/3.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/4.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/5.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/6.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/7.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/8.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/9.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/10.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="pic-category">
                                <span>หมวดหมู่เบอร์</span>
                                <div class="box-luck-category">
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/1.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/2.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/3.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/4.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic" class="luck-pic">
                                        <figure><img src="img/luck/5.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic" class="luck-pic">
                                        <figure><img src="img/luck/6.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic" class="luck-pic">
                                        <figure><img src="img/luck/7.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic" class="luck-pic">
                                        <figure><img src="img/luck/8.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic" class="luck-pic">
                                        <figure><img src="img/luck/9.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/10.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/6.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/7.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/8.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/9.png" alt=""></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/1.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/2.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/3.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/4.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/5.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/6.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/7.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                                    <button class="luck-pic">
                                        <figure><img src="img/luck/8.png" alt="" class="pic-img"></figure>
                                        <span class="check-icon"></span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="button-form">
                        <button class="reset">ล้างข้อมูล</button>
                        <button>ค้นหา</button>
                    </div>
                </div>

            </section>
        </div>
    <?php endif; ?>
</header>

<script>
    // รับปุ่มทั้งหมด
    const buttons = document.querySelectorAll('.btn');

    // วนลูปใส่เหตุการณ์คลิกที่ทุกปุ่ม
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // ตรวจสอบว่าปุ่มถูก active อยู่หรือไม่
            const isActive = button.classList.contains('active');

            // ถ้าปุ่มยังไม่ active ให้เปลี่ยนสีเป็นสีเขียว
            if (!isActive) {
                button.classList.add('active');
            }
            // ถ้าปุ่มมีสีเขียวอยู่แล้ว ให้เอาสีเขียวออกเพื่อกลับมาสีปกติ
            else {
                button.classList.remove('active');
            }
        });
    });

    var luckPics = document.querySelectorAll('.luck-pic');

    luckPics.forEach(function (pic) {
    pic.addEventListener('click', function () {
        if (this.classList.contains('active')) {
        this.style.backgroundColor = "#FFF";
        this.classList.remove('active');
        this.querySelector('img').style.filter = ""; // เอาค่า style filter ออกเพื่อให้กลับมาใช้ค่าจาก CSS
        } else {
        this.classList.add('active');
        this.style.backgroundColor = "#d79636";
        this.querySelector('img').style.filter = "invert(92%) sepia(92%) saturate(31%) hue-rotate(62deg) brightness(106%) contrast(109%)";
        }
    });
    });
</script>