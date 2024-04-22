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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'kalanso-acamdey' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']XMDj9[/?Y;j`hm2(>+R@)JKJws68J]p{. ^@tu5 n]:{]$*v)xIh }GfAI)y=w{' );
define( 'SECURE_AUTH_KEY',  'E+B}B^I{|d:hHJ}p<LSZ*(f#9lybhl8wpSwVMjL|_C*xg~>SDx~L|80VKC%CcB[q' );
define( 'LOGGED_IN_KEY',    '2v5@+i-~?(*zP~:%</&7xV3e~[4Qtjr=+}^KFg@[$1/ysNgKS5`,p`:sI4uS.$G%' );
define( 'NONCE_KEY',        'sz=!UZD?89CK4OTI,^AqNO7v%):G+22u%SAR&zVY`4{Z%e*/V=-AK.I,#H$g:/PR' );
define( 'AUTH_SALT',        'd*MX<#oZ@hbsUiwezkkD.x6x0&@|x[;Q.MHw%3(Wk=Pc9)J9/7D&+[t7exN{.[FG' );
define( 'SECURE_AUTH_SALT', 'Yf?QG?A2}WK]VGd`Q v_2U.>N?J~Vf9Jv[vE:1}w5&#B+SQ)=p!j&!0<U3I|Gn2O' );
define( 'LOGGED_IN_SALT',   'E4N>N54E%oPF8NSq+W79OLmQP`)3ZbXgz9-)7CD(d;/]$^Psj%lE W`$9E7bAK4n' );
define( 'NONCE_SALT',       'esexfT%G`1!<W=|m%z2XP>Ti/r_Y(:9S}=7]^6oq4vY`,}9DhWrHpMZ({6F3;z^s' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
