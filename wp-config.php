<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'bannercapital' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6[l[E*!!|pa+@dH/c>mA{[E=(.m]8#DNU/w<{lP:#d>JAn(>e!X-/aCx}*0.fjm>' );
define( 'SECURE_AUTH_KEY',  'Y=JaR=]TVk2#z_$FJQ}9nP;I0Tbm%=7+%%BEYi&UR|Op~Qj}XrlVG.<` Of:3hz$' );
define( 'LOGGED_IN_KEY',    '{qD2]Ykj}LwXDhtsoUe7+0X#f4JvIs]9o|?*kiY70w)fAbo3iLbyD%@@U7p [qb ' );
define( 'NONCE_KEY',        'z5k%$=U[I`QCNpt6@QM~ MP9q^lgI;<6&R$Hx2_Mc<Njy9a4sm5&{AN-.OCsOCb^' );
define( 'AUTH_SALT',        '6dZ$o@3N2&epu5YW_CroSOe~f|ELsMK&t;)VW2}ElO9r<WUMDDM?NKwa@KX/7WQB' );
define( 'SECURE_AUTH_SALT', 'o99:![bjZ!]]#aqZE|5i}#haf?}e#nZOr<XC<rsrg/*E5u@yUFal.;Q-.oe+Rb[g' );
define( 'LOGGED_IN_SALT',   'hqK6||N]n^e&#8Zb!0UGw-L2za2#;hPraXW1nUwMoO~>@{Ou mDyl_+VI_FS>%zC' );
define( 'NONCE_SALT',       '.Stt5n{}4 G*xHO%+OS}]RFUhtR{CDQiuB.jRy^)lH(XaF,kn2jH<XZ=!15I%NvN' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
