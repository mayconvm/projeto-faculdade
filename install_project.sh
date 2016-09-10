#!/bin/bash	

# Garantindo a instalação de tudo que é necessário para todar o projeto
sudo apt-get update
sudo apt-get install -y unzip wget curl tree nmap vim git mysql-client mysql-server
sudo apt-get install -y nginx
sudo apt-get install -y php5-dev php5-curl php5-json php5-mysql php5-fpm php5-cli
sudo apt-get remove -y apache2

#SENHA PADRÃO MYSQL root

# Configurando NGINX
sudo rm /etc/nginx/sites-available/default
sudo rm /etc/nginx/sites-enabled//default
sudo cp deploy/template/projeto-faculdade.nginx /etc/nginx/sites-enabled/projeto-faculdade

#Configurando o php FPM
sudo cp deploy/template/www.conf.php-fpm /etc/php5/fpm/pool.d/www.conf

#Instalar o Docker
#curl -sSL https://get.docker.com/ | sh

folderProject=/var/www/faculdade/
mkdir -p $folderProject
cd $folderProject

#install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
sudo php composer-setup.php --install-dir=/usr/bin --filename=composer
rm composer-setup.php

sudo chown $USER:$USER ~/.composer/ -R

sudo composer global require "hirak/prestissimo:^0.3" --prefer-dist -vvv

#install synfony
curl -LsS https://symfony.com/installer -o symfony
chmod a+x symfony
sudo mv symfony /usr/bin

# Configurando o projeto
git clone https://github.com/mayconvm/projeto-faculdade.git .
cd $folderProject/projeto/backend/fitness/

composer update --prefer-dist -vvv # isso aqui demora

#permissão para algumas pastas
cd var
chmod 777 -R *

# Configurar o banco de dados


# Reiniciando os serviços
sudo service mysql restart
sudo service php5-fpm restart
sudo service nginx restart

# TODO: PERGUNTAR SE DESEJA INSTALAR O BANCO DE DADOS
echo "Será necessário realizar as configurações do banco de dados"
echo "Edite o arquivo que está na pasta app/config/config_dev.yml"


echo "MENU"
echo "----"

echo "Opções:"
echo "install - Instalar o projeto"
echo "init - Iniciar o projeto"
