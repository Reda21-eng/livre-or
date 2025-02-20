-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 fév. 2025 à 09:09
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `id_user` int NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `id_user`, `date`) VALUES
(1, 'Je vous souhaite tout le bonheur du monde xo xo', 1, '2025-02-18 08:55:02'),
(2, 'Voleuse de mari!!!!\r\n', 1, '2025-02-18 08:56:14'),
(3, 'Bonjour, les petis fours était bon mais l\'ambaice n\'était pas top, plein de bonheurs \r\n', 1, '2025-02-18 09:16:51'),
(4, 'Vive les mariés!!!', 1, '2025-02-19 17:04:43'),
(5, 'Trop jalouse mdr', 1, '2025-02-19 17:13:48'),
(6, 'Félicitations !', 1, '2025-02-20 09:06:12');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'anissa ourdjini', '$2y$10$7XRagaWZrhCqY/eAVi44gOcEK3u.vwCVFCfkqW4n4E78Ec17sDI9u'),
(2, 'anissa ourdjini', '$2y$10$MclMRX4Uo8ZL68lFsQ7zkeXGYgcR3q46mRJCsiGnqwntKZe6Exx/S'),
(3, 'anissa ourdjini', '$2y$10$Z5LVdeHU.7YdI/BqssqKVeISmHt/V1XewNYYgDgT5N43BxEcUVbXG'),
(4, 'anissa ourdjini', '$2y$10$GDHOWqq/1I/bRvd0jR2GDuHtbzAxTNUvcvU.SvopfyvzC07NUfiIu'),
(5, 'anissa ourdjini', '$2y$10$//WjLSzADvFKWsbwiyGOiuZVOmWlnBqKJhWTH.d9iQOHyMKGZ8FO2'),
(6, 'anissa ourdjini', '$2y$10$yk46G37.wGm5BRiMCe/2NeFPPobLqacvw2RMbG1Hxg2Sas/Vo/ZvG'),
(7, 'anissa ourdjini', '$2y$10$rLEj8GM1qL7AGTqeIUzwz.6l45fSIgerxTFngEr4smoU.FlZ7LCUK'),
(8, 'anissa ourdjini', '$2y$10$NAjWHQkCeKBCukcHooltseIFT0qliZqj7DgMZpbjrS981GyIqQ2kG'),
(9, 'anissa ourdjini', '$2y$10$t07DjxjM8HfqapFiXLSs6.v3.f2Z6APQWQC6S8Bd4SkFOzAxBRcFi'),
(10, 'anissa ourdjini', '$2y$10$eRB/82L9I7zuf7tIIh7ypeS3X.hK6Vza0gxARpulbxnrmtZHnwCWy'),
(11, 'anissa ourdjini', '$2y$10$VrIWpv4eqx3LMCqPkK812uOrzTt4sWtFO9f1ToJpPfpE2/LX/gbdK'),
(12, 'anissa ourdjini', '$2y$10$DwSV1INRwjpQ9oaM1c5gxOC5SYl6tfb4ABvo16R5OXsB/UF1AZlyK'),
(13, 'anissa ourdjini', '$2y$10$HATs3Ozwd6bi4L3QqiFZp.i1CVq0wzymtZT9WY6S5mde.nZZ6hrkG'),
(14, 'anissa ourdjini', '$2y$10$Nk4TYnYL4vylSHzm7vA2VuKW8dU2uvBHdSyC8x1PJlVuJaMA6g5Na'),
(15, 'anissa ourdjini', '$2y$10$vQ.1zqIct4hllN.WA8sW/ORtOae1S1hhF3y1GaPHsGNMbR/tDT9qi'),
(16, 'anissa ourdjini', '$2y$10$L2vxIUmqgQ7hHiNgz8DprOCXd79jlJA7LSf7EbalmcrBowOSXxlqu'),
(17, 'anissa ourdjini', '$2y$10$4dHFKnkWndsKpO77D4h4YeQKolN/0onCj2E97a0xdCL01BJkXeygC'),
(18, 'anissa ourdjini', '$2y$10$qdH2JWQTnHId6bOFOBQcqOYfmsPgusUFeLuomzAytuvdhfw6Nfj7C'),
(19, 'anissa ourdjini', '$2y$10$1wghkDqVapXLRqXvOnKnz.MRabb7vmaAKouFfYwFL2SqB3cI0PnzC'),
(20, 'anissa ourdjini', '$2y$10$.psVawJOPo/lcoW460DLkukROyef1fBRtbbfYajZv1Y07x85bUjt.'),
(21, 'anissa ourdjini', '$2y$10$dUJdWqglU2OnE0D4n4hQveK.NU4r2RlmztgLEcvrskfnAQo/nmpCu'),
(22, 'anissa ourdjini', '$2y$10$LLLEK91tXwsIhmzEPRVlaOJtHNZnceQmbYiNx8y8mJy8SVST5jcFC'),
(23, 'anissa ourdjini', '$2y$10$K.92K9m8cIXg75BWdtgKzu44zdyZxn41z0fOT6R69w87q8MKGf2Ay'),
(24, 'anissa ourdjini', '$2y$10$bzjN.X5xOXVG4lUvY9DNUe1ZQFnJ3.hRbqykYK9uE5dnu34YUBCHu'),
(25, 'anissa ourdjini', '$2y$10$pTJGQsRPuHXFrm1EHw3dlui/.KEg0fOVn1M/OoApM2WJ4v1UMB5MG'),
(26, 'anissa ourdjini', '$2y$10$Niz1gc40DQHrrsp/puZIpuKeN2lt0I8ZVETc0mI52kylSN35VRuBe'),
(27, 'anissa ourdjini', '$2y$10$3gdJrGgpB0bkCFQwqeBO5O8FLaXzAA2Hq0I20uDmauAn4ZHgUbLuu'),
(28, 'anissa ourdjini', '$2y$10$rlaOZ8aR9WHh3M0cG8azCuY9WTweABt5Ig6oHMhZonjXkqBr/oUMy'),
(29, 'anissa ourdjini', '$2y$10$fZEVx5XZsf6m2.P3IWpCHOSYwUJ5DMy6gBzVNWFsO1gUSsSayfBha'),
(30, 'anissa ourdjini', '$2y$10$Jr.QnRrmMeB1h5BHwJEwP.aABDv65bn9F7ryBudybLYY.FqVqIJAm'),
(31, 'anissa ourdjini', '$2y$10$SidgWs.6lV9UNZRbd6SbmO9u3i0ozJ4e9WxyF6B7QHTsNeyAclg1S'),
(32, 'anissa ourdjini', '$2y$10$R8eda6rjySgKVEY2xYIjyOsY6ZD9rPPnERokYrJAppf0UZY9sRvca'),
(33, 'anissa ourdjini', '$2y$10$WxKga2ZTXfZcBzA77QyequMiHlG6FDVwiesHh4nV5LIEkAIf/LQtu'),
(34, 'anissa ourdjini', '$2y$10$lQLNDEKzCd4DLMm7w9oEROYJFzx4JXMXy3DXo6FsHlrBcA.fWO0he'),
(35, 'anissa ourdjini', '$2y$10$/7h5FHq8wtVFGJgMDzO.Fe5uIUBYb9hGsd1STauWh/alaJrwwhZr2'),
(36, 'anissa ourdjini', '$2y$10$thNP6buA6vJv.xTQXGFSd.5TQme1SaEztgdmRWTNpnTdd4NnJJLQK'),
(37, 'anissa ourdjini', '$2y$10$ZSzMbwpvGfGuAB9k2BTrDuYa7opknvaHXpCSWhQXeLaiUN3rtqjxO'),
(38, 'anissa ourdjini', '$2y$10$oDuhc4cUqejyO77OlUj/Y.V/9zSNfobM.glnO.PLOxhL9w1Z0xnoa'),
(39, 'anissa ourdjini', '$2y$10$LpbbHgxEPHLF2umf5bKxvO35KMpxIib482GBsrk00OVQealpryz4C'),
(40, 'anissa ourdjini', '$2y$10$wx4wRI.fjNem3ntgMfZZnulZlGFlycbkqGdsfOOET3a8eQhpXWYk.'),
(41, 'anissa ourdjini', '$2y$10$RyfX593XZXPqr9BBTGiH5ejgV/aMkqQyChnhcdRKlI3FVrUGjCo52'),
(42, 'anissa ourdjini', '$2y$10$yfPZ5sTOjjlrQ285sZgBreK8GBb5p7gBAW.fY4QfE60ia2FusZjim'),
(43, 'anissa ourdjini', '$2y$10$JpmhY3M3gecZ7b/9R4mV1uJWXBqkPgC.pGCsx/dXeCJmC60QdL6a2'),
(44, 'anissa ourdjini', '$2y$10$/cBrEk2rhNhE3VH5Cglqlu/QhiuXunUZb5KdbncRas9p.JuBVjgMe'),
(45, 'anissa ourdjini', '$2y$10$810hV52d0RSKHT74Cp7K..n4cie7gKooQ9pMs8Q9ewoXt9H3Hkd0u'),
(46, 'anissa ourdjini', '$2y$10$BTdhaWq7lHt.fuSG76WF7uVkZYbrLuPAi.81vyhUqvanU3Zq4m98q'),
(47, 'anissa ourdjini', '$2y$10$hTUL9TjruzRgBbixRRK7LurrTNyV3jhSu3GZPsh4SbLPZxOdob4B6'),
(48, 'anissa ourdjini', '$2y$10$sX9Q.Ax2T03l1rfBh5BEqeKBNPwhIBSjv0nbODxZV8ep0grWtwfUq'),
(49, 'anissa ourdjini', '$2y$10$9ibbByOCtm.bVqH3xu7AR.G1hn4YGDau0p1jFckceT1DBLM1SCsz2'),
(50, 'anissa ourdjini', '$2y$10$lLlQB.xh5et4xhf12Ipcce2QyjF69AjWVxTAtLCapX3Q8ldhVLaie'),
(51, 'anissa ourdjini', '$2y$10$h.RU2f89gTzLJ.ys8SCnV.QIn9chm1uozSUKaFGW3925xjIiErAoe'),
(52, 'anissa ourdjini', '$2y$10$dUQ0xP7PL05jlBxg0oJGFu7Qlo6nQ0bA1xjPUFYloWP84Zsra2.me'),
(53, 'anissa ourdjini', '$2y$10$1qcY6K0SSnGFieBWmB9X4OyQwWCbhb6EBADUc0XfQbk59H/O6AJZe'),
(54, 'anissa ourdjini', '$2y$10$mDDj9tjIvZgmcWpStVDgmuQfH9QDsJwjE0F7KWE/.bWJytZ2XTVOe'),
(55, 'anissa ourdjini', '$2y$10$RxiNXSD6ZQ./GI5cjt3rXuBa7Ae5W3hJhZ2kr4/DfOOnc/EG2.gxW'),
(56, 'anissa ourdjini', '$2y$10$9Kdva0u5cVTC6MB4m4afKONQ0zyL06.gsmPUjZXGKYsPwdxSxFnGS'),
(57, 'anissa ourdjini', '$2y$10$n8cEva1fVE0wxPFovAGGZeKQscK/baG3o0x8IfA80D4olIrrdgvCK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
