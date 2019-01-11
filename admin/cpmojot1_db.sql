-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 03, 2014 at 06:48 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `cpmojot1_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  `acct_status` varchar(1) NOT NULL,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`admin_id`, `name`, `username`, `passwd`, `last_login`, `last_logout`, `acct_status`, `designation`) VALUES 
(1, 'admin', 'admin', 'admin', '2014-04-13 08:38:55', '0000-00-00 00:00:00', '1', 'Superadmin'),
(2, 'lol', 'lol', 'lol', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'Academics'),
(3, 'lasuGuy', 'lasuGuy', 'lasuGuy', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'Academics'),
(4, 'osu', 'campusOou', 'campusOou', '2012-08-20 23:52:41', '0000-00-00 00:00:00', '1', 'Academics');

-- --------------------------------------------------------

-- 
-- Table structure for table `events`
-- 

CREATE TABLE `events` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  `datee` date NOT NULL,
  `details` longtext NOT NULL,
  `datee2` date NOT NULL,
  `loc` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `events`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `comment` longtext NOT NULL,
  `datee` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `gender`, `address`, `city`, `state`, `country`, `comment`, `datee`) VALUES 
(3, 'Samson Adeola', 'ayodeji@ennovatenigeria.com', '2348060600472', 'Male', '4,Oloye Street,Egbeda,Lagos', 'Lagos', 'Lagos', 'Nigeria', 'eqfeqwf', '2014-03-23 04:58:27');

-- --------------------------------------------------------

-- 
-- Table structure for table `menus`
-- 

CREATE TABLE `menus` (
  `id` mediumint(9) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `hod` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `menus`
-- 

INSERT INTO `menus` (`id`, `name`, `description`, `hod`) VALUES 
(3, 'Music', '<p>This is music page <span style="text-decoration: underline;">now. Hahahah</span></p>', 'Samson'),
(4, 'Sunday School', '', ''),
(5, 'Prayer', '', ''),
(6, 'Vision', '<p>This is vision page</p>', 'Sky');

-- --------------------------------------------------------

-- 
-- Table structure for table `messages`
-- 

CREATE TABLE `messages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `messages`
-- 

INSERT INTO `messages` (`id`, `name`) VALUES 
(1, 'Message2'),
(2, 'Message1');

-- --------------------------------------------------------

-- 
-- Table structure for table `msg`
-- 

CREATE TABLE `msg` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` longtext NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `msg`
-- 

INSERT INTO `msg` (`id`, `name`, `phone`, `email`, `msg`, `datee`) VALUES 
(1, 'nn', 'pp', 'wwee', 'nnmm', '0000-00-00'),
(2, 'Ayodeji Adesola', '0090jhiuhgiu', 'email', 'hgfytfyut', '2012-10-19'),
(3, 'Ayodeji Adesola', '0090jhiuhgiu', 'email', 'hgfytfyut', '2012-10-19'),
(4, 'Ayodeji Adesola', 'fggfgt', 'hyyh', 'fgh', '2012-10-19'),
(5, 'eee', 'errr', 'ghhgt', 'rtrtfr', '2012-10-19'),
(6, 'Gabriel Afolayon', 'y', 'h', 'y', '2012-10-19'),
(7, 'Francis Ebube', 'FFF', 'hg', 'ghgh', '2012-10-19'),
(8, 'hh', 'jh', 'hh', 'g', '2012-10-19'),
(9, 'jh', 'JJ', 'JJ', 'JJ', '2012-10-19'),
(10, 'ghfg', 'hghgq', 'hg', 'ytjhy', '2012-10-19'),
(11, 'hg', 'GH', 'FFG', 'QHH', '2012-10-19');

-- --------------------------------------------------------

-- 
-- Table structure for table `pages`
-- 

CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `task` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` longtext NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `pages`
-- 

INSERT INTO `pages` (`id`, `task`, `title`, `details`, `datee`) VALUES 
(1, 'about', 'About Cpm', '<p>this is about us page</p>', '0000-00-00'),
(2, 'prayer', 'Prayer Ministry', '<p>prayer ministry page editing</p>', '0000-00-00'),
(3, 'dept', 'Departments', '<p><strong>All the departments</strong></p>', '0000-00-00'),
(4, 'weekly', 'Weekly Activities', '<table style="width: 543px;" border="0" cellspacing="0" cellpadding="0"><colgroup> <col width="92" /> <col width="64" /> <col width="262" /> <col width="125" /></colgroup>\r\n<tbody>\r\n<tr>\r\n<td class="xl66" style="text-align: center;" width="92" height="28"><span style="font-family: arial black,avant garde; font-size: medium;">DAY</span></td>\r\n<td class="xl73" style="text-align: left;" colspan="2" width="326"><span style="font-family: arial black,avant garde; font-size: medium;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTIVITY</span></td>\r\n<td class="xl67" style="text-align: center;" width="125"><span style="font-family: arial black,avant garde; font-size: medium;">TIME</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl68" style="text-align: center;" rowspan="4" height="80"><span style="font-family: arial black,avant garde; font-size: medium;">MONDAY</span></td>\r\n<td class="xl69" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">P.A.T(MEN''S FELLOWSHIP)&nbsp;</span></td>\r\n<td class="xl68" style="text-align: center;" rowspan="4"><span style="font-family: arial black,avant garde; font-size: medium;">6.30PM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" style="text-align: center;" colspan="2" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">WOMEN FELLOWSHIP&nbsp;</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" style="text-align: center;" colspan="2" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">YOUTH FELLOWSHIP&nbsp;</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl70" style="text-align: center;" colspan="2" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">TEENS FELLOWSHIP&nbsp;</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl71" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">TUESDAY</span></td>\r\n<td class="xl70" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">JESUS FOUNDATION CLASSES (JFC)&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">6.30PM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl71" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">WEDNESDAY</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">BIBLE STUDY&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">6.30PM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl71" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">FRIDAY</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">WINNERS'' NIGHT&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">6.30PM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl71" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">SATURDAY</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">EVANGELISM&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">4.00PM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl71" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">SUNDAY</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">WORSHIP SERVICE&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">8.00AM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl72" style="text-align: center;" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">&nbsp;</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">FIRST DAY OF THE MONTH: <span class="font5">CONVENANT HOUR</span>&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">6.00AM - 7.00AM</span></td>\r\n</tr>\r\n<tr>\r\n<td class="xl72" height="20"><span style="font-family: arial black,avant garde; font-size: medium;">&nbsp;</span></td>\r\n<td class="xl72" style="text-align: center;" colspan="2"><span style="font-family: arial black,avant garde; font-size: medium;">LAST FRIDAY OF EVERY MONTH: <span class="font5">NIGHT OF WONDERS</span>&nbsp;</span></td>\r\n<td class="xl71" style="text-align: center;"><span style="font-family: arial black,avant garde; font-size: medium;">10.00PM</span></td>\r\n</tr>\r\n</tbody>\r\n</table>', '0000-00-00'),
(5, 'cell', 'Home Cell Units', '<p>House fellowship, also known as Church in the House is a small group of Christian Pentecostal Mission &nbsp;members and friends who are building lasting relationship, caring for one another and growing in Christ likeness. It is the coming together of two or more house holds in fellowship. The primary function is edification, evangelism, sharing and caring, <strong>nurturing, training and discipling.</strong></p>\r\n<p><strong>House Fellowship</strong> is part of the recognizable governmental structure of the Christian Pentecostal Mission where members living within the same community gather&nbsp; for fellowship every Sunday between the hours of 6.00pm and 7.00pm. It is the repackaging of the mega church into manageable units of about 15 persons.</p>\r\n<p>Christian Pentecostal Mission is likened to a big ship, while the Church in the House centers is small lifeboats attached to the big ship. A big ship without smaller lifeboats is a disaster going somewhere to happen. For when tragedy hits, all will be lost. However, where there are smaller lifeboats, these are used to ferry people safely to the shores. Storm is normal in life. In the parable of the two builders in <strong>Luke 6:46-49</strong>, Jesus said <strong>&ldquo;when&rdquo;</strong> and not <strong>&ldquo;if&rdquo;</strong>. Either you dig-deep to lay your foundation, or you build your own house on the sand, flood will come. It is therefore wise to prepare for a better tomorrow, today.</p>\r\n<p>House Fellowship has its root in the Bible. We read in Rom 16: 3-5, &ldquo;Greet Priscilla and Aquilla, my fellow workers in Christ Jesus, Greet also the church that meets at their house&rdquo;. &ldquo;Give my greetings to the brothers at Laodicea and to Nympha and the church that is in his house&rdquo; (Col. 4:15) &ldquo;&hellip;&hellip;To Philemon our dear friend &hellip;&hellip; and to the church that meets in your house (Philemon 1, 2).</p>\r\n<p>From the above scriptures, it is evident that the early church met in houses. These were not houses belonging to the church/ministry. Rather, they were houses that people lived in and opened up as a meeting place for the people of God. <em>The most explosive period of church growth in history did not take place in church buildings</em>. At this level, people can easily build lasting interpersonal relationships and can get involved in one another&rsquo;s affairs both in times of challenges as well as celebrations.&nbsp;</p>\r\n<p><br /> Membership of the House Fellowship is not restricted to members of Christian Pentecostal Mission alone. In many centers, members of other ministry take advantage of this project and fellowship with the brethren.<br /> For the purpose of administration and effective coordination, three or more House Fellowship centers are grouped together as a Zone. Every zone is being supervised by a Coordinator. </p>', '0000-00-00'),
(6, 'corner', 'Pastor''s Corner', 'it is my earnest prayer and expectation that the word of the Almighty God expressed through this medium will serve as seeds of faith planted in the rich soil of your heart. You will live the WORD and never again will you suffer shame.zx ', '0000-00-00'),
(7, 'int', 'Intercessory', 'int', '0000-00-00'),
(8, 'welcome', '', 'welcome oooox  ', '0000-00-00'),
(9, 'contact', 'Contact Details', '<p>Ojota, Lagos</p>', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `pic`
-- 

CREATE TABLE `pic` (
  `id` int(11) NOT NULL auto_increment,
  `loc` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `pic`
-- 

INSERT INTO `pic` (`id`, `loc`, `description`) VALUES 
(1, '1', ''),
(2, '2', ''),
(3, '3', ''),
(4, '4', ''),
(5, '5', 'ddf'),
(6, '6', 'ddf'),
(7, '7', 'CEO Ibari Ogwa Village, Chukwudi Ofoha & Charles A');

-- --------------------------------------------------------

-- 
-- Table structure for table `posts`
-- 

CREATE TABLE `posts` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  `datee` date NOT NULL,
  `details` longtext NOT NULL,
  `datee2` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `posts`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `testimonies`
-- 

CREATE TABLE `testimonies` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  `datee` date NOT NULL,
  `details` longtext NOT NULL,
  `datee2` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `testimonies`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `vid`
-- 

CREATE TABLE `vid` (
  `id` int(11) NOT NULL auto_increment,
  `loc` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `vid`
-- 

INSERT INTO `vid` (`id`, `loc`, `name`) VALUES 
(2, 'wewe', 'Praise God'),
(3, 'eFL08DXirOY', 'video');

-- --------------------------------------------------------

-- 
-- Table structure for table `videos`
-- 

CREATE TABLE `videos` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `videos`
-- 

INSERT INTO `videos` (`id`, `name`) VALUES 
(1, 'Message1vs');
