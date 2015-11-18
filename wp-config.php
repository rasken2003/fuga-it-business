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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'fuga_it_business');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i,h1y;Pw>|N=A?g>z(#$[QhU0Iz79oN48)R!E0^>311f8<Bh=`7nth}h01,$wu>!');
define('SECURE_AUTH_KEY',  '!JfCeh=V&E|Q_i|NRs`/]CJ-B~`ck.n|oE+3RNLL|9>{WLAzGX#MrJ(#f@%Zu|+.');
define('LOGGED_IN_KEY',    'A}fq5W6F+-gFad*aty4q6SA=/I-O%[G!+klFULa6~64W],9[k(kq-lhU:G0a?I|H');
define('NONCE_KEY',        '-wU~-u-i{9vWK00>bZ@b [I)L< n|E-x/Xm&9cTV2V[nyLZ-QO&dl)cSx)A0&h^G');
define('AUTH_SALT',        '|v%nk=%S3lc2DiA4(5PJuku^$~%P%9t0!d:P/v*UL~WV;~d6`{rTCjY `NGZBPO<');
define('SECURE_AUTH_SALT', 'Kt=j^VxV?wx-geR(ME+XO`F;-n^)iG5jb~z-hZ3y}@|PEz3dv^avAhFZ+IBj=m+Q');
define('LOGGED_IN_SALT',   '=67=Y?7g{*<}9H=m?vvE+|)T3.q@jMl89^.[T):-EdlG#G}Asq}vw`uX+A>?}pl.');
define('NONCE_SALT',       'f1Y2cPCl?OOL:# *;SE*%)>|WHaR5-}Ru<>?,@ER/++51=bHrnA!d}SdSXP.[.MU');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
