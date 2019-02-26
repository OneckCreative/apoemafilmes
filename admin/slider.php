<?php
define('inc_access', TRUE);
include 'includes/header.php';
$pageMsg="";
//update table on submit
if (!empty($_POST)) {
$sliderUpdate = "UPDATE slider SET heading='".$_POST["heading"]."', h1='".$_POST["slider_h1"]."', h1span='".$_POST["slider_h1_span"]."', h2span='".$_POST["slider_h2_span"]."', h3span='".$_POST["slider_h3_span"]."', h2='".$_POST["slider_h2"]."', h3='".$_POST["slider_h3"]."', p1='".$_POST["slider_p1"]."', p2='".$_POST["slider_p2"]."', p3='".$_POST["slider_p3"]."', urllink='".$_POST["url_link"]."', botao='".$_POST["txt_botao"]."', urlbg='".$_POST["video_bg"]."'";       
mysqli_query($db_conn, $sliderUpdate);
$pageMsg="<div class='alert alert-success'>The slider section has been updated.<button type='button' class='close' data-dismiss='alert' onclick=\"window.location.href='slider.php'\">×</button></div>";
}

$sqlSlider= mysqli_query($db_conn, "SELECT heading, urlbg, h1, h1span, h2, h2span, h3, h3span, p1, p2, p3, botao, urllink FROM slider");
$row  = mysqli_fetch_array($sqlSlider);
$rowSlider  = mysqli_fetch_array($sqlSlider);
?>
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
<?php echo $row["heading"]?>
</h1> </div>
</div>
<div class="row">
<div class="col-lg-8">
<?php
if ($pageMsg !="") {
echo $pageMsg;
}
?>
<form role="sliderForm" method="post" action="">
<div class="form-group ">
<label class="control-label requiredField" for="heading"> T&iacute;tulo <span class="asteriskField">
*
</span> </label>
<input class="form-control" id="heading" name="heading" value="<?php echo $row['heading']; ?>" placeholder="T&iacute;tulo principal" type="text" /> </div>
<div class="form-group ">
<label class="control-label requiredField" for="video_bg"> V&iacute;deo background <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-vimeo-square">
</i> </div>
<input class="form-control" id="video_bg" name="video_bg" value="<?php echo $row['urlbg']; ?>" placeholder="Insira a ID do v&iacute;deo (Vimeo) Ex: 319459960" type="text" /> </div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="txt_botao"> Texto do bot&atilde;o <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-vimeo-square">
</i> </div>
<input class="form-control" id="txt_botao" name="txt_botao" value="<?php echo $row['botao']; ?>" placeholder="Insira o texto do botão" type="text" /> </div>
</div>
    
<div class="form-group ">
<label class="control-label requiredField" for="url_link"> V&iacute;deo do bot&atilde;o <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-vimeo-square">
</i> </div>
<input class="form-control" id="url_link" name="url_link" value="<?php echo $row['urllink']; ?>" placeholder="Insira a ID do v&iacute;deo (Vimeo) Ex: 319459960" type="text" /> </div>
</div>
    
<div class="form-group ">
<label class="control-label requiredField" for="slider_h1"> T&iacute;tulo 01 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-pencil-square">
</i> </div>
<input class="form-control" id="slider_h1" name="slider_h1" value="<?php echo $row['h1']; ?>" type="text" /> 
<input class="form-control" id="slider_h1_span" name="slider_h1_span" value="<?php echo $row['h1span']; ?>" type="text" /> 



</div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_p1"> Par&aacute;grafo 01 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-paragraph">
</i> </div>
<input class="form-control" id="slider_p1" name="slider_p1" value="<?php echo $row['p1']; ?>" type="text" /> </div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_h2"> T&iacute;tulo 02 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-pencil-square">
</i> </div>
<input class="form-control" id="slider_h2" name="slider_h2" value="<?php echo $row['h2']; ?>" type="text" />
<input class="form-control" id="slider_h1_span" name="slider_h2_span" value="<?php echo $row['h2span']; ?>" type="text" /> </div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_p2"> Par&aacute;grafo 02 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-paragraph">
</i> </div>
<input class="form-control" id="slider_p2" name="slider_p2" value="<?php echo $row['p2']; ?>" type="text" /> </div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_h3"> T&iacute;tulo 03 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-pencil-square">
</i> </div>
<input class="form-control" id="slider_h3" name="slider_h3" value="<?php echo $row['h3']; ?>" type="text" />
<input class="form-control" id="slider_h3_span" name="slider_h3_span" value="<?php echo $row['h3span']; ?>" type="text" /></div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_p3"> Par&aacute;grafo 03 <span class="asteriskField">
*
</span> </label>
<div class="input-group">
<div class="input-group-addon"> <i class="fa fa-paragraph">
</i> </div>
<input class="form-control" id="slider_p3" name="slider_p3" value="<?php echo $row['p3']; ?>" type="text" /> </div>
</div>
<div class="form-group ">
<label class="control-label requiredField" for="slider_p3"> <i>Todos campos com
<span class="asteriskField">
*
</span>
são de preenchimento obrigatório</i> </label>
</div>
<button type="submit" class="btn btn-default"><i class='fa fa-fw fa-save'></i>Salvar</button>
<button type="reset" class="btn btn-default"><i class='fa fa-fw fa-refresh'></i>Cancelar</button>
</form>
</div>
</div>
<?php
include 'includes/footer.php';
?>