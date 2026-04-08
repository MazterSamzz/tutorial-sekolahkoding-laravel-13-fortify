# Gunakan versi PHP 8.5-fpm sebagai basis
FROM php:8.5-fpm

ARG UID

# Update sistem dan install library yang dibutuhkan Laravel
# ---------------------------------------------------------------------
# apt-get dist-upgrade untuk memastikan semua paket di dalam image diperbarui ke versi terbaru.
# Namun, proses ini bisa memakan waktu lebih lama dan mungkin tidak selalu diperlukan jika image dasar sudah cukup baru.
# && apt-get dist-upgrade -y 
# ---------------------------------------------------------------------
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    # Install ekstensi PHP pdo_mysql (ini yang membuat error "could not find driver" hilang)
    && docker-php-ext-install pdo_mysql

# Copy Composer dari image resmi agar bisa dipakai di dalam container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Add new user with UID ${UID}
RUN useradd -u ${UID} -ms /bin/bash laravel
USER laravel

# Atur folder kerja
WORKDIR /var/www/html
