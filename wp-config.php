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
define( 'DB_NAME', 'wpbanco' );

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
define( 'AUTH_KEY',         ':IVVNv7zuGBlwzD=L>T6{L_-K&0$0m{6N_`wo7T`cR!R@P@.a` d3Qb2k/Kus^3d' );
define( 'SECURE_AUTH_KEY',  'Kh[%oE^]*%j7.sAmaS)#emz~BOtB;9+rKBF!V)p^>g|6I>ddxU.p_MM@f1pZAb.z' );
define( 'LOGGED_IN_KEY',    'v}9E!^5>W}s8^=v|b&W<u,R!$7n5,$/;)iFyA>FYG?I}n{%1KtER&e$M7mHsEk<1' );
define( 'NONCE_KEY',        'q#rqCwrCwly9Oi_5146h2X:+F5GrP`dpjYvmz9VVOvo/*0@p]Mj4vb4eW[seK;x)' );
define( 'AUTH_SALT',        'WO~x(;PokvTD n#Wz~y&sU@ja_gYmv4ZTa]L~{Gl $e=hlB4$wD]?TjnV&_?LgU>' );
define( 'SECURE_AUTH_SALT', '<>@ehEaU5lq$M>+<YJxVaj!B53bDL*d/MO${#7j?eftMUc2$0rgdk6L6E|e5Hp 6' );
define( 'LOGGED_IN_SALT',   'qPjjBgSki{=/SPCp?H[(r;e>xG#5%s/z1L]p7!I2=J5QIT6[}(5pfa*)B6gN3-]:' );
define( 'NONCE_SALT',       'yL~{M<byXQn4OYg1> |^oF4wjI@.%HR$Z12kS5MNH|jhPt1P&Ehp!S{gc~fN#]yZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
