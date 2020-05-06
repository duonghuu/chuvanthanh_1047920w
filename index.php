<?php
session_start();
$session=session_id();

@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './libraries/');
include_once _lib."breadcrumb.php";
$bread = new breadcrumb();
include_once _lib."Mobile_Detect.php";
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
include_once _lib."config.php";
include_once _lib."constant.php";
require_once _source."lang$lang.php";
$bread->add(_trangchu,'//'.$config_url);
include_once _lib."functions.php";
include_once _lib."functions_for.php";
include_once _lib."class.database.php";
// if (version_compare(phpversion(), '7.0.0', '<')) include_once _lib."class.database.php";
// else include_once _lib."class.database7.3.php"; 
include_once _lib."functions_user.php";
include_once _lib."functions_giohang.php";
include_once _lib."file_requick.php";
include_once _source."template.php";
include_once _source."counter.php";
$_SESSION['dong'] = lay_banner('dong');
?>
<!doctype html>
<html lang="<?php if($lang=='')echo 'vi';else echo $lang;?>">
<head itemscope itemtype="https://schema.org/WebSite">
    <base href="//<?=$config_url?>/" />
    <?php include _template."layout/seoweb.php";?>
    <?php include _template."layout/css.php";?>
    <?php /* <style><?php echo file_get_contents('http://'.$config_url.'/css_optimize.php');?></style> */?>
    <?= $company['codethem'] ?>
</head>
<?php //include _template."layout/background.php";?>
<body class="cls<?= $template ?>" <?=$str_background?> >
    <?php /* <div class="wap_load"><div class="cssload-thecube"><div class="cssload-cube cssload-c1"></div>
    <div class="cssload-cube cssload-c2"></div><div class="cssload-cube cssload-c4"></div>
    <div class="cssload-cube cssload-c3"></div></div></div> */
    if($template != "checkouts"){
    ?>
    <div id="wapper"  >
        <section class="head-main">
            <?php 
            include _template."layout/header.php";
            include _template."layout/menu_top.php";
            // include _template."layout/valak_menu.php";
            include _template."layout/slider.php";
            if($source != "index") echo $bread->display();
            ?>
            <div class="main_content <?php if($source!="index") echo 'container';  ?>">
                <?php if($template == 'productxx') {  ?>
                    <div class="clearfix">
                        <div class="left">
                            <?php include _template."layout/left.php";?>
                        </div><!---END .left-->
                        <div class="right">
                            <?php include _template.$template."_tpl.php"; ?>
                        </div><!---END .right-->
                    </div>
                <?php }else{ ?>
                    <?php include _template.$template."_tpl.php"; ?>
                <?php } ?>
            </div><!---END .main_content-->
        </section>
        <?php 
        if($source=="index") include _template."layout/doitac.php";
        include _template."layout/footer.php";
        ?>
    </div><!---END .wapper-->
    <?php 
    // include _template."layout/pupop.php";
    //include _template."layout/facebook.php";
    //include _template."layout/phone.php";
    // include _template."layout/chat_facebook.php";
    // include _template."layout/cart_popup.php";
    // if($deviceType=="computer") include _template."layout/phone3.php";
    // include _template."layout/phone2.php";
    include _template."layout/phone5.php";
}else{
    include _template.$template."_tpl.php";
}

    include _template."layout/js.php";
    include _template."layout/chat_facebook.php";
    ?>

    <div class="wrap-yh">
        <div class="yh-tit"><img src="images/media.png" alt="F"/></div>
        <div class="yh-box">
            
    <div class="lienhekhac1">
        



    <div class="bao_form1">
        <div class="form_d1k">
            <div class="ten_fo1">Tư vấn</div>
            <form method="post" name="tung1" class="tung1" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="fpu3[ten]" placeholder="<?= _hovaten ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="fpu3[dienthoai]" placeholder="<?= _dienthoai ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="fpu3[email]" placeholder="<?= _email ?>" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="fpu3[note]" placeholder="<?= _noidung ?>" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-2">Gửi</button>
                <input type="hidden" value="1" name="rp3val">
                <input type="hidden" value="<?= time() ?>" name="rp3token">
                <input type="hidden" name="recaptcha2" id="recaptcha2">
                <?php /* 
                <div class="item_dangky1"><input name="ten_dangky1" type="text" id="ten_dangky1" placeholder="Họ tên" /><div class="clear"></div></div>
                                <div class="item_dangky1"><input name="dienthoai_dangky1" type="text" id="dienthoai_dangky1" placeholder="Điện thoại" /><div class="clear"></div></div>
                                <div class="item_dangky1"><input name="email_dangky1" type="text" id="email_dangky1" placeholder="Emai" /><div class="clear"></div></div>
                                <div class="item_dangky1"><textarea name="noidung_dangky1" class="in_k" placeholder="Nội dung" ></textarea><div class="clear"></div></div>
                                <div class="item_dangky_k1" >
                                    <input type="button" value="Gửi" class="click_aj1" style="text-align: center;" />
                                </div> 
                */?>
            </form>
        </div>
                <div class="clear"></div>
    </div>



    </div>        

    <?php /* 
    <script type="text/javascript">
            $(document).ready(function(e) {
                $('.click_aj1').click(function(){
                    
                    if(isEmpty($('#ten_dangky1').val(), "Xin nhập Họ tên"))
                    {
                        $('#ten_dangky1').focus();
                        return false;
                    }
                    
                    if(isEmpty($('#dienthoai_dangky1').val(), "Xin nhập Số điện thoại"))
                    {
                        $('#dienthoai_dangky1').focus();
                        return false;
                    }
                    if(isPhone($('#dienthoai_dangky1').val(), "Số điện thoại chưa hợp lệ"))
                    {
                        $('#dienthoai_dangky1').focus();
                        return false;
                    }
                    if(isEmpty($('#email_dangky1').val(), "Email không hợp lệ"))
                    {
                        $('#email_dangky1').focus();
                        return false;
                    }
                    if(isEmail($('#email_dangky1').val(), "Email không hợp lệ"))
                    {
                        $('#email_dangky1').focus();
                        return false;
                    }
                    if(isEmpty($('#capcha1').val(), "Nhập mã bảo về"))
                    {
                        $('#capcha1').focus();
                        return false;
                    }
                    
                    
                    $.ajax({
                        type:'post',
                        url:$(".tung1").attr('action'),
                        data:$(".tung1").serialize(),
                        dataType:'json',
                        beforeSend: function() {
                            $('.thongbao').html('<p><img src="images/loader_p.gif"></p>');     
                        },
                        error: function(){
                            add_popup('Hệ thống bị lỗi, xin quý khách chuyển sang mục khác.');
                        },
                        success:function(kq){
                            add_popup(kq.thongbao);
                                
                        }
                    });
                });    
            });
        </script> 
    */?>

</div>
        <div style="clear:both"></div>
    </div>
    <?=$company['codethem2']?>
</body>
</html>