<?php
/**
 * Created by PhpStorm.
 * User: Ha Vy
 * Date: 12/11/2018
 * Time: 12:18 PM
 */
// var_dump( date('Y'));
// var_dump( date('m'));
// var_dump( date('d'));
// die;
require_once './vendor/autoload.php';
require_once 'Users.php';
$soluong_mon = 4;
$i=1;
$j=2;
$k=0;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/fir-8e911-1ca8ef325e3a.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    //->withDatabaseUri('https://php-firebase-5971a.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

//lay thong tin mon an
$goods = new get_put_db();
$goods->dbname = 'Good';
$good = $goods->get($i);
$stack = array($good);
$arrayName = array();

// die;
for ($j; $j <= $soluong_mon; $j++)
{
    $good = $goods->get($j);
    array_push($stack, $good);
    // echo $goods->get($j);
}
// echo "<pre>";
// print_r($stack[0]['name']);
// echo "</pre>";
// die;
?>

<html lang="en">
<head>
    <title>My Store</title>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
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
        height: 50%;
        width: 105%;
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
    </div>
    <form class="mb-0" method="post" action="proccess.php" name="formKH" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-5">
                <div class="text-center">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <!-- form thong tin khach hang -->
                
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <input type="text" name="ho" id="first_name" value = "" placeholder="Họ ten..." class="form-control" required/>
                                <!-- <input type="text" name="ho" id= "ho_id" placeholder="Họ..." class="form-control" required> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <!-- <label for="name">Tên:</label> -->
                                <input type="text" name="ten" id="last_name" value = ""  placeholder="Tên..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <!-- <label for="name">Số điện thoại:</label> -->
                                <input type="text" name="sdt" id="number" value = "" placeholder="Số điện thoại..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <!-- <label for="name">Địa chỉ:<label> -->
                                <input type="text" name="diachi" id="address" value = ""  placeholder="Địa chỉ..." class="form-control" required>
                            </div>
                        </div>
                        <div >
                            <div class="text-center">
                                <input type="submit" class="btn btn-danger" name="send" id="send_id" value="SEND" />
                            </div>
                        </div>
                <!-- </form> -->
                <!-- form thong tin khach hang -->
                <!-- </div> -->
            </div>
            <div class="col-sm-7" class="float-right">
                <div class="text-center">
                    <h3>Thông tin đơn hàng</h3>
                </div>
                <!-- form thong tin khach hang -->
                <!-- <form class="mb-0" method="post" action="proccess_1.php" name="formKH" enctype="multipart/form-data"> -->
                    <div class="table-wrapper-scroll-y">
                        <div class="tablediv">
                            <div class="pr-0">
                                <div class="panel-body">
                                        <div >
                                            <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Món ăn bạn chọn?"> -->
                                            <div class="col-sm-9 nopadding">
                                                <!-- form chon mon -->
                                                <?php //var_dump($_POST); ?>
                                                
                                                    
                                                    <?php 
                                                        for($k; $k < $soluong_mon ; $k++){ ?>
                                                            <input type="checkbox" name="cat[]" value= <?php echo $k;?> /> <?php echo $stack[$k]['name'] ;?> <br/>
                                                            <div class="row">
                                                                <div class="col-md-12 pr-0">
                                                                    <input class="form-control" type="number" value="0" id="soluong" name="soluong_array[]">
                                                                </div>
                                                            </div>
                                                    <?php } ?>
                                                
                                                <!-- form chon mon -->
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                       
                <!-- </form> -->
                <!-- form thong tin khach hang -->
            </div>
        </div>
    </form>
</div>


</body>

</html>

