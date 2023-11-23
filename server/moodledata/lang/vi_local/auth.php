<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost
 *
 * @package    core
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_common_settings'] = 'Các thiết lập thông thường';
$string['auth_data_mapping'] = 'Bản đồ dữ liệu';
$string['auth_multiplehosts'] = 'Nhiều máy chủ hoặc các địa chỉ có thể được chỉ ra (ví dụ host1.com;host2.com;host3.com) hoặc (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_passwordisexpired'] = 'Mật khẩu của bạn bị vô hiệu hoá. Bạn có muốn thay đổi mật khẩu của bạn bây giờ ?';
$string['auth_passwordwillexpire'] = 'Mật khẩu của bạn sẽ bị vô hiệu hóa trong $a ngày. Bạn có muốn thay đổi mật khẩu của bạn bây giờ không ?';
$string['auth_updatelocal'] = 'Cập nhật dữ liệu cục bộ';
$string['auth_updatelocal_expl'] = '<p><b>Cập nhật dữ liệu cục bộ </b> Nếu có thể, trường này sẽ được cập nhật (từ chứng thực bên ngoài)every time the user logs in or there is a user synchronization. Fields set to update locally should be locked.</p>';
$string['auth_updateremote'] = 'Cập nhật dữ liệu bên ngoài';
$string['auth_updateremote_expl'] = '<p><b>Cập nhật dữ liệu bên ngoài:</b> Nếu có thể, chứng thực bên ngoài sẽ được cập nhật khi bản ghi người dùng được cập nhật. Các trường không nên được khoá để cho phép soạn thảo.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Chú ý:</b> Update data requires that you set binddn and bindpw to a bind-user with editing privileges to all the user records. It currently does not preserve multi-valued attributes, and will remove extra values on update. </p>';
$string['auth_user_create'] = 'Có khả năng tạo người dùng';
$string['auth_user_creation'] = 'Những người dùng mới có thể tạo tài khoản người dùng dựa trên nguồn chứng thực bên ngoài và được chứng thực qua Email. Nếu bạn có thể làm điều này, ghi nhớ các tuỳ chọn môđun cấu hình đối với việc tạo người dùng.';
$string['auth_usernameexists'] = 'Tên đăng nhập này đã tồn tại. Vui lòng chọn một cái tên khác.';
$string['authenticationoptions'] = 'Các tuỳ chọn chứng thực';
$string['authinstructions'] = 'Ở đây bạn có thể cung cấp các hướng dẫn cho người dùng của bạn, vì thế họ biết được tên đăng nhập và mật khẩu gì họ nên sử dụng. Văn bản bạn gõ vào ở đây sẽ xuất hiện trên trang đăng nhập. Nếu bạn để trống thì không có hướng dẫn nào sẽ được xuất hiện.';
$string['changepassword'] = 'Thay đổi URL mật khẩu';
$string['changepasswordhelp'] = 'Ở đây bạn có thể chỉ ra một vị trí mà ở đó người dùng của bạn có thể khôi phục hoặc thay đổi tên đăng nhập/mật khẩu của họ khi họ quên nó. Điều này sẽ được cung cấp cho người sử dụng với một nút trên trang đăng nhập và trang người dùng của họ. Nếu bạn để trống nút sẽ không được xuất hiện ra.';
$string['chooseauthmethod'] = 'Chọn một phương pháp chứng thực :';
$string['forcechangepassword'] = 'Thuyết phục thay đổi mật khẩu';
$string['forcechangepassword_help'] = 'Thuyết phục người dùng thay đổi mật khẩu dựa vào lần đăng nhập tiếp theo của họ theo Moodle.';
$string['forcechangepasswordfirst_help'] = 'Thuyết phục người dùng thay đổi mật khẩu dựa vào đăng nhập lần đầu của họ theo Moodle.';
$string['guestloginbutton'] = 'Nút khách đăng nhập';
$string['instructions'] = 'Các hướng dẫn';
$string['md5'] = 'Mã hoá MD5';
$string['plaintext'] = 'Văn bản thuần tuý';
$string['showguestlogin'] = 'Bạn có thể ẩn hoặc hiện nút đăng nhập khách trên trang đăng nhập.';
$string['stdchangepassword'] = 'Sử dụng trang thay đổi mật khẩu chuẩn';
$string['stdchangepassword_expl'] = 'Nếu hệ thống chứng thực bên ngoài cho phép mật khẩu thay đổi thông qua Moodle, chuyển điều này sang CÓ. Các thiết lập này ghi đè \' URL thay đổi mật khẩu \'.';
$string['stdchangepassword_explldap'] = 'Chú ý: Nó nhận ra rằng bạn sử dụng LDAP qua một đường mã hoá SSL (ldaps://) khi  máy chủ LDAP ở xa.';
