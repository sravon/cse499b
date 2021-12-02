-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 09:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `art_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`art_id`, `title`, `image`, `content`) VALUES
(1, 'def rtyh', 'f193606d67.jpg', '&lt;p&gt;It&amp;rsquo;s like a trend now a day to &lt;a href=&quot;https://www.jeduka.com/study-in-usa&quot;&gt;study in&amp;nbsp;USA&lt;/a&gt; . Some might be going for fulfilling their dreams, some for their parent&amp;rsquo;s dream&lt;strong&gt;.&lt;/strong&gt; Not just because it is the most powerful nation in the world but The Statue of Liberty, White House, Disneyland are some of the places and things which fascinate people all over the world.&lt;/p&gt;'),
(2, 'Top Ranking Universities in Canada', 'f193606d67.jpg', '&lt;p&gt;If you want to study in Canada and not sure about where to start, we have picked top 20 Universities to &lt;a href=&quot;https://www.jeduka.com/canada/study-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Study Abroad in Canada&lt;/span&gt;&lt;/a&gt;. This List of Universities in Canada are of Top 20 Universities for the country according to QS world rankings and Times Higher Education Ranking.&lt;/p&gt;\r\n\r\n&lt;p&gt;Canada has emerged as an immigration friendly nation in last few years, and the number of international students keep on increasing year after another. The Universities have a simple and transparent admission process, and so does Canada student Visa or SDS process to start your Study Abroad in Canada journey. The first step would be to opt for a course in a University. That is why we bring you the best of Canadian Universities for international students.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;How are the Universities ranked?&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;The QS Rankings are survey-based rankings. The website surveys a significant number of education experts to rank the University. The quality of teaching is a big deciding factor, too.&lt;/p&gt;\r\n\r\n&lt;p&gt;Times Higher Education on the other hand, relies on the research output and papers published by the Universities. Apart from these factors, both the ranking websites have different factors like international outlook of the Universities, desirability of students and employability after the programs. There are subject wise lists, too.&lt;/p&gt;'),
(3, 'intake retgf', '835da26a6e.png', '&lt;p&gt;fgh rtcv rtyu ry wegv regrg rtghr&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `title`) VALUES
(4, 'canada'),
(5, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `major` varchar(255) NOT NULL,
  `university_id` int(11) NOT NULL,
  `per_year` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `exam_accept` varchar(255) NOT NULL,
  `facilities` text NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `dept`, `position`, `major`, `university_id`, `per_year`, `Duration`, `exam_accept`, `facilities`, `others`) VALUES
(5, 1, 2, 'master in business administration', 9, 'dfhdf', 'ghdrf', 'GMAT | GRE | IELTS 7/9 | TOEFL 104/120 | PTE 70/90', 'dgdsf', '&lt;p&gt;drh fjuity gyi tyuiy yfu ftudf dty6udfs fdgd&lt;/p&gt;'),
(6, 1, 3, 'Executive MBA', 9, '39,520 GBP / 0', '21 Month  Master / Specialized Master  (Full Time)', 'GMAT | IELTS', 'Auditorium,Cafeteria,Workshops', '&lt;h2&gt;Why Join University of Oxford?&lt;/h2&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Oxford is consistently ranked one of the world&amp;rsquo;s top five universities&lt;/li&gt;\r\n	&lt;li&gt;Oxford graduates include: More than 30 international leaders, 27 Nobel Prize winners, 26 British Prime Ministers&lt;/li&gt;\r\n	&lt;li&gt;94% of Oxford leavers are employed, in further study, or both within six months after graduating&lt;/li&gt;\r\n	&lt;li&gt;Almost 40% of total student body - over 8,400 students - are citizens of foreign countries, including 17% of undergraduates and 61% of graduate students&lt;/li&gt;\r\n&lt;/ul&gt;'),
(7, 2, 3, 'computer science and engineering', 11, 'dfhdf', 'ghdrf', 'GMAT | GRE | IELTS 7/9 | TOEFL 104/120 | PTE 70/90', 'dgdsf', '&lt;p&gt;drh fjuity gyi tyuiy yfu ftudf dty6udfs fdgd&lt;/p&gt;'),
(8, 9, 3, 'journalism', 10, '39,520 GBP / 0', '21 Month  Master / Specialized Master  (Full Time)', 'GMAT | IELTS', 'Auditorium,Cafeteria,Workshops', '&lt;h2&gt;Why Join University of Oxford?&lt;/h2&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Oxford is consistently ranked one of the world&amp;rsquo;s top five universities&lt;/li&gt;\r\n	&lt;li&gt;Oxford graduates include: More than 30 international leaders, 27 Nobel Prize winners, 26 British Prime Ministers&lt;/li&gt;\r\n	&lt;li&gt;94% of Oxford leavers are employed, in further study, or both within six months after graduating&lt;/li&gt;\r\n	&lt;li&gt;Almost 40% of total student body - over 8,400 students - are citizens of foreign countries, including 17% of undergraduates and 61% of graduate students&lt;/li&gt;\r\n&lt;/ul&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'MBA'),
(2, 'IT'),
(3, 'Engineering'),
(4, 'MEDICINE'),
(5, 'HOSPITAL & TOURISM'),
(6, 'Management'),
(7, 'Science'),
(8, 'Arts'),
(9, 'Media Films'),
(10, 'Law');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_title`) VALUES
(1, 'gre'),
(2, 'gmat');

-- --------------------------------------------------------

--
-- Table structure for table `examcontent`
--

CREATE TABLE `examcontent` (
  `examcontent_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examcontent`
--

INSERT INTO `examcontent` (`examcontent_id`, `title`, `exam_id`, `content`) VALUES
(3, 'examination', 1, '&lt;h2&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;GRE exam is an ideal choice for you as:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;The GRE score is widely accepted by universities and institutes across Canada, the US, Asia Pacific, Europe, Middle East, Africa, and many other nations&lt;/li&gt;\r\n	&lt;li&gt;Many scholarship and fellowship programs also considered the score of the GRE exam&lt;/li&gt;\r\n	&lt;li&gt;One can retake the exam as required until his/her GRE score reflects their true potential.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Is there is any GRE exam eligibility criteria?&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;The good news is thatrf t4 54t4 54654 the GRE has no specific eligibility criteria. Anyone can appear for the exam regardless of their age or academic qualifications. The only requirement is that you should have a valid document specified by ETS as an identity proof when appearing for the GRE exam. For more information click here:&lt;a href=&quot;https://www.jeduka.com/gre-eligibility&quot;&gt; GRE Exam Eligibility&lt;/a&gt;&lt;/p&gt;'),
(4, 'exam dates', 1, '&lt;h2&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;GRE exam is an ideal choice for you as:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;The GRE score is widely accepted by universities and institutes across Canada, the US, Asia Pacific, Europe, Middle East, Africa, and many other nations&lt;/li&gt;\r\n	&lt;li&gt;Many scholarship and fellowship programs also considered the score of the GRE exam&lt;/li&gt;\r\n	&lt;li&gt;One can retake the exam as required until his/her GRE score reflects their true potential.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Is there is any GRE exam eligibility criteria?&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;The good news is thatrf t4 54t4 54654 the GRE has no specific eligibility criteria. Anyone can appear for the exam regardless of their age or academic qualifications. The only requirement is that you should have a valid document specified by ETS as an identity proof when appearing for the GRE exam. For more information click here:&lt;a href=&quot;https://www.jeduka.com/gre-eligibility&quot;&gt; GRE Exam Eligibility&lt;/a&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `country_id`, `question`, `answer`) VALUES
(1, 4, 'What are the Types of Intakes in Canada?', '&lt;p&gt;The Intakes are not categorised as such, however, the Fall or September Intake is the Primary Intake where all the universities offer all their courses. The Winter Intake is a secondary intake where students who have missed the fall intake can apply for a large number of courses.&lt;/p&gt;'),
(2, 5, 'hi what s app', '&lt;p&gt;wqer e5ry65 rae46t4 t6 e4t5 e456 w4e5rt w5r wr34 w35r&lt;/p&gt;'),
(3, 4, 'What are the Types of Intakes in Canada?', '&lt;p&gt;The Intakes are not categorised as such, however, the Fall or September Intake is the Primary Intake where all the universities offer all their courses. The Winter Intake is a secondary intake where students who have missed the fall intake can apply for a large number of courses.&lt;/p&gt;'),
(4, 5, 'hi what s app', '&lt;p&gt;wqer e5ry65 rae46t4 t6 e4t5 e456 w4e5rt w5r wr34 w35r&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `image_list`
--

CREATE TABLE `image_list` (
  `image_id` int(11) NOT NULL,
  `main_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_list`
--

INSERT INTO `image_list` (`image_id`, `main_image`) VALUES
(1, 'bro.jpg'),
(2, 'bro1.jpg'),
(3, 'bro.jpg'),
(4, 'bro1.jpg'),
(5, 'bro.jpg'),
(6, 'bro1.jpg'),
(7, 'bro.jpg'),
(8, 'bro1.jpg'),
(9, 'bro.jpg'),
(10, 'bro1.jpg'),
(11, 'bro.jpg'),
(12, 'bro1.jpg'),
(13, 'bro.jpg'),
(14, 'bro1.jpg'),
(15, 'bro.jpg'),
(16, 'bro1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maincontent`
--

CREATE TABLE `maincontent` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cntry_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincontent`
--

INSERT INTO `maincontent` (`id`, `title`, `cntry_id`, `content`) VALUES
(6, 'study', 4, '&lt;p&gt;Canada - Obviously a proud country. Getting an immense number of international students every year. Yes, it&amp;#39;s a hub of global talents. Aiming for the best in world education and a gaining opportunity to study in the world&amp;rsquo;s top universities. 494,525 is the number reported for the international students in Canada at all levels of study in 2017 - Says Canadian Bureau for International Education. Isn&amp;rsquo;t a wow making figure? Of course, it does.&lt;/p&gt;\r\n\r\n&lt;p&gt;Yes, You can&amp;rsquo;t miss the World&amp;rsquo;s 4th most popular destination for International Students.&amp;nbsp;you can take admission in the following are 3 &lt;a href=&quot;https://techhbd.com&quot; target=&quot;_blank&quot;&gt;intakes in Canada&lt;/a&gt; and experience the best of life.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Fall Intake&lt;/li&gt;\r\n	&lt;li&gt;Winter Intake&lt;/li&gt;\r\n	&lt;li&gt;Summer Intake.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Why study in Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Often the question arises in the minds that &lt;strong&gt;why international students choose to study in Canada&lt;/strong&gt;. Here is the answer to it:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;You will have various options to choose from big or small universities and small-town or city universities. There are 26 universities of Canada which are featured in the world&amp;rsquo;s best universities. In which, three of them are listed in the global top 100.&lt;/li&gt;\r\n	&lt;li&gt;It has a beautiful land with urban development along with its non-discriminatory society.&lt;/li&gt;\r\n	&lt;li&gt;Canada is one of the safest countries to stay temporarily, study and settle permanently. Research states that 95% of International people prefer or recommend Canada as the study abroad destination.&lt;/li&gt;\r\n	&lt;li&gt;International Students can experience an active and diverse lifestyle in this wonderful country and enjoy great health care benefits, and the politeness of the locals which is the thing that Canada is most known for.&lt;/li&gt;\r\n	&lt;li&gt;Students will have plenty of excellent opportunities to meet minded people and gain valuable international student experience through different student clubs and organisations.&lt;/li&gt;\r\n	&lt;li&gt;It is believed that graduates from universities in Canada enjoy productive and successful careers.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Now you can answer that &lt;strong&gt;is it worth studying in Canada &lt;/strong&gt;or not.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;academic_stature&quot;&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Education System in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;Like many other countries, Canada also has a straight forward Education System divided into these chronological levels of certification/titles for those who want to Study in Canada:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Early Childhood Education (Kindergarten or Grade Primary)&lt;/li&gt;\r\n	&lt;li&gt;Elementary Education (Grade 1 to 6)&lt;/li&gt;\r\n	&lt;li&gt;Intermediate Education (Grade 7 &amp;amp; 8)&lt;/li&gt;\r\n	&lt;li&gt;Secondary Education (Grade 9 to 12)&lt;/li&gt;\r\n	&lt;li&gt;Tertiary Education (College / Universities for UG and PG)&lt;/li&gt;\r\n	&lt;li&gt;PhD and Doctoral Studies&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;In Canada, each province and territory are responsible for its higher education at all the educational levels within it including universities, there is no federal accreditation. This means that each province and territory in Canada set their own standards of &lt;strong&gt;higher education in Canada&lt;/strong&gt; and manage the issues if any, and these are strict to ensure quality. Most international students opting for Canada will choose to pursue their Bachelors or &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/masters-in-canada&quot;&gt;Masters in Canada&lt;/a&gt;&lt;/strong&gt;. To know more about Education System in Canada,&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada courses&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Though Universities in Canada offer a broad range of good courses for international students few of the courses are more popular than the others. The top courses in Canada are&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Business &amp;amp; Finance&lt;/li&gt;\r\n	&lt;li&gt;Core Engineer and Engineering (Mechanical, electrical &amp;amp; civil)&lt;/li&gt;\r\n	&lt;li&gt;Computer &amp;amp; IT related&lt;/li&gt;\r\n	&lt;li&gt;Bio-science, Medical &amp;amp; Healthcare&lt;/li&gt;\r\n	&lt;li&gt;Media &amp;amp; Journalism&lt;/li&gt;\r\n	&lt;li&gt;Agriculture science&lt;/li&gt;\r\n	&lt;li&gt;Arts, Psychology &amp;amp; Human Resources&lt;/li&gt;\r\n	&lt;li&gt;Hospitality Management&lt;/li&gt;\r\n	&lt;li&gt;Architecture&lt;/li&gt;\r\n	&lt;li&gt;Culinary Management&lt;/li&gt;\r\n	&lt;li&gt;Dentistry.&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;You will get various types of course and all the 3 levels of education Bachelor&amp;#39;s, Masters and Doctorate levels. To know &lt;strong&gt;which is the best course to study in Canada &lt;/strong&gt;you can check:&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada after 10th&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;After the 10th in your home country, you have to select some special subject which you want to study in Canada. You can discuss with those who have joined the course after 10th standard. Before taking any decision, you can search online for courses in Canada after the 10th. You can choose the stream of your study so that you can gain mastery in it after completing high school. After 10th class in Canada, you can take admission in any of the vocational courses as well.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;&lt;strong&gt;Study in Canada after 12th&lt;/strong&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p dir=&quot;ltr&quot;&gt;&lt;span style=&quot;background-color:transparent&quot;&gt;Many of the international students choose to study in Canada earlier in their academic career. After schooling, or as 10+2 in many countries. The undergraduate programs have a plethora of options for international students coming to Canada. Most of the Bachelor&amp;rsquo;s degree programs in Canada are for four years, making it easier for the students who want to study Masters in other countries abroad or even in Canada, as the Master&amp;rsquo;s requirement for many countries including Canada is 12+4.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;div id=&quot;english_language&quot;&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;English Courses in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;Canada has the major two languages in speaking &amp;amp; in culture: English And French. However, you are good to go with the English as an international student in Canada. You can opt for one of the universities training for the languages. Because Canada holds diversified people coming in and living. By the time you graduate, you would be definitely speaking multiple languages. But English will remain predominant and plays a vital role here.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study in Canada Without IELTS&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;For all the students who are willing to Study in Canada, most of the Universities in Canada will ask for&amp;nbsp;proof of English Language Proficiency in the form of IELTS. However, there are some Universities in Canada without IELTS requirements. You can check out some of the top Canadian Universities that offer the opportunity to Study in Canada without IELTS:&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study in Canada Requirements&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;There are many International students who look confused about &lt;strong&gt;how to study in Canada&lt;/strong&gt;, don&amp;rsquo;t worry we will clear your doubts here. Whether you apply for a UG, PG or Diploma course, every University in Canada will have some basic requirements for the admission process.&amp;nbsp;Here is the answer to your question of, &lt;strong&gt;to study in Canada what is required&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;You will need to submit your mark sheets and transcripts of all your previous education.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Depending on the course and university, you will be asked to prove your language proficiency. Generally, IELTS or TOEFL tests scores are presented to prove English language proficiency.&lt;/li&gt;\r\n	&lt;li&gt;Two LOR (letters of Recommendation)&lt;/li&gt;\r\n	&lt;li&gt;Some executive and honours courses may be demanded in the specific field.&lt;/li&gt;\r\n	&lt;li&gt;A detailed resume including all your educational achievements, work experience and other related experience.&lt;/li&gt;\r\n	&lt;li&gt;Most colleges ask for SOP(Statement of Purpose) too, which presents your reasons for the admission in that specific course and institution, and how it will help you with your career goals.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Before making a decision check your &lt;strong&gt;study in Canada eligibility.&lt;/strong&gt; You can find all the details here for basic eligibility criteria and &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/how-to-apply-in-canadian-university-college&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;How to Apply&amp;nbsp;to Study in Canada for UG, PG and Diploma Courses&lt;/span&gt;&lt;/a&gt;:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/english-language-requirements-for-universities-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;English Language Requirements: IELTS and TOEFL Scores&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;2. &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/admission-requirements-for-ug-pg-and-diploma-course-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Eligibility Criteria &amp;amp; Admission Requirements to Study in Canada&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Exams to study in Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Many international students have a question as &lt;strong&gt;which exam is required for study in Canada.&lt;/strong&gt; To study in Canada international students need to prove their language efficiency and aptitude to get enrolled in their chosen institution. Canada is a bilingual country having two languages, English and French. The language requirement may change depending upon the area. The different universities or institutions demand various exams score depending upon course or program before giving admission to the student. Some of these are:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;International English language Testing System (&lt;a href=&quot;https://www.jeduka.com/ielts-exam&quot; target=&quot;_blank&quot;&gt;IELTS&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Test Of English as a Foreign Language (&lt;a href=&quot;https://www.jeduka.com/toefl-exam&quot; target=&quot;_blank&quot;&gt;TOEFL&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Pearson Test of English (&lt;a href=&quot;https://www.jeduka.com/pte-exam&quot; target=&quot;_blank&quot;&gt;PTE&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Graduate Record Exam (&lt;a href=&quot;https://www.jeduka.com/gmat-exam&quot; target=&quot;_blank&quot;&gt;GRE&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;General Management Aptitude Test (&lt;a href=&quot;https://www.jeduka.com/gmat-exam&quot; target=&quot;_blank&quot;&gt;GMAT&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Medical College Admission Test (MCAT)&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;div id=&quot;joy_of_living&quot;&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Student life in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;If you&amp;rsquo;re thinking of moving to Canada and think of whether that stays stable is not gonna happen. Because Canada is indeed a huge country. Canada is uniquely engraved in the realm of God on this planet. As the country has five time zones along with the long stretching of Pacific and Atlantic ocean.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Canada is the country of beautiful landscapes and dramatic mountains. There is a different lifestyle in different cities and also it is quite different from other countries as well. The students who study abroad in Canada will get to see the best in their life here.&lt;/li&gt;\r\n	&lt;li&gt;The student orientations ensure that the international students feel welcome and get settled down on the campus properly.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;The Canadian classes are very interactive and research-based. So, it is important that you be concentrated enough to last in your class. By paying full attention to all the lectures and working hard can bring you success in completing the studies in Canada for the betterment of your career.&lt;/li&gt;\r\n	&lt;li&gt;Currently, there are different kinds of evaluation systems that take place in the education system of Canada such as Written tests, oral examination etc which are used to evaluate the skills of the students. The students need to develop skills for presentation, work, and research to perform well in these evaluations.&lt;/li&gt;\r\n	&lt;li&gt;Overseas students can make some new friends in Canada easily. Being an international student and participating in different social and educational activities can teach you so many things and improve your knowledge.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Although the experts say that Canada is a peaceful and decent country, there are some safety measures that students need to take while moving in to study in Canada. You can also call 911 in case of any crime or problems.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;You can check this for full information: &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/know-all-about-the-student-lifestyle-in-canada&quot; target=&quot;_blank&quot;&gt;Student Life in Canada&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Cost to Study in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Well, Canada has the world&amp;rsquo;s topmost universities. But there is nothing like &amp;ldquo;So the fees are on cloud nine&amp;rdquo;. It depends on which universities you apply to and for which courses. Also, varies on the basis of being an international student and a home student.&amp;nbsp;Here are a few points to take note regarding the cost of studying in Canada&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Ontario has the most expensive tuition fees. Students pay on average CA$ 8,454 per year here.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Reports show that average tuition fees for the undergraduate programmes for international students in Canada are CA$25, 625 per annum. Here the engineering and medical sciences would be expensive as compared to the cheap courses. In Canada, pursuing an engineering degree takes an average of CA$28, 340 per annum.&lt;/li&gt;\r\n	&lt;li&gt;Whereas the post-graduation fees are comparatively lower. It varies depending on the courses you take. But at an approximate sight, sources state CA$16, 252. However, the management studies in Canada are comparatively costly than the average fees. Especially when you choose the executive programmes for MBAs. It falls approximately at CA$ 50,000.&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2 dir=&quot;ltr&quot;&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Scholarships for International Students in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;background-color:transparent&quot;&gt;There are a number of scholarships available to study in Canada for international students. Now, these scholarships can be from universities in Canada, the Canadian Government, or other entities providing scholarships. The scholarships help a large number of students in Canada with their tuition fees, transportation,travel and healthcare. There are few fully paid scholarships&amp;nbsp;that can let you study in&amp;nbsp; Canada for Free. However, they are very few and hard to get. Scholarships offering partial financial aid are large in numbers. &lt;/span&gt;There are 3 types of scholarships, under which you can find plenty. They are:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;Canadian government scholarships&lt;/li&gt;\r\n	&lt;li&gt;Non-governmental scholarships to study in Canada&lt;/li&gt;\r\n	&lt;li&gt;Universities offering scholarships in Canada&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Safety in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Public Safety Canada is a single entity unit to protect the people in Canada from crime, terrorism and natural disasters. It is connected with all the other federal entities and co-ordinates with them. The benefit of a single entity for safety means a highly prioritised and organised system to ensure the safety of the people.&lt;/p&gt;\r\n\r\n&lt;p&gt;Moreover, all the colleges and University observe the Canadian Occupational Health and Safety Act, in addition to all the municipality, provincial and Federal laws and acts. This shows how committed the government and people are with regard to safety.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;continue_working&quot;&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study and Work in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Work off-campus: &lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Working off-campus means you are studying but have permission to work outside the campus solely. Here also, you need to have a valid work consent as well as institutes permission along with the study in Canada permit.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Work on-campus: &lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Work on-campus means you&amp;rsquo;re still studying. You have a valid study in Canada permit. And you&amp;rsquo;re associated with one of the public post-secondary institutes/&lt;strong&gt;&lt;u&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;Universities in Canada&lt;/a&gt;&lt;/u&gt; &lt;/strong&gt;&amp;nbsp;Or maybe a private institute with at least funded by 50 percent of government grants. The institute keeps you or assigns your professor to work with. Or maybe you are assisting in working for the building or campus.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Canada welcomes with open arms to work there if you&amp;rsquo;re the best fit!&lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;There are always conditions where you opt for a bit of permanent residence in abroad countries. In Canada also, you need to comply with such conditions or set of rules that make sure of your eligibility for working in Canada. It can be after completion of your graduation or simultaneously while studying.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Post Graduate work permit in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;The post-graduation work permit allows international students who have graduated from the post-secondary university of Canada to obtain valuable work experience in the country. You can have the right to work full time for up to 3 years after you graduate from a Canadian university,&amp;nbsp;this is one of the reason &lt;strong&gt;why you should study in Canada&lt;/strong&gt;.&amp;nbsp;The duration of the work permit depends on the duration of your program. You are not required to work in a specific field in Canada, you can work in any field as you wish.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study Visa in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;International students coming to Canada require a study permit from Immigration Canada. For countries like India, China, Vietnam and the Philippines the process is done via SDS which is a faster way to get the student permit for studying in Canada. Students from other countries go through the conventional process for the student visa. There are some benefits that come with a student visa in Canada, like a part-time work permit and stay back upto three years after graduation.&amp;nbsp;If you have a question that &lt;strong&gt;can I study in Canada with work permit&lt;/strong&gt;? Then let us tell you that it is not possible, you have to apply for a study visa.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Accommodation in Canada for international students&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;They offer amenities such as townhomes. However, it is great if you get the family/ host homes. They provide you with meals 3 times a day and can have a secure staying accommodation. You will surely experience home like the atmosphere there.There are also townhouses available in some cities and areas. Where they contain three to six bedrooms and you can simply opt for single rooms. Also, there are off-campus shared apartments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Also, it depends where you live again. For example, If you choose to study at the University of Toronto and live&amp;nbsp;in near St. George, it would be Costlier abodes. A room near St. George cost you approx. $625 whereas the same near University of Toronto, $530 to $540. Whereas for 1, 2 and 3 BHK apartments, an average of $1200, 1600 and 2000 approximately.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada from India&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;You can &lt;strong&gt;study in Canada after diploma in India.&lt;/strong&gt; A study in Canada for Indian students will not be tweaking here. Because the students will find their favorable accommodations at affordable pricing if they are good at searching. Yes, patience does matter. There are some schools/institutes providing the student residence. Some may have dormitory provision with sharing option. It may have three to six students in sharing.&lt;/p&gt;\r\n\r\n&lt;p&gt;Canada is a modern and well-equipped country. You will meet a lot of new people and learn more things about the culture, people, and technologies. You will enjoy classy amenities, concerts, sports facilities and a widening scope for developing your knowledge out of the box. Canada also provides a facility for Olympic level sports.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Top Cities in Canada for International Students&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Studying in Canada is the most sought after option for the students who want to study abroad. But Canada is the second largest country in the world. So the question of &amp;ldquo;where to study in Canada&amp;rdquo; arises. We have made a list of best student cities in Canada and the Universities in them to help you choose the best of both academic and student life: &lt;a href=&quot;http://jeduka.com/articles-updates/canada/top-student-cities-and-universities-to-study-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Top Student Cities and Universities to Study in Canada&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Which is the best city to study in Canada ?&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Study in Toronto Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Toronto is a beautiful city in Canada, located along the shore of &amp;nbsp;Lake Ontario. Many researchers are of the opinion that Toronto deserves popularity for being the most attracted student city. Whether you are into fashion, photography,&amp;nbsp;visual arts, film, or journalism, the city has a wide range of industries within the creative field. This city is a wonderful place having plenty of opportunities. You can find more information about it here: &lt;a href=&quot;https://www.jeduka.com/canada/ontario/toronto/universities-colleges&quot; target=&quot;_blank&quot;&gt;Universities in Toronto&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Study in Calgary Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Calgary is a large city located in western Canada in the province of Alberta. With open spaces, rivers, mountains and more sunshine than another city in Canada, Calgary is a beautiful place to live in. The city is popular for leisure time activities and has a most extensive bikeway system. The City attracts applications from many corners of the world in the universities in Calgary. Check this out for more information: &lt;a href=&quot;https://www.jeduka.com/canada/nunavut/calgary/universities-colleges&quot; target=&quot;_blank&quot;&gt;Universities in Calgary&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Study in Ottawa Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Ottawa is the capital city of Canada. It is home to some of the best educational institutes of the nation. The universities in Ottawa are some of the top-ranked universities in Canada. For international students who are planning to study in Canada, Ottawa is something that cannot be overlooked. The city is counted among those which consists of the most educated population. Visit here to know more: &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/universities-in-ottawa&quot; target=&quot;_blank&quot;&gt;Universities in Ottawa&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Pre-departure guide for international students Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;To make things easier for every student preparing for the journey, we &amp;nbsp;to study in Canada, we have prepared a detailed checklist to help you. Find the list here:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Ensure that you have a non-expired passport. It should be valid for an additional six months after your course is completed.&lt;/li&gt;\r\n	&lt;li&gt;Satisfy the conditions of your university. They might ask you to provide official transcripts, language exam scores etc.&lt;/li&gt;\r\n	&lt;li&gt;Get a study visa for Canada. You should apply for a visa at least two months before the day you are planning to fly out to Canada.&lt;/li&gt;\r\n	&lt;li&gt;Finalize and book a type of accommodation in Canada. Choose from living on-campus, rented room or apartment, or any other family stay.&lt;/li&gt;\r\n	&lt;li&gt;Book your tickets to fly to Canada. You can arrange for the University to pick you from the airport if you have decided to live on campus.&lt;/li&gt;\r\n	&lt;li&gt;Go through all the required medical examinations and take vaccinations. Check the entry requirements page of the Canada immigration website if it is required in your case or not.&lt;/li&gt;\r\n	&lt;li&gt;Arrange travel insurance (optional)&lt;/li&gt;\r\n	&lt;li&gt;Book a student mentor program in Canada. If you feel you will need a mentor to help you adjust to the new life, you can enrol for various student-mentor programs by the student council.&lt;/li&gt;\r\n	&lt;li&gt;Read the preparation emails sent by the university to you. They will include &lt;strong&gt;study in Canada guide&lt;/strong&gt; and checklists to help you prepare for the journey.&lt;/li&gt;\r\n	&lt;li&gt;Plan your budget accordingly&lt;/li&gt;\r\n	&lt;li&gt;Activate a student account on the university website.&lt;/li&gt;\r\n	&lt;li&gt;Apply for an ID card. You may have to send the email to the admission department of the university with your Name, Student Number, as well as your photograph.&lt;/li&gt;\r\n	&lt;li&gt;Research about the Fresher&amp;rsquo;s Week or Orientation program of events and sessions in Canada.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Before you leave the home country&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Buy currency&lt;/li&gt;\r\n	&lt;li&gt;Pay tuition fee deposit&lt;/li&gt;\r\n	&lt;li&gt;Pay accommodation deposit&lt;/li&gt;\r\n	&lt;li&gt;Collect all the documents you will need as an international student clearance at the university.&lt;/li&gt;\r\n	&lt;li&gt;Shop for appropriate clothes, utensils etc. which may not be easily available abroad&lt;/li&gt;\r\n	&lt;li&gt;Pack your luggage appropriately.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;We can see that there is 51 per cent of students applying for permanent residence in Canada. For the students who want to study in Canada and are a bit nervous to get adjusted in the atmosphere in Canada should know that and 14 per cent of the Canadian population are of International students.&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;');
INSERT INTO `maincontent` (`id`, `title`, `cntry_id`, `content`) VALUES
(7, 'cost', 4, '&lt;p&gt;Canada is slowly becoming one of the top educational destinations among English-speaking countries. While the Cost of Study in Canada can seem quite high for some, they are among the lowest in English speaking countries like the USA, UK or Australia. However, the quality of Canadian education is excellent, with students from Canadian Universities performing very well in the international job market.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/project/admin/upload/1884407569.png&quot; style=&quot;height:183px; width:400px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition Fees in Canada for International Students:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Universities in Canada&lt;/span&gt;&lt;/a&gt; set their own fees. The fees vary depending on the course, and international students are usually charged more than indigenous students. Undergraduate and cost of study in Canada fees are usually higher, while the fees for Post Graduate programs are lower.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Average Cost of University in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Public universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Public Universities are heavily subsidized by the government, so the fees are lower. The fees at public universities start at around 5000 CAD/year and go up from there.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Private Universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Private colleges tend to have higher fees as compared to public universities. Depending on the course, the fees for Indian students usually hover somewhere between C$20,000 to C$30,000 per year as the cost of study in Canada, including living expenses. The tuition fees can be partially offset by taking a job.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Canadian Universities with Low Tuition fees for International Students&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Student debt is a problem for Indian students who wish to &lt;a href=&quot;https://www.jeduka.com/study-in-canada&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;study in Canada&lt;/span&gt;&lt;/a&gt;. The cost of living in Canada is quite high and combined with heavy fees, students often end up burdened with enormous amounts of debt. However, certain universities have significantly lower fees, ranging from C$5000 to C$11,000. The following list of universities in Canada is among the most affordable for International students&amp;nbsp;to help them lower their cost of study in Canada.&lt;/p&gt;\r\n\r\n&lt;table align=&quot;left&quot; border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;0&quot; class=&quot;bg-success&quot; style=&quot;width:500px&quot;&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;text-align:center&quot;&gt;Affordable University&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;text-align:center&quot;&gt;Canada University Fees&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Dominican University College&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;5000 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Brandon University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;6219 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Universit&amp;eacute; de Saint-Boniface&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;6420 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Canadian Mennonite University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;7560 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Memorial University Of Newfoundland&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;8800 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Southern Alberta Institute of Technology&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;5000-7000 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;The King&amp;#39;s University College&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;9920 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Athabasca University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;9440-10490 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Canadian Mennonite University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;7728 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Universit&amp;eacute; de Moncton&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;10270 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Saint Paul University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;9836 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Universite&amp;rsquo; Sainte- Anne&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;8820 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Mount Royal University&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;11121 CAD/year&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition fees at top-ranked universities:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Usually, the cost of study in Canada at the top-ranked universities&amp;nbsp;is quite high. However, the&amp;nbsp;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;top universities in Canada&lt;/span&gt;&lt;/a&gt;&lt;strong&gt; &lt;/strong&gt; are surprisingly affordable. The University of Toronto charges an average tuition fee of 38,000 CAD/year, which is quite high. However, the other top ranked universities don&amp;rsquo;t even go above 10,000 CAD/year.&lt;/p&gt;\r\n\r\n&lt;p&gt;The University of British Columbia charges an average tuition fee of 8,500-9,000 CAD/year,&lt;/p&gt;\r\n\r\n&lt;p&gt;McGill University charges an average tuition fee of 8,000 CAD/year, and the University of Montreal charges an average tuition fee of 10,000 CAD/year.&lt;/p&gt;\r\n\r\n&lt;p&gt;The Cost of Study in Canada for MS for an international student can be around $16,250 and CAD $28,650 per year depending on the field of study.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Cost of Study in Canada, as per Various Study Fields:&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;The tuition fees for different courses and universities will be different. Here, we have listed the average tuition fees for Canadian Universities as far as international students are concerned. The fees, as mentioned, are an average and no way reflect the tuition fees you will have to pay for a particular course or a university. The numbers are just an indication of what an average international student pays, for a particular field of study and can be above or below your actual total cost of study in Canada. For Example, the cost of studying BBA in Canada would be around 25 to 45K depending on the business school. The cost of studying pharmacy for postgraduate is far more affordable than graduate courses, and the same is the case with the cost of studying law in Canada. For some of the most popular courses, like cost of studying computer science in Canada or &lt;strong&gt;Cost of studying nursing&lt;/strong&gt; in Canada, the average costs are given below:&lt;/p&gt;\r\n\r\n&lt;p&gt;The numbers are annual numbers and in Canadian Dollars. Here is the Cost of Studying abroad in Canada as per various fields of study:&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;table border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;0&quot; style=&quot;width:90%&quot;&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;background-color: rgb(51, 153, 153);&quot;&gt;Average Cost of Study in Canada&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;background-color: rgb(51, 153, 153);&quot;&gt;Cost of Undergraduate Study in Canada&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;background-color: rgb(51, 153, 153);&quot;&gt;Cost of Postgraduate Study in Canada&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;&amp;nbsp;Agriculture, natural resources and conservation&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;26,208&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;14,452&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Architecture&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;26,457&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;23,992&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Business, management and public administration&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;28,680&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;24,693&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Dentistry&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;56,621&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;22,472&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Education&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;20,875&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Engineering&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;33,703&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;19,301&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Humanities&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;28,676&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;13,667&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Law&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;33,192&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;17,237&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Mathematics, computer and information sciences&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;33,012&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;16,647&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Medicine&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;32,450&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;-&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Nursing&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;21,922&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;16,168&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Other health, parks, recreation and fitness&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;24,626&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;18,551&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Personal, protective and transportation services&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;20,332&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;13,796 (in 2017-18)&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Pharmacy&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;40,960&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;12,876&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Physical and life sciences and technologies&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;31,536&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;15,421&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Social and behavioural sciences, and legal studies&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;27,647&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;15,032&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Veterinary medicine&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;63,323&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;10,099&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Visual and performing arts, and communications technologies&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;25,127&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;14,737&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;BBA&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;25,000-45,000&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Not Applicable&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Executive MBA&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Not Applicable&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;66,665&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Regular MBA&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Not Applicable&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;38,950&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;Source: &lt;a href=&quot;https://www.statcan.gc.ca/eng/start&quot;&gt;&lt;span style=&quot;color:#0033ff&quot;&gt;Statistics Canada&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Scholarships for International Students in&amp;nbsp;Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;There are plenty of &lt;a href=&quot;https://www.jeduka.com/scholarships-in-canada&quot;&gt;&lt;span style=&quot;color:#0033ff&quot;&gt;scholarships in canada&lt;/span&gt;&lt;/a&gt; for International students. Deserving students can choose from a variety of scholarships they can apply for. Canadian Scholarships fall into three different segments - Government Scholarships, Non-governmental Scholarships to study in Canada and Scholarships by Universities. There are scholarships for all degrees, from Graduate to &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/masters-in-canada&quot;&gt;Masters in Canada&lt;/a&gt;&lt;/strong&gt;,&amp;nbsp;and they help in reducing the cost of study in Canada for international students.&lt;/p&gt;\r\n\r\n&lt;table align=&quot;center&quot; border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;0&quot; style=&quot;width:80%&quot;&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th colspan=&quot;2&quot; scope=&quot;col&quot; style=&quot;background-color: rgb(102, 153, 204);&quot;&gt;List of Scholarships in Canada&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Government Scholarships&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;International Student Scholarships at Humber College Canada&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Banting Postdoctoral Fellowship&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;McGill University Scholarships and Student Aid&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Canada Graduate Scholarships &amp;ndash; Master&amp;rsquo;s Program&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Queen&amp;rsquo;s University International Scholarships&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;IDRC Research Awards&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;UBC International Leader of Tomorrow Award&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;NSERC Postgraduate scholarships&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;UBC Graduate Scholarships&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Vanier Canada Graduate Scholarships Program&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Alberta International Scholarships&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Non-Governmental Scholarships&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Calgary International Scholarships&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Anne Vallee Ecological Fund&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Manitoba Graduate Fellowships&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Trudeau Scholarships and Fellowships&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Saskatchewan International Student Awards&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Scholarships by Universities&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Toronto Ontario Graduate Scholarship&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Carleton University Awards for International Students&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;University of Waterloo International Funding&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Concordia University International Undergraduate Award&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Simon Fraser University Financial Aid and Awards&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Dalhousie University Scholarships.&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Western University International Admission Scholarship&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Fairleigh Dickinson Scholarships for International Students&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;York University International Student Program&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;HEC Montr&amp;eacute;al BBA Entrance Scholarships&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;&lt;a href=&quot;https://www.jeduka.com/scholarships-in-canada&quot;&gt;&lt;strong&gt;More Scholarships in Canada&lt;/strong&gt;&lt;/a&gt;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Student Loan For Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;If you are applying through SDS, you will have to invest in a GIC of 10000 CAD. If you are exhausted of all your options with the funds, International Students Loan in Canada is the way to fund your Cost of study in Canada.&amp;nbsp;Most provincial Loans are limited to Canadian students only. So if you are an international student looking to study in Canada and need an education loan, you might have to look for private providers.&lt;/p&gt;\r\n\r\n&lt;p&gt;For the timelines to prepare documents and apply for education loans, make sure you have a thorough understanding of deadlines and &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/intakes-in-canada&quot;&gt;Intakes in Canada&lt;/a&gt;&lt;/strong&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Education Loans, along with scholarships are the easiest ways to fund your studies while studying abroad because they are meant for students, the repayment is flexible. The amount is high enough to pay for the fees, but the interest rates are lower. There are also some loans that have repayment options after graduation.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;​​Cost of living in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;div id=&quot;living_costs&quot;&gt;\r\n&lt;div&gt;\r\n&lt;p&gt;&lt;u&gt;&lt;a href=&quot;https://www.jeduka.com/canada/student-visa-for-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Canadian Visa requirements for Indian students&lt;/span&gt;&lt;/a&gt;&lt;/u&gt; state that they should have at least 10,000 CAD in their accounts, over and above the money required for tuition. However, the cost of living varies according to location. Certain parts of Canada are significantly more expensive than others, with Vancouver maintaining its position as the most expensive Canadian city to live in. Quebec, on the other hand, has significantly lower prices.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Accommodation in Canada for International Students:&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Accommodation cost would result in the most significant part of the cost of study in Canada. Toronto is one of the most expensive cities in Canada to be in, however, the accommodation part of the cost of Study in Canada will still be affordable than the neighbouring USA, just like the cost of University in Canada vs USA. The monthly cost of accommodation in Toronto can be anywhere between CAD $1080 to $2900. In smaller cities like Saint John&amp;rsquo;s, Newfoundland, the cost of accommodation will be around CAD $710. Montreal and some parts of Quebec can have as low accommodation costs as CAD $550.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Food and Transportation:&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Again, the food and transportation costs in Canada will depend on how one chooses to eat and travel. A large number of students choose to cook for themselves rather than eating out as it is one of the most affordable and healthier ways to go by. The monthly groceries will cost you CAD 200 to 400 depending on your location and preferences. For the lazy Sundays and days when you do not want to cook, lunch or dinner will cost you around 18 to 25 Canadian Dollars.&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Depending on the city or town you are in, the transportation and monthly plans vary as given below. Here is all you need to know:&lt;/p&gt;\r\n\r\n&lt;table align=&quot;left&quot; border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;0&quot; style=&quot;width:70%&quot;&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;text-align: center;&quot;&gt;Cities in Canada&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot; style=&quot;text-align: center;&quot;&gt;Food Costs in CAD (Groceries/Month)&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;Transportation in CAD&lt;/th&gt;\r\n			&lt;th scope=&quot;col&quot;&gt;Basic Lunch/Dinner CAD&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Toronto&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$200 - $400&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$122&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$17&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Montreal&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$350&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$80&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$16&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;Saint John&amp;rsquo;s&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$240&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$77&lt;/td&gt;\r\n			&lt;td style=&quot;text-align:center&quot;&gt;$&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Other Costs that come with Studying in Canada:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;There are also some essentials and maintenance costs that one cannot simply live without. Be it Electricity, water, Garbage, etc. The ever essential mobile and internet charges can be around CAD $50 to $70.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Miscellaneous (Electricity, Water, Heating, etc.): Around CAD $ 150 per Month&lt;/li&gt;\r\n	&lt;li&gt;Internet: CAD $50 to CAD $70 per month&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;International Student Health Insurance:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;It is mandatory to have health insurance as an international student during your stay in Canada. For Provinces like Alberta, British Columbia, New Brunswick, Newfoundland and Labrador, and Saskatchewan, students can opt for State Health Insurance. Whereas for provinces like Manitoba, Nova Scotia, Ontario, Prince Edward Island or Quebec, the students will have to go for Private Health Insurances. The Cost of International Student&amp;nbsp; Health Insurance would be around CAD $600 to CAD $900.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Canada Student Visa Cost:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The visa cost for international students is CAD $150. For &lt;a href=&quot;https://www.jeduka.com/canada/student-visa-for-canada&quot;&gt;Student Visa for Canada&lt;/a&gt;, this is the application fees a student will have to pay&lt;/p&gt;\r\n\r\n&lt;p&gt;Also, keep in mind that international students have to show the funds of around CAD $10,000 apart from their tuition fees as their funds to prove that they can sustain themselves for one year of stay.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cost of Study in Canada for Indian Students The Study in Canada cost in&amp;nbsp;rupees is fixed amount in a bank account as far as the student visa is concerned. The requirement, as we have mentioned is CAD 10000, which, at the rate of 53 INR for 1 CAD, converts to 530000. However, with tuition fees and other expenses, students are usually advised to have at least 10,00,000 to 12,00,000 INR. Coming to the Canadian Student Visa Fees in Indian Rupees, the amount is around 8000 INR.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;');
INSERT INTO `maincontent` (`id`, `title`, `cntry_id`, `content`) VALUES
(8, 'intake', 4, '&lt;p&gt;Canada - Obviously a proud country. Getting an immense number of international students every year. Yes, it&amp;#39;s a hub of global talents. Aiming for the best in world education and a gaining opportunity to study in the world&amp;rsquo;s top universities. 494,525 is the number reported for the international students in Canada at all levels of study in 2017 - Says Canadian Bureau for International Education. Isn&amp;rsquo;t a wow making figure? Of course, it does.&lt;/p&gt;\r\n\r\n&lt;p&gt;Yes, You can&amp;rsquo;t miss the World&amp;rsquo;s 4th most popular destination for International Students.&amp;nbsp;you can take admission in the following are 3 &lt;a href=&quot;https://www.jeduka.com/intakes-in-canada&quot; target=&quot;_blank&quot;&gt;intakes in Canada&lt;/a&gt; and experience the best of life.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Fall Intake&lt;/li&gt;\r\n	&lt;li&gt;Winter Intake&lt;/li&gt;\r\n	&lt;li&gt;Summer Intake.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Why study in Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Often the question arises in the minds that &lt;strong&gt;why international students choose to study in Canada&lt;/strong&gt;. Here is the answer to it:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;You will have various options to choose from big or small universities and small-town or city universities. There are 26 universities of Canada which are featured in the world&amp;rsquo;s best universities. In which, three of them are listed in the global top 100.&lt;/li&gt;\r\n	&lt;li&gt;It has a beautiful land with urban development along with its non-discriminatory society.&lt;/li&gt;\r\n	&lt;li&gt;Canada is one of the safest countries to stay temporarily, study and settle permanently. Research states that 95% of International people prefer or recommend Canada as the study abroad destination.&lt;/li&gt;\r\n	&lt;li&gt;International Students can experience an active and diverse lifestyle in this wonderful country and enjoy great health care benefits, and the politeness of the locals which is the thing that Canada is most known for.&lt;/li&gt;\r\n	&lt;li&gt;Students will have plenty of excellent opportunities to meet minded people and gain valuable international student experience through different student clubs and organisations.&lt;/li&gt;\r\n	&lt;li&gt;It is believed that graduates from universities in Canada enjoy productive and successful careers.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Now you can answer that &lt;strong&gt;is it worth studying in Canada &lt;/strong&gt;or not.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;academic_stature&quot;&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Education System in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;Like many other countries, Canada also has a straight forward Education System divided into these chronological levels of certification/titles for those who want to Study in Canada:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Early Childhood Education (Kindergarten or Grade Primary)&lt;/li&gt;\r\n	&lt;li&gt;Elementary Education (Grade 1 to 6)&lt;/li&gt;\r\n	&lt;li&gt;Intermediate Education (Grade 7 &amp;amp; 8)&lt;/li&gt;\r\n	&lt;li&gt;Secondary Education (Grade 9 to 12)&lt;/li&gt;\r\n	&lt;li&gt;Tertiary Education (College / Universities for UG and PG)&lt;/li&gt;\r\n	&lt;li&gt;PhD and Doctoral Studies&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;In Canada, each province and territory are responsible for its higher education at all the educational levels within it including universities, there is no federal accreditation. This means that each province and territory in Canada set their own standards of &lt;strong&gt;higher education in Canada&lt;/strong&gt; and manage the issues if any, and these are strict to ensure quality. Most international students opting for Canada will choose to pursue their Bachelors or &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/masters-in-canada&quot;&gt;Masters in Canada&lt;/a&gt;&lt;/strong&gt;. To know more about Education System in Canada,&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada courses&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Though Universities in Canada offer a broad range of good courses for international students few of the courses are more popular than the others. The top courses in Canada are&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Business &amp;amp; Finance&lt;/li&gt;\r\n	&lt;li&gt;Core Engineer and Engineering (Mechanical, electrical &amp;amp; civil)&lt;/li&gt;\r\n	&lt;li&gt;Computer &amp;amp; IT related&lt;/li&gt;\r\n	&lt;li&gt;Bio-science, Medical &amp;amp; Healthcare&lt;/li&gt;\r\n	&lt;li&gt;Media &amp;amp; Journalism&lt;/li&gt;\r\n	&lt;li&gt;Agriculture science&lt;/li&gt;\r\n	&lt;li&gt;Arts, Psychology &amp;amp; Human Resources&lt;/li&gt;\r\n	&lt;li&gt;Hospitality Management&lt;/li&gt;\r\n	&lt;li&gt;Architecture&lt;/li&gt;\r\n	&lt;li&gt;Culinary Management&lt;/li&gt;\r\n	&lt;li&gt;Dentistry.&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;You will get various types of course and all the 3 levels of education Bachelor&amp;#39;s, Masters and Doctorate levels. To know &lt;strong&gt;which is the best course to study in Canada &lt;/strong&gt;you can check:&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada after 10th&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;After the 10th in your home country, you have to select some special subject which you want to study in Canada. You can discuss with those who have joined the course after 10th standard. Before taking any decision, you can search online for courses in Canada after the 10th. You can choose the stream of your study so that you can gain mastery in it after completing high school. After 10th class in Canada, you can take admission in any of the vocational courses as well.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;&lt;strong&gt;Study in Canada after 12th&lt;/strong&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p dir=&quot;ltr&quot;&gt;&lt;span style=&quot;background-color:transparent&quot;&gt;Many of the international students choose to study in Canada earlier in their academic career. After schooling, or as 10+2 in many countries. The undergraduate programs have a plethora of options for international students coming to Canada. Most of the Bachelor&amp;rsquo;s degree programs in Canada are for four years, making it easier for the students who want to study Masters in other countries abroad or even in Canada, as the Master&amp;rsquo;s requirement for many countries including Canada is 12+4.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;div id=&quot;english_language&quot;&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;English Courses in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;Canada has the major two languages in speaking &amp;amp; in culture: English And French. However, you are good to go with the English as an international student in Canada. You can opt for one of the universities training for the languages. Because Canada holds diversified people coming in and living. By the time you graduate, you would be definitely speaking multiple languages. But English will remain predominant and plays a vital role here.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study in Canada Without IELTS&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;For all the students who are willing to Study in Canada, most of the Universities in Canada will ask for&amp;nbsp;proof of English Language Proficiency in the form of IELTS. However, there are some Universities in Canada without IELTS requirements. You can check out some of the top Canadian Universities that offer the opportunity to Study in Canada without IELTS:&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study in Canada Requirements&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;There are many International students who look confused about &lt;strong&gt;how to study in Canada&lt;/strong&gt;, don&amp;rsquo;t worry we will clear your doubts here. Whether you apply for a UG, PG or Diploma course, every University in Canada will have some basic requirements for the admission process.&amp;nbsp;Here is the answer to your question of, &lt;strong&gt;to study in Canada what is required&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;You will need to submit your mark sheets and transcripts of all your previous education.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Depending on the course and university, you will be asked to prove your language proficiency. Generally, IELTS or TOEFL tests scores are presented to prove English language proficiency.&lt;/li&gt;\r\n	&lt;li&gt;Two LOR (letters of Recommendation)&lt;/li&gt;\r\n	&lt;li&gt;Some executive and honours courses may be demanded in the specific field.&lt;/li&gt;\r\n	&lt;li&gt;A detailed resume including all your educational achievements, work experience and other related experience.&lt;/li&gt;\r\n	&lt;li&gt;Most colleges ask for SOP(Statement of Purpose) too, which presents your reasons for the admission in that specific course and institution, and how it will help you with your career goals.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Before making a decision check your &lt;strong&gt;study in Canada eligibility.&lt;/strong&gt; You can find all the details here for basic eligibility criteria and &lt;strong&gt;&lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/how-to-apply-in-canadian-university-college&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;How to Apply&amp;nbsp;to Study in Canada for UG, PG and Diploma Courses&lt;/span&gt;&lt;/a&gt;:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/english-language-requirements-for-universities-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;English Language Requirements: IELTS and TOEFL Scores&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;2. &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/admission-requirements-for-ug-pg-and-diploma-course-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Eligibility Criteria &amp;amp; Admission Requirements to Study in Canada&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Exams to study in Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Many international students have a question as &lt;strong&gt;which exam is required for study in Canada.&lt;/strong&gt; To study in Canada international students need to prove their language efficiency and aptitude to get enrolled in their chosen institution. Canada is a bilingual country having two languages, English and French. The language requirement may change depending upon the area. The different universities or institutions demand various exams score depending upon course or program before giving admission to the student. Some of these are:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;International English language Testing System (&lt;a href=&quot;https://www.jeduka.com/ielts-exam&quot; target=&quot;_blank&quot;&gt;IELTS&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Test Of English as a Foreign Language (&lt;a href=&quot;https://www.jeduka.com/toefl-exam&quot; target=&quot;_blank&quot;&gt;TOEFL&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Pearson Test of English (&lt;a href=&quot;https://www.jeduka.com/pte-exam&quot; target=&quot;_blank&quot;&gt;PTE&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Graduate Record Exam (&lt;a href=&quot;https://www.jeduka.com/gmat-exam&quot; target=&quot;_blank&quot;&gt;GRE&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;General Management Aptitude Test (&lt;a href=&quot;https://www.jeduka.com/gmat-exam&quot; target=&quot;_blank&quot;&gt;GMAT&lt;/a&gt;)&lt;/li&gt;\r\n	&lt;li&gt;Medical College Admission Test (MCAT)&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;div id=&quot;joy_of_living&quot;&gt;\r\n&lt;div&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Student life in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;If you&amp;rsquo;re thinking of moving to Canada and think of whether that stays stable is not gonna happen. Because Canada is indeed a huge country. Canada is uniquely engraved in the realm of God on this planet. As the country has five time zones along with the long stretching of Pacific and Atlantic ocean.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Canada is the country of beautiful landscapes and dramatic mountains. There is a different lifestyle in different cities and also it is quite different from other countries as well. The students who study abroad in Canada will get to see the best in their life here.&lt;/li&gt;\r\n	&lt;li&gt;The student orientations ensure that the international students feel welcome and get settled down on the campus properly.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;The Canadian classes are very interactive and research-based. So, it is important that you be concentrated enough to last in your class. By paying full attention to all the lectures and working hard can bring you success in completing the studies in Canada for the betterment of your career.&lt;/li&gt;\r\n	&lt;li&gt;Currently, there are different kinds of evaluation systems that take place in the education system of Canada such as Written tests, oral examination etc which are used to evaluate the skills of the students. The students need to develop skills for presentation, work, and research to perform well in these evaluations.&lt;/li&gt;\r\n	&lt;li&gt;Overseas students can make some new friends in Canada easily. Being an international student and participating in different social and educational activities can teach you so many things and improve your knowledge.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Although the experts say that Canada is a peaceful and decent country, there are some safety measures that students need to take while moving in to study in Canada. You can also call 911 in case of any crime or problems.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;You can check this for full information: &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/know-all-about-the-student-lifestyle-in-canada&quot; target=&quot;_blank&quot;&gt;Student Life in Canada&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Cost to Study in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Well, Canada has the world&amp;rsquo;s topmost universities. But there is nothing like &amp;ldquo;So the fees are on cloud nine&amp;rdquo;. It depends on which universities you apply to and for which courses. Also, varies on the basis of being an international student and a home student.&amp;nbsp;Here are a few points to take note regarding the cost of studying in Canada&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Ontario has the most expensive tuition fees. Students pay on average CA$ 8,454 per year here.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Reports show that average tuition fees for the undergraduate programmes for international students in Canada are CA$25, 625 per annum. Here the engineering and medical sciences would be expensive as compared to the cheap courses. In Canada, pursuing an engineering degree takes an average of CA$28, 340 per annum.&lt;/li&gt;\r\n	&lt;li&gt;Whereas the post-graduation fees are comparatively lower. It varies depending on the courses you take. But at an approximate sight, sources state CA$16, 252. However, the management studies in Canada are comparatively costly than the average fees. Especially when you choose the executive programmes for MBAs. It falls approximately at CA$ 50,000.&amp;nbsp;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2 dir=&quot;ltr&quot;&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Scholarships for International Students in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;background-color:transparent&quot;&gt;There are a number of scholarships available to study in Canada for international students. Now, these scholarships can be from universities in Canada, the Canadian Government, or other entities providing scholarships. The scholarships help a large number of students in Canada with their tuition fees, transportation,travel and healthcare. There are few fully paid scholarships&amp;nbsp;that can let you study in&amp;nbsp; Canada for Free. However, they are very few and hard to get. Scholarships offering partial financial aid are large in numbers. &lt;/span&gt;There are 3 types of scholarships, under which you can find plenty. They are:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;Canadian government scholarships&lt;/li&gt;\r\n	&lt;li&gt;Non-governmental scholarships to study in Canada&lt;/li&gt;\r\n	&lt;li&gt;Universities offering scholarships in Canada&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Safety in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Public Safety Canada is a single entity unit to protect the people in Canada from crime, terrorism and natural disasters. It is connected with all the other federal entities and co-ordinates with them. The benefit of a single entity for safety means a highly prioritised and organised system to ensure the safety of the people.&lt;/p&gt;\r\n\r\n&lt;p&gt;Moreover, all the colleges and University observe the Canadian Occupational Health and Safety Act, in addition to all the municipality, provincial and Federal laws and acts. This shows how committed the government and people are with regard to safety.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;continue_working&quot;&gt;\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study and Work in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Work off-campus: &lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Working off-campus means you are studying but have permission to work outside the campus solely. Here also, you need to have a valid work consent as well as institutes permission along with the study in Canada permit.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Work on-campus: &lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Work on-campus means you&amp;rsquo;re still studying. You have a valid study in Canada permit. And you&amp;rsquo;re associated with one of the public post-secondary institutes/&lt;strong&gt;&lt;u&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;Universities in Canada&lt;/a&gt;&lt;/u&gt; &lt;/strong&gt;&amp;nbsp;Or maybe a private institute with at least funded by 50 percent of government grants. The institute keeps you or assigns your professor to work with. Or maybe you are assisting in working for the building or campus.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Canada welcomes with open arms to work there if you&amp;rsquo;re the best fit!&lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;There are always conditions where you opt for a bit of permanent residence in abroad countries. In Canada also, you need to comply with such conditions or set of rules that make sure of your eligibility for working in Canada. It can be after completion of your graduation or simultaneously while studying.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Post Graduate work permit in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;The post-graduation work permit allows international students who have graduated from the post-secondary university of Canada to obtain valuable work experience in the country. You can have the right to work full time for up to 3 years after you graduate from a Canadian university,&amp;nbsp;this is one of the reason &lt;strong&gt;why you should study in Canada&lt;/strong&gt;.&amp;nbsp;The duration of the work permit depends on the duration of your program. You are not required to work in a specific field in Canada, you can work in any field as you wish.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Study Visa in Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;International students coming to Canada require a study permit from Immigration Canada. For countries like India, China, Vietnam and the Philippines the process is done via SDS which is a faster way to get the student permit for studying in Canada. Students from other countries go through the conventional process for the student visa. There are some benefits that come with a student visa in Canada, like a part-time work permit and stay back upto three years after graduation.&amp;nbsp;If you have a question that &lt;strong&gt;can I study in Canada with work permit&lt;/strong&gt;? Then let us tell you that it is not possible, you have to apply for a study visa.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Accommodation in Canada for international students&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;They offer amenities such as townhomes. However, it is great if you get the family/ host homes. They provide you with meals 3 times a day and can have a secure staying accommodation. You will surely experience home like the atmosphere there.There are also townhouses available in some cities and areas. Where they contain three to six bedrooms and you can simply opt for single rooms. Also, there are off-campus shared apartments.&lt;/p&gt;\r\n\r\n&lt;p&gt;Also, it depends where you live again. For example, If you choose to study at the University of Toronto and live&amp;nbsp;in near St. George, it would be Costlier abodes. A room near St. George cost you approx. $625 whereas the same near University of Toronto, $530 to $540. Whereas for 1, 2 and 3 BHK apartments, an average of $1200, 1600 and 2000 approximately.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Study in Canada from India&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;You can &lt;strong&gt;study in Canada after diploma in India.&lt;/strong&gt; A study in Canada for Indian students will not be tweaking here. Because the students will find their favorable accommodations at affordable pricing if they are good at searching. Yes, patience does matter. There are some schools/institutes providing the student residence. Some may have dormitory provision with sharing option. It may have three to six students in sharing.&lt;/p&gt;\r\n\r\n&lt;p&gt;Canada is a modern and well-equipped country. You will meet a lot of new people and learn more things about the culture, people, and technologies. You will enjoy classy amenities, concerts, sports facilities and a widening scope for developing your knowledge out of the box. Canada also provides a facility for Olympic level sports.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Top Cities in Canada for International Students&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;Studying in Canada is the most sought after option for the students who want to study abroad. But Canada is the second largest country in the world. So the question of &amp;ldquo;where to study in Canada&amp;rdquo; arises. We have made a list of best student cities in Canada and the Universities in them to help you choose the best of both academic and student life: &lt;a href=&quot;http://jeduka.com/articles-updates/canada/top-student-cities-and-universities-to-study-in-canada&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Top Student Cities and Universities to Study in Canada&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Which is the best city to study in Canada ?&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Study in Toronto Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Toronto is a beautiful city in Canada, located along the shore of &amp;nbsp;Lake Ontario. Many researchers are of the opinion that Toronto deserves popularity for being the most attracted student city. Whether you are into fashion, photography,&amp;nbsp;visual arts, film, or journalism, the city has a wide range of industries within the creative field. This city is a wonderful place having plenty of opportunities. You can find more information about it here: &lt;a href=&quot;https://www.jeduka.com/canada/ontario/toronto/universities-colleges&quot; target=&quot;_blank&quot;&gt;Universities in Toronto&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Study in Calgary Canada&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Calgary is a large city located in western Canada in the province of Alberta. With open spaces, rivers, mountains and more sunshine than another city in Canada, Calgary is a beautiful place to live in. The city is popular for leisure time activities and has a most extensive bikeway system. The City attracts applications from many corners of the world in the universities in Calgary. Check this out for more information: &lt;a href=&quot;https://www.jeduka.com/canada/nunavut/calgary/universities-colleges&quot; target=&quot;_blank&quot;&gt;Universities in Calgary&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16px&quot;&gt;Study in Ottawa Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Ottawa is the capital city of Canada. It is home to some of the best educational institutes of the nation. The universities in Ottawa are some of the top-ranked universities in Canada. For international students who are planning to study in Canada, Ottawa is something that cannot be overlooked. The city is counted among those which consists of the most educated population. Visit here to know more: &lt;a href=&quot;https://www.jeduka.com/articles-updates/canada/universities-in-ottawa&quot; target=&quot;_blank&quot;&gt;Universities in Ottawa&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;&lt;span style=&quot;font-size:18px&quot;&gt;Pre-departure guide for international students Canada&lt;/span&gt;&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;To make things easier for every student preparing for the journey, we &amp;nbsp;to study in Canada, we have prepared a detailed checklist to help you. Find the list here:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Ensure that you have a non-expired passport. It should be valid for an additional six months after your course is completed.&lt;/li&gt;\r\n	&lt;li&gt;Satisfy the conditions of your university. They might ask you to provide official transcripts, language exam scores etc.&lt;/li&gt;\r\n	&lt;li&gt;Get a study visa for Canada. You should apply for a visa at least two months before the day you are planning to fly out to Canada.&lt;/li&gt;\r\n	&lt;li&gt;Finalize and book a type of accommodation in Canada. Choose from living on-campus, rented room or apartment, or any other family stay.&lt;/li&gt;\r\n	&lt;li&gt;Book your tickets to fly to Canada. You can arrange for the University to pick you from the airport if you have decided to live on campus.&lt;/li&gt;\r\n	&lt;li&gt;Go through all the required medical examinations and take vaccinations. Check the entry requirements page of the Canada immigration website if it is required in your case or not.&lt;/li&gt;\r\n	&lt;li&gt;Arrange travel insurance (optional)&lt;/li&gt;\r\n	&lt;li&gt;Book a student mentor program in Canada. If you feel you will need a mentor to help you adjust to the new life, you can enrol for various student-mentor programs by the student council.&lt;/li&gt;\r\n	&lt;li&gt;Read the preparation emails sent by the university to you. They will include &lt;strong&gt;study in Canada guide&lt;/strong&gt; and checklists to help you prepare for the journey.&lt;/li&gt;\r\n	&lt;li&gt;Plan your budget accordingly&lt;/li&gt;\r\n	&lt;li&gt;Activate a student account on the university website.&lt;/li&gt;\r\n	&lt;li&gt;Apply for an ID card. You may have to send the email to the admission department of the university with your Name, Student Number, as well as your photograph.&lt;/li&gt;\r\n	&lt;li&gt;Research about the Fresher&amp;rsquo;s Week or Orientation program of events and sessions in Canada.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Before you leave the home country&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Buy currency&lt;/li&gt;\r\n	&lt;li&gt;Pay tuition fee deposit&lt;/li&gt;\r\n	&lt;li&gt;Pay accommodation deposit&lt;/li&gt;\r\n	&lt;li&gt;Collect all the documents you will need as an international student clearance at the university.&lt;/li&gt;\r\n	&lt;li&gt;Shop for appropriate clothes, utensils etc. which may not be easily available abroad&lt;/li&gt;\r\n	&lt;li&gt;Pack your luggage appropriately.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;We can see that there is 51 per cent of students applying for permanent residence in Canada. For the students who want to study in Canada and are a bit nervous to get adjusted in the atmosphere in Canada should know that and 14 per cent of the Canadian population are of International students.&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;'),
(9, 'uni', 4, '<p>If you have just started preparing to</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(11, 'dgd', 4, '&lt;p&gt;hnjdgf gfh&lt;/p&gt;'),
(12, 'tuta', 5, '&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition Fees in Canada for International Students:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Universities in Canada&lt;/span&gt;&lt;/a&gt; set their own fees. The fees vary depending on the course, and international students are usually charged more than indigenous students. Undergraduate and cost of study in Canada fees are usually higher, while the fees for Post Graduate programs are lower.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Average Cost of University in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Public universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Public Universities are heavily subsidized by the government, so the fees are lower. The fees at public universities start at around 5000 CAD/year and go up from there.&lt;/p&gt;'),
(13, 'tutadwdqwdw', 5, '&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition Fees in Canada for International Students:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Universities in Canada&lt;/span&gt;&lt;/a&gt; set their own fees. The fees vary depending on the course, and international students are usually charged more than indigenous students. Undergraduate and cost of study in Canada fees are usually higher, while the fees for Post Graduate programs are lower.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Average Cost of University in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Public universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Public Universities are heavily subsidized by the government, so the fees are lower. The fees at public universities start at around 5000 CAD/year and go up from there.&lt;/p&gt;'),
(14, 'errty', 5, '&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition Fees in Canada for International Students:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Universities in Canada&lt;/span&gt;&lt;/a&gt; set their own fees. The fees vary depending on the course, and international students are usually charged more than indigenous students. Undergraduate and cost of study in Canada fees are usually higher, while the fees for Post Graduate programs are lower.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Average Cost of University in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Public universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Public Universities are heavily subsidized by the government, so the fees are lower. The fees at public universities start at around 5000 CAD/year and go up from there.&lt;/p&gt;'),
(15, 'regtraet ert', 5, '&lt;p&gt;rest r56y r56y 5rty rtytyki y7i 54y rty re5t&amp;nbsp; 6ty5h&lt;/p&gt;'),
(16, 'afewqar ewt4ew', 5, '&lt;p&gt;&lt;strong&gt;One big advantage of using the hosted jQuery from Google:&lt;/strong&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\nMany users already have downloaded jQuery from Google when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN&amp;#39;s will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.&lt;/p&gt;'),
(17, 'What are the Tydfg', 5, '&lt;p&gt;&lt;strong&gt;One big advantage of using the hosted jQuery from Google:&lt;/strong&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\nMany users already have downloaded jQuery from Google when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN&amp;#39;s will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.&lt;/p&gt;'),
(18, 'examindfrgdrzegve', 5, '&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Tuition Fees in Canada for International Students:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.jeduka.com/canada/universities&quot;&gt;&lt;span style=&quot;color:#0000ff&quot;&gt;Universities in Canada&lt;/span&gt;&lt;/a&gt; set their own fees. The fees vary depending on the course, and international students are usually charged more than indigenous students. Undergraduate and cost of study in Canada fees are usually higher, while the fees for Post Graduate programs are lower.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;Average Cost of University in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;Public universities in Canada:&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;Public Universities are heavily subsidized by the government, so the fees are lower. The fees at public universities start at around 5000 CAD/year and go up from there.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `mem_name` varchar(100) NOT NULL,
  `mem_title` varchar(100) NOT NULL,
  `mem_image` varchar(255) NOT NULL,
  `mem_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_name`, `mem_title`, `mem_image`, `mem_des`) VALUES
(1, 'rifayat', 'student', '7c4b1cbfe8.jpg', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(2, 'abdur rahman kazi', 'study', '7c4b1cbfe8.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(3, 'mintu', 'student', '7c4b1cbfe8.jpg', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(4, 'forhad', 'study', '7c4b1cbfe8.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(5, 'limon', 'student', '7c4b1cbfe8.jpg', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(6, 'saif', 'study', '7c4b1cbfe8.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(7, 'rahmat ullah', 'student', '309609eedf.jpg', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(8, 'abdur rahman kazi', 'study', 'f193606d67.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(9, 'baller', 'student', 'f193606d67.jpg', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(10, 'abdur rahman kazi', 'study', 'f0a7de7abbd0b49c1295b2b5357006c6.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(11, 'rifayat', 'student', '44648618732f7156c775d6b2ae1d55f1.png', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(12, 'abdur rahman kazi', 'study', 'f0a7de7abbd0b49c1295b2b5357006c6.jpg', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(13, 'rifayat', 'student', '44648618732f7156c775d6b2ae1d55f1.png', 'ewew erfhrtf ykjy yi yuiu j tyju tyuj'),
(14, 'abdur rahman kazi', 'study', '90d5899688.png', 'gdyjte 5eu56 uir6 6u rtu rt7u'),
(15, 'limon', 'tuta', '8f8a5f2185.png', 'tyj ui i78 ui');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `other_id` int(11) NOT NULL,
  `other_title` varchar(100) NOT NULL,
  `other_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`other_id`, `other_title`, `other_content`) VALUES
(1, 'our focus', 'The MediaQueryData.padding value defines areas that might not be completely visible, like the display \"notch\" on the iPhone X. The scaffold\'s body is not inset by this padding value although an appBar or bottomNavigationBar will typically cause the body.'),
(2, 'dfgdfgdfgfg', 'At Collegepond, our foremost endeavor is to make your profile stand out by presenting it in the most optimal way, to help you secure admits from top-notch institutions across the globe. We highlight your strengths and address any weaknesses or shortcomings in your academic background, work experience or extracurricular activities.'),
(3, 'Misson', 'This is done for easier customization from the moment you start using Bootstrap.'),
(4, 'Visson', 'This is done for easier customization from the moment you start using Bootstrap.');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(150) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_content`) VALUES
(1, 'about ds', '&lt;p&gt;ergerwg 6yhu 567u 67i 67i 67u6 yuir&lt;/p&gt;'),
(2, 'privacy policy', '&lt;div class=&quot;grey wpb_content_element wpb_text_column&quot;&gt;\r\n&lt;div class=&quot;wpb_wrapper&quot;&gt;\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Collegepond is an online/offline career counselling, test preparation and admissions counselling outfit. Our primary goal is to assist you with high-quality career guidance to ensure your dream to study abroad is met with stupendous success. Our strength lies in highlighting the most optimal path in helping you achieve your career ambitions. Merely getting into the college of your dreams may not get you the desired success in your future endeavors. Your success depends on the approach you follow and the crucial decisions you take at every juncture of your journey-be it higher education or your working life. Based on our experiences of providing counseling services to overseas education aspirants and inputs received from students who made it to Wall Street and Silicon Valley, became entrepreneurs, and pursued other chosen walks of life, we believe that, prior to embarking on a journey to higher education, a clear, well thought-out strategy is required.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;div class=&quot;tm-spacer&quot; id=&quot;tm-spacer-5f58b2a114ff3&quot;&gt;&amp;nbsp;&lt;/div&gt;'),
(4, 'dgd tyhj tyhjut', '&lt;p&gt;dfh rtfhrt rtyh rth dftgh&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `rev_name` varchar(255) NOT NULL,
  `rev_image` varchar(255) NOT NULL,
  `rev_cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `rev_name`, `rev_image`, `rev_cmt`) VALUES
(1, 'venila', 'c7371d6c36.jpg', 'i am here bro'),
(2, 'limon khan', '3865420799.png', 'i am a limon'),
(3, 'limon khan', '6ede370f00.png', 'fdgdfg'),
(4, 'choto', 'c7371d6c36.jpg', 'i am here bro'),
(5, 'dsgf', '3865420799.png', 'i am a limon'),
(6, 'khan', '6ede370f00.png', 'fdgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `slide_image` varchar(255) NOT NULL,
  `image_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `image_type`) VALUES
(1, 'slide1', 'slide1.jpg', 0),
(2, 'slide2', 'slide2.jpg', 0),
(3, 'slide3', 'slide3.jpg', 0),
(4, 'onenum', 'slide2.jpg', 1),
(5, 'slide3', 'slide3.jpg', 0),
(15, 'limon nh', '7c4b1cbfe8.jpg', 2),
(16, 'University of Chicago', 'b6d88f150b.jpg', 2),
(17, 'coto don', 'slide1.jpg', 0),
(18, 'limon nh', 'slide2.jpg', 2),
(19, 'University of Chicago', 'slide3.jpg', 2),
(20, 'coto don', 'slide3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_pass` varchar(255) NOT NULL,
  `cus_country` varchar(255) NOT NULL,
  `cus_state` varchar(100) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `cus_phone` varchar(100) NOT NULL,
  `cus_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_email`, `cus_pass`, `cus_country`, `cus_state`, `cus_address`, `cus_phone`, `cus_code`) VALUES
(1, 'Md Sravon', 'kaziar42@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bangladesh', 'dhaka', 'barua parulia(raton kazi),khilkhet,Dhaka-1229', '01834920142', '1229'),
(2, 'mr nikilon', 'tmi@gmail.com', '202cb962ac59075b964b07152d234b70', 'bangladesh', 'dhaka', 'ac,gerg', '01834920142', '1229'),
(3, 'mintu hasan', 'mintu@gmail.com', '6531401f9a6807306651b87e44c05751', 'canada', 'sylet', '2268 Kincheloe Road, 231', '01834920142', '10071'),
(4, 'Kay Boyle', 'kay@email.com', '$2y$10$PIN0qQD8XS7VQC9joXbHj.gYNTu1NzpXdsk1cxPRQTvgVszriBfJK', 'bangladesh', 'dinajpur', '232,khilkhet,dhaka-1229, 232', '575687889', '1229'),
(5, 'Kay Boyle', 'ami@gmail.com', '$2y$10$Db/4uTg/9gU3OENwmmeEzeSlL19InQDo2eOEsNTDv8ZwZJNa9/XHC', 'india', 'dhaka', '2268 Kincheloe Road, 231', '46576786789', '10071'),
(6, 'md limon', 'sabbir@gmail.com', '$2y$10$C2R7p6YZspk5xEMx2PA8tOq3.5sDNgpVK0l73AeXFetQcDln4ZVEW', 'bangladesh', 'dhaka', 'barua parulia,khilkhet,Dhaka-122', '01834920142', '1229'),
(7, 'abdur rahman kazi', 'rifayat@gmail.com', '$2y$10$MOseHZkpjxNtiJHDfRV4Fe1cM7iN8fjaWY.LI4gcs7xm8WHN5YnHS', 'bangladesh', 'dinajpur', 'rgtf', '01834920142', '1229'),
(8, 'tanvir mehrab', 'mehrab@gmail.com', '$2y$10$3h.KVGzLceyfFAdy5T4u2umAIfUBdOmPlhZHZGeJVMTlHvxIEo6ii', 'bangladesh', 'dinajpur', 'dhaka,gui', '012344', '1229');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(200) NOT NULL,
  `country_id` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `established` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `link` varchar(100) NOT NULL,
  `uni_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `uni_name`, `country_id`, `location`, `established`, `type`, `link`, `uni_image`) VALUES
(9, 'oxford university', '5', '5807 S Woodlawn Ave, Chicago, IL 60637, USA ,  Illinois', 1890, 0, 'arksss.com', '29660bc795.png'),
(10, 'malbrone university', '5', '5807 S Woodlawn Ave, Chicago, IL 60637, USA ,  Illinois', 1890, 0, 'arksss.com', '5ba24fda68.jpg'),
(11, 'Stanford University', '5', '450 Serra Mall, Stanford, CA 94305, USA ,  California', 1890, 1, 'https://www.uchicago.edu/', 'c8953b8f86.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `examcontent`
--
ALTER TABLE `examcontent`
  ADD PRIMARY KEY (`examcontent_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `image_list`
--
ALTER TABLE `image_list`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `maincontent`
--
ALTER TABLE `maincontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`other_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examcontent`
--
ALTER TABLE `examcontent`
  MODIFY `examcontent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_list`
--
ALTER TABLE `image_list`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `maincontent`
--
ALTER TABLE `maincontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `other_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
