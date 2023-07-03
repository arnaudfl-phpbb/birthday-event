<?php
/**
*
* @package birthday_event_mod
* @version $Id: birthday_update.php,v 1.0 14:38 11/08/2007 reddog Exp $
* @copyright (c) 2006 reddog - http://www.reddevboard.com/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
$requester = 'birthday_update';
include($phpbb_root_path . 'common.' . $phpEx);

// start session management
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
// end session management

// variables
$gen_simple_header = true;

if( $userdata['user_level'] != ADMIN )
{
	message_die(GENERAL_MESSAGE, 'You are not authorised to access this page');
}

// main request
$sql = 'SELECT user_id, user_birthday
		FROM ' . USERS_TABLE . '
		WHERE user_birthday <> 0
			and user_zodiac = 0
		LIMIT 50';
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not obtain members birthday information', '', __LINE__, __FILE__, $sql);
}

if ( $db->sql_numrows($result) )
{
	while ( $row = $db->sql_fetchrow($result) )
	{
		$user_id = intval($row['user_id']);

		// birthday dateformat
		$tmp = explode('-', $row['user_birthday']);
		$birthdate = array(
			'd' => intval($tmp[0]),
			'm' => intval($tmp[1]),
			'y' => intval($tmp[2]),
		);
		$user_birthday = sprintf('%02d-%02d-%04d', $birthdate['m'], $birthdate['d'], $birthdate['y']);

		// zodiac signs
		$user_zodiac = $birthday->zodiac->get_zodiac($birthdate);

		$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_birthday = \'' . $user_birthday . '\', user_zodiac = ' . intval($user_zodiac) . '
				WHERE user_id = ' . $user_id;
		if( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not update users information', '', __LINE__, __FILE__, $sql);
		}
	}

	$meta = '<meta http-equiv="refresh" content="3;url="' . $get->url($requester) . '">';
	$template->assign_vars(array(
		'META' => $meta,
	));
	message_die(GENERAL_MESSAGE, 'Done.<br />If your browser does not support meta redirection please click <a href="' . $get->url($requester) . '">HERE</a> to be start script one more time to process next portion of users.');
}
$db->sql_freeresult($result);

message_die(GENERAL_MESSAGE, 'Done, all users were proceed.<br /><strong>Please be sure to delete from server this file now.</strong>');

?>