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
define('DB_NAME', 'agence');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'luis');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'luis');

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
define('AUTH_KEY',         '%,#I%wX3J,4lR/9cZj@:m<Y_74HoZOHThbdK9rWd<Uk;NiTFkT!P!3%.-z{VSVOu');
define('SECURE_AUTH_KEY',  '{Pkt3$9VOD4G,e*-d/BTI;Wlqxu-m(*~70pz~J7/Oge?n:V8wWF?1+k108-Z>,P/');
define('LOGGED_IN_KEY',    'oLfXe f[|e{S)Q7)b/ /Im{^#LR*b*h%1+NWV;AY,V&=}yvb+P[|UQb(jxf.jCQ*');
define('NONCE_KEY',        ' F:(Um1Oa%-`Sm=dq)(3~a4Mw#;-8x#,._W$gYkwEZB,_Z0kT%4Q^6n]qp]1]pfK');
define('AUTH_SALT',        '&}6jR2*?:VTp0?S|y_AbzXrj8tj!v`79=?X)?[A$uubZ7O3!s]c45;-2F8&/b2}C');
define('SECURE_AUTH_SALT', 'hze0Q9-{U2dqLyMhd [IcVa%IyK-xL<y5s^jFX!qMe:i| ro%7Qpj6=? 7Nh@)q5');
define('LOGGED_IN_SALT',   'em_@W~@&b;$y~,fKY%wiiP5:xc?;y+fts:#YmifM!/zyvS3qT*Q/*Ib+*YntA)`e');
define('NONCE_SALT',       'pc|Cxo0R~Gtaj/R5WnB%{yj<-k8V7&O,%lst%Y-HVA/a|N>3q8kcKQt3J}afs7Ps');
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