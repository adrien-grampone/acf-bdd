<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'acf-bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':z0S{{|mA(6Hsvcd)wnpRC|l0m/JJ|ayc**$c^@>ILGH;JzDO(BcJ4{xk^v<s4pJ' );
define( 'SECURE_AUTH_KEY',  'Z}Sx+.G29,iPIM9Gmuu;MC0nxi.8an>6aTM%dMPQE4v]y8->5Gga?#ggr$6yKB#L' );
define( 'LOGGED_IN_KEY',    'ZbMd&p$v,<G-wC#p^=dd|o4RM5cxj3|<2;N8X)7S/,TU@fySb.Mk>v9)yBeQUCcb' );
define( 'NONCE_KEY',        'YBmAXCGZ%<RHQ!~i.f/VzV|-qf3f}|EkEbR=-8Ja>MnGY#}nie}sDN89][H[s@eb' );
define( 'AUTH_SALT',        'Wfvn!n$vZN] h&NR^+-&^UC/~@G4n LIt~P~G_<$*3).vwiSZ9@C]lHhkZtuX#:/' );
define( 'SECURE_AUTH_SALT', 'gWe@+3FKCtdxBR0KEhhP)C0icRq%}l1V+C}n$g!-E8fSH:]&cYI_P(kX 8*?H<2;' );
define( 'LOGGED_IN_SALT',   '.4dJ7W,!jx^tnPJ^1|DTT/l)Bcr905wr]x7.0hL DK-e]}P2[[u#LET[gdSu |XZ' );
define( 'NONCE_SALT',       '_{MbWzUm#5t?dQDzv74k%RiS[5KVSxy(gVBauU#RPj|Y>GF_*%=;C@?_T~ .{Knt' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
