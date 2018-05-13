SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `apphpcom_admpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `PHPAP105_admins`
--

DROP TABLE IF EXISTS `PHPAP105_admins`;
CREATE TABLE IF NOT EXISTS `PHPAP105_admins` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `last_name` varchar(50) NOT NULL default '',
  `first_name` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `status` enum('main admin','admin') NOT NULL default 'main admin',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PHPAP105_admins`
--

INSERT INTO `PHPAP105_admins` (`id`, `username`, `password`, `last_name`, `first_name`, `email`, `status`) VALUES
(1, 'admin', 'test', 'John', 'Smith', 'admin@domain.com', 'main admin');

-- --------------------------------------------------------

--
-- Table structure for table `PHPAP105_menu`
--

DROP TABLE IF EXISTS `PHPAP105_menu`;
CREATE TABLE IF NOT EXISTS `PHPAP105_menu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL default '',
  `page_name` varchar(30) NOT NULL default '',
  `is_menu_group` tinyint(1) NOT NULL default '0',
  `is_removable` tinyint(1) NOT NULL default '0',
  `is_hidden` tinyint(1) NOT NULL default '0',
  `parent_id` int(11) NOT NULL default '0',
  `order_index` tinyint(3) NOT NULL default '0',
  `icon` varchar(30) default NULL,
  `is_dashboard_icon` tinyint(1) default '1',
  `is_menu_item` tinyint(1) NOT NULL default '1',
  `file_type_id` tinyint(3) NOT NULL default '2',
  PRIMARY KEY  (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `is_menu_name` (`is_menu_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `PHPAP105_menu`
--

INSERT INTO `PHPAP105_menu` (`id`, `name`, `page_name`, `is_menu_group`, `is_removable`, `is_hidden`, `parent_id`, `order_index`, `icon`, `is_dashboard_icon`, `is_menu_item`, `file_type_id`) VALUES
(1, 'General', '', 1, 0, 0, 0, 0, NULL, 1, 1, 2),
(2, 'Account Manager', '', 1, 0, 0, 0, 5, NULL, 1, 1, 2),
(3, 'Emails & Events', '', 1, 0, 0, 0, 10, NULL, 1, 1, 2),
(4, 'Statistics', '', 1, 0, 0, 0, 15, NULL, 1, 1, 2),
(33, 'Menu Manager', 'menu_manager.php', 0, 0, 0, 1, 10, 'img_33.png', 1, 1, 2),
(36, 'Main', 'home.php', 0, 0, 0, 1, 0, '', 0, 1, 2),
(37, 'Admins', 'pages/admins.php', 0, 0, 0, 2, 0, 'img_37.png', 1, 1, 2),
(38, 'Users', 'pages/users.php', 0, 0, 0, 2, 5, 'img_38.png', 1, 1, 2),
(39, 'News', 'pages/news.php', 0, 0, 0, 3, 0, 'img_k2gmsukgm9.png', 1, 1, 2),
(40, 'Mass Mail', 'pages/mass_mail.php', 0, 0, 0, 3, 5, 'img_cnuiv9barc.png', 1, 1, 2),
(41, 'Events', 'pages/events.php', 0, 0, 0, 3, 10, 'img_np85s2ylpo.png', 1, 1, 2),
(42, 'Logs', 'pages/logs.php', 0, 0, 0, 4, 0, 'img_z38beqqynn.png', 1, 1, 2),
(43, 'Statistics', 'pages/statistics.php', 0, 0, 0, 4, 5, 'img_tkktc9zys8.png', 1, 1, 2),
(68, 'Pages', '', 1, 0, 0, 0, 7, NULL, 0, 1, 2),
(69, 'Static', 'pages/static_pages.php', 0, 0, 0, 68, 0, '', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `PHPAP105_settings`
--

DROP TABLE IF EXISTS `PHPAP105_settings`;
CREATE TABLE IF NOT EXISTS `PHPAP105_settings` (
  `id` tinyint(3) NOT NULL auto_increment,
  `site_name` varchar(125) NOT NULL default '',
  `site_address` varchar(125) NOT NULL default '',
  `css_style` varchar(10) NOT NULL default '',
  `header_text` varchar(125) NOT NULL default '',
  `site_language` char(2) NOT NULL default 'en',
  `datagrid_css_style` varchar(10) NOT NULL default 'default',
  `menu_style` enum('left','top') NOT NULL default 'left',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PHPAP105_settings`
--

INSERT INTO `PHPAP105_settings` (`id`, `site_name`, `site_address`, `css_style`, `header_text`, `site_language`, `datagrid_css_style`, `menu_style`) VALUES
(1, 'Admin Panel Development', 'domain.com', 'blue', 'Admin Panel', 'en', 'blue', 'top');
