-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for career
CREATE DATABASE IF NOT EXISTS `career` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `career`;

-- Dumping structure for table career.add_counsellor
CREATE TABLE IF NOT EXISTS `add_counsellor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table career.add_counsellor: ~6 rows (approximately)
/*!40000 ALTER TABLE `add_counsellor` DISABLE KEYS */;
INSERT INTO `add_counsellor` (`id`, `cat_id`, `name`, `email`, `password`, `date_modifield`) VALUES
	(8, 2, 'Kemi Best', 'kemibest@gmail.com', 'kemzy', '2016-11-21 13:34:26'),
	(9, 9, 'Tobi Ige', 'tobiige@gmail.com', 'tobi', '2016-11-18 01:06:41'),
	(10, 7, 'Samir Areh', 'samir@gmail.com', 'samir', '2016-11-18 01:08:05'),
	(11, 6, 'Sky Boss', 'skyboss@gmail.com', 'skyboss', '2016-11-18 01:08:54'),
	(12, 5, 'Ibk Ajimoti', 'ibk_aji@gmail.com', 'ibk_aji', '2016-11-18 01:10:35'),
	(13, 1, 'Mrs Obasa', 'mrsobasa@gmail.com', 'rcv', '2016-11-26 20:50:08');
/*!40000 ALTER TABLE `add_counsellor` ENABLE KEYS */;

-- Dumping structure for table career.appointment
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `time` varchar(256) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table career.appointment: ~0 rows (approximately)
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
INSERT INTO `appointment` (`id`, `name`, `phone`, `email`, `message`, `date`, `time`, `date_modified`) VALUES
	(1, 'codedgift', '08096460341', 'codedgift@gmail.com', 'i want to facial makeup', '10/11/2016', '10:00', '2016-10-06 10:10:19');
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;

-- Dumping structure for table career.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text,
  `image` longtext,
  `description` longtext,
  `date_added` text,
  `article_from` varchar(250) DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table career.article: ~5 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `name`, `image`, `description`, `date_added`, `article_from`, `date_modified`) VALUES
	(8, 'Achieving Your Dreams and Goals', 'Achieving_Your_Dreams_and_Goals.jpg', '<p>Do you have dreams and goals? Sure you have, but what are doing to make them come true? Often, dreams and goals stay as daydreams, unless you do something turn them into reality.</p><p><strong>Achieving your dreams and goals depends on several factors:<br></strong></p><ol><li>You need to have a specific and clear goal.</li><li>You have to be sure that you really want to achieve your goal.</li><li>You need to create a clear mental image of your goal.</li><li>You need a strong desire.</li><li>You need to disregard doubts and thoughts about failure.</li><li>You have to show confidence and faith, and persevere, until you achieve your goal.</li></ol><p>How many people fulfill all the above-mentioned requirements? Just a \r\nfew! Most people do not know that there are laws governing success, \r\nwhich should be followed. It is so easy and simple to daydream, and then say, "Well it is just a \r\ndaydream. It will never come true". It is so easy to give up and lose \r\nfaith and motivation, when you facing obstacles.<strong>You can achieve your dreams and goals using your mental tools. </strong>Achieving your goals shouldn\'t be a tough ordeal. In fact, it can be fun\r\n and pleasure, if you go in the right way. It is not hard physical work \r\nthat brings success. <strong>Success does not require hard physical labor. In fact, you need to do mental work.</strong> <a href="http://www.successconsciousness.com/index_000008.htm">Visualization</a> and repeating <a href="http://www.successconsciousness.com/index_00000a.htm">affirmations</a>\r\n make up this mental work, and are important stepping stones to \r\nachieving success. When you visualize and affirm, you focus and channel \r\nyour energies toward your goal. Your mind is geared toward finding \r\nsolutions to bring your goal into manifestation. By thinking in a <a href="http://www.successconsciousness.com/index_000009.htm">positive</a>\r\n manner on your goal, and not letting any doubts enter your mind, your \r\nintuition starts working, you recognize opportunities, and you have \r\nenergy at your disposal to follow your goals and dreams. </p>', 'November-25-2016', 'Admin', '2016-11-25 16:26:07'),
	(9, 'Who Controls Your Mind?', 'Who_Controls_Your_Mind.jpg', '<p>Few people are aware of the thoughts that pass through their minds, since most thinking is done in an automatic manner. The mind is sometimes, like small child, who accepts, and takes for \r\ngranted, whatever it sees or hears, without judgment and without \r\nconsidering the consequences. If you let your mind behave in this \r\nmanner, giving it complete freedom to jump from one thought to another, \r\nyou lose your freedom. We are constantly flooded with thoughts, ideas and information coming \r\nthrough the five senses, other people, the newspapers and TV. These \r\nthoughts, ideas and information penetrate the mind, whether we are aware\r\n of this process or not. This flow of thoughts affects our behavior and reactions. It influences \r\nthe way we think, our preferences, likes and dislikes. Usually, we \r\nautomatically accept these thoughts, letting them shape our life. This \r\nactually means that we lose our mental freedom. Most people think and believe that their thoughts originate from them, \r\nbut have you ever stopped and considered whether your thoughts, desires,\r\n likes and dislikes are really yours? Did it occur to you that maybe \r\nthey came from the outside, from other people, and you have \r\nunconsciously accepted them as your own? <strong>If you do not filter the thoughts that enter your mind you stop to be a free person</strong>, and allow every thought to control your life. You may object, and say that the thoughts that pass through your mind \r\nare yours, but are they? Have you deliberately and attentively created \r\nevery thought that entered your mind? <br></p><ol><li>Why let outside influences control your mind and life? </li><li>Why let other people\'s thoughts control your life and mind? </li><li>Do you want to make your mind free or do you prefer to enslave it to other people\'s opinions and thoughts?</li></ol><p>If you leave your mind open to every thought that passes by, you put our\r\n life in other people\'s hands, and without realizing it, you accept \r\ntheir thoughts and act in accordance with them. Every person is differently affected by external thoughts. Certain \r\nthoughts and ideas we ignore, and others spur us to immediate action. \r\nUsually, thoughts concerning subjects we love have more power on us than\r\n other thoughts, but even thoughts and ideas that we don\'t care about, \r\nif we are frequently exposed to them, eventually sink into the \r\nsubconscious mind and affect us. Everyone has desires, ambitions and dreams that he or she may foster \r\nfrom childhood. However, it is possible that they are the thoughts of \r\nparents, teachers and friends, which have lodged into their mind, and \r\nwere carried throughout their lives. <strong>Are these thoughts necessary? Do we need all this excessive baggage?</strong> In order to reduce the power of outside influences and thoughts on your \r\nlife, you need to be aware of the thoughts and desires that enter your \r\nmind, and ask yourself, whether you really like them, and if you are \r\nwilling to accept them into your life.&nbsp; You do not have to accept each and every thought that enters your mind.&nbsp; Find out whether it is your own thought, or someone else\'s thought. \r\nAlso, decide whether the thought is useful for you, and if it is for \r\nyour own good to follow. This will lead to more control over your \r\nthinking process. It might not be so easy do at first, because your mind will probably \r\nrevolt against this control. However, if you want to be the master of \r\nyour mind and life, you should not let other people\'s thoughts rule your\r\n life, unless you consciously choose so.</p>', 'November-25-2016', 'Admin', '2016-11-25 16:44:31'),
	(10, 'What Are You Waiting For?', 'What_Are_You_Waiting_For.jpg', '<p>What are you waiting for? Do you want to make changes in your life? Do you constantly tell yourself that if things were different, you could do this and that? Nothing is going change, unless you initiate the change. Blaming others and blaming circumstances would not make your situation better. Daydreaming about a different life style, about a vacation, about a new \r\ncar, or about a new house is not enough. Wishing you were wealthy, \r\nhealthy or in love, and at the same time, at the back of your mind, not \r\nbelieving you will ever achieve any of these things, would only make the\r\n situation worse.&nbsp; What you feel and believe deep inside you is more powerful than all your\r\n resolutions, wishes and daydreaming. You should work on convincing \r\nyourself that these things are possible. When you are convinced you act \r\ndifferently. <br></p><p><strong>Start Today Not in The Future</strong><br>If you want to make changes in your life, they have to start right now, \r\nnot in some undefined future. You are cheating and frustrating yourself \r\nwhen you procrastinate, when you make empty resolutions, and when you \r\nbelieve that if circumstances were different you would have been able to\r\n do this and that. Now, this very moment is the time to start any change, the smallest one \r\nor the biggest one. If you say, "I\'ll start tomorrow", you are cheating \r\nyourself, because tomorrow you will again say the same thing. There will\r\n always be another tomorrow, but no change in your life. Change must start right now, and only you, are responsible for this \r\nchange. You must devote time and effort, and make plans, and things will\r\n start changing.&nbsp; There is always a subconscious inner resistance to making changes, even \r\nif one does not like his or her life. People feel more comfortable with a\r\n familiar situation, even if they don\'t like it. Strange, isn\'t it?&nbsp; So, what are you waiting for? Are you going to do something about your \r\nlife, or just read the article and go on with your life? If you do this,\r\n tomorrow will be more or less like today, and the day after too, and so\r\n on and on. <br></p>', 'November-25-2016', 'Admin', '2016-11-25 17:35:19'),
	(11, 'Dare, Don\'t Be Afraid to Make Mistakes', 'Dare,_Dont_Be_Afraid_to_Make_Mistakes.jpg', '<p>Don\'t worry if you make mistakes. Only people who dare, try, and persevere, complete tasks and achieve success. It is so comfortable to be passive, make no effort, and stick to the \r\nfamiliar. However, by doing so, we allow external influences shape your \r\nlife. Daring, trying new things, and making changes, seem intimidating. It is \r\nmore comfortable to suffer, complain, and stay in the same place. <br></p><p><strong>Why Daring is intimidating?</strong></p><ol><li>You afraid you might make mistakes.</li><li>You are afraid to look ridiculous.</li><li>You want to avoid criticism.</li><li>There is a lack of self-esteem.</li><li>There is a lack of self-confidence.</li></ol><p>If you wish to let the above list intimidate you, and therefore, be \r\nunhappy, complain, and stay where you are, this is your choice. However,\r\n if you want to live a greater life, you should consider taking a step \r\nbeyond your fears and start daring.&nbsp; <strong>It is not so difficult to do.</strong> It is a matter of attitude. It is a matter of changing your mindset. As the saying goes, \'it is all in the mind\'. After the first step, it would seem less intimating to dare, even if you make mistakes and bad choices.&nbsp; All people who achieved success, any kind of success, dared to try. They\r\n did mistakes, and they failed over and again, but they did not give up.&nbsp; If you make mistakes, it\'s all right. Everyone make mistakes. Learn from\r\n them and go on. As said earlier, all successful people made mistakes, \r\nbut they didn\'t let their mistakes discourage them or deter them. It\'s quite simple, though not so easy to dare, and be afraid to make \r\nmistakes. This has nothing to do with finance, physical strength or \r\neducation. It is all a state of mind. It is something inside you. You need to find the strength and courage within you. You should learn \r\nto be courageous and daring, and do things, without the need to be \r\npushed and motivated from the outside. You have this strength within you, you only need to be conscious of it, and strengthen it. <a href="http://www.successconsciousness.com/index_00000a.htm">Affirmations</a>, <a href="http://www.successconsciousness.com/index_000008.htm">visualization</a>, and <a href="http://www.successconsciousness.com/books/willpower-and-self-discipline.html">inner strength</a> development are the tools to do this. Learn to be a doer, by taking the initiative and acting now, without \r\nprocrastinating or hesitation.  Start with simple little things to gain \r\nexperience and confidence. <br></p>', 'November-25-2016', 'Admin', '2016-11-25 17:41:37'),
	(12, 'Lack of Motivation and Enthusiasm', 'Lack_of_Motivation_and_Enthusiasm.jpg', '<p>Motivation and enthusiasm manifest as desire and interest, and as a \r\ndriving force that pushes you to take action and pursue goals. However, it often happens that you have the desire and interest, but you\r\n lack the motivation. This is a frustrating situation, since you want to\r\n do a certain thing, but cannot get enough inner strength and motivation\r\n to act.&nbsp; There are many reasons for the lack of motivation. It could be due to a \r\nweak desire, laziness or shyness, and it could be due lack of self \r\nesteem and self confidence. In some cases, the reason is a physical or \r\nmental problem, which requires professional help.&nbsp; You cannot blame other people if you lack the enthusiasm to act follow goals. You need to find a way to <a href="http://www.successconsciousness.com/strengthen_motivation.htm">motivate</a> yourself. Lack of motivation and enthusiasm can show up everywhere, at home, at \r\nwork, in relationships, in pursuing goals and in everything else. This \r\noften, creates indifference, unhappiness and dissatisfaction. <strong><br></strong></p><p><strong>Reasons for Lack of Motivation and Enthusiasm:</strong> <br></p><ol><li>Lack of faith in one\'s abilities.</li><li>Fear of failure, due to failure in the past.</li><li>Fear of what others might say.</li><li>The habit of procrastination.</li><li>Laziness.</li><li>The feeling or belief that there are other more important things to do.</li><li>Being too stressed or nervous.</li><li>Absence of enough stimuli or incentives.</li></ol><p>The above mentioned reasons stifle motivation and enthusiasm, and are \r\nonly excuses for not acting. However, you learn to overcome and \r\ndisregard them, by becoming aware of them, acknowledging them, and \r\nunderstanding that you can change the programming of your mind. Sometimes, there are short bursts of motivation or enthusiasm. You start\r\n acting enthusiastically, but lose interest and motivation after a \r\nwhile, because you find it hard to sustain motivation or enthusiasm.&nbsp; <strong>If you wish to improve your life, you need to awaken motivation and \r\nenthusiasm. Tell yourself, over and again, how much you lose by their \r\nabsence, and how much you gain by having them.</strong> You need incentive and drive for following your big dreams, and also for\r\n the performance of minor daily tasks and chores. Otherwise, laziness, \r\nabsence of energy and procrastination will set in.</p>', 'November-25-2016', 'Admin', '2016-11-25 17:46:20');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table career.career_category
CREATE TABLE IF NOT EXISTS `career_category` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `category_name` longtext NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table career.career_category: ~9 rows (approximately)
/*!40000 ALTER TABLE `career_category` DISABLE KEYS */;
INSERT INTO `career_category` (`id`, `category_name`, `date_modifield`) VALUES
	(1, 'General', '2016-10-26 11:58:23'),
	(2, 'Science', '2016-10-26 11:59:09'),
	(3, 'Skills Acquisition', '2016-10-26 12:00:03'),
	(4, 'Commerce', '2016-10-26 12:00:35'),
	(5, 'Entertainment', '2016-10-26 12:00:47'),
	(6, 'ICT ( Information & Communication Technology)', '2016-10-26 12:01:37'),
	(7, 'Medical', '2016-10-26 12:01:56'),
	(9, 'Social', '2016-10-26 12:16:47'),
	(10, 'house', '2016-11-24 20:37:43');
/*!40000 ALTER TABLE `career_category` ENABLE KEYS */;

-- Dumping structure for table career.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_email` varchar(150) DEFAULT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `google` varchar(150) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table career.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contact_email`, `facebook`, `twitter`, `linkedin`, `phone`, `address`, `google`, `skype`, `id`) VALUES
	('contact@codedgifttech.com', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', '08185538069', 'Block 54\r\nlekki phase 1, Lagos ', 'www.google.com', 'www.skype.com', 1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table career.counsellor_inbox
CREATE TABLE IF NOT EXISTS `counsellor_inbox` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table career.counsellor_inbox: ~4 rows (approximately)
/*!40000 ALTER TABLE `counsellor_inbox` DISABLE KEYS */;
INSERT INTO `counsellor_inbox` (`id`, `subject`, `category`, `message`, `sender_email`, `full_name`, `date_modifield`) VALUES
	(1, 'kemi', 'Science', 'daddd', 'info@careerguidance.com', 'Ayodeji', '2016-10-27 13:17:18'),
	(2, 'xcvf', 'Entertainment', 'dsd', 'info@careerguidance.com', 'Ayodeji', '2016-10-27 13:23:26'),
	(3, 'ddfdf', 'Skills Acquisition', 'dfdfdfd', 'info@careerguidance.com', 'Ayodeji Adesoji', '2016-10-27 13:24:15'),
	(4, 'just the best', 'Entertainment', 'just the best in what you do.', 'kemibest@gmail.com', 'Kemi Best', '2016-10-27 13:33:16');
/*!40000 ALTER TABLE `counsellor_inbox` ENABLE KEYS */;

-- Dumping structure for table career.details
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `passwd` varchar(150) DEFAULT NULL,
  `business_name` varchar(50) DEFAULT NULL,
  `header_image` varchar(50) DEFAULT NULL,
  `template` varchar(50) DEFAULT 'template1',
  `install` int(11) DEFAULT '0',
  `logo` varchar(150) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table career.details: ~0 rows (approximately)
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` (`id`, `email`, `fullname`, `passwd`, `business_name`, `header_image`, `template`, `install`, `logo`, `color`) VALUES
	(1, 'codedgift@gmail.com', 'Amah Gift', 'admin', 'Online Career Guidance', 'bg.jpg', 'xyzee', 1, 'logo.png', '');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;

-- Dumping structure for table career.event
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `event_name` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table career.event: ~8 rows (approximately)
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` (`id`, `cat_id`, `img`, `event_name`, `date`) VALUES
	(1, 1, '1.jpg', 'Our Laboratory', '2016-05-18 15:11:06'),
	(2, 1, '2.jpg', 'Our Classes', '2016-05-18 15:11:06'),
	(3, 2, '3.jpg', 'Green Pasture', '2016-05-18 15:11:07'),
	(4, 2, '4.jpg', 'Computer Room', '2016-05-18 15:11:07'),
	(5, 3, '5.jpg', 'Music Room', '2016-05-18 15:11:07'),
	(6, 3, '6.jpg', 'Art Room', '2016-05-18 15:11:07'),
	(7, 4, '7.jpg', 'At The Beach', '2016-05-18 15:11:07'),
	(8, 4, '8.jpg', '1000 Seater Hall', '2016-05-18 15:11:07');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

-- Dumping structure for table career.event_cat
CREATE TABLE IF NOT EXISTS `event_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table career.event_cat: ~4 rows (approximately)
/*!40000 ALTER TABLE `event_cat` DISABLE KEYS */;
INSERT INTO `event_cat` (`id`, `category`, `date`) VALUES
	(1, 'Class', '2016-05-18 14:59:45'),
	(2, 'Laboratory', '2016-05-18 14:59:45'),
	(3, 'Pasture', '2016-05-18 15:01:03'),
	(4, 'Building', '2016-05-18 15:01:03');
/*!40000 ALTER TABLE `event_cat` ENABLE KEYS */;

-- Dumping structure for table career.inbox
CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_id` int(20) NOT NULL,
  `subject` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_email` varchar(250) NOT NULL,
  `identity` varchar(250) NOT NULL,
  `messages` longtext NOT NULL,
  `time` longtext NOT NULL,
  `time2` longtext NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table career.inbox: ~4 rows (approximately)
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` (`id`, `cat_id`, `subject`, `category`, `student_name`, `student_email`, `identity`, `messages`, `time`, `time2`, `date_modifield`) VALUES
	(34, 1, 'i want to know more about IT', 'General', 'Odushola Aderonke', 'ronnycrown@gmail.com', 'Me~!~Me~!~Counsellor~!~Me~!~Me~!~Counsellor~!~Counsellor~!~Counsellor~!~Me', 'i want to know more about IT~!~Ok i have check it~!~happy to be your counsellor~!~What a day,...~!~Good evening ma~!~you are welcome my dear~!~ok ok ~!~hmmmm~!~kjjkjnkmkmn', 'Fri-11-2016 at 12:33 AM~!~Fri-11-2016 at 12:33 AM~!~Fri-11-2016 at 01:13 AM~!~Mon-11-2016 at 01:16 AM~!~Thu-11-2016 at 08:18 PM~!~Thu-11-2016 at 08:19 PM~!~Thu-11-2016 at 08:20 PM~!~Thu-11-2016 at 08:21 PM~!~Mon-11-2016 at 02:34 PM', 'Mon-11-2016 at 02:34 PM', '2016-11-28 14:34:14'),
	(35, 2, 'Application for Web Developer-Design~!~coming to office', 'Science', 'Odushola Aderonke', 'ronnycrown@gmail.com', 'Me~!~Counsellor~!~Me~!~Counsellor~!~Counsellor~!~Me~!~Me~!~Me~!~Counsellor~!~Counsellor', 'Application for Web Developer-Design~!~Passion is the key~!~Ok sir, Thanks for the advice~!~Thank You Jesus~!~checking on you~!~Thanks sir~!~i have one more issue sir~!~welcome to our office~!~ok that is noted~!~ggfbfbf', 'Fri-11-2016 at 12:36 AM~!~Fri-11-2016 at 12:43 AM~!~Fri-11-2016 at 12:44 AM~!~Mon-11-2016 at 01:21 PM~!~Wed-11-2016 at 01:11 AM~!~Wed-11-2016 at 01:20 AM~!~Wed-11-2016 at 01:25 AM~!~Thu-11-2016 at 12:23 PM~!~Thu-11-2016 at 12:24 PM~!~Sat-11-2016 at 08:34 PM', 'Sat-11-2016 at 08:34 PM', '2016-11-26 20:34:00'),
	(36, 2, 'welcome', 'Science', 'Ibukun Ajimoti', 'ibk@gmail.com', 'Me~!~Me~!~Me~!~Counsellor~!~Counsellor~!~Counsellor~!~Me', 'welcome to hostnownow~!~am so happy to here~!~we are happy to have you~!~how may i help you~!~i will  attend to you soon~!~Thanks for your time~!~welcome', 'Fri-11-2016 at 03:36 PM~!~Fri-11-2016 at 03:37 PM~!~Fri-11-2016 at 03:39 PM~!~Fri-11-2016 at 03:39 PM~!~Fri-11-2016 at 03:41 PM~!~Fri-11-2016 at 03:43 PM~!~Sat-05-2017 at 01:13 AM', 'Sat-05-2017 at 01:13 AM', '2017-05-13 02:13:48'),
	(37, 1, 'i have an issue', 'General', 'victoria adeniyi', 'vicky@gmail.com', 'Me~!~Counsellor', 'i want to know more~!~ok let me hear what you want to say', 'Sat-11-2016 at 08:43 PM~!~Sat-11-2016 at 08:45 PM', 'Sat-11-2016 at 08:45 PM', '2016-11-26 20:45:07');
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;

-- Dumping structure for table career.makeup
CREATE TABLE IF NOT EXISTS `makeup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longtext NOT NULL,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table career.makeup: ~5 rows (approximately)
/*!40000 ALTER TABLE `makeup` DISABLE KEYS */;
INSERT INTO `makeup` (`id`, `image`, `name`, `description`, `date_modified`) VALUES
	(1, 'Cosmetics.jpg', 'Cosmetics', '<p>we do Facials, Eyebrow &amp; Eyelashes, Microdermabrasion, Acne Treatments, Anti-Aging</p>', '2016-09-27 22:01:00'),
	(2, 'Hair_Dressing.jpg', 'Hair Dressing', '<p>We Wash, Cut &amp; Finish, Blow Dries, Hair Colouring &amp; Highlights, Evening Hairdressing</p>', '2016-09-27 22:09:08'),
	(3, 'Body_Treatment.jpg', 'Body Treatment', '<p>We do Body Wraps, Body Exfoliation Treatments, Cellulite Treatments, Lipo Laser, Depilation</p>', '2016-09-27 22:10:22'),
	(4, 'Massages.jpg', 'Massages', '<p>We Do Exotic Massages, Swedish Massage, Hot Stone Massage, Aromatherapy Massage</p>', '2016-09-27 22:11:18'),
	(5, 'Nails.jpg', 'Nails', '<p>We do Nail Art, Paraffin Wax Treatment, Shellac Manicure, Gel Nails, French Manicure</p>', '2016-09-27 22:12:14');
/*!40000 ALTER TABLE `makeup` ENABLE KEYS */;

-- Dumping structure for table career.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_email` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table career.messages: ~17 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `sender_email`, `sender_name`, `phone`, `subject`, `message`, `send_date`, `read`) VALUES
	(1, 'codedgift@gmail.com', 'Codedgift', '', 'What a Day', 'You are the reason for this day O Lord', '2016-05-23 16:04:23', '0'),
	(2, 'codedgift@gmail.com', 'Codedgift', '', 'What a Day', 'You are the reason for this day O Lord', '2016-05-23 16:05:49', '0'),
	(3, 'codedgift@gmail.com', 'weweed', '', 'fddd', 'ddds', '2016-05-25 16:11:05', '0'),
	(4, 'codedgift@gmail.com', 'lanre', '', 'yanmife', 'God please bring daddy igwe back home safely', '2016-05-30 09:57:51', '0'),
	(5, 'codedgift@gmail.com', 'lanre', '', 'yanmife', 'God please bring daddy igwe back home safely', '2016-05-30 10:00:53', '0'),
	(6, 'kemi@gmail.com', 'kemi', '', 'bluetooth tinzs', 'to day bluetooth tinzs is fast', '2016-07-15 12:08:02', '0'),
	(7, 'kemi@gmail.com', 'kemi', '', 'bluetooth tinzs', 'to day bluetooth tinzs is fast', '2016-07-15 12:09:40', '0'),
	(8, 'comfort@gmail.com', 'ddd', '08096460341', '', '', '2016-09-28 14:44:44', '0'),
	(9, 'comfort@gmail.com', 'dddsdds', '4545454545', 'Mapoly HND Past Question From Codedgift', '', '2016-09-28 14:47:34', '0'),
	(10, 'comfort@gmail.com', 'sddddd', 'dddsad', 'ddsd', 'dsd', '2016-09-28 14:49:16', '0'),
	(11, 'comfort@gmail.com', 'dsfdfsf', '', 'czzczxz', 'czcx', '2016-09-28 14:55:02', '0'),
	(12, 'comfort@gmail.com', 'sddddd', '332423432432', 'dds', 'dsd', '2016-09-28 15:12:05', '0'),
	(13, 'comfort@gmail.com', 'sddddd', '4545454545', 'dsds', 'ddss', '2016-09-28 15:12:46', '0'),
	(14, 'fdsfdsf@ddf.fgdfd', 'ddsfd', '43243434', 'cdxcxc', '', '2016-11-25 18:42:46', '0'),
	(15, 'dadsdas@dfdf.gfhng', 'gvfdfd', '54343243', 'cdcds', 'dsscscxcxcx', '2016-11-25 18:43:51', '0'),
	(16, 'sddcds@dfdfd.tgdfg', 'vdsfdsf', '43434', 'fdfdf', 'dfdsfdsfdsf', '2016-11-25 18:47:36', '0'),
	(17, 'fggd@dffd.com', 'tgrgfgdf', '34343454545', 'ghggfvbcv', 'vccvvcv', '2016-11-26 20:38:14', '0');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table career.others
CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vision` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `about_img` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table career.others: ~0 rows (approximately)
/*!40000 ALTER TABLE `others` DISABLE KEYS */;
INSERT INTO `others` (`id`, `vision`, `mission`, `about_img`, `date`) VALUES
	(1, ' We are a unique school. Our students will be exposed to rigorous, national and international standard curriculum with emphasis in the sciences. We will ensure that they are at the forefront in bot h national and international assessment.', 'Our GATE program will provide individualized instruction for gifted students in the core curriculum areas. I am certain that in future you will realize that sending your child to Berkley is the best investment you ever made.', 'about.jpg', '2016-05-19 15:35:34');
/*!40000 ALTER TABLE `others` ENABLE KEYS */;

-- Dumping structure for table career.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_brief` mediumtext NOT NULL,
  `page_content` longtext NOT NULL,
  `page_image_loc` varchar(50) NOT NULL,
  `web_slogan` varchar(300) NOT NULL,
  `welcome_note` longtext NOT NULL,
  `welcome_img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table career.pages: ~20 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `page_name`, `page_title`, `page_brief`, `page_content`, `page_image_loc`, `web_slogan`, `welcome_note`, `welcome_img`) VALUES
	(1, 'home', 'Home', 'Welcome to Homepage', 'Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. ', '', 'Towards Great Creativity', 'Leo Internation School purpose is to provide a Christian perspective in the context of education, whilst encouraging students towards a genuine, personal relationship with Jesus Christ. The school seeks to train individuals to become active, vital parts of their communities, and to encourage an appreciation of their place in and obligation to the world around them. We at Hillcrest are committed to developing complete and mature persons, accountable to God and responsible for their own actions, in keeping with our tradition of high academic and spiritual standards. ', 'welcome.jpg'),
	(2, 'about', 'About Beauty Spot', 'little information about the our company', 'Our Laboratories with our highly trained professional staff and modern equipment have the capability and authority to analyze quite a good number of consumer and health-related products such as: Water, Food, Drugs, Cosmetics, Medical devices, Chemicals, Chemically and biologically-based consumer products etc and issue Certificate regarding their composition, quality, safety and efficacy. Our Technical Staff list for Analytical .', '', '', '', ''),
	(3, 'service', 'My Services', 'This are what we do', 'our services content', '', '', '', ''),
	(4, 'contact', 'Contact Us', 'contact us because we care', 'contact brief', '', '', '', ''),
	(5, 'gallery', 'My Works', 'Here is what am proud of, My Works', 'portfolio content', '', '', '', ''),
	(6, 'project', 'Project', 'Project  brief', 'project  content', '', '', '', ''),
	(7, 'appointment', 'Book An Appointment', 'Book an appointment', '', '', '', '', ''),
	(8, 'career', 'Career Articles / Advice', 'Build Your Career', '', '', '', '', ''),
	(9, 'job', 'Jobs', 'Your Dream Job', '', '', '', '', ''),
	(11, 'profile', 'Dashboard', '', '', '', '', '', ''),
	(12, 'edit', 'Edit Profile', '', '', '', '', '', ''),
	(13, 'inbox', 'Inbox', '', '', '', '', '', ''),
	(14, 'article', 'Career Articles', '', '', '', '', '', ''),
	(15, 'my_career', 'My Career', '', '', '', '', '', ''),
	(16, 'dashboard', 'My Dashboard', '', '', '', '', '', ''),
	(17, 'password', 'Change Password', '', '', '', '', '', ''),
	(18, 'logout', 'Logout', '', '', '', '', '', ''),
	(19, 'register', 'Registration Page', '', '', '', '', '', ''),
	(20, 'con_dashboard', 'Counsellor', '', '', '', '', '', ''),
	(21, 'conversation', 'Conversation', '', '', '', '', '', '');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table career.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `portfolio_name` varchar(150) NOT NULL,
  `portfolio_img` varchar(150) NOT NULL,
  `portfolio_link` varchar(200) NOT NULL,
  `portfolio_brief` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table career.portfolio: ~8 rows (approximately)
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` (`id`, `cat_id`, `portfolio_name`, `portfolio_img`, `portfolio_link`, `portfolio_brief`) VALUES
	(2, 1, 'Wax Treatment', '2.jpg', '', 'Attractive Nails'),
	(3, 2, 'Cellulite Treatment', '3.jpg', '', 'We care about your skin'),
	(4, 2, 'Lipo Laser', '4.jpg', '', 'We are here to make you look good'),
	(5, 3, 'Hair Wash', '5.jpg', '', 'Making You look like you is our priority'),
	(6, 3, 'Hair Colouring', '6.jpg', '', 'Changing your hair color'),
	(7, 4, 'Facials', '7.jpg', '', 'You face can get better'),
	(8, 4, 'Ance Treatment', '8.jpg', '', 'attractive face'),
	(9, 1, 'Nails', 'Nails.jpg', '0', 'just nails fixing <br>');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table career.portfolio_category
CREATE TABLE IF NOT EXISTS `portfolio_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table career.portfolio_category: ~4 rows (approximately)
/*!40000 ALTER TABLE `portfolio_category` DISABLE KEYS */;
INSERT INTO `portfolio_category` (`id`, `category_name`) VALUES
	(1, 'Nails'),
	(2, 'Body Treatment'),
	(3, 'Hair Dressing'),
	(4, 'Cosmetics');
/*!40000 ALTER TABLE `portfolio_category` ENABLE KEYS */;

-- Dumping structure for table career.sch
CREATE TABLE IF NOT EXISTS `sch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_slogan` longtext NOT NULL,
  `welcome_msg` longtext NOT NULL,
  `welcome_img` varchar(300) NOT NULL,
  `sch_vision` longtext NOT NULL,
  `sch_mission` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table career.sch: ~0 rows (approximately)
/*!40000 ALTER TABLE `sch` DISABLE KEYS */;
INSERT INTO `sch` (`id`, `sch_slogan`, `welcome_msg`, `welcome_img`, `sch_vision`, `sch_mission`, `date`) VALUES
	(1, 'Towards Great Creativity', 'Leo Internation School purpose is to provide a Christian perspective in the context of education, whilst encouraging students towards a genuine, personal relationship with Jesus Christ. The school seeks to train individuals to become active, vital parts of their communities, and to encourage an appreciation of their place in and obligation to the world around them. We at Hillcrest are committed to developing complete and mature persons, accountable to God and responsible for their own actions, in keeping with our tradition of high academic and spiritual standards. ', 'welcome.jpg', 'We are a unique school. Our students will be exposed to rigorous, national and international standard curriculum with emphasis in the sciences. We will ensure that they are at the forefront in bot h national and international assessment.', 'Our GATE program will provide individualized instruction for gifted students in the core curriculum areas. I am certain that in future you will realize that sending your child to Berkley is the best investment you ever made.', '2016-05-18 13:28:46');
/*!40000 ALTER TABLE `sch` ENABLE KEYS */;

-- Dumping structure for table career.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(150) NOT NULL,
  `service_description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table career.services: ~5 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `service_name`, `service_description`) VALUES
	(1, 'Web Design', 'Your Company Registration Certificate and Certified True Copies of other Registration Documents are immediately sent to you via Registered Mail once Certificate is obtained from the Corporate Affairs Commission. '),
	(2, 'Taxi Hire', 'If your Company Name is available (to fill New Company Name Search Form if denied), we will send you the necessary Forms for execution via a two-way Pre-Paid Registered Mail.'),
	(3, 'Food Dishing', 'This package is meant for Job Seekers, Employees, Corp Members, I.T Students. It gives you an edge in getting the Job of your dream.'),
	(4, 'Poultry', 'Our .Me package gives you the opportunity to save your files, projects, portfolio, etc on your own cloud space'),
	(9, 'Washing Service', 'Your Company Registration Certificate and Certified True Copies of other Registration Documents are immediately sent to you via Registered Mail once Certificate is obtained from the Corporate Affairs Commission.');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table career.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longtext NOT NULL,
  `first_slogan` longtext NOT NULL,
  `second_slogan` longtext NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table career.slider: ~2 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id`, `image`, `first_slogan`, `second_slogan`, `date_modified`) VALUES
	(4, 'Welcome_To_Beauty_Spot.jpg', 'Welcome To Beauty Spot', 'We are here to serve you', '2016-10-05 12:56:57'),
	(6, 'We_lauch_Eshop.jpg', 'We lauch Eshop', ' we are going online', '2016-10-05 13:00:04');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Dumping structure for table career.team
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table career.team: ~4 rows (approximately)
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` (`id`, `img`, `staff_name`, `position`, `date`) VALUES
	(1, 'team1.jpg', 'Sky Boss', 'CEO', '2016-05-23 12:44:40'),
	(2, 'team2.jpg', 'Emmyflex', 'Director', '2016-05-23 12:44:40'),
	(3, 'team3.jpg', 'Kemi Best', 'HOD', '2016-05-23 12:44:40'),
	(4, 'team4.jpg', 'Tobi', 'Finance', '2016-05-23 12:44:41');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;

-- Dumping structure for table career.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` longtext,
  `identity` varchar(50) DEFAULT NULL,
  `last_name` longtext,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` longtext,
  `about_me` longtext,
  `date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table career.user: ~6 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `first_name`, `identity`, `last_name`, `username`, `password`, `email`, `phone`, `gender`, `state`, `address`, `about_me`, `date_modified`) VALUES
	(1, 'Ayodeji', 'S', 'Adesoji', 'codedgift', 'user', 'info@careerguidance.com', '0818838069', 'Male', 'Lagos', '234 Uptown new City Tower, Victoria Island, Lagos.', 'A confident, enthusiastic and hard working physics teacher who is able to teach students across the secondary age range, whilst at the same time encourage them to develop their skills, knowledge and confidence. Possessing extensive knowledge of contemporary teaching methods and having immense subject knowledge, enthusiasm and charisma, as well as a genuine interest in educating others. ', '2016-11-17 20:24:12'),
	(2, 'Kemi', 'S', 'Best', 'kemi', 'best', 'kemibest@gmail.com', '0908765432', 'Female', 'Lagos', '234 Uptown new City Tower, Lagos Mainland.', 'A confident, enthusiastic and hard working physics teacher who is able to teach students across the secondary age range, whilst at the same time encourage them to develop their skills, knowledge and confidence. Possessing extensive knowledge of contemporary teaching methods and having immense subject knowledge, enthusiasm and charisma, as well as a genuine interest in educating others. ', '2016-11-17 20:24:10'),
	(3, 'Odushola', 'S', 'Aderonke', 'ronnycrown', 'ronny', 'ronnycrown@gmail.com', '08093575830', 'Select', 'Ogun', 'okeshaju lagos', 'i just like been me', '2016-11-25 15:58:39'),
	(4, 'Ibukun', 'S', 'Ajimoti', 'ibk', 'ibk', 'ibk@gmail.com', '09089786542', 'Select', 'Osun', 'Aboru iyana ipaja Lagos', 'I love being myself. i like people obeying my policy', '2016-11-25 16:11:17'),
	(5, 'mariam', 'S', 'lawal', 'alhaja', 'mariam', 'mariam@gmail.com', '09089786753', 'Female', 'Ekiti', 'Egbeda Lagos', 'i love coding', '2016-11-17 20:23:45'),
	(6, 'victoria', 'S', 'adeniyi', 'vicky', 'vicky', 'vicky@gmail.com', '08348934833', 'Female', 'Anambra', 'Aboru iyana ipaja Lagos', 'i am victoria', '2016-11-26 20:47:27');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
