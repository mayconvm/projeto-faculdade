# Fitness

## Projeto da faculdade Pitágoras
Este projeto está sendo realizado pela equipe para a realização do trabalho interdisciplinar.
O objetivo desse projeto é prover para pessoas que gostão de acompanhamento de um profissional durante a execução de exercícios físicos, e para personal trainners que estão com tempo disponível para realizar com seus alunos.

## Descrição

## Equipe
* Bruno
* Igo
* Isaque
* Matheus
* Maycon
* Rafael
* Thales
* Judith

## 


# Configurando o projeto

* Baixar o repositório na sua maquina
* Crie uma maquina Ubuntu 14.04 no Virtual Box
* Realizem o download do Ubuntu server (http://releases.ubuntu.com/16.04.1/ubuntu-16.04.1-server-amd64.iso?_ga=1.215879959.1450768342.1469669950)

* Ao configurar a maquina no Virtual Box, será necessário compartilhar a pasta atual dentro do diretório /var/www/faculdade na sua maquina virtual
* Instalem o Ubuntu e reiniciem a maquina
* Agora loguem na maquina e execute as seguintes linhas de comandos:
** cd /var/www/faculdade # Essa linha fará com que você acesse a pasta do projeto
** ls # Verá todos os arquivos dentro da pasta
** ./install_project.sh # Executa o instalador do projeto
** ifconfig # você verá o IP da maquina virtual
* Assim que o script terminar de executar, abrar o seu navegador de internet e acesse a URL http://<ip da maquina virtual>
