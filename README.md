
# Teste Técnico Target.IT

Compartilhamento do teste realizado para Target.IT


## Instalação

Realize o clone do projeto e realiza a intalação das rependências, configurar o .env com a base de dados local e rode as migrations.

```bash
  git clone git@github.com:jonesheckler/testeTargetIT.git
  cd testeTargetIT 
  composer update (install ocorre um erro no JWT)

  Ajuste do arquivo .ENV com os dados do banco de dados.


  php artisan migrate:fresh --seed 

```
    
## Deploy

Para fazer o deploy desse projeto rode

```bash
  php artisan serve
```


## Postman  

Importe o arquivo Target IT.postman_collection.json que se encontra na raiz do projeto para o Postman para realizar os testes.

Primeiro teste deve ser realizar o login como administrador

Após recuperar o token de acesso. 

Set na variável {{token}} do postman o token gerado para efetuar as outras requisições
 
