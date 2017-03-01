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
define('DB_NAME', 'webskin-portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+TXSsyFg%:l/ruJLvklqp,Ln2127(f6USTiOF9|>T17:/BW>afPE#Ka|.=z/mSms');
define('SECURE_AUTH_KEY',  'o/Cephbbe}R;Qx&J>KevD#C#4qe7p.5I!_@]rdD aS_2i)`ydhZu[9ghiwup_CS8');
define('LOGGED_IN_KEY',    'Ou*$@KG(ZIeyCFtu~%MCI`%tF}O-BF<.d(d(_sZUiGC=z/a0@9r_4vbr$qPG!=QX');
define('NONCE_KEY',        'c1]+7QFb8+se+m@w,Yb=GVQ*g8;RAien+/^v$+h| wMxsK`j6PwpjK%hBJ$wu#hf');
define('AUTH_SALT',        '`1K(^gUftoEDObJ}~v|.GP9v9eFD^RB9k?s5!T@szk%+i^S%X?Mn<,0V(Om/uSi,');
define('SECURE_AUTH_SALT', 'H[B_zys,2>5p^Eq{)?>@,0!=pw`b3?Fkgb8V.wV]F>PE~]3eBF/j^AyZv|BF!v$8');
define('LOGGED_IN_SALT',   'qhX_,X;DI7tQ~i_xCCl!2m2*0WR)qM6M846H4LE.=1QsfrGuszsjEX!$trXkz#MQ');
define('NONCE_SALT',       'F{Q>@g1rVG8m-^pkBM0.;UC>3t6GM4g(VZJLZY*I2cjpjsPeo8K?_F~EkDn3+r;5');
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