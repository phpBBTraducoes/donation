<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'Doar',
	'VIEWING_DONATE'						=> 'Visualizando a página de doações',
	'DONATION_DISABLED'						=> 'Desculpe, a página de Doação não está disponível no momento',
	'DONATION_DISABLED_EMAIL'				=> 'Conta de e-mail do Paypal não configurada. Por favor avise o administrador do fórum.',
	'DONATION_NOT_INSTALLED_USER'			=> 'A página Doação não está instalada. Por favor avise o administrador do fórum.',
	'DONATION_TITLE'						=> 'Faça uma doação',
	'DONATION_CANCELLED_TITLE'				=> 'Doação cancelada',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Doação bem sucedida',
	'DONATION_CONTACT_PAYPAL'				=> 'Conectando-se ao Paypal - Aguarde ...',
	'DONATION_BODY_DEFAULT'					=> 'Faça uma doação para apoiar este site e nos ajude com os custos de hospedagem.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Obrigado por sua doação. É muito apreciado.',
	'DONATION_CANCEL_DEFAULT'				=> 'Você cancelou sua doação. Não é problema, mas considere uma doação no futuro.',
	'DONATIONS_INDEX'						=> 'Doações',
	'DONATION_USD'							=> '$ USD',
	'DONATION_EUR'							=> '€ EUR',
	'DONATION_GBP'							=> '£ GBP',
	'DONATION_JPY'							=> '¥ JPY',
	'DONATION_AUD'							=> '$ AUD',
	'DONATION_CAD'							=> '$ CAD',
	'DONATION_HKD'							=> '$ HKD',
	'DONATION_ACHIEVED'						=> 'Nós recebemos %1$s <strong>%2$s</strong> em doações.',
	'DONATION_GOAL_ACHIEVED'				=> 'Nosso objetivo é aumentar %1$s <strong>%2$s</strong>',
));
