<div class="spnoibat">
  <div class="container">
    <div class="idx-tit text-center">
      <h4 class="text-uppercase"><a href="san-pham.html"><?= $txtbanchay["ten"] ?></a></h4>
    </div>
    <div class="idx-desc text-center"><?= $txtbanchay["mota"] ?></div>
    <div class="spnoibat-main">
      <?php foreach ($spnoibat as $key => $value) {
        showProduct($value, ["slick"=>true]);
      } ?>
    </div>
  </div>
</div>
<?php foreach ($dmsptieubieu as $kdm => $vdm) { 
  $link1 = "san-pham/".$vdm["tenkhongdau"]."-".$vdm["id"];
  $dmsp_list=get_result("select ten$lang as ten,tenkhongdau,id
      ,type from #_product_list where type='san-pham' and id_danhmuc='".$vdm["id"]."'
       and hienthi>0 order by stt asc");
  ?>
<div class="spdanhmuc">
  <div class="container">
    <div class="idx-tit text-center">
      <h4 class="text-uppercase"><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h4>
    </div>
    <?php if(!empty($dmsp_list)){ ?>
    <div class="d-flex mx-auto">
    <ul class="nav nav-pills mx-auto">
      <?php foreach ($dmsp_list as $kli => $vli) { 
        $iden = 'sp'.md5($vli["tenkhongdau"].$vli["id"]);
        ?>
      <li class="nav-item">
        <a class="nav-link <?= ($kli==0)?'active':'' ?>" data-toggle="pill" 
          href="#<?= $iden ?>"><?= $vli["ten"] ?></a>
      </li>
      <?php } ?>
    </ul>
    </div>
  <?php } ?>
    <!-- Tab panes -->
    <div class="tab-content">
      <?php foreach ($dmsp_list as $kli => $vli) { 
        $iden = 'sp'.md5($vli["tenkhongdau"].$vli["id"]);
        $spnoibat=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
            ,type,gia,giakm from #_product where type='san-pham' and id_list='".$vli["id"]."' 
            and tieubieu>0 and hienthi>0 order by stt asc");
        ?>
      <div class="tab-pane <?= ($kli==0)?'active':'fade' ?>" id="<?= $iden ?>">
        <div class="product-grid">
          <?php foreach ($spnoibat as $key => $value) {
            showProduct($value);
          } ?>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<div class="thuvien-video">
  <div class="container">
    <div class="thuvien-video-flex">
      <div class="thuvien">
        <div class="title"><a href="thu-vien.html">Album hình ảnh</a></div>
        <?php if(!empty($thuvien)){ ?>
        <div class="grid-container">
          <?php foreach ($thuvien as $key => $value) {
            $img_large = _upload_tintuc_l.$value["photo"];
            $img = _upload_tintuc_l.$value["thumb"];
          echo '<div class="gri'.($key+1).'">
              <a data-fancybox="gallery'.$value["id"].'" data-caption="'.$value["ten"].'"
               href="'.$img_large.'"><img src="'.$img.'" alt="'.$value["ten"].'"></a>
          </div>';
          } ?>
        </div>
      <?php } ?>
      <?php foreach ($thuvien as $key => $value) {
        $hinhthem = get_result("select id,ten$lang as ten,thumb,photo FROM #_hinhanh 
          where id_hinhanh='".$value['id']."' and type='".$value['type']."' 
          and hienthi=1 order by stt,id desc");
        foreach ($hinhthem as $k => $v) {
        $img_large = _upload_hinhthem_l.$v["photo"];
      echo '<a data-fancybox="gallery'.$value["id"].'" data-caption="'.$value["ten"].'"
           href="'.$img_large.'"></a>';
        }
      } ?>
      </div>
      <div class="video">
        <div class="title"><a href="video.html">Video clip</a></div>
        <div id="video-idx">
        </div>
        <select class="form-control" id="lstvideo" name="lstvideo">
          <option value="">Video ...</option>
          <?php foreach($video as $v) { ?>
          <option value="<?= getYoutubeIdFromUrl($v["link"]) ?>"><?= $v["ten"] ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>
</div>