<?php

if(!defined('BASEPATH'))  exit('No direct script access allowed');
if(!function_exists('notification'))
{
    function notification($message)
    {
        $_SESSION['notification'] = $message;
    }
}
if(!function_exists('isPostBack'))
{
    function isPostBack()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
}

if(!function_exists('message'))
{
    function message($message)
    {
        $_SESSION['message'] = $message;
    }
}
if(!function_exists('dumpVar'))
{
    function dumpVar($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit();
    }
}

if(!function_exists('exception'))
{

    function exception($message)
    {
        $_SESSION['exception'] = $message;
    }

}

if(!function_exists('isHTTPS'))
{

    function isHTTPS()
    {
        if(isset($_SERVER['HTTPS']))
        {
            return strtolower($_SERVER['HTTPS']) == 'on';
        }
        return false;
    }
}

if(!function_exists('is_member_loggedin'))
{
    function is_member_loggedin()
    {
        if($_SESSION['is_member_loggedin'] == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
if(!function_exists('member_id'))
{
    function member_id()
    {
        if(isset($_SESSION['member_id']))
        {
            return $_SESSION['member_id'];
        }
        else
        {
            return false;
        }
    }
}


if(!function_exists('is_admin_loggedin'))
{
    function is_admin_loggedin()
    {
        if(isset($_SESSION['is_admin_loggedin']))
        {
            return $_SESSION['is_admin_loggedin'];
        }
        else
        {
            return false;
        }
    }
}


if(!function_exists('checkLogin'))
{
    function checkLogin()
    {
        if(isset($_SESSION['is_member_loggedin']))
        {
            return true;
        }
        else
        {
            redirect(BASEURL.'login');
        }
    }
}

if(!function_exists('checkAdminLogin'))
{
    function checkAdminLogin()
    {
        if(isset($_SESSION['is_admin_loggedin']))
        {
            return true;
        }
        else
        {
            redirect('admin');
        }
    }
}

if(!function_exists('get_username'))
{
    function get_username()
    {
        return $_SESSION['username'];
    }
}

if(!function_exists('admin_username'))
{
    function admin_username()
    {
        return $_SESSION['admin_username'];
    }
}

if(!function_exists('result_array'))
{
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
}
if(!function_exists('row_array')) 
{
    function row_array($sql)
    {
        $result = array(); 
        $query = mysql_query($sql);
        $data = mysql_fetch_assoc($query);    
        return $data;
    }
}


if(!function_exists('password_encode'))
{
    function password_encode($password)
    {
        return md5($password);
    }
}
if(!function_exists('password_decode'))
{
    function password_decode($password)
    {
        return md5($password);
    }
}

if(!function_exists('getCountryList'))
{
    function getCountryList()
    {
        return array(   'US' => 'United States',
                        'GB' => 'United Kingdom',
                        'CA' => 'Canada',
                        'AU' => 'Australia',
                        'AL' => 'Albania',
                        'DZ' => 'Algeria',
                        'AS' => 'American Samoa',
                        'AD' => 'Andorra',
                        'AO' => 'Angola',
                        'AI' => 'Anguilla',
                        'AQ' => 'Antarctica',
                        'AG' => 'Antigua And Barbuda',
                        'AR' => 'Argentina',
                        'AM' => 'Armenia',
                        'AW' => 'Aruba',
                        'AT' => 'Austria',
                        'AZ' => 'Azerbaijan',
                        'BS' => 'Bahamas',
                        'BH' => 'Bahrain',
                        'BD' => 'Bangladesh',
                        'BB' => 'Barbados',
                        'BY' => 'Belarus',
                        'BE' => 'Belgium',
                        'BZ' => 'Belize',
                        'BJ' => 'Benin',
                        'BM' => 'Bermuda',
                        'BT' => 'Bhutan',
                        'BO' => 'Bolivia',
                        'BA' => 'Bosnia And Herzegovina',
                        'BW' => 'Botswana',
                        'BV' => 'Bouvet Island',
                        'BR' => 'Brazil',
                        'IO' => 'British Indian Ocean Territory',
                        'BN' => 'Brunei Darussalam',
                        'BG' => 'Bulgaria',
                        'BF' => 'Burkina Faso',
                        'BI' => 'Burundi',
                        'KH' => 'Cambodia',
                        'CM' => 'Cameroon',
                        'CV' => 'Cape Verde',
                        'KY' => 'Cayman Islands',
                        'CF' => 'Central African Republic',
                        'TD' => 'Chad',
                        'CL' => 'Chile',
                        'CN' => 'China',
                        'CX' => 'Christmas Island',
                        'CC' => 'Cocos (Keeling) Islands',
                        'CO' => 'Colombia',
                        'KM' => 'Comoros',
                        'CG' => 'Congo',
                        'CD' => 'Congo ; The Dem. Rep. Of The',
                        'CK' => 'Cook Islands',
                        'CR' => 'Costa Rica',
                        'CI' => 'Cote D\'ivoire',
                        'HR' => 'Croatia',
                        'CY' => 'Cyprus',
                        'CZ' => 'Czech Republic',
                        'DK' => 'Denmark',
                        'DJ' => 'Djibouti',
                        'DM' => 'Dominica',
                        'DO' => 'Dominican Republic',
                        'TP' => 'East Timor',
                        'EC' => 'Ecuador',
                        'EG' => 'Egypt',
                        'SV' => 'El Salvador',
                        'GQ' => 'Equatorial Guinea',
                        'ER' => 'Eritrea',
                        'EE' => 'Estonia',
                        'ET' => 'Ethiopia',
                        'FK' => 'Falkland Islands (Malvinas)',
                        'FO' => 'Faroe Islands',
                        'FJ' => 'Fiji',
                        'FI' => 'Finland',
                        'FR' => 'France',
                        'GF' => 'French Guiana',
                        'PF' => 'French Polynesia',
                        'TF' => 'French Southern Territories',
                        'GA' => 'Gabon',
                        'GM' => 'Gambia',
                        'GE' => 'Georgia',
                        'DE' => 'Germany',
                        'GH' => 'Ghana',
                        'GI' => 'Gibraltar',
                        'GR' => 'Greece',
                        'GL' => 'Greenland',
                        'GD' => 'Grenada',
                        'GP' => 'Guadeloupe',
                        'GU' => 'Guam',
                        'GT' => 'Guatemala',
                        'GN' => 'Guinea',
                        'GW' => 'Guinea-Bissau',
                        'GY' => 'Guyana',
                        'HT' => 'Haiti',
                        'HM' => 'Heard Island And Mcdonald Islands',
                        'VA' => 'Holy See (Vatican City State)',
                        'HN' => 'Honduras',
                        'HK' => 'Hong Kong',
                        'HU' => 'Hungary',
                        'IS' => 'Iceland',
                        'IN' => 'India',
                        'ID' => 'Indonesia',
                        'IE' => 'Ireland',
                        'IL' => 'Israel',
                        'IT' => 'Italy',
                        'JM' => 'Jamaica',
                        'JP' => 'Japan',
                        'JO' => 'Jordan',
                        'KZ' => 'Kazakstan',
                        'KE' => 'Kenya',
                        'KI' => 'Kiribati',
                        'KW' => 'Kuwait',
                        'KG' => 'Kyrgyzstan',
                        'LA' => 'Lao People\'s Democratic Republic',
                        'LV' => 'Latvia',
                        'LB' => 'Lebanon',
                        'LS' => 'Lesotho',
                        'LY' => 'Libya',
                        'LI' => 'Liechtenstein',
                        'LT' => 'Lithuania',
                        'LU' => 'Luxembourg',
                        'MO' => 'Macau',
                        'MK' => 'Macedonia',
                        'MG' => 'Madagascar',
                        'MW' => 'Malawi',
                        'MY' => 'Malaysia',
                        'MV' => 'Maldives',
                        'ML' => 'Mali',
                        'MT' => 'Malta',
                        'MH' => 'Marshall Islands',
                        'MQ' => 'Martinique',
                        'MR' => 'Mauritania',
                        'MU' => 'Mauritius',
                        'YT' => 'Mayotte',
                        'MX' => 'Mexico',
                        'FM' => 'Micronesia; Federated States Of',
                        'MD' => 'Moldova; Republic Of',
                        'MC' => 'Monaco',
                        'MN' => 'Mongolia',
                        'MS' => 'Montserrat',
                        'MA' => 'Morocco',
                        'MZ' => 'Mozambique',
                        'NA' => 'Namibia',
                        'NR' => 'Nauru',
                        'NP' => 'Nepal',
                        'NL' => 'Netherlands',
                        'AN' => 'Netherlands Antilles',
                        'NC' => 'New Caledonia',
                        'NZ' => 'New Zealand',
                        'NI' => 'Nicaragua',
                        'NE' => 'Niger',
                        'NG' => 'Nigeria',
                        'NU' => 'Niue',
                        'NF' => 'Norfolk Island',
                        'MP' => 'Northern Mariana Islands',
                        'NO' => 'Norway',
                        'OM' => 'Oman',
                        'PK' => 'Pakistan',
                        'PW' => 'Palau',
                        'PS' => 'Palestinian Territory; Occupied',
                        'PA' => 'Panama',
                        'PG' => 'Papua New Guinea',
                        'PY' => 'Paraguay',
                        'PE' => 'Peru',
                        'PH' => 'Philippines',
                        'PN' => 'Pitcairn',
                        'PL' => 'Poland',
                        'PT' => 'Portugal',
                        'PR' => 'Puerto Rico',
                        'QA' => 'Qatar',
                        'RE' => 'Reunion',
                        'RO' => 'Romania',
                        'RU' => 'Russian Federation',
                        'RW' => 'Rwanda',
                        'SH' => 'Saint Helena',
                        'KN' => 'Saint Kitts And Nevis',
                        'LC' => 'Saint Lucia',
                        'PM' => 'Saint Pierre And Miquelon',
                        'VC' => 'Saint Vincent And The Grenadines',
                        'WS' => 'Samoa',
                        'SM' => 'San Marino',
                        'ST' => 'Sao Tome And Principe',
                        'SA' => 'Saudi Arabia',
                        'SN' => 'Senegal',
                        'SC' => 'Seychelles',
                        'SG' => 'Singapore',
                        'SK' => 'Slovakia',
                        'SI' => 'Slovenia',
                        'SB' => 'Solomon Islands',
                        'SO' => 'Somalia',
                        'ZA' => 'South Africa',
                        'GS' => 'South Georgia / South Sandwich Islands',
                        'ES' => 'Spain',
                        'LK' => 'Sri Lanka',
                        'SR' => 'Suriname',
                        'SJ' => 'Svalbard And Jan Mayen',
                        'SZ' => 'Swaziland',
                        'SE' => 'Sweden',
                        'CH' => 'Switzerland',
                        'SY' => 'Syrian Arab Republic',
                        'TW' => 'Taiwan',
                        'TJ' => 'Tajikistan',
                        'TZ' => 'Tanzania; United Republic Of',
                        'TH' => 'Thailand',
                        'TG' => 'Togo',
                        'TK' => 'Tokelau',
                        'TO' => 'Tonga',
                        'TT' => 'Trinidad And Tobago',
                        'TN' => 'Tunisia',
                        'TR' => 'Turkey',
                        'TM' => 'Turkmenistan',
                        'TC' => 'Turks And Caicos Islands',
                        'TV' => 'Tuvalu',
                        'UG' => 'Uganda',
                        'UA' => 'Ukraine',
                        'AE' => 'United Arab Emirates',
                        'UM' => 'United States Minor Outlying Islands',
                        'UY' => 'Uruguay',
                        'UZ' => 'Uzbekistan',
                        'VU' => 'Vanuatu',
                        'VE' => 'Venezuela',
                        'VN' => 'Viet Nam',
                        'VG' => 'Virgin Islands; British',
                        'VI' => 'Virgin Islands; U.S.',
                        'WF' => 'Wallis And Futuna',
                        'EH' => 'Western Sahara',
                        'YE' => 'Yemen',
                        'YU' => 'Yugoslavia',
                        'ZM' => 'Zambia'
                    );

    }
}

if(!function_exists('getStateList'))
{
    function getStateList($country = 'AU')
    {
            if ($country == 'CA')
            {
                    return array(   'AB' => 'Alberta',
                        'BC' => 'British Columbia',
                        'MB' => 'Manitoba',
                        'NB' => 'New Brunswick',
                        'NL' => 'Newfoundland and Labrador',
                        'NT' => 'Northwest Territories',
                        'NS' => 'Nova Scotia',
                        'NU' => 'Nunavut',
                        'ON' => 'Ontario',
                        'PE' => 'Prince Edward Island',
                        'QC' => 'Quebec',
                        'SK' => 'Saskatchewan',
                        'YT' => 'Yukon');

            } 
            else if($country == 'AU')
            {
                return array('New-South-Wales' => 'New South Wales',
                        'Victoria' => 'Victoria (Australia)',
                        'Queensland' => 'Queensland',
                        'Western-Australia' => 'Western Australia',
                        'South-Australia' => 'South Australia',
                        'Australian-Capital-Territory' => 'Australian Capital Territory',
                        'Tasmania' => 'Tasmania',
                        'Northern-Territory' => 'Northern Territory');
            }
            else 
            { 
                // default = USA			
                return array(   'AL' => 'Alabama',
                        'AK' => 'Alaska',
                        'AS' => 'American Samoa',
                        'AZ' => 'Arizona',
                        'AR' => 'Arkansas',
                        'CA' => 'California',
                        'CO' => 'Colorado',
                        'CT' => 'Connecticut',
                        'DE' => 'Delaware',
                        'DC' => 'District of Columbia',
                        'FM' => 'Federated States of Micronesia',
                        'FL' => 'Florida',
                        'GA' => 'Georgia',
                        'GU' => 'Guam',
                        'HI' => 'Hawaii',
                        'ID' => 'Idaho',
                        'IL' => 'Illinois',
                        'IN' => 'Indiana',
                        'IA' => 'Iowa',
                        'KS' => 'Kansas',
                        'KY' => 'Kentucky',
                        'LA' => 'Louisiana',
                        'ME' => 'Maine',
                        'MH' => 'Marshall Islands',
                        'MD' => 'Maryland',
                        'MA' => 'Massachusetts',
                        'MI' => 'Michigan',
                        'MN' => 'Minnesota',
                        'MS' => 'Mississippi',
                        'MO' => 'Missouri',
                        'MT' => 'Montana',
                        'NE' => 'Nebraska',
                        'NV' => 'Nevada',
                        'NH' => 'New Hampshire',
                        'NJ' => 'New Jersey',
                        'NM' => 'New Mexico',
                        'NY' => 'New York',
                        'NC' => 'North Carolina',
                        'ND' => 'North Dakota',
                        'MP' => 'Northern Mariana Islands',
                        'OH' => 'Ohio',
                        'OK' => 'Oklahoma',
                        'OR' => 'Oregon',
                        'PW' => 'Palau',
                        'PA' => 'Pennsylvania',
                        'PR' => 'Puerto Rico',
                        'RI' => 'Rhode Island',
                        'SC' => 'South Carolina',
                        'SD' => 'South Dakota',
                        'TN' => 'Tennessee',
                        'TX' => 'Texas',
                        'UT' => 'Utah',
                        'VT' => 'Vermont',
                        'VI' => 'Virgin Islands',
                        'VA' => 'Virginia',
                        'WA' => 'Washington',
                        'WV' => 'West Virginia',
                        'WI' => 'Wisconsin',
                        'WY' => 'Wyoming');
   	} // else
    }
}

function get_all_parts_list()
{
    $sql="SELECT * FROM `parts_parts_list`";
    return result_array($sql);
}
function get_parts_name($parts_list_id)
{
    $sql="SELECT * FROM `parts_parts_list` WHERE parts_list_id = $parts_list_id";
    $result = row_array($sql);
    return  $result['parts_name'];
}
function check_user_listing($listing_id,$type_listingid)
{
    $sql="SELECT * FROM `parts_listing` WHERE listing_id = $listing_id AND type_listing_id = $type_listingid LIMIT 1";
    $result = row_array($sql);
    if($result['member_id'] == $_SESSION['member_id'])
    {
        return true;
    }  
    else
    {
        message("You are not Owner of this Listing");
        redirect(BASEURL);exit;
    }
    
}
function go_edit_page($parts_list_id)
{
    $sql="SELECT * FROM `parts_parts_list` WHERE parts_list_id = $parts_list_id LIMIT 1";
    $result = row_array($sql);
    return $result['table_name'];
}
function get_make_model_name($make_model_id)
{
    $sql="SELECT * FROM `parts_make_model` WHERE make_model_id = $make_model_id LIMIT 1";
    $result = row_array($sql);
    return $result['name'];
}
function get_location_name($location_id)
{
    $sql="SELECT * FROM `parts_location` WHERE location_id = $location_id LIMIT 1";
    $result = row_array($sql);
    return $result['location'];
}

function delete_listing($listingid,$type_listingid)
{
    $sql="SELECT * FROM `parts_listing` WHERE listing_id = $listingid AND type_listing_id = $type_listingid LIMIT 1";
    $result = row_array($sql);
    
    $sql2="SELECT * FROM `parts_parts_list` WHERE parts_list_id = {$result['parts_list_id']} LIMIT 1";
    $result2 = row_array($sql2);
    
    $action_id = $result2['table_name'].'_id';
    $Del_type_listing ="DELETE FROM `{$result2['table_name']}` WHERE $action_id = $type_listingid";
    mysql_query($Del_type_listing);
    
    $Del_listing ="DELETE FROM `parts_listing` WHERE listing_id = $listingid";
    mysql_query($Del_listing);
    
    
    ##Unlink Deleted Image From server.##
    $listing_image = "SELECT * FROM parts_listing_image WHERE listing_id = $listingid";
    $result = result_array($listing_image);
    foreach ($result as $value)
    {
      unlink('images/listing_image/thumb/'.$value['image']);  
      unlink('images/listing_image/'.$value['image']);  
    }
    
    $Del_listing_image ="DELETE FROM `parts_listing_image` WHERE listing_id = $listingid";
    mysql_query($Del_listing_image);
}

function my_pckage_listing_limit()
{
    $listing = "SELECT pp.* FROM  
            parts_package pp 
            INNER JOIN parts_member_packege pmp ON
            pp.package_id = pmp.package_id
            WHERE pmp.member_id = ".member_id()." AND pmp.status = 1 LIMIT 1";
            $user_listing_limit = row_array($listing);
            
     $my_listing ="SELECT COUNT(listing_id) as total FROM parts_listing WHERE member_id = {$_SESSION['member_id']} AND status = 1 AND is_delete = 0 LIMIT 1";
     $user_total_listing = row_array($my_listing);
     
     if($user_listing_limit['listing_limit'] <= $user_total_listing['total'])
     {
         message("You already filled your total Listing.");
         redirect(BASEURL.'my_listings');exit;
     }
     else
     {
         return true;
     }         
}

function my_pckage_image_limit()
{
    $listing = "SELECT pp.* FROM  
                parts_package pp 
                INNER JOIN parts_member_packege pmp ON
                pp.package_id = pmp.package_id
                WHERE pmp.member_id = ".member_id()." AND pmp.status = 1 LIMIT 1";
                $user_listing_limit = row_array($listing);
            
                return $user_listing_limit['picture_limit'];
}

function my_listing_image($listing_id)
{
    $listing_image = "SELECT * FROM parts_listing_image WHERE listing_id = $listing_id";
    $result['image'] = result_array($listing_image);
    $result['count'] = count($result['image']);
    return $result;
}


function get_listing_id($parts_list_id,$type_listing_id)
{
    ##### $parts_list_id   = parts_parts_list table id 
    ##### $type_listing_id = individual parts list table id 
    $listing_image = "SELECT * FROM parts_listing WHERE parts_list_id = $parts_list_id AND type_listing_id = $type_listing_id LIMIT 1";
    $result = row_array($listing_image);
    return $result['listing_id'];
}
function get_single_listingImage($parts_list_id,$type_listing_id)
{
    ##### $parts_list_id   = parts_parts_list table id 
    ##### $type_listing_id = individual parts list table id 
    $listing_id = "SELECT * FROM parts_listing WHERE parts_list_id = $parts_list_id AND type_listing_id = $type_listing_id LIMIT 1";
    $result = row_array($listing_id);
    
    $listing_image = "SELECT * FROM parts_listing_image WHERE listing_id = {$result['listing_id']} LIMIT 1";
    $res = row_array($listing_image);
    if($res)
    {
        return $res['image'];
    }  
    else
    {
        return "no_image.png";
    }    
}
function get_member_email($member_id)
{
    $sql = "SELECT email FROM parts_member WHERE member_id = $member_id LIMIT 1";
    $res = row_array($sql);
    return $res['email'];
}

function get_ads_list()
{
    $sql = "SELECT * FROM parts_ads ORDER BY order_id ASC";
    $res = result_array($sql);
    return $res;
}

function get_parent_equipment_type($parts_list_id)
{
    $sql = "SELECT * FROM parts_category WHERE parts_list_id = $parts_list_id AND parent_category_id = 0";
    $res = result_array($sql);
    return $res;
}
function get_child_equipment_type($parent_category_id,$parts_list_id)
{
    $sql = "SELECT * FROM parts_category WHERE parts_list_id = $parts_list_id AND parent_category_id = $parent_category_id";
    $res = result_array($sql);
    return $res;
}

function get_listing_info($type_listing_id,$parts_list_id)
{
   $sql = "SELECT * FROM parts_listing WHERE type_listing_id = $type_listing_id AND parts_list_id = $parts_list_id LIMIT 1";
   $res = row_array($sql);
   return $res;
}

if(!function_exists('commonDateFormat'))
{
    function commonDateFormat($date, $dateFormat)
    {
        if($date && $dateFormat)
        {
            switch($dateFormat)
            {
                case 'mm-dd-yy':
                  //mm-dd-yy to yy-mm-dd
                  $date = substr($date,6,4) . '-' . substr($date,0,2) . '-' . substr($date,3,2);
                  break;
                case 'dd-mm-yy':
                  //dd-mm-yy to yy-mm-dd
                  $date = substr($date,6,4) . '-' . substr($date,3,2) . '-' . substr($date,0,2);
                  break;
                case 'mm/dd/yy':
                  //mm/dd/yy to yy-mm-dd
                  $date = substr($date,6,4) . '-' . substr($date,0,2) . '-' . substr($date,3,2);
                  break;
                case 'dd/mm/yy':
                  //dd/mm/yy to yy-mm-dd
                  $date = substr($date,6,4) . '-' . substr($date,3,2) . '-' . substr($date,0,2);
            }
        }
        else
        {
            $date = '';
        }
        return $date;
    }
}

if(!function_exists('get_user_info'))
{
    function get_user_info($username)
    {
        $sql = "SELECT m.member_id,
                       m.fname,
                       m.surname,
                       m.username,
                       m.title,
                       m.status,
                       m.street_address,
                       m.city,
                       m.postcode,
                       m.phone,
                       m.mobile,
                       m.reg_business_name,
                       m.contact_person,
                       m.position_contact_person,
                       m.contact_person_phone,
                       m.contact_person_email,
                       m.business_company_id_number,
                       m.address1,
                       m.address2,
                       m.user_type,
                       m.country,
                       c.template_customized_id,
                       c.templateTopHTML,
                       c.templateBottomHTML,
                       c.bgColor
               FROM parts_member m
               LEFT JOIN parts_template_customized c ON c.member_id = m.member_id
               WHERE m.username LIKE '$username'
               LIMIT 1";        
        $res = row_array($sql);
        return $res;        
    }
    
    function is_package_shift_dealer($member_id)
    {
        $sql = "SELECT user_type FROM parts_member WHERE member_id = $member_id LIMIT 1";
        $res = row_array($sql);
        return $res['user_type']== 2 ? false : true; 
    }
    
    function check_profile_owner($username)
    {
        $sql = "SELECT user_type FROM parts_member WHERE username LIKE '$username' LIMIT 1";
        $res = row_array($sql);
        if($res['user_type'] == 2)
        {
            exception($username.' is not dealer yet');
            redirect(BASEURL);
        }
    }
    
    function get_make_list($parts_list_id)
    {
        $sql = "SELECT * FROM parts_make_model WHERE parts_list_id = $parts_list_id AND parent_id = 0";
        $res = result_array($sql);
        return $res; 
    }
    function get_model_list($parts_list_id,$parent_id)
    {
        $sql = "SELECT * FROM parts_make_model WHERE parts_list_id = $parts_list_id AND parent_id = $parent_id";
        $res = result_array($sql);
        return $res; 
    }
    
    function get_profile_name_by_parts_list_id_n_type_listing_id($parts_list_id,$type_listing_id)
    {
        $sql = "SELECT m.username 
                FROM parts_listing l
                INNER JOIN parts_member m ON m.member_id = l.member_id
                WHERE m.status = 1
                AND l.parts_list_id = $parts_list_id
                AND l.type_listing_id = $type_listing_id
                LIMIT 1";
        $res = row_array($sql);
        return $res['username']; 
    }
    
    function is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$type_listing_id)
    {
        $sql = "SELECT l.is_sold 
                FROM parts_listing l
                INNER JOIN parts_member m ON m.member_id = l.member_id
                WHERE m.status = 1
                AND l.parts_list_id = $parts_list_id
                AND l.type_listing_id = $type_listing_id
                LIMIT 1";
        $res = row_array($sql);
        return ($res['is_sold'] == 1) ? 'Yes' : 'No'; 
    }
    
    function is_dealer_by_parts_list_id_n_type_listing_id($parts_list_id,$type_listing_id)
    {
        $sql = "SELECT m.user_type 
                FROM parts_listing l
                INNER JOIN parts_member m ON m.member_id = l.member_id
                WHERE m.status = 1
                AND l.parts_list_id = $parts_list_id
                AND l.type_listing_id = $type_listing_id
                LIMIT 1";
        $res = row_array($sql);
        return ($res['user_type'] == 2) ? 0 : 1; 
    }
    
    function default_package_id()
    {
        $sql = "SELECT package_id FROM parts_package WHERE is_default = 1 LIMIT 1";
        $res = row_array($sql);
        return $res['package_id']; 
    }
    
    function is_active_package($parts_list_id,$type_listing_id)
    {
        $sql = "SELECT mp.member_id,
                       l.listing_id,
                       l.parts_list_id,
                       l.type_listing_id
                FROM parts_member_packege mp
                INNER JOIN parts_listing l ON l.member_id = mp.member_id
                WHERE l.parts_list_id = $parts_list_id
                AND l.type_listing_id = $type_listing_id
                AND mp.status = 1 
                LIMIT 1";
        
        $res = row_array($sql);
        return $res['member_id'] ? true : false;
    }
    
    function get_location_by_location_id($location_id)
    {
        $sql = "SELECT location FROM parts_location WHERE location_id = $location_id LIMIT 1";
        $res = row_array($sql);
        return $res['location'];
    }
    
    function get_parts_category_by_id($category_id)
    {
        $sql = "SELECT name FROM parts_category WHERE category_id = $category_id LIMIT 1";
        $res = row_array($sql);
        return $res['name'];
    }
    
    function get_user_email_by_username($username)
    {
        $sql = "SELECT email,contact_person_email FROM parts_member WHERE username LIKE '$username' LIMIT 1";
        $res = row_array($sql);
        if($res['contact_person_email'])
        {
            $email = $res['contact_person_email'];
        }
        else 
        {
           $email = $res['email']; 
        }
        return $email;
    }
    
    function get_member_info_by_listing_id($listing_id)
    {
        $sql = "SELECT m.member_id,
                       m.fname,
                       m.username,
                       m.title,
                       m.email,
                       m.user_type
                FROM parts_member m
                INNER JOIN parts_listing l ON l.member_id = m.member_id
                WHERE l.listing_id = $listing_id";
        $res = row_array($sql);
        return $res;
    }
}
?>