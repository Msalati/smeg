<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    include("../include/DBconnection.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>smeg Dashboard | Manage Products</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Aslam Symbol.svg">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet"> 


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body dir="RTL">

    <div class="main-wrapper">


        <!-- Header Section Start -->
         <!-- Header Section Start -->
         <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <div class="col-2"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-8">
                        <a href="index.php">
                            <img src="../logo/Smeg-Logo-06.svg" alt="" width="185">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-2">
                        <div class="row justify-content-between align-items-center">                            

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">


                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="ti-angle-down dropdownarrow"></span>
                                        <span>
                                            <img src="../logo/user.png" alt="">
                                            </span>
                                            <span class="name"> محمد يوسف</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">Mohammed Yousef</a></h5>
                                                <a class="mail" href="#">m.yousef@smeg.ly</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="login.php"><i class="zmdi zmdi-lock-open"></i>Sign out</a></li>
                                                </ul>
                                              
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="index.php"><i class="ti-home"></i> <span>لوحة التحكم</span></a>
                        </li>                          
                        <li><a href="manage-products.php"><i class="ti-shopping-cart"></i> <span>إدارة المنتجات</span></a>
                        </li>
                        <li><a href="manage-brands.php"><i class="ti-layers"></i> <span>إدارة الأصناف</span></a>
                        </li>
                        <li><a href="#"><i class="ti-stamp"></i> <span>ملفي الشخصي</span></a>
                        </li>
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>لوحة التحكم <span> / إدارة المنتجات</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->


            <!-- modal for adding products -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addingModal">
            +إضافة منتج
            </button>

            <!-- Add Modal -->
            <div class="modal" id="addingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة منتج</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-top: 30px;">
                    <form>
                        <label>إسم المنتج</label>
                        <input id="prod_name" product_name="text" class="form-control" type="text" placeholder="إسم المنتج">
                        <label>الخط الجمالي</label>
                        <select class="form-control" id="aesline">
                            <?php
                                $sql = "SELECT * from `aes_lines`";
                                foreach ($pdo->query($sql) as $row) { ?>
                                    <option id="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                            <?php }?>
                        </select>
                        <label>النوع</label>
                        <select class="form-control" id="category">
                            <?php
                                    $sql = "SELECT sub_cat.name, sub_cat.sub_cat_id'id' FROM sub_cat"; //giving each option a value id
                                    foreach ($pdo->query($sql) as $row) { ?>
                                    <option id="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                                <?php }?>
                        </select>
                        <label>لون المنتج</label>
                        <input id="color" class="form-control" type="text" placeholder="لون المنتج">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">صورة المنتج</label>
                            <input id="img_url" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                     <!-- passing all form values into addItem function to handle the values and add them to the table -->
                    <button type="submit" 
                    onclick="addItem($('#prod_name').val() , $('#aesline').children('option:selected').attr('id') , $('#category').children('option:selected').attr('id'), $('#color').val(), $('#img_url').val(), $('#aesline').children('option:selected').val(),$('#category').children('option:selected').val());"
                     class="btn btn-primary" data-dismiss="modal">إضافة منتج</button>
                </div>
                </div>
            </div>
            </div>
            <div class="row">

                <!--Manage Product List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>رقم المنتج</th>
                                    <th>إسم المنتج</th>
                                    <th>الخط الجمالي</th>
                                    <th>الصنف</th>
                                    <th>اللون</th>
                                    <th>تعديل/حذف</th>
                                </tr>
                            </thead>
                            <tbody id="products_table">
                                <?php
                                    $sql = "SELECT \n"

                                    . "products.product_id'id',\n"
                                
                                    . "products.name'prod_name',\n"
                                
                                    . "aes_lines.name'aes_name',\n"
                                
                                    . "aes_lines.id'aes_id',\n"
                                
                                    . "\n"
                                
                                    . "sub_cat.sub_cat_id'cat_id',\n"
                                
                                    . "sub_cat.name'cat_name',\n"
                                
                                    . "\n"
                                
                                    . "products.color'color',\n"
                                
                                    . "products.img_url'img_url'\n"
                                
                                    . "\n"
                                
                                    . "FROM products\n"
                                
                                    . "\n"
                                
                                    . "INNER JOIN sub_cat ON products.sub_cat_id = sub_cat.sub_cat_id\n"
                                
                                    . "\n"
                                
                                    . "INNER JOIN aes_lines ON products.line_id = aes_lines.id";

                                    foreach ($pdo->query($sql) as $row) { ?>
                                    <tr id="<?php echo $row['id']; ?>">
                                        <td><?php echo $row['id'];  ?></td>
                                        <td><a href="#"><?php echo $row['prod_name']; ?></a></td>
                                        <td><?php echo $row['aes_name'];  ?></td>
                                        <td><?php echo $row['cat_name'];  ?></td>
                                        <td><?php echo $row['color'];  ?></td>
                                        <td>
                                            <div class="table-action-buttons">
                                                <a id="<?php echo $row['id'];?>" prod_id="<?php echo $row['id']; ?>"
                                                                                 prod_name="<?php echo $row['prod_name'];?>"
                                                                                 aes_id="<?php echo $row['aes_id'];  ?>"
                                                                                 cat_id="<?php echo $row['cat_id'];  ?>"
                                                                                 color="<?php echo $row['color'];  ?>"
                                                                                 img_url="<?php echo $row['img_url']; ?>"
                                                                                 cat_name="<?php echo $row['cat_name']; ?>"
                                                                                 line_name="<?php echo $row['aes_name']; ?>"
                                                onclick=" idToBeEdited = 
                                                                    editClicked(this.getAttribute('prod_id'),
                                                                                this.getAttribute('prod_name'),
                                                                                this.getAttribute('aes_id'),
                                                                                this.getAttribute('cat_id'),
                                                                                this.getAttribute('color'),
                                                                                this.getAttribute('img_url'),
                                                                                this.getAttribute('cat_name'),
                                                                                this.getAttribute('line_name')
                                                                            );"
                                                data-toggle="modal" data-target="#editingModal" class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                                
                                                
                                                <!-- edit from -->
                                                <a id="<?php echo $row['id'];?>" onclick="deleteFrom(this.id)" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></a>    
                                            </div>
                                        </td>                                      
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Manage Product List End-->

                <!-- Edit Product Modal -->
                <div class="modal" id="editingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل منتج</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-top: 30px;">
                    <form>
                        <label>إسم المنتج</label>
                        <input id="prod_name" value="" product_name="text" class="form-control" type="text" placeholder="إسم المنتج">
                        <label>الخط الجمالي</label>
                        <select class="form-control" id="aeslineEdit">
                            <?php
                                $sql = "SELECT * from `aes_lines`";
                                foreach ($pdo->query($sql) as $row) { ?>
                                    <option id="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                            <?php }?>
                        </select>
                        <label>النوع</label>
                        <select class="form-control" id="categoryEdit">
                            <?php
                                    $sql = "SELECT sub_cat.name, sub_cat.sub_cat_id'id' FROM sub_cat"; //giving each option a value id
                                    foreach ($pdo->query($sql) as $row) { ?>
                                    <option id="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                                <?php }?>
                        </select>
                        <label>لون المنتج</label>
                        <input id="color" class="form-control" type="text" placeholder="لون المنتج">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">صورة المنتج</label>
                            <input id="img_urlEdit" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                     <!-- passing all form values into addItem function to handle the values and add them to the table -->
                    <button type="submit" 
                    onclick="editFrom(idToBeEdited,$('#editingModal #prod_name').val() , $('#aeslineEdit').children('option:selected').attr('id') , $('#categoryEdit').children('option:selected').attr('id'), $('#editingModal #color').val(), $('#editingModal #img_url').val(), $('#aeslineEdit').children('option:selected').val(),$('#categoryEdit').children('option:selected').val());"
                     class="btn btn-primary" data-dismiss="modal">تعديل منتج</button>
                </div>
                </div>
            </div>
            </div>
            <!-- MODAL END -->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">
                <div class="footer-copyright text-center">
                    <p class="text-body-light">2020 &copy; All rights reserverd to Almotamiza Co.</p>
                </div>
            </div>
        </div><!-- Footer Section End -->


    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        let idToBeEdited; // a varaible that is a container for updating values 
        
        function deleteFrom(id){//this functions passes the php id from the database
            event.preventDefault();
            swal({
                title: "هل أنت متأكد؟",
                text: " بعدما تقوم بالمسح لن يمكنك إسترداد الملف!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                    if(willDelete)
                    {
                        $.ajax({
                            method: 'POST',
                            data: {'delete':true, 'id':id},
                            url: '../admin/DBalt/deleteProduct.php',
                            success: function(data)
                            {

                            }
                        });
                        $("tr[id ="+id+"]").remove();
                        swal("تم مسح الملف!", {
                                icon: "success",
                        });
                    }
                    else 
                    {
                    swal("ملفك بإمان");
                    }
            });
        }
        function addItem(product_name, line_id , cat_id, color, img_url, line_name, cat_name) //to add a product to the product list
        {
            $.ajax({
                method: 'POST',
                data:{'add':true,
                 'prod_name':product_name,
                  'line_id':line_id,
                  'cat_id':cat_id,
                  'color':color,
                  'img_url':img_url
                   },
                url: '../admin/DBalt/addProduct.php',
                success: function(data){
                    swal("تمت الإضافة بنجاح!", {
                                icon: "success",
                        });
                    
                     $("#products_table").append("<tr id="+data+">"+
                     "<td>"+data+"</td>"+
                     "<td><a href='#'>"+product_name+"</a></td>"+
                     "<td>"+line_name+"</td>"+
                     "<td>"+cat_name+"</td>"+
                     "<td>"+color+"</td>"+
                     "<td>"+
                     "<div class='table-action-buttons'>"+
                     "<a id="+data+" prod_id="+data+" prod_name="+product_name+" "+
                     "aes_id="+line_id+" " +
                     "cat_id="+cat_id+" " +
                     "color="+color+" "+
                     "img_url="+img_url+" "+
                     "cat_name="+cat_name+" " +
                     "line_name="+line_name+" "+
                     "onclick=' idToBeEdited = editClicked(this.getAttribute(`prod_id`),this.getAttribute(`prod_name`),this.getAttribute(`aes_id`),this.getAttribute(`cat_id`),this.getAttribute(`color`),this.getAttribute(`img_url`),this.getAttribute(`cat_name`),this.getAttribute(`line_name`)); '"+
                                                "data-toggle='modal' data-target='#editingModal' class='edit button button-box button-xs button-info' data-toggle='modal' data-target='#editModal'><i class='zmdi zmdi-edit'></i></a>"+" "+
                     "<a id="+data+" onclick='deleteFrom(this.id)' class='delete button button-box button-xs button-danger'><i class='zmdi zmdi-delete'></i></a>"+
                     "</div>"+
                     "</td>"+
                     "</tr>");
                }
            });
        }
        //edit item but you have to
        function editFrom(id, prod_name, line_id, cat_id, color, img_url, line_name, cat_name)
        {
            $.ajax({
                            method: 'POST',
                            data: {'edit':true,
                             'id': id,
                              'prod_name': prod_name,
                              'line_id': line_id,
                              'cat_id': cat_id,
                              'color': color,
                              'img_url':img_url
                              },
                            url: '../admin/DBalt/editProduct.php',
                            success: function(data){
                                swal("تم تعديل الملف!", {
                                icon: "success",
                                });
                                //$("#"+id+"name").text();
                                
                            },
                            error: function(data){
                                swal("something went wrong!", {
                                icon: "warning",
                                });
                            }
                        });
        }
        //edit clicked function fills in the modal with the existing data
        function editClicked(prod_id, product_name, line_id , cat_id, color, img_url, cat_name, line_name) //to edit a product fr0m the product list
        {
            console.log(prod_id, product_name, line_id , cat_id, color, img_url);
            $('#editingModal #prod_name').val(product_name);
            $('#editingModal #color').val(color);
            $("#aeslineEdit").val(line_name);
            $("#categoryEdit").val(cat_name);
            return prod_id;
            //work here !!!



            /*$.ajax({
                method: 'POST',
                data:{'add':true,
                 'prod_name':product_name,
                  'line_id':line_id,
                  'cat_id':cat_id,
                  'color':color,
                  'img_url':img_url
                   },
                url: '../admin/DBalt/addProduct.php',
                success: function(data){
                    swal("تمت الإضافة بنجاح!", {
                                icon: "success",
                        });
                    
                     $("#products_table").append("<tr id="+data+">"+
                     "<td>"+data+"</td>"+
                     "<td><a href='#'>"+product_name+"</a></td>"+
                     "<td>"+line_name+"</td>"+
                     "<td>"+cat_name+"</td>"+
                     "<td>"+color+"</td>"+
                     "<td>"+
                     "<div class='table-action-buttons'>"+
                     "<a id="+data+" name="+product_name+" onclick='editFrom(this.id,this.name)' class='edit button button-box button-xs button-info' data-toggle='modal' data-target='#editModal'><i class='zmdi zmdi-edit'></i></a>"+
                     "<a id="+data+" onclick='deleteFrom(this.id)' class='delete button button-box button-xs button-danger'><i class='zmdi zmdi-delete'></i></a>"+
                     "</div>"+
                     "</td>"+
                     "</tr>");
                }
            });*/
        }

    </script>


</body>

</html>