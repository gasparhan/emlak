

-- 
-- Tablo yapýsý: `admin`
-- 

CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `uin` varchar(100) NOT NULL default '',
  `pwd` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Tablo döküm verisi `admin`
-- 

INSERT INTO `admin` VALUES (1, 'downlive.net', 'downlive.net');

-- --------------------------------------------------------

-- 
-- Tablo yapýsý: `adverts`
-- 

CREATE TABLE `adverts` (
  `id` int(10) NOT NULL auto_increment,
  `masterid` varchar(10) NOT NULL default '',
  `customer` varchar(100) NOT NULL default '',
  `b_tarih` int(10) NOT NULL default '0',
  `s_tarih` int(10) NOT NULL default '0',
  `durum` enum('Satilik','Kiralik') NOT NULL default 'Satilik',
  `emlak` enum('Konut','Arsa','Dukkan') NOT NULL default 'Konut',
  `cesit` varchar(100) NOT NULL default '',
  `sehir` varchar(100) NOT NULL default '',
  `semt` varchar(100) NOT NULL default '',
  `mahalle` varchar(100) NOT NULL default '',
  `cadde` varchar(100) NOT NULL default '',
  `a_bina` varchar(100) NOT NULL default '',
  `n_bina` varchar(100) NOT NULL default '',
  `katno` varchar(100) NOT NULL default '',
  `daire` varchar(100) NOT NULL default '',
  `tarif` text NOT NULL,
  `fiyat` varchar(100) NOT NULL default '',
  `birim` enum('trl','usd','eur') NOT NULL default 'trl',
  `depozit` varchar(100) NOT NULL default '',
  `aidat` varchar(100) NOT NULL default '',
  `buyukluk` varchar(100) NOT NULL default '',
  `o_sayi` varchar(100) NOT NULL default '',
  `s_sayi` varchar(100) NOT NULL default '',
  `b_sayi` varchar(100) NOT NULL default '',
  `k_sayi` varchar(100) NOT NULL default '',
  `yas` varchar(100) NOT NULL default '',
  `manzara` varchar(100) NOT NULL default '',
  `havuz` varchar(100) NOT NULL default '',
  `otopark` varchar(100) NOT NULL default '',
  `isitma` varchar(100) NOT NULL default '',
  `yakit` varchar(100) NOT NULL default '',
  `asansor` enum('var','yok') NOT NULL default 'var',
  `tv` varchar(100) NOT NULL default '',
  `detaylar` text NOT NULL,
  `notlar` text NOT NULL,
  `status` enum('Yayinda','Beklemede','iptal','Satildi','Kiralandi') NOT NULL default 'Yayinda',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

-- 
-- Tablo döküm verisi `adverts`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapýsý: `customers`
-- 

CREATE TABLE `customers` (
  `id` int(10) NOT NULL auto_increment,
  `type` varchar(10) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  `phone` varchar(100) NOT NULL default '',
  `gsm` varchar(100) NOT NULL default '',
  `fax` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `address` text NOT NULL,
  `state` varchar(100) NOT NULL default '',
  `city` varchar(100) NOT NULL default '',
  `profession` varchar(100) NOT NULL default '',
  `notes` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

-- 
-- Tablo döküm verisi `customers`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapýsý: `mainpage`
-- 

CREATE TABLE `mainpage` (
  `content` text NOT NULL,
  `resim` varchar(100) NOT NULL default '',
  `yetkili` varchar(100) NOT NULL default '',
  `adres` text NOT NULL,
  `telefon1` varchar(100) NOT NULL default '',
  `telefon2` varchar(100) NOT NULL default '',
  `faks` varchar(100) NOT NULL default '',
  `email1` varchar(100) NOT NULL default '',
  `email2` varchar(100) NOT NULL default '',
  `email3` varchar(100) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Tablo döküm verisi `mainpage`
-- 

INSERT INTO `mainpage` VALUES ('Patlat.org\r\Tahribat !', '', 'Patlat.org', 'Patlat.org\r\Tahribat !', '', '', '', 'Patlat.org', 'Patlat.org', 'Patlat.org');

-- --------------------------------------------------------

-- 
-- Tablo yapýsý: `pictures`
-- 

CREATE TABLE `pictures` (
  `id` int(10) NOT NULL auto_increment,
  `masterid` varchar(10) NOT NULL default '',
  `picture` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=379 ;

-- 
-- Tablo döküm verisi `pictures`
-- 

