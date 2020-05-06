<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <marquee behavior="" direction=""><?= $company["slogan"] ?></marquee>
        <ul>
          <li><a href=""><?= _trangchu ?></a></li>
          <li><a href="gioi-thieu.html"><?= _gioithieu ?></a></li>
          <li><a href="tin-tuc.html"><?= _tintuc ?></a></li>
          <li><a href="lien-he.html"><?= _lienhe ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
        <a href="" class="logo" >
          <img src="<?= _upload_hinhanh_l.$logolang["thumb"] ?>" alt="logo">
        </a>
        <div id="search">
          <div class="my-search">
            <input type="text" class="form-control keyword" required="true" 
            onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
            onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
            onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
            <span onclick="onSearch($(this));return false;" class="btn_search">
              <i class="fas fa-search"></i></span>
            </div>
          </div>
        <div class="hd-hotline">
          <img src="images/hd-hotline.png" alt="hotline">
          <?php foreach ($hotline as $key => $value) { ?>
            <a href="tel:<?=preg_replace('/[^0-9]/','',$value['link']);?>">
                        <?= $value['link'] ?></a>
          <?php } ?>
        </div>
        <div class="hd-diachi">
          <img src="images/hd-diachi.png" alt="<?= _diachi ?>">
          <strong><?= _diachi ?>:</strong>
          <span><?= $company["diachi"] ?></span>
        </div>
      </div>
    </div>
  </div>
</header>