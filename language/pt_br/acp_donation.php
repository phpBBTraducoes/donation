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
	'DONATION_SAVED'						=> 'Configurações de doações salvas',
	'DONATION_VERSION'						=> 'Versão',
	'DONATION_SETTINGS'						=> 'Configuração global de doação',
	'DONATION_ENABLE'						=> 'Ativar Donation extension',
	'DONATION_ENABLE_EXPLAIN'				=> 'Ativar ou desativar a Donation extension.',
	'DONATION_INDEX_ENABLE'					=> 'Mostrar estatísticas de doações no índice',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Ative isso se desejar exibir as estatísticas de doação no índice.',
	'DONATION_INDEX_TOP'					=> 'Mostrar estatísticas de doações no topo',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Ative isso se desejar exibir as estatísticas de doação na parte superior do índice do fórum.',
	'DONATION_INDEX_BOTTOM'					=> 'Mostrar estatísticas de doações em baixo',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Ative isso se desejar exibir as estatísticas de doação na parte inferior do índice do fórum.',
	'DONATION_EMAIL'						=> 'Endereço de e-mail Paypal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Digite seu endereço de e-mail Paypal.',
	'DONATION_STATS_SETTINGS'				=> 'Configuração das estatísticas de doação ',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Ativar Doações Recebidas',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Ativar Doações Recebidas deve esta ativado se você deseja exibi-la.',
	'DONATION_ACHIEVEMENT'					=> 'Doações recebidas',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'A quantidade atual aumentada através de doações.',
	'DONATION_GOAL_ENABLE'					=> 'Ativar objetivo de Doação',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Ativar objetivo de Doação deve estar habilitado se você quiser exibi-lo.',
	'DONATION_GOAL'							=> 'Objetivo de Doação',
	'DONATION_GOAL_EXPLAIN'					=> 'O valor que deseja aumentar no total.',
	'DONATION_GOAL_CURRENCY'				=> 'Moeda da doação',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'A Moeda de Doações Recebidas e Objetivo de Doação.',
	'DONATION_BODY_SETTINGS'				=> 'Configuração da página de doação',
	'DONATION_BODY'							=> 'Texto da página de doação',
	'DONATION_BODY_EXPLAIN'					=> 'Digite o texto que deseja exibir na página Doação.<br /><br />HTML é permitido.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configuração da doação bem sucedida',
	'DONATION_SUCCESS'						=> 'Texto de doação bem sucedida',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Digite o texto que deseja exibir na página de sucesso<br />Esta é a página que os usuários são redirecionados depois de uma doação bem-sucedida.<br /><br />HTML é permitido.',
	'DONATION_CANCEL_SETTINGS'				=> 'Configuração cancelamento de doação  ',
	'DONATION_CANCEL'						=> 'Texto de cancelamento de doação',
	'DONATION_CANCEL_EXPLAIN'				=> 'Digite o texto que deseja exibir na página de cancelamento<br />Esta é a página que os usuários são redirecionados depois que eles cancelam uma doação.<br /><br />HTML é permitido.',
));
