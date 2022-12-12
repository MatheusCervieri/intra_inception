# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mvieira- <mvieira-@student.42sp.org.br>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/12/11 17:15:50 by mvieira-          #+#    #+#              #
#    Updated: 2022/12/11 17:15:52 by mvieira-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.16

#https://make.wordpress.org/hosting/handbook/server-environment/ 

#wget - download wordpress

RUN apk update && apk upgrade && apk add --no-cache \
    php8 \
    php8-fpm \
    php8-mysqli \
    php8-json \
    php8-curl \
    php8-dom \
    php8-exif \
    php8-fileinfo \
    php8-mbstring \
    php8-openssl \
    php8-xml \
    php8-zip \
    wget 

RUN sed -i "s|listen = 127.0.0.1:9000|listen = 9000|g" \
      /etc/php8/php-fpm.d/www.conf 
  
#we change config file with sed to listen to port 9000 (fatscgi) - in this way we can comunicate with nginx

WORKDIR /var/www

#https://www.digitalocean.com/community/tutorials/install-wordpress-on-ubuntu

RUN wget https://wordpress.org/latest.tar.gz 

RUN tar -xvf latest.tar.gz 

RUN cp -rf wordpress/* .

RUN rm -rf wordpress latest.tar.gz 

EXPOSE 9000

CMD ["/usr/sbin/php-fpm8", "-F"]
