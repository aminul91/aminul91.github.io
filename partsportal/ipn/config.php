<?php
session_start();
//error_reporting(1);

#$mode = 'local';
$mode = 'develop';
//$mode = 'live';

if ($_SERVER['HTTP_HOST'] == 'localhost' || ($_SERVER['HTTP_HOST'] == '127.0.0.1'))
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "partsportal"; 
    define('BASEURL', "http://localhost/partsportal/");
}
else if($mode == 'develop')
{
    $dbhost = "localhost";
    $dbuser = "partsportal";
    $dbpass = "partsportal";
    $dbname = "partsportal"; 
    define('BASEURL', "http://www.webzonetechno.com/partsportal/");
}
else
{
    $dbhost = "localhost";
    $dbuser = "";
    $dbpass = "";
    $dbname = ""; 
    define('BASEURL', "");
}
define('PROJECT_NAME', "www.partsportal.com");
define('ADMIN_EMAIL_ADDRESS', "info@partsportal.com");


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);


function isPostBack()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function dumpVar($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit();
}

function result_array($sql)
{
    $result = array(); 
    $query = mysql_query($sql);
    while($data = mysql_fetch_array($query))
    {
        $result[] =  $data;
    }
    $rows = count($result);
    if($rows)
    {
        $total_global_rows = count($result);
        $total_inner_rows =  count($result[0]);
        $count_total_inner_rows = $total_inner_rows/2;

        for($i = 0;$i<$total_global_rows;$i++)
        {
            for($j=0;$j<$count_total_inner_rows;$j++)
            {
                unset($result[$i][$j]);        
            }    
        }
    }    
    return $result;    
}
function row_array($sql)
{
 
    $result = array(); 
    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);
    return $data;
}
function query($sql)
{
    mysql_query($sql);
}
function row_count($sql)
{
    $count = 0;
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    return (int)$count;
}
function insert($table, $data) 
{
    foreach ($data as $field=>$value) 
    {
        $fields[] = '`' . $field . '`';
        $values[] = "'" . mysql_real_escape_string($value) . "'";
    }
    $field_list = join(', ', $fields);
    $value_list = join(', ', $values);        
    $query = "INSERT INTO `" . $table . "` (" . $field_list . ") VALUES (" . $value_list . ")";
    mysql_query($query) or die("Error: ".mysql_error());
    return mysql_insert_id();
}
function update($table, $data, $id_field, $id_value) 
{
     foreach ($data as $field=>$value) 
     {
          $fields[] = sprintf("%s = '%s'", $field, mysql_real_escape_string($value));
     }
     $field_list = join(',', $fields);
     $query = sprintf("UPDATE %s SET %s WHERE %s = '%s'", $table, $field_list, $id_field, $id_value);
     mysql_query($query) or die("Error: ".mysql_error());
} 
function delete($table,$column,$data)
{
    $sql_delete = "DELETE FROM `$table` WHERE `$column` = '$data'";
    mysql_query($sql_delete);
}
?>