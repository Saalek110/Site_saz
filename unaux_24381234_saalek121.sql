-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql111.byetcluster.com
-- Generation Time: Oct 27, 2024 at 06:31 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_24381234_saalek121`
--

-- --------------------------------------------------------

--
-- Table structure for table `MyGuests`
--

CREATE TABLE `MyGuests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `name_email`
--

CREATE TABLE `name_email` (
  `number` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `name_email`
--

INSERT INTO `name_email` (`number`, `name`, `email`) VALUES
(2, 'Saalek110', 'Saalek110@majidonline.com'),
(2, 'Amir', 'Amir email'),
(2, 'Amir2', 'Amir2 email'),
(2, 'Saman', 'Saman@');

-- --------------------------------------------------------

--
-- Table structure for table `s110_counters`
--

CREATE TABLE `s110_counters` (
  `number` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `count` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `s110_counters`
--

INSERT INTO `s110_counters` (`number`, `name`, `count`) VALUES
(1, 'index', 768),
(2, 'admin', 105),
(3, 'mng_msg', 264),
(4, 'msg_free', 21),
(5, 'msg_delete', 1),
(6, 'msg_wait', 8),
(7, 'mng_css', 66),
(8, 'edit_css', 71);

-- --------------------------------------------------------

--
-- Table structure for table `s110_my_setting`
--

CREATE TABLE `s110_my_setting` (
  `number` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `s110_my_setting`
--

INSERT INTO `s110_my_setting` (`number`, `name`, `value`) VALUES
(1, 'show_edit', 'show-edit-button'),
(2, 'soton3', 'under-soton-1'),
(3, 'approve', 'not-approved');

-- --------------------------------------------------------

--
-- Table structure for table `s110_nazarat`
--

CREATE TABLE `s110_nazarat` (
  `number` bigint(20) NOT NULL,
  `approve` varchar(20) NOT NULL,
  `poster` varchar(40) NOT NULL,
  `nazar` varchar(1200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `post_number` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `s110_nazarat`
--

INSERT INTO `s110_nazarat` (`number`, `approve`, `poster`, `nazar`, `time`, `post_number`) VALUES
(1, 'free', 'Esm', 'Test', '۱۴۰۲/۱۱/۱۰ سه شنبه۱۱:۴۹ بعد از ظهر', 1),
(2, 'free', 'admin', 'پیام نمونه ، گویا لوگین هستم', '۱۴۰۲/۱۱/۱۱ چهارشنبه۱۱:۱۹ قبل از ظهر', 2),
(22, 'free', 'admin', 'Salam', '۱۴۰۲/۱۱/۱۶ دوشنبه۳:۳۳ بعد از ظهر', 1),
(23, 'wait', 'admin', 'Test', '۱۴۰۲/۱۱/۱۷ سه شنبه۵:۱۲ بعد از ظهر', 9);

-- --------------------------------------------------------

--
-- Table structure for table `s110_posts`
--

CREATE TABLE `s110_posts` (
  `number` bigint(20) NOT NULL,
  `news` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `the_date` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `the_week` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `the_hour` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `s110_posts`
--

INSERT INTO `s110_posts` (`number`, `news`, `the_date`, `the_week`, `the_hour`) VALUES
(1, 'بسم الله الرحمن الرحیم \r\n[font20][bgcolor]#aa8877[color_m][color]#08900[color_m]در حال کار بر روی این قالب هستم ، به تدریج داره تکمیل میشه.[/color][/color][/font]', '', '', ''),
(2, 'من تعدادی جدول ساختم.\r\nدو جدول در بالا و یک جدول در میانه سایت.\r\nجدول میانه ۳ ستون دارد و در هر ستون خودش حاوی یک جدول است. \r\nستون میانه پست ها است.\r\nستون سمت راست لینک ها.\r\nو ستون سمت چپ ، فعلا خالی. \r\nیک جدول هم در پایین صفحه که لینک سایتم درونش است.', '', '', ''),
(3, 'اسمارتی کار کردم.اسمارتی برای جدا کردن کد از ظاهر است.', '', '', ''),
(4, 'یوزر admin و پسورد 1234\r\nبرای لوگین به حالت ادمین است.باید شما با این مشخصات لوگین کنید تا ابزارهای ادمین را ببینید. \r\nبه تدریج ابزارهای ادمین افزوده می شود.', '', '', ''),
(5, 'یک فرم کوچک پایین است ، اگر چک show edit را بزنید ، دکمه های ادیت ظاهر می شوند. و اگر چک را بردارید و دکمه فرم را بزنید ، دکمه ها ناپدید می شوند.\r\n\r\nاین فرم تنظیمات است. \r\nباید به عنوان admin لوگین کنید تا اون فرم را ببینید. \r\n\r\nیا در همون فرم می توانید ستون ۳ را زیر ستون ۱ ببرید.', '', '', ''),
(6, 'پست ۶ : قسمت پیام گذاشتن روی پست ها اضافه شد.\r\n اگر لوگین باشی ، اسم لوگین را اتوماتیک خودش وارد می کنه ... و اگر لوگین نباشی ، می توانید یک اسم خودتان وارد کنید.', '', '', ''),
(7, 'پست ۷ : فروم پشتیبانی از قالب ساخته شده آماده است... اونجا سایت داران می توانند صفحات و کد به هم بدهند. یعنی [red]جامعه سایت داران[/red] می تواند تشکیل شود. \r\n\r\n\r\n[Url]http://saalek110.is-great.net/forum/forum.php?number=58[Url_m]http://saalek110.is-great.net/forum/forum.php?number=58[/Url]\r\n\r\n.\r\n.\r\n\r\nببینید در خط بالا با دکمه لینک ادیتور ، لینک دادم.\r\n.\r\n. \r\nدر همین فروم ، افزونه ها ، منتشر می شود. یعنی یک کارایی جدید به سایت شما ، یا یک اصلاح.', '', '', ''),
(8, 'پست ۷ : ببینید من دارم الان از این سایت استفاده می کنم و با شما ارتباط برقرار می کنم. شما می توانید زیر هر پست پیام بزارید یا پست جدید بزنید.... [blue]سایت را امتحان کنید و نظرات و پیشنهادات خود را همین جا به شکل پست یا پیام بزارید.\r\n[/blue]\r\nکم کم تکمیل ترش هم میکنم ، و بعدا برای دانلود می زارم.', '', '', ''),
(9, 'Test 22', '', '', ''),
(10, 'Ttt', '', '', ''),
(11, 'Test', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s110_texts`
--

CREATE TABLE `s110_texts` (
  `number` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `my_text` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `s110_texts`
--

INSERT INTO `s110_texts` (`number`, `comment`, `my_text`) VALUES
(1, 'In the name of god', '---'),
(2, 'welcome', 'Ø®ÙˆØ´ Ø¢Ù…Ø¯ÛŒØ¯'),
(3, 'Start', 'Ø´Ø±ÙˆØ¹'),
(4, 'Create new statment', 'Ø¹Ø¨Ø§Ø±Øª Ø¬Ø¯ÛŒØ¯ Ø¨Ø³Ø§Ø²ÛŒØ¯'),
(5, 'New post', 'Ù¾Ø³Øª Ø¬Ø¯ÛŒØ¯'),
(6, 'Review', 'Ø¨Ø§Ø²Ø¯ÛŒØ¯'),
(7, 'Test', 'تست'),
(8, 'Dasti dar myadmin vared kardam', 'نوشته فارسی دستی در ادمین نوشتم'),
(9, 'Welcome', 'خوش آمدید'),
(10, 'Create new statment', 'عبارت جدید بسازید'),
(11, 'New post', 'پست جدید'),
(12, 'Review', 'بازدید'),
(13, 'login', 'لوگین'),
(14, 'Register', 'ثبت نام'),
(15, 'Login success', 'لوگین موفقیت آمیز بود'),
(16, 'Click to go first page', 'کلیک کنید تا به صفحه اول بروید'),
(17, 'logout', 'لوگات'),
(0, '', ''),
(18, 'did logout', 'لوگات شد، کلیک کنید تا به صفحه اول بروید'),
(19, '2forum', 'سایت دو فرومه'),
(21, 'In the name of God', 'بسم الله الرحمن الرحیم'),
(22, 'Loveyou web', 'لینک سایت دانلود بسته ها'),
(0, 'Hich', '-'),
(23, 'comment1', 'پیام خود را بنویسید:'),
(24, 'index_link', 'صفحه ایندکس در پوشه base'),
(25, '1payam', 'پیام شما ثبت شد ، لینک زیر را بزنید تا پیان خود را ببینید:'),
(26, '1payam', 'پیام شما ثبت شد ، لینک زیر را بزنید تا پیام خود را ببینید:'),
(27, 'Admin page', 'این صفحه ، صفحه ادمین است ، در حال تکمیل است.'),
(28, 'First page', 'صفحه اول'),
(29, 'Return to admin', 'برگشت به ادمین'),
(30, 'Nazar', 'نظر'),
(31, 'Add comment', 'پیام بگذارید'),
(31, 'Comments', 'پیام'),
(32, 'Write comment', 'پیام بگذارید'),
(33, 'Comment', 'پیام'),
(34, 'Msg management', 'مدیریت پیامها'),
(35, 'Make free', 'free شود'),
(36, 'Return to comments table', 'برگشت به جدول پیامها'),
(37, 'Do delete', 'delete شود'),
(38, 'Do wait', 'wait شود'),
(39, 'Css filss manage', 'مدیریت فایلهای css');

-- --------------------------------------------------------

--
-- Table structure for table `s110_users`
--

CREATE TABLE `s110_users` (
  `number` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `s110_users`
--

INSERT INTO `s110_users` (`number`, `username`, `password`) VALUES
(2, 'Ali', '202cb962ac59075b964b07152d234b70'),
(3, 'h', '202cb962ac59075b964b07152d234b70'),
(4, 'saalek110', '25d55ad283aa400af464c76d713c07ad'),
(9, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `number` int(11) NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`number`, `a1`, `a2`, `a3`) VALUES
(1, 'Aaa', 'Bbb', 'Ccc'),
(2, 'Aaa1', 'Bbb1', 'Ccc1'),
(3, 'A1', 'B1', 'C1'),
(4, 'A2', 'B2', 'C2'),
(5, 'A3', 'B3', 'C3'),
(6, 'A4', 'B4', 'C4'),
(7, 'A5', 'B5', 'C5'),
(8, 'A6', 'B6', 'C6'),
(9, 'A7', 'B7', 'C7'),
(10, 'A8', 'B8', 'C8'),
(11, 'A9', 'B9', 'C9'),
(12, 'A10', 'B10', 'C10'),
(13, 'Aaa', 'Bbb', 'Ccc'),
(14, 'Aaa1', 'Bbb1', 'Ccc1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s110_counters`
--
ALTER TABLE `s110_counters`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `s110_my_setting`
--
ALTER TABLE `s110_my_setting`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `s110_nazarat`
--
ALTER TABLE `s110_nazarat`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `s110_posts`
--
ALTER TABLE `s110_posts`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `s110_users`
--
ALTER TABLE `s110_users`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s110_counters`
--
ALTER TABLE `s110_counters`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `s110_my_setting`
--
ALTER TABLE `s110_my_setting`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s110_nazarat`
--
ALTER TABLE `s110_nazarat`
  MODIFY `number` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `s110_posts`
--
ALTER TABLE `s110_posts`
  MODIFY `number` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `s110_users`
--
ALTER TABLE `s110_users`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
