
# Ecommerce web site

A brief description of what this project does and who it's for


## Authors

- [@](https://www.github.com/)

  
## Demo

Insert gif or link to demo

  
## Deployment

To deploy this project run

```composer
 composer install
 php bin/console doctrine:database:drop --force
 composer prepare
 
add this code source in migration file:"
 $this->addSql('
        CREATE TABLE sessions (
          sess_id VARCHAR(128) NOT NULL PRIMARY KEY,
            sess_data BLOB  NOT NULL,
            sess_lifetime INTEGER NOT NULL,
            sess_time INTEGER NOT NULL
       )
     ');
"
composer afterprepare
#read fixtures
 #$ symfony run yarn encore dev
Au lieu d’exécuter la commande chaque fois qu’il y a une modification, exécutez-la en arrière-plan et laissez-la surveiller les changements des fichiers JS et CSS :

1

$ symfony run -d yarn encore dev --watch
```

  
## Tech Stack

**Client:** boostrap,webpack

**Server:** symfony

  