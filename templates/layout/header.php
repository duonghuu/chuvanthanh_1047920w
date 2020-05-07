<header class="hd-bg" style="background-image: url('images/hd-bg.jpg')">
  <div class="hd-top">
    <div class="container">
      <div class="d-flex">
        <div class="hd-top__left">
          <p><i class="fas fa-map-marker-alt"></i><?= _diachi ?>: <?= $company["diachi"] ?></p>
          <p><i class="fas fa-envelope"></i>Email: <?= $company["email"] ?></p>
        </div>
        <div id="lang">
            <a href="index.php?com=ngonngu&lang=en" title="English">
              <img src="images/en.png" alt="English" /> </a>
            <a href="index.php?com=ngonngu&lang=" title="Việt Nam">
              <img src="images/vi.png" alt="Việt Nam" /></a>
        </div><!--END #lang-->
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="d-flex">
        <a href="" class="hd-bot__left" >
          <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
          <div>
            <h5><?= $logolang["ten"] ?></h5>
            <p><?= $logolang["mota"] ?></p>
          </div>
        </a>
        <div class="hd-hotline">
          <img src="images/hd-hotline.png" alt="hotline">
          <div>
            <span>Hotline 24/7:</span>
            <a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
                        <?= $company['dienthoai'] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>