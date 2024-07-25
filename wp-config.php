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
define( 'DB_NAME', '1-planty_local' );

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
define( 'AUTH_KEY',         'ljP-6x<9Mafb^]/.!5hOg,F6gQ2iPp&9&>?0$J_2+20L!VhACdgm%L,R.`2``2[3' );
define( 'SECURE_AUTH_KEY',  '17kC?|GJ(yRFlxK,+DPgR5fbsX]jKe:^A2&%y@<`T&<.|Q9wZ|AOR?$JP]]tspJc' );
define( 'LOGGED_IN_KEY',    't?u|ED1~,`@b&bw?ychrL?FZ^T)`lZ:xg!1me*o!=Gy6&.2 /4~degbR_zF<PU~{' );
define( 'NONCE_KEY',        'BTqu`D:;tQ3glnUn6:hH2J_^01(%hdT1.^0uY]%[gWqX8~ZIBpC,G5<Q58xkHp3+' );
define( 'AUTH_SALT',        '9Z5`udM2KNJ9Jvb%fwN)HGr7M)GCS*x3g#5Z4%@yup/,N!^73uKMr0/SX~G1iD6i' );
define( 'SECURE_AUTH_SALT', '7Gv{b#z=Nta-F=kQBb<Oa2sqOR6aeSA+VQy$#A[B_#8VK{dbG9qGE(t;+2H0FNAU' );
define( 'LOGGED_IN_SALT',   'qD0=}es]_V%__Z+VpVXEe-SmdM<)%2se(7(fA+lm32a(GNk*FI36V}rCvM$nk6)4' );
define( 'NONCE_SALT',       '7&jbEA#rdJky8=h6T2:z:j+_%#9[MytXs3gi~M%YB3gujM},.(<^Gp=~,:wOFe/_' );
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
define('FS_METHOD','direct');
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
