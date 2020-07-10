-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2020 at 02:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tube`
--

CREATE TABLE `tube` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(400) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `education` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `myfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tube`
--

INSERT INTO `tube` (`id`, `name`, `age`, `email`, `password`, `dob`, `country`, `state`, `city`, `address`, `gender`, `education`, `phone`, `myfile`) VALUES
(1, 'Amiya Ranjan Pattnaik', 24, 'amiya.pattnaik@auroinfo.com', '', '1995-06-21', 'India', 'Telangana', 'Hyderabad', 'begumpet amerpet near charminar hyderabad andra pradesh now telengana', 'male', 'post-graduation', '123-45-678', 'abc.php'),
(4, 'Gyana Ranjan Samal', 27, 'amnsyi@gmail.com', '', '2020-06-13', 'India', 'Delhi', 'New Delhi', 'amritasar near dahibara ghugun dokan sardarji stall punjabai colony bhubaneswar', 'male', 'graduation', '678-45-321', 'ajax.png'),
(5, 'Jyoti Ranjan Mohanty', 53, 'jrmohanty242i@gmail.com', '', '2020-06-14', 'India', 'Maharastra', 'Mumbai', 'near mukesh ambani Antilia  side gali towards highway mumbai mharashtra', 'male', 'post-graduation', '678-45-321', 'checkbox values.png'),
(7, 'Sriram iyar', 27, 'sriram@gmail.com', '', '2020-06-17', 'India', 'Tamil Nadu', 'Chennai', 'Near anamallie guindy 3rd street plot no 89 t nagar chennai', 'male', 'graduation', '678-45-321', 'Infosys.com.pdf'),
(10, 'Deepak Babu', 34, 'deepak@gmail.com', '', '2020-06-07', 'India', 'Telangana', 'Hyderabad', 'infront of charminar near masjid hyderabad', 'male', 'graduation', '678-45-321', 'Screenshot from 2020-03-27 16-28-50.png'),
(13, 'Arya senapati', 24, 'arya@gmail.com', '', '2020-06-21', 'India', 'Delhi', 'New Delhi', 'Market building road no 2 quarter no 45 new delhi', 'female', 'graduation', '987-56-321', 'tabledelete.png'),
(14, 'Chandrasen Pandey', 26, 'csen@gmail.com', 'pandeyji', '2020-06-14', 'India', 'Delhi', 'New Delhi', 'army colony lodhi road lajpat nagar new delhi', 'male', 'martriculation,inter,graduation,post-graduation,', '678-45-321', 'Screenshot from 2019-03-20 16-03-00.png'),
(15, 'Priya Ranjan', 26, 'pranjan@gmail.com', '', '2020-06-05', 'India', 'Delhi', 'New Delhi', 'Jhumri talaya lodhi road lajpat nagar new delhi', 'male', 'post-graduation.', '678-45-321', 'ranajeet_kumar_barik_resume.pdf'),
(16, 'Deepak Chaurasia', 24, 'deepakc@gmail.com', '', '2020-06-20', 'India', 'Delhi', 'New Delhi', 'dhaula kuan near main road towards IIt delhi new Delhi', 'male', 'martriculation,inter,graduation,post-graduation,', '123-45-678', 'uploadoutputerror.png'),
(17, 'Jethalal Gada', 47, 'gadaelectronics@gmail.com', '', '2020-06-28', 'India', 'Maharastra', 'Mumbai', 'Gokuldham Society Powder gali goregaon east Mumbai', 'male', 'martriculation,inter,', '123-45-678', 'DT20206351440_Application.pdf'),
(18, 'Champaklal jayantilal Gada', 67, 'cjgada@gmail.com', '', '2020-06-28', 'India', 'Maharastra', 'Mumbai', 'Powder gali gokuldham society goregaon east mumbai', 'male', 'martriculation,inter,graduation,', '123-45-678', 'datainserted.png'),
(19, 'Roshan Singh Sodhi', 45, 'rsodhi@gmail.com', '', '2020-06-14', 'India', 'Delhi', 'New Delhi', 'patel marg naya sarak old masjid new delhi', 'male', 'martriculation,inter,graduation,', '987-56-321', 'phpfiddle save error.png'),
(22, 'Dilawar Khan', 45, 'dilawar@gmail.com', '', '2020-06-28', 'India', 'Delhi', 'New Delhi', 'plot no 898 shaheen bagh new delhi', 'male', 'martriculation,inter,', '123-45-678', 'my_photo-1.jpg'),
(23, 'Gourav Das', 34, 'gourav@gmail.com', '', '2020-06-20', 'India', 'Delhi', 'New Delhi', 'jenarigacha pakha gali no 89 house no 9 new delhi', 'male', 'martriculation,inter,graduation,', '678-45-321', 'my_photo-1.jpg'),
(24, 'advbce', 23, 'def@abc.com', '', '2020-06-07', 'India', 'Delhi', 'New Delhi', '     njknnnkkknknkknjk   kjkbnkkknknknknkk k knjklnnn', 'male', 'martriculation,', '678-45-321', '+2 mark.jpg'),
(25, 'amiya', 23, 'abc@gef.com', '', '21-06-2020', 'India', 'Delhi', 'New Delhi', 'vguvguug gu gugyuouyg uo ygyuguyvuyvgvu vfftuftyfkufugf ufuffufut fklff kfkftufutftufuf uyfuyf yuuyu', 'male', 'martriculation,inter,graduation,', '678-45-321', 'admitcard.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tube`
--
ALTER TABLE `tube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tube`
--
ALTER TABLE `tube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
