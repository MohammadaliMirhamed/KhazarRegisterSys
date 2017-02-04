-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 05:38 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `USERNAME` text,
  `PASSWORD` text,
  `id` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`, `id`) VALUES
('admin', 'Ntm3GLC14ch/eQNUBky6/uJ/BWSErachZN7v/cztDi4=', '1');

-- --------------------------------------------------------

--
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `fathername` text NOT NULL,
  `tdata` text NOT NULL,
  `mahalt` text NOT NULL,
  `shname` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `mobile` text NOT NULL,
  `postcode` text NOT NULL,
  `hadfyou` text NOT NULL,
  `stutpayment` text NOT NULL,
  `pic` text NOT NULL,
  `pass` text NOT NULL,
  `codetra` text NOT NULL,
  `codemeli` text NOT NULL,
  `crite` text NOT NULL,
  `email` text NOT NULL,
  `mark` text NOT NULL,
  `txtticket` text NOT NULL,
  `newticket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f2`
--

CREATE TABLE `f2` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `fathername` text NOT NULL,
  `tdata` text NOT NULL,
  `mahalt` text NOT NULL,
  `shname` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `mobile` text NOT NULL,
  `postcode` text NOT NULL,
  `hadfyou` text NOT NULL,
  `stutpayment` text NOT NULL,
  `pic` text NOT NULL,
  `pass` text NOT NULL,
  `codetra` text NOT NULL,
  `codemeli` text NOT NULL,
  `crite` text NOT NULL,
  `email` text NOT NULL,
  `mark` text NOT NULL,
  `txtticket` text NOT NULL,
  `newticket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f3`
--

CREATE TABLE `f3` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `fathername` text NOT NULL,
  `tdata` text NOT NULL,
  `mahalt` text NOT NULL,
  `shname` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `mobile` text NOT NULL,
  `postcode` text NOT NULL,
  `hadfyou` text NOT NULL,
  `stutpayment` text NOT NULL,
  `pic` text NOT NULL,
  `pass` text NOT NULL,
  `codetra` text NOT NULL,
  `codemeli` text NOT NULL,
  `crite` text NOT NULL,
  `email` text NOT NULL,
  `mark` text NOT NULL,
  `txtticket` text NOT NULL,
  `newticket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `fathername` text NOT NULL,
  `tdata` text NOT NULL,
  `mahalt` text NOT NULL,
  `shname` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `mobile` text NOT NULL,
  `postcode` text NOT NULL,
  `hadfyou` text NOT NULL,
  `stutpayment` text NOT NULL,
  `pic` text NOT NULL,
  `pass` text NOT NULL,
  `codetra` text NOT NULL,
  `codemeli` text NOT NULL,
  `crite` text NOT NULL,
  `email` text NOT NULL,
  `mark` text NOT NULL,
  `txtticket` text NOT NULL,
  `newticket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`fname`, `lname`, `fathername`, `tdata`, `mahalt`, `shname`, `address`, `tel`, `mobile`, `postcode`, `hadfyou`, `stutpayment`, `pic`, `pass`, `codetra`, `codemeli`, `crite`, `email`, `mark`, `txtticket`, `newticket`) VALUES
('bnbCEddK1xHbBOt/bbprAbMhwlDcvHUeTBAXjJecruQ=', 'eQw/HzWK7/s+OTvYlLCxLoAjR5TfVAi28QNXkKkBEYE=', 'jem5F3oN902XfCAODCPdfWaMz16Fy8hlbljUL53W3no=', '2/DYBmFT8cXK7413p8MYH/g8lTrz27JldLeNKhXDAz0=', 'xP0jEGj4nKko8AEGb6NlFJXaJ/298a0B1dnAakDFfas=', 'Ntm3GLC14ch/eQNUBky6/uJ/BWSErachZN7v/cztDi4=', '4RC51RshDSahu5O/KrFskvCAuOXtvnyOCeXOZh5ihk0JDvr9ZzUxO+Tz4x3+a5gtNDQ9EOWU6HLLbGjmKTu6bw==', 'wHqXuWsxxMV70tvzd2W0WyFD+l+uNBFXNdestkjgsgs=', 'CqoRyY18UR7RL7qukynMFC6JF19UErLmacDWPzrfLIM=', 'VFEbfSP4ZuZxHEYCbKfrrEoW6EO7bty1xy4+g2cnyZ4=', 'TpAaJchDFJfFFWS4uDDFQbrv06WcZhP4ecWl+yinymM=', 'پرداخت موفق', 'VQGMBvightZeRpYHKQ94Az2OteVvpLOhVrreuraOjXRDOintWg7FsxTxLuj7htBH4F76RAVixS+qtqxLnpjLhLrJhjEUifYRLL319IyAT/OrF6/kDtDfRQsAdzvXB8ma', 'yD2tiQdq/Cm0nOxQvePRVaCV+xpfesNzm0kamr/r/bQ=', 'IUekQ04AMbHJU9EdQ27EkJtNsOOtMRXB0z7wrMVEtc8=', 'Ntm3GLC14ch/eQNUBky6/uJ/BWSErachZN7v/cztDi4=', 'زمان :01:24  |  تاریخ: 1395/11/15', '2659231659+', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `genral`
--

CREATE TABLE `genral` (
  `id` text,
  `titel` text,
  `closesite` text,
  `printe` text,
  `date` text,
  `time` text,
  `address` text,
  `atela` text,
  `closereg` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genral`
--

INSERT INTO `genral` (`id`, `titel`, `closesite`, `printe`, `date`, `time`, `address`, `atela`, `closereg`) VALUES
('1', 'سامانه ثبت نام', '1', 'checked', '14:50', '1395/11/18', 'تهران - خیابان مولوی - مرکز برگزاری آزمون های ایران', 'به اطلاع شرکت کنندگان گرامی می رسانیم که مسابقه دارت قهرمانی استان گیلان در تاریخ 1392/7/7 در ساعت 14:00 در ورزشگاه آتش نشانی رشت برگزار خواهد شد', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nametbl`
--

CREATE TABLE `nametbl` (
  `faname` text,
  `enname` text,
  `ed` text,
  `post` text,
  `monay` text,
  `address` text,
  `datetime` text,
  `endpr` text,
  `printstatus` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nametbl`
--

INSERT INTO `nametbl` (`faname`, `enname`, `ed`, `post`, `monay`, `address`, `datetime`, `endpr`, `printstatus`) VALUES
('ثبت نام مسابقات جام رمضان فوتبال', 'football', '0', '\r\n3- موارد مشترک میان بانوان و آقایان:\r\nتوجه : حضور شخص متقاضی الزامی است.\r\n \r\n مدارکی که مي‌بايست توسط کليه متقاضيان ارائه گردد:\r\n1-3) اصل و کپي شناسنامه و کارت ملي و يا تأئيديه ثبت احوال براي کليه متقاضيان.\r\n2-3) ارائه اصل آخرين گذرنامه (در صورت معتبر بودن)\r\n3-3) یک (1) قطعه عکس 6x4 جديد و رنگي با زمينه سفيد و تمام رخ به طوري که:\r\nالف: 6 ماه از تاريخ انداختن آن نگذشته باشد.\r\nب:آقايان بدون کلاه و عينک کراوات و زيور آلات و آرایش مو و محاسن به طوري که پيشاني و گوش‌ها مشخص باشند. همچنین رنگ لباس و زمینه یکسان نباشد.\r\nج:خانم‌ها با حجاب کامل بدون آرايش و زيورآلات، با استفاده از روسري و یا مقنعه ساده و تیره به طوري که گردي صورت مشخص باشد. (برای دختران بالاي 6 سال با حجاب کامل)\r\n4-3) اجازه محضري برای ﻿افراد زير 18 سال از سوی پدر و یا قیم قانونی.﻿\r\n5-3) افراد بالاي 15 سال ضمن حضور در دفتر مي‌بايست شناسنامه عکسدار ارائه نمايند.\r\n6-3) افراد زیر 15 سال ضمن حضور در﻿ دفتر مي‌بايست گواهي اشتغال به تحصيل، دفترچه بيمه و يا گذرنامه عکسدار ارائه نمايند.\r\nتوجه: برای افراد زیر 6 سال،کودک می‌بایست ﻿در دفتر حاضر شده و ولی کودک﻿ یک قطعه عکس از کودک خود را ارایه نماید.\r\n7-3) بازنشستگان نظامي که 5 سال تمام از بازنشستگي آنها نگذشته است ارائه نامه از حفا يگان مربوطه الزامی است.\r\n8-3) بازنشستگان نظامي که 5 سال از بازنشستگي آنها مي‌گذرد می‌بایست اصل و کپي کارت کانون بازنشستگان را ارایه دهند (نیازی به ارایه گواهی از سازمان متبوع نمی‌باشد).\r\n9-3) نظامیان شاغل می‌بایست نامه موافقت حفا یگان مربوطه را ابتدا به دبیرخانه اداره گذرنامه ارایه و پس از ثبت به دفاتر خدمات الکترونیک انتظامی ارایه نمایند.\r\n\r\n4- موارد مربوط به بانوان:\r\n\r\n1-4) اجازه محضري برای بانوان متأهل از سوی همسر.\r\nتوجه:بانوان مقيم خارج احتياج به اجازه محضري همسر ندارند، همچنین اقامت با گذرنامه ايراني قابل قبول است.\r\nتوجه: بانواني که همسر آنها فوت نموده، مي‌بايست اصل گواهي فوت همسر و يا اصل شناسنامه باطل شده همسر و بانوان مطلقه مي‌بايست اصل طلاق‌نامه را ارائه نمايند. \r\n\r\n- موارد مربوط به آقايان:\r\n\r\n1-5) ارائه اصل و کپي کارت پايان خدمت يا معافيت صرفاً هوشمند(کارت‌های قدیمی اعتبار ندارند) و يا موافقت‌نامه سازمان وظيفه عمومي برای مشمولین.\r\nتوجه 1: کسانی که اقدام به تعویض کارت پایان خدمت یا معافیت قدیمی به هوشمند نموده‌اند، بعد از گذشت 24 ساعت از درخواست تعویض، می‌توانند با ارایه برگه ثبت درخواست تعویض کارت به افسران گذرنامه مستقر در دفاتر خدمات الکترونیک انتظامی، درخواست صدور یا تعویض گذرنامه دهند.\r\nتوجه 2: آقايان بالاي 50 سال احتياج به ارايه کارت پايان خدمت ندارند.\r\n2-5) آقايان دانشجو و يا دانش آموز براي خروج از کشور مي‌بايست نامه از محل تحصيل خود دريافت و به سازمان وظيفه عمومي تحويل نمايند.\r\n\r\n6- چند نکته مهم:\r\n\r\n1-6) براي متولدين خارج از کشور ارايه مدرک نحوه ورود الزامي است.\r\n2-6) براي ابطال گذرنامه‌هایی که بالاي يک سال اعتبار دارند ارائه نامه از ادارات گذرنامه الزامي است.\r\n--------------------------------------------------------------------------------\r\n\r\nنحوه اقدام درخصوص افرادي که گذرنامه معتبر آنها مخدوش بوده و يا آن را مفقود نموده‌اند:\r\n\r\nشهروندان تهران جهت اعلام فقدان و تعویض گذرنامه مخدوش - بررسی ممنوعیت فقط می‌بایست به اداره گذرنامه واحد غرب تهران واقع در یافت‌آباد، بلوار معلم، نرسیده به چهاراه قهوه خانه مراجعه نمایند.\r\nتوجه: افرادی که اعتبار گذرنامه آنها به اتمام رسیده و مفقود یا مخدوش گردیده است نیازی به اعلام فقدان نداشته و می‌توانند مستقیماً به دفاتر مراجعه نمایند.\r\n--------------------------------------------------------------------------------\r\nنرخ اين خدمت در دفاتر خدمات الکترونيک انتظامي با احتساب هزینه پستی مبلغ 293،000 ريال (بیست و نه هزار و سیصد تومان) مي‌باشد.', '200000', NULL, NULL, NULL, NULL),
('فرم ثبت نام اول', 'f1', NULL, 'فرم ثبت نام اول', '1', NULL, NULL, NULL, NULL),
('فرم ثبت نام دوم', 'f2', NULL, 'فرم ثبت نام ذوم', '1', NULL, NULL, NULL, NULL),
('فرم ثبت نام سوم', 'f3', NULL, 'فرم ثبت نام سوم', 'f3', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notic`
--

CREATE TABLE `notic` (
  `id` text,
  `post` text,
  `titel` text,
  `datime` text,
  `wrdd` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notic`
--

INSERT INTO `notic` (`id`, `post`, `titel`, `datime`, `wrdd`) VALUES
('1000', '0eUMqsE3PMOQvuQHGiW4goNm3kXPY1nohjtjPNa1wI0n6D1e1Uu84SbKSGKJDFZwVaA4daGp6Q6bwTcMgmYq1w==', 'اطلاعیه اول', 'زمان :18:43  |  تاریخ: 1395/11/14', ''),
('1001', '0eUMqsE3PMOQvuQHGiW4goNm3kXPY1nohjtjPNa1wI1Rf35BK4OKGcKTktBVxKmC3WevhgrXBwvd/xdodq5ZKg==', 'اطلاعیه دوم', 'زمان :18:44  |  تاریخ: 1395/11/14', ''),
('1002', '0eUMqsE3PMOQvuQHGiW4goNm3kXPY1nohjtjPNa1wI3VhBORB3PIi9xm4BkBoKxs7COQiYY6+bOpmq421cNvLg==', 'اطلاعیه سوم', 'زمان :18:47  |  تاریخ: 1395/11/14', 'admin'),
('1003', '0eUMqsE3PMOQvuQHGiW4goNm3kXPY1nohjtjPNa1wI3UdVPJkj0YnAGp5Ocec/KEYmXI2hrdu0ecym334jnS+w==', 'اطلاعیه چهارم', 'زمان :18:47  |  تاریخ: 1395/11/14', 'admin'),
('1004', '0eUMqsE3PMOQvuQHGiW4goNm3kXPY1nohjtjPNa1wI08ggAt+fJo7GytermM2G0t+6ENaqyF5BUWGaU2RqpnNg==', 'اطلاعیه پنجم', 'زمان :18:48  |  تاریخ: 1395/11/14', 'admin'),
('1005', 'qKJt/aR6bvGW7fDN5zc4UztE3kcpgJsCXbyV9GmioJ8=', 'اطلاعیه ششم', 'زمان :20:51  |  تاریخ: 1395/11/16', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tikects`
--

CREATE TABLE `tikects` (
  `id` text,
  `tblname` text,
  `username` text,
  `subject` text,
  `text` text,
  `sust` text,
  `closetikect` text,
  `creattime` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tikects`
--

INSERT INTO `tikects` (`id`, `tblname`, `username`, `subject`, `text`, `sust`, `closetikect`, `creattime`) VALUES
('1000', 'football', '411LofQZF/hFSYUMI6nm+etIA91WiGHXTyCSIOMs850=', 'باز نشدن سایت', 'mwTjgco46WsSSJ65E2nU+4EQApRI48czvJs+/QhS4SzAeAMsUcOM0krMQol53SgIXiTukApqOvJbyRbN/S/tgIaR4cd7sbtbOaqrfvv2anz6J19ha+D6n0XkXQi80ysXFUHxXpT76Ek7bL1FdII9PCsJF7VNqNjayZS2TB5IzFiO9u8RJJx9XcX2pDOV0kk4h2sRwtTdJZSbkKsP8lKbxo9Wbbo2gqKlXM8xiBkb8tVF/LVhWOz6wePghQRH8vhx32J1hvcDfQqdfbLw0beWmksMNIACCkzhjL1bFwJqKdDQA70DqPpI6ynDM+2RSIsAbnpAkbs3jRq5ieV1rdAyeH2ADLZSBjXo4GyS9jiQPp2kvXxu7chVIcY87K0yNP5wJUA4AoVahPAaHLWrFW6yfLsO0nY0IXulG6gF6bqUN4kHRn4qI9V1njpuNsnzWkBSz5awdRMK0m1k0AiyFcFxHcmOPrjRxScRnLKIeKWvqKPo/d1vilgXvjVXNHJtTTxuGdvtH47WK5SyjCWaWEPyGqESpxXCHhJEKpW4S+oN8wWx0pPFk5cLGZFw/B228WNdB4V4zCGGkGYqshPrxIJAx5bNV8wGRwmLQVQbmxBoy+97gvrTzQ1b/k9+ihowDR9pVMCdjPY60UsuH6q5HCa89gd2ZOVCn0tOruy2rTvkbv3gWF3ec5YKPRD2/7EXck306Pij1rS+KXpIOFuaobmVfEJRokL3tiICEjgdvzQGGG+O756LR/zsQ08PcRs1NznOUAdbRXqpqXILgxg/egEo3jETo1o2yeFRYZU8zcGl3Oi29+a7ZtaOoPK5oqC572CjcX9RgCmyhsW6QhDvZSnwkLBngqR1WWyF+16+MUeQp8Q9RKv6MMuspGfsRS0DbS+HuixFLmQ2q/0YjzZn2iOQNSXIErnGBZJp6HnpvOuEGjHMSVBmwBkLoYYs57tPIREoJgohmoNs32ucnbFW4SpsE5iChEX+JqO+Pazw6cOjIgwHREJ++J7GnxmHdVwQzTvMLxPRvbicsv+U7VFOFjVACJ2MkY+zhTvLT8n/6Hl0PDjYYvtN7O2tuz7Ayg62dydlq+WzqWpi+gEvWdCTXjT0hI7QIYlzSf6SQNoGEV8LIBDvUyBuo9iU4BBQUVt+3yxL7RbHJEUJczreSbLG2s9S5OLQDqI4K4UO0u+6kpSwZNhOWjkjTZTKM6A98aXhWG41mA8ABAQUAUZ4lilNwpKxVCSpYOFEN3Qp+pk9JB0ZU8+rasPyTmxip8fRbKrZot+qppU5uG8gqfKMXxl5DC8ioSRNhM6yGo9BRV9qf8Gy1oNMacpheZNOQ4c0l87+GamdRQLoiqwBJFdGVbxPjIJPM7Q8H6/4/eB2qyrNRVNUIcsJSnmiMRyVss/2rx5g9TS6vi6IrsVnEdbOMgmMx0Bk8ZHK+w0dDKjDK6HlTpJya+eFVhG1SJ3xCqXmyKOJTh73oTkXT8gf5cSXaTIdfEXVIlcqT2/EFJ7yCtCpAQwV3Sm6bFAwerH+dA6SMwAfU/TYT2vFXmfWorTBWemF/dlopzHRyJ6FABMbgLhSqv7ylyYbW8pgQg1c+Fl5Fz6sX9S0UbOSLa4x13kd9e6+S+1oPK8v0gql09tE/rwlMm98//aF6DVsWEGP+VV7SNPBbJzXDZG4w+XaraAis05GpV+Unx3nje+OfLnFYKUE3jP62x6T9x5a8Z7qYUZpQKZ2BoneOegJN3xMnBci/ZPpJ+hZ8TUyRkUKj9dZoing31VrTCDzNvoNowuoH9qhAtJ6T2TmmDaqpvZv31wxHf1HdjXhf4IT2jXkv7fyg2/OivE0BRLJ1KGYLBJKOSZNrZUVyAWvYwCci4B9hxXUvrXtNKOmlUjIhhSNDM9cY7eHT4vf51N8/AhzO1S84/GoZFsVNHdVWTLR3XR97JBeypkZ7em8lwXdNGIlc04BxbMjsVay15v3U3CPdwfR/QaLrooH+WaweIjA/a4mH9fEDDO0bmaYYkXMzQRV1QKv3xeU8hQymrgFgaAK1gp44XLFEK5i2gVilui369uZV4DDHxDJ4uZDwgB4bO/lh7s4tYc3njF6M6C34Y4WUgfXecGhOVTJqDXrTSQr9VlQj354/1BVD77Gas2520bnzOb8Bg3+6Hj0yVoxnQHNNgLUxMSDd0QrIWOx3+wI3qbsKgbW0y0MagEV5dUsT/QDyQCZGzwHS7RHaXNzG2lAKqhzJMkY0cXAhBvUSIPfLR/AWGFjlChbGqfKjQU5FF732pjeJS3rZsQrZxI7aRYRFjt+n+KuPoSXAy5sppCm6R7dLqtaAPqbExgf6t0x28zUhmbBrasshfMYgWlAMOIQbRbZlXAIuIH6JRDUnd/ooSlM1smPUYwsOcW7+xjirvPaAqIhXn4fyR0/DLQ0yUaGgBxaOftnvcHOoLlRaTFLedYxvt5OC7krbWWvowTrDzpZ00qj3JrxwpLDqhfra6WECsO/U5SHUoSBMoQC5+EJl7KTSVc4HMDYIAYjQnxgSz6F/Q8CGr8MXebyRGn/73Zuz3u8J1qEwFIWvKAYCrcZjt7FTFzrkHGH/tDjvU7qN4LmBqtKKRIlubi4gtBxmG0hJCFV5cXUPR/i3igA/kGkvNfuWQP38qwfj4lGeywl3cmxFR+AK/t2/e2larqpXrW+owtbKTXCCysDfYTK+fcvgF/ccBkiQddcz6e0TTp+oOdv+BkZEoGuZnpAILhKj7uqXg9TbPthq/RcCWf6zn3vxaLYB/UWcfifNpZtHWef5r3apEmkHvtQDyQefwbnc7tZa/Ddq7KNwUKXCHjPdKsqwYMybScTSZfL+k+q7U6C3idmGISbUCrBZ4Xe0d95BdJVAXuCizN+etsmzTh6G37cv2A7ley/4vpOavAvP0nP1fO6vR2kw9THx2z6HGgEoxMEHUKoX2x2rlRDtPvCbO6X0PzMFVFQsiGiQbwaQES5hgepwJKCl2LLC/Wcfl0QeNx6mvV1X5wIThn/FGOpKZvdOB6IjNU4msdX8GmTTXx/ZhbdzSHlNQR6XsGFrEYPp9Lha887MzZai5NDRw8DXZDr0CjAZ8Mf4GYSNxZ8k2UxqqF4WN3gl9+SghR3j0c0o6MFlG0K52bdZsxoetQLNcfzyT+Ww77KjIRpvndIlzzUPbEYdKwglC/SwLNTSZY06dWsQXNNtFSHJrWToZ59u5DSPI3GjORRlbfZo1006FnN6oDj4t168I/L4NC/YU1sPTiYwHpbmcJ/NLMiXWYwRg6nwtrMDmvOgndHTO6aIioNf4ywxGKyx/ARugj9M5qMDpdlRGjcV8hjyZY0i6zxHFFnlHPr74g03I+4cObVr4MoznPowiLC2E100XL4bffayIr1PnUdprcQ+KfchM/DDT7/+I2FYuokpStecPfqBymzMwitjl1AHkjEpEb8y5cFklzMijjJTTKK1KohFrfG5Sf3aGEVcnPRI8HJ48aaPN8Xf32H2ycjMX0fOuOdgUEE/ZHTOXWG2tM1545gTNF4gkp8zF6l+iMl7E6KZurf4Qo2MKH5Q22Z8Rv28YtxQebOTz0QjwRO4YIVW5ZyVkhxCujqM9DXmkshCK18KHxihz+QcXclUIsIubi2hZtzv4ZssNHnnmubKZvgI9jwhwJFt+na/Hvxpv0+/AaRMWZSGl1RniVf1FmKkISNZwt0wqbKwRFg2Qf5L1E/mrmDWcmrAAiz57fXKSNN4ERb9aM5ZvGfN2vvw9tnnE2DinxngQFBSk5oPunlYLCOCbf3YqDiN/3ibAyXgkvw4oy3sRfQU5kV+SIH9YIqlWghyLopxJpSJrfSyzp5gnNIJtWh9pMBzFTz0YthM6uvPdyxOJGfneCii+11qveZbAjjCaHOXOiZcesphqFemjdFrq1SjtuRjjdeG7qXryok4JnFRo9O7YASamfFRGIvBgPkkA5xWwv5gqKF1Hsmy1UV4lHvMWKAvEk5ZpmPaOeT7qLSpjqG6t31WCoZYTWXG5cR669Tip5522Y3CdbOs/LMPjPhKBgMElP2bhGampqGvkhxswQ6lhe12yS171lgIPaRr/nynK/5dpxQqh1b99lCBvzQxulLxXgROL3cOcf7YsLdxZlBDBpu8VmAeoK85B1GrObN3VHp2WkEy11jdeBg+xG8TNIvuXLOcfEQ05NNB0WXPLB4bunsbNW2mtPYRoi1YxZeB1PVgEGWZBue2OUJ7GU/l2Bn+xKvVLiC3PRYi2NgaT7JL+Vhq7DkNExIO3Ydc3bAorf8wPmjYhLNDKbd5vtTDUjGcKNSn3dLzhtd9tDluuy2yxkV57K2Wp8G6YE7oktfCl0uBn3vGX0TH2ZjT5pHaitPZm3KSRFAhhL0J0zCecjPBLhMO0b3TxZ0CRVs6+VNwaUBzzg9C8y7it+00ssk6uny5OjYf4YoUH8j9SrQZJJpmN2DtdBezzJ4e0gZULEhiLwodm0Vt84GrXAu8IfcD6rd', '5', '1395-11-18', 'در تاریخ  1395/11/15  در ساعت 00:17:57'),
('1001', 'football', '411LofQZF/hFSYUMI6nm+etIA91WiGHXTyCSIOMs850=', 'تست تیکت', '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', '2', '1395-11-18', 'در تاریخ  1395/11/15  در ساعت 00:34:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
