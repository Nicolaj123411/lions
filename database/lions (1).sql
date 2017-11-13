-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2017 at 06:39 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lions`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_content`
--

CREATE TABLE `event_content` (
  `event_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_content`
--

INSERT INTO `event_content` (`event_id`, `img`, `title`, `content`, `id`) VALUES
(2, 'event_billeder/julemarked.jpg', 'Julemarkedet på Ulstrup Slot', '						Snart åbner vi endnu engang for det årlige Julemarked på Ulstrup Slot, det er som sædvandlig den første hele weekend i december, dvs. den 2-3. december 2017. Husk at der er gratis entre og kun en lille p-afgift på 10kr\r\n					', 3),
(1, 'event_billeder/julekoncert.jpg', 'Jubilæumskoncerte', '							I september 2017 er det 30 år siden at Lions Fjends blev stiftet, som en lokal afdeling af den verdensomspændende humanitære organisation Lions Clubs International. <br><br><br><br><br>Dette fejrer vi med en koncert med Prinsens Musikkorps og solist Mette Poulsen på Kongenshus Efterskole onsdag 15. november 2017, kl. 19-21:30. Under koncerten donerer vi midler til projekter i bl.a. lokalområdet.\r\n						', 11),
(1, 'event_billeder/julekoncert.jpg', 'Tilmelding', 'Billetter til arrangementet (incl. kaffe og kage) koster kr. 50,- og kan købes og betales med Dankort.Desuden kan billetter reserveres hos Ejvind Jakobsen, tlf. 40411296..', 12),
(16, 'event_billeder/banko.jpg', 'Bankospil i Ishøj', '\r\n							Gennem efterhånden mange år Lions Club Ishøj har arrangeret bankospil for kommunens pensionister. I år er vi i Ishøj søndag eftermiddag samlet til bankospil i kantinen på Strandgårdskolen. Der bliver spillet om købmandskurve som hovedgevinster og en masse dejlige ting som række- og sidegevinster. Udover at spille banko er der også tid til hygge og drikke en kop kaffe med kringle eller en kold øl - alt sammen gratis. \r\n						', 15),
(16, 'event_billeder/banko.jpg', 'Husk! Det er gratis', 'Pensionist-Banko afholdes normalt den første søndag i november. Hvis du vil tilmeldes, så kan du sende en mail til ishoej@lions.dk.', 17),
(2, 'Nyt billede', 'Husk gratis entre', 'Til Julemarkedet plejer vi at få besøg af 3.000 - 4.000 gæster, og for mange af vores gæster er det en tradition at besøge Julemarkedet og gøre et par juleindkøb. Mange har en dejlig familie oplevelse med børnebørn, med venner, naboer eller måske bare en lejlighed til at komme ud og få lidt frisk luft.', 22),
(2, 'Nyt billede', 'Åbent lørdag og søndag', 'Julemarkedet er åbent lørdag og søndag fra 10.00 - 16.00, så man har god tid til at nyde dagen på Ulstrup Slot - gøre en god handel, få noget lækkert til ganen og samtidig komme i julestemning i de mange hyggelige boder, der er opstillet i kælderen under hovedfløjen og i en af sidefløjene - det hele samlet omkring slotsgården.\r\n\r\n', 23);

-- --------------------------------------------------------

--
-- Table structure for table `event_time`
--

CREATE TABLE `event_time` (
  `event_id` int(11) NOT NULL,
  `event_times` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_time`
--

INSERT INTO `event_time` (`event_id`, `event_times`, `description`, `id`) VALUES
(2, '10:00', 'Markedet åbner', 6),
(2, '12:30', 'Julemanden kommer', 7),
(2, '13:30', 'Hestevogn med ryttere drager afsted', 8),
(1, '19:00', 'Velkomst og donationer samt servering af kaffe og kage', 13),
(1, '20:00', 'Koncert med Prinsens Musikkorps og solist Mette Poulsen', 14),
(1, '21:00', 'Afslutning', 17),
(16, '10:00', 'Markedet åbner', 20),
(16, '12:30', 'Julemanden kommer', 25),
(16, '13:30', 'Hestevogn med ryttere drager afsted', 26);

-- --------------------------------------------------------

--
-- Table structure for table `lions_event`
--

CREATE TABLE `lions_event` (
  `id` int(11) NOT NULL,
  `event_date` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `public` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lions_event`
--

INSERT INTO `lions_event` (`id`, `event_date`, `created`, `public`) VALUES
(1, '12.April', '2017-11-13 05:22:18', 1),
(2, '2. December', '2017-11-13 04:20:15', 1),
(16, '21.November', '2017-11-13 04:23:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `img`, `created`) VALUES
(1, 'Lions yder hurtig hjælp: 250.000 kr. til børnene i Caribien', '<p>\r\n						Det er utroligt vigtigt med hurtig hjælp, da tusindvis af børn i Caribien lige nu står med et akut behov for vand, mad og beskyttelse efter orkanen Irmas voldsomme hærgen. Lions Katastrofehjælp har derfor straks doneret 250.000 kroner til UNICEFs indsats i regionen.\r\n					</p>\r\n\r\n					<p>\r\n						Veje, huse, broer, hospitaler og skoler er jævnet med jorden på flere caribiske øer. I ø-samfundet Barbuda er 90 procent af bygningerne ødelagte. Også på Anguilla er flere huse ødelagte og de fleste skoler nu ubrugelige.\r\n					</p>\r\n\r\n					<p>\r\n						UNICEF er i fuld gang med at uddele nødhjælp, men behovet vokser, efterhånden som der kommer et bedre overblik over skadernes omfang. UNICEFs indsats afhænger 100 procent af støtte udefra, og nu har Lions Katastrofehjælp valgt at støtte med 250.000 kroner.\r\n					</p>\r\n\r\n					<p>\r\n						”I nyhederne ser vi, at der er et akut behov for nødhjælp til øsamfund, hvor hele infrastrukturen er ødelagt. Vi ved, at der skal hurtig hjælp frem for at sikre, at befolkning ikke rammes dobbelt af både ødelæggelser og epidemier”, siger næstformand i Lions Katastrofehjælp, Frank Stjerne. -\"Og ved at yde hjælpen via UNICEF får vi en hurtig indsats, der er alt afgørende for, at børnene overlever og får de bedste betingelser for at komme videre\".\r\n					</p>\r\n					\r\n					<p>\r\n						Lige nu bliver der uddelt vandrensningstabletter for at sikre rent vand i de første kritiske døgn. Samtidig uddeler UNICEF tæpper, telte og hygiejneartikler til familier, der har mistet deres hjem, og sørger for, at der er skolematerialer, så børnene kan fortsætte et minimum af skolegang. Skoleåret er lige startet, og erfaringen viser, at hvis børnene først kommer bagud, fordi de ikke længere har adgang til undervisning, er det meget svært at få dem tilbage i skole igen.\r\n					</p>\r\n					\r\n					<p>\r\n						UNICEF har samtidig medarbejdere i alle berørte lande, der er særligt uddannede i at give psykosocial hjælp, som sikrer, at de mest udsatte børn får bearbejdet de voldsomme oplevelser.\r\n					</p>\r\n\r\n					<p>\r\n						Lions Katastrofehjælp har længe været en af UNICEFs gode samarbejdspartnere og har før støttet UNICEFs indsamling til blandt andre ofrene for jordskælvet i Nepal.\r\n					</p>', 'nyheder_billeder/nyheder_3.jpg', '2017-11-13 04:09:28'),
(3, 'Marathon på indlandsisen: Kørestol ingen hindring', '<p>\r\n						Når 175 kuldegale løbere  udfordrer den bidende grønlandske kulde i The Polar Circle Marathon, så er det med tre helt usædvanlige deltagere, tvillingerne Steen og Peder Mondrop - bedre kendt som Team Tvilling - i selskab med deres storebror. Færden over isen er sponseret af Lions klubberne i Hovedstadszonen.\r\n					</p>\r\n					\r\n					<p>\r\n						Samarbejdet begyndte på et zonemøde sidste år, hvor Steen Mondrop sluttede et spændende foredrag af med at fortælle om sin dengang hemmelige ide om at køre hen over indlandsisen i en specialbygget \"cykelslæde\". På rekordtid besluttede klubberne, at det projekt støtter klubberne, hvis specialkøretøjet blot bliver forsynet med et Lions logo.\r\n					</p>\r\n					\r\n					<p>\r\n						De to brødre på 37 år har en fantastisk viljestyrke, og de har brugt et år på at bygge \"cykelslæden\", få tilladelser, løbe rundt i Lidls frysehus for at blive kloge på, hvordan Peder siddende i stolen skal kunne holde varmen i over 18 graders kulde og 40 centimer høj sne.\r\n					</p>\r\n					\r\n					<p>\r\n						- Det bliver det hårdeste løb vi nogensinde har deltaget i, men vi elsker udfordringer, siger Steen Mondrup. De har brugt adskillige måneder på at opbygge den udsædvanlige løbevogn, som er forsynet med brede pigdæk og et snowboard og et Lions logo, som skal hjælpe brødrene godt igennem snemasserne.\r\n					</p>\r\n					\r\n					<p>\r\n						Ruten ved Polarcirklen går over iskappen de første 8-10 km. og så går det ellers ind over indlandsisen. Hvis alt går vel kommer turen formentlig til at tage 6-7 timer.\r\n					</p>\r\n					\r\n					<p>\r\n						Hvis brødrene kommer igennem de 42.195 meters marathon og har kræfter til det, så tager de en halvmarathon på søndag hen over det samme terræn. Så kommer de nemlig i et meget fint selskab med en medalje for at have bestået \"The Polar Bear Challenge\".\r\n					</p>\r\n					\r\n					<p>\r\n						Steen og Peder blev født i januar 1980 tre måneder for tidligt. De vejede 1200 gram. Peder blev født som spastiker og har siddet i kørestol hele livet, mens Steen har fuld førlighed og har dyrket meget sport hele livet.\r\n					</p>\r\n					\r\n					<p>Se også omtaler i grønlanske aviser på </p>\r\n					<p><a href=\"http://sermitsiaq.ag/loeb-koerestol-indlandsisen\">http://sermitsiaq.ag/loeb-koerestol-indlandsisen</a>-</p>\r\n					<p>\r\n						<a href=\"https://www.kamikposten.gl/2017/10/24/sejt-team-tvilling-udfordrer-groenland/\">https://www.kamikposten.gl/2017/10/24/sejt-team-tvilling-udfordrer-groenland/</a>\r\n					</p>', 'nyheder_billeder/nyheder_1.jpg', '2017-11-13 04:11:44'),
(7, '100.000 kroner til ofrene for katastrofen i Sri Lanka', '<p>\r\n						Oversvømmelser og efterfølgende jordskred koster mange liv\r\n					</p>\r\n					\r\n					<p>\r\n						Lions Klubbernes Katastrofehjælp har besluttet at støtte hjælpearbejdet i Sri Lanka med 100.000 kroner, som gives gennem Lions Klub Hikkaduwa. Klubben formidler fadderskaber til børn i Sri Lanka og har Lions Søllerød som venskabsklub i Danmark.\r\n					</p>\r\n					\r\n					<p>\r\n						Pengene anvendes primært til akut nødhjælp, herunder vand, mælk, mad, medicin samt sanitære fornødenheder.\r\n					</p>\r\n					\r\n					<p>\r\n						Oversvømmelser og jordskred i Sri Lanka berører en halv million mennesker. I 22 ud af landets 26 distrikter har voldsom regn forårsaget store oversvømmelser og efterfølgende jordskred. Det er det værste regnvejr på øen siden 2010.\r\n					</p>\r\n					\r\n					<p>\r\n						Indtil videre er mere end 200 meldt omkommet, 100 er savnet og 500.000 har måttet flygte fra deres hjem. \r\n\r\n					</p>\r\n					\r\n					<p>\r\n						De fleste af ofrene blev levende begravet, da mudder og vand styrtede ned fra bjergsider efter skybrudsagtig regn blandt andet i Hikkaduwa området, der ligger ca. 120 km syd for hovedstaden Colombo. \r\n					</p>', 'nyheder_billeder/nyheder_2.jpg', '2017-11-13 04:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `created`) VALUES
(1, 'Leif Andersen', 'Kode til Leif', 1, '2017-11-07 19:45:00'),
(2, 'username', 'password', 1, '2017-11-07 19:58:53'),
(3, 'ssssss', 'password', 1, '2017-11-07 20:05:24'),
(4, 'ssssss', 'password', 1, '2017-11-07 20:05:32'),
(5, 'ssssss', 'password', 1, '2017-11-07 20:06:18'),
(6, 'ssssss', 'password', 1, '2017-11-07 20:06:21'),
(7, 'ssssss', 'password', 1, '2017-11-07 20:06:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_content`
--
ALTER TABLE `event_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_time`
--
ALTER TABLE `event_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lions_event`
--
ALTER TABLE `lions_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_content`
--
ALTER TABLE `event_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `event_time`
--
ALTER TABLE `event_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `lions_event`
--
ALTER TABLE `lions_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
