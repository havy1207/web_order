<?php
  include 'function.php';
  // print_r(getdate());
  // die;
?>

<html lang="en">
<head>
  <title>My Store</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <meta name="description" content="" />
  <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  
  <!-- mobile settings -->
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- WEB FONTS : use %7C instead of | (pipe) -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
    rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

  <!-- CORE CSS -->
  <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- THEME CSS -->
  <link href="./assets/css/essentials.css" rel="stylesheet" type="text/css" />
  <link href="./assets/css/layout.css" rel="stylesheet" type="text/css" />

  <!-- PAGE LEVEL SCRIPTS -->
  <link href="./assets/css/header-1.css" rel="stylesheet" type="text/css" />
  <link href="./assets/css/color_scheme/violet.css" rel="stylesheet" type="text/css" id="color_scheme" />

  <!-- REVOLUTION SLIDER -->
  <link href="./assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

  <link href="./assets/css/custom.css" rel="stylesheet" type="text/css" />

  <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
</head>
<style type="text/css">
  .table-wrapper-scroll-y {
    height: 35%;
    width: 100%;
    overflow: auto;
  }
  .tablediv {
    height: 100%;
    width: 100%;
  }
</style>

<body>
<!-- // -->
<div class="container-fluid">
    <div class="p-3 mb-2 bg-dark text-white">
      <div class="navbar ">
        <div class="navbar-inner">
          <div class="container">
            <a href="#" class="brand">
              <img src="images/logo.png" width="120" height="40" alt="Logo" />
              <!-- This is website logo -->
            </a>
            <div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start home section -->
    <div class="text-center" class="alert alert-primary" role="alert">
      <h2>
        <p class="text-danger">HÂN HẠNH PHỤC VỤ KHÁCH HÀNG</p>
      </h2>
      <div class="float-right">
          <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="text-center">
          <h3>Thông tin khách hàng</h3>
        </div>
        <form class="mb-0" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="row">
              <div class="col-md-12 pr-0">
                <!-- <label for="name">Họ:</label> -->
                <input type="text" name="ho" id="first_name" placeholder="Họ ten..." class="form-control" required/>
                <!-- <input type="text" name="ho" id= "ho_id" placeholder="Họ..." class="form-control" required> -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-0">
                <!-- <label for="name">Tên:</label> -->
                <input type="text" name="ten" id="last_name" placeholder="Tên..." class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-0">
                <!-- <label for="name">Số điện thoại:</label> -->
                <input type="text" name="sdt" id="number" placeholder="Số điện thoại..." class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-0">
                <!-- <label for="name">Địa chỉ:<label> -->
                <input type="text" name="diachi" id="address" placeholder="Địa chỉ..." class="form-control" required>
              </div>
            </div>
            
          </fieldset>
        </form>
        <!-- </div> -->
      </div>
      <div class="col-sm-8">
        <div class="text-center">
          <h3>Thông tin đơn hàng</h3>
        </div>
        <div class="table-wrapper-scroll-y">
          <div class="tablediv">
            <div class="pr-0">
              <div class="panel-body">
                <form action="">
                  <div class="input-group control-group after-add-more">
                    <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Món ăn bạn chọn?"> -->
                    <div class="col-sm-9 nopadding">
                      <div class="form-group">
                        <div class="input-group" >
                          <select class="form-control" id="tenmon" name="tenmon_array">
                            <option value="Flan">Flan</option>
                            <option value="Bánh mì cuộn trứng muối">Bánh mì cuộn trứng muối</option>
                            <option value="Bánh su chiên">Bánh su chiên</option>
                            <option value="Món D">Món D</option>
                            <option value="Món E">Món E</option>
                          </select>
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-2 nopadding">
                      <div class="form-group">
                        <input class="form-control" type="number" value="1" id="soluong" name="soluong_array">
                      </div>
                    </div>
                    <!--  -->
                  </div>
                </form>

                <div class="copy-fields hide">
                  <div class="control-group input-group" style="margin-top:10px">
                    <div class="col-sm-9 nopadding">
                      <div class="form-group">
                        <div class="input-group">
                        <select class="form-control" id="tenmon" name="tenmon_array">
                            <option value="Flan">Flan</option>
                            <option value="Bánh mì cuộn trứng muối">Bánh mì cuộn trứng muối</option>
                            <option value="Bánh su chiên">Bánh su chiên</option>
                            <option value="Món D">Món D</option>
                            <option value="Món E">Món E</option>
                          </select>
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-2 nopadding">
                      <div class="form-group">
                        <input class="form-control" type="number" value="1" id="example-number-input" name="soluong_array">
                      </div>
                    </div>
                    <div class="input-group-btn">
                      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="h-50 bg-white">
        </div>
        <div class="text-center">
          <input type="button" class="btn btn-danger"  onclick="myFunction()" name="submit" id="submit" value="Submit" />
        </div>
        
      </div>
    </div>
  
<script>
var date = new Date();
var id_const = 4;
function myFunction() {
  var kq = id_const +1;
  var pathCustomer = "Customer";
  var pathOrder = "Order";
  var pathQuantity = "Order/quantity";
  var Goods = document.getElementsByName("tenmon_array");
  var Quantity = document.getElementsByName("soluong_array");
  alert("id_const" + kq);
  // alert("Total Genders:" + Goods.length);
  // alert("Total Genders:" + Goods[0].value);
  // alert("Total Genders:" + Goods[1].value);
  // alert("Total Genders:" + Goods[2].value);
  var first_name = document.getElementById("first_name").value;
  var last_name = document.getElementById("last_name").value;
  var address = document.getElementById("address").value;
  var number = document.getElementById("number").value;
  var ten_mon = document.getElementById("tenmon").value;
  var day = date.getDate();
  var month =date.getMonth()+1;
  var year = date.getFullYear();

// document.getElementById("demo").innerHTML = "Xin chào";
    // // Them Oject vao firebase
    var db=firebase.database().ref(pathCustomer);
    db.push({
      address: address,
      id: "7",
      last_name: first_name,
      name: last_name,
      number: number,
      tenmon: ten_mon,
      order_day: String(day),
      order_month: String(month),
      order_year: String(year),
      status: "1",
    });
var i = Goods.length -2  ;
alert("Total Genders:" + i);
while (i >= 0){
  var db=firebase.database().ref(pathQuantity);
    db.push({
      //id: "7",
      name: Quantity[i].value,
      //price: "10000",
    });
    i--; // giảm i xuống nếu không sẽ bị lặp vô hạn
}
// reload page
// location.reload();
}
</script>

  </div>
  <!-- JavaScript -->
  
  <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
  <script src="index.js"></script>
 
  <!-- Function Javascript ==========================-->
  <script type="text/javascript">
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyAb1pZyEpH8WaVFhvMUy5Av_hnSThfPe4c",
      authDomain: "fir-8e911.firebaseapp.com",
      databaseURL: "https://fir-8e911.firebaseio.com",
      projectId: "fir-8e911",
      storageBucket: "fir-8e911.appspot.com",
      messagingSenderId: "1039479421956"
    };
    firebase.initializeApp(config);
    database = firebase.database();

    // var path = "Customer";
    // // // Them Oject vao firebase
    // var db=firebase.database().ref(path);
    // db.push({
    //   id: 1,
    //   name: 'ha vy',
    //   email: 'huynhthihavy12@gmail.com'
    // });

    // function - button Add
    $(document).ready(function () {
      $(".add-more").click(function () {
        var html = $(".copy-fields").html();
        $(".after-add-more").after(html);
      });
      $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
      });

    });
  </script>
 
</body>

</html>