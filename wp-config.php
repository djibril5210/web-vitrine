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
define( 'DB_NAME', 'db_vitrine' );

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
define( 'AUTH_KEY',         '<i8-#S.HLjppjtWhZiQM4h|GW$h/pgP`FJ2Zk,/4[5Bsjc{(ni5v%Wdi{y1t2X=}' );
define( 'SECURE_AUTH_KEY',  '*Xh6]%/WU>-QKv?P=Wz6yT_S,fd5$u-2)xz,xVs%U~}GR@Zc`jWRXAs#S8dr%T}Z' );
define( 'LOGGED_IN_KEY',    'XFC,3EsrVvc) O0|`lam#[,ptVZ@c?l$PusyOTQow..F?Lx)c2*{sz)a$w@y:_sZ' );
define( 'NONCE_KEY',        '{T`yZ a>+V3fs& -So$6q7I/)*lf!KT:Hi!D`o}0eDN<O+vQesX>&i8hN:sk(}FB' );
define( 'AUTH_SALT',        'h[<4-DO1^aR*zSTyHIsA-OR![PfYTV4q?f>~X^+eI9>MsA__>=Q+RA|ivV}l-$B ' );
define( 'SECURE_AUTH_SALT', '[3XcWs kDI,yJ$@F`^,k4/.,zdtSmQD@l/ +*PC(-q.)sMs`dbJ}B0&O7LV6%4_^' );
define( 'LOGGED_IN_SALT',   'I!Zm-M+GBkQ3O4P|X3m/T]Cb+.SNz<ayu_k15*7,yVYz[5Z;lThLGy/,zNaxsB_,' );
define( 'NONCE_SALT',       'w.[.P&ASUc9wb-WHMxJXa<TF_w7],_/ZBXesO,4/ 81!_RE2u|JsC_}1e!i@P7[}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'vt_';

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
