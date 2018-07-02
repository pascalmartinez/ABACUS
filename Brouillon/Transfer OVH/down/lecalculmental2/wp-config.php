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
define('AUTH_KEY',         '&MLF6(Y]^aH;:xJg!;,$(7@O(]><8:_0z/p#j/dl+sTjs=QIfcf2wKptjvioU0Wp');
define('SECURE_AUTH_KEY',  'wciu^ 7D)wM5oTkxEw,@D>!wPdbj|_7zNkh67}E.;_9%QbN3~~<b(zlpx9}VMoDB');
define('LOGGED_IN_KEY',    '=ZF9aAUHHd:}pEf.+iIv_V324Ufzo36K.vO.,Ww5K3BoFaOkeHI,:1tVe|TK`e,y');
define('NONCE_KEY',        ']%}[,tt#n_G0Hm@D$Uel H8A&>l76FKtQ)aT;PEAf-F! ?okAjUPtq:y?DZ+WSlk');
define('AUTH_SALT',        '3X.6gv]]rm[4gCGkE$Rl_6%0i$:.=J6b,TcZxm_:^hf^J?bsNz Z|hCC|S) _<]Z');
define('SECURE_AUTH_SALT', ',N(fOGChuqjFF`qYAEIKD6zS5nn{Bbl^vT7-sZLMUfe@kl&J&I&Ro,3c&G{^Aj{D');
define('LOGGED_IN_SALT',   ')7`69#8`.|_2w8J*Vxq$oTKocnZNcm,m!.,^;Zwp1j~`EriZ$z%L,2~/Bwsj-1nZ');
define('NONCE_SALT',       '?Cd5@EJyb?Ephu2D=3DZywE9+It^uHe%nTwMc`$Gs-0NW=~*b^k@rYl(LHewHv#F');
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