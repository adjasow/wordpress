<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'onepage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'db=1QH?0Gx8VLQTEiOc40^v>{5lGM^ TzcSK=aPLJb7v!R}$$3ZUx2&Tl8<aEx}g' );
define( 'SECURE_AUTH_KEY',  'dB=H5i#M*IzA>=$n8A6up-|~8AOm>w_k&M5~7<!{7)<ZWmT_wO]?.rq~C;<|*lQq' );
define( 'LOGGED_IN_KEY',    'VRG%0fVN^a$ph8p&<,@b}Z1y@$R6&QQwOa{,P?24QaY1ZR;|WZGudE):0s@O%v]x' );
define( 'NONCE_KEY',        'n[_JD1~YJeP0]H;WjLMT!)h5I>Ab5*dV7)}6pO<rkQT`^#1OPtL-Us4erY]A?CI-' );
define( 'AUTH_SALT',        'w%V+Z?OrH?Lci+]1 ,+lD$C,XC6oYG*5-tU7p7a<]3+V&.^nSzAZ-L_UMHeMT>DS' );
define( 'SECURE_AUTH_SALT', 'zcafLV<R]F;j*#b*u>`GMG9|RH)~HDGt!iM!<7?ZurHG3JTfL?AM[]}Qaxe:$~@D' );
define( 'LOGGED_IN_SALT',   ':$2z2Hf!*CB|>=Sc+V:nCo4*$q3g0n]m)YNro};!@G[lfT+FGuz<v/Iz@0`c(LKZ' );
define( 'NONCE_SALT',       'PqqwlctdrR$) ^!xJ4dYr]YkO@OwU:oGe2_*hqO*pu-@(fimf+f}hJB>&c]Lu|/A' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
