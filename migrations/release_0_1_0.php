<?php
/**
*
* @package StaffIt - Top Ten Topics
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace staffit\toptentopics\migrations;
class release_0_1_0 extends \phpbb\db\migration\migration
{
public function effectively_installed()
{
return isset($this->config['toptentopics_forum']);
}
static public function depends_on()
{
return array('\phpbb\db\migration\data\v310\alpha2');
}
public function update_data()
{
return array(
//array('config.add', array('toptentopics_position', 0)),
array('module.add', array(
'acp',
'ACP_CAT_DOT_MODS',
'ACP_US_CATEGORY'
)),
array('module.add', array(
'acp',
'ACP_US_CATEGORY',
array(
'module_basename'	=> '\bruninoit\usersetting\acp\main_module',
'modes'	=> array('settings')
),
)),
);
}
}
