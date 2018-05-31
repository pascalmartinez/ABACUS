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
define('DB_NAME', 'lecalculmental_Wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '|s>3!_YZXaq5wS2Sr<Bt-&@)e9QFD^01n<4 c&Gbmsw{E PY!K,~bLmfCZ5j]8s-');
define('SECURE_AUTH_KEY',  'rHzv6=-NL?83)g`X(CHa&Iq%VwL.Lwsw(R>5R6TWZ))t&YYNp}^<G~!T0Pq_1chi');
define('LOGGED_IN_KEY',    'P]GJhJ]P4X%HV?=M..h@p1;pYH?(XQU2;vgx,e5KT+VT1i**VJ$Fk[dpYgWC;[O{');
define('NONCE_KEY',        ' nj5G5k:v&3Cg&f4do8vT2M)`}3Zor4*e;@ywL2ncy+ET_WwV=AB4eL2`$KD(y X');
define('AUTH_SALT',        'KSix9#299o8rkB4Im32S1QJL^w1.YgJljNc_rUyrN:e0ItJ+WFN*abN/5HqG<LWG');
define('SECURE_AUTH_SALT', '~&TcL)mcn~Wc]s8zN. r1W.+O_^;JDWt{oEuMq3c0FR$r>z~MsCh[#^xw(*ad/Ux');
define('LOGGED_IN_SALT',   'V7`a1p*>y@VjsWPCquMxjO58<`&K6ndG?*w0}Y~x~PG}{?YH)!QgmH#DlGh}&v8~');
define('NONCE_SALT',       '&U0LmLY#{fFovh!ln(phP{ILvyfF8VK0<OO #J(mEKb1-(7z!3+SPtV}or`GWXHM');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'abacus_';

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
define('FS_METHOD','direct');
