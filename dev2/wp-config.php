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
define( 'DB_NAME', 'wordpress2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'd` ;K$mR3hp2G683<f9qpMb+*{]d}z)PtGWfEJsvG3xi.dzR 6{!>|]uY0xJR|;o' );
define( 'SECURE_AUTH_KEY',  'pQ`aGqVL(Bih]}0 Ak$6OVtEN3Tw2_*!t_+39>;M@%/R*.FT%Ih6}q+{K:pwWrBW' );
define( 'LOGGED_IN_KEY',    '4Jw_:(yP5j:$:b>zipKsm-NmGWsdRFQG_^?GwRWk|UYvwy%xl)qt[m-Az!.,fAwZ' );
define( 'NONCE_KEY',        '&R.Bhy|Zn*{jFWg,D03eU>S4[PqvX]$ P0#@f1m Upn^}^h<-r1c2|vYI* jx&Rz' );
define( 'AUTH_SALT',        'TLuHwC<l:q`DAx^n%AO5^iodL>&lcaI3_DjH?wV{:,:y1dI8Yd@jn&`op<jnoq!p' );
define( 'SECURE_AUTH_SALT', '}b$Ds|O|Xbc2< Kg`YuJR{|^IHN+wu}ReG|I8XgRF5+hr,1SaUP}&S<%8-FxjdXc' );
define( 'LOGGED_IN_SALT',   'Jm!(:0Tc:P!Tpb2B&{#`J`gCnJPRPBe :fGwg(s(DK|tKyyy!:$zHqrNGZ@9 paZ' );
define( 'NONCE_SALT',       '{4T[nK;v%jISJ@6XG]RlfHS/K0xk!kFVBo{CvSf&CJy6;[d~yg<c i]r>.FvZl7D' );

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

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
