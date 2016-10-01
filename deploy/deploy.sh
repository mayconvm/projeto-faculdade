#!/bin/bash 

if [ -a /var/www/faculdade/deploy.complet ]
    then
        echo "Deploy completo";
    else 
        folderProject=/var/www/faculdade/
        mkdir -p $folderProject
        cd $folderProject

        #install composer
        #php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
        #php composer-setup.php --install-dir=/usr/bin --filename=composer
        #rm composer-setup.php

        #chown $USER:$USER ~/.composer/ -R

        #composer global require "hirak/prestissimo:^0.3" --prefer-dist -vvv

        #install synfony
        #curl -LsS https://symfony.com/installer -o symfony
        #chmod a+x symfony
        #mv symfony /usr/bin

        # Configurando o projeto
        composer update --prefer-dist -vvv # isso aqui demora

        #permissão para algumas pastas
        cd var
        chmod 777 -R *

        # Configurar o banco de dados

        # Reiniciando os serviços
        service mysql restart
        service php5-fpm restart
        service nginx restart

        touch /var/www/faculdade/deploy.complet
fi

while true; do sleep 1000; done
