/*
|--------------------------------------------------------------------------
| Null Value Function - If null or empty return default value
|--------------------------------------------------------------------------
*/
function nvl(&$var, $default = ""){
  return isset($var) && !empty($var) ? $var : $default;
}