# Test dernier Cri
## Menu
1- Description de la réalisation du projet

2- Procédure d'installation en local


    
   ## 1-a Back-End
   Symfony
  - J'ai choisi d'avoir une base back-end en Symfony 5 et ainsi installer les différents bundle qui vont me permettre de mener à bien ce projet.
  - Le but principal de cette application est la mise en place d'une API, j'ai ainsi installé API PLATFORM avec composer
  - Ensuite, j'ai mis en place l'entité News avec ces différentes propriétés et considéré celle-ci dans les paramètres comme une ressource API
  
  Api Platform
  - Grâce à la puissance d'API plateform les différents point d'accés été en place (Voir le résultat du point d'accès get en json avec le logiciel insomnia http://127.0.0.1:8000/api/news dans la capture d'écran capture/api_get_json.png)
  
  Bdd
  - À partir de là, j'ai initialisé ma table dans MySQL et mon projet (env.local), créé mon entité News avec le bundle maker et migré les différentes propriétés grâce aux bundles doctrine et orm
  - Après avoir testé cette entité avec phpunit, et vérifier la structure migré en bdd, je me suis occupé de la partie data et de l'import du flux rss et ceci au moyen d'une commande. Ainsi avec: symfony console app:update-news, les différentes données sont importé en base de données et non écrasé si la donné existe déjà en comparant la propriété title
  
  Php
  - Cette logique de persister et flusher les données a été implémenté au moyen d'un service Symfony
  
  ## 1-b Front-End
  React JS
  - Une fois la partie API et back-end terminé, je me suis occupé de la partie Front end aux moyens du framework React JS et du bundle webpack encore, j'ai pensé cette partie en component et essayé de factoriser la logique aux moyens des hooks.
 
  ## 1-c Optimisation
  - Les axes d'optimisation sur cette application sont les suivants :
      - factoriser plus le code au niveau du service et des components React
      - faire d'autres tests unitaires et fonctionnels afin d'atteindre une couverture de code minimum de 80 %
      - optimiser la commande d'import du flux au niveau des performances
      - dockeriser le projet pour faciliter la procédure de déploiement
  
  ## 2 Procédure
  - Dans ton dossier local faire un git clone:
```python
git clone https://github.com/Abensai/projects-public.git
```
  - rejoindre la racine du projet
```python
cd ./projects-public/Test/testDernierCri
```
   - Installer les bundle et toutes les dependances avec composer
```python
composer install
```
   - créer une nouvelle base de donnée mysql
   
   - importer les deux fichier sql dans cette nouvelle bdd 
        - bdd\test_dernier_cri_doctrine_migration_versions.sql
        - bdd\test_dernier_cri_news.sql
        
   - créer un fichier à la racine .env.local et y copier le contenu présent dans le fichier dèjà présent .env
   
   - commenter la ligne suivante
```python
DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?
```
   - décommenter la ligne suivante
```python
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
```
   - renseigner les informations suivantes:
        - db_user
        - db_password
        - num du server par défault à 3306
        - db_name

   - lancer la commande symfony server
```python
symfony server:start
```

   - Installer les les dependances avec npm
```python
npm install
```

   - lancer la commande npm server-dev
```python
npm run dev-server
```
