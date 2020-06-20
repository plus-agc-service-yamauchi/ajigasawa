<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ajigasawa' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Eiv `=LU9~Lh=w>_M$!=_Bc%wmvzRBJ_yjHE$;{d8`y+?V}T]|vj~;MqX-b0Y`Lf' );
define( 'SECURE_AUTH_KEY',  '-T:WszHg;6[ZL=I-iXE>oU]/+HvgQAjjBCoiy7Vi2vX3w>K-vAJzIfIW_a$Huw1N' );
define( 'LOGGED_IN_KEY',    ']Z4Xv8J,>eqPw3nLq_thQ11EZ)Dde%%,7VGmI,91+_M!1T@O|4HD;W7Pg}WR0@*j' );
define( 'NONCE_KEY',        'E6~M(H.yQi Qq(4f+<B|EoU4N^ivCb^*5zFw-:U~W9@QqVUckB*!x!X>T(!zdfHN' );
define( 'AUTH_SALT',        'd8^5sd3oHjq}eoW-QFu>dgrsm0lCA!:q:b[%l^iL0v4;/wLy&n~$&]<9~D}:iOi$' );
define( 'SECURE_AUTH_SALT', '|QE1P^fA/Hr>G]JP^]2xMM.`w{h1oOv$KLhjJKD}2FX)%`] ;>r-~^lvznHakH?E' );
define( 'LOGGED_IN_SALT',   '7p%OkX5i~IjgyEG+3in#!ZK]T|2%<?#O=oOAxsu!.ZyW55K_ZrY?HdkXT;TIy=Gn' );
define( 'NONCE_SALT',       'xj7S6t-!M`fcAH0<]>%#o}B%fk-yIZm]=[(F814]l@)~i S_ENHygzez$Jmtf{k.' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
