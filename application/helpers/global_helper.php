<?php
function hash_password($str){
    $ci =& get_instance();
    
    return md5($ci->config->item('encryption_key').$str.$ci->config->item('encryption_key'));

}
if (!function_exists('getController')) {
	function getController()
	{
		$CI = get_instance();
		$query = $CI->router->fetch_class();
		return $query;
	}
}

if (!function_exists('getFunction')) {
	function getFunction()
	{
		$CI = get_instance();
		$query = $CI->router->fetch_method();
		return $query;
	}
}

if(!function_exists('getListData'))
{
	function getListData($table="", $arr = "")
	{
		$CI = get_instance();
		if($arr != ""){
			$CI->db->where($arr);
		}
		$query = $CI->db->get($table)->result_array();
		return $query;
	}
}

?>