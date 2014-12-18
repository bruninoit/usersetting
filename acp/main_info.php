<?php
/**
*
* @package BruninoIt - Users Setting
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace bruninoit\usersetting\acp;
class main_info
{
function module()
{
return array(
'filename'	=> '\bruninoit\usersetting\acp\main_module',
'title'	=> 'ACP_US_TITLE',
'version'	=> '0.1.0-a1',
'modes'	=> array(
'settings'	=> array('title' => 'ACP_US_TITLE', 'auth' => 'ext_bruninoit/usersetting && acl_a_board', 'cat' => array('ACP_US_TITLE')),
),
);
}
}
