# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mvieira- <mvieira-@student.42sp.org.br>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/12/11 17:15:38 by mvieira-          #+#    #+#              #
#    Updated: 2022/12/11 17:15:39 by mvieira-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.16

RUN	apk update && apk upgrade && apk add --no-cache nginx

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]