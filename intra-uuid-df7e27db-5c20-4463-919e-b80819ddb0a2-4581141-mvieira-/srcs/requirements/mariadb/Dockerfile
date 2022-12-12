# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mvieira- <mvieira-@student.42sp.org.br>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/12/11 17:16:16 by mvieira-          #+#    #+#              #
#    Updated: 2022/12/11 17:16:17 by mvieira-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.16

 #we need to use args here because our env vars are used when we are building the image. 

ARG DB_NAME \
    DB_USER \
    DB_PASS \
    DB_ROOT

RUN apk update 

RUN apk add mysql mysql-client

#The nexts blocks change mysql configuration. Normally we set a conf file and pass it using a copy command here in dockerfile. But, i found that implementation that is easyer; 

#Here we create a dir that is necessary for the configuration and to mysql work, and we give permission to avoid any kind of problem.
RUN mkdir /var/run/mysqld 
RUN chmod 777 /var/run/mysqld

# Here we put information in docker.cnf file with echo and tee. Tee sends the output of echo to the file. 
# the sed comand replace skip-networking with skip-networking = 0 in the mariadb-server.cnf 
RUN  { echo '[mysqld]'; echo 'skip-host-cache'; echo 'skip-name-resolve'; echo 'bind-address=0.0.0.0'; } | tee  /etc/my.cnf.d/docker.cnf; 
RUN sed -i "s|skip-networking|skip-networking=0|g" /etc/my.cnf.d/mariadb-server.cnf

# handles initialization tasks that must be performed before the MySQL server. With --datadir we specify the path that the database will be stored when we create our database.
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

EXPOSE 3306

# We copy to our container our database_creator.sh. This file will create our sql file. The sql file contains the information that we need to create our database.
COPY requirements/mariadb/conf/database_creator.sh .

RUN mkdir /sqlfiles

RUN chmod 777 /sqlfiles

RUN sh database_creator.sh

USER mysql
#Switch to the user set when we runned mysql_install_db the database.

RUN /usr/bin/mysqld --user=mysql --bootstrap < /sqlfiles/my_db.sql

#we start the database
CMD ["/usr/bin/mysqld", "--skip-log-error"]

