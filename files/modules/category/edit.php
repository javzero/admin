<?php
    include("../../includes/inc.main.php");
    $ID = $_GET['id'];
    $Edit  = new Category($ID);
    $EditData  = $Edit->getData();

    $Title = "Modificar categoría '".$EditData['title']."'";

    $Head->setTitle("Modificar Categoría");
    $Head->setHead();
?>
<body>
  <div id="wrapper">
    <?php include('../../includes/inc.nav.php'); ?> <!-- Nav -->
      <?php echo insertElement("hidden","action",'update'); ?>
      <?php echo insertElement("hidden","id",$ID); ?>
        <div class="container additemdiv animated fadeIn">
          <div class="col-sm-12 form-box formitems">
            <div class="additemtit">
              <div class="maintitle"><h4 class="maintitletxt">Agregar Nueva Categoría</h4></div>
            </div>
            <!-- Inputs -->
            <div id="newInputs">
              <div class="row">
                <div class="col-md-6 form-group animated bounceInLeft">
                  <?php echo insertElement('text','title',$EditData['title'],'form-first-name form-controlusers','placeholder="Nombre de la categoría" tabindex="1" validateEmpty="El nombre es obligatorio." validateMinLength="2/El nombre debe contener 2 caracteres como mínimo." validateFromFile="process.php/La categoría ya existe/actualtitle:='.$EditData['title'].'/action:=validate"'); ?>
                </div>
                <div class="col-md-6 form-group animated bounceInRight">
                  <?php echo insertElement('select','parent',$EditData['parent_id'],'form-controlusers','tabindex="2"',$DB->fetchAssoc("category","category_id,title","status='A'","title"),'0','Categoría Principal'); ?>
                </div>
              </div>
              
              <div class="col-md-6 animated bounceInRight switchuser">
                <?php $Checked = $EditData['status']=='A'? 'checked="checked"':''; ?>
                <div class="col-md-12 userstatustit">Estado</div>
                <div class="col-md-12"><input type="checkbox" class="centered" name="status" id="status" data-on-text="Activa" data-off-text="Inactiva" data-size="large" data-label-width="auto" <?php echo $Checked; ?>>
                </div>                                     
              </div>
            </div>
            <!-- /Inputs -->
            <!-- Imgs To select -->
            <div id="imgsToSelect" class="row ">
              <div class="row selectImgTitle">Elija una im&aacute;gen</div>
              <div class="row imgCatalogue">
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/users/mas.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/genericproduct.png" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod1.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod2.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod3.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod4.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod2.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <img src="../../../skin/images/products/cod1.jpg" alt="" class="img-responsive thumbimgadd">
                </div>
              </div>
            </div>
            <!-- /Imgs To select -->

            
            
            <div class="col-md-6 animated bounceInRight selectImgDiv centrarbtn">
              <button id="selectImgBtn" class="btn masterbtn">Seleccionar Im&aacute;gen</button>                               
            </div>
            <div class="col-md-12 animated bounceInRight cancelImgDiv centrarbtn">
              <button id="cancelSelectImgBtn" class="btn closeBtn"><i class="fa fa-times-circle"></i></button>                           
            </div>             

         

          </div> 
        </div>  
        <!-- Create User Button Div  -->
        <div class="container animated fadeInUp donediv">
             <div class="form-group">
               <a href="#" class="btn masterbtn" role="button" id="create"><i class="fa fa-check-square-o fa-fw"></i> Modificar Categoría</a>
             </div>
        </div>
        <!-- /Create User Button Div  -->                   
  </div>
<!-- /#wrapper -->

<?php $Foot->setFoot(); ?>