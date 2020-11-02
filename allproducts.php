<?php
    include 'include/DBconnection.php';
    
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Smeg Libya | Major appliances</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" href="css/dinfont.css"> 
<link rel="shortcut icon" href="logo/faviconsmeg.png">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader">
  <div class="spinner-load">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div>



<!-- header start-->
<?php include('include/heading.php');?>
<!-- header end -->


<section class="header_layout2 breadcrumbPadding">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <ul class="breadcrumb">
              <li><a href="index.html">الرئيسية</a></li>
              <li>منتجات</li>
              <li class="active">منتجات رئيسية</li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
</section>
<!-- black section -->
<section>
    <div class="container blackSection">
        <h1 class="blackSectionTitle">أفــــران</h1>
        <h6 class="blackSectionDesc">تقدم Smeg مجموعة واسعة من الأفران المدمجة ، المصممة والمنتجة في إيطاليا ، مع العديد من الوظائف المثالية لأي نوع من المأكولات ، من البيتزا إلى الحلويات الأكثر دقة. تختلف في الحجم والتشطيب ، وهي متوفرة بثمانية أشكال جمالية حصرية يمكن تنسيقها مع أجهزة Smeg المدمجة الأخرى: المواقد ، والشفاطات ، وآلات القهوة ، والأدراج ، و المبردات.</h6>
    </div>
</section>
<!-- products section -->
<section>
    <div class="container-fluid allProductsListBG">
        <div class="container allProductsList" style="direction: rtl;">
            <div class="row productsContent">
                <div class="col-sm-2">
                        <h1 class="filterTitle">الفلاتر</h1>
                        <div class="filters" id="product_filters">
                                    <div class="filters__item">
                                        <div class="filters__item__header" data-attr="NEW_AESTHETICS">
                                            + خطوط جمالية
                                        </div>

                                        <div class="filters__item__content" data-attr="NEW_AESTHETICS" id="filter_index_4">

                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_2" type="checkbox" name="Classica" value="NEW_AESTHETICS_2" data-filter="NEW_AESTHETICS" data-filtervalue="2" id="Classica">

                                                        <label class="form-check-label" for="Classica">كلاسيكا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_3" type="checkbox" name="Coloniale" value="NEW_AESTHETICS_3" data-filter="NEW_AESTHETICS" data-filtervalue="3" id="Coloniale">

                                                        <label class="form-check-label" for="Coloniale">كولونيال</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_4" type="checkbox" name="Contemporanea" value="NEW_AESTHETICS_4" data-filter="NEW_AESTHETICS" data-filtervalue="4" id="Contemporanea">

                                                        <label class="form-check-label" for="Contemporanea">Contemporanea</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_5" type="checkbox" name="Cortina" value="NEW_AESTHETICS_5" data-filter="NEW_AESTHETICS" data-filtervalue="5" id="Cortina">

                                                        <label class="form-check-label" for="Cortina">Cortina</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_6" type="checkbox" name="Dolce Stil Novo" value="NEW_AESTHETICS_6" data-filter="NEW_AESTHETICS" data-filtervalue="6" id="Dolce Stil Novo">

                                                        <label class="form-check-label" for="Dolce Stil Novo">Dolce Stil Novo</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_7" type="checkbox" name="Linea" value="NEW_AESTHETICS_7" data-filter="NEW_AESTHETICS" data-filtervalue="7" id="Linea">

                                                        <label class="form-check-label" for="Linea">Linea</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_9" type="checkbox" name="Piano Design" value="NEW_AESTHETICS_9" data-filter="NEW_AESTHETICS" data-filtervalue="9" id="Piano Design">

                                                        <label class="form-check-label" for="Piano Design">Piano Design</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_11" type="checkbox" name="Selezione" value="NEW_AESTHETICS_11" data-filter="NEW_AESTHETICS" data-filtervalue="11" id="Selezione">

                                                        <label class="form-check-label" for="Selezione">Selezione</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_12" type="checkbox" name="Victoria" value="NEW_AESTHETICS_12" data-filter="NEW_AESTHETICS" data-filtervalue="12" id="Victoria">

                                                        <label class="form-check-label" for="Victoria">Victoria</label>
                                                    </div>
                                        </div>
                                    </div>
                        </div>
                </div>
                <div class="col-sm-10 " id="product-list-container">
                    <div class="row products-list">
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven1.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | Black</div>
                                </a>
                            </div>
                        </div>
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven2.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | Silver</div>
                                </a>
                            </div>
                        </div>
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven3.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | White</div>
                                </a>
                            </div>
                        </div>
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven4.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | Light Black</div>
                                </a>
                            </div>
                        </div>
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven5.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | Dark Black</div>
                                </a>
                            </div>
                        </div>
                        <div id="SFP6604PNRE" class="listItem col-12 col-sm-6 col-lg-4   
                                              product-preview  FAM_1162 CATEGORY_1 COOKING_TYPE1_3 ENERGY_INPUT_3 NEW_COLOR_19 NEW_AESTHETICS_6 COMP_FIN_11 RECIPES_PERS_1 FUN_CLEAN_3/1 SMARTC_1 MAT_CAVITY1_2 SHELVE_N1_5 CLEANING_INTEGRATED1_4 SOFT_CLOSE_SYSTEM_1 N_CAVITY_1 ENERGY_CLASS1_EU_3 USE_VOL_CAVITY1_27 GROSS_VOL_CAVITY1_5 VOLTAGE_220-240
                                            ">
                            <div class="product-content">
                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                    <div class="product-preview__gallery">
                                        <img src="images/ovens/oven6.jpg" alt="SFP6604PNRE" style="width:100%">
                                    </div>
                                    <div class="Productname">SFP6604PNRE</div>
                                    <div class="product-preview__description">Oven | Dolce Stil Novo | White</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footing start-->
<?php include('include/footing.php');?>
<!-- footing end -->
    

<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/kinetic.js"></script>
<script src="js/jquery.final-countdown.js"></script>

<script src="js/functions.js"></script>


</body>
</html>