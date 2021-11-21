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
define( 'DB_NAME', 'travel_agency' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Y&0:I*9X.xH]h(4 ,Fwl`Q++I5#BS:l=cx/oqlmp~9:`rp2?*p8QL3ynZqQ%,d)*' );
define( 'SECURE_AUTH_KEY',  'qW8(dw0E5SbKbBW#cUZ0D7SHn28kG9/Y~?K5|:aYZ:]8MwQb9F>pc4Zki&(a.ie{' );
define( 'LOGGED_IN_KEY',    'mU3/[HM/<ayW2[kSDrjAU<1YMNv&6u}{%AZrfWIs~Wq/:1.{+0`cQg$X}YQSGVQN' );
define( 'NONCE_KEY',        '0<`}3{B3WRVuVYP>,YZ$N4azvA r1eSXMNl_v]51A7MKl^[h%.^$X=qTUAJljCz-' );
define( 'AUTH_SALT',        '|X/ ;Mo~:H};bUq98fR+$ZyJD-[V#rZ#KxnX[gSJw_Esh>;woLF*lTP+V_H,J$D=' );
define( 'SECURE_AUTH_SALT', '=>q?658(hp(T]uJ:$r.PXm1>-+NnDGmkM{L]?o.KIO-Hg:A6tTy{rWW9W@W#+%xa' );
define( 'LOGGED_IN_SALT',   'EVN+t9-fLyGnp?u`d::AWjq6v&}s;DkE|3-}]o8^_,9Zi m:TA8~20lzX?]`&S+Z' );
define( 'NONCE_SALT',       'G]uD+cWKqVs$_nQ^@|fa_NXhHg2-waK.o5yZI2!P1v*y]=B]jL>,g>WZXg5`r!zM' );
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
