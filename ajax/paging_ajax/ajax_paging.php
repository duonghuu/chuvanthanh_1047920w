<?php
    include ("../ajax_config.php");
    include_once "class_paging_ajax.php";
    $page = (int)$_POST["page"];
    $loai = (int)$_POST["id_danhmuc"];
    if(!empty($page))
    {
        $paging = new paging_ajax();

        $paging->class_pagination = "pagination";
        $paging->class_active = "active";
        $paging->class_inactive = "inactive";
        $paging->class_go_button = "go_button";
        $paging->class_text_total = "total";
        $paging->class_txt_goto = "txt_go_button";
        $paging->per_page = 6;
        $paging->page = $_POST["page"];
        $paging->text_sql = "select id,ten$lang as ten,tenkhongdau,photo,type,thumb,giakm,gia,masp,spmoi
         from table_product where type='san-pham' and hienthi=1 and tieubieu>0 ";
        if($loai>0){
            $paging->text_sql .= " and id_list='".$loai."' ";    
        }
        $paging->text_sql .= " order by stt asc";
        $product = $paging->GetResult();
        $message = '';
        $paging->data = "".$message."";
    }
    $result["spthem"] = "";
    $result["morebtn"] = "";
?>

<?php foreach($product as $key=>$v){    
    $link = get_url($v, $v["type"]);
    $imgurl='<img data-src="'._upload_sanpham_l.$v["thumb"].'" alt="'.$v["ten"].
    '" class="lazy" />';
    $slickdiv=$slickenddiv="";
    $wowclass='';
    $result["spthem"] .= $slickdiv.'<div class="pr-box name '.$wowclass.'" >
    <article>
            <a href="'.$link.'" class="imgsp zoom_hinh">'.$imgurl.$cls_moi.$cls_banchay.
            $giaspgiam.'</a> 
        <div class="info">
        <h3><a href="'.$link.'">'.$v["ten"].'</a></h3>
        </div>
    </article></div>'.$slickenddiv;
} ?>
<?php /* <?=$paging->Load(); ?> */?>
<?php 
$result["morebtn"] = $paging->Load();
echo json_encode($result);
 ?>
