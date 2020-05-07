<?php foreach($danhmuc_cap1 as $kdm=>$vdm) { 
$clse = (($kdm+1)%2==0)?'even':'odd';
$link1 = "cho-thue/".$vdm["tenkhongdau"]."-".$vdm["id"];
$spnoibat=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
    ,type,gia,giakm from #_product where type='cho-thue' and id_danhmuc='".$vdm["id"]."'
     and noibat>0 and hienthi>0 order by stt asc limit 0,6");
  ?>
<div class="dmsp <?= $clse ?>">
  <div class="container">
    <div class="idx-tit">
      <h4><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h4>
    </div>
    <div class="product-grid">
      <?php foreach($spnoibat as $k=>$v) { 
        showProduct($v);
      } ?>
    </div>
    <div class="xemthem"><a href="<?= $link1 ?>"><?= _xemthem ?></a></div>
  </div>
</div>
  <?php } ?>
  <div class="dmsp">
    <div class="container">
      <div class="idx-tit">
        <h4><a href="tien-ich.html"><?= _tiennghivanoithat ?></a></h4>
      </div>
      <div class="product-grid">
        <?php foreach($tienich as $k=>$v) { ?>
          <div class="tienich-item"><a href="<?= get_url($v,'tien-ich') ?>">
              <figure><img src="<?= _upload_tintuc_l.$v["thumb"] ?>" alt="<?= $v["ten"] ?>"></figure>
              <h5><?= $v["ten"] ?></h5>
            </a></div>
        <?php } ?>
      </div>
      <div class="xemthem"><a href="<?= $link1 ?>"><?= _xemthem ?></a></div>
    </div>
  </div>