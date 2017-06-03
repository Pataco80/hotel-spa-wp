<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'hotel-spa-wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'v1hL3ycY$Gn61#$QYeGKzA_!DPvy$#2wF,iDHpE?W(U`iD)*cl>7l7ADpLVPWje!');
define('SECURE_AUTH_KEY',  'QlgL%xo574]n3hkke/.wEqb-AnA/E/JtAFa5i~JVpi+:n~?gxZLiHf]HD:9SHSbB');
define('LOGGED_IN_KEY',    '^B=.NJvI~|@30y0g,J8koA`8r8*c:0j0{] YESMfAmjFn|)2a$8Ov|7dR;.?)bWh');
define('NONCE_KEY',        '?!g{cX2v{IP(P]pLKUmF:-,6,?l/eQns`4C1s6,w>qI?.=C  Rd}MdHXl&Hrt! n');
define('AUTH_SALT',        '0USt0&:qH,7[1BD>N},Yk.E4`mKlb3Qpuz 0#ZhI`E4gc;lj8yW{O@oWqNFVEoCZ');
define('SECURE_AUTH_SALT', '[f$@gsjkk[|Dy,4).,TwV 2FMyYy#kDNG$wV~Q#ErZuwx[T?8{;?c!XV Od8^{~X');
define('LOGGED_IN_SALT',   '-YT>L`$Jf|vu;Hoq`=%Z9t#atOK2Pd]7fpSq%.^Hh~lONlpfQ&/%h_Y*CK60zD~(');
define('NONCE_SALT',       '(,P+*-,aUjNg>8N0Lo^PwI0,]wLISD(Z?U_o_}Xp{P4ZAe@I(%-n[kVK5*Nzr^>G');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');