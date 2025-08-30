<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']                              = "welcome";
$route['admin_home']                                      = "admin/admin_panel/index";
$route['admin']                                           = "admin/admin/index";
$route['admin/logout']                                    = "admin/admin/logout";
$route['admin/category_list']                             = "admin/admin_panel/category_list";
$route['create_news']                                     = "admin/admin_panel/create_news";
$route['admin/package_list']                              = "admin/admin_panel/package_list";
$route['admin/delete_package/(:num)']                     = "admin/admin_panel/delete_package/$1";
$route['admin/faq_list']                                  = "admin/admin_utilty/faq_list";
$route['newsletter']                                      = "admin/admin_panel/newsletter";
$route['seller_list']                                     = "admin/admin_panel/seller_list";
$route['delete_member/(:num)']                            = "admin/admin_panel/delete_member/$1";
$route['set_member_status/(:num)/(:num)']                 = "admin/admin_panel/set_member_status/$1/$2";
$route['search_member']                                   = "admin/admin_panel/search_member";
$route['faq_list']                                        = "admin/admin_panel/faq_list";
$route['admin/static_page/(:num)']                        = "admin/admin_panel/static_page/$1";
$route['admin/menu_desc/(:any)']                          = "admin/admin_panel/menu_desc/$1";
$route['admin/advertise_list']                            = "admin/admin_panel/advertise_list";
$route['admin/delete_ads/(:num)']                         = "admin/admin_panel/delete_ads/$1";
$route['admin/ads_edit/(:num)']                           = "admin/admin_panel/ads_edit/$1";
$route['admin/category_edit/(:num)']                      = "admin/admin_panel/category_edit/$1";
$route['admin/make_model_list']                           = "admin/admin_panel/make_model_list";
$route['admin/suggestion_box']                            = "admin/admin_panel/suggestion_box";
$route['admin/credit_purchase_history']                   = "admin/admin_panel/credit_purchase_history";
$route['admin/add_credit/(:num)']                         = "admin/admin_panel/add_credit/$1";
$route['admin/edit_make_model/(:num)']                    = "admin/admin_panel/edit_make_model/$1";
$route['admin/member-parts-list']                         = "admin/admin_panel/member_parts_list";


###~~Add Listing~~###

$route['parts_equipment_parts']                           = "account/parts_equipment_parts";
$route['edit_parts_equipment_parts/(:num)/(:num)']        = "account/edit_parts_equipment_parts/$1/$2";
$route['parts_equipment_dismantling']                     = "account/parts_equipment_dismantling";
$route['edit_parts_equipment_dismantling/(:num)/(:num)']  = "account/edit_parts_equipment_dismantling/$1/$2";
$route['parts_lubes']                                     = "account/parts_lubes";
$route['edit_parts_lubes/(:num)/(:num)']                  = "account/edit_parts_lubes/$1/$2";
$route['parts_tyre']                                      = "account/parts_tyre";
$route['edit_parts_tyre/(:num)/(:num)']                   = "account/edit_parts_tyre/$1/$2";
$route['parts_workshop_parts_manuals']                    = "account/parts_workshop_parts_manuals";
$route['edit_parts_workshop_parts_manuals/(:num)/(:num)'] = "account/edit_parts_workshop_parts_manuals/$1/$2";
$route['parts_machine_attachments']                       = "account/parts_machine_attachments";
$route['edit_parts_machine_attachments/(:num)/(:num)']    = "account/edit_parts_machine_attachments/$1/$2";
$route['parts_workshop_tools']                            = "account/parts_workshop_tools";
$route['edit_parts_workshop_tools/(:num)/(:num)']         = "account/edit_parts_workshop_tools/$1/$2";
$route['profile_page_layout']                             = "account/profile_page_layout";

###~~Add Listing~~###

$route['my_listings']                                     = "account/my_listings";
$route['delete_listing/(:num)/(:num)']                    = "account/delete_listing/$1/$2";



###~~Search Panel~~###
$route['equipment_parts_part_num_search']                 = "search/equipment_parts_part_num_search";
$route['equipment_parts_part_num_search/(:num)']          = "search/equipment_parts_part_num_search/$1";
$route['equipment_parts_search']                          = "search/equipment_parts_search";
$route['equipment_parts_search/(:num)']                   = "search/equipment_parts_search/$1";
$route['equipment_dismantling_search']                    = "search/equipment_dismantling_search";
$route['equipment_dismantling_search/(:num)']             = "search/equipment_dismantling_search/$1";
$route['workshop_parts_manuals_search']                   = "search/workshop_parts_manuals_search";
$route['workshop_parts_manuals_search/(:num)']            = "search/workshop_parts_manuals_search/$1";
$route['parts_lubes_search']                              = "search/parts_lubes_search";
$route['parts_lubes_search/(:num)']                       = "search/parts_lubes_search/$1";
$route['parts_machine_attachments_search']                = "search/parts_machine_attachments_search";
$route['parts_machine_attachments_search/(:num)']         = "search/parts_machine_attachments_search/$1";
$route['parts_tyre_search']                               = "search/parts_tyre_search";
$route['parts_tyre_search/(:num)']                        = "search/parts_tyre_search/$1";
$route['parts_workshop_tools_search']                     = "search/parts_workshop_tools_search";
$route['parts_workshop_tools_search/(:num)']              = "search/parts_workshop_tools_search/$1";
$route['search_dealer']                                   = "search/search_dealer";
###~~Search Panel~~###


$route['registration']                                    = "welcome/registration";
$route['suggestion']                                      = "welcome/suggestion";
$route['update_about_me']                                 = "welcome/update_about_me";
$route['find-dealer']                                     = "welcome/find_dealer";
$route['parts-detail/(:num)/(:num)']                      = "welcome/partsdetail/$1/$2";
$route['add-credit']                                      = "welcome/add_credit";
#$route['parts_detail/(:num)/(:num)']                     = "welcome/parts_detail/$1/$2";


$route['email_alert']                                     = "emailalert";
$route['login']                                           = "authentication/login";
$route['login_check']                                     = "authentication/login_check";
$route['profile']                                         = "profile/index";
$route['logout']                                          = "authentication/logout";
$route['404_override']                                    = '';
$route['package_list']                                    = "profile/package_list";
$route['my_profile']                                      = "profile/my_profile";
$route['view_profile']                                    = "profile/view_profile";
$route['change_password']                                 = "profile/change_password";
$route['contact_us']                                      = "welcome/contact_us";
$route['faq']                                             = "welcome/faq";
$route['parts/(:any)']                                    = "emailalert/parts/$1";
$route['about_us']                                        = "emailalert/about_us";
$route['advertise_with_us']                               = "emailalert/advertise_with_us";
$route['contact_information']                             = "emailalert/contact_information";
$route['report_a_scam']                                   = "emailalert/report_a_scam";

$route['page/(:any)']                                     = "emailalert/page/$1";



$route['~(:any)/contact_us']                              = "welcome/dealer_contact/$1/$2";
$route['~(:any)/parts_list']                              = "emailalert/parts_list/$1/$2";
$route['~(:any)/about']                                   = "emailalert/about/$1/$2";
$route['~(:any)/parts_detail/(:num)/(:num)']              = "welcome/parts_detail/$1/$2/$3";


$route['~(:any)']                                         = "welcome/visit_profile/$1";



/* End of file routes.php */
/* Location: ./application/config/routes.php */