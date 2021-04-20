-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 05:00 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aemail` text NOT NULL,
  `aname` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `apass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aemail`, `aname`, `phone`, `apass`) VALUES
(1, 'aungkaungmyat@gmail.com', 'Aung Kaung Myat', '09799586616', 'asd123!'),
(2, 'tuntunoo@gmail.com', 'Tun Tun Oo', '09867465423', 'asd123!'),
(3, 'aungthanhtay@gmail.com', 'Aung Than Htay', '09765473623', 'jkl123'),
(4, 'myintmyinthtay@gmail.com', 'Myint Myint Htay', '09573648243', 'asd123'),
(5, 'kyikyimyint@gmail.com', 'Kyi Kyi Myint', '09672346735', 'asd456'),
(6, 'moemoe@gmail.com', 'Moe Moe', '09876787678', 'asd'),
(7, 'kyawnandaraung@gmai.com', 'Kyaw Nandar Aung', '0978674565456', 'asd123!');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyerid` int(11) NOT NULL,
  `buyernname` text NOT NULL,
  `buyeremail` text NOT NULL,
  `buyerph` varchar(30) NOT NULL,
  `buyeradd` text NOT NULL,
  `buyerpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyerid`, `buyernname`, `buyeremail`, `buyerph`, `buyeradd`, `buyerpass`) VALUES
(1, 'Aye Ei Ei Zin', 'ayeeieizin@gmail.com', '09765654565', 'Hledan', 'asd123!'),
(2, 'Shane Htet Zaw', 'shanehtetzaw@gmail.com', '09786545654', 'Hlaing Thar Yar', 'asd123'),
(3, 'Su Thiri San', 'suthirisan@gmail.com', '09789098789', 'San Chaung', 'jkl123!'),
(4, 'Myo Pa Pa Aung', 'myopapaaung@gmail.com', '09675654345', 'Tar Mwe', 'jkl123'),
(5, 'Win Kyaw Kyaw', 'winkyawkyaw@gmail.com', '09898767654', 'Hledan', '123asd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(20) NOT NULL,
  `catname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Clothes'),
(2, 'Shoes'),
(3, 'Accesseries'),
(4, 'Electronic'),
(5, 'Cosmetic'),
(6, 'Bags');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(20) NOT NULL,
  `itemname` text NOT NULL,
  `itemimg1` text NOT NULL,
  `itemimg2` text NOT NULL,
  `itemimg3` text NOT NULL,
  `itemprice` double NOT NULL,
  `catid` int(30) NOT NULL,
  `Description` text NOT NULL,
  `neworold` text NOT NULL,
  `sellerid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `itemimg1`, `itemimg2`, `itemimg3`, `itemprice`, `catid`, `Description`, `neworold`, `sellerid`) VALUES
(1, '\r\nNike Mens NSW Hoodie Pull Over Game Changer Hoodie Cq7171-010 for mens', 'c1.jpg', 'c2.jpg', 'c3.jpg', 123.55, 1, '	Change up the status quo when you slip into the Men\'s Nike Sportswear Game Changer Hoodie. This game-changing design is eye-catching, bold and ready for the streets.  Standard-Fitting hoodie drapes the body for an athletic fit. ', 'New', 1),
(2, 'adidas Men\'s Go to Graphic Tee\'s, Design Variation ', 'c4.jpg', 'c5.jpg', 'c6.jpg', 32.99, 1, '60% Polyester/40% Cotton climalite ® technology conducts sweat and heat away from the body Imported Machine Wash Made for comfort Breathability Screen Print Graphic Officially Licensed. ', 'New', 1),
(3, '28 Palms Men\'s Standard-Fit 100% Cotton Tropical Hawaiian Shirt ', 'c7.jpg', 'c8.jpg', 'c9.jpg', 12.33, 1, 'Take a vacation from your everyday with casual, refined shirts, shorts, and pants from 28 Palms. Our unique prints, carefree colors, and lived-in fabrics give you a day-at-the-beach feeling, even in your own backyard. And with two easy-to-wear fits, you’ll find your perfect one. Let yourself get away from the ordinary with 28 Palms, relaxed clothes for every man. ', 'New', 2),
(4, 'Goodthreads Men\'s Standard-Fit Long-Sleeve Banker Striped Shirt ', 'c10.jpg', 'c11.jpg', 'c12.jpg', 18.86, 1, 'Goodthreads’ collection of men’s clothing crafted with care takes wear-everywhere apparel to the next level. Create can’t-miss pairings with long- and short-sleeve button-down shirts in standard and slim fits, plus chino pants and shorts made from wrinkle-free non-iron fabric. ', 'New', 2),
(5, 'PUMA Men\'s Slash Cat Te PUMA cat screenprint on front', 'c13.jpg', 'c14.jpg', 'c15.jpg', 19, 1, 'No one remembers their first steps. Everyone remembers their first passion. When you pull on your nations colors everything comes rushing back to that first tournament. ', 'New', 2),
(6, 'Bye Bye Under Eye Full Coverage Anti Aging Waterproof Concealer \r\n\r\n', 'm1.jpeg', 'm2.jpeg', 'm3.jpeg', 20, 5, 'Developed with plastic surgeons, this #1 best-selling*, award-winning waterproof concealer delivers highly pigmented, long-lasting coverage that won’t crease or crack—and is now available in 48 true-to-skin shades! I', 'New', 3),
(7, 'Stila Glitter & Glow Liquid Eyeshadow ', 'm4.jpg', 'm5.jpg', 'm6.jpg', 45, 5, 'With a flat, fluffy applicator Magnificent Metals Glitter & Glow Liquid Eye Shadow glides effortlessly on to eyelids for a lightweight, long-lasting shimmer. With a water-infused blend of pearl and glitter.', 'New', 4),
(8, 'anastasia beverly hills Matte Lipstick', 'm7.jpg', 'm8.jpg', 'm9.jpg', 11, 5, 'Anastasia Beverly Hills Matte Lipstick is a full-pigment lip color with a velvety-smooth ultra-matte finish and comfortable wearability. Available in a wide range of neutral tones, bright accent shades and bold colors, this essential matte lipstick lets you create endless lip looks.', 'New', 4),
(9, 'New w/o Box Victoria\'s Secret Very Sexy Perfume For Her Eau De Parfum 1.7 oz', 'p1.jpeg', 'p2.jpeg', 'p3.jpeg', 25.99, 5, 'VERY SEXY by Victoria\'s Secret for WOMEN EAU DE PARFUM SPRAY 1.7 OZ Launched by the design house of Victoria\'s Secret in 2002, VERY SEXY by Victoria\'s Secret possesses a blend of floral tones of clementine, cactus flowers, vanilla orchid, blackberry, white amber and pimento. It is recommended for romantic wear. ', 'New', 2),
(10, 'Victoria\'s Secret Eau So Party 4-piece Gift Set, Fragrance Lotion ', 'p4.jpeg', 'p5.jpeg', 'p6.jpeg', 26, 5, 'Fragrance Lotion 100ml/ 3.4 fl oz. We\'re always here to help. We LOVE Victoria\'s Secret and know that you do too! Victoria\'s Secret 4-Piece Gift Set. ~Fragrance Wash/Gel 100ml/ 3.4 fl oz.', 'New', 4),
(11, 'Victoria\'s Secret Sexy Little Things Noir Tease Mist 2.5 fl', 'p7.jpg', 'p8.jpg', 'p9.jpg', 15, 5, 'The ultimate flirt, this scented mist thrills with an enticing mix of black vanilla, frozen pear and blooming gardenia. Fragrance type: Warm. Notes: Black vanilla, frozen pear and blooming gardenia. Plastic bottle TSA compliant for carry-on luggage. 75 ml/2.5 fl. oz. ', 'Old', 2),
(12, 'Caprilite Medium Saucer Sinamay Black Birdcage ', 'hat1.jpeg', 'hat2.jpeg', 'hat3.jpeg', 15, 3, 'Size: Diameter approx 25cm across. Netted Sinamay and feathers. Handmade in UK.\r\nMade to order from our London Studio, other colour combinations available on request. Attached by Thick satin headband.\r\n', 'Old', 3),
(13, 'HINDAWI Winter Hats Gloves for Women Knit', 'hat4.jpeg', 'hat5.jpeg', 'hat6.jpeg', 10, 3, 'Authentic knitting winter hats for women, new fashion,100% Brand New, Please purchase from HINDAWI to make sure the quality, others maybe counterfeit. Really thick and warm.', 'New', 3),
(14, 'NWT J. Crew Pearl Ribbed Beanie Hat ', 'hat7.jpeg', 'hat8.jpeg', 'hat9.jpeg', 20, 3, 'A magical mixture of merino wool, alpaca and stretch make this beanie supersoft (hence the name). Cozy up in classic neutrals like navy and black, or try out two of our new custom neon hues—vibrant lemon and neon berry.', 'New', 4),
(15, 'Gildan G185 Heavy Blend Adult Hooded Sweatshirt ', 'CW1.jpeg', 'CW2.jpeg', 'CW3.jpeg', 20, 1, '50% cotton 50% polyester. pill-resistant air jet yarn. double-needle stitching throughout. double-lined hood. pouch pocket. matching drawcord. 1x1 ribbed cuffs and waistband with spandex. Safety Orange is compliant with ANSI - ISEA 107 High Visibility Standards. ', 'New', 5),
(16, 'Daisy peplum top a long sleeve wrap front top ', 'CW6.jpeg', 'CW7.jpeg', 'CW8.jpeg', 29, 1, 'A long sleeve wrap front top in daisy print with tie belt waist and peplum hem. Lisa Marie wears a UK size 8 / EU size 36 / US size 4 and her height is 5\'9\" Product number: TJF17680 ', 'Old', 1),
(17, 'Flannel Long-Sleeve Plaid Flannel Shirt ', 'CW9.jpeg', 'CW10.jpeg', 'CW11.jpeg', 10, 1, '100% Cotton. Imported Button closure Machine Wash Made in Bangladesh Allover plaid and midweight flannel make this button-up shirt a go-to pick when the temperature drops Patch chest pocket, rounded hem and barrel cuffs Same fit.', 'New', 1),
(18, 'Anne Fontaine Women\'s 1 S Small Black Felicia Jacket', 'CW12.jpeg', 'CW13.jpeg', 'CW14.jpeg', 17, 1, 'Classic black dot print by French designer, Anne Fontaine. Lightweight, quilted, zips up the front and at the cuffs. Good pre-owned condition. Size 2, fits size small. Approximate measurements: chest 37\", waist 32\", length 22\", sleeves 23\".', 'New', 5),
(19, 'Lane Bryant Venezia Plus Size Coat Jacket Wool \r\n', 'CW15.jpeg', 'CW16.jpeg', 'CW17.jpeg', 20, 1, 'Not too heavy, not too light, this super-cozy puffer jacket is juuust right. Whether you\'re strolling the streets of a new town or tailgating with your nearest and dearest, this piece will keep you warm (while still looking cute). Bonus: the fur-trimmed hood detaches via an easy zip.\r\n', 'Old', 2),
(20, 'Ombre Black to Clear Sunglasses two half color', 'AS1.jpg', 'AS2.jpg', 'AS3.jpg', 20, 3, '	UV400 and Polarization for your eye protection. High Quality, Fashionable, Trendy, Stylish Eyewear for Ladies. Wear Over Prescription Eyeglasses. Outside Dimensions: 5 7/8\"W x 1 7/8\"H, Temple Arm Length: 5 3/4\". Will fit over prescription glasses up to 5 1/4\"W and 1 1/2\"H.\r\n\r\n', 'New', 5),
(21, 'Clear Crystal Kaleidoscope Sunglasses gray & black', 'AS4.jpg', 'AS5.jpg', 'AS6.jpg', 40, 3, 'INCREDIBLE KALEIDOSCOPE EFFECT: Real glass crystal lenses provide the most perfect, psychedelic effect to the wearer! COMES IN STUNNING CLEAR, Pink OR BLACK FRAME! Perfect for Halloween parties and costumes!', 'Old', 2),
(22, 'Kate Spade Fiona sunglasses brown color', 'AS7.jpg', 'AS8.jpg', 'AS9.jpg', 33.4, 3, 'kate spade was founded in 1993 with six simple handbags that shook up what had been a quiet accessories category. Fifteen years and a handbag revolution later, wit and playful sophistication are hallmarks of everything \"kate spade,\" a world that now includes a broad array of products. A strong sense of personal style and a passion for color set the tone for each kate spade collection. kate spade continues to find inspiration in the everyday and the unpredictably elegant, bringing a graceful, exuberant approach to style and living. ', 'New', 5),
(23, 'Sony a7 III Full-frame Mirrorless Interchangeable-Lens', 'a1.jpg', 'a2.jpg', 'a3.jpg', 20, 4, 'Advanced 24.2MP BSI Full frame Image Sensor w/ 1.8X readout speed Advanced 24.2MP Back Illuminated 35 millimeter Full frame Image Sensor Sony test conditions. Compare to the 7 II .15 stop dynamic range, 14 bit uncompressed RAW, ISO 50 to 204,800. Compatible with Sony E mount lenses.', 'New', 2),
(24, 'Sony Alpha a7IIK Mirrorless Digital Camera', 'a4.jpg', 'a5.jpg', 'a6.jpg', 129.55, 4, 'World’s first 5 axis in body image stabilization in a full frame camera. Use your favorite lenses without blur from camera shake; High 50 Mbps bit rate XAVC S21 format recording of Full HD movies. Capture stunning images with full frame, 24.3MP resolution. Lens Compensation: Peripheral shading, chromatic aberration, distortion', 'New', 1),
(25, 'Sony Alpha A6100 Mirrorless Camera', 'a7.jpg', 'a8.jpg', 'a9.jpg', 100.3, 4, 'World’s fastest AF at 0.02 sec. W/ real-time AF & Object tracking. Wide 425-phase/425-contrast detection AF points over 84% of sensor .24.2MP2 APS-C Exmor sensor w/ front end LSI and ISO up to 51,200. Up to 11fps continuous shooting5 at 24.2MP RAW w/ AF/AE tracking. Real-time AF Tracking, Real-time Eye AF for human and animal. Movie recording with mic. and 180-degree tiltable 3” touchscreen LCD', 'New', 1),
(26, 'Samsung Galaxy A20 ', 's1.jpg', 's4.jpg', 's5.jpg', 299, 4, 'Samsung Galaxy A20 smartphone was launched in March 2019. The phone comes with a 6.40-inch touchscreen display with a resolution of 720x1560 pixels.\r\n\r\nSamsung Galaxy A20 is powered by an octa-core Exynos 7884 processor that features 2 cores clocked at 1.6GHz and 6 cores clocked at 1.35GHz. It comes with 3GB of RAM.\r\n\r\nThe Samsung Galaxy A20 runs Android and is powered by a 4000mAh battery.', 'New', 3),
(27, 'Samsung Galaxy A10', 's2.jpg', 's6.jpg', 's7.jpg', 149, 4, 'The Samsung Galaxy A10 comes with a  6.2-inch HD+ Infinity-V Display panel bearing 720x1520 pixels resolution The phone is powered by an octa-core Exynos 7884 processor paired with 2GB of RAM and 32GB of internal storage, which can be further expanded up to 512GB via microSD card For optics, the Galaxy A10 has a 13MP rear camera and a 5MP selfie camera. ', 'New', 4),
(28, 'Samsung Galaxy S10+ Plus', 's3.jpg', 's8.jpg', 's9.jpg', 120.3, 4, 'The Samsung Galaxy S10 Plus is not a radical reinvention of the smartphone. But Samsung’s new flagship is not lacking in innovation or ambition. The S10 Plus is the world’s first phone with an ultrasonic fingerprint sensor built into Samsung’s new 6.4-inch Infinity-O display, and it’s also the first Samsung phone with five cameras, including an ultra-wide shooter on the back.\r\n\r\n', 'New', 5),
(29, 'Emoji Slippers', 'SW1.jpeg', 'SW2.jpeg', 'SW3.jpeg', 20, 2, 'These funny emotion slippers are made of plush and soft velvet, extra warm and comfortable. Non-slip soles: Bottom covered with anti-skid particles, wear-resistant, skid resistance. It\'s great way to express yourself with these crazy and fun emoticons. These funny and crazy emoji slippers are made to give as direct message and to make you laugh without any words.', 'Old', 9),
(30, 'NEW Roxy Sneaker Shoes', 'SW4.jpeg', 'SW5.jpeg', 'SW6.jpeg', 30, 2, 'Upper: 100% Textile, Lining: 100% Textile, Outsole: 60% Textile / 40% TPR.Upper: Textile with elasticisized top line with embroidered or printed heel detail. ROXY flag label. Closure: Knotted cotton laces. Insole: Memory foam padded canvas insole with graphic print. Terry cloth lining. Outsole: Flexible TPR injected outsole with molded arch detail\r\n\r\n', 'New', 10),
(31, 'Red converse size women’s 7 EUC', 'SW7.jpeg', 'SW8.jpeg', 'SW9.jpeg', 15, 2, 'The shoes show general signs of street wear. There is soiling and scuffing to the uppers. The laces are fraying. Please see the description section for additional images. The original box is not included. The footwear may be slightly darker in person than it appears in the images.', 'Old', 7),
(32, 'Pink and White Vans', 'SW10.jpeg', 'SW11.jpeg', 'SW15.jpg', 26, 2, 'Continually championing active and contemporary lifestyles, Vans masterfully represents classic West Coast style. Vans sneakers are instantly recognized by their classic silhouettes and bold white soles. Comfortable, practical and abiding in every regard, each distinctive silhouette is brought up to date by quirky prints and bold colorways.', 'New', 8),
(33, 'Lisa For Donald J Pliner Lucky flats', 'SW12.jpeg', 'SW13.jpeg', 'SW14.jpeg', 35, 2, 'Beautiful neutral. Clean. No scrapes, scratches, odors. Small purple mark on outer side of left shoe.', 'Old', 9),
(34, 'adidas Originals Men\'s Daily 2.0 Sneaker ', 'b1.jpg', 'p1.jpg', 'p2.jpg', 35, 2, '100% Textile and Synthetic. Imported Rubber sole Suede upper for a plush look adidas wordmark on tongue label and synthetic leather heel tab. Gum rubber cupsole for excellent grip.\r\n\r\n', 'New', 9),
(35, 'lenovo laptop', 'l1.jpg', 'l2.jpg', 'l4.jpg', 120, 4, 'Lenovo ThinkPad is a Windows 10 laptop with a 14.00-inch display that has a resolution of 1920x1080 pixels. It is powered by a Core i7 processor and it comes with 12GB of RAM. The Lenovo ThinkPad packs 256GB of SSD storage. Graphics are powered by Intel HD Graphics 520.', 'new', 11),
(36, 'Addidas', 'p3.jpg', 'p4.jpg', 'p2.jpg', 30, 2, 'Adidas AG is a multinational corporation, founded and headquartered in Herzogenaurach, Germany, that designs and manufactures shoes, clothing and accessories. ', 'new', 0),
(37, 'headphone', 'e1.jpg', 'e2.jpg', 'e3.jpg', 50, 4, 'Headphones. Headphones are small speakers that can be worn in or around your ears. ... Smaller headphones, often called earbuds or earphones, are placed inside the outer part of your ear canal.', 'old', 0),
(38, 'headphone', 'e1.jpg', 'e2.jpg', 'e3.jpg', 50, 4, 'Headphones. Headphones are small speakers that can be worn in or around your ears. ... Smaller headphones, often called earbuds or earphones, are placed inside the outer part of your ear canal.', 'old', 1),
(39, 'PUMA', 'p2.jpg', 'b2.jpg', 'p3.jpg', 40, 2, 'Puma SE, branded as Puma, is a German multinational company that designs and manufactures athletic and casual footwear, apparel and accessories, which is headquartered in Herzogenaurach, Bavaria, Germany. Puma is the third largest sportswear manufacturer in the world. The company was founded in 1948 by Rudolf Dassler.', 'old', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(50) NOT NULL,
  `orderprice` double NOT NULL,
  `orderDate` date NOT NULL,
  `buyerid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `orderprice`, `orderDate`, `buyerid`) VALUES
(1, 34.33, '2019-11-28', 2),
(2, 120.22, '2019-11-28', 2),
(3, 30.99, '2019-11-28', 2),
(4, 234.11, '2019-11-28', 2),
(5, 23.45, '2019-11-28', 2),
(6, 78.99, '2019-11-28', 2),
(7, 67.89, '2019-11-28', 2),
(8, 45.78, '2019-11-28', 2),
(9, 89.88, '2019-11-28', 2),
(10, 99.22, '2019-11-28', 2),
(11, 100.22, '2019-12-02', 2),
(12, 58.67, '2019-12-02', 2),
(13, 67.89, '2019-12-02', 2),
(14, 89.67, '2019-12-02', 2),
(15, 58.67, '2019-12-02', 2),
(16, 67.34, '2019-12-02', 4),
(17, 90.87, '2019-12-02', 4),
(18, 68.23, '2019-12-02', 4),
(19, 128.24, '2019-12-02', 4),
(20, 23.89, '2019-12-02', 4),
(21, 96.38, '2019-12-05', 4),
(22, 78.56, '2019-12-05', 4),
(23, 89.67, '2019-12-05', 4),
(24, 89.56, '2019-12-05', 4),
(25, 90.67, '2019-12-05', 6),
(26, 78.14, '2019-12-05', 6),
(27, 96.23, '2019-12-05', 6),
(28, 90.34, '2019-12-05', 6),
(29, 78.22, '2019-12-05', 6),
(30, 56.67, '2019-12-05', 6);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerid` int(20) NOT NULL,
  `sellername` text NOT NULL,
  `selleremail` text NOT NULL,
  `sellerpassword` varchar(100) NOT NULL,
  `sellerph` varchar(30) NOT NULL,
  `selleradd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerid`, `sellername`, `selleremail`, `sellerpassword`, `sellerph`, `selleradd`) VALUES
(1, 'Phoo Pyae Thandar kyaw', 'phoo@gmail.com', 'asd123!', '09452981040', 'greet street 1'),
(2, 'Hsu yi Nandar', 'hsuyi@gmail.com', 'asd123!', '09452981041', 'greet street 2'),
(3, 'Shwe Zin Oo', 'shwezin@gmail.com', 'asd123!', '09452981042', 'greet street 3'),
(4, 'Htay Htay Win', 'hatyhat@gmail.com', 'asd123!', '09452981043', 'Htay win street'),
(5, 'Kyi Phyu Moe Tun', 'kyiphyu@gmail.com', 'asd123!', '09452981044', 'Htain Min street'),
(6, 'Yandar Lwin', 'yandar@gmail.com', 'asd123!', '09452981045', 'Htain Min street'),
(7, 'Thiri May', 'thiri@gmail.co', 'asd123!', '09452981046', 'Htain Min street'),
(8, 'Hnin Nu Wai Aung', 'hninnu@gmail.com', 'asd123!', '09452981047', 'Htain Min street'),
(9, 'Khaing Thiri San', 'khaingthiri@gmail.com', 'asd123!', '09452981049', 'Jay Min street'),
(10, 'Nang Lai Lai Win', 'nanglai@gmail.com', 'asd123!', '09452981050', 'Minthar street'),
(11, 'NextIN', 'nextincompany@gmail.com \r\n', 'netin123!@#', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyerid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
