-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: test_dernier_cri
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Pixels : Toute l’actualité sur Le Monde.fr.','Pixels - Découvrez gratuitement tous les articles, les vidéos et les infographies de la rubrique Pixels sur Le Monde.fr.','2021-11-20 18:55:01'),(2,'Jeu vidéo : Xbox et PlayStation « troublés » par la gestion d’Activision par son PDG historique','Dans des e-mails diffusés en interne auprès de leurs employés, les patrons des deux fabricants de consoles vont jusqu’à questionner leurs rapports avec l’éditeur de jeux vidéo américain, sur fond d’accusations de harcèlement moral et sexuel.','2021-11-20 08:00:15'),(3,'PlayStation 5 et Xbox Series X : après un an, quel bilan pour les consoles « nouvelle génération » ?','En douze mois, il est sorti plus de jeux sur les consoles de nouvelle génération que sur les précédentes à leur lancement, et leur réception critique est même globalement meilleure.','2021-11-19 20:00:14'),(4,'Amazon : des problèmes de vie privée dévoilés par des mémos internes','Le magazine américain « Wired » a eu accès à des documents montrant que les coordonnées ou encore l’historique d’achats des consommateurs ont été insuffisamment protégés par l’entreprise de commerce en ligne.','2021-11-19 14:01:49'),(5,'Les sanctions du régulateur chinois font chuter les profits d’Alibaba','Un an après le lancement d’une campagne de régulation des mastodontes chinois du numérique, l’e-commerçant a vu ses profits chuter de 81 %.','2021-11-19 09:05:44'),(6,'Des Français moins mécontents de leur banque','Les clients font passer la qualité du service ou l’image de la banque avant les tarifs, alors que l’usage du digital s’accélère.','2021-11-19 06:00:25'),(7,'Comment « One Piece » est devenu le plus grand succès du manga','C’est un phénomène culturel mondial depuis sa création, en 1997. Série la plus vendue au monde, « One Piece » est aussi un dessin animé, qui célébrera son millième épisode le 21 novembre. Pauline Croquet, journaliste au « Monde », nous explique en podcast les raisons de cette réussite spectaculaire.','2021-11-19 05:00:13'),(8,'Comment les services de renseignement français ont traqué Pegasus après les révélations du « Monde »','Des traces du logiciel espion ont notamment été détectées sur les téléphones de deux hauts fonctionnaires travaillant sur des dossiers sensibles du conseil de défense.','2021-11-19 02:59:45'),(9,'Peter Thiel, le cavalier solitaire de la Silicon Valley','A rebours du progressisme de la « vallée du silicium », ce milliardaire, cofondateur de PayPal et investisseur dans Facebook, promeut des idées libertariennes et anti-Etat. Une biographie qui vient de paraître met en lumière son action au service de la droite radicale américaine.','2021-11-19 02:10:49'),(10,'Données de santé : « Il est temps de sauver le soldat Health Data Hub »','L’engagement du ministre de la santé à retirer l’hébergement et l’exploitation des données de santé des Français à Microsoft d’ici à deux ans au maximum semble « sérieusement compromis », analyse dans une tribune au « Monde » le président du Cercle de la réforme de l’Etat, Christian Babusiaux.','2021-11-18 14:46:03'),(11,'La menace des « chatbots » manipulateurs','Un avis du Comité national pilote d’éthique du numérique met en garde contre les agents conversationnels pouvant influencer les utilisateurs à leur insu en brouillant les frontières entre humain et machine.','2021-11-17 06:00:17'),(12,'Vos photos numériques risquent un jour de disparaître… comment s’assurer que les futures générations pourront les voir ?','Pour les conserver toute une vie ou plus, vous devrez faire preuve d’une discipline et d’une implication hors du commun.','2021-11-17 01:19:49'),(13,'Facebook emploie 766 modérateurs en langue arabe pour 220 millions d’utilisateurs arabophones','« Facebook Files » | Un document interne du réseau social, datant de 2020, révèle des chiffres que Facebook n’a jamais voulu communiquer sur le nombre de ses modérateurs.','2021-11-16 18:29:35'),(14,'« Dans le cloud, il faut désormais coopérer avec les Gafam tout en protégeant les données »','Les multinationales américaines se sont taillé la part du lion dans un secteur en pleine croissance et gourmand en capitaux, rendant illusoire l’idée de souveraineté française ou européenne en ce domaine, observe Jean-Michel Bezat, journaliste au « Monde ».','2021-11-16 11:45:09'),(15,'« Fortnite » : comme annoncé, le jeu vidéo est devenu inaccessible en Chine','Cette décision de l’éditeur Epic Games, concernant l’un des jeux les plus populaires au monde, s’inscrit dans le cadre du durcissement des règles touchant au secteur du numérique en Chine.','2021-11-15 06:41:40'),(16,'« Il faut bâtir un système de contrôle des plates-formes et de leurs algorithmes »','Alors que le Sénat examine le 15 novembre un projet de loi sur la représentation des travailleurs des plates-formes, un collectif d’élus, de juristes et de syndicalistes appelle, dans une tribune au « Monde », à un contrôle public indépendant sur le sujet.','2021-11-15 06:00:39'),(17,'« Les gens accordent déjà plus d’importance à leur vie en ligne » : les futurs habitants du métavers','Depuis que Mark Zuckerberg a annoncé son intention de rebaptiser Facebook Meta et d’embaucher 10 000 Européens pour créer un univers numérique parallèle, ou « metaverse », ils n’ont plus que ce mot à la bouche. Le métavers, nouvel avenir de l’homme ?','2021-11-13 17:00:15'),(18,'Roblox, ou l’ubérisation du jeu vidéo','Sur la plate-forme, le gamer est lui-même le créateur de son univers virtuel et peut même espérer en tirer des profits. Une logique capitaliste qui a très peu d’élus, en dehors de la plate-forme elle-même.','2021-11-13 15:00:11'),(19,'« C’est le moment où je me libère » : dans les mondes virtuels de Roblox, les avatars aident les ados à s’affirmer','Roméo, Kiara, Ruben, Nathan, Lucie… Au début ou à la fin de l’adolescence, ces jeunes ont pour point commun de s’inventer une autre identité sur la plate-forme de jeu vidéo Roblox. Souvent dans le but de se construire une meilleure image de soi.','2021-11-13 01:14:20'),(20,'Quand les travailleuses du sexe se mettent à la blockchain','En espèces, par carte ou en cryptomonnaies ? En quête d’un modèle économique plus stable et moins stigmatisé par les institutions financières classiques, certaines travailleuses du sexe voient leur avenir dans les monnaies virtuelles.','2021-11-12 20:30:13'),(21,'« Nous subissons une marchandisation permanente de notre activité cérébrale »','Le chercheur Guilhem Fouetillou compare, dans une tribune au « Monde », la « raréfaction de l’attention » créée par le numérique tout-puissant à la raréfaction des ressources naturelles.','2021-11-12 12:17:12'),(22,'Microtâches contre microgains, le business incontrôlé des sites de clics rémunérés','Appen, Amazon Mechanical Turk, Clickworker… Ces plates-formes de microtravail mobilisent des millions de travailleurs partout dans le monde, souvent en dehors de tout cadre juridique.','2021-11-21 15:45:11');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-21 20:51:10
