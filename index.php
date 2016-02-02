<? include ($_SERVER["DOCUMENT_ROOT"].'/sopdu/cover/index/header.php');?>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <div class="panel panel-danger" style="margin-top: 10%">
        <div class="panel-heading">О сайте</div>
        <div class="panel-body">
             <?
                $lines = file($_SERVER["DOCUMENT_ROOT"].'/content/index_page.html');
                    foreach($lines as $single_line)
                        echo $single_line . "<br />\n";
            ?>
        </div>
    </div>
</div><?/* ccc */?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <? include ($_SERVER["DOCUMENT_ROOT"].'/sopdu/modules/authorize/include.php');?>
</div>
<? include ($_SERVER["DOCUMENT_ROOT"].'/sopdu/cover/index/footer.php');?>
