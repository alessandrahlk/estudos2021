<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aula_elementor' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UYTq2rXT$^BOa5Y=j]vJD@m:GOcZC3Y^%5)-74J2>5+gZ+ %<98?jmNA4uDC6I~y' );
define( 'SECURE_AUTH_KEY',  '&F[Ko5o[AO@^579TK(cjE$+g0[[3.(Uj%}tjo*NB8u0oVYF`?[ilmDS|A|kVAB~E' );
define( 'LOGGED_IN_KEY',    '#?:[nc-Fjk`?e+^ LV5T6rV:ay]z+Rne#y-a{09-a_vQ/3f!WJj9GEFWWr2z/H^6' );
define( 'NONCE_KEY',        '4OvZ&!]~uYAX)$uwar<1+e@|@4Nd3U#[j!2i>^|(1 ,Er+/3@+EiCi1RuvHm90pH' );
define( 'AUTH_SALT',        '-BP,:U;jK/aC-wt{j{T)-.HX4C?@4cGbW=,lIF7SK;$Rb-rOHET93H,M+~G|&tph' );
define( 'SECURE_AUTH_SALT', 'u^dVc2ortKq4_mUT(/{SCjkkl9zk*i/oeCK^]ch=!^D*h S;P/u,,EpbNUz6eZH[' );
define( 'LOGGED_IN_SALT',   'qg=}g-z^;vdz`!LB9IiHR|)S4AVx=?,M}?{sq8hyj^aUeoFZY!fv je6;I< $mvX' );
define( 'NONCE_SALT',       'X~PwWp:%%pw0@4=H3RE:MRF>Rs/<CCWVj%LmE,CLm1h=@eh7Duy:ID$?9Ddf4M/%' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
