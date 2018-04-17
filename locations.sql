-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 02:42 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_data_wah_cantt`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `general_type` int(11) DEFAULT NULL,
  `description` text CHARACTER SET latin1,
  `lat` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lng` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `general_type`, `description`, `lat`, `lng`) VALUES
(1, 'FATIMA JINNAH AVENUE', 6, 'Fatima Jinnah Degree College for Women, A-3, Officer Colony, The Mall, Wah Cantt. Degrees small bulletB.A/B.Sc Intake 200 Validity: Session 2015-16 & 2016-17 Compulsory: English (Lang.),Islamic Studies/Ethics,Pakistan Studies, Elective: Physics,Political ', '33.75193', '72.776084'),
(2, 'LABAIK BAKERS', 2, NULL, '33.751882', '72.776293'),
(3, 'BROADWAY BAKERS', 2, NULL, '33.752039', '72.776466'),
(4, 'STUDENT BOOK CENTER', 7, NULL, '33.753158', '72.774368'),
(5, 'GYMNASIUM', 6, NULL, '33.754116', '72.774191'),
(6, 'POF WALFARE HALL', 6, NULL, '33.754116', '72.774191'),
(7, 'POF SWIMMING POOL', 6, NULL, '33.7551', '72.772132'),
(8, 'POF SPORTS BAORB', 6, NULL, '33.754116', '72.774191'),
(9, 'WALFARE FOOTBALL GROUND', 6, NULL, '33.754613', '72.775026'),
(10, 'JAMIYA MASJID MUHAMADI', 8, NULL, '33.752376', '72.774204'),
(11, 'ALMAKKAH SHOPING MART', 10, NULL, '33.752816', '72.77552'),
(12, 'IMAMBARGAH', 8, NULL, '33.755841', '72.772677'),
(13, 'JAMIYA MASJID WAH CANTT', 8, NULL, '33.762383', '72.770608'),
(14, 'POF WELFAER COMPUTER CENTER', 6, 'Pof COMPUTER TRAINING CENTRE is the the name of Excellence aiming to provide quality of education in the field of Computer and Information Technology. It gives me an immense pleasure to welcome you at the website of Pof Computer Training Centre, one of th', '33.762176', '72.770664'),
(15, 'AL-SAMAD RESTAURANT', 2, 'Pof COMPUTER TRAINING CENTRE is the the name of Excellence aiming to provide quality of education in the field of Computer and Information Technology. It gives me an immense pleasure to welcome you at the website of Pof Computer Training Centre, one of th', '33.762243', '72.770747'),
(16, 'UNIQUE BAKERS', 2, 'Pof COMPUTER TRAINING CENTRE is the the name of Excellence aiming to provide quality of education in the field of Computer and Information Technology. It gives me an immense pleasure to welcome you at the website of Pof Computer Training Centre, one of th', '33.762341', '72.770566'),
(17, 'ALLIDE BANK', 3, 'The Bank started out in Lahore by the name Australasia Bank before independence in 1942; and became Allied Bank of Pakistan in 1974. In August 2004, because of capital reconstruction, the Bankâ€™s ownership was transferred to a consortium comprising Ibrahim', '33.762341', '72.770566'),
(18, 'NADRA REGISTEATION CENTER', 9, 'NADRA field operations are controlled through eight Regional Headquarters. Each Regional Headquarter has varying numbers of Zonal offices which are responsible for controlling NADRA Registration Centers operating in their area of responsibility. Number of', '33.762734', '72.770549'),
(19, 'PTCL OFFICE', 9, 'Pakistan Telecommunication Company Limited (PTCL) is the largest integrated Information Communication Technology (ICT) company of Pakistan. With a humble start from a telephone and telegraph department in 1947, it has evolved to offer latest digital and t', '33.762806', '72.769895'),
(20, 'PAKISTAN POST OFFICE', 9, 'Pakistan Telecommunication Company Limited (PTCL) is the largest integrated Information Communication Technology (ICT) company of Pakistan. With a humble start from a telephone and telegraph department in 1947, it has evolved to offer latest digital and t', '33.763206', '72.769355'),
(21, 'CONTONMENT BAORD OFFICE', 9, 'WELCOME TO CANTONMENT BOARD WAH Wah was declared as Cantonment in the year 1949 and its limits were notified vide Gazette Notification No. 732/49 dated 02/9/1949. At that time it included mainly POF Estate areas and some private lands. In the year 1951, t', '33.763853', '72.768733'),
(22, 'ELECTRICAL COMPLAINT OFFICE', 9, 'At K-Electric we seek to provide you with consistent quality service. We are working hard to improve our customer care, and your feedback is an essential component of this process. We provide electricity to Karachi, the â€˜City of Lightsâ€™. K-Electric Limite', '33.764389', '72.769144'),
(23, 'NATIONAL BANK OF PAKISTAN', 3, 'NBP maintains its position as Pakistan\'s Premier Bank with a network of over 1450+ domestic branches , 21 international branches, 2 international Subsidiaries and 3 international Representative Offices. The Bank also has presence in the UK through United ', '33.764196', '72.768406'),
(24, 'KEYANI RESTAURANT', 2, 'We are proud to be the best restaurant in Wah Cantt for the past 30 years, the secret to our success being no compromise on quality of food and the service we provide! Success of Keyani Restaurant is as much a result of the gap that existed in the marketp', '33.764354', '72.766811'),
(25, 'UBL BANK', 3, 'United Bank Limited (UBL) is one of Pakistanâ€™s largest banks in the private sector. The bank operates a network of over 45,000 customer touch-points which include 1,390+ branches across Pakistan and 19 branches overseas. It was declared Pakistanâ€™s â€˜Best B', '33.764409', '72.768011'),
(26, 'HBL BANK', 3, 'HBL was the first commercial bank to be established in Pakistan in 1947. Over the years, HBL has grown its branch network and maintained its position as the largest private sector bank with over 1,700 branches and 2,000 ATMs globally and a customer base e', '33.764748', '72.767818'),
(27, 'AGHA KHAN UNIVERSITY', 1, 'Welcome to Medical Câ€‹entres The Aga Khan University Hospital Medical Centres, offer doctor clinics, laboratory testing and in some cases, pharmacy services. It is designed to provide primary healthcare services to patients near their home. These Medical C', '33.764674', '72.767566'),
(28, 'AGHA KHAN HOSPITAL', 4, 'Welcome to Medical Câ€‹entres The Aga Khan University Hospital Medical Centres, offer doctor clinics, laboratory testing and in some cases, pharmacy services. It is designed to provide primary healthcare services to patients near their home. These Medical C', '33.764674', '72.767566'),
(29, 'MCB BANK', 3, 'MCB Bank Ltd shares are traded on the Pakistan Stock Exchange . The information presented within MCB Investor Relations is obtained by MCB Bank from accurate and reliable sources. All information is provided on an as-is basis without any kind of warranty ', '33.764693', '72.767627'),
(30, 'CAPRI CONTINALTAL BAKERS', 2, 'Our main goal is to create an atmosphere that allows the guest to feel, "Truly At Home - Away from Home." Location, flexibility, technology and service define the meeting spaces at Capri Continental Wah Cantt, making it the ideal venue for any occasion. W', '33.765036', '72.767719'),
(31, 'KHAWAJA MADICAL HALL', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765103', '72.767037'),
(32, 'MCB BANK', 3, 'MCB Bank Ltd shares are traded on the Pakistan Stock Exchange . The information presented within MCB Investor Relations is obtained by MCB Bank from accurate and reliable sources. All information is provided on an as-is basis without any kind of warranty ', '33.765135', '72.766987'),
(33, 'MARHABA BAKERS', 2, 'Donâ€™t forget to check out our fresh and sweet cakes for special occasions! marhaba bakers makes mouth watering, fresh and delicious Pizzas, Cakes, Salads, Cookies, Fast food items and lots of other stuff. From small towns to distant locations, millions of', '33.765543', '72.766469'),
(34, 'SUMMIT BANK', 3, NULL, '33.765701', '72.766328'),
(35, 'BANK OF PANJAB', 3, NULL, '33.765729', '72.766178'),
(36, 'PALACE BAKERS', 2, NULL, '33.765815', '72.766043'),
(37, 'NATIONAL SAVINGS BANK', 3, NULL, '33.765916', '72.766049'),
(38, 'KENTUCKET FAST FOOD', 2, NULL, '33.766191', '72.765843'),
(39, 'MOROSO P2P1', 2, NULL, '33.766174', '72.765699'),
(40, 'NASHEMAN SCHOOOL', 1, NULL, '33.743395', '72.790494'),
(41, 'MASHAL COLLAGE', 1, 'Mashal Degree College had its humble beginning in 1993 in the building of Nasheman (School for Special Education, Wah Cantt). It was temporarily shifted to Welfare School in 1995 owing to the rapid increase in the number of students. Now it is a constitue', '33.741547', '72.792452'),
(42, 'WAH MEDICAL COLLAGE', 1, 'Wah Medical College was established in December 2003 as a continuous effort of POF Board to provide quality education in this part of the Country. This happens to be the first Medical College as you enter in Punjab from KPK. It started off in a makeshift ', '33.747713', '72.788596'),
(43, 'POFIT COLLAGE', 1, '"POFIT is committed to provide Quality Technical Education to: Officers, Staff and Workers of POF in order to groom them to shoulder their responsibilities in an efficient & effective manner. POFIT will extend its facilities to other Public Sector & Priva', '33.745419', '72.784008'),
(44, 'WAH ENGEENIRNG COLLAGE', 1, 'Wah Engineering College, a constituent college of the University of Wah, was established in 2004 and has been offering 4 years degree program in the fields of Electrical, Mechanical, Mechatronics, Civil and Chemical Engineering. Moreover, the College has ', '33.747848', '72.784953'),
(45, 'CP PUBLIC SCHOOL', 1, 'Primary education falls in the purview of the Cantt Board. As such 03 x CB Schools, one each in Officers Colony, Nawababad and Lala Rukh are being run by the Cantonment Board Wah. These schools are housed in proper buildings and imparting education from N', '33.747631', '72.753289'),
(46, 'CB PUBLIC COLLAGE', 1, 'Primary education falls in the purview of the Cantt Board. As such 03 x CB Schools, one each in Officers Colony, Nawababad and Lala Rukh are being run by the Cantonment Board Wah. These schools are housed in proper buildings and imparting education from N', '33.747631', '72.753289'),
(47, 'SIRSYED SCHOOL', 1, 'Sir Syed School of Excellence has been pioneered with the objective to fulfill the requirements of advance,sophisticated,challenging and skillful learning. Sir Syed School of Excellence proudly offers a curriculum to meet the social, religious and ethical', '33.755875', '72.782295'),
(48, 'FG SCHOOL NO1 GIRLS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.751255', '72.77749'),
(49, 'FG MIDDALE SCHOOL NO12', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.75108', '72.773712'),
(50, 'FG PUBLIC SCHOOL NO3', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.751497', '72.772229'),
(51, 'FG PUBLIC SCHOOL NO3 GIRLS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.757994', '72.766451'),
(52, 'GOVT ANJUMAN ISLAMIA SCHOOL', 1, 'Welcome to Anjuman-e-Islamia GGSS. It is my pleasure to introduce you to Anjuman-e-Islamia GGSS through our school website. The purpose of this site is to give you a snap shot of the many exciting learning experiences happening daily at our school. Naviga', '33.755402', '72.766887'),
(53, 'FG PUBLIC SCHOOL NO1 BOYS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.763107', '72.768058'),
(54, 'GOVT GILANI HIGH SCHOOL', 1, 'Such Schools Where Only Girls Can Get Study. Also known as Single-gender education, is the practice of conducting education where Boys and Girls students attend separate classes or in separate buildings or schools Government schools are schools that are p', '33.763205', '72.754828'),
(55, 'FG PUBLIC SCHOOL NO 4 BOYS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.76606', '72.752574'),
(56, 'FG PUBLIC NO 2 GIRLS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.76837', '72.744119'),
(57, 'FG JUNIOR PUBLIC SCHOOL NO5', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.767552', '72.760926'),
(58, 'FG POST GRADUATE COLLAGE GIRLS', 1, 'Discipline  COLLEGE DISCIPLINE  The college has acquired an enviable reputation for the standard of behaviour and discipline among its students and the new student is expected to maintain and work towards improving it during her stay. While students are e', '33.769057', '72.761414'),
(59, 'SIRSYED COLLAGE CAPUS 1', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.772141', '72.761386'),
(60, 'FG MODEL PUBLIC SCHOOL', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.773624', '72.75167'),
(61, 'FG DEGREE COLLEGE FOR MEN', 1, 'Our Beliefs We believe every individual has the fundamental right to acquire knowledge. Being Muslims, it is obligatory for every Muslim Man and woman to acquire knowledge. Our Mission We endeavour to provide quality education to the residents of Wah Cant', '33.775286', '72.749661'),
(62, 'FG SCHOOL NO4 GIRLS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.773668', '72.744332'),
(63, 'FG JUNIOR SCHOOL NO 10', 1, 'o transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by ', '33.780888', '72.737899'),
(64, 'SIRSYED COLLAGE BOYS NO2', 1, 'Sir Syed Colleeg has been pioneered with the objective to fulfill the requirements of advance,sophisticated,challenging and skillful learning. Sir Syed School of Excellence proudly offers a curriculum to meet the social, religious and ethical challenges o', '33.781262', '72.737232'),
(65, 'MARGALLA GRAMMER SCHOOL', 1, 'Margalla Grammar School; established in 1992 at Wah Cantt, is a school ahead of time focusing on quality education and moulding of fine personalities The Margalla Grammer School Senior Campus School Group allows parents whose kids attend Margalla Grammer ', '33.781155', '72.736044'),
(66, 'ORGANON SCHOOL PRE NURSARY O,A LEVEL', 1, 'The Organon Schooling Concepts School Group allows parents whose kids attend Organon Schooling Concepts to connect with each other and discuss school related issues, seek and share advice, ask questions, and share news and information with each other. Joi', '33.78188', '72.735178'),
(67, 'LAHORE GRAMMER SCHOOL ', 1, 'OUR SCHOOL In 1979, Lahore Grammar School opened its door to a handful of students with 55 Main established as its first branch. Weâ€™ve come a long way since then! From the very beginning, however, the philosophy of the school has been to combine collabora', '33.782387', '72.73451'),
(68, 'RAISE AND SHINE MONTESORI CAMPUS 1', 1, 'Everyone at Rise & Shine, from staff to board to volunteers, is driven by our mission to provide tools for learning, and to promote racial justice and equality of opportunity. Our year-round after-school programs help prepare and encourage students to exc', '33.783077', '72.733579'),
(69, 'MARGALLA GRAMMER SCHOOL ', 1, NULL, '33.783357', '72.733146'),
(70, 'WAH POLYTECHNIC COLLAGE', 1, 'We believe every individual has the fundamental right to acquire knowledge. Being Muslims, it is obligatory for every Muslim Man and woman to acquire knowledge. Our Mission We endeavour to provide quality education to the residents of Wah Cantt. 3 Years D', '33.784077', '72.730811'),
(71, 'FAROOQI MAODEL HIGH SCHOOL MONTESORI CAMPUS', 1, NULL, '33.787314', '72.726406'),
(72, 'WAH GRAMMER SCHOOL SENIOR BRANCH FOR BOYS', 1, NULL, '33.78748', '72.724628'),
(73, 'FG PUBLIC SCHOOOL NO7 GIRLS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.784441', '72.721515'),
(74, 'FG PUBLIC PUBLIC SCHOOL NO2 BOYS', 1, 'To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country by', '33.781756', '72.725047'),
(75, 'HORIZON DEGREE COLLEGE FOR GIRLS', 1, 'According to the Higher Education Commission (HEC), the Horizon College for Girls, The Mall, Wah Cantt, located in Punjab, is affiliated with the University of the Punjab (PU). For admission schedule of Horizon College for Girls, The Mall, Wah Cantt, cont', '33.785842', '72.729574'),
(76, 'JINNAH COLLEGE', 1, 'Jinnah College of Commerce, Wah Cantt is affiliated with University of the Punjab, Lahore. f you have are studying or recently studied at Jinnah College of Commerce, Wah Cantt, write your experience here. Tell us about quality of education, fees etc. Whet', '33.785979', '72.72919'),
(77, 'ROOTS INTERNATIONAL SCHOOL ', 1, 'Admissions are taken from March to August at all Campuses of Roots International Schools. Registrations are open throughout the academic year. Academic session begins in August/September each year, consists of two terms, Annual exams are conducted in May/', '33.78644', '72.728742'),
(78, 'BAHRIA FOUNDATION COLLEGE PRIMARY CAMPUS', 1, 'Jinnah College of Commerce, Wah Cantt is affiliated with University of the Punjab, Lahore. f you have are studying or recently studied at Jinnah College of Commerce, Wah Cantt, write your experience here. Tell us about quality of education, fees etc. Whet', '33.786913', '72.728058'),
(79, 'RISE AND SHINE COLLAGE GIRLS CAMPUS', 1, 'Everyone at Rise & Shine, from staff to board to volunteers, is driven by our mission to provide tools for learning, and to promote racial justice and equality of opportunity. Our year-round after-school programs help prepare and encourage students to exc', '33.787013', '72.727898'),
(80, 'PUNJAB COLLEGE OF EXCELENCE GIRLS CUMPUS', 1, 'Punjab Excellence Group of Colleges has been offering fleet of disciplines at HSSC and B.Com (IT) under the affiliation granted by FBISE Islamabad and University of the Punjab Lahore for boys and girls respectively. Both campuses are operational in differ', '33.787723', '72.726879'),
(81, 'PUNJAB COLLEGE OF EXCELENCE IN COMMERCE', 1, 'The inception of one of the best colleges and universities in Pakistan in 1985, laid the foundation of the Punjab Group with the aim of academic excellence at all levels for the purpose of shaping the future of its students. Over the span of almost 32 yea', '33.787884', '72.726626'),
(82, 'THE CITY SCHOOL ', 1, 'Established in Karachi in 1978, The City School is today one of the largest private school networks in Pakistan with branches in all the major cities across the country. It currently has 169 schools in 49 cities with over 126,000 students in 458 owned and', '33.788023', '72.72648'),
(83, 'SP.PAUL HIGH SCHOOL', 1, NULL, '33.778856', '72.719057'),
(84, 'FAROOQI MAODEL HIGH SCHOOL BOYS CAMPUS', 1, NULL, '33.788458', '72.727341'),
(85, 'RISE AND SHINE COLLAGE GIRLS CAMPUS 2', 1, NULL, '33.78971', '72.729879'),
(86, 'RISE AND SHINE BOYS CAMPUS', 1, 'Everyone at Rise & Shine, from staff to board to volunteers, is driven by our mission to provide tools for learning, and to promote racial justice and equality of opportunity. Our year-round after-school programs help prepare and encourage students to exc', '33.789563', '72.729816'),
(87, 'ZORGITOONA SCHOOL', 1, NULL, '33.789801', '72.730089'),
(88, 'ST.PAUL HIGH SCHOOL GULSHAN KALOONI', 1, 'Saint Paul High School was originally founded in 1983 in a limited building at Lala Rukh Wah Cantt under the banner of Saint Paul Education Socitey Wah Cantt. The society composed on the board of directors mainly the educationist in and out side Pakistan.', '33.790664', '72.731976'),
(89, 'NEW ERA SCHOOL SYSTEM', 1, 'Welcome to NEW ERA PUBLIC SCHOOL ............ New Era school represents a holistic and constructivist approach to education, one that seeks to provide equal educational and developmental opportunities to all. We are committed to providing an environment w', '33.791718', '72.734652'),
(90, 'SIRSYED HIGH SCHOOL CAMPUS', 1, 'Sir Syed School of Excellence has been pioneered with the objective to fulfill the requirements of advance,sophisticated,challenging and skillful learning. Sir Syed School of Excellence proudly offers a curriculum to meet the social, religious and ethical', '33.79521', '72.749410'),
(91, 'FG JUNIOR PUBLIC SCHOOL GUDWAL', 1, ' To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country b', '33.797094', '72.748825'),
(92, 'FG PUBLIC SCHOOL NO5 BOYS 26 AREA', 1, ' To transform the FGEIs network into one of the best educational system of the country.  To provide purposeful and quality education to the wards of Armed Forces personnel as well as of civilians, residing in cantonments/garrisons throughout the country b', '33.794991', '72.748343'),
(93, 'CANTT COLLEGE FOR GIRLS', 1, 'Introduction Cantt College for Girls is an established institute in Wah Cantt. Under the patronage of Education Promoters Society. The society is working for PEACE - Perfect Education for All Childrenâ€™s Equally). The college is situated on Mall Road, Offi', '33.788378', '72.727709'),
(94, 'WAH COLLEGE OF ACCOUNTENCY', 1, 'WAH COLLEGE OF ACCOUNTANCY Admissions Open I.Com F.Sc F.C.S I.C.S F.A B.Com B.A B.Sc Affiliated With Federal Board, Punjab University Free Education For Those Students who Got 80% Marks in Matric Highly Qualified & Experienced Faculty Kamra Campus: First ', '33.788899', '72.727324'),
(95, 'FATIMA JINNAH COLLEGE FOR WOMEN', 1, 'Fatima Jinnah Degree College for Women, A-3, Officer Colony, The Mall, Wah Cantt. Degrees small bulletB.A/B.Sc Intake 200 Validity: Session 2015-16 & 2016-17 Compulsory: English (Lang.),Islamic Studies/Ethics,Pakistan Studies, Elective: Physics,Political ', '33.787598', '72.728065'),
(96, 'FAROOQI MODEL HIGH SCHOOL GIRLS CAMPUS', 1, 'Farooqi Model High School wah cantt is one of the popular Cosmetology School located in Wah, pakistan ,Wah listed under School in Wah , High School in Wah , The society composed on the board of directors mainly the educationist in and out side Pakistan. I', '33.787313', '72.728476'),
(97, 'ROOTS INTERNATIONAL SCHOOL OFFICER COLONY', 1, 'Admissions are taken from March to August at all Campuses of Roots International Schools. Registrations are open throughout the academic year. Academic session begins in August/September each year, consists of two terms, Annual exams are conducted in May/', '33.786706', '72.729322'),
(98, 'FORBELS SCHOOL INTERNATIONAL SCHOOL WAH CAMPUS', 1, 'MISSION STATEMENT Froebelâ€™s International School is committed to providing: A stimulating and comprehensive programme of studies through which students are inspired to achieve their greatest potential and adapt to a diverse and ever-changing society. A de', '33.786362', '72.72982'),
(99, 'BECON HOUSE SCHOOL JUNIOR BRANCH', 1, 'The Beaconhouse Group of today is much more than a single school system. Through distinct and independent divisions across multiple destinations including the UK, Malaysia, Thailand, the Philippines, Oman, the UAE, Pakistan and Belgium, it caters to the e', '33.786174', '72.730079'),
(100, 'AL-HUDA MONTESSORI SCHOOL THE MALL', 1, 'Mission	To serve humanity by imparting knowledge of Quran and Sunnah the way to attain peace in this World and Success in the Hereafter Vision : Quran For all, In Every Hand in Every heart Description This page will serve as the Official Facebook Page of ', '33.785501', '72.731129'),
(101, 'BECON HOUSE SCHOOL WAH CANTT CAMPUS', 1, 'The Beaconhouse Group of today is much more than a single school system. Through distinct and independent divisions across multiple destinations including the UK, Malaysia, Thailand, the Philippines, Oman, the UAE, Pakistan and Belgium, it caters to the e', '33.78539', '72.732031'),
(102, 'LAHORE GRAMMER SCHOOL PLAYGROUP GRADE 2', 1, 'OUR SCHOOL In 1979, Lahore Grammar School opened its door to a handful of students with 55 Main established as its first branch. Weâ€™ve come a long way since then! From the very beginning, however, the philosophy of the school has been to combine collabora', '33.783283', '72.734247'),
(103, 'LAHORE GRAMMER SCHOOL', 1, 'OUR SCHOOL In 1979, Lahore Grammar School opened its door to a handful of students with 55 Main established as its first branch. Weâ€™ve come a long way since then! From the very beginning, however, the philosophy of the school has been to combine collabora', '33.782057', '72.736385'),
(104, 'MARGALLAH GREMMAR SCHOOL', 1, 'Margalla Grammar School; established in 1992 at Wah Cantt, is a school ahead of time focusing on quality education and moulding of fine personalities The Margalla Grammer School Senior Campus School Group allows parents whose kids attend Margalla Grammer ', '33.782622', '72.735229'),
(105, 'THE SCHOLAR SCHOOL', 1, 'The Scholar School is established and run by Human Welfare Foundation. Presently in its infant stage,it is destined to grow as a full-fledged senior secondary school offering 10+2 C.B.S.E. Courses in a well-equipped, beautiful and safe environment, Insha ', '33.788909', '72.725401'),
(106, 'WAH CITY SCHOOL', 1, 'Wah City School is today one of the largest private school networks in Pakistan with branches in all the major cities across the country. It currently has 169 schools in 49 cities with over 126,000 students in 458 owned and franchised schools. The City Sc', '33.789571', '72.724230'),
(107, 'ROOTS SCHOOL MONTESORI LALARUKH', 1, 'Admissions are taken from March to August at all Campuses of Roots International Schools. Registrations are open throughout the academic year. Academic session begins in August/September each year, consists of two terms, Annual exams are conducted in May/', '33.78962', '72.724121'),
(108, 'RAWALPHINDI COLLEGE OF COMMERCE AND SCIENCE', 1, 'Rawalpindi College of Commerce was established in 1988 to cater for the drastic national requirements for the dynamic professional graduates in the field of commerce. This period of 20 years, which certainly is not a long one, in the history of institutio', '33.789645', '72.724036'),
(109, 'WIMS DEGREE COLLEGE ', 1, 'Out of fourteen districts of Kerala, Wayanad is considered the least developed district. Many factors like topography, poor industrial growth and lack of high value business ventures have played key roles. This is also reflected in the health sector. Ther', '33.790653', '72.72363'),
(110, 'THE KNOWLEDGE SCHOOL', 1, 'The Knowledge School serves as a center for knowledge development. Our core curriculum is designed to meet the international teaching learning standards and help students to develop superior scholastic aptitude. TKS provides an environment for educational', '33.790801', '72.723426'),
(111, 'EDUCATOR WAH CAPPUS', 1, 'Established in November 1975 as the Les Anges Montessori Academy for toddlers, Beaconhouse has since grown into a global network of private schools, institutes, and universities, imparting distinctive and meaningful education to students from pre-school t', '33.79157', '72.722388'),
(112, 'WCA AND SCIENCE GIRLS CAMPUS', 1, 'Mission Statement TSSC works in partnership with community, families and students to ensure that each student acquires the knowledge, skills and core values necessary to achieve personal success and to enrich the community for everlasting bliss. Vision St', '33.79179', '72.7221'),
(113, 'THE COUNTRY SCHOOL LALAZAR CAMPUS', 1, 'Introduction The Country School is a project of Bloomfield Hall School System. Bloomfield Hall School System was established in Lahore in 1984. Since its establishment the system has opened its branches in several major cities of Pakistan including Islama', '33.791937', '72.721929'),
(114, 'PICS MODEL SCHOOL AND MONTESORI SYSTEM', 1, 'PICS Model School and Montessori System Mission Statement TSSC works in partnership with community, families and students to ensure that each student acquires the knowledge, skills and core values necessary to achieve personal success and to enrich the co', '33.792451', '72.72138'),
(115, 'HOPE COLLEGE SCIENCE COMMERCE', 1, 'From the beginning, Hope College has looked to the future. Here, historic architecture fits comfortably with world-class facilities Grounded in a general liberal arts education, Hope offers specialized study in more than 90 majors, minors and pre-professi', '33.792517', '72.721266'),
(116, 'WCA SCHOOLING SYSTEM PLAYGROUP TO TENTH', 1, 'Mission Statement TSSC works in partnership with community, families and students to ensure that each student acquires the knowledge, skills and core values necessary to achieve personal success and to enrich the community for everlasting bliss. Vision St', '33.79106', '72.721915'),
(117, 'SCHOLAR SCIENCE COLLEGE GIRLS CAMPUS', 1, 'Welcome to the Scholars Science College, a highly developed education network in Wah Cantt for academic excellence. Our students are members of an illustrious institution, which is proud of a heritage and history developed by its cultural, demographic, an', '33.790777', '72.722252'),
(118, 'BAHARIA FOUNDATION COLLEGE', 1, 'Bahria Foundation was established in January 1982 by the Government of Pakistan as a Charitable Trust under the Endowment Act 1890. The Committee of Administration (COA) headed by Chief of the Naval Staffs as its Chairman consists of eight members includi', '33.790722', '72.7225'),
(119, 'BAHARIA COLLEGE HIGHER SECONDARY LEVEL', 1, 'Bahria Foundation was established in January 1982 by the Government of Pakistan as a Charitable Trust under the Endowment Act 1890. The Committee of Administration (COA) headed by Chief of the Naval Staffs as its Chairman consists of eight members includi', '33.790629', '72.722657'),
(120, 'SARMAD BOOK PALACE', 7, 'All kinds of books and stationary items ae availble here ..! Looking for more exciting stuff? Browse some of our top categories such as Children\'s Books, Fiction, Graphic Novels, Anime & Manga, Food & Drink books, Crafts & Hobbies, Art & Photography, Biog', '33.766456', '72.753955'),
(121, 'CORNER SWEETS AND BAKRES', 2, 'Donâ€™t forget to check out our fresh and sweet cakes for special occasions! corner bakers makes mouth watering, fresh and delicious Pizzas, Cakes, Salads, Cookies, Fast food items and lots of other stuff. From small towns to distant locations, millions of ', '33.76703', '72.75473'),
(122, 'CORNER BAKERS', 2, 'Donâ€™t forget to check out our fresh and sweet cakes for special occasions! corner bakers makes mouth watering, fresh and delicious Pizzas, Cakes, Salads, Cookies, Fast food items and lots of other stuff. From small towns to distant locations, millions of ', '33.767266', '72.754469'),
(123, 'CSD CANTEEN STORE DEPARTMENT', 6, 'CSD shall continue to serve armed forces personnel while creating a vibrant, efficient and commercially viable retail and hire purchase business organization and shall become a preferred choice for all customers, employees and vendors. household items lik', '33.76781', '72.755255'),
(124, 'JAMIA TALEEMUNL QURAN', 8, NULL, '33.76795', '72.754221'),
(125, 'BHATTI BOOK DEPO', 7, 'All kinds of books and stationary items ae availble here ..! Looking for more exciting stuff? Browse some of our top categories such as Children\'s Books, Fiction, Graphic Novels, Anime & Manga, Food & Drink books, Crafts & Hobbies, Art & Photography, Biog', '33.768154', '72.754301'),
(126, 'QAISIR GENERAL STORE', 10, 'Our range of products includes:Food Items,Meat/Fish/,Chicken,House hold,Personal Care, Textile / Linen,Fruit & Vegetables,Hygiene / Chemical Group, Stationery,Garments / Hosiery,Furniture. household items like Cars,Bikes,TVs stc are sold to authorized ben', '33.766288', '72.755197'),
(127, 'SUPER SWEETS AND BAKERS', 2, 'Donâ€™t forget to check out our fresh and sweet cakes for special occasions! super bakers makes mouth watering, fresh and delicious Pizzas, Cakes, Salads, Cookies, Fast food items and lots of other stuff. From small towns to distant locations, millions of p', '33.766251', '72.755210'),
(128, 'SMILE DENTAL CLINIC', 4, 'At Smile Dental Care, we are passionate about providing friendly, caring dentistry and general, cosmetic and specialist dental treatments of the highest standard. Passionate about helping each of our valued patients look after and make the most of their s', '33.765493', '72.755332'),
(129, 'HASHMI DUA KHANA', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765449', '72.755251'),
(130, 'QADRI STORE AND CLINIC', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765313', '72.754988'),
(131, 'SHAMA BAKERS', 2, 'Donâ€™t forget to check out our fresh and sweet cakes for special occasions! shama bakers makes mouth watering, fresh and delicious Pizzas, Cakes, Salads, Cookies, Fast food items and lots of other stuff. From small towns to distant locations, millions of p', '33.765346', '72.754997'),
(132, 'SAIFA MEDICOZ STORE', 5, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765079', '72.754523'),
(133, 'SIDQI CLINIC', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765136', '72.753926'),
(134, 'AHSAN CLINIC AND LABORATORY', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.765422', '72.753801'),
(135, 'HUMYUR CLINIC', 4, 'Medicine & Health Buy medicine online in Pakistan without any hassle. With MedicalStore.com.pk â€“Pakistanâ€™s prominent online pharmacy & medical store, you can buy medicine and pharmaceutical products online in cheap prices and choose from a wide array of m', '33.76542', '72.753745'),
(136, 'LIFE LINE PHARMACY AND CLINIC', 4, 'Lifeline pharmacy started in 2013 as a franchised store inside Target. After Target suddenly pulled out of Canada, we continued to serve Cambridge as an independent pharmacy. We are now centrally located in the Dipietro plaza in the city of Cambridge. Bei', '33.765441', '72.753659'),
(137, 'ABRAR DENTAL CLINIC', 4, 'Our dental clinic in Islamabad is one of the best dental clinics offering consistent and professional dental services specifically to the people of Islamabad and generally to patients from Pakistan and international visitors. Our dental clinic in Islamaba', '33.765458', '72.753142'),
(138, 'WELFARE CLUB 2     8 AREA', 6, 'Sports CLUB, a division of Sports Camp, Inc., is a 501(c)(3) non-profit organization that has been in operation since 1999. The mission of Sports CLUB is to provide children a safe and enriching after-school, summer camp and youth sports environment throu', '33.762639', '72.755639'),
(139, 'COMSATS UNIVERSITY', 1, 'The COMSATS Institute of Information technology at Wah is a growing institute of IT. Housed in a spacious building at Wah cantonment, the campus provides state-of-the-art facilities for the acquisition of knowledge and skills in the field of IT.  CIIT, in', '33.7448013', '72.7866106'),
(140, 'UNIVERSITY OF WAH', 1, 'University of Wah is a private-sector higher education institution founded with the vision of achieving excellence in unbiased dissemination of quality education to all. It was granted Charter by the Punjab Provincial Assembly in 2009. University is offer', '33.7448013', '72.7866106'),
(141, 'POF HOSPITAL', 4, 'POFs Hospital was established in 1962 with an initial capacity of 103 beds. Hospital capacity increased 200, 400 and 500 beds in 1963, 1969 and 1987 respectively. Existing bed strength is 676 due to introduction of new departments over successive years. I', '33.7446229', '72.77154729999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
