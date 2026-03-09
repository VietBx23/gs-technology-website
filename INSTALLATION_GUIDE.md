# 📖 Hướng Dẫn Cài Đặt Global Success - WordPress Website

Hướng dẫn chi tiết từng bước để cài đặt và import nội dung website Global Success vào WordPress.

## ⚡ Phương Pháp Nhanh: Sử Dụng WP All In One Importer

Đây là cách dễ nhất và nhanh nhất để import toàn bộ nội dung, thiết lập, và dữ liệu website.

### 📋 Yêu Cầu

- WordPress 5.0 hoặc cao hơn
- PHP 7.2 hoặc cao hơn
- Quyền quản trị WordPress (Admin access)
- Kết nối internet ổn định

### 🚀 Bước 1: Cài Đặt Plugin WP All In One Importer

1. **Đăng nhập vào WordPress Admin**
   - Truy cập: `https://domain-cua-ban.com/wp-admin`
   - Đăng nhập bằng tài khoản Admin

2. **Cài đặt plugin**
   - Vào menu: **Plugins > Add New** (Plugins > Thêm Mới)
   - Tìm kiếm: `All-in-One WP Migration` (đây là plugin phổ biến nhất)
   - Nhấp vào **Install Now** (Cài Đặt)
   - Nhấp vào **Activate** (Kích Hoạt)

   **Lưu ý:** Bạn cũng có thể sử dụng các plugin khác:
   - `ImportWP`
   - `Elementor Website Template Import`
   - `WordPress Importer`

### 📥 Bước 2: Upload File Export

1. **Truy cập tính năng Import**
   - Vào menu: **All-in-One WP Migration > Import** (hoặc Import trong plugin của bạn)

2. **Tải lên file .wpress**
   - Nhấp vào **Import from file** (Import từ file)
   - Chọn file: `wordpress-test-20260307-102739-xjiekjxakewv.wpress`
   - Hoặc kéo thả file vào khu vực tải lên

   **File nằm tại:** 
   ```
   /wordpress-test-20260307-102739-xjiekjxakewv.wpress
   ```

### ⚙️ Bước 3: Cố Gắng Import và Chờ

1. **Bắt đầu quá trình import**
   - Nhấp **Import**
   - Hệ thống sẽ hiển thị thanh tiến trình
   - **Đừng đóng tab trình duyệt** trong khi import

2. **Thời gian chờ đợi**
   - Thường mất từ 2-10 phút tùy vào kích thước tệp
   - Tối đa có thể mất 30 phút với file lớn

3. **Hoàn tất**
   - Hiển thị thông báo: "Import successfully completed" (Import hoàn tất thành công)
   - Website sẽ tự động reload

### ✅ Bước 4: Kiểm Tra và Tinh Chỉnh

1. **Kiểm tra nội dung**
   - Vào **Dashboard > Home** để xem trang chủ
   - Kiểm tra tất cả các trang chính:
     - Home (Trang chủ)
     - About Us (Về chúng tôi)
     - Services (Dịch vụ)
     - News (Tin tức)
     - Contact (Liên hệ)

2. **Kiểm tra menu**
   - Vào **Appearance > Menus** (Giao diện > Menu)
   - Đảm bảo tất cả menu đã được kích hoạt

3. **Cập nhật thông tin liên hệ**
   - Vào **Customizer > Site Identity** (Tùy chỉnh > Danh tính trang web)
   - Cập nhật:
     - Tên website
     - Logo
     - Tagline (Slogan)

4. **Kiểm tra settings**
   - Vào **Settings > Permalink** (Cài đặt > Mục Permalink)
   - Chọn: **Post name** hoặc **Custom Structure: `/%postname%/`**

---

## 🛠️ Phương Pháp Thủ Công: Import Từng Phần

Nếu file export không hoạt động, bạn có thể import nội dung thủ công.

### 📝 Import Content (Nội Dung)

1. **Upload file XML**
   - Vào **Tools > Import** (Công cụ > Import)
   - Chọn **WordPress** importer
   - Tải lên file `.xml` (nếu có)
   - Chọn tác giả cho các bài viết
   - Nhấp **Import**

### 🎨 Import Widgets

1. **Nhập Widgets**
   - Vào **Appearance > Widgets** (Giao diện > Widgets)
   - Thêm lại các widget vào các khu vực như:
     - Footer Widget Area (Khu vực Widget Footer)
     - Sidebar Widgets (Widget Thanh bên)
     - Header Widgets

### 🖼️ Import Hình Ảnh Thủ Công

1. **Upload Images**
   - Vào **Media > Add New** (Thư viện > Thêm mới)
   - Upload tất cả hình ảnh

2. **Cập nhật Featured Image cho Page/Post**
   - Chỉnh sửa từng page/post
   - Đặt featured image từ thư viện media

---

## 🔧 Khắc Phục Sự Cố

### ❌ Lỗi: "Import Failed" (Import thất bại)

**Giải pháp:**
1. Kiểm tra kích thước file
   - Plugin All-in-One WP Migration có giới hạn 512MB trong phiên bản miễn phí
   - Cho phép tải lên thêm bằng cách thêm code:
   ```php
   define( 'AI1WM_MAX_FILE_SIZE', 2147483648 ); // 2GB
   ```

2. Tăng giới hạn PHP
   - Thêm vào file `wp-config.php`:
   ```php
   define( 'WP_MEMORY_LIMIT', '256M' );
   define( 'WP_MAX_MEMORY_LIMIT', '512M' );
   ```

3. Tăng timeout
   - Yêu cầu host tăng `max_execution_time` lên 300 giây

### ❌ Lỗi: "File too large" (File quá lớn)

**Giải pháp:**
1. Nén file `.wpress` nếu có thể
2. Chia file thành các phần nhỏ hơn
3. Sử dụng FTP để upload file trực tiếp vào thư mục

### ❌ Lỗi: Hình ảnh không hiển thị sau import

**Giải pháp:**
1. Vào **Tools > Site Health**
2. Kiểm tra REST API đang hoạt động
3. Cập nhật URL trong **Settings > General**

### ❌ Plugin không hoạt động sau import

**Giải pháp:**
1. Vào **Plugins** và kích hoạt lại tất cả plugin
2. Nếu cần, cần cài đặt plugin lại
3. Kiểm tra xung đột plugin

---

## 📊 Danh Sách Nội Dung Được Import

Khi import file `.wpress`, bạn sẽ nhận được:

### ✅ Được Import
- ✓ Tất cả Pages (Trang)
- ✓ Tất cả Posts (Bài viết)
- ✓ Tất cả Categories & Tags (Danh mục & Thẻ)
- ✓ Menu Structures (Cấu trúc Menu)
- ✓ Widgets & Sidebar (Widgets & Thanh bên)
- ✓ Theme Settings (Cài đặt Chủ đề)
- ✓ Hình ảnh và Media (Images & Media)
- ✓ User Roles & Permissions (Vai trò & Quyền)
- ✓ Custom Post Types (Loại bài viết tùy chỉnh)

### ⚠️ Có Thể Cần Cấu Hình Lại
- ⚠ Plugin Settings (Cài đặt Plugin) - cần cấu hình lại mật khẩu, API key
- ⚠ Email Settings (Cài đặt Email) - cần cấu hình lại SMTP
- ⚠ Domain URLs (URL Tên miền) - nếu thay đổi domain
- ⚠ Third-party Integrations (Tích hợp bên thứ ba)

---

## 🔐 Bảo Mật Sau Import

1. **Đổi mật khẩu Admin**
   - Vào **Users > Edit Profile** hoặc **Account Settings**
   - Đổi mật khẩu thành mật khẩu mạnh mới

2. **Xóa User mặc định**
   - Xóa các user không cần thiết

3. **Cập nhật Permalink**
   - Đặt structure SEO-friendly

4. **Bật SSL**
   - Đảm bảo website sử dụng HTTPS

5. **Cài đặt Backup Plugin**
   - Cài đặt plugin như BackWPup hoặc UpdraftPlus

---

## 📞 Yêu Cầu Hỗ Trợ

Nếu gặp vấn đề:

1. **Kiểm tra các lỗi**
   - Vào **Tools > Site Health** (Công cụ > Tình trạng Trang web)

2. **Liên hệ với Host/Nhà cung cấp**
   - Yêu cầu tăng PHP memory limit
   - Yêu cầu tăng upload size
   - Yêu cầu tăng max execution time

3. **Liên hệ Support**
   - Email: globalsuccess@gmail.com
   - Phone: (+84) 943 321 441

---

## 📱 Tài Nguyên Hữu Ích

- [All-in-One WP Migration - Documentation](https://help.servmask.com/)
- [WordPress Import Guide](https://wordpress.org/support/article/importing-content/)
- [WordPress Backup & Restore](https://wordpress.org/support/article/backing-up-your-wordpress-files/)

---

**Chúc bạn cài đặt thành công!** 🎉

*Cập nhật lần cuối: 9 tháng 3 năm 2026*
