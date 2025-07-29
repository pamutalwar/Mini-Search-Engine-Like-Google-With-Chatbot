-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 07:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brahmand`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_website`
--

CREATE TABLE `add_website` (
  `id` int(11) NOT NULL,
  `website_title` varchar(300) NOT NULL,
  `website_link` varchar(300) NOT NULL,
  `website_keywords` varchar(300) NOT NULL,
  `website_description` varchar(300) NOT NULL,
  `website_images` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_website`
--

INSERT INTO `add_website` (`id`, `website_title`, `website_link`, `website_keywords`, `website_description`, `website_images`) VALUES
(1, 'pasta | How to make pasta | Indian style past', 'https://www.indianhealthyrecipes.com/masala-pasta/', 'masala pasta recipe,how to make pasta,indian style pasta', 'Sep 20, 2019 - Masala pasta recipe – Indian style flavorful & delicious masala pasta that will be your new favorite! ... This pasta recipe is made in Indian style using spices & herbs used in Indian cooking. ... I have shared the basic masala pasta recipe here along with some tips.', 'rose1.jpeg'),
(2, 'Pasta recipes | BBC Good Food', 'https://www.bbcgoodfood.com/recipes/collection/pasta', 'pasta recipes,pasta recipe,how to make pasta,indian style pasta', 'Delicious pasta dishes from classic spaghetti Bolognese to easy salmon linguine. Find the perfect pasta recipe for a midweek meal or entertaining guests. ... Hankering for a comforting bowl of pasta in creamy sauce?', 'website_images/pasta2.jpg'),
(3, 'Pasta - Wikipedia', 'https://en.wikipedia.org/wiki/Pasta', 'pasta recipes,pasta recipe,how to make pasta,indian style pasta', 'Pasta sauces similarly may vary in taste, color and texture. In terms of nutrition, cooked plain pasta is 31% carbohydrates (mostly starch), 6% protein, and low in fat, with moderate amounts of manganese, but pasta generally has low micronutrient content. Pasta may be enriched or fortified, or made ', 'website_images/pasta3.jpg'),
(4, 'masala pasta recipe | indian style pasta - Hebbars Kitchen', 'https://hebbarskitchen.com/masala-pasta-recipe-indian-pasta-recipes/', 'pasta recipes,pasta recipe,how to make pasta,indian style pasta', 'Feb 7, 2019 - masala pasta recipe, indian style pasta, indian pasta recipes with step by step photo/video. nice twist to typical italian pasta recipe with spices ...', 'website_images/pasta4.jpg'),
(5, '52 Easy Pasta Recipes - Best Ideas for Good Pasta Dishes', 'https://www.womansday.com/food-recipes/food-drinks/g2324/pasta-recipes/', 'pasta recipes,pasta recipe,how to make pasta,indian style pasta', 'Dec 5, 2017 - Pasta is probably one of the easiest dinner recipes to do without messing up. Here are our favorite pasta recipes to try during the week.', 'website_images/pasta5.jpg'),
(6, '75+ Easy Pasta Recipes - Best Pasta Dinner Ideas—Delish.com', 'https://www.delish.com/cooking/recipe-ideas/g3176/weeknight-pasta-dinners/', 'pasta recipes,pasta recipe,how to make pasta,indian style pasta', 'Nov 26, 2019 - Dont let complicated recipes stand in the way of you and carbs. These easy pasta dishes will make dinner stress-free, and are delish enough ...', 'website_images/pasta6.jpg'),
(7, 'Dosa - Wikipedia', 'https://en.wikipedia.org/wiki/Dosa', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'A dosa is a cooked flat thin layered rice batter, originating from South India, made from a fermented batter. It is somewhat similar to a crepe in appearance. Its main ingredients are rice and black gram ground together in a fine, smooth batter with a dash of salt.', 'website_images/dosa1.jpg'),
(8, 'An Easy to Make Dosa Recipe - The Spruce Eats', 'https://www.thespruceeats.com/how-to-make-dosa-1957716', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'Jun 27, 2019 - Dosa (crispy, savory pancakes) from South India is a staple food in its home region. In the rest of the country too, dosas are hugely popular and ...', 'website_images/dosa2.jpg'),
(9, 'Dosa recipe | How to make dosa batter - Swasthis Recipes', 'https://www.indianhealthyrecipes.com/dosa-recipe-dosa-batter/', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'Dosa recipe, Learn how to make dosa batter at home. This is a detailed post that will guide you to make dosas of all kinds – soft, crispy, restaurant style, home ...', 'website_images/dosa3.jpg'),
(10, 'Classic Masala Dosa Recipe - NYT Cooking', 'https://cooking.nytimes.com/recipes/1017153-classic-masala-dosa', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'A properly made crisp and savory Indian dosa is wonderfully delicious, and fairly simple to make at home, with this caveat: the batter must be fermented ...', 'website_images/dosa4.jpg'),
(11, 'Masala Dosa - Times Food', 'https://recipes.timesofindia.com/recipes/masala-dosa/rs54289752.cms', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'Dec 4, 2018 - Masala Dosa Recipe- Learn how to make Masala Dosa step by step on Times Food. Find all ingredients and method to cook Masala Dosa ...', 'website_images/dosa5.jpg'),
(12, 'Masala Dosa - NDTV Food', 'https://food.ndtv.com/recipe-masala-dosa-219232', 'dosa recipes,dosa recipe,how to make dosa,indian style dosa', 'Masala Dosa Recipe, Learn how to make Masala Dosa (absolutely delicious recipe of Masala Dosa ingredients and cooking method) About Masala Dosa ...', 'website_images/dosa6.jpg'),
(13, 'Pizza Hut Now Starting @Rs 99 | Order Pizzas Online for ...', 'https://www.pizzahut.co.in/', 'pizza recipes,pizza recipe,how to make pizza,indian style pizza', 'Order the Tastiest Pan Pizzas at amazing prices. Get 2 Personal Pizzas at Rs. 99 and 2 Medium Pizzas at Rs. 199 Each, Everyday. Order online or takeaway.', 'website_images/piza1.jpg'),
(14, 'Dominos Pizza: Order Pizza Online | Get 2 Regular Pizzas ...', 'https://www.dominos.co.in/', 'pizza recipes,pizza recipe,how to make pizza,indian style pizza', 'Our Menu. Explore our range of delicious Pizzas, delivered in 30 minutes! DISCOVER PIZZA.\r\n&#8206;Dominos Pizza Menu · &#8206;Veg Pizza · &#8206;Dominos Pizza · &#8206;Non-Veg Pizza', 'website_images/piza2.jpg'),
(15, 'Dominos: Pizza Delivery & Carryout, Pasta, Chicken & More', 'https://www.dominos.com/en/', 'pizza recipes,pizza recipe,how to make pizza,indian style pizza', 'Order pizza, pasta, chicken & more online for carryout or delivery from your local Dominos restaurant. View our menu, find locations and track orders.', 'website_images/piza4.jpg'),
(16, 'Pizza Hut: Pizza Delivery | Pizza Carryout | Coupons | Wings ...', 'https://www.pizzahut.com/index.php', 'pizza recipes,pizza recipe,how to make pizza,indian style pizza', 'Order pizza online for fast delivery or carryout from a store near you. View our full menu, see nutritional information, find store locations, and more.', 'website_images/piza5.jpg'),
(17, 'Noodle - Wikipedia', 'https://en.wikipedia.org/wiki/Noodle', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Noodles are a type of food made from unleavened dough which is rolled flat and cut, stretched or extruded, into long strips or strings. Noodles can be refrigerated for short-term storage or dried and stored for future use. Noodles are usually cooked in boiling water, sometimes with cooking oil or sa', 'website_images/noodles1.jpg'),
(18, 'Veg noodles recipe | How to make noodles | Vegetable ...', 'https://www.indianhealthyrecipes.com/veg-noodles-recipe/', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Oct 14, 2019 - Veg noodles recipe – A quick dinner idea for busy week nights. ... Noodles : For this recipe you can use any kind of noodles like whole grain, hakka noodles, egg noodles, soba noodles etc. ... So just like any other Chinese dishes the vegetable noodles recipe has to be prepared on a h', 'website_images/noodles2.jpg'),
(19, 'Buy Noodles, Pasta and Vermicelli online at the best price ...', 'https://www.bigbasket.com/pc/snacks-branded-foods/noodle-pasta-vermicelli/', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Add variety in your menu as Noodles, Pasta and Vermicelli is available online in bigbasket at the best price. Choose from a wide variety of Noodles and pasta ...', 'website_images/noodles3.jpg'),
(20, 'Noodles: Buy Noodles Online at Best Prices in India-Amazon.in', 'https://www.amazon.in/Noodles/b?ie=UTF8&node=4859728031', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Results 1 - 24 of 518 - Online shopping for Noodles - Pasta & Noodles from a great selection at Grocery & Gourmet Foods Store.', 'website_images/noodles4.jpg'),
(21, 'Delicious, delightful food | A treat for food lovers&#8206;', 'http://www.mptourism.com/', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Visit famous street food joints to taste local, exotic flavours of Madhya Pradesh. Visit the Heart of Incredible India over scrumptious food! Do explore the local flavours.', 'website_images/noodles5.jpg'),
(22, 'Buy Noodles, Pasta and Vermicelli online at the best price ...', 'https://www.bigbasket.com/pc/snacks-branded-foods/noodle-pasta-vermicelli/', 'noodles recipes,noodles recipe,how to make noodles,indian style noodles', 'Add variety in your menu as Noodles, Pasta and Vermicelli is available online in bigbasket at the best price. Choose from a wide variety of Noodles and pasta ...', 'website_images/noodles5.jpg'),
(28, 'Narendra Modi <br> Wikipedia', 'https://en.wikipedia.org/wiki/Narendra_Modi', 'narendra modi,who is the prime minister of india', 'Narendra Damodardas Modi is an Indian politician who has served as the 14th Prime Minister of India since May 2014. Modi was Chief Minister of Gujarat from 2001 to 2014 and is the Member of Parliament for Varanasi.', 'website_images/a1.jpg'),
(29, ' Prime Minister of India', 'https://www.pmindia.gov.in/en/', 'narendra modi ,who is the Prime Minister of India', '6 hours ago — Shri Narendra Modi was sworn-in as Indias Prime Minister on 30th May 2019, marking the start of his second term in office.', 'website_images/a2.jpg'),
(30, 'Instagram | Narendra Modi (@narendramodi)', 'https://www.instagram.com/narendramodi/?hl=en', 'narendra modi ,who is the Prime Minister of India ', 'Prime Minister of India. www.narendramodi.in. 595 posts; 75.7M followers; 0 following. Vadnagar has a rich history and vibrant culture.', 'website_images/a3.jpg'),
(31, 'Facebook |  Narendra Modi', 'https://www.facebook.com/narendramodi/', 'narendra modi ,who is the Prime Minister of India ', 'Narendra Modi. 47395825 likes · 249411 talking about this. Prime Minister of India.', 'website_images/m2.jpg'),
(32, 'The Indian Express | News, Photos, Latest News Headlines about Narendra Modi', 'https://indianexpress.com/about/narendra-modi/', 'narendra modi ,who is the Prime Minister of India ', 'Narendra Damodardas Modi is the 15th Prime Minister of India and assumed office in May 2014. He was re-elected in the 17th Lok Sabha from Varanasi and led ...', 'website_images/a5.jpg'),
(33, 'Vladimir Putin | President of Russia <br> Wikimedia ', 'https://en.wikipedia.org/wiki/Vladimir_Putin', 'vladimir putin, who is the president of Russia', 'Vladimir Vladimirovich Putin is a Russian politician and former intelligence officer, serving as the current president of Russia. Putin has served continuously as president or prime minister since 1999: as prime minister from 1999 to 2000 and from 2008 to 2012, and as president from 2000 to 2008 and', 'website_images/a6.jpg'),
(34, 'Forbes | Vladimir Putin ', 'https://www.forbes.com/profile/vladimir-putin/?sh=10bba1326fc5', 'vladimir putin, who is the president of Russia', 'Born in 1952 in Saint Petersburg, Putin served as Prime Minister for one year during Yeltsin s presidency and ascended to the highest office in 2000. Putin s ...                               Place of birth: Saint Petersburg\r\nEducation: Saint Petersburg State University', 'website_images/a7.jpg'),
(35, ' Twitter | President of Russia (@KremlinRussia_E) / Twitter', 'https://twitter.com/KremlinRussia_E', 'vladimir putin, who is the president of Russia', 'Vladimir Putin had a telephone conversation with President of the Republic of South Africa Cyril Ramaphosa at the South African side s initiative. 1,365.', 'website_images/a9.jpg'),
(36, 'YouTub | Russian President Putin Attends Annual Awards Ceremony to ...', 'https://www.youtube.com/watch?v=MwrxNCyge7Q', 'vladimir putin, who is the president of Russia', 'Vladimir Putin LIVE: Russian President Putin Attends Annual Awards Ceremony to Mark Russia DayRussian President Vladimir Putin attends...', 'website_images/a10.jpg'),
(37, 'NDTV | Vladimir putin ', 'https://www.ndtv.com/world-news/vladimir-putin-pays-tribute-to-berlusconi-calling-him-a-true-friend-4114845', 'vladimir putin, who is the president of Russia', '\"Irreplacable Loss\": Putin Pays Tribute To \"True Friend\" Silvio Berlusconi', 'website_images/a101.jpg'),
(38, 'Allu Arjun | Indian actor <br> Wikipedia', 'https://en.wikipedia.org/wiki/Allu_Arjun', 'Allu Arjun', 'Allu Arjun (born 8 April 1982) is an Indian actor who works in Telugu films. One of the highest paid actors in India, Arjun is also known for his ...', 'website_images/a11.jfif'),
(39, 'YouTub |  Allu Arjun', 'https://www.youtube.com/channel/UCLiwEQsSEmXe4ShFVJk_hAQ', 'Allu Arjun', 'Hi! This is Allu Arjun and Welcome to my Official YouTube Channel! You can watch my latest movie updates, trailers, videos, songs, events, interviews, ...', 'website_images/a16.jpg'),
(40, 'Instagram | Allu Arjun (@alluarjunonline) • Instagram photos and videos', 'https://www.instagram.com/alluarjunonline/?hl=en', 'Allu Arjun', '21M Followers, 1 Following, 574 Posts - See Instagram photos and videos from Allu Arjun (@alluarjunonline)', 'website_images/a12.jfif'),
(41, 'Twitter | Allu Arjun (@alluarjun)', 'https://twitter.com/alluarjun?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Allu Arjun', 'Twitter account of https://twitter.com/alluarjun?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor 7.7M followers in the twitter account ', 'website_images/a13.jfif'),
(42, ' Facebook | Allu Arjun', 'https://www.facebook.com/AlluArjun/', 'Allu Arjun', 'Allu Arjun. 13969284 likes · 242339 talking about this. The official page of actor Allu Arjun. My team(AA) and I will keep you updated.', 'website_images/a14.jfif'),
(43, ' YouTube', 'https://www.youtube.com/', 'youtub,YouTub', ' Enjoy the videos and music you love, upload original content, and share it all with friends, family, and the world on YouTube.', 'website_images/a17.png'),
(44, 'Wikipedia | YouTub', 'https://en.wikipedia.org/wiki/YouTube', 'youtub,YouTub', 'YouTube is an American online video-sharing platform headquartered in San Bruno, California, founded by three former PayPal employees—Chad Hurley, ...\r\nFounders: Chad Hurley, Steve Chen, Jawed K...\r\nParent organization: Google', 'website_images/a20.png'),
(45, ' How to earn money on YouTube', 'https://support.google.com/youtube/answer/72857?hl=en', 'youtub,YouTub', 'You can earn money on YouTube by applying for and being accepted to the YouTube Partner Program. Only channels that follow our YouTube channel monetization ...', 'website_images/a18.jfif'),
(46, ' YouTube (@youtube) • Instagram photos and videos', 'https://www.instagram.com/youtube/?hl=en', 'youtub,YouTub', '30M Followers, 1748 Following, 4147 Posts - See Instagram photos and videos from YouTube (@youtube)', 'website_images/a21.png'),
(47, ' History of YouTube', 'https://en.wikipedia.org/wiki/History_of_YouTube', 'youtub,YouTub', 'YouTube is an American online video-sharing platform headquartered in San Bruno, California, founded by three former PayPal employees—Chad Hurley, ...', 'website_images/a19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'pamu', '$2y$10$ND7ufM.3yRM0S.SvQbgWCeQwTM3m027nsKi6DICr/KeekU.N8/oGW'),
(2, 'hello', '$2y$10$Z9He0SJR8Vtatzu812GSK.ZFMRnbppzq2KpZjgigUBQ7Ja3f/a64m');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'pamu', '$2y$10$AgaNsZWjXIzeDAmqIu0Eye9JapvNWPP1SHt7LqAFfoEA3xCpPM98K', 'admin', '2024-04-11 13:58:04', '2024-04-11 13:58:04'),
(2, 'dd', '$2y$10$qTiJIZ5tPx/cZ8JC56BwM.1qATK99DBbhZUVJ0S.BjGPlPqfsSPYy', 'editor', '2024-04-12 18:30:17', '2024-04-12 18:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_website`
--
ALTER TABLE `add_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_website`
--
ALTER TABLE `add_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
