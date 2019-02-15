-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 15. Feb 2019 um 14:34
-- Server-Version: 10.1.32-MariaDB
-- PHP-Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webstars`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `id` int(4) NOT NULL,
  `titel` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `inhalt` longtext NOT NULL,
  `sprache` varchar(255) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `titel`, `inhalt`, `sprache`, `datum`, `user_id`) VALUES
(2, 'Prepared Statements mit mysqli', '$statement->bind_param(\'ssi\', $product_name, $product_code, $find_id);\r\n$results =  $statement->execute();\r\nif($results){\r\n    print \'Success! record updated\'; \r\n}else{\r\n    print \'Error : (\'. $mysqli->errno .\') \'. $mysqli->error;\r\n}\r\n\r\n', 'php', '2019-02-01 11:16:29', 0),
(3, 'CSS Farbverlauf', '#farbverlauf {\r\n    background:#A2CFFF;/*fallback*/\r\n    background:-webkit-gradient(linear,left top,left bottom,from(#224058),to(#6CB2FC));\r\n    background:-webkit-linear-gradient(top,#224058,#A2CFFF);\r\n    background:   -moz-linear-gradient(top,#224058,#A2CFFF);\r\n    background:    -ms-linear-gradient(top,#224058,#A2CFFF);\r\n    background:     -o-linear-gradient(top,#224058,#A2CFFF);\r\n    background:        linear-gradient(to bottom,#224058, #A2CFFF);/*Standard*/\r\n}\r\n', 'css', '2019-02-15 13:07:07', 0),
(8, ' Webseiten schneller machen mit .htaccess', '<IfModule mod_expires.c>\r\n  ExpiresActive On\r\n  ExpiresDefault \"access plus 1 seconds\"\r\n  ExpiresByType image/x-icon \"access plus 1 year\"\r\n  ExpiresByType image/jpeg \"access plus 1 year\"\r\n  ExpiresByType image/png \"access plus 1 year\"\r\n  ExpiresByType image/gif \"access plus 1 year\"\r\n  ExpiresByType text/css \"access plus 1 month\"\r\n  ExpiresByType text/javascript \"access plus 1 month\"\r\n  ExpiresByType application/octet-stream \"access plus 1 month\"\r\n  ExpiresByType application/x-javascript \"access plus 1 month\"\r\n</IfModule>', 'php', '2019-02-15 13:17:52', 0),
(9, 'sdfsdf', 'sdfsdf', 'javascript', '2019-02-15 13:20:30', 0),
(7, 'ProcessWire Passwort vergessen', '<?php\r\n//bestehender User\r\n $u = $users->get(\"admin\"); //Dein Usernamen\r\n $u->pass = \"passwort\";\r\n $u->save();\r\n\r\n//neuer Supperuser\r\n $u = new User();\r\n $u->name = \"DeinName\";\r\n $u->pass = \"DeinPasswort\";\r\n $u->addRole(\"superuser\");\r\n $u->save();\r\n?>', 'php', '2019-02-15 09:58:40', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `vorname` varchar(180) NOT NULL,
  `nachname` varchar(180) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `rechte` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `vorname`, `nachname`, `username`, `passwort`, `mail`, `rechte`) VALUES
(1, 'Andy', 'Perin', 'admin', 'a22ad7f48e16d80ea7c2c7b96a30a94c90f39a27e5916f6f62be2244363dee5a', 'admin@blog.intern', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
