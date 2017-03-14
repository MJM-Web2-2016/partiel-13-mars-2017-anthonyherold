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
define('DB_NAME', '2k17_wp_musiqueaction');

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
define('AUTH_KEY',         '_a$2:[r,]c]6`+nKC3.buJ~9~SMe~f*IHF%w4[MZHmKN*X+/M},3(X;>W;w{[?^7');
define('SECURE_AUTH_KEY',  ')4X=;Kswy%)VBCoZg-ZxUEk-L/Bo,h,Na9tM*||!.#xz8em4@E)~fXy|_GE*gkWe');
define('LOGGED_IN_KEY',    'Kz RE$*@PS?EQ&<@,X$p2t`[}q;>_XN` mG~pejT/(pxmhEq,*sl43WYzHNvDsgj');
define('NONCE_KEY',        'vSzE2NoYx>W:F6;)!]g%R=jh)H~r47FO1b;zkSK8oZ)mvzrwoB7Fq|bM^d4m8<Uu');
define('AUTH_SALT',        'tU:,]:(7vLw43j}.2D9U]y6IN1YHag57z3)OzM.QPKy{R}fU3%B]d>,`<3^D`ZN`');
define('SECURE_AUTH_SALT', '$X7sb?IRbdi8(KtdbDAdFc&8%vsXdyUFaU+1|{7nr5!X:5<F-biG[]Q!gULiREEx');
define('LOGGED_IN_SALT',   'sE#d RCR4h^*j7a(,r/T@YOG]R8o5O9;BeG77K C75Me5qT>yB$!j:hLIQ^KN:hs');
define('NONCE_SALT',       'Tp1W)2vSCHTOiQ$bM*fR.1aX#p[t1MXCHw8B^%bC0`djrShz.#m6xX)gmk}i`BLH');
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