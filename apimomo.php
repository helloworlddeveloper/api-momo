<?php
/**
 * @package API MOMO
 * @author  Vũ Đình Nam Khánh
 * @copyright   Copyright (c) 2021
 * @link    https://www.facebook.com/vdnk.iq
 * @since   Version 1.0
 */
include ('class.momo.php');

if (isset($_GET['tranid'])) {
    $tranid = $_GET['tranid'];

    $sql = "SELECT * FROM `api_momo` WHERE `tranId` = '".$tranid."' ";
    if ($db->query($sql) == TRUE) {
        $sql = "SELECT * FROM `api_momo` WHERE `tranId` = '".$tranid."' ";
        $data = $db->query($sql);
        foreach ($data as $value) {   
        $array = [
            'tranid' => $value['tranId'],
            'sdt' => $value['partnerId'],
            'name' => $value['partnerName'],
            'amount' => $value['amount'],
            'comment' => $value['comment'],
            'time' => $value['time']
            ];
            echo json_encode($array);
            }

    } else {
        $array = [
            'msg' => 'key hoặc tranid không tồn tại',
            ];
        echo json_encode($array);
    }
} else {
    $array = [
        'msg' => 'lỗi',
        ];
    echo json_encode($array);
    }
?>
