<?php include('head.php'); ?>
<body>
    <div id="wrapper">
       <?php include('nav.php'); ?> <!-- Nav -->
       <?php include('delpopup.php'); ?> <!-- Del PopUp Window -->
    <div id="page-wrapper">           
        <div class="container-fluid">
           <div class="userstitulo"><h3>Administrador de Productos</h3></div>
            <!-- Filters -->
                <div class="row filterdiv">
                    <form class="form-inline filterformdiv" role="form">
                        <div class="form-group col-lg-2 col-sm-12">
                        <label class="filtertit"><h4>Filtrar por</h4></label>
                        </div>
                        <div class="form-group inputsgral">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-folder-o fa-fw"></i></span>
                                <select class="form-control" name="category">
                                    <option>Categor&iacute;a...</option>
                                    <option>Camas</option>
                                    <option>Perros</option>
                                    <option>Sillas</option>
                                    <option>Mesas</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group inputsgral">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o fa-fw"></i></span>
                                <input type="password" class="form-control" placeholder="Nombre"/>
                            </div>
                        </div> 
                        <div class="form-group inputsgral">    
                            <div class="input-group">         
                                <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
                                <input type="email" class="form-control" placeholder="Precio"/>
                            </div>
                        </div>
                        <div class="form-group inputsgral">
                            <div class="input-group">         
                                <span class="input-group-addon"><i class="fa fa-qrcode fa-fw"></i></span>
                                <input type="email" class="form-control" placeholder="C&oacute;digo \ Modelo"/>
                            </div>
                        </div>
                        <div class="form-group inputsgral">
                        <button type="submit" class="btn btn-default itemsearchbtn"><i class="fa fa-search fa-fw"></i> Buscar</button>
                        </div>
                        <div class="form-group inputsgral">
                            <a href="nuevoitem.php" class="btn additembtn" role="button"><i class="fa fa-plus-square fa-fw"></i> Nuevo Producto</a>
                        </div>
                    </form>
                </div>
                <!-- Item (Square) -->
                <div class="row">
                    <div id="delelem1" class="col-md-2 col-sm-6 col-xs-12 col-centered itemdiv">
                        <div class="card">
                              <div>
                                  <img src="skin/images/products/cod1.jpg" alt="" class="img-responsive">
                              </div>
                                  <div class="col-md-12 itemtit">
                                      <p><b>Cama de 6 plazas - F128</b></p>
                                  </div>
                              <div class="card_content">
                                 <div class="col-md-12 itemtit">
                                      <p><b>Cama de 6 plazas</b></p>
                                  </div>
                                  <p>Descripci&oacute;n: Es una cama muy buena, blabla Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque temporibus labore, nostrum non</p>
                                  <div class="row itemrow2">
                                  <div class="col-md-4 col-xs-4">
                                      <p>Modelo<br><span class="itemtxtcolor"><b>F128</b></span></p>
                                  </div>
                                  <div class="col-md-4 col-xs-4">
                                      <p>Medida<br><span class="itemtxtcolor"><b>10x4 mt</b></span></p>
                                  </div>
                                  <div class="col-md-4 col-xs-4">
                                      <p>Precio<br><span class="itemtxtcolor"><b>$1280,50</b></span></p>
                                  </div>
                                  </div>
                                  <div class="col-md-12 itemicos">
                                        <ul>
                                            <li><a href=""><i class="fa fa-fw fa-pencil prodicoadd"></i></a></li>
                                            <li><a href="#modal1" id="1" class="deleteelem"><i class="fa fa-fw fa-trash"></i></a></li>
                                        </ul>                
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>  <!-- Item (Square) -->

                <!-- Alternative Visualization - Products -->
                <!-- Prod 1-->
                <div class="row prodfilediv"> 
                     <div class="col-md-1 col-sm-12 col-xs-12">
                        <img src="skin/images/products/cod3.jpg" class="img-responsive prodfileimg">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 colprod1">
                        <div class="colprodtit">
                        <p><b>Mueble de 6 puertas</b></p>
                        </div>    
                     </div>
                     <div class="col-md-2 col-sm-4 col-xs-4 colprod1">
                        <div class="colprod">
                        <p>Modelo<br></brt><b>F.128</b></p>
                        </div>  
                     </div>
                     <div class="col-md-2 col-sm-4 col-xs-4  colprod1">
                        <div class="colprod">
                        <p>Medida<br><b>10x4cm</b></p>
                        </div>
                     </div>
                     <div class="col-md-1 col-sm-4 col-xs-4  colprod1">
                        <div class="colprod">
                        <p><p>Precio<br><b>$128</b></p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-12 col-xs-12 colprod1">
                        <div class="colprod">
                        Es una cama muy buena. Sirve para domir. Tiene 4 patas. Almohada de madera. Todo de madera.
                        </div> 
                        </div>
                     <div class="col-md-1 col-sm-12 col-xs-12  colprod1">
                      <div class="colprodico">
                       <div class="prodicos">
                                <ul>
                                    <li><a href=""><i class="fa fa-fw fa-pencil prodicoadd"></i></a></li>
                                    <li><a href="#modal1"><i class="fa fa-fw fa-trash"></i></a></li>
                                </ul>                
                            </div>
                        </div>
                     </div>
                </div>
                <!-- End Prod 1-->
                <!-- End Alt Vis Prod-->
                <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<?php include('foot.php'); ?>
</body>
</html>