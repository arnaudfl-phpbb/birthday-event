<?php
/**
*
* @package birthday_event_mod [English]
* @version $Id: lang_extend_birthday.php,v 1.0.1 11:46 17/08/2007 reddog Exp $
* @copyright (c) 2007 reddog - http://www.reddevboard.com/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

// birthday dateformat
$lang['birthday_dateformat'] = 'F d, Y';

// admin part
if ( $lang_extend_admin )
{
	$lang['birthday_settings'] = 'Birthday settings';
	$lang['birthday_show'] = 'Birthday Panel';
	$lang['birthday_show_explain'] = 'Determines whether or not the Birthday Panel on the main Index should be visible in the event that there are no birthdays or upcoming birthdays.';
	$lang['birthday_wishes'] = 'Birthday Wishes';
	$lang['birthday_wishes_explain'] = 'Wish Happy Birthday to members by displaying the Birthday Panel on the main Index, and a birthday cake in their profile and beside their posts.';
	$lang['birthday_require'] = 'Require Date of Birth';
	$lang['birthday_require_explain'] = 'The date of birth will be required for new registered users and members who would like to modify their profile.';
	$lang['birthday_lock'] = 'Disallow Date of Birth Changes';
	$lang['birthday_lock_explain'] = 'Once entered, the date of birth cannot be changed, again.';
	$lang['birthday_lookahead'] = 'Number of Days to Look Ahead';
	$lang['birthday_lookahead_explain'] = 'Affects the Birthday Panel on the main Index. Entering 0 will disable Birthday Lookahead';
	$lang['birthday_age_range'] = 'Allowable Age Range (in years)';
	$lang['birthday_age_range_explain'] = 'Indicate here the minimum and maximum user age allowed.';
	$lang['birthday_zodiac'] = 'Zodiac Signs';
	$lang['birthday_zodiac_explain'] = 'Display or not the zodiac signs in users profile and beside users posts.';
}

// main
$lang['birthday'] = 'Birthday';
$lang['happy_birthday'] = 'Happy Birthday!';
$lang['poster_age'] = 'Age';

// index's birthdays panel
$lang['birthdays'] = 'Birthdays';
$lang['which_birthday'] = 'Who celebrates his birthday?';
$lang['congratulations'] = 'Congratulations to:';
$lang['no_birthdays'] = 'No birthdays today';
$lang['upcoming_birthdays'] = 'Users with a birthday within the next <strong>%d</strong> days:';
$lang['no_upcoming'] = 'No users are having a birthday in the upcoming <strong>%d</strong> days';

// error
$lang['birthday_range'] = 'Birthdays must yield ages between %d and %d years, inclusive.';
$lang['birthday_invalid'] = 'You didn\'t specify a valid Birthday.';

// user's profile
$lang['birthdate'] = 'Date of Birth';
$lang['birthdate_explain'] = 'By filling this field, your zodiac sign and your age will be displayed';
$lang['month'] = 'Month';
$lang['day'] = 'Day';
$lang['year'] = 'Year';
$lang['default_month'] = '[ Select a Month ]';
$lang['default_day'] = 'dd';
$lang['default_year'] = 'yyyy';

// zodiac signs
$lang['Capricorn'] = 'Capricorn';
$lang['Aquarius'] = 'Aquarius';
$lang['Pisces'] = 'Pisces';
$lang['Aries'] = 'Aries';
$lang['Taurus'] = 'Taurus';
$lang['Gemini'] = 'Gemini';
$lang['Cancer'] = 'Cancer';
$lang['Leo'] = 'Leo';
$lang['Virgo'] = 'Virgo';
$lang['Libra'] = 'Libra';
$lang['Scorpio'] = 'Scorpio';
$lang['Sagittarius'] = 'Sagittarius';

?>