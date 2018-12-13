

<?php
require_once './vendor/autoload.php';
require_once 'function.php';
require_once 'Users.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$soluong_mon = 4;
$i=0;
$j=0;
$dem=0;
if($_SERVER['REQUEST_METHOD'] == "POST"){

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // $a = $_POST['cat'][0];
    // echo($a);
}
// lay thong tin don hang soluong_array

// Lay thong tin khach hang
$ho=$_POST["ho"];
$ten=$_POST["ten"];
$sdt=$_POST["sdt"];
$diachi=$_POST["diachi"];
// Lay id cua khach hang--> id tang dan // id chung cho khach va don hang
$id_count = new get_put_db();
$id_count->dbname = 'id_count';
$num_count = $id_count->get(1) + 1;
$id_count->insert([
    '1' => $num_count
]);
//
$note = new get_put_db ();
$note->insert([
    'Notify' => "true"
]);

//Push data khach hang len firebase
$user = new get_put_db ();
$user->dbname = 'Customer/'. rand_string(15);
$user->insert([
    'address' =>$diachi,
    'id' => (string)$num_count,
    'last_name' => $ho,
    'name' => $ten,
    'number' => $sdt,
    'order_day' => date('d'),
    'order_month' => date('m'),
    'order_year' => date('Y'),
    'status' => "1"
]);
// push don hang order cua khach
$orders = new get_put_db ();
$Quantity = $orders->dbname = 'Order/'. rand_string(15);
$orders->insert([
    'id' => (string)$num_count,
    'total_price' => '0'
]);
$path_Quantity = $Quantity.'/quantity';
$data_quantity = new get_put_db();
$data_quantity->dbname = $path_Quantity;
// $data_quantity->insert([
//     '1' => 1,
//     '2' => 2
// ]);
// for($j; $j < $soluong_mon; $j++){
//     if($_POST['soluong_array'][$j]) $dem++;
// }
echo "dem = ".$dem;
// $a=0;
for($i; $i < $soluong_mon; $i++){
    $data_quantity->insert([
            $_POST['cat'][$i] => $_POST['soluong_array'][$i]
]);
        //$a = $i-1;
        // while($_POST['soluong_array'][$a] == 0) { $a ++;}
        // $data_quantity->insert([
        //     $_POST['cat'][$i-1] => $_POST['soluong_array'][$a]
        // ]);
        // $a++;
        // echo "<pre>";
        // //$_POST['cat'][$i-1] LA ID CUA MON AN
        // echo $_POST['cat'][$i-1] . ": ". $_POST['soluong_array'][$a];
        // echo "</pre>";    
}

?>