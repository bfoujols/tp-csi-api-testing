# Projet pour tester API du projet CSI 

**Stack :** 
[codeception] (https://codeception.com/)

**Avant de lancer les tests**

1/ Faire la commande pour installer les vendor

`composer install`

2/ Changer dans le fichier api.suite.yml, par votre URL de votre projet en local ou hebergé sur AWS

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

Api Tests (3) ---------------------------------------------------------------------------------
- [x] LoadFormationCest: Load formation in cache (0.23s)
- [x] TestErrorFormationCest: Test error api (0.26s)
- [x] TestFormationCest: Test formation id (0.90s)


# HELP ME !!!!

- [la commande "php vendor/bin/codecept run" ne marche pas sous windows](https://github.com/bfoujols/tp-csi-api-testing/wiki/La-commande-%22php-vendor-bin-codecept-run%22-ne-marche-pas-sous-windows)
- [Pas de test API dans le run command](https://github.com/bfoujols/tp-csi-api-testing/wiki/Pas-de-test-API-dans-le-run-de-codeception)
