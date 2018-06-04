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
define('DB_NAME', 'wp_laiterie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '@!PQ4tq{,*krO|FIF1]_I]c#qqlQqk=O}xPEga<(;3H<!J/ErRcFEWd7g%=bs&{D');
define('SECURE_AUTH_KEY',  '}t=Gs{vGBxt#2(eBq/S8L[V]vZ<@[Q!rvDsal@g7~&l}9W(Ll k,yAW <kuHdW3l');
define('LOGGED_IN_KEY',    '~j`ntOUTv-oY?V3gojvZD}dAod8M3 R+I R<~>tJz5<^|b7uitE# }3tHvi~|+k[');
define('NONCE_KEY',        'N_`YIlz!]W3@G*xGuCQ.h$+fa-]rlE}]B +?bGe-%_!jRF=eqA1tC<JV9VQg;N|V');
define('AUTH_SALT',        'ZCurCEh_V8J5?!bV|@9],i~5yPsuQ,SqC.4?yn-,SDvX<;Rm%hQAuE`]k6eRoa2X');
define('SECURE_AUTH_SALT', 'f))|! eqI(` *2OJh_d0h[*uMjpP&QhDE+SMX]~XPm)}VeOg>9sL9}*Q8%NP@8@0');
define('LOGGED_IN_SALT',   'k*EI/mDz8QXeLHBeFDi5!^/eFdw!C<jOw@a%<#K,Iqr;^.ShtMuh[pc .}JQF9j|');
define('NONCE_SALT',       '(Ia4GdY*sm<>[0G}^#VRJCAQ?+L,}nvt[uM*p&,V^.78[vZ+%xtGyL$5C$By}=7:');
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