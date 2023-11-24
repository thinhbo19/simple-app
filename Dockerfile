# Sử dụng một hình ảnh PHP chứa Apache
FROM php:7.4-apache

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Sao chép mã nguồn từ thư mục local vào thư mục làm việc trong container
COPY . /var/www/html

# Cài đặt các extension PHP cần thiết
RUN docker-php-ext-install mysqli pdo_mysql

# Thiết lập quyền truy cập cho Apache
RUN chown -R www-data:www-data /var/www/html

# Mở cổng 80 để Apache lắng nghe
EXPOSE 3000

# CMD khởi động Apache khi container được chạy
CMD ["apache2-foreground"]
