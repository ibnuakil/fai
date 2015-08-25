/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.27 : Database - fai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date_written` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `tag` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `image_path` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `articles` */

insert  into `articles`(`id`,`user_id`,`author`,`date_written`,`title`,`content`,`tag`,`category_id`,`state_id`,`rating`,`image_path`) values (1,3,'Ibnu Akil','2015-08-07 10:14:18','Kecerdasan Buatan Untuk Robot','<p>Apakah anda salah satu penggemar film science fiction yang melegenda yaitu &ldquo;Star Trek&rdquo;? Jika iya, mungkin tak lama lagi anda akan melihat karakter robot android &ldquo;Data&rdquo; yang merupakan humanoid robot (robot manusia) menjadi kenyataan. Pada ajang pagelaran robot sedunia &ldquo;Robots in Motion 2012&rdquo; yang diadakan di Hongkong, sebuah robot yang paling canggih sedunia dalam bentuk wanita cantik hadir menjadi hidup seperti manusia. Robot ini bernama Geminoid F hasil kreasi dari Hiroshi Ishiguro, ahli robotika dari Jepang. Ishiguro memprogram robot tersebut dengan 65 tingkah laku layaknya manusia, seperti berbicara, menyanyi, tersenyum, yang membuat Geminoid F ini menjadi robot paling pintar seluruh dunia.</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam serial Star Trek, Data adalah sebuah robot yang ditugaskan di pesawat luar angkasa Enterprise. Robot ini bertingkah laku layaknya manusia, namun dengan kemampuan komputasi yang melebihi manusia. Namun ada satu hal yang tidak dimilikinya yaitu kesadaran hati nurani. Robot bertindak berdasarkan sederet algoritma yang diprogramkan kedalam chipset yang menjadi otak dari robot. Algoritma ini berbeda-beda sesuai dengan tindakan yang akan dilakukan oleh si robot. Ada algoritma untuk berfikir, membuat keputusan sederhana, belajar. Ada juga algoritma yang berhubungan dengan pergerakan, misalkan algoritma berjalan, &nbsp;algoritma memegang. Dan ada pula algoritma yang mengatur sensor-sensor yang berfungsi sebagai panca indra, seperti melihat, mendengar, mencium bau, dan merasakan sentuhan. Algoritma-algoritma ini berfungsi sebagai artificial intelligence (kecerdasan buatan) yang membuat robot bertindak atau berfikir layaknya manusia.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada awal riset tentang Artificial Intelligence (AI) lebih banyak menekankan pada algoritma pencarian. Algoritma pencarian ini banyak digunakan untuk menentukan jalur tercepat, atau mencari jalan dalam sebuah maze, atau untuk permainan tic-tac-toe dan catur. Penggunaannya dalam AI sebuah robot agar robot dapat mencari jalan pada ruangan dengan halang rintang. Algoritma yang digunakan antara lain; Depth First Search (DFS) dan Breadth First Search (BFS).</p>\r\n<p>&nbsp;</p>\r\n<p>Berikutnya adalah AI yang dapat membuat sebuah robot belajar (learning machine). Bagaimana sebuah robot dapat belajar layaknya seorang manusia ? Seperti robot Geminoid F yang canggih tersebut dilengkapi dengan sensor-sensor layaknya panca indra manusia. Dua bola matanya adalah camera canggih yang dapat meng-capture gambar dengan ketajaman tinggi. Telinganya adalah sebuah microphone dengan sensitivitas tinggi yang dapat menerjemahkan suara menjadi data digital. Hidungnya adalah sensor yang dapat membaui zat kimia. Dengan adanya sensor-sensor yang menjadi media input, maka sebuah robot dapat menyimpan data atau informasi. Informasi tersebut kemudian diolah oleh algoritma atau AI yang mengatur bagaimana sebuah robot dapat berfikir atau mengambil keputusan. Algoritma yang digunakan misalnya; neural network, case-base reasoning, decision tree dan lain-lain.</p>\r\n<p>&nbsp;</p>\r\n<p>Neural network adalah model komputasi yang di-inspirasikan dari central nervous system (pusat sistem syaraf /otak) dari manusia yang mampu membuat sebuah mesin belajar dan mengenali pola (pattern recognition). Pada dasarnya neural network meniru cara kerja sistem syaraf manusia. Mereka biasanya dipresentasikan sebagai sistem-sistem dari syaraf-syaraf yang terhubung yang menghitung nilai dari input-input dengan memberikan informasi melalui jaringan.</p>\r\n<p>&nbsp;</p>\r\n<p>Sedangkan algoritma case-base reasoning adalah proses memecahkan masalah-masalah baru berdasarkan solusi-solusi dari masalah-masalah di waktu lampau. Case-base reasoning tidak hanya diperdebatkan sebagai metode yang canggih untuk pembelajaran mesin tetapi juga tingkah laku yang dapat memecahkan permasalahan manusia sehari-hari.</p>\r\n<p>&nbsp;</p>\r\n<p>Sementara algoritma decision tree digunakan oleh mesin untuk mengambil keputusan berdasarkan data statistik. Decision tree biasanya juga digunakan untuk melakukan data mining (penggalian data) dari sejumlah populasi data yang kemudian diambil data yang terbaik berdasarkan kriteria tertentu.</p>\r\n<p>&nbsp;</p>\r\n<p>Ternyata membuat sebuah robot bukanlah pekerjaan yang mudah, kita harus menguasai algoritma-algoritma artificial intelligence yang membuat robot berfikir dan bertindak layaknya manusia. Namun sejauh ini belum ditemukan algoritma yang dapat membuat robot berperasaan seperti manusia. Mungkin beberapa dekade ke depan akan ditemukan algoritma yang dapat membuat robot berperasaan seperti manusia. Sesuai dengan pernyataan Ishiguro yang mengatakan bahwa dengan teknologi yang tepat, dia dapat membuat android yang berfikir, bertindak dan bereaksi seperti layaknya manusia. &ldquo;Apa definisi manusia?&rdquo; tanyanya. &ldquo;Tolong jelaskan maka saya akan membuat duplikatnya.&rdquo;</p>','robot, artificial intelegent',1,1,NULL,''),(2,3,'Siti Chodijah','2015-08-07 10:15:01','Tamu Teristimewa','<p>Jika biasanya kata istimewa dekat dengan kata spesial dan khusus, tapi kali ini istimewa namun kehadirannya tidak pernah dinanti, kedatangannya selalu membuat kerabat, teman dekat, sahabat sanak famili menangis bahkan histeris hingga pingsan. Dia memang akan hadir dan pasti semua akan bertemu dengannya tanpa kecuali, entah siap atau tidak. Dia akan datang menjemput kita dengan caranya masing-masing. Dengan cara yang indah, atau hadir dengan wajah yang hitam legam dan seram.</p>\r\n<p>&nbsp;</p>\r\n<p>Tamu istimewa itu adalah dia malaikat yang ditugaskan oleh Allah untuk mencabut nyawa kita. Datang tanpa kita undang, hadirnya pun terkadang tak mampu kita terka. Dia datang atas perintah Allah Azza Wa Jala. Bila ruh itu akan terlepas dari jasadnya maka rasa sakitnya itu bagai tusukan tiga ratus pedang, Sabda Rasulullah SAW : &ldquo;Sakaratul maut itu sakitnya sama dengan tusukan tiga ratus pedang&rdquo; (HR Tirmidzi). Merintih dan menangis pun tak lagi ada yang mampu mendengarnya, meratap dan mengharap agar ditunda datangnya pun tak ada satu makhluk yang mampu membantunya, jika ia telah datang dihadapan maka tak mungkin mundur untuk berbalik arah. Tidak ada satu pun tanpa kecuali yang mempu menghindari.</p>\r\n<p>&nbsp;</p>\r\n<p>Sabda Rasulullah SAW : &ldquo;Kematian yang paling ringan ibarat sebatang pohon penuh duri yang menancap di selembar kain sutera. Apakah batang pohon duri itu dapat diambil tanpa membawa serta bagian kain sutera yang tersobek ?&rdquo; (HR Bukhari). Imam Ghozali berpendapat : &ldquo;Rasa sakit yang dirasakan selama sakaratul maut menghujam jiwa dan menyebar ke seluruh anggota tubuh sehingga bagian orang yang sedang sekarat merasakan dirinya ditarik-tarik dan dicerabut dari setiap urat nadi, urat syaraf, persendian, dari setiap akar rambut dan kulit kepala hingga kaki&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Saat itu setelah tamu teristimewa itu datang maka hanya akan bisa melihat mereka yang hadir menangisi kita terbujur kaku dalam keranda kayu bersama tubuh berbalut kain putih, hanya amal yang menyertai, harta dan kerabat tak satu pun bersama kita dalam penantian, dalam kotak tanah berukuran dua kali satu meter.</p>','religius',1,1,NULL,''),(7,3,'Jimmi','2015-08-14 00:00:00','MASTERY ENGLISH IN FACING GLOBALIZATION ERA','<p>Nowadays, we are entering new globalization era. An era which is grow rapidly in all sectors. We cannot close our eyes to see how fast the changing comes up to our lives. The changing itself can be found from technology, information, economy, social and culture. Thus, it will make us want to take a part to get involve or contribution in developing our greatest country, Indonesia.</p>\r\n<p>&nbsp;</p>\r\n<p>In facing this situation, sooner or later, Indonesia people must have something to be shown. It is a skill that will make Indonesian people confidence and ready in facing new era, where a stranger or people who come from other country will entering our country. We do not want to be defeated by foreigner and left behind from them. So, what will we prepare in facing this changing later? How do we apply our skill while the foreigner has already had ones?</p>\r\n<p>&nbsp;</p>\r\n<p>To solve this, English is must. Why? Because English is one of important skill must Indonesian people get to master right away. We do realize to learn English is not a simple as we thought. We need a time, a space to interact, and strong confidence to be applied English skills. We have to prepare in order to make us ready in facing all the possibilities chalangging in the future.</p>\r\n<p>&nbsp;</p>\r\n<p>English Language is indeed a very peculiar language: not only does it have so many grammatical rules, but, irritatingly enough, there are also hundreds of exceptions to those rules, which one can master only through years of persistence, dedication, and indefatigable energy, and earnestly speaking we have yet to reach such flawlessness in the use of English.</p>\r\n<p>&nbsp;</p>\r\n<p>When we learn a language, there are four skills that we need for complete communication. When we learn our native language, we usually learn to listen first, then to speak, then to read, and finally to write. These are called the four language skills.</p>\r\n<p>&nbsp;</p>\r\n<p>As we can see the picture above, the four language skills are related to each other in two ways, there are the direction of communication known as in or out, while the method of communication known as spoken or written. Input is sometimes called &ldquo;reception&rdquo; and output is sometimes called &ldquo;production&rdquo;. The writing English skill alson known as &ldquo;oral&rdquo;. Sometimes, those skills are called by macro-teaching.</p>\r\n<p>&nbsp;</p>\r\n<p>Listening comprehesnion is the receptive skill in the oral mode. When we speak of listening what we really mean is listening and understanding what we hear. Listening, one of the means of language communication, is used most widely in people&rsquo;s daily lives. In addition, teaching and improving the learners a lot of listening activities is a good way of enlargening their vocabulary. Only through the practice can the learners improve their listening comprehension skill.</p>\r\n<p>&nbsp;</p>\r\n<p>Speaking is the productive skill in the oral mode. It, like the other skills, is more complicated than it seems at first and involves more than just pronouncing words. Speaking is often connected with listening. For example, the two-way communication makes up for the defect in communicative ability in the traditional laerning. Two-way means the relationship of the communication between the teacher and students at school. The two-way communication can lengthen the dialogue limitlessly. They can talk freely and express themselves as well as they can.</p>\r\n<p>&nbsp;</p>\r\n<p>Reading is the receptive skill in written mode. It can develop independently of listening and speaking skills, but often develops along with them, especially in societies with a highly-developed literary tradition. Reading can help build vocabulary that helps listenig comprehension at the later stages, particulary. Reading is an important way of gaining information in language learning and it is a basic skill for a language learner.</p>\r\n<p>&nbsp;</p>\r\n<p>And writing is the productive skill in the written mode. It, too, is more complicated than it seems at first, and often seems to be the hardest of the skills, even for native of a language, since it involves not just a graphic representation of speech, but the development and presentation of thoughts in a structured way. Writing helps to cosolidate student&rsquo;s grasp of vocabulary and structure, and complements the other language skills. Sentence is the base of an article. It helps students to understand the text and write composistions.</p>\r\n<p>&nbsp;</p>\r\n<p>Not only four language skills we consider are necessasry, but we also need the components that can &nbsp;support our language skills it self. Those components are consist of grammar, vocabulary, pronunciation and spelling. These components known as micro-skills. It will usefull if all componets we have understand and master it together.</p>\r\n<p>&nbsp;</p>\r\n<p>Now, it is a time for us to learn more. The competition will tight, we cannot predict what will happen next if we sit and watch only, while the others has prepare and master their skill to reach their dream.</p>\r\n<p>&nbsp;</p>\r\n<p>Mastering English will has begin, no time for relax, we must try to learn foreign language, especially English. So, when the time is coming, we are ready to compete with foreigner. We have confidence, we have skills that we&rsquo;ve mastered it. Many sources of English can be applied to improve English skills as long as we want seriously to learn and practice it. (JMM)</p>','ENGLISH',1,1,NULL,'');

/*Table structure for table `articles_comments` */

DROP TABLE IF EXISTS `articles_comments`;

CREATE TABLE `articles_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `articles_comments` */

/*Table structure for table `captcha` */

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `captcha` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`category_name`) values (1,'Berita'),(2,'Pengumuman'),(3,'Artikel'),(4,'Seminar / Workshop'),(5,'Kegiatan');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comments` text,
  `date_commented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_banned` tinyint(1) DEFAULT '0',
  `reply_of` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

/*Table structure for table `galleries` */

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(50) DEFAULT NULL,
  `img_name` varchar(50) DEFAULT NULL,
  `img_type` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `galleries` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(250) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `images` */

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`id`,`state_name`) values (1,'Unpublish'),(2,'Publish');

/*Table structure for table `static_pages` */

DROP TABLE IF EXISTS `static_pages`;

CREATE TABLE `static_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `menu_name` varchar(50) DEFAULT NULL,
  `is_menu` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `content` text,
  `link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `static_pages` */

insert  into `static_pages`(`id`,`name`,`menu_name`,`is_menu`,`is_active`,`content`,`link`) values (1,'visi_misi','Visi Misi',1,1,'<h3>VISI</h3>\r\n<p>Sebagai organisasi yang dapat membangun paradigma keilmuan akademisi Indonesia</p>\r\n<h3>MISI</h3>\r\n<p>\r\n<ol>\r\n<li>Menyelenggarakan pertemuan ilmiah akademisi dari berbagai disiplin ilmu.</li>\r\n<li>Melakukan kunjungan ke para tokoh nasional dan pakar dari berbagai bidang keilmuan.</li>\r\n<li>Menyelenggarakan kegiatan pemberdayaan di bidang sosial kemasyarakatan.</li>\r\n<li>Menghasilkan karya sebagai sumbangsih pemikiran untuk kemajuan Indonesia.</li>\r\n</ol>\r\n</p>\r\n','index.php/frontpage/menu/'),(2,'profil','Profil',1,1,'<p>Berawal dari visi dan misi yang sama para akademisi akhirnya lahirlah sebuah gagasan besar menyatukan sebuah pemikiran membangun paradigma keilmuan lintas generasi antar para akademisi Indonesia  tercetus dan terbentuklah sebuah Forum yang akan melahirkan akademisi yang cerdas, kompetitif, kreatif, tangguh dan profesional .</p>\r\n<p>Karya besar yang dirangkum dalam wadah yang indah itu akhirnya dideklarasikan dalam sebuah panggung kehormatan akademik Seminar Nasional pertama Forum Akademisi Indonesia dengan       tema : ”Ekonomi Syariah Solusi Ekonomi Rakyat”, dengan narasumber tokoh-tokoh penting dalam Ekonomi Syariah.</p>\r\n<p>Deklarasi tanggal 23 Mei 2015 di kampus BSI menjadi saksi sejarah berdirinya Forum Akademisi Indonesia, yang dihadiri para akademisi lintas generasi dari mulai tokoh bangsa, profesional, praktisi, dosen dan mahasiswa sepakat berikrar bersama membangun paradigma keilmuan dalam mencerdaskankan Bangsa.</p>\r\n<p>Forum ini merupakan wadah inspiratif agar masyarakat mengetahui karya-karya prestasi  para akademisi seluruh Indonesia dalam dunia pendidikan dan forum ini juga sebagai tolak ukur agar terbangun inovasi, kreativitas serta dapat memanfaatkan imajinasi untuk melahirkan ekspresi diri, kecerdasan, sikap kritis, kearifan dan semangat untuk melahirkan karya nyata yang bermakna bagi masyarakat.</p>\r\n<p>Satukan Tekad, Ilmu dan Hati itulah motto gerakan moral dan pendidikan ini agar seluruh akademisi Indonesia bersatu dalam satu kesatuan, bertekad bulat dalam keyakinan dan berhati dalam kearifan.</p>\r\n<p>Semoga Forum ini bisa menjadi wadah dan informasi yang aktual agar masyarakat mengetahui lebih jauh peran penting Forum Akademisi Indonesia dalam memberikan sumbangsih pemikiran dari berbagai macam bidang keilmuan untuk memajukan Indonesia. Dengan demikian dapat memberi energi yang diyakini mampu menumbuhkan motivasi individual para akademisi dan kolektivitas masyarakat bahwa forum ini milik kita bersama.</p>\r\n<h3>Maksud dan Tujuan</h3>\r\n<p>\r\n<li>Mengkomunikasikan dan mensosialisasikan Forum Akademisi Indonesia kepada dunia pendidikan, dunia usaha, pemerintahan, kedutaan besar, konsulat dan masyarakat luas secara serentak dan berkelanjutan.</li>\r\n<li>Mensinergikan potensi para akademisi seluruh Indonesia dimanapun berada.</li>\r\n<li>Mewujudkan visi misi besar dalam mencerdaskan anak bangsa menuju Indonesia Berprestasi.</li>\r\n</p>','index.php/frontpage/menu/'),(3,'organisasi','Organisasi',1,1,'<h3>Susunan Organisasi</h3>\r\n<p>Dewan Penasehat\r\n<li>Para Tokoh Nasional</li>\r\n<li>Bp. Dr. Abdullah Hehamahua, SH, MM</li>\r\n<li>Bp. Dr. Ir. As Natio Lasman</li>\r\n<li>Bp. Drs. H. Abdul Wahid Maktub</li>\r\n<li>Bp. Faoruk Abdullah Alwyni, MA, MBA, ACSI</li>\r\n<li>Bp. Ir. Hanawijaya, MM</li>\r\n<li>Bp. Dr. Aat Surya Syafaat, M.Si</li></p>\r\n<p>Dewan Pelindung\r\n<li>Bp. H. Herman Harsoyo</li>\r\n<li>Bp. H. Naba Aji Notoseputro</li></p>\r\n<p>Dewan Pembina\r\n<li>Bp. Dr. Mochammad Wahyudi, MM, M.Kom, M.Pd</li>\r\n<li>Bp. Syamsul Bahri MM, M.Kom</li></p>\r\n<p>Ketua Umum\r\n<li>Ibu Eni Heni Hermaliani MM, M.Kom</li></p>\r\n<p>Ketua I Bidang Humas dan Hubungan Antar Kelembagaan\r\n<li>Bp. Syahrudin Sukeni S.Sn</li></p>\r\n<p>Ketua II Bidang SDM dan Kajian Strategis\r\n<li>Bp. Yahdi Kusnadi M.Kom</li></p>\r\n<p>Sekretaris\r\n<li>Ibu Cicih Nuraeni M.Kom</li></p>\r\n<p>Bendahara\r\n<li>Ibu Dwi Astuti Ratriningsih M.Kom</li></p>\r\n<p>Kesekretariatan</p>\r\n<p>Website dan IT\r\n<li>Bp. Ibnu Akil M.Kom</li></p>\r\n<p>Sosial Media\r\n<li>Dwi Andini Putri</li></p>\r\n<p>Administrasi\r\n<li>Ade Rizki Nuraeni</li></p>\r\n<p>Kontributor  Media\r\n<li>Bp. Achmad Syalabi Ichsan</li>\r\n<li>Bp. Yudi Fakhrurozi</li></p>\r\n\r\n\r\n\r\n','index.php/frontpage/menu/');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `address` text,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`user_name`,`email`,`phone`,`password`,`date_registered`,`last_login`,`type`,`first_name`,`last_name`,`institution`,`address`,`city`) values (3,'ibnuakil','ibnuakila@yahoo.com','085286866168','6c111e9925d85b7eea27e5a6ff688ced',NULL,NULL,'administrator','Ibnu','Akil','BSI','Jl. H. Kocen','Depok');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
