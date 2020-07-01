# Projet pour tester API du projet CSI 

**Stack :** 
[codeception] (https://codeception.com/)

**Avant de lancer les tests**

1/ Faire un composer install

2/ Changer dans le fichier api.suite.yml, l'url

`modules:
    enabled:
        - REST:
              url: https://127.0.0.1:8000/api/`

**Commande à executer :** 

Pour lancer les tests : 

`php vendor/bin/codecept run`

une option pour le debug

`php vendor/bin/codecept run --debug `

Si tout est en vert, c'est que votre code repond au TP

Api Tests (3) --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
✔ LoadFormationCest: Load formation in cache (0.23s)
✔ TestErrorFormationCest: Test error api (0.26s)
✔ TestFormationCest: Test formation id (0.90s)

Good Luck !!!
