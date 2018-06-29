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
/**MAJ LOCAL de WP*/
define('FS_METHOD', 'direct');
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lecalculsmmichel');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lecalculsmmichel');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '7855Qvpvs');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'lecalculsmmichel.mysql.db');

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
define('AUTH_KEY',         'Xin(-*_}j#7>BBNQ5Rb:Gh*82^C>4qPja0&-uWutwnW=hYv-1aG@ncC{MjNu)bBu');
define('SECURE_AUTH_KEY',  'd: D6d,(N!pIA;O)idg|O|%i;iP-)E+_9B$sM-&4r7:Iy}xR+yEBUVBTvF5?tI~w');
define('LOGGED_IN_KEY',    ']dW*,U)%XBTbrU[R~FJd))qj@6zoUC#Q:IOkv%wPr1z4F Y$FkM${#CFkXLxPuY6');
define('NONCE_KEY',        'y;3ql%1+xSE9#+_C5`F|7`C(Z>bRq-4G{gh UYP!E:WkneDTr!VVKVwL@1jij./A');
define('AUTH_SALT',        'L&AsG5M2%%R`](!Q;{3:)GW:n#}gFcUp|N~>Tt[Mjkph}P+;l+)`NqP8J7Hsy|ro');
define('SECURE_AUTH_SALT', 'tZ+fHvzHR7n?,*U-7K3q.p1y-%Bz;@Jt!=hZ%dB~#;DHvDY.2A9s `#*I;-I)a^R');
define('LOGGED_IN_SALT',   '<vH?R&tG}8cu@XozD8v*Wp*Q:I]1U$Ub^(-NYQ4=<@| 0D`~XAQGjj1L_*oZcjx@');
define('NONCE_SALT',       ',49h8Qv{Ok-Ai&y_uzv3x{LA$s*s7RRXf#3>IgX5mcN2*]Pq>+~&$$ a&:s^5AFS');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ab_';

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
