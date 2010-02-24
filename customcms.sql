-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2010 at 11:20 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `costumcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `published` datetime NOT NULL,
  `status_id` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `subpage_count` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `created`, `modified`, `published`, `status_id`, `tags`, `type`, `user_id`, `parent_id`, `subpage_count`, `url`) VALUES
(25, 'About us', 'Augue et dapibus platea aenean dapibus diam sit! Ultrices! Magna hac tortor pulvinar? In. In urna, aliquam elit! Tempor vut arcu lorem, tempor mauris? In elementum in lundium lorem? Purus. Et nisi odio nunc? Dictumst! Velit porttitor ultrices augue scelerisque vel cras et rhoncus, natoque? Porta? Scelerisque dignissim etiam hac! Cras? In mus augue vel et, cras vut? Natoque cum pulvinar platea magna, sit non velit augue rhoncus lectus magna vel? Enim, mattis dapibus pulvinar elit enim, non, et, nisi, odio vut et in, placerat, dis porta? Platea montes vel! Porta! In? Nec elementum nisi, porttitor proin aenean et, hac massa massa ac tristique dictumst sociis in augue quis vel. Cursus lacus, vel amet, ridiculus penatibus! Dis porttitor, nisi! Urna.', '2010-02-20 14:28:25', '2010-02-20 14:28:29', '2010-02-20 14:28:33', 1, '', 'Page', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `published` datetime NOT NULL,
  `status_id` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `attachmentName` varchar(100) NOT NULL,
  `attachmentType` varchar(100) NOT NULL,
  `attachmentLocation` varchar(100) NOT NULL,
  `attachmentSize` int(11) NOT NULL,
  `attachmentWidth` int(11) NOT NULL,
  `attachmentHeight` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `photo_count` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `title` (`title`,`body`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `published`, `status_id`, `tags`, `type`, `attachmentName`, `attachmentType`, `attachmentLocation`, `attachmentSize`, `attachmentWidth`, `attachmentHeight`, `user_id`, `parent_id`, `comment_count`, `photo_count`, `url`) VALUES
(10, 'Barcelona is the Greatest', '<p><span style="font-family: arial; font-size: 13px;">Et risus platea integer cum, est dolor arcu lacus turpis vut? Tincidunt, ut mid! Proin. Cras mus nisi augue, massa montes placerat, mauris elementum odio magnis! Ultricies. Odio non, velit nascetur quis aenean diam adipiscing! Nunc scelerisque augue proin porta natoque? Sociis in rhoncus pid habitasse augue augue ultrices. Porta. Tincidunt elit egestas, egestas pulvinar? Urna enim diam integer aliquam amet natoque ac pid dapibus nec, vel ut lundium, rhoncus, hac hac ridiculus nec ut pulvinar sit. Etiam, placerat egestas quis augue parturient lacus aliquet in, habitasse. Arcu tincidunt. Elementum adipiscing cras mus integer sit mus porttitor hac tristique nisi sit sit nec. Parturient turpis et phasellus! Hac pid, augue ridiculus rhoncus pulvinar! Augue montes porta magnis ridiculus dictumst</span></p>', '2010-02-13 03:22:17', '2010-02-17 13:50:43', '2010-02-13 03:21:00', 1, 'barca,great,soccer', 'Post', '', '', '', 0, 0, 0, 1, 0, 0, 0, ''),
(11, 'Cool is the new word', 'cool is the new word for whom is nice and cool', '2010-02-13 03:22:54', '2010-02-15 22:30:48', '2010-02-13 03:22:00', 1, 'calm,cool,nice', 'post', '', '', '', 0, 0, 0, 1, 0, 0, 0, ''),
(21, 'christmas ', '', '2010-02-18 19:24:28', '2010-02-18 19:24:28', '0000-00-00 00:00:00', 0, '', 'Photo', '8419_1193287284496_1597851283_30506077_4228357_n.jpg', 'image/jpeg', 'files', 48238, 604, 401, 0, 20, 0, 0, ''),
(13, 'my new name is B', 'cool is my being cool ', '2010-02-17 01:33:56', '2010-02-17 01:33:56', '2010-02-17 01:33:00', 2, 'is,my,name', 'Post', '', '', '', 0, 0, 0, 1, 0, 1, 0, ''),
(19, 'testing', '<p><strong>coooll</strong></p>', '2010-02-17 14:30:12', '2010-02-17 14:30:12', '2010-02-17 14:29:00', 1, '', 'Post', '', '', '', 0, 0, 0, 1, 0, 0, 0, ''),
(20, 'christmas 2009', '<p>Christmas 2009</p>', '2010-02-18 19:23:18', '2010-02-18 19:23:18', '2010-02-18 19:22:00', 1, '', 'Album', '', '', '', 0, 0, 0, 1, 0, 0, 2, ''),
(22, 'picture1', '', '2010-02-18 20:03:00', '2010-02-18 20:03:00', '0000-00-00 00:00:00', 0, '', 'Photo', '10162009010.jpg', 'image/jpeg', 'files', 695627, 1944, 2592, 0, 20, 0, 0, ''),
(23, 'amazing goal', '<p>\r\n<object width="425" height="350" data="http://www.youtube.com/v/fWzxpEXk6G4" type="application/x-shockwave-flash">\r\n<param name="src" value="http://www.youtube.com/v/fWzxpEXk6G4" />\r\n</object>\r\n</p>', '2010-02-18 20:58:32', '2010-02-18 20:58:32', '2010-02-18 20:50:00', 1, '', 'Media', '10172009013.jpg', 'image/jpeg', 'files', 697021, 1944, 2592, 1, 0, 0, 0, ''),
(24, 'This is a testing news letter', 'This is a great testing newsletter !!! i love CakePHP and i will succeed using this framework for my future projects', '2010-02-20 01:20:28', '2010-02-20 01:20:28', '2010-02-20 01:19:00', 1, '', 'Newsletter', '', '', '', 0, 0, 0, 1, 0, 0, 0, ''),
(25, '', '<p>testing my name is comment !!</p>', '2010-02-20 13:22:56', '2010-02-20 13:22:56', '2010-02-20 13:22:00', 1, '', 'Comment', '', '', '', 0, 0, 0, 1, 13, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `id` int(11) NOT NULL auto_increment,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `post_id`, `tag_id`) VALUES
(15, 11, 8),
(16, 11, 9),
(17, 11, 10),
(27, 13, 13),
(28, 13, 14),
(29, 13, 15),
(30, 10, 6),
(31, 10, 7),
(32, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `post_count` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `album_count` int(11) NOT NULL,
  `media_count` int(11) NOT NULL,
  `link_count` int(11) NOT NULL,
  `newsletter_count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `post_count`, `comment_count`, `album_count`, `media_count`, `link_count`, `newsletter_count`) VALUES
(1, 'published', 3, 1, 1, 1, 0, 1),
(2, 'drafts', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(3, 'badia'),
(4, 'kafourn'),
(5, 'soccer'),
(6, 'barca'),
(7, 'great'),
(8, 'calm'),
(9, 'cool'),
(10, 'nice'),
(11, 'kafroun'),
(12, 'stauses'),
(13, 'is'),
(14, 'my'),
(15, 'name');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(100) default NULL,
  `password` varchar(50) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `subscribed` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`, `subscribed`) VALUES
(1, 'Badia Daamash', 'do3ado3a@hotmail.com', '2c0611190e949db86eed09563ca59093fd46b1d3', '2010-02-17 14:02:55', '2010-02-17 15:41:39', 1);
