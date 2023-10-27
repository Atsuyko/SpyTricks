-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 oct. 2023 à 09:35
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spytricks`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `lastname`, `firstname`, `email`, `password`, `doc`) VALUES
(1, 'Arnoux', 'Julien', 'julien.arnoux@dayrep.com', '$2y$10$bz1C85xGUdDJbRzmafIoe.3LWopX7J0H3BNU66sk.4aSex/pQUB92', '2022-03-15'),
(2, 'Sanschargin', 'Luc', 'luc.sanschagrin@rhyta.com', '$2y$10$vTVsaAq6n1mowCkumsP51ObsqaTNiU8IhPgj3s/H8I9R7iuFz5db6', '2022-12-06'),
(3, 'Grandbois', 'Emile', 'emile.grandbois@rhyta.com', '$2y$10$oDoSCooSOlUpIfG7io5moOkM/zZaD4hEyFtzZ8Xqg3bZaJcSRT7a.', '2023-05-25'),
(4, 'Duplessis', 'Julie', 'julie.duplessis@dayrep.com', '$2y$10$iPBJQ02WvOxQaM/2sMPVQOwkcwqc1fVOaNfnmOl8QNdmw2H.jkbfK', '2023-07-05'),
(5, 'Clavette', 'Charline', 'charline.clavette@dayrep.com', '$2y$10$uLogl38SotXBhgZQRMmKkelaPO2Us3k7mry1owwgj6akq2kduXkqi', '2023-09-07'),
(7, 'Nom', 'Prénom', 'email@email.com', '$2y$10$avOFqT5N41dp8EOwgsaeR.UzBpvQIPzWq5CVo15R.HqSDbf2mn8Yq', '2023-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `lastname`, `firstname`, `dob`, `id_country`) VALUES
(1, 'Quipron', 'Marc', '1985-05-06', 1),
(2, 'Rousseau', 'Jules', '1976-08-11', 1),
(3, 'Price', 'John', '1985-02-03', 3),
(4, 'Riley', 'Simon', '1987-06-25', 3),
(5, 'Jackson', 'Paul', '1986-05-27', 4),
(6, 'Wood', 'Frank', '1970-01-01', 4),
(7, 'Mason', 'Alex', '1992-12-12', 8),
(8, 'Schreiner', 'Diana', '1985-10-03', 7),
(9, 'Cortes', 'Antonio', '1984-01-13', 2),
(10, 'Bazin', 'Caroline', '1989-10-29', 1),
(11, 'Burns', 'Marcus', '1978-01-23', 3),
(12, 'Hudson', 'Jason', '1996-09-18', 4),
(13, 'Takemoto', 'Takeya', '1978-02-19', 16),
(14, 'Usui', 'Sachiko', '1988-04-10', 16),
(15, 'Nikolaisen', 'Adrian', '1974-03-24', 20);

-- --------------------------------------------------------

--
-- Structure de la table `agent_spe`
--

CREATE TABLE `agent_spe` (
  `id_agent` int(11) NOT NULL,
  `id_spe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent_spe`
--

INSERT INTO `agent_spe` (`id_agent`, `id_spe`) VALUES
(2, 5),
(2, 4),
(3, 6),
(3, 7),
(3, 2),
(4, 1),
(4, 2),
(4, 3),
(5, 8),
(6, 2),
(6, 5),
(7, 2),
(8, 6),
(8, 9),
(9, 8),
(9, 7),
(10, 4),
(11, 2),
(11, 1),
(11, 7),
(11, 9),
(12, 8),
(12, 1),
(13, 1),
(13, 3),
(14, 5),
(14, 9),
(15, 4),
(1, 1),
(1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `code` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`code`, `lastname`, `firstname`, `dob`, `id_country`) VALUES
('Brochet', 'Karim', 'Farah', '1972-06-02', 11),
('Caribou', 'Jackson', 'Peter', '1987-02-05', 4),
('Carpe', 'Oliveira', 'Vinicius', '1964-02-01', 13),
('Dinde', 'Makarov', 'Vladimir', '1963-06-08', 21),
('Fouine', 'Al Fulani', 'Yasir', '1982-09-25', 10),
('Langouste', 'Kawakami', 'Shigeaki', '1977-06-02', 16),
('Lynx', 'Seth', 'Tal', '1999-02-25', 25),
('Mouton', 'Dupont', 'Jean', '1973-05-09', 1),
('Mulet', 'Pinto', 'Kevin', '1965-12-23', 12),
('Pelican', 'Al Asad', 'Khaled', '1974-05-30', 9),
('Perche', 'Rantala', 'Mikka', '1965-08-05', 19),
('Peroquet', 'Aragon', 'Sofia', '1992-10-04', 14),
('Porcinet', 'Yun', 'Kim', '1986-12-19', 24),
('Poulet', 'Huang', 'Chin', '1985-02-03', 17),
('Sanglier', 'Schneider', 'Franck', '1962-11-15', 7),
('Wapiti', 'Smith', 'John', '1971-09-08', 3);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `nation`, `nationality`) VALUES
(1, 'France', 'Française'),
(2, 'Espagne', 'Espagnole'),
(3, 'Usa', 'Americaine'),
(4, 'Canada', 'Canadienne'),
(5, 'Portugal', 'Portugaise'),
(6, 'Danemark', 'Danoise'),
(7, 'Allemagne', 'Allemande'),
(8, 'Australie', 'Australienne'),
(9, 'Irak', 'Irakienne'),
(10, 'Afghanistan', 'Afghane'),
(11, 'Etiopie', 'Etiopienne'),
(12, 'Mexique', 'Mexicaine'),
(13, 'Colombie', 'Colombienne'),
(14, 'Argentine', 'Argentine'),
(15, 'Perou', 'Peruvienne'),
(16, 'Japon', 'Japonaise'),
(17, 'Chine', 'Chinoise'),
(18, 'Inde', 'Indienne'),
(19, 'Finlande', 'Finlandaise'),
(20, 'Norvege', 'Norvegienne'),
(21, 'Russie', 'Russe'),
(22, 'Ukraine', 'Ukrainienne'),
(23, 'Roumain', 'Roumaine'),
(24, 'Coree sud', 'Coreenne'),
(25, 'Egypte', 'Egyptienne'),
(26, 'Maroc', 'Marocaine');

-- --------------------------------------------------------

--
-- Structure de la table `hideout`
--

CREATE TABLE `hideout` (
  `code` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hideout`
--

INSERT INTO `hideout` (`code`, `address`, `type`, `id_country`) VALUES
('Arbre', 'tefki ethiopie', 'Restaurant', 11),
('Bar', 'pereyra 404 34450 canatlan ', 'Bar', 12),
('Bazar', '185 abu nawas erbil', 'Maison', 9),
('Carriere', '3 rue du caillou 74000 annecy', 'Maison', 1),
('Champ', 'alameda laplata huila', 'Ferme', 13),
('Dune', 'avenue de cherpour, jalalabad', 'Grotte', 10),
('Fontaine', '3 rue de la fontaine 69000 Lyon', 'Sous-sol', 1),
('Glace', 'ulitsa volkhonka 12 riazan 119019', 'Maison', 21),
('Lac', '69 cecil street road nsw 2113', 'Chalet', 8),
('Mer', 'kneebakken 106 0198 oslo', 'Appartement', 20),
('Montagne', 'avenue javier prado 2010 ayacucho 05002', 'Chalet', 15),
('Pont', 'district de xishan kunming yunnan', 'Hotel', 17),
('Pyramide', '1 rue de la pyramide le caire', 'Pyramide', 25),
('Statut', ' karkheda Maharashtra 444104', 'Temple', 18),
('Temple', 'tsukuda chuo city tokyo 1040051', 'Temple', 16),
('Tour', '2747 hill road danville ky 40422', 'Ranch', 3);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `code` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_country` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_spe` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`code`, `title`, `description`, `id_country`, `type`, `status`, `id_spe`, `start`, `end`) VALUES
('Aeneas', 'Sous couverture', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In arcu cursus euismod quis. Feugiat nibh sed pulvinar proin gravida. Elit sed vulputate mi sit amet mauris commodo quis imperdiet. Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Varius duis at consectetur lorem. Quis viverra nibh cras pulvinar mattis nunc. Sollicitudin nibh sit amet commodo. Lacus viverra vitae congue eu consequat ac. Habitant morbi tristique senectus et netus et malesuada. Semper viverra nam libero justo laoreet. Eget est lorem ipsum dolor sit amet consectetur. Massa tincidunt nunc pulvinar sapien et ligula.', 21, 'Infiltration', 'En préparation', 1, '2023-12-22', '2024-04-26'),
('Armada', 'La fosse aux lions', 'Feugiat in ante metus dictum at. Neque viverra justo nec ultrices dui sapien. Bibendum est ultricies integer quis auctor. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Fames ac turpis egestas sed tempus urna et pharetra pharetra. Massa id neque aliquam vestibulum morbi. Volutpat sed cras ornare arcu dui vivamus arcu felis bibendum. Ultrices vitae auctor eu augue ut lectus arcu. Fames ac turpis egestas integer. Leo urna molestie at elementum eu facilisis sed odio morbi. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Turpis cursus in hac habitasse platea. Sodales ut etiam sit amet nisl purus in mollis. Eu scelerisque felis imperdiet proin fermentum. Sem integer vitae justo eget magna fermentum iaculis. Neque sodales ut etiam sit amet. Lorem dolor sed viverra ipsum. Laoreet id donec ultrices tincidunt arcu non sodales. Donec pretium vulputate sapien nec sagittis aliquam.', 1, 'Exfiltration', 'En préparation', 7, '2023-11-05', '2023-12-09'),
('Dicing', 'Compte a rebours', 'At urna condimentum mattis pellentesque id nibh tortor id. Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Donec pretium vulputate sapien nec sagittis aliquam malesuada. Amet nulla facilisi morbi tempus iaculis urna. Et magnis dis parturient montes nascetur ridiculus. Feugiat pretium nibh ipsum consequat. Proin libero nunc consequat interdum varius. In pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. At tempor commodo ullamcorper a lacus. Quis viverra nibh cras pulvinar mattis nunc. Eu scelerisque felis imperdiet proin fermentum leo vel. Dui sapien eget mi proin sed libero enim sed faucibus. Venenatis urna cursus eget nunc scelerisque viverra mauris. Et netus et malesuada fames. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Tortor pretium viverra suspendisse potenti nullam ac. Volutpat sed cras ornare arcu. Turpis nunc eget lorem dolor sed.\r\n\r\n', 3, 'Vol', 'En cours', 3, '2023-10-02', '2023-10-31'),
('Emelia', 'Evasion', 'Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Platea dictumst quisque sagittis purus sit amet volutpat. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Consequat id porta nibh venenatis. Sed risus pretium quam vulputate dignissim suspendisse. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Nec tincidunt praesent semper feugiat nibh sed. Diam maecenas ultricies mi eget. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed. Nunc sed blandit libero volutpat. Eget gravida cum sociis natoque. Placerat vestibulum lectus mauris ultrices. Sit amet tellus cras adipiscing. Egestas congue quisque egestas diam in arcu cursus euismod. Velit ut tortor pretium viverra suspendisse potenti nullam ac. In hendrerit gravida rutrum quisque non tellus orci ac. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Ut pharetra sit amet aliquam id diam maecenas ultricies. Velit sed ullamcorper morbi tincidunt ornare massa.\r\n\r\n', 9, 'Exfiltration', 'En cours', 7, '2023-09-06', '2023-11-15'),
('Lear', 'Protection du cartel', 'Dapibus ultrices in iaculis nunc sed augue lacus. Egestas fringilla phasellus faucibus scelerisque eleifend donec. Dolor sed viverra ipsum nunc aliquet. Vestibulum lorem sed risus ultricies tristique. Aliquet sagittis id consectetur purus. Vestibulum sed arcu non odio euismod lacinia at quis risus. Rhoncus dolor purus non enim praesent elementum. Habitant morbi tristique senectus et netus et malesuada fames. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Viverra justo nec ultrices dui. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Ut aliquam purus sit amet luctus venenatis. Arcu bibendum at varius vel pharetra vel turpis.\r\n\r\n', 17, 'Protection', 'Echec', 6, '2023-02-06', '2023-06-06'),
('Mule', 'Profil bas', 'Vulputate mi sit amet mauris commodo quis imperdiet massa. Non tellus orci ac auctor augue mauris augue neque. Justo laoreet sit amet cursus. Arcu dui vivamus arcu felis bibendum ut tristique. Pharetra massa massa ultricies mi quis hendrerit. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Cras tincidunt lobortis feugiat vivamus. Nulla pellentesque dignissim enim sit. Viverra suspendisse potenti nullam ac. Auctor neque vitae tempus quam pellentesque nec nam. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla.\r\n\r\n', 13, 'Sabotage', 'En cours', 9, '2023-01-16', '2024-04-12'),
('Pyx', 'Reconnaissance clandestine', 'Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Et malesuada fames ac turpis egestas sed. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Dui accumsan sit amet nulla facilisi. Augue eget arcu dictum varius duis at consectetur lorem donec. Id ornare arcu odio ut sem nulla pharetra diam sit. Rutrum quisque non tellus orci ac auctor augue mauris augue. Non tellus orci ac auctor augue mauris augue neque. Mi eget mauris pharetra et ultrices. Etiam erat velit scelerisque in. Amet consectetur adipiscing elit ut aliquam purus sit amet luctus. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Aliquam sem fringilla ut morbi tincidunt augue interdum. Pretium fusce id velit ut tortor pretium viverra suspendisse potenti. Lectus mauris ultrices eros in cursus turpis massa tincidunt. Duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat.\r\n\r\n', 1, 'Surveillance', 'Terminé', 4, '2023-07-04', '2023-10-02'),
('Sable', 'Violence et rapidité', 'Sit amet porttitor eget dolor morbi non. Sed arcu non odio euismod lacinia at. Diam ut venenatis tellus in metus vulputate eu scelerisque felis. Elementum nibh tellus molestie nunc. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Elementum nisi quis eleifend quam adipiscing. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. In fermentum et sollicitudin ac orci phasellus egestas tellus. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam. Lectus arcu bibendum at varius vel pharetra vel. Quis eleifend quam adipiscing vitae proin sagittis. Ut lectus arcu bibendum at varius vel pharetra vel turpis. A diam sollicitudin tempor id eu. Ut faucibus pulvinar elementum integer. Dignissim convallis aenean et tortor at risus viverra adipiscing at. Quam pellentesque nec nam aliquam sem et. Congue eu consequat ac felis donec et odio. Nec ultrices dui sapien eget mi proin sed libero.\r\n\r\n', 7, 'Enlevement', 'Terminé', 8, '2023-08-06', '2023-10-01'),
('Seafront', 'Eaux troubles', 'Mauris augue neque gravida in fermentum et sollicitudin ac orci. In egestas erat imperdiet sed euismod nisi porta lorem. Nisi lacus sed viverra tellus. Odio aenean sed adipiscing diam donec adipiscing. Nisl purus in mollis nunc sed id semper risus in. At auctor urna nunc id cursus metus aliquam eleifend mi. Eget gravida cum sociis natoque penatibus et magnis. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Quis hendrerit dolor magna eget est. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Magna eget est lorem ipsum dolor.\r\n\r\n', 16, 'Filature', 'Echec', 5, '2023-10-01', '2023-10-07'),
('Varro', 'Frappe', 'Lectus sit amet est placerat in egestas erat imperdiet sed. Vestibulum sed arcu non odio euismod. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Id neque aliquam vestibulum morbi. Quis blandit turpis cursus in hac habitasse platea. Ipsum dolor sit amet consectetur adipiscing elit duis tristique. Sapien faucibus et molestie ac feugiat. Nec dui nunc mattis enim ut. Aenean sed adipiscing diam donec. Quam vulputate dignissim suspendisse in est ante in. Tellus in hac habitasse platea dictumst.\r\n\r\n', 10, 'Elimination', 'En préparation', 2, '2024-05-29', '2024-05-31');

-- --------------------------------------------------------

--
-- Structure de la table `mission_agent`
--

CREATE TABLE `mission_agent` (
  `code_mission` varchar(30) NOT NULL,
  `id_agent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission_agent`
--

INSERT INTO `mission_agent` (`code_mission`, `id_agent`) VALUES
('Dicing', 13),
('Dicing', 12),
('Emelia', 3),
('Emelia', 2),
('Lear', 8),
('Lear', 4),
('Lear', 5),
('Mule', 11),
('Pyx', 15),
('Sable', 9),
('Seafront', 14),
('Varro', 7),
('Armada', 2),
('Armada', 3),
('Aeneas', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mission_contact`
--

CREATE TABLE `mission_contact` (
  `code_mission` varchar(30) NOT NULL,
  `code_contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission_contact`
--

INSERT INTO `mission_contact` (`code_mission`, `code_contact`) VALUES
('Dicing', 'Wapiti'),
('Emelia', 'Pelican'),
('Lear', 'Poulet'),
('Mule', 'Carpe'),
('Pyx', 'Mouton'),
('Sable', 'Sanglier'),
('Seafront', 'Langouste'),
('Varro', 'Fouine'),
('Armada', 'Mouton'),
('Aeneas', 'Dinde');

-- --------------------------------------------------------

--
-- Structure de la table `mission_hideout`
--

CREATE TABLE `mission_hideout` (
  `code_mission` varchar(30) NOT NULL,
  `code_hideout` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission_hideout`
--

INSERT INTO `mission_hideout` (`code_mission`, `code_hideout`) VALUES
('Dicing', 'Tour'),
('Emelia', 'Bazar'),
('Lear', 'Pont'),
('Mule', 'Champ'),
('Pyx', 'Carriere'),
('Seafront', 'Temple'),
('Varro', 'Dune'),
('Armada', 'Carriere'),
('Armada', 'Fontaine'),
('Aeneas', 'Glace');

-- --------------------------------------------------------

--
-- Structure de la table `mission_target`
--

CREATE TABLE `mission_target` (
  `code_mission` varchar(30) NOT NULL,
  `code_target` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission_target`
--

INSERT INTO `mission_target` (`code_mission`, `code_target`) VALUES
('Dicing', 'Dahlia'),
('Dicing', 'Asclepiade'),
('Emelia', 'Estragon'),
('Emelia', 'Marguerite'),
('Lear', 'Chanvre'),
('Mule', 'Jonquille'),
('Mule', 'Pissenlit'),
('Pyx', 'Rose'),
('Pyx', 'Tulipe'),
('Sable', 'Souchet'),
('Seafront', 'Petunia'),
('Varro', 'Basilic'),
('Varro', 'Coquelicot'),
('Armada', 'Jasmin'),
('Aeneas', 'Noctuelle'),
('Aeneas', 'Ronce');

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

CREATE TABLE `speciality` (
  `id` int(11) NOT NULL,
  `spe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `speciality`
--

INSERT INTO `speciality` (`id`, `spe`) VALUES
(1, 'Infiltration'),
(2, 'Elimination'),
(3, 'Vol'),
(4, 'Surveillance'),
(5, 'Filature'),
(6, 'Protection'),
(7, 'Exfiltration'),
(8, 'Enlevement'),
(9, 'Sabotage'),
(12, 'Déminage');

-- --------------------------------------------------------

--
-- Structure de la table `target`
--

CREATE TABLE `target` (
  `code` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `target`
--

INSERT INTO `target` (`code`, `lastname`, `firstname`, `dob`, `id_country`) VALUES
('Asclepiade', 'Hashimoto', 'Shingeyuki', '1995-05-09', 8),
('Basilic', 'Abidoyo', 'Samuel', '1988-04-10', 11),
('Chanvre', 'Kimura', 'Namito', '1989-10-29', 16),
('Coquelicot', 'Zakhaev', 'Imran', '1985-02-03', 10),
('Dahlia', 'Laswell', 'Kate', '1992-10-04', 3),
('Estragon', 'Menendez', 'Raul', '1978-02-19', 24),
('Jasmin', 'Yuki', 'Asuna', '1995-09-15', 16),
('Jonquille', 'Da Silva', 'Kevin', '1987-06-25', 12),
('Marguerite', 'Salim', 'Yousef', '1977-06-02', 9),
('Noctuelle', 'Reznov', 'Viktor', '1963-06-08', 22),
('Petunia', 'Codreanu', 'Anita', '1982-09-25', 23),
('Pissenlit', 'Pintaco', 'Jesus', '1986-05-27', 15),
('Ronce', 'Vorshevsky', 'Alena', '1986-12-19', 21),
('Rose', 'Durand', 'Marie', '1974-05-30', 1),
('Souchet', 'Steiner', 'Friedrich', '1971-09-08', 7),
('Tulipe', 'Pandey', 'Mani', '1985-02-03', 18);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_country` (`id_country`);

--
-- Index pour la table `agent_spe`
--
ALTER TABLE `agent_spe`
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_spe` (`id_spe`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_country` (`id_country`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hideout`
--
ALTER TABLE `hideout`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_country` (`id_country`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_country` (`id_country`),
  ADD KEY `id_spe` (`id_spe`);

--
-- Index pour la table `mission_agent`
--
ALTER TABLE `mission_agent`
  ADD KEY `code_mission` (`code_mission`),
  ADD KEY `id_agent` (`id_agent`);

--
-- Index pour la table `mission_contact`
--
ALTER TABLE `mission_contact`
  ADD KEY `code_contact` (`code_contact`),
  ADD KEY `code_mission` (`code_mission`);

--
-- Index pour la table `mission_hideout`
--
ALTER TABLE `mission_hideout`
  ADD KEY `code_hideout` (`code_hideout`),
  ADD KEY `code_mission` (`code_mission`);

--
-- Index pour la table `mission_target`
--
ALTER TABLE `mission_target`
  ADD KEY `code_mission` (`code_mission`),
  ADD KEY `code_target` (`code_target`);

--
-- Index pour la table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_country` (`id_country`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `agent_spe`
--
ALTER TABLE `agent_spe`
  ADD CONSTRAINT `agent_spe_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `agent_spe_ibfk_2` FOREIGN KEY (`id_spe`) REFERENCES `speciality` (`id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `hideout`
--
ALTER TABLE `hideout`
  ADD CONSTRAINT `hideout_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `mission_ibfk_2` FOREIGN KEY (`id_spe`) REFERENCES `speciality` (`id`);

--
-- Contraintes pour la table `mission_agent`
--
ALTER TABLE `mission_agent`
  ADD CONSTRAINT `mission_agent_ibfk_1` FOREIGN KEY (`code_mission`) REFERENCES `mission` (`code`),
  ADD CONSTRAINT `mission_agent_ibfk_2` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`);

--
-- Contraintes pour la table `mission_contact`
--
ALTER TABLE `mission_contact`
  ADD CONSTRAINT `mission_contact_ibfk_1` FOREIGN KEY (`code_contact`) REFERENCES `contact` (`code`),
  ADD CONSTRAINT `mission_contact_ibfk_2` FOREIGN KEY (`code_mission`) REFERENCES `mission` (`code`);

--
-- Contraintes pour la table `mission_hideout`
--
ALTER TABLE `mission_hideout`
  ADD CONSTRAINT `mission_hideout_ibfk_1` FOREIGN KEY (`code_hideout`) REFERENCES `hideout` (`code`),
  ADD CONSTRAINT `mission_hideout_ibfk_2` FOREIGN KEY (`code_mission`) REFERENCES `mission` (`code`);

--
-- Contraintes pour la table `mission_target`
--
ALTER TABLE `mission_target`
  ADD CONSTRAINT `mission_target_ibfk_1` FOREIGN KEY (`code_mission`) REFERENCES `mission` (`code`),
  ADD CONSTRAINT `mission_target_ibfk_2` FOREIGN KEY (`code_target`) REFERENCES `target` (`code`);

--
-- Contraintes pour la table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
