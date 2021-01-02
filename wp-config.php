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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'handel_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ym[wrZPX{ ~p4V<Di%|@8q:U|B{nX{/c$]{e`B6@SN%kvld6.y)b##?rM T1Xh*c' );
define( 'SECURE_AUTH_KEY',  ']9%U5He&&$o)g3-<g@eWK}(KMON*.Fj371`W*&nM# v|x@,Q1Rmh*;2/4h(ct8Ml' );
define( 'LOGGED_IN_KEY',    'CgBH::vs!d|sYPMMR4(ZG2y<i^R+n+RO:cV{$~&NpHLHV&F^`qTlK<:0G[/FEG^u' );
define( 'NONCE_KEY',        'oLP7X|&*(t5Y/}6mG. S0-afk#)Pk$Y)d1UtMfEz?$k`E2onnz@w|D!xw?kiRSv3' );
define( 'AUTH_SALT',        '=?}[V]|?:IjWa$?rS-YhXfvyZySW%P0_GuFCGh)f}P[K9.TnM!!^{bByw|BWgHEX' );
define( 'SECURE_AUTH_SALT', 'gj[|v|d:hpnYq[0Bt ?IkGj406(=);:ao7u.YT<zfMFP`pqfrp4Pi<_$}[l9TP{5' );
define( 'LOGGED_IN_SALT',   'GRfcS)at?aW:3GzQVw~J:S2>:Ra79fQS^#B||<2&/Pf1rp-=Kw?z`>`l(?4NNvBf' );
define( 'NONCE_SALT',       '/Q%b0^A r^k_c;dadtW#[-*/Ld.o}J9CH:BSf*VonV.[{2f>6YamUmb{!.udI(HY' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
