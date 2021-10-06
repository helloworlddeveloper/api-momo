<?
require_once ('Database.php');
$momo = new Momo();
$apikeyy = $_GET['apikey'];
$sdtrut = $_GET['sdtrut'];
$tenrut = $_GET['tenrut'];
$tinnhanrut = $_GET['tinnhanrut'];
$tienrut = $_GET['tienrut'];
if ($apikeyy == '123123123'){
$data = json_decode($momo->oder_cash($sdtrut, $tenrut, $tinnhanrut, $tienrut), true);
$id = $data['momoMsg']['replyMsgs'][0]['ID'];
$dc = $momo->comfirm_oderr($id);
print_r ($dc);
} else{
    echo 'Api Key Sai';
};
