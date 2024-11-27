<?php
/**
 *
 * Thanks For Posts.
 * Adds the ability to thank the author and to use per posts/topics/forum rating system based on the count of thanks.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'CLEAR_LIST_THANKS'			=> '♥ hartjes-lijst wissen',
	'CLEAR_LIST_THANKS_CONFIRM'	=> 'Ben je zeker dat je de gebruikers ♥ hartjes wilt verwijderen?',
	'CLEAR_LIST_THANKS_GIVE'	=> 'Lijst van ♥ hartjes die de gebruiker gaf werd gewist.',
	'CLEAR_LIST_THANKS_POST'	=> 'Lijst van ♥ hartjes die het bericht kreeg werd gewist.',
	'CLEAR_LIST_THANKS_RECEIVE'	=> 'Lijst van ♥ hartjes die de gebruiker kreeg werd gewist.',

	'DISABLE_REMOVE_THANKS'		=> 'Het verwijderen van ♥ hartjes werd door de beheerder uitgeschakeld',

	'GIVEN'						=> '♥ gegeven',
	'GLOBAL_INCORRECT_THANKS'	=> 'Je kan geen ♥ hartje geven aan een globale aankondiging die niet verwijst naar een specifiek forum..',
	'GRATITUDES'				=> 'Alle ♥ hartjes',

	'INCORRECT_THANKS'			=> 'Ongeldig ♥ hartje',

	'JUMP_TO_FORUM'				=> 'Ga naar forum',
	'JUMP_TO_TOPIC'				=> 'Ga naar onderwerp',

	'FOR_MESSAGE'               => ' voor het bericht',
    'FURTHER_THANKS'            => [
        1 => ' en nog één gebruiker',
        2 => ' en nog %d gebruikers',
    ],

	'NO_VIEW_USERS_THANKS'		=> 'Je bent niet bemachtigd om de ♥ hartjeslijst te bekijken.',

	'NOTIFICATION_THANKS_GIVE'	=> [
		1 => '%1$s <strong>gaf je een ♥ hartje</strong> voor je bericht:',
		2 => '%1$s <strong>gaf je een ♥ hartje</strong> voor jouw berichten:',
	],
	'NOTIFICATION_THANKS_REMOVE'=> [
		1 => '<strong>♥ Hartje verwijderd</strong> van %1$s voor dit bericht:',
		2 => '<strong>♥ Hartje verwijderd</strong> van %1$s voor deze berichten:',
	],
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> 'Iemand gaf je post een ♥ hartje',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> 'Iemand bedacht zich over hun ♥ hartje',

	'RECEIVED'					=> '♥ ontvangen',
	'REMOVE_THANKS'				=> 'Verwijder je ♥ hartje: ',
	'REMOVE_THANKS_CONFIRM'		=> 'Ben je zeker dat je je ♥ hartjes wilt verwijderen??',
	'REMOVE_THANKS_SHORT'		=> 'Verwijder ♥ hartjes',
	'REPUT'						=> 'Puntjes',
	'REPUT_TOPLIST'				=> 'Beste ♥ hartjes — %d',
	'RATING_LOGIN_EXPLAIN'		=> 'Je bent niet bemachtigd om de ♥ hartjes toplijst te bekijken.',
	'RATING_NO_VIEW_TOPLIST'	=> 'Je bent niet bemachtigd om de ♥ hartjes toplijst te bekijken.',
	'RATING_VIEW_TOPLIST_NO'	=> 'De ♥ hartjes toplijst lijst is leeg, of uitgeschakeld.',
	'RATING_FORUM'				=> 'Forum',
	'RATING_POST'				=> 'Bericht',
	'RATING_TOP_FORUM'			=> 'Forum met meeste ♥ hartjes',
	'RATING_TOP_POST'			=> 'Bericht met meeste ♥ hartjes',
	'RATING_TOP_TOPIC'			=> 'Onderwerp met meeste ♥ hartjes',
	'RATING_TOPIC'				=> 'Onderwerp',

	'THANK'						=> 'keer',
	'THANK_FROM'				=> 'van',
	'THANK_TEXT_1'				=> 'Wie gaf ',
	'THANK_TEXT_2'				=> ' een ♥? ',
	'THANK_TEXT_2PL'			=> ' een ♥? (totaal %d):',
	'THANK_POST'				=> 'Geef de auteur van dit bericht een ♥ hartje: ',
	'THANK_POST_SHORT'			=> '♥ Hartje',
	'THANKS'					=> [
		1	=> '%d',
		2	=> '%d',
	],
	'THANKS_BACK'				=> 'Terug',
	'THANKS_INFO_GIVE'			=> 'Je hebt net een ♥ hartje gegeven voor een bericht.',
	'THANKS_INFO_REMOVE'		=> 'Je hebt je ♥ hartje weggehaald voor een bericht.',
	'THANKS_LIST'				=> 'bekijk/sluit lijst',
	'THANKS_PM_MES_GIVE'		=> 'heeft jou een ♥ hartje gegeven voor je bericht',
	'THANKS_PM_MES_REMOVE'		=> 'heeft zich bedacht over hun ♥ hartje op je bericht',
	'THANKS_PM_SUBJECT_GIVE'	=> '♥ Hartje gegeven voor het bericht',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Verwijderd ♥ hartje voor het bericht',
	'THANKS_USER'				=> '♥ Hartjeslijst',
	'TOPLIST'					=> 'Berichten ranglijst',
]);
