<div class="control_frm" style="margin-top:25px;">
  <div class="bc">
    <ul id="breadcrumbs" class="breadcrumbs">
      <li><a href="index.php?com=news&act=man_danhmuc<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Danh mục</span></a></li>
      <li class="current"><a href="#" onclick="return false;">Thêm</a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<div class="control_frm" style="margin-top:0;">
  <div style="float:left;">
    <input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
    <a href="index.php?com=news&act=man_danhmuc<?php if($_REQUEST['p']!='') echo'&p='.$_REQUEST['p'];?><?php if($_REQUEST['type']!='') echo'&type='.$_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>
    <input type="button" class="blueB taoseo" value="Tạo seo" />
  </div>
</div>
<script type="text/javascript">
  function TreeFilterChanged2(){
    $('#validate').submit();
  }
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=news&act=save_danhmuc<?php if($_REQUEST['p']!='') echo'&p='.$_REQUEST['p'];?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
 <div class="widget">
    <?php if(in_array('hinhanh',$config['type'])) { ?>
      <div class="formRow ">
        <label>Tải hình ảnh:</label>
        <div class="formRight">
          <input type="file" id="file" name="file" />
          <img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
          <div class="note"> Width:<?= _width_thumb2 ?>px | Height:<?= _height_thumb2 ?>px<?=_format_duoihinh_l?> </div>
        </div>
        <div class="clear"></div>
      </div>
      <?php if($_GET['act']=='edit_danhmuc'){?>
        <div class="formRow ">
          <label>Hình Hiện Tại :</label>
          <div class="formRight">
            <div class="mt10"><img src="<?=_upload_tintuc.$item['photo']?>"  width="100px" alt="NO PHOTO" width="100" /></div>
          </div>
          <div class="clear"></div>
        </div>
      <?php } ?>
    <?php } ?>
</div>
<div class="widget">
     <ul class="tabs">
      <?php foreach ($config['lang'] as $key => $value) { ?>
          <li>
              <a href="#content_lang_<?=$key?>"><?=$value?></a>
          </li>
      <?php } ?>
  </ul>
  <?php foreach ($config['lang'] as $key => $value) {
    ?>
    <div id="content_lang_<?=$key?>" class="tab_content">
      <div class="formRow">
        <label>Tên bài viết</label>
        <div class="formRight">
          <input type="text" name="ten<?=$key?>" title="Nhập tên bài viết" id="ten<?=$key?>" class="tipS" value="<?=@$item['ten'.$key]?>" />
        </div>
        <div class="clear"></div>
      </div>
      <?php if ($key=='') {?>
                      <div class="formRow">
                          <label>Url</label>
                          <div class="formRight">
                              <input type="text" name="tenkhongdau" title="Nhập tên không dấu" id="tenkhongdau" 
                              class="tipS validate[required]" value="<?=@$item['tenkhongdau']?>" />
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="formRow">
                        <label>Đổi Url: <img src="./images/question-button.png" alt="Chọn loại" 
                          class="icon_que tipS" original-title=" "> </label>
                        <div class="formRight">
                            <input type="checkbox" name="checkurl" id="checkurl" value="0" 
                            <?=($checkurl==1)?'checked="checked"':''?> />
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php }?>
      <?php if(in_array('mota',$config['type'])) {
        $cls_ck = (in_array('mota',$config['ck'])) ? 'class="ck_editor"' : "";
        ?>

        <div class="formRow">
          <label><?= (!empty($config["title"]["mota"]))?$config["title"]["mota"]:"Mô tả ngắn" ?>:</label>
          <div class="formRight">
            <textarea <?php echo $cls_ck; ?> rows="8" cols="" title="Viết mô tả ngắn bài viết" class="tipS" name="mota<?=$key?>" id="mota<?=$key?>"><?=@$item['mota'.$key]?></textarea>
          </div>
          <div class="clear"></div>
        </div>
      <?php } ?>
      
    </div><!-- End content <?=$key?> -->
  <?php } ?>
</div>
<?php if(in_array('seo',$config['type'])) include _template."seo_tpl.php"; ?>
 <div class="widget">
  

  <?php if(in_array('noibat',$config['type'])) { ?>
  <div class="formRow">
    <label>Nổi bật : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
    <div class="formRight">
      <input type="checkbox" name="noibat" id="check1" <?=(!isset($item['noibat']) || $item['noibat']==1)?'checked="checked"':''?> />
    </div>
    <div class="clear"></div>
  </div>
<?php } ?>
  <div class="formRow">
    <label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
    <div class="formRight">
      <input type="checkbox" name="hienthi" id="check1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
      <label>Số thứ tự: </label>
      <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" original-title="Số thứ tự của danh mục, chỉ nhập số">
    </div>
    <div class="clear"></div>
  </div>
  <div class="formRow">
    <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
    <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
      <input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
      <a href="index.php?com=news&act=man_danhmuc<?php if($_REQUEST['p']!='') echo'&p='.$_REQUEST['p'];?><?php if($_REQUEST['type']!='') echo'&type='.$_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>
  </div>
<!-- End info -->

</div>
</form>