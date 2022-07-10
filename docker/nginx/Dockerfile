FROM nginx:latest

COPY ./php56.php-school.test.conf /etc/nginx/conf.d/php56.php-school.test.conf
# COPY ./php70.php-school.test.conf /etc/nginx/conf.d/php70.php-school.test.conf
# COPY ./php74.php-school.test.conf /etc/nginx/conf.d/php74.php-school.test.conf
COPY ./php80.php-school.test.conf /etc/nginx/conf.d/php80.php-school.test.conf
COPY ./default.conf /etc/nginx/conf.d/default.conf

COPY ./ssl/php56.php-school.test/cert.pem /etc/nginx/ssl/php56.php-school.test/cert.pem
COPY ./ssl/php56.php-school.test/key.pem /etc/nginx/ssl/php56.php-school.test/key.pem

# COPY ./ssl/php70.php-school.test/cert.pem /etc/nginx/ssl/php70.php-school.test/cert.pem
# COPY ./ssl/php70.php-school.test/key.pem /etc/nginx/ssl/php70.php-school.test/key.pem

# COPY ./ssl/php74.php-school.test/cert.pem /etc/nginx/ssl/php74.php-school.test/cert.pem
# COPY ./ssl/php74.php-school.test/key.pem /etc/nginx/ssl/php74.php-school.test/key.pem

COPY ./ssl/php80.php-school.test/cert.pem /etc/nginx/ssl/php80.php-school.test/cert.pem
COPY ./ssl/php80.php-school.test/key.pem /etc/nginx/ssl/php80.php-school.test/key.pem

COPY ./ssl/php-school.test/cert.pem /etc/nginx/ssl/php-school.test/cert.pem
COPY ./ssl/php-school.test/key.pem /etc/nginx/ssl/php-school.test/key.pem
