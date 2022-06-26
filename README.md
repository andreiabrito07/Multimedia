# Multimedia

Trabalho conta como requisito parcial de aprovação da cadeira de Multimédia.\
Template de: https://askbootstrap.com/ 

## Integrantes do grupo:
Andreia Vanessa Graça de Brito (20180296)\
Budy Lourenço Vieira (20180811)\
Helder Lucheses Gonçalves da Costa (20181555)

## Como usar
O projecto é feito com o framework Symfony.\n
A pasta media-server ainda não está completamente operacional, então inicia-se entrando no web-server.\
\
1 - Editar o .env para as configurações da base de dados a ser usada.\
2 - ```composer install``` & ```composer update``` para obter as dependências descritas em composer.json\
3 - \
    ```Multimedia\web-server> php bin/console doctrine:database:drop --force``` \
    ```Multimedia\web-server> php bin/console doctrine:database:create ``` \
    ```Multimedia\web-server> php bin/console doctrine:schema:update --force ``` \
\
Comandos acima são usados para a implementação da base de dados.

## Considerações finais
Note-se que este projecto ainda está em fase inicial e futuramente terá muitas mais funcionalidades
