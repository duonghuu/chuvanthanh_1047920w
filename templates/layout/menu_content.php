<?php /* 
<i class="fas fa-home"></i> 
*/
?>
<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><?= _trangchu ?></a></li>
<?php 
$str='';
for($i=0;$i<count($danhmuc_cap1);$i++){
  if($link_id){
    $link1 = 'cho-thue/'.$danhmuc_cap1[$i]["tenkhongdau"].'-'.$danhmuc_cap1[$i]["id"];
  }else{
    $link1 = $danhmuc_cap1[$i]["tenkhongdau"];  
  }
  $str.='<li><a href="'.$link1.'">'.$danhmuc_cap1[$i]["ten"].'</a>';
  $danhmuc_cap2= get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_list where
   hienthi=1 and type='cho-thue' and id_danhmuc='".$danhmuc_cap1[$i]["id"]."' order by stt,id asc");
  if(count($danhmuc_cap2)>0){
    $str.='<ul class="sub-menu">';
    for($j=0;$j<count($danhmuc_cap2);$j++){
      if($link_id){
        $link2 = 'cho-thue/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].'/';
      }else{
        $link2 = $danhmuc_cap2[$j]["tenkhongdau"];  
      }
      $str.='<li><a href="'.$link2.'">'.$danhmuc_cap2[$j]["ten"].'</a></li>';
    }
    $str.='</ul>';
  }
  $str.='</li>';
}
echo $str;
 ?>
<?php /* 
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
  <?= _gioithieu ?></a></li> 
*/?>
<?php /* 
<li class="<?php if($com=='thuc-don') echo 'active'; ?>"><a href="thuc-don.html"><?= _thucdon ?></a>
  <?= for2cap('product_danhmuc','product_list','thuc-don','thuc-don','','/')?>
</li>  
*/?>
<li class="<?php if($com == 'tien-ich') echo 'active'; ?>"><a href="tien-ich.html"><?= _tiennghivanoithat ?></a></li>
<li class="<?php if($com == 'lien-he') echo 'active'; ?>"><a href="lien-he.html">
  <?= _lienhe ?></a></li>
<?php /* 
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>
  */?>