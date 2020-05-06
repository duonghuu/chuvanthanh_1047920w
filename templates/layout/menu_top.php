<div class="nav-bg">
    <div class="container">
      <div class="dmspbox">
        <p class="tit text-uppercase "><i class="fas fa-bars"></i><?php echo _danhmucsanpham ?></p>
        <div class="dmsp-container " >
           <ul>
          <?php foreach($dmsp as $kdm => $vdm){
            $dmsp1=get_result("select ten$lang as ten,tenkhongdau,id,thumb,photo
      ,type from #_product_list where type='san-pham' and id_danhmuc='".$vdm["id"]."' and hienthi>0 order by stt asc");
            $link1 = "san-pham/".$vdm["tenkhongdau"]."-".$vdm["id"];
          ?>
          <li><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a>
            <?php 
            if(!empty($dmsp1)){ echo '<ul>';
            foreach($dmsp1 as $k => $v){
              $link2 = "san-pham/".$v["tenkhongdau"]."-".$v["id"]."/";
             ?>
            <li><a href="<?= $link2 ?>"><?= $v["ten"] ?></a></li>
          <?php } echo '</ul>'; } ?>
          </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    <div class="main-nav">
      <ul >
        <?php //include _template."layout/menu_content.php";?>
        <?php foreach ($dmsptieubieu as $key => $value) { 
            if($key>4) break;
          
          $link1 = "san-pham/".$value["tenkhongdau"]."-".$value["id"];
          ?>
          <li><a href="<?= $link1 ?>"><?= $value["ten"] ?></a></li>
        <?php } ?>
      </ul>
      <?php /* 
      <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button>
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
            
      */?>
    <?php /*
         <div id="myOverlay" class="overlay" style="display: none;">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span> 
        <div class="overlay-content"><input type="text" autocomplete="off" placeholder="Nhập từ khóa cần tìm"
         class="keyword" required="true" placeholder="<?=_nhaptukhoatimkiem?>..." 
        onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
        onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
        <button type="button" onclick="onSearch($(this));return false;"><i class="fas fa-search"></i>
        </button></div> </div> 

    */?>
  </div>
  </div>
  </div>
<?php /* 
<script> function openSearch() {document.getElementById("myOverlay").style.display = "block"; } function closeSearch() {document.getElementById("myOverlay").style.display = "none"; } </script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('.timkiem_icon').click(function(event) {
      if($('#search').hasClass('hien')){
        $('#search').removeClass('hien');
      }else{
        $('#search').addClass('hien');
      }
    });
  });
</script>
*/?>