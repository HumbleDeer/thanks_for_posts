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
	'ACP_DELTHANKS'                        => 'Verwijderde opgeslagen ♥ hartjes',
    'ACP_POSTS'                         => 'Totaal aantal berichten',
    'ACP_POSTSEND'                      => 'Overige berichten met ♥ hartjes',
    'ACP_POSTSTHANKS'                   => 'Totaal aantal berichten met ♥ hartjes',
    'ACP_THANKS'                        => 'Geef ♥ hartjes voor berichten',
    'ACP_THANKS_MOD_VER'                => 'Extensie versie: ',
    'ACP_THANKS_TRUNCATE'               => 'Wis de lijst met ♥ hartjes',
    'ACP_ALLTHANKS'                     => '♥ Hartjes verwerkt',
    'ACP_THANKSEND'                     => 'Nog te verwerken ♥ hartjes',
    'ACP_THANKS_REPUT'                  => 'Waarderingsopties',
    'ACP_THANKS_REPUT_SETTINGS'         => 'Waarderingsopties',
    'ACP_THANKS_REPUT_SETTINGS_EXPLAIN' => 'Stel de standaardinstellingen in voor de waardering van berichten, onderwerpen en forums, gebaseerd op het ♥ hartjes-systeem. <br /> Het onderwerp (bericht, onderwerp of forum) met het grootste aantal ♥ hartjes krijgt een waardering van 100%.',
    'ACP_THANKS_SETTINGS'               => '♥ Hartje-instellingen',
    'ACP_THANKS_SETTINGS_EXPLAIN'       => 'Standaardinstellingen voor ♥ hartjes voor berichten kunnen hier worden gewijzigd.',
    'ACP_THANKS_REFRESH'                => 'Werk ♥ hartje-tellers bij',
    'ACP_UPDATETHANKS'                  => 'Bijgewerkte opgeslagen ♥ hartjes',
    'ACP_USERSEND'                      => 'Overige gebruikers die ♥ hartjes hebben gegeven',
    'ACP_USERSTHANKS'                   => 'Totaal aantal gebruikers die ♥ hartjes hebben gegeven',

    'GRAPHIC_BLOCK_BACK'                => 'ext/gfksx/thanksforposts/images/rating/reput_block_back.gif',
    'GRAPHIC_BLOCK_RED'                 => 'ext/gfksx/thanksforposts/images/rating/reput_block_red.gif',
    'GRAPHIC_DEFAULT'                   => 'Afbeeldingen',
    'GRAPHIC_OPTIONS'                   => 'Grafische opties',
    'GRAPHIC_STAR_BACK'                 => 'ext/gfksx/thanksforposts/images/rating/reput_star_back.gif',
    'GRAPHIC_STAR_BLUE'                 => 'ext/gfksx/thanksforposts/images/rating/reput_star_blue.gif',
    'GRAPHIC_STAR_GOLD'                 => 'ext/gfksx/thanksforposts/images/rating/reput_star_gold.gif',

    'IMG_THANKPOSTS'                    => 'Geef een ♥ hartje voor het bericht',
    'IMG_REMOVETHANKS'                  => 'Verwijder ♥ hartje',

    'LOG_CONFIG_THANKS'                 => 'Configuratie van de extensie "♥ Hartjes voor berichten" bijgewerkt',

    'REFRESH'                           => 'Verversen',
    'REMOVE_THANKS'                     => 'Verwijder ♥ hartje',
    'REMOVE_THANKS_EXPLAIN'             => 'Gebruikers kunnen ♥ hartjes verwijderen als deze optie is ingeschakeld.',

    'STEPR'                             => ' - uitgevoerd, stap %s',

    'THANKS_AJAX_ENABLE'                => 'Schakel Ajax in',
    'THANKS_AJAX_ENABLE_EXPLAIN'        => 'Indien ingeschakeld, worden het geven en verwijderen van ♥ hartjes uitgevoerd zonder paginaverversing.',
    'THANKS_COUNTERS_VIEW'              => '♥ Hartje-tellers',
    'THANKS_COUNTERS_VIEW_EXPLAIN'      => 'Indien ingeschakeld, wordt de informatie over het aantal gegeven/ontvangen ♥ hartjes weergegeven onder de gebruikersinformatie.',
    'THANKS_FORUM_REPUT_VIEW'           => 'Toon forumwaardering',
    'THANKS_GLOBAL_POST'                => '♥ Hartjes in globale aankondigingen',
    'THANKS_GLOBAL_POST_EXPLAIN'        => 'Indien ingeschakeld, zijn ♥ hartjes in globale aankondigingen toegestaan.',
    'THANKS_FORUM_REPUT_VIEW_EXPLAIN'   => 'Indien ingeschakeld, wordt de forumwaardering weergegeven in de forumlijst.',
    'THANKS_INFO_PAGE'                  => 'Informatieve berichten',
    'THANKS_INFO_PAGE_EXPLAIN'          => 'Indien ingeschakeld, worden er informatieve berichten weergegeven na het geven/verwijderen van een ♥ hartje.',
    'THANKS_NOTICE_ON'                  => 'Meldingen zijn beschikbaar',
    'THANKS_NOTICE_ON_EXPLAIN'          => 'Indien ingeschakeld, zijn meldingen beschikbaar en kan de gebruiker de notificatie configureren via zijn profiel.',
    'THANKS_NUMBER'                     => 'Aantal ♥ hartjes uit de lijst weergegeven in profiel',
    'THANKS_NUMBER_EXPLAIN'             => 'Maximum aantal ♥ hartjes dat wordt weergegeven bij het bekijken van een profiel. <br /> <strong> Houd er rekening mee dat vertraging merkbaar zal zijn als deze waarde hoger is dan 250. </strong>',
    'THANKS_NUMBER_DIGITS'              => 'Aantal decimalen voor waardering',
    'THANKS_NUMBER_DIGITS_EXPLAIN'      => 'Specificeer het aantal decimalen voor de waarde van de waardering.',
    'THANKS_NUMBER_ROW_REPUT'           => 'Aantal rijen in de toplijst voor waardering',
    'THANKS_NUMBER_ROW_REPUT_EXPLAIN'   => 'Specificeer het aantal rijen dat wordt weergegeven in de toplijst van berichten-, onderwerpen- en forumwaarderingen.',
    'THANKS_NUMBER_POST'                => 'Aantal ♥ hartjes weergegeven in een bericht',
    'THANKS_NUMBER_POST_EXPLAIN'        => 'Maximum aantal ♥ hartjes dat wordt weergegeven bij het bekijken van een bericht. <br /> <strong> Houd er rekening mee dat vertraging merkbaar zal zijn als deze waarde hoger is dan 250. </strong>',
    'THANKS_ONLY_FIRST_POST'            => 'Alleen voor het eerste bericht in het onderwerp',
    'THANKS_ONLY_FIRST_POST_EXPLAIN'    => 'Indien ingeschakeld, kunnen gebruikers alleen het eerste bericht in het onderwerp een ♥ hartje geven.',
    'THANKS_POST_REPUT_VIEW'            => 'Toon waardering voor berichten',
	'THANKS_POST_REPUT_VIEW_EXPLAIN'   => 'Indien ingeschakeld, wordt de waardering van berichten weergegeven bij het bekijken van een onderwerp.',
    'THANKS_POSTLIST_VIEW'              => 'Toon lijst van ♥ hartjes bij bericht',
    'THANKS_POSTLIST_VIEW_EXPLAIN'      => 'Indien ingeschakeld, wordt een lijst weergegeven van gebruikers die de auteur van het bericht een ♥ hartje hebben gegeven. <br/> Let op: deze optie is alleen van toepassing als de beheerder de toestemming heeft gegeven om berichten in dat forum te bedanken.',
    'THANKS_PROFILELIST_VIEW'           => 'Toon lijst van ♥ hartjes in profiel',
    'THANKS_PROFILELIST_VIEW_EXPLAIN'   => 'Indien ingeschakeld, wordt een volledige lijst van ♥ hartjes weergegeven, inclusief het aantal ♥ hartjes en voor welke berichten een gebruiker is bedankt.',
    'THANKS_REFRESH'                    => 'Werk ♥ hartje-tellers bij',
    'THANKS_REFRESH_EXPLAIN'            => 'Hier kunt u de ♥ hartje-tellers bijwerken na een massale verwijdering van berichten/onderwerpen/gebruikers, het splitsen/samenvoegen van onderwerpen, het instellen/verwijderen van een globale aankondiging, het inschakelen/uitschakelen van de optie "Alleen voor het eerste bericht in een onderwerp", het wijzigen van eigenaars van berichten, enz. Dit kan enige tijd duren.<br /><strong>Belangrijk: Om correct te kunnen werken, heeft de functie voor het bijwerken van tellers MySQL versie 4.1 of hoger nodig!<br />Let op!<br /> - Bijwerken zal alle ♥ hartjes voor gastberichten wissen!<br /> - Bijwerken zal alle ♥ hartjes voor globale aankondigingen wissen, als de optie "♥ hartjes in globale aankondigingen" UIT is!<br /> - Bijwerken zal alle ♥ hartjes wissen voor alle berichten behalve het eerste bericht in het onderwerp, als de optie "Alleen voor het eerste bericht in het onderwerp" AAN is!</strong>',
    'THANKS_REFRESH_MSG'                => 'Dit kan enkele minuten duren. Alle onjuiste ♥ hartje-vermeldingen worden verwijderd! <br /> Deze actie kan niet ongedaan worden!',
    'THANKS_REFRESHED_MSG'              => 'Tellers bijgewerkt',
    'THANKS_REPUT_GRAPHIC'              => 'Grafische weergave van de waardering',
    'THANKS_REPUT_GRAPHIC_EXPLAIN'      => 'Indien ingeschakeld, wordt de waarde van de waardering grafisch weergegeven, met behulp van de onderstaande afbeeldingen.',
    'THANKS_REPUT_HEIGHT'               => 'Hoogte grafiek',
    'THANKS_REPUT_HEIGHT_EXPLAIN'       => 'Specificeer de hoogte van de schuifbalk voor de rangschikking in pixels. <br /> <strong> Let op! Om correct weer te geven, moet u de hoogte aangeven die gelijk is aan de hoogte van het volgende beeld! </strong>',
    'THANKS_REPUT_IMAGE'                => 'Hoofdafbeelding voor de schuifbalk',
    'THANKS_REPUT_IMAGE_DEFAULT'        => '<strong>Voorbeeld grafiek</strong>',
    'THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN' => 'De afbeelding zelf en het pad naar de afbeelding zijn hier te zien. Afbeeldingsgrootte is 15x15 pixels. <br /> U kunt uw eigen afbeeldingen tekenen voor de voorgrond en achtergrond. <strong>De hoogte en breedte van de afbeelding moeten hetzelfde zijn om de correcte constructie van de grafische schaal te garanderen.</strong>',
    'THANKS_REPUT_IMAGE_EXPLAIN'        => 'Het pad - ten opzichte van de hoofdmap van phpBB - naar de afbeelding van de grafische schaal.',
    'THANKS_REPUT_IMAGE_NOEXIST'        => 'De hoofdafbeelding voor de grafische schaal niet gevonden.',
    'THANKS_REPUT_IMAGE_BACK'           => 'De achtergrondafbeelding voor de schuifbalk',
    'THANKS_REPUT_IMAGE_BACK_EXPLAIN'   => 'Het pad - ten opzichte van de hoofdmap van de phpBB-installatie - naar de achtergrondafbeelding van de grafische schaal.',
    'THANKS_REPUT_IMAGE_BACK_NOEXIST'   => 'De achtergrondafbeelding voor de grafische schaal niet gevonden.',
    'THANKS_REPUT_LEVEL'                => 'Aantal afbeeldingen in een grafische schaal',
    'THANKS_REPUT_LEVEL_EXPLAIN'        => 'Het maximale aantal afbeeldingen dat overeenkomt met 100% van de waarde van de waarderingsschaal in de grafiek.',
    'THANKS_TIME_VIEW'                  => 'Tijdstip ♥ hartje',
    'THANKS_TIME_VIEW_EXPLAIN'          => 'Indien ingeschakeld, wordt het tijdstip van het ♥ hartje weergegeven bij het bericht.',
    'THANKS_TOP_NUMBER'                 => 'Aantal gebruikers in toplijst',
    'THANKS_TOP_NUMBER_EXPLAIN'         => 'Specificeer het aantal gebruikers dat in de toplijst op de indexpagina moet worden weergegeven. 0 - schakel het weergeven van de toplijst uit.',
    'THANKS_TOPIC_REPUT_VIEW'           => 'Toon onderwerpwaardering',
    'THANKS_TOPIC_REPUT_VIEW_EXPLAIN'   => 'Indien ingeschakeld, wordt de onderwerpwaardering weergegeven bij het bekijken van een forum.',
    'TRUNCATE'                          => 'Wissen',
    'TRUNCATE_THANKS'                   => 'Wis de lijst met ♥ hartjes',
    'TRUNCATE_THANKS_EXPLAIN'           => 'Deze procedure wist alle ♥ hartje-tellers volledig (verwijdert alle gegeven ♥ hartjes). <br /> Deze actie kan niet ongedaan worden!',
    'TRUNCATE_THANKS_MSG'               => '♥ Hartje-tellers gewist.',
    'REFRESH_THANKS_CONFIRM'            => 'Wilt u de ♥ hartje-tellers echt bijwerken?',
    'TRUNCATE_THANKS_CONFIRM'           => 'Wilt u de ♥ hartje-tellers echt wissen?',
    'TRUNCATE_NO_THANKS'                => 'Operatie geannuleerd',
    'ALLOW_THANKS_PM_ON'                => 'Stuur mij een PM als iemand mijn bericht een ♥ hartje geeft',
    'ALLOW_THANKS_EMAIL_ON'             => 'Stuur mij een e-mail als iemand mijn bericht een ♥ hartje geeft'
]);
