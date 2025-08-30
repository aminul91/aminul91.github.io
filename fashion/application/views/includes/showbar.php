<?php




$result = $this->db->get('user')->result_array();

$count= count($result);
var_dump($result);
exit;


?>