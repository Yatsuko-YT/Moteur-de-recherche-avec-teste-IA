-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 08 août 2024 à 17:10
-- Version du serveur : 5.7.24
-- Version de PHP : 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hizou`
--

-- --------------------------------------------------------

--
-- Structure de la table `sitesweb`
--

CREATE TABLE `sitesweb` (
  `id` int(11) NOT NULL,
  `nom_site` varchar(255) NOT NULL,
  `nom_developpeur` varchar(255) NOT NULL,
  `securite_conseillee` tinyint(1) NOT NULL,
  `recherches` int(11) NOT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sitesweb`
--

INSERT INTO `sitesweb` (`id`, `nom_site`, `nom_developpeur`, `securite_conseillee`, `recherches`, `description`, `image_url`, `url`) VALUES
(1, 'Google', 'Google LLC', 1, 1000000000, 'Moteur de recherche le plus populaire au monde.', 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png', 'https://www.google.com'),
(2, 'YouTube', 'Google LLC', 1, 2000000000, 'Site de partage de vidéos en ligne.', 'https://www.youtube.com/s/desktop/yt_1200-vfl4C3T0K.png', 'https://www.youtube.com'),
(3, 'Facebook', 'Meta Platforms, Inc.', 1, 1600000000, 'Réseau social pour rester en contact avec vos amis.', 'https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico', 'https://www.facebook.com'),
(4, 'Amazon', 'Amazon.com, Inc.', 1, 1500000000, 'Plateforme de commerce en ligne.', 'https://www.amazon.com/favicon.ico', 'https://www.amazon.com'),
(5, 'Wikipedia', 'Wikimedia Foundation', 1, 500000000, 'Encyclopédie en ligne gratuite et collaborative.', 'https://upload.wikimedia.org/wikipedia/commons/6/63/Wikipedia-logo.png', 'https://www.wikipedia.org'),
(6, 'BBC', 'British Broadcasting Corporation', 1, 250000000, 'Société de radiodiffusion publique britannique.', 'https://static.bbci.co.uk/favicon.ico', 'https://www.bbc.com'),
(7, 'CNN', 'Cable News Network', 1, 120000000, 'Chaîne de télévision d\'information en continu.', 'https://cdn.cnn.com/cnn/.e1mo/img/4.0/logos/favicon.png', 'https://www.cnn.com'),
(8, 'The New York Times', 'The New York Times Company', 1, 150000000, 'Journal quotidien américain.', 'https://www.nytimes.com/vi-assets/static-assets/favicon-4bf96cb6b3d22a38b18fad53b7b7182d.ico', 'https://www.nytimes.com'),
(9, 'Reuters', 'Thomson Reuters', 1, 500000000, 'Agence de presse internationale.', 'https://www.reuters.com/resources_v2/images/favicon/favicon.ico', 'https://www.reuters.com'),
(10, 'Al Jazeera', 'Al Jazeera Media Network', 1, 60000000, 'Réseau de chaînes d\'information internationales.', 'https://www.aljazeera.com/assets/images/favicon.ico', 'https://www.aljazeera.com'),
(11, 'Bloomberg', 'Bloomberg L.P.', 1, 40000000, 'Agence de presse économique et financière.', 'https://assets.bwbx.io/s3/javelin/public/javelin/images/favicon-32x32.png', 'https://www.bloomberg.com'),
(12, 'Forbes', 'Forbes Media LLC', 1, 150000000, 'Magazine économique américain.', 'https://www.forbes.com/favicon.ico', 'https://www.forbes.com'),
(13, 'ESPN', 'ESPN Inc.', 1, 100000000, 'Chaîne de télévision sportive.', 'https://a.espncdn.com/favicon.ico', 'https://www.espn.com'),
(14, 'National Geographic', 'National Geographic Society', 1, 50000000, 'Magazine et chaîne de télévision sur la géographie et la nature.', 'https://www.nationalgeographic.com/favicon.ico', 'https://www.nationalgeographic.com'),
(15, 'The Guardian', 'Guardian Media Group', 1, 200000000, 'Journal quotidien britannique.', 'https://assets.guim.co.uk/images/favicons/favicon-32x32.ico', 'https://www.theguardian.com'),
(16, 'Le Monde', 'Le Monde Group', 1, 30000000, 'Journal quotidien français.', 'https://www.lemonde.fr/dist/assets/logos/favicon.ico', 'https://www.lemonde.fr'),
(17, 'Der Spiegel', 'Spiegel-Verlag', 1, 60000000, 'Magazine d\'information allemand.', 'https://www.spiegel.de/favicon.ico', 'https://www.spiegel.de'),
(18, 'El País', 'PRISA', 1, 40000000, 'Journal quotidien espagnol.', 'https://static.elpais.com/dist/resources/images/logos/favicon.ico', 'https://www.elpais.com'),
(19, 'La Repubblica', 'GEDI Gruppo Editoriale', 1, 20000000, 'Journal quotidien italien.', 'https://www.repubblica.it/favicon.ico', 'https://www.repubblica.it'),
(20, 'NHK', 'Japan Broadcasting Corporation', 1, 50000000, 'Société de radiodiffusion publique japonaise.', 'https://www3.nhk.or.jp/favicon.ico', 'https://www.nhk.or.jp'),
(21, 'RT', 'Russia Today', 1, 70000000, 'Réseau de chaînes de télévision russes.', 'https://www.rt.com/favicon.ico', 'https://www.rt.com'),
(22, 'France 24', 'France Médias Monde', 1, 20000000, 'Chaîne de télévision d\'information française.', 'https://www.france24.com/bundles/aefhermesf24front/favicon.ico', 'https://www.france24.com'),
(23, 'Deutsche Welle', 'DW', 1, 80000000, 'Réseau de radiodiffusion international allemand.', 'https://www.dw.com/favicon.ico', 'https://www.dw.com'),
(24, 'CNBC', 'NBCUniversal News Group', 1, 100000000, 'Chaîne de télévision économique et financière.', 'https://www.cnbc.com/favicon.ico', 'https://www.cnbc.com'),
(25, 'CBS News', 'CBS Corporation', 1, 120000000, 'Service de presse de CBS.', 'https://www.cbsnews.com/favicon.ico', 'https://www.cbsnews.com'),
(26, 'NBC News', 'NBCUniversal News Group', 1, 130000000, 'Service de presse de NBC.', 'https://www.nbcnews.com/favicon.ico', 'https://www.nbcnews.com'),
(27, 'ABC News', 'American Broadcasting Company', 1, 100000000, 'Service de presse d\'ABC.', 'https://abcnews.go.com/favicon.ico', 'https://abcnews.go.com'),
(28, 'Fox News', 'Fox Corporation', 1, 150000000, 'Chaîne de télévision d\'information américaine.', 'https://www.foxnews.com/favicon.ico', 'https://www.foxnews.com'),
(29, 'Sky News', 'Sky Group', 1, 20000000, 'Chaîne de télévision d\'information britannique.', 'https://news.sky.com/favicon.ico', 'https://news.sky.com'),
(30, 'The Washington Post', 'Nash Holdings', 1, 80000000, 'Journal quotidien américain.', 'https://www.washingtonpost.com/favicon.ico', 'https://www.washingtonpost.com'),
(31, 'The Wall Street Journal', 'Dow Jones & Company', 1, 90000000, 'Journal quotidien économique et financier américain.', 'https://s.wsj.net/favicon.ico', 'https://www.wsj.com'),
(32, 'Financial Times', 'The Nikkei', 1, 110000000, 'Journal quotidien économique et financier britannique.', 'https://www.ft.com/__assets/creatives/ft/favicon/v2/favicon.ico', 'https://www.ft.com'),
(33, 'Instagram', 'Meta Platforms, Inc.', 1, 1100000000, 'Réseau social de partage de photos et vidéos.', 'https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png', 'https://www.instagram.com'),
(34, 'LinkedIn', 'LinkedIn Corporation', 1, 700000000, 'Réseau social professionnel.', 'https://static.licdn.com/sc/h/al2o9zrvru7aqj9nlfdy2qo3s', 'https://www.linkedin.com'),
(35, 'Twitter', 'Twitter, Inc.', 1, 800000000, 'Plateforme de microblogging.', 'https://abs.twimg.com/favicons/twitter.ico', 'https://www.twitter.com'),
(36, 'Pinterest', 'Pinterest, Inc.', 1, 250000000, 'Réseau social de partage d\'images.', 'https://s.pinimg.com/webapp/style/images/favicon-fd1a2c0a.png', 'https://www.pinterest.com'),
(37, 'Reddit', 'Reddit, Inc.', 1, 430000000, 'Plateforme de discussion et de partage de contenu.', 'https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-180x180.png', 'https://www.reddit.com'),
(38, 'Quora', 'Quora, Inc.', 1, 300000000, 'Plateforme de questions et réponses.', 'https://qsf.fs.quoracdn.net/-3-ans_frontend_assets/images/icons/apple-touch-icon.png', 'https://www.quora.com'),
(39, 'Stack Overflow', 'Stack Exchange Inc.', 1, 100000000, 'Plateforme de questions et réponses pour les développeurs.', 'https://cdn.sstatic.net/Sites/stackoverflow/company/img/logos/so/so-icon.png', 'https://stackoverflow.com'),
(40, 'GitHub', 'GitHub, Inc.', 1, 200000000, 'Plateforme de développement et de partage de code.', 'https://github.githubassets.com/favicons/favicon.png', 'https://github.com'),
(41, 'Dropbox', 'Dropbox, Inc.', 1, 500000000, 'Service de stockage et de partage de fichiers.', 'https://aem.dropbox.com/static/images/favicon.ico', 'https://www.dropbox.com'),
(42, 'WhatsApp', 'Meta Platforms, Inc.', 1, 1000000000, 'Application de messagerie instantanée.', 'https://web.whatsapp.com/favicon-96x96.png', 'https://www.whatsapp.com'),
(43, 'Telegram', 'Telegram Messenger LLP', 1, 400000000, 'Application de messagerie sécurisée.', 'https://telegram.org/img/t_logo.png', 'https://telegram.org'),
(44, 'Signal', 'Signal Foundation', 1, 200000000, 'Application de messagerie sécurisée.', 'https://signal.org/assets/favicon-96x96.png', 'https://signal.org'),
(45, 'Zoom', 'Zoom Video Communications, Inc.', 1, 300000000, 'Plateforme de visioconférence.', 'https://st1.zoom.us/zoom.ico', 'https://www.zoom.us'),
(46, 'Slack', 'Slack Technologies', 1, 150000000, 'Plateforme de communication d\'équipe.', 'https://a.slack-edge.com/80588/marketing/img/icons/icon-192.png', 'https://www.slack.com'),
(47, 'Microsoft Teams', 'Microsoft Corporation', 1, 250000000, 'Plateforme de communication et de collaboration.', 'https://statics.teams.microsoft.com/production/1.0.0.2021031001/images/favicons/favicon.ico', 'https://www.microsoft.com/en-us/microsoft-teams/group-chat-software'),
(48, 'Salesforce', 'Salesforce.com, Inc.', 1, 100000000, 'Plateforme de gestion de la relation client (CRM).', 'https://c1.sfdcstatic.com/content/dam/web/en_us/www/images/logo-193x193.png', 'https://www.salesforce.com'),
(49, 'Oracle', 'Oracle Corporation', 1, 80000000, 'Entreprise spécialisée dans les systèmes de gestion de bases de données.', 'https://www.oracle.com/favicon.ico', 'https://www.oracle.com'),
(50, 'SAP', 'SAP SE', 1, 50000000, 'Entreprise multinationale de logiciels.', 'https://www.sap.com/favicon.ico', 'https://www.sap.com'),
(51, 'Adobe', 'Adobe Inc.', 1, 60000000, 'Entreprise spécialisée dans les logiciels de création.', 'https://www.adobe.com/favicon.ico', 'https://www.adobe.com'),
(52, 'IBM', 'International Business Machines Corporation', 1, 70000000, 'Entreprise multinationale de technologies et de services.', 'https://www.ibm.com/favicon.ico', 'https://www.ibm.com'),
(53, 'Intel', 'Intel Corporation', 1, 40000000, 'Entreprise spécialisée dans la fabrication de semi-conducteurs.', 'https://www.intel.com/favicon.ico', 'https://www.intel.com'),
(54, 'AMD', 'Advanced Micro Devices, Inc.', 1, 30000000, 'Entreprise spécialisée dans la fabrication de semi-conducteurs.', 'https://www.amd.com/favicon.ico', 'https://www.amd.com'),
(55, 'NVIDIA', 'NVIDIA Corporation', 1, 50000000, 'Entreprise spécialisée dans les processeurs graphiques.', 'https://www.nvidia.com/favicon.ico', 'https://www.nvidia.com'),
(56, 'Qualcomm', 'Qualcomm Incorporated', 1, 25000000, 'Entreprise spécialisée dans les semi-conducteurs et les télécommunications.', 'https://www.qualcomm.com/favicon.ico', 'https://www.qualcomm.com'),
(57, 'Sony', 'Sony Corporation', 1, 80000000, 'Entreprise multinationale de produits électroniques.', 'https://www.sony.com/favicon.ico', 'https://www.sony.com'),
(58, 'Samsung', 'Samsung Electronics', 1, 90000000, 'Entreprise multinationale de produits électroniques.', 'https://www.samsung.com/favicon.ico', 'https://www.samsung.com'),
(59, 'LG', 'LG Corporation', 1, 40000000, 'Entreprise multinationale de produits électroniques.', 'https://www.lg.com/favicon.ico', 'https://www.lg.com'),
(60, 'Panasonic', 'Panasonic Corporation', 1, 30000000, 'Entreprise multinationale de produits électroniques.', 'https://www.panasonic.com/favicon.ico', 'https://www.panasonic.com'),
(61, 'Philips', 'Koninklijke Philips N.V.', 1, 20000000, 'Entreprise multinationale de produits électroniques.', 'https://www.philips.com/favicon.ico', 'https://www.philips.com'),
(62, 'Dell', 'Dell Technologies', 1, 60000000, 'Entreprise multinationale d\'ordinateurs et de technologies.', 'https://www.dell.com/favicon.ico', 'https://www.dell.com'),
(63, 'HP', 'HP Inc.', 1, 50000000, 'Entreprise multinationale d\'ordinateurs et de technologies.', 'https://www.hp.com/favicon.ico', 'https://www.hp.com'),
(64, 'Lenovo', 'Lenovo Group Limited', 1, 30000000, 'Entreprise multinationale d\'ordinateurs et de technologies.', 'https://www.lenovo.com/favicon.ico', 'https://www.lenovo.com'),
(65, 'Asus', 'ASUSTeK Computer Inc.', 1, 20000000, 'Entreprise multinationale de matériel informatique.', 'https://www.asus.com/favicon.ico', 'https://www.asus.com'),
(66, 'Acer', 'Acer Inc.', 1, 15000000, 'Entreprise multinationale de matériel informatique.', 'https://www.acer.com/favicon.ico', 'https://www.acer.com'),
(67, 'Huawei', 'Huawei Technologies Co., Ltd.', 1, 70000000, 'Entreprise multinationale de télécommunications et de matériel informatique.', 'https://www.huawei.com/favicon.ico', 'https://www.huawei.com'),
(68, 'Xiaomi', 'Xiaomi Corporation', 1, 60000000, 'Entreprise multinationale d\'électronique et de télécommunications.', 'https://www.mi.com/favicon.ico', 'https://www.mi.com'),
(69, 'OnePlus', 'OnePlus Technology (Shenzhen) Co., Ltd.', 1, 30000000, 'Entreprise multinationale d\'électronique.', 'https://www.oneplus.com/favicon.ico', 'https://www.oneplus.com'),
(70, 'Oppo', 'OPPO Electronics Corp.', 1, 40000000, 'Entreprise multinationale d\'électronique.', 'https://www.oppo.com/favicon.ico', 'https://www.oppo.com'),
(71, 'Vivo', 'Vivo Communication Technology Co. Ltd.', 1, 30000000, 'Entreprise multinationale d\'électronique.', 'https://www.vivo.com/favicon.ico', 'https://www.vivo.com'),
(72, 'Sony PlayStation', 'Sony Interactive Entertainment', 1, 50000000, 'Entreprise spécialisée dans les consoles de jeux vidéo.', 'https://www.playstation.com/favicon.ico', 'https://www.playstation.com'),
(73, 'Microsoft Xbox', 'Microsoft Corporation', 1, 60000000, 'Entreprise spécialisée dans les consoles de jeux vidéo.', 'https://www.xbox.com/favicon.ico', 'https://www.xbox.com'),
(74, 'Nintendo', 'Nintendo Co., Ltd.', 1, 70000000, 'Entreprise multinationale de jeux vidéo.', 'https://www.nintendo.com/favicon.ico', 'https://www.nintendo.com'),
(75, 'Epic Games', 'Epic Games, Inc.', 1, 20000000, 'Entreprise de développement de jeux vidéo.', 'https://www.epicgames.com/favicon.ico', 'https://www.epicgames.com'),
(76, 'Steam', 'Valve Corporation', 1, 40000000, 'Plateforme de distribution de jeux vidéo.', 'https://store.steampowered.com/favicon.ico', 'https://store.steampowered.com'),
(77, 'Electronic Arts', 'Electronic Arts Inc.', 1, 30000000, 'Entreprise de développement de jeux vidéo.', 'https://www.ea.com/favicon.ico', 'https://www.ea.com'),
(78, 'Ubisoft', 'Ubisoft Entertainment', 1, 20000000, 'Entreprise de développement de jeux vidéo.', 'https://www.ubisoft.com/favicon.ico', 'https://www.ubisoft.com'),
(79, 'Activision Blizzard', 'Activision Blizzard, Inc.', 1, 25000000, 'Entreprise de développement de jeux vidéo.', 'https://www.activisionblizzard.com/favicon.ico', 'https://www.activisionblizzard.com'),
(80, 'Rockstar Games', 'Rockstar Games, Inc.', 1, 15000000, 'Entreprise de développement de jeux vidéo.', 'https://www.rockstargames.com/favicon.ico', 'https://www.rockstargames.com'),
(81, 'Bandai Namco', 'Bandai Namco Entertainment Inc.', 1, 10000000, 'Entreprise de développement de jeux vidéo.', 'https://www.bandainamcoent.com/favicon.ico', 'https://www.bandainamcoent.com'),
(82, 'Square Enix', 'Square Enix Holdings Co., Ltd.', 1, 12000000, 'Entreprise de développement de jeux vidéo.', 'https://www.square-enix.com/favicon.ico', 'https://www.square-enix.com'),
(83, 'Capcom', 'Capcom Co., Ltd.', 1, 10000000, 'Entreprise de développement de jeux vidéo.', 'https://www.capcom.com/favicon.ico', 'https://www.capcom.com'),
(84, 'Konami', 'Konami Holdings Corporation', 1, 9000000, 'Entreprise de développement de jeux vidéo.', 'https://www.konami.com/favicon.ico', 'https://www.konami.com'),
(85, 'Sega', 'Sega Holdings Co., Ltd.', 1, 8000000, 'Entreprise de développement de jeux vidéo.', 'https://www.sega.com/favicon.ico', 'https://www.sega.com'),
(86, 'Tencent Games', 'Tencent Holdings Ltd.', 1, 15000000, 'Entreprise de développement de jeux vidéo.', 'https://www.tencent.com/favicon.ico', 'https://www.tencent.com'),
(87, 'NetEase Games', 'NetEase, Inc.', 1, 10000000, 'Entreprise de développement de jeux vidéo.', 'https://www.neteasegames.com/favicon.ico', 'https://www.neteasegames.com'),
(88, 'Riot Games', 'Riot Games, Inc.', 1, 20000000, 'Entreprise de développement de jeux vidéo.', 'https://www.riotgames.com/favicon.ico', 'https://www.riotgames.com'),
(89, 'Blizzard Entertainment', 'Blizzard Entertainment, Inc.', 1, 15000000, 'Entreprise de développement de jeux vidéo.', 'https://www.blizzard.com/favicon.ico', 'https://www.blizzard.com'),
(90, 'Bethesda Softworks', 'Bethesda Softworks LLC', 1, 12000000, 'Entreprise de développement de jeux vidéo.', 'https://bethesda.net/favicon.ico', 'https://bethesda.net'),
(91, 'CD Projekt', 'CD Projekt S.A.', 1, 8000000, 'Entreprise de développement de jeux vidéo.', 'https://www.cdprojekt.com/favicon.ico', 'https://www.cdprojekt.com'),
(92, 'BioWare', 'BioWare Corporation', 1, 10000000, 'Entreprise de développement de jeux vidéo.', 'https://www.bioware.com/favicon.ico', 'https://www.bioware.com'),
(93, 'Valve Corporation', 'Valve Corporation', 1, 20000000, 'Entreprise de développement de jeux vidéo.', 'https://www.valvesoftware.com/favicon.ico', 'https://www.valvesoftware.com'),
(94, 'Unity Technologies', 'Unity Technologies', 1, 8000000, 'Entreprise de développement de logiciels de jeux vidéo.', 'https://unity.com/favicon.ico', 'https://unity.com'),
(95, 'Unreal Engine', 'Epic Games, Inc.', 1, 15000000, 'Moteur de jeu développé par Epic Games.', 'https://www.unrealengine.com/favicon.ico', 'https://www.unrealengine.com'),
(96, 'CryEngine', 'Crytek GmbH', 1, 5000000, 'Moteur de jeu développé par Crytek.', 'https://www.cryengine.com/favicon.ico', 'https://www.cryengine.com'),
(97, 'Godot Engine', 'Godot Engine Community', 1, 2000000, 'Moteur de jeu open-source.', 'https://godotengine.org/favicon.ico', 'https://godotengine.org'),
(98, 'Roblox', 'Roblox Corporation', 1, 25000000, 'Plateforme de création de jeux vidéo.', 'https://www.roblox.com/favicon.ico', 'https://www.roblox.com'),
(99, 'Minecraft', 'Mojang Studios', 1, 50000000, 'Jeu vidéo de type bac à sable.', 'https://www.minecraft.net/favicon.ico', 'https://www.minecraft.net'),
(100, 'Fortnite', 'Epic Games, Inc.', 1, 60000000, 'Jeu vidéo de type battle royale.', 'https://www.epicgames.com/fortnite/favicon.ico', 'https://www.epicgames.com/fortnite'),
(101, 'PUBG', 'PUBG Corporation', 1, 30000000, 'Jeu vidéo de type battle royale.', 'https://www.pubg.com/favicon.ico', 'https://www.pubg.com'),
(102, 'Apex Legends', 'Respawn Entertainment', 1, 20000000, 'Jeu vidéo de type battle royale.', 'https://www.ea.com/games/apex-legends/favicon.ico', 'https://www.ea.com/games/apex-legends'),
(103, 'League of Legends', 'Riot Games, Inc.', 1, 50000000, 'Jeu vidéo de type MOBA.', 'https://www.leagueoflegends.com/favicon.ico', 'https://www.leagueoflegends.com'),
(104, 'Dota 2', 'Valve Corporation', 1, 30000000, 'Jeu vidéo de type MOBA.', 'https://www.dota2.com/favicon.ico', 'https://www.dota2.com');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin','membre') DEFAULT 'membre',
  `photo_de_profil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `mot_de_passe`, `role`, `photo_de_profil`) VALUES
(5, 'Qwerty', 'qwerty@gmail.com', '$2y$10$EvzhWLCEBlQR0ZFoL3LXcei.98cD7ZJZC2JNYUBFtNxwHnRjycm8G', 'membre', 'https://www.tierchenwelt.de/images/stories/fotos/voegel/sperlingsvoegel/rabe/rabe_steckbrief_l.jpg'),
(6, 'Yatsuko1', 'yatsuko.dalibard@gmail.com', '$2y$10$8j0bEmswJ93Zh6/r4hy.M.lZb6yRbXuOwppwmtQ/kIyNPw3IRDq7K', 'admin', 'https://www.shutterstock.com/image-vector/beautiful-anime-girl-vector-illustration-600nw-2294211317.jpg'),
(18, 'Marcel', 'marcel.dupont@gmail', '$2y$10$MW7KJ63cdlzt7C66dFt.yueWCK6kwBeStH6uo25nT7kIMGFAE7PBy', 'membre', 'compte.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sitesweb`
--
ALTER TABLE `sitesweb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sitesweb`
--
ALTER TABLE `sitesweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
