<?php include "headernguoidung.php";

include "function_lienhe.php";
$lienhe = new lienhe();
if (isset($_POST['ok'])) {
    $lienhe->hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $lienhe->sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $lienhe->email = isset($_POST['email']) ? $_POST['email'] : '';
    $lienhe->noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';

    $lienhe->insert();
}
?>
<style>
    .contact {
        height: unset;
    }
    .row{
        margin-bottom: 30px;
    }
    .contact__form:hover {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
    }

    .contact__form-gr-input {
        border: 1px solid black !important;
    }
</style>
<div class="contact">
    <div class="grid wide">
        <div class="row">
            <div class="col l-9">
                <div class="contact__form">
                    <div class="contact__info">
                        <h3 class="contact__form-heading">Liên Hệ Với Chúng Tôi</h3>
                        <form action="" method="post">
                            <div class="contact__form-gr">
                                <input type="text" class="contact__form-gr-input" placeholder="Nhập Tên" name="hoten"></input>
                                <input type="text" class="contact__form-gr-input" placeholder="Nhập Số Điện Thoại" name="sdt"></input>
                                <input type="text" class="contact__form-gr-input" placeholder="Nhập Email" name="email"></input>
                                <input type="text" class="contact__form-gr-input" placeholder="Nội Dung" name="noidung"> </input>
                            </div>
                            <div class="contact__form-btn">
                                <button class="contact__form-link" type="submit" name="ok">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col l-3">
                <div class="row">
                    <div class="col l-12">
                        <div class="container-support__items">
                            <img src="upload/sp1.png" alt="" class="container-support__items-img">
                            <div class="container-support__items-info">
                                <span class="container-support__info-title">Miễn phí vận chuyển</span>
                                <span class="container-support__info-msg">Cho các đơn hàng > 5tr</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-12">
                        <div class="container-support__items">
                            <img src="upload/sp2.png" alt="" class="container-support__items-img">
                            <div class="container-support__items-info">
                                <span class="container-support__info-title">Hỗ trợ 24/7</span>
                                <span class="container-support__info-msg">Liên hệ hỗ trợ 24h/ngày</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-12">
                        <div class="container-support__items">
                            <img src="upload/sp3.png" alt="" class="container-support__items-img">
                            <div class="container-support__items-info">
                                <span class="container-support__info-title">Hoàn tiền 100%</span>
                                <span class="container-support__info-msg">Nếu các sản phẩm bị lỗi, hư hỏng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-12">
                        <div class="container-support__items">
                            <img src="upload/sp4.png" alt="" class="container-support__items-img">
                            <div class="container-support__items-info">
                                <span class="container-support__info-title">Thanh toán</span>
                                <span class="container-support__info-msg">Được bảo mật 100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.9627063524754!2d105.80213515089562!3d21.58737877377764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352740beb94a91%3A0xd1bfaa365e97a4b!2zTmjDoCBow6BuZyAyNjg!5e0!3m2!1svi!2s!4v1677672296164!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>

<?php include "footernguoidung.php"; ?>