<div class="cart-page">
    <div class="cart-shadow">
        <div class="head-text">
            <h1>สรุปรายการสินค้าที่สั่งซื้อ</h1>
        </div>

        <div class="cart-box">
            <!-- รายการสินค้าที่เลือกเข้าตระกร้า -->
            <div class="cart-list">
                <div class="cart-list-menu">
                    <h3>รายการ</h3>
                    <h3>2 รายการ</h3>
                </div>

                <div class="list-item">

                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <div class="box">
                            <div class="box-header">
                                <div class="img"><img src="img/icon/Dtac-02.png" alt=""></div>
                                <h2>089-682-6459</h2>
                            </div>
                            <div class="box-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nesciunt.</p>
                                <div class="grade">
                                    <h4>เกรด</h4>
                                    <div class="grade-detail">
                                        <h4 class="grade-ber">A+</h4>
                                        <h4 class="total-sum">ผลรวม 50</h4>
                                        <h4 class="advice">แนะนำ</h4>
                                    </div>
                                </div>
                                <div class="price">
                                    <h4>ราคา</h4>
                                    <div class="price-detail">
                                        <h4>9,000,000</h4>
                                        <h4>THB</h4>
                                    </div>
                                    <div class="icon">
                                        <i id="delete" class="fas fa-trash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endfor; ?>
                    <!-- <div class="box">
                            <div class="logo"><figure><img src="img/logo/Artboard – 13.jpg" alt=""></figure></div>
                            <div class="number">
                                <a href="detail-ber"><span>099999999</span></a>
                                <span class="sum-num">ผลรวม 48</span>
                            </div>
                            <div class="detail">
                                <div class="rank"><figure><img class="grade-A" src="img/grade/Artboard – 24.jpg" alt=""></figure></div>
                                <div class="price"><span>9000000.-</span></div>
                                <div class="icon">
                                    <i id="delete" class="fas fa-trash"></i>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>

            <!-- กล่องแสดงรายละเอียดการชำระเงิน -->
            <div class="checkout-box">
                <div class="checkout-price">
                    <div class="amount">
                        <span>จำนวนสินค้า</span><span>6 ชิ้น</span>
                    </div>

                    <div class="shipping-price">
                        <span>ค่าจัดส่ง</span>
                        <span>0 บาท</span>
                    </div>

                    <div class="total-price">
                        <span>รวมราคา</span>
                        <span>9000000 บาท</span>
                    </div>

                    <div class="ps">
                        <div class="row">
                            <img src="img/icon/shipping.png" alt="">
                            <span>จัดส่งฟรีเมื่อซื้อสินค้ามียอดรวมขั้นต่ำ 1,500 บาท</span>
                        </div>
                        <div class="row">
                            <img src="img/icon/shipping-fast.png" alt="">
                            <span>ทำการจัดส่งทันทีหลังจากการทำรายการสั่งซื้อสำเร็จ</span>
                        </div>
                        <div class="row">
                            <img src="img/icon/shield-check.png" alt="">
                            <span>รับประกันสินค้าเสียหาย</span>
                        </div>
                        <div class="row">
                            <img src="img/icon/eye-sharp.png" alt="">
                            <span>สามารถติดตามสถานะสินค้าได้ทุกเมื่อ</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="address-box">
                <h2>กรอกข้อมูลเพื่อการจัดส่ง</h2>

                <div class="input-zone">
                    <label for="name-customer">ชื่อ/นามสกุล</label>
                    <input type="text" maxlength="32" placeholder="กรุณากรอกชื่อ">
                    <div class="box-email-tel">
                        <div class="detail-box">
                            <label for="email">อีเมล</label>
                            <input type="email" maxlength="32" placeholder="อีเมล">
                        </div>
                        <div class="detail-box">
                            <label for="tel">เบอร์โทร</label>
                            <input type="tel" maxlength="10" placeholder="เบอร์โทรศัพท์">
                        </div>
                    </div>

                    <label for="tel">ที่อยู่จัดส่ง</label>
                    <textarea name="" id="" cols="30" rows="3" placeholder="รายละเอียด"></textarea>

                    <div class="box-address">
                        <div class="detail-box">
                            <label for="email">แขวง/ตำบล</label>
                            <input type="text" placeholder="ตำบล">
                        </div>
                        <div class="detail-box">
                            <label for="tel">เขต/อำเภอ</label>
                            <input type="text" placeholder="อำเภอ">
                        </div>
                        <div class="detail-box">
                            <label for="tel">จังหวัด</label>
                            <input type="text" placeholder="จังหวัด">
                        </div>
                        <div class="detail-box">
                            <label for="tel">รหัสไปรษณีย์</label>
                            <input type="text" placeholder="00000">
                        </div>
                    </div>
                </div>


                <div class="button-checkout">
                    <!-- <a href="cate-ber"><button class="add-ber">เลือกเบอร์เพิ่ม</button></a> -->
                    <button class="buy">ส่ง</button>
                    <!-- <button class="reset">ล้างข้อมูล</button> -->
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="box-loading">
        <div class="loading"></div>
    </div>

    <div class="thank-you">
        <figure><img src="img/thank.png" alt=""></figure>
    </div> -->

    <div class="upload-box">
        <div class="upload-shadow">
            <div class="head-text">
                <h1>การอัปโหลดสลิป</h1>
            </div>

            <div class="upload-content">
                <div class="upload-form">
                    <h3>กรอกข้อมูลการจัดส่ง</h3>
                    <div class="upload-form-group">
                        <div class="form-left">
                            <div class="form-group">
                                <label for="">โอนเข้าธนาคาร (ธนาคารของทางเว็บเบอร์)</label>
                                <select class="selection">
                                    <option value="SCB">SCB Siam Commercial Bank</option>
                                    <option value="SCB">SCB Siam Commercial Bank</option>
                                    <option value="SCB">SCB Siam Commercial Bank</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">โอนออกจากธนาคาร (ธนาคารของลูกค้า)</label>
                                <select class="selection">
                                    <option value="BAY">BAY Bank of Ayudhya Public Company Limited</option>
                                    <option value="BAY">BAY Bank of Ayudhya Public Company Limited</option>
                                    <option value="BAY">BAY Bank of Ayudhya Public Company Limited</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">จำนวนเงิน</label>
                                <input class="inp" type="number" placeholder="กรอกจำนวนเงิน">
                            </div>
                            <div class="row-group">
                                <div class="form-group">
                                    <label for="">ชื่อบัญชี</label>
                                    <input class="inp" type="text" placeholder="กรอกชื่อบัญชีผู้โอน">
                                </div>
                                <div class="form-group">
                                    <label for="">วันที่โอน</label>
                                    <input class="inp" type="date">
                                </div>
                            </div>

                        </div>

                        <div class="form-right">
                            <div class="upload-file">
                                <p>อัปสลิป</p>
                                <p>กรุณากดเพื่อสลิปชำระค่าเบอร์</p>
                                <div class="upload-file-content">
                                    <img class="upload-image" src="img/icon/upload.png" alt="">
                                    <p>File Supported JPG,PNG maximum size 2MB</p>
                                    <input type="file" id="upload1" accept="image/*">
                                    <label for="upload1">อัปโหลด</label>
                                </div>
                            </div>
                            <div class="upload-file">
                                <p>อัปโหลดเอกสาร</p>
                                <p>เฉพาะลูกค้าที่ซื้อเบอร์เครือข่ายทรูมูฟเท่านั้น</p>
                                <div class="upload-file-content">
                                    <img class="upload-image" src="img/icon/upload.png" alt="">
                                    <p>File Supported JPG,PNG,PDF maximum size 2MB</p>
                                    <input type="file" id="upload2" accept="image/*">
                                    <label for="upload2">อัปโหลด</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upload-submit">
                        <button>ส่ง</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="howtobuy">
        <div class="howtobuy-shadow">
            <div class="head-text">
                <h1>ช่องทางการชำระเงิน</h1>
            </div>

            <!-- ธนาคาร -->
            <div class="payby">
                <div class="paybybank">
                    <h3>ชำระผ่านการโอน</h3>
                    <div class="box-bank">
                        <div class="item">
                            <figure><img src="img/bank/5-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <!-- <div class="item">
                            <figure><img src="img/bank/1-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <div class="item">
                            <figure><img src="img/bank/2-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <div class="item">
                            <figure><img src="img/bank/3-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <div class="item">
                            <figure><img src="img/bank/4-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <div class="item">
                            <figure><img src="img/bank/6-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div>

                        <div class="item">
                            <figure><img src="img/bank/7-01.jpg" alt=""></figure>
                            <div class="text">
                                <span>บัญชี : ธนาคารกสิกรไทย</span>
                                <span>เลขบัญชี : 7732280256</span>
                                <span>ชื่อบัญชี : บริษัท พีดีเอส พรอสเพอริที จำกัด</span>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="paybycredit">
                    <h3>ชำระผ่านบัตรเครดิต</h3>
                    <div class="box-credit">
                        <figure><img src="img/bank/Master-card.jpg" alt=""></figure>
                        <figure><img src="img/bank/american-express.jpg" alt=""></figure>
                        <figure><img src="img/bank/union-pay.jpg" alt=""></figure>
                        <figure><img src="img/bank/visa.jpg" alt=""></figure>
                        <figure><img src="img/bank/JCB-01.jpg" alt=""></figure>
                    </div>
                </div> -->
            </div>

            <!-- เนื้อหาck -->
            <div class="ck">
                <p>ขั้นตอนการชำระเงิน</p>
                <ol>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni reprehenderit laborum rem tempore porro dolore molestiae, provident, ex cum iure in culpa veritatis, enim nam quod quasi ratione unde.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni reprehenderit laborum rem tempore porro dolore molestiae, provident, ex cum iure in culpa veritatis, enim nam quod quasi ratione unde.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni reprehenderit laborum rem tempore porro dolore molestiae, provident, ex cum iure in culpa veritatis, enim nam quod quasi ratione unde.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni reprehenderit laborum rem tempore porro dolore molestiae, provident, ex cum iure in culpa veritatis, enim nam quod quasi ratione unde.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>