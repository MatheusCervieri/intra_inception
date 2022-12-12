# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mvieira- <mvieira-@student.42sp.org.br>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/12/11 17:50:07 by mvieira-          #+#    #+#              #
#    Updated: 2022/12/11 17:50:10 by mvieira-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#If we use docker compose on the srcs it automatically take the env file, here we need to add the env flag.
#f specifies a file. 

all:
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d

down:
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env down

#build the container again.
re:
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build

#prune - removes all unused images.
clean: down
	@docker system prune -a 
	@sudo rm -rf ~/data/wordpress/*
	@sudo rm -rf ~/data/mariadb/*

fclean:
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
	@sudo rm -rf ~/data/wordpress/*
	@sudo rm -rf ~/data/mariadb/*
	@sudo docker stop $(docker ps -qa); 
	@sudo docker rm $(docker ps -qa); 
	@sudo docker rmi -f $(docker images -qa); 
	@sudo docker volume rm $(docker volume ls -q); 
	@sudo docker network rm $(docker network ls -q) 2>/dev/null

.PHONY	: all build down re clean fclean
