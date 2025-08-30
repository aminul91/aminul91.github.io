<?php
require_once 'db-config.php';     
$sql = "SELECT m.member_id,
               mp.parts_member_packege_id,
               mp.package_id,
               mp.status,
               DATE(mp.created_on) as membership_date,
               p.package_id,
               p.exp_volume
       FROM parts_member m
       LEFT JOIN parts_member_packege mp ON mp.member_id = m.member_id
       LEFT JOIN parts_package p ON p.package_id = mp.package_id
       WHERE m.status = 1
       AND mp.status = 1
       AND DATE_ADD(DATE(mp.created_on),INTERVAL p.exp_volume DAY) < CURDATE()";

$iActive_records = result_array($sql);
if($iActive_records)
{
   foreach($iActive_records as $iActive)
   {
       $data['status'] = 0;
       $data['order_change_his'] = 2;
       update('parts_member_packege', $data, 'parts_member_packege_id', $iActive['parts_member_packege_id']);
   }
}
?>