#!/bin/bash

# cria banco
createBanc() {
    php bin/console doctrine:database:drop --force
    php bin/console doctrine:database:create
}

# gera entidade
createEntity() {
    php bin/console doctrine:mapping:convert --force --namespace='Restapi\Entity\' --from-database annotation ./src/

    # TODO: Adicionar expressão regular para adicionar o repositório
    php bin/console doctrine:generate:entities Restapi/Entity/
}
