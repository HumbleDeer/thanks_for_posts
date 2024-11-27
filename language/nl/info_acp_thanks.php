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

$lang = array_merge($lang, [
	'ACP_DELTHANKS'						=> 'Opgeslagen ♥ hartje verwijderd',
	'ACP_POSTS'							=> 'Berichttotaal',
	'ACP_POSTSEND'						=> 'Overblijvende berichten met ♥ hartjes',
	'ACP_POSTSTHANKS'					=> 'Totaal aantal berichten met ♥ hartjes',
	'ACP_THANKS'						=> 'Geef ♥ hartjes voor 📝berichtjes',
	'ACP_THANKS_MOD_VER'				=> 'Extensie versie: ',
	'ACP_THANKS_TRUNCATE'				=> 'Wis de lijst met ♥ hartjes',
	'ACP_ALLTHANKS'						=> 'Aantal ♥ hartjes berekend',
	'ACP_THANKSEND'						=> 'Aantal ♥ hartjes nog te berekenen',
	'ACP_THANKS_REPUT'					=> 'Rating Opties',
	'ACP_THANKS_REPUT_SETTINGS'			=> 'Rating Opties',
	'ACP_THANKS_REPUT_SETTINGS_EXPLAIN'	=> 'Kies de standaard opties voor ratings op berichten, topics of forums; gebaseerd op het aantal ♥ hartjes. <br /> Het onderwerp (bericht, topic of forum) die het grootst aantal ♥ hartjes heeft, krijgt een beoordeling van 100%.',
	'ACP_THANKS_SETTINGS'				=> 'Instellingen voor♥ hartjes',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> 'Standaard instellingen voor ♥ hartjes op berichten kunnen hier aangepast worden.',
	'ACP_THANKS_REFRESH'				=> 'Ververs ♥ hartentellers',
	'ACP_UPDATETHANKS'					=> 'Aantal getelde ♥ hartjes opnieuw berekend',
	'ACP_USERSEND'						=> 'Overblijvende gebruikers die een ♥ hartje gaven',
	'ACP_USERSTHANKS'					=> 'Totaal aantal gebruikers die een ♥ hartjes gaven',

	'GRAPHIC_BLOCK_BACK'				=> 'ext/gfksx/thanksforposts/images/rating/reput_block_back.gif',
	'GRAPHIC_BLOCK_RED'					=> 'ext/gfksx/thanksforposts/images/rating/reput_block_red.gif',
	'GRAPHIC_DEFAULT'					=> 'Images',
	'GRAPHIC_OPTIONS'					=> 'Graphics Options',
	'GRAPHIC_STAR_BACK'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_back.gif',
	'GRAPHIC_STAR_BLUE'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_blue.gif',
	'GRAPHIC_STAR_GOLD'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_gold.gif',

	'IMG_THANKPOSTS'					=> 'Nog te ♥ behartigen voor het bericht',
	'IMG_REMOVETHANKS'					=> 'Annuleer je ♥ hartje',

	'LOG_CONFIG_THANKS'					=> 'De configuratie voor de \"Thanks For Post\" extensie werd aangepast.',

	'REFRESH'							=> 'Ververs',
	'REMOVE_THANKS'						=> 'Verwijder ♥ hartjes',
	'REMOVE_THANKS_EXPLAIN'				=> 'Gebruikers kunnen ♥ hartjes verwijderen als dit geactiveerd is.',

	'STEPR'								=> ' - uitgevoerd, stap %s',

	'THANKS_COUNTERS_VIEW'				=> '♥ hartentellers',
	'THANKS_COUNTERS_VIEW_EXPLAIN'		=> 'Indien geactiveerd, wordt het totaal aantal gegeven/gekregen ♥ hartjes weergegeven onder de gebruikersinformatie.',
	'THANKS_FORUM_REPUT_VIEW'			=> 'Toon forumscore',
	'THANKS_GLOBAL_POST'				=> '♥ hartjes gegeven in Globale Aankondigingen',
	'THANKS_GLOBAL_POST_EXPLAIN'		=> 'Sta ♥ hartjes geven toe op Globale Aankondigingen.',
	'THANKS_FORUM_REPUT_VIEW_EXPLAIN'	=> 'Toon forumscore op de forumlijst.',
	'THANKS_INFO_PAGE'					=> 'Informatief bericht',
	'THANKS_INFO_PAGE_EXPLAIN'			=> 'Toon informatieve berichtjes na het geven/wegnemen van een ♥ hartje.',
	'THANKS_NOTICE_ON'					=> 'Notificatie-opties toestaan',
	'THANKS_NOTICE_ON_EXPLAIN'			=> 'Sta gebruikers toe om notificaties over ♥ hartjes via hun profiel in- of uit te schakelen.',
	'THANKS_NUMBER'						=> 'Aantal ♥ hartjes die wordt weergegeven op profiel',
	'THANKS_NUMBER_EXPLAIN'				=> 'Maximum aantal ♥ hartjes die wordt weergegeven bij het bekijken van een profiel <br /> <strong>Waarschuwing: Het kiezen van een groot aantal weergegeven ♥ hartjes (meer dan 256) kan voor vertraging van het forum zorgen.</strong>',
	'THANKS_NUMBER_DIGITS'				=> 'aantal decimale plaatsen voor rating',
	'THANKS_NUMBER_DIGITS_EXPLAIN'		=> 'Geef het aantal decimale plaatsen aan dat gebruikt wordt voor ratings',
	'THANKS_NUMBER_ROW_REPUT'			=> 'Aantal rijen in de toplijst voor ratings',
	'THANKS_NUMBER_ROW_REPUT_EXPLAIN'	=> 'Configureer het aantal rijen dat wordt weergegeven op berichten-, topic- of forum-toplijsten.',
	'THANKS_NUMBER_POST'				=> 'Aantal ♥ hartjes die wordt weergegeven op berichten',
	'THANKS_NUMBER_POST_EXPLAIN'		=> 'Maximum aantal ♥ hartjes die wordt weergegeven bij het bekijken van een bericht <br /> <strong>Waarschuwing: Het kiezen van een groot aantal weergegeven ♥ hartjes (meer dan 256) kan voor vertraging van het forum zorgen.</strong>',
	'THANKS_ONLY_FIRST_POST'			=> 'Alleen voor het eerste bericht in een topic.',
	'THANKS_ONLY_FIRST_POST_EXPLAIN'	=> 'Sta ♥ hartjes alleen toe op het eerste bericht in een topic.',
	'THANKS_POST_REPUT_VIEW'			=> 'Toon rating voor berichten',
	'THANKS_POST_REPUT_VIEW_EXPLAIN'	=> 'If enabled, posts rating will be displayed when viewing a topic.',
	'THANKS_POSTLIST_VIEW'				=> 'List thanks in post',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> 'If enabled, a list of users who thanked the author for the post will be displayed. <br/> Note that this option will only be effective if the administrator has enabled the permission to give thanks for the post in that forum.',
	'THANKS_PROFILELIST_VIEW'			=> 'List thanks in profile',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> 'If enabled, a complete list of thanks including number of thanks and which posts a user has been thanked for will be displayed.',
	'THANKS_REFRESH'					=> 'Update thanks counters',
	'THANKS_REFRESH_EXPLAIN'			=> 'Here you can update thanks counters after a mass removal of posts/topics/users, splitting/merging of topics, setting/removing Global Announcement, enabling/disabling option ’Only for the first post in the topic’, changing posts owners and etc. This may take some time.<br /><strong>Important: To work correctly, the refresh counters function needs MySQL version 4.1 or later!<br />Attention!<br /> - Refreshing will erase all thanks for the guest posts!<br /> - Refreshing will erase all thanks for the Global Announcements, if the option ’Thanks in Global Announcements’ is OFF!<br /> - Refreshing will erase all thanks for all posts except the first post in the topic, if the option ’Only for the first post in the topic’ is ON!</strong>',
	'THANKS_REFRESH_MSG'				=> 'This can take a few minutes to complete. All incorrect thanks entries will be deleted! <br /> Action is not reversible!',
	'THANKS_REFRESHED_MSG'				=> 'Counters updated',
	'THANKS_REPUT_GRAPHIC'				=> 'Graphic display of the rating',
	'THANKS_REPUT_GRAPHIC_EXPLAIN'		=> 'If enabled, the rating value will be displayed graphically, using the images below.',
	'THANKS_REPUT_HEIGHT'				=> 'Graphics height',
	'THANKS_REPUT_HEIGHT_EXPLAIN'		=> 'Specify the height of the slider for the ranking in pixels. <br /> <strong> Attention! In order to display correctly, you should indicate the height equal to the height of the following image! </strong>',
	'THANKS_REPUT_IMAGE'				=> 'The main image for the slider',
	'THANKS_REPUT_IMAGE_DEFAULT'		=> '<strong>Graphics Preview</strong>',
	'THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN' => 'The image itself and the path to the image can be seen here. Image size is 15x15 pixels. <br /> You can draw your own images for the foreground and background. <strong>The height and width of the image should be the same to ensure the correct construction of the graphical scale.</strong>',
	'THANKS_REPUT_IMAGE_EXPLAIN'		=> 'The path - relative to the root folder of phpBB - to the graphic scale image.',
	'THANKS_REPUT_IMAGE_NOEXIST'		=> 'The main image for the graphical scale not found.',
	'THANKS_REPUT_IMAGE_BACK'			=> 'The background image for the slider',
	'THANKS_REPUT_IMAGE_BACK_EXPLAIN'	=> 'The path - relative to the root phpBB install folder - to the graphic scale background image.',
	'THANKS_REPUT_IMAGE_BACK_NOEXIST'	=> 'The background image for the graphic scale not found.',
	'THANKS_REPUT_LEVEL'				=> 'Number of images in a graphic scale',
	'THANKS_REPUT_LEVEL_EXPLAIN'		=> 'The maximum number of images corresponding to 100% of the value of the rating scale in the graphic.',
	'THANKS_TIME_VIEW'					=> 'Thanks time',
	'THANKS_TIME_VIEW_EXPLAIN'			=> 'If enabled, the post will display the thanks time.',
	'THANKS_TOP_NUMBER'					=> 'Number of users in top list',
	'THANKS_TOP_NUMBER_EXPLAIN'			=> 'Specify the number of users to show in the toplist on index. 0 - off displaying toplist.',
	'THANKS_TOPIC_REPUT_VIEW'			=> 'Show topic rating',
	'THANKS_TOPIC_REPUT_VIEW_EXPLAIN'	=> 'If enabled, topic rating will be displayed when viewing a forum.',
	'TRUNCATE'							=> 'Clear',
	'TRUNCATE_THANKS'					=> 'Clear the list of thanks',
	'TRUNCATE_THANKS_EXPLAIN'			=> 'This procedure completely clears all thanks counters (removes all issued thanks). <br /> This action is not reversible!',
	'TRUNCATE_THANKS_MSG'				=> 'Thanks counters cleared.',
	'REFRESH_THANKS_CONFIRM'			=> 'Do you really want to refresh the Thanks counters?',
	'TRUNCATE_THANKS_CONFIRM'			=> 'Do you really want to clear the Thanks counters?',
	'TRUNCATE_NO_THANKS'				=> 'Operation canceled',
	'ALLOW_THANKS_PM_ON'				=> 'Notify me PM if someone thanks my post',
	'ALLOW_THANKS_EMAIL_ON'				=> 'Notify me e-mail if someone thanks my post',
]);
