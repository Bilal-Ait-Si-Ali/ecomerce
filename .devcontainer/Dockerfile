FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update -y \
&& apt install -y apache2 && service apache2 start \
&& apt install -y php libapache2-mod-php php-mbstring php-cli php-bcmath php-json php-xml php-zip php-pdo php-common php-tokenizer php-mysql unzip php-curl curl gnupg \

#&& curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
#&& apt install -y nodejs \
&& curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer \
&& service apache2 restart


