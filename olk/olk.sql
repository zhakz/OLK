-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2021 г., 12:59
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `genre_id` int(11) NOT NULL,
  `download_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`book_id`, `name`, `description`, `picture`, `genre_id`, `download_link`) VALUES
(1, 'Ruling by Cheating', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://assets.cambridge.org/97811089/48630/cover/9781108948630.jpg', 1, 'http://www.uvm.edu/pdodds/research/papers/others/2006/jost2006a.pdfhttps://core.ac.uk/download/pdf/232511134.pdf'),
(2, 'A Loud but Noisy Signal?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://assets.cambridge.org/97811087/45871/cover/9781108745871.jpg', 1, ' https://nepis.epa.gov/Exe/ZyPDF.cgi/2000L3LN.PDF?Dockey=2000L3LN.PDF'),
(3, 'Skills and Inequality', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://assets.cambridge.org/97811070/62931/cover/9781107062931.jpg', 1, 'https://www.researchgate.net/profile/Marius-Busemeyer/publication/292937338_Skills_and_inequality_Partisan_politics_and_the_political_economy_of_education_reforms_in_Western_Welfare_States/links/6017cbbf92851c2d4d0aa530/Skills-and-inequality-Partisan-politics-and-the-political-economy-of-education-reforms-in-Western-Welfare-States.pdf'),
(4, 'The Semantic Conception of Logic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://assets.cambridge.org/97811084/22543/cover/9781108422543.jpg', 1, 'https://www.princeton.edu/~fraassen/Formal%20Semantics%20and%20Logic.pdf'),
(5, 'Entropy and Diversity', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://assets.cambridge.org/97811089/65576/cover/9781108965576.jpg', 1, ' http://www.uvm.edu/pdodds/research/papers/others/2006/jost2006a.pdf'),
(6, 'The Great Gatsby', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/41Ed1Ucn09L._SX331_BO1,204,203,200_.jpg', 2, 'https://www.wsfcs.k12.nc.us/cms/lib/NC01001395/Centricity/Domain/7935/Gatsby_PDF_FullText.pdf'),
(7, 'Wide Sargasso Sea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://upload.wikimedia.org/wikipedia/en/1/1e/JeanRhys_WideSargassoSea.jpg', 2, 'http://www.public-library.uk/pdfs/2/61.pdf'),
(8, 'I Capture The Castle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/51DqoYbI3gL._SX328_BO1,204,203,200_.jpg', 2, 'http://31.42.184.140/main/424000/69e8d21325e0932a5b18f2b71241a411/Dodie%20Smith%20-%20I%20Capture%20the%20Castle-St.%20Martin%20s%20Press%20%281998%29.pdf'),
(9, 'The Call of the Wild', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/81+9w5nFMDL.jpg', 2, 'https://www.ibiblio.org/ebooks/London/Call%20of%20Wild.pdf'),
(10, 'Moby-Dick', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://www.penguin.co.uk/content/dam/prh/books/622/62240/9780142437247.jpg.transform/PRHDesktopWide_small/image.jpg', 2, 'https://fobook.ru/fobook/elementary/Kathy_Burke_-_Moby_Dick.pdf'),
(11, 'Into Thin Air', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://groundedcuriosity.com/wp-content/uploads/2020/10/613xliMRGmL.jpg', 3, 'http://www.ompersonal.com.ar/OMFIRST/TheGoBetween-LPHartley.pdf'),
(12, 'The Diary of a Young Girl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://s1.livelib.ru/boocover/1002459465/o/880b/Anne_Frank__The_Diary_Of_A_Young_Girl.jpeg', 3, 'http://cbseacademic.nic.in/web_material/doc/novels/3_The%20Diary%20of%20a%20Young%20Girl.pdf'),
(13, 'Bad Blood', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://m.media-amazon.com/images/I/413xIek1FtL.jpg', 3, NULL),
(14, 'Escape from Camp 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://m.media-amazon.com/images/I/51kyU734ymL.jpg', 3, 'https://www.penguin.com/static/pdf/teachersguides/escapefromcamp14_101513a.pdf'),
(15, 'Voices from Chernobyl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/71SgcbI-KqL.jpg', 3, NULL),
(16, 'Market Leader', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://www.lexis.by/images/products/main_41yT00RYSVL.jpg', 4, 'https://gtu.ge/Agro-Lib/Market%20Leader%20(Course%20Book).pdf'),
(17, 'Business one:one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQUEhgUEhMYGBgaGBoYGBMYGBgYGBgYGBsZGRgaGBgbIS0kGx0qIRgYJTclKzwxNDQ1GiM8PzozPi0zNDEBCwsLEA8QHxISHzMqISszMTMzMzUxNDUzMzMzMzMzMzMzMzMxMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzM+Mf/AABEIAQoAvQMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAABQQGAQMHAv/EAEsQAAECAwQECQkFBgUDBQAAAAEAAgMEEQUSITEGQVFxEyIyM2Fyc4GxBzQ1QoKRssLRI1Khs8EUFSRiktJDU2ST8CWj8RZUVYPT/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECBAUDBv/EADERAAIBAwIEBAUCBwAAAAAAAAABAgMEESExEjJBgTM0cZEFE1FhsSLRFBUjQlJiof/aAAwDAQACEQMRAD8A7I3IL0kzTPUGEt74v0Wf4/8A03/dTFkcISj+O/03/dWP47/Te6KkGRwhKP47bLe6L9Ufx22W90X6oDI3Qk9J7bLe6L9UXZ770t/TF/uTDI4Qk92e+9Lf0xf7lm7Pfelv6Iv96QZG6Eouz335b+iJ/ei7Pfflv6In96eAyNkJRcnvvy39ET+9VHSYTQmmmZq6DwYumC2NwYicI2/fawl164HgE4VIyxTjDLxkTlg6KhcddMQwwUhzLjda1wuzAdUvaXODjUVuVGrjNcdYW5kaFiHQ5gm9DN5rJoMoH1fdB4w4mFNZB3rp8kjxnXFiq5HKiI6phteBfZW+17QeIy+WCJxgwuvU35KUeHP+GBhsGfdmuqtcrPEc3Xw9jqSFzCkavIaRUZNGI1noKCyKbpuUN0h3FFL1RQnurt/VH8J/sL+I+x0+qFytojudQspQt9SgP3sdeX/NTCyYU1wguC640obpuil0EupTicqo92NEpWySzxIar5eMHRUl0ghB1yoB5Xyr3wE9/ny/+y//APRQLRgzXF4SLCOdKQnCmVc3noVbH3LC3LIzIbl7XhmQ3Be0gBCEIAEIQgAQhCABCEIAEIQgAQhCABCEIAwhZQgDCFlCAMIWUIAwlNuep7XypslVt+p7XyoGhnDyG4KNaUcw4MR7aXmMc4Vyq1pIr0KRC5Ldw8FHtOAXwYjG0q9jmiuVXNIFUAjXCtNji0UcA7Br3NIa49BOVdVaV1VWwTzODESpuktANMaucGjDeVEfCjRA1j2NaA5jnPDqh1xwcLraVFS0Z5Y5qOZSPwYghrboiNdwhdmxsQP5NK36CmzpQSwiVEtVpa4tqKZPc11xwDw00Izxw/HJZNsQwXYPutcWPfdNxjgaGp2dIqBrooD7Mikvo1rAQagONx7r7XNeGZNNA6u0u15qa6RcZeNDwvPMa7jh9oXXanvCBtI3R7Ra1xaGvcW0vXGkhtcRXaaY0FTlhiFj96w7zWtvOvBpvNaS0B5IYXHVUg7qY0UCJZjxEe5rS4PIcKR4kK6661pBa3At4oNRjjSmCxEsp7bgY1oLQwCM1z2ubR154cCSXsONGknM12oDERlJz7IpIaH5EhxaQHAGhIO8a6FTkms2SiMilxaGNLSHNY5xY95cCHtYcGGla7b2ulU5QQaSehlCEIECEIQAIQhAAhCEACEIQAIQhAAlNt+p7XypslFuep7XypMaGcDkN6o8FiNFaxpc4hrQCXOOAAGJJRL8hvVHgqx5SozmWbEu+s5jHH+UuFffl3piKraflAm5iLwVmwzT1XXL8R38104MG8LVL6c2hKRAyfhFzTmHMEN9NrHNo0/8yVg8lMmxso6KAL7ojmvOsBlLra7Ma+0mXlEk2RLOiueBVgD2O1hwIGB6QSO9PQCValtj93xJuWcHUhF7CRUV2EbRiCFz6Dp/aMdvBS8JropJN6GwuIbQYBpJAxrxjtC96MxnOsOeYeS0uu9F5jCQO/HvTLyOwW8HMPpxr7G110DSae8pgK5DT2elY4h2gwltReDoYZEa0+s27QOHjTNdQnbThQoDph7qQw0OvDGoPJujWTUU3rnvlkgt/hn04x4RhO0C6QPeT71G0zmH/uSRFTR3B3um7DddB8e5LGQNMXTS1J2I5shDc1oyDGNe4DVwkR4LQd1O9bJHTqflIoh2lDc5pzvMDIgH3mFtGvA2fioOi+lc1KyzYcvIX21LjEDIhvuJxJLRQ5Ady8aUW7OT8NsOJZ7mlj7zXthxS4YEEYjI1/AJ4Edmlo7YjGxGODmuAc1wyLSKghVfTDTVshEZD4IxHObePGuhrakDGhqTQ+5Z8moiCz2Nitc0tfEa1rwWuu3qjA40xKZW7oxKzhaZiGSWYNc1zmmhzBLTiEuoyfZNoMmIEOOyobEaHAHMVzB6QcEj0z0sZIQwLt+K8G5DyAAzc8/drhTM+8ixS0uyExsOG0Na0BrWjAADAALjmlrBGt3g43I4SAyhyuFrCRuJcf6kJAbYVvW9Hbw0Jr7mYuQodwj+UPBc4bqqwaHafujRRLTjQyI40Y8AtDnD1HNPJd+GrBdBYwAAAAACgAwAAyAC415VoDIU+2JC4r3Q2xHXcDfa4hrt/FHuTWGBaPKJpVMyUaEyAWhrmFzrzbxqHUwOrBV+NpJbU0DHlob2QRWnBsYRQZ4vBc84asEeV9xMWWJzMEk77wqupWLCayWgtaKAQmAAdDQjZAUzQDTeJNv/AGeZDeEulzHtF2+G8oObkHUxw1VwwTXTfS5si0NYA6M8Va01utblefTpwA147FQ7MYIekN1ooBMxAANQLX4fioenEZ5teISy+WvhhsMguDgGMLWXRmCTkM6lGNQGcOft6M3h4Yi3DxhdbCaCP5WOxcO4qwaFacvjxf2acaGxcQ19Lt5zc2ub6r8+jDVrXjTa1f8A48/7EdVucZPR5xs0ZKIx96G43YMUNvMIo41GGQqjAjuqU256ntfKmyU256ntfKoMkhjLc23qt8Ao1sWcyZgPgROS9tKjNpza4dIIB7lIlD9mzqt8At6YjispPztixXw4kMOhuNaGtx9MA5jxkaaj3hYtjSactW7LwIFGEgljCXFxGRe80AaM9Q/BdoiQwRQgEbCKj3LzDhNaKNaGjYAB4J5ApcWwf2OxY8EcZ5hve8ipvPcBWnQAABuULyQMcIMxeBHHZmCPVO1dGQjIHNfLFDc6HLXQTx35AnUzYmsOwhOWNBgO4ruChuY4jkvaMKjZiQegq6oRkDillaQTtkl0vGg1ZUkMfUAE5mG8VBae/uxUh2kFp2pFayVDoLBmYbnNa2ubokTXTYPcV1+JDa4UcARsIB8VljA0UAAGwCgRkCNZssYUFkNz3PLWgGI41c46ySdpVG8pluTku+E2Xc5jHNJL2tBvPBpdJINKChprquiryRXNIBbo/MRYkrCiTDbsRzGl4pTE9GqudNVVT/KPoi+YLZqVbeiNAa9gNHPa3FrmfzDZrFKZY9EQnkDjst5S5yEzg40BrntFLzw9jqj77NZ3UWNHdHpq0psTc41wh3g9xeLt+7yWMYcbmAxyptJXXzCaTUtBO0gVXtGQOU+V+WiPjQDDhvfSG8G6xzqcYZ0C6ZZnMQq58GzD2QtFoTxhOYLl4EOJpWou0ywpWhOdK0prWn98A1DW1INKXm0JrTimuI6Rlggai2c3l5SKNIL/AAb7n7Q837jrtLrsb1KUTzyiaIxI7hMyrS6IAA9gNHODeS5n8wypupkrfCtUOeGBjgagGurCp/8AOuhWttsitCwgkmlcC5oLQ1zQaFxN4YDYUZDhZzaB5R56Ezg4kBr3ji33te11f5mClT7k20Ns2fmZj9rm4kVkMOvthlzmX3eqODrxWDpzoM8Vb22400dwZIIFHChzF6lRhWhpTbh0qRL2qHFoLCC40FCCK1OBOo3WudTYOlGQ4GNEot31Pa+VN0ot71Pa+VRYIYSXNM6jfAKQo8jzTOo3wCkJiBCEIAEIQgAQvN4IvDoSygMkrxDiNcKtcCNoIIw6Qo1pyojQXwi67faW1BxFVQtDLUfKTL5KYNAXUaTkH6qdDh+ikllAdKQhCQAhCEACEIQBhQp6I9t3g23jU12XaH9bu9TUndJxg95EQBrnVDS4muBoKUw3D7qBxPTY0wa8VuLgBVpwHF4xF7KlTdzG1YiRJjhGkMFCxoIIFGlx42OeGGFV6l5eYDqviYAji1qDyb1eKM6Gg1VWhspHaXARgKuJDS6ubgRqqOK12XTnqCax9gMeau0bDDcQBRoy4lRQvo2lXCuNaZDXthTEcvaHwgAXUBzLcySccroIqNbgNq9fs0fXGxxOrFwvUwpyaFtR0Igy0cGromAIwrUHFt4niilQHYaqoBtY6DVKLe9T2vlTdKbcHI9r5UmQRPkuaZ1G+AUhR5HmmdRvwhbIrqNJGJAJA3JiPMWO0YE47BmgVPR+JS2xxebfcauJxrnVNlxjJy1exJ6BRFFgka14dGaMyFJyhHcRsQtBnGD1l5/bof3lH51P/Je4cLJBaNionlDsW80TMIUezlgYVZt3hXZk0w5OC0zTQ40wIIoddQV1pyi3lEZIrmi2kjo8EEkOe3B7TmdjgRt8QVZpOcbEBpgRm05hctn4DrLngW1MJ+I6WnNu8fRXrR5pe90bJr28UbQaEEomuFrGzGnlFiQvBitGZHvRfHT7ijKA2IXi90H3IrvRlAelDnZThAAXFoBJoAMTQgV6MThrUq8On3FF4bQjKGtBV+5G3SL5BJrUADCoN2n3ajJbItktddN9wLWtaDWvJDgCdp4+vYmaEx8TEz7FDsTEdWpN6grUkHA/dwwGWea2wrJa1wdeJIIIwAyc016xu0J11KaIQHEwSm3PU9r5U2Si3fU9r5UmJE+z+aZ1G/CFvcKhaLP5mH1G/CFJTEQIcMNxGB2j9RrWyIXUwcPBeHso7ozXt7RTJZtSejjE6YF8d7+juIKiPc4qTHaojwvM1qTctW/cvU4rB4cF4LV6WQiFPB0aR4aCt8OI4ZOIXgALVNMJYQ3M4fVWbdz41FM5VIxxkhaQSQmoTmZuGLXk+sNVdhS/ye2oLxlI9bwJuAkgVHKaRr2+9PJUYU2ZqraX2a6FEbOQaggi/TMEZO/BejoVU38qfYpTjhZR1VrAMgBuC9FKtHLXbNS7Ygpeye0anDPu196aq1jGhzPBJXmpXuixdTyQMXys1rmAsUXpgQNZPLmfdND04j3LTCnAX3Hi67VscOj6KQ/JVyfimJMMEPEsPGeMhjlXaoN4JFnQhC6AYSe3/U9r5U4Se3/U9r5UDQws/mofUZ8IUlRrP5mH1G/CFJQIizGBWHHBepoYBeByV5+5TjWkl1WTtHZEKKQoTwK5rdMlQXvWDK5m58JdpwytD0Wjas4bVFc9eOEXdTn9jt8l/UmhzUF4OCg8IvTImKnScozUs9RSt9GPYEBjxxhQ6nNwPftXicslr2OYXBzXChDsDQrbZymzDMF6jEWlPGq6mW85wULR2zZuRjuo0PguwNHitPVcQaYj6q1vtR+pv4KHPw3HknFQ2PeBiVSuLqcno8eh1hSQydasTZ+CwLXibPwS8vdtWL5VP51Vf3P3O/yo/QastaJrb+ikttbDk470iC3NVmldT6s5TpRRNmZxz8CcPujAe/NebObx2igArktCl2W37Qd/gtCE1Jo4NYH6EIVw5mEnt/1Pa+VOEm0g9T2vlSY0MbP5mH1G/CFJUazuZh9mz4QpKYjTMDilaIXJUiLyTuUaAc1kXsP6qf1R0hsLZsZpbGTacCVR15qpDhqs1KD0IjytZcvcRaHFW4ItZPd9eg5aKr00ro4hnQtcg7AFT4zxRJ7LfxAmMc4K5C5lGDRjTh+sXzIUJ7VMivUV7xsVB11JliCaNBCKBey8bF54UbE+OJ0/V9AAW1jVp4dYMwpKso7Ig4SZKKnWO6rz0NPiEkdFTfRzEvPQB76/RXrKrKpUWdjjWp8MclgQhC3ymYSbSD1Pa+VOUl0h9T2vlSY0MrO5mH2bPhCkqLZvMw+zZ8IUpMR5IUCCcSEwS+I2jyDrxCpXlPiSkuhOD6EWbwqqy61Q5zaMcGkHE3ag32MAIBw5eIzCs1oZGo1ZKhvtaBSggHIjl1NDd1+y3dQLGhZyqzfDFvBbjc06SXG8E2ZnqX7jHOLA4nKgpUAnHIkHLYVHfaTBXAmlcqGpbmKVqNeJ2Isx8KYjsgCGW37/ABi4nJpe69jV1aa1MtKQZCiOYReNBU4gG8Acq4HpVyn8Nqt8Kg8+p1l8QoRjxN6EJ0269daw1o+taYFtw0wOODvBbGzdYYe1pNXBt3CuLrp10qslrKkluJrXpvAA/g0e5e56HDhQbxbebdL7tSDUY5nX0rtL4XcaL5b9zmvidtLaX/BrZ1pUq0Q3lzal7Rdq0Noa1Joa1FKKbM2wLhcxji3jBrzS6XBpdSlb1MKV2qkSuk0Auaz9ldiaVv8A3jjU5uBwqDnRP32vBJLjL4kGvGwxF0mlKVphXOiP5ZVSw4P3E5wcsjKFNCIwPGRyO2mBI6K1UGYmqEi6aNpV2FBXvqV4iWgxjA5sOgeSaA68BVLos8y+0mGSXvYzlYDYaa6LNXw6rGbzHT1L9Km5R4ktCUbRGGBGAOqtDUDCuOS8vnONRovVoBSmfHOJPVUC3J1ku9jTDvVbUEGgoCQARrU6VAiMZEpQuaCNZGevvPvU52zgstY7kuFmv94Y5YENu4jM1JrsyXts7XJpOIGoYmv0KzJS7Ykd0GlLrb17dSlNnKKnvskMdQEYU1dG/pKjOnGMeJo4zqRhzC8TwoKtIryQSMc86ZZJ9Yk+WwIr2MLi0FxxApQGgxOOIJ3JNPy7YbLxANKCmWZ1Fa7N0lg8GWOlb1C5pq/BwriCKYjoKuWThF8WxTr1YSWEXb95GjjcLg0kOIIFOMQKAnHAAnf3LwLWoDebiC4kNNeKHuaKYYniHDo7lUrQ0zgsaHOlA6ppS/TWXY8XHEk7yorvKJCNKyeVf8TabxrxcRXFa0akZLKKeUdNSPSM8j2vlSuU00ESWdH4Cl0PN2/Wtwbbq12jbvChv2dKV9bbTo6EOaBPUtdl8xD7NnwhSlFsvmIfZs+EKUpiMLTEeAaHetyU21BJDXCuw0w3LnU5RoxaUIuqW0OBw7lyN2a6I2Zc13OimVHUrlvC527Nd7KnGLco9cFG+b0THGh3pGX/APs/KerFpL5y7cPAKu6HekZffE/KerHpN5y7c3wWhb+P2Ktby69RStmkXmw7J3gFrC3aQ+bDsneAV+pzLv8AgqUN/Y59Ij7RnXb4hW1VKS5xnXb4hW1V5npYEyZ5uH3pdE5cLtYfimUxzUPvS2MOPD7WH4rIr87PSWflfc8abD7ZnU+Yp3Y/m8PqBJtNedZ1PmKc2P5vD6gWbecq9SENjdYfn7+ofkTyc5Z7vAJHYnn7+zPyJ5Ocs93gFn3PhIybvmYnt3mT1m+KpkhyXdd3irlbvMne3xVNs/J/Xd4qNv4bKRptnkDrfoUnTm2uQOt+hSYBaltyEJblvsf0bE3RfBToxwbu+ig2P6Oibongp0bJu76Kcxx3OlWZzEPs2fCFKUWy+Yh9mz4QpStDBeHtBFCKg6l7QgCp2xo2XG/CdtJb3f8ANi5w4Yrt8TI7iuIxczvKsWyxnBRvOg10P9Iy++J+U9WTSbzl3Vb4Kt6IekZffE/JerJpN5y7qt8Fbt/H7FWt5fuKQt2kHmw7J3gFpC26Q+bDsneAWhU5l3/BUt/2OfyQ+0Z12+IVtVQkz9ozrt8QreVWmeniTJjmofel8XlQ+1h+KYTJ+yh96XRTxofaw/FY9fnZ6Oz8t7mNNR9qzqH4inNjebw+oEn01P2jOofiTexvN4fUCzr3kXqQhsbrE9IP7M/Ins5yz3eASGxfSD+zPyJ7N8s93gFn3PgoyrvmYnt3mTvb4qmyBwf13eKuVu8yd7fFU6Qyf13eKhb+G/Uomi2eQOt+hSWqd2xzY636FJFq23IQluXKxj/06JuifCpsbJu76KDYvo6JuifCpsbJu76KUxx3OlWZzEPs2fCFLUOyuYhdmz4QpitjBRJubDAaYu2fVZtCaEOG551DDeckngTQIrEwcaZ0oQ4VDTsJGKWVnAES05uZIcQ+4GsLi3I0rd1a6rnLziukT0rGiNPB15N2tQOL90nWubuFCd6t0FuULzOUNdET/wBRlutE/KiKy6T+cO6rfBVrRL0jLdaJ+VEVl0o84PVHgrVv4/YrVvL9xSFt0g82HZO8AtIW63/NR2T/AAV+pzLv+CnQ/b8nO5M/aM67fEK4KnSfOM67fEK4KtM9REmzHNM70vjcqH2sP4lPmOaZ3pfG5UPtYfxLIr87PSWflvcxptzsPqH4k4sbzeH1Ak+m/OQ+ofiTexfNofUCzLzkXqc47EixPSDuzPyJ7N8s93gEhsX0g7sz8qfTfLPd4BZ1z4KMq75mJ7c5k72+Kpkhk/tHeKuducyd7fFUyQyf2jvFRtvDZSNVs82OsPApInds82OsPApKtW25DnLcuNi+jom6J8KmR8m7voodi+jom6J8Klx8m7vopz3JROlWVzELs2fCFMUOyfN4XZs+EKYrYCXSd1II2XhVVm0232sEOIX7SAGkEUDQRSpIGFTVXa0JYRIZad43hKYbA5oa4CraBrAMSRQYnUEJLOSMlkmWUykuwE14mNc661yGNyjvPiug2pbsSE5rGBtKYgjA7qblzx7qknpKtUOpSvHshron6QluvE/KiKzaU+cnqtVY0T9IS3Xf+VEVn0p85PVb+qs2/j9itV8v3FIW63vNh2b/AAWgLdb3mw7N/gtCpzLv+CpQ69vyc7lB9ozrt8QreqfKH7RnXb4hXBVZnp4EyY5mHvKXR82drD+JMY/Ms3lLpjOH2kP4gsmvzs9LZ+W9zzpxzkPqHxTixPNofUCUacc5D6h8U3sTzaH1Pqsy95F6nOOxIsX0g7sz8qfTnLPd4BIbF9IO7M+DU+nDxz3eAWdc+CvUybzmYntzmXb2+IVMkMn9o7xVztzmXb2+IVMkPX67vFQtvDZSNdr82OsPApLROrX5sdYeBSYLWtuQ5y3LdYvo+JuifCpkfJu76KHYvo+JuifCpcfJu76Kc9yUTpdk+bwuzZ8IUxQ7J83hdmz4QpitgCW2hJOdV0M3XUodhGtMkIApkzwtLsSCcGuaCAaEFha33XnHvXPHZneu6ELkkXRubLiRLupU627d6727Uc5ZSu4N4aRr0T9IS3Wf+VEVo0p84PVb+qU6O2BNQ5yBEfAc1jXOLnEtoAYb2iuO0gd6sOkNmxXx7zGFzbrRUEZiu0q1RnFVst6YK9WnJ0MJPOSuBbrd81b2b/BShYkx/lO97fqt1r2PMPlwxkIl1xwpVuZGAzV2dWGVqvf7FWjSms5T6dPucqleWzrt8QrglcvofPh7SZV1A5pJvQ8gR/MrR/6emv8AJd72fVcJ1IfVHo4tEeY5lm8pfHzh9oz4grDFsOZMJjRCdUE1FW4fioUbR2aNykB2D2E8ZmQcCTyllVtZto37SvTjb8Lks69RVpvy4fVd4ptYfm0Pq/qUaWaOzcV7DCgOeA0g0cwUxwzcExsmxJlkBjXwiHBtCLzcMTsKz7yEpQSS6kI14Y5l7kax/SB7M+DU+nOWe7wCgWZY8w2cMR0Mhlwi9eZnQYUrVOJmRiF5IZhhrGzeqFelN0kknn0My6nGUtGV+3OYdvb4hUyR9fruXQbVsiO+E5rIZJJFBebqI2lVeU0VnRfvQCKvcRx4eR9pRt6U1Bpp+xTENsc2OsP1SUK7WlonOvZRsuSag8uH07XJWNCLQ/8AbH/ch/3rTt4tR1RCW5OsT0fE3RPhCmRsm7v0Cl2Xo1NMk4kN0Eh7r9G34ZreaAMQ6ixPWbEhhoisoSMMWnKlcipuLySiX+yPN4XZs+EKYldkn7OENXAQ8PZCYhWQZsQvJWUAZWFhCAMoQhAAsoQgAQsIQBlYWVhAGUIQgDCyhCABCEIAEIQgAVX0wGMPc75VaFXdKf8AD9v5UhxP/9k=', 4, NULL),
(18, 'Total Business', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://img.yakaboo.ua/media/catalog/product/cache/1/image/398x565/234c7c011ba026e66d29567e1be1d1f7/2/2/224794.jpg', 4, NULL),
(19, 'Intelligent Business', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://img.yakaboo.ua/media/catalog/product/cache/1/image/398x565/234c7c011ba026e66d29567e1be1d1f7/3/0/300775_23087019.jpg', 4, 'https://borshevskayaum.files.wordpress.com/2013/09/intelligent_business_upper_intermediate_coursebook.pdf'),
(20, 'Business Builder', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://api.macmillanenglish.com/fileadmin/user_upload/Catalogue/Covers/Business_Builder/9780333990940-1.jpg', 4, 'https://www.fegbackoffice.com/wp-content/uploads/2019/03/3.27.19-BBS-not-E-book-for-printing.pdf'),
(21, 'War and Peace', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images.penguinrandomhouse.com/cover/9781400079988', 5, 'https://planetpdf.com/planetpdf/pdfs/free_ebooks/War_and_Peace_NT.pdf'),
(22, 'Song of Solomon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/613pLga+nXL.jpg', 5, NULL),
(23, 'The Shadow of the Wind', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/51qlSsAf1KL._SX330_BO1,204,203,200_.jpg', 5, 'https://www.lovereading.co.uk/_download/extract/765'),
(24, 'The Lord of the Rings', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://images-na.ssl-images-amazon.com/images/I/81zqkBcTTCL.jpg', 5, 'https://s3.amazonaws.com/scschoolfiles/112/j-r-r-tolkien-lord-of-the-rings-01-the-fellowship-of-the-ring-retail-pdf.pdf\r\n31) don quixote -> https://amplify-com-mktg.imgix.net/app/uploads/2019/03/19152858/G5_U04_RDR_2ndED17_20190319.pdf'),
(25, 'Don Quixote', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://kbimages1-a.akamaihd.net/392971e9-4f19-4827-a041-3abe4d0e1f54/1200/1200/False/don-quixote-111.jpg', 5, 'https://amplify-com-mktg.imgix.net/app/uploads/2019/03/19152858/G5_U04_RDR_2ndED17_20190319.pdf'),
(33, 'Don Quixote', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mauris leo, bibendum eget mi ac, iaculis fermentum leo. Suspendisse placerat ac enim a consectetur. Ut iaculis tortor dolor, vitae placerat elit dictum id. Curabitur in ipsum sodales, scelerisque massa quis, egestas sapien. Curabitur nisi turpis, dapibus sed tempor vel, egestas in diam. Aliquam at lectus bibendum, condimentum dui vitae, condimentum lacus. Suspendisse euismod sem molestie, convallis ex in, ornare erat. Praesent viverra venenatis velit ut elementum. Sed id velit tellus. In mollis enim arcu. Mauris at facilisis justo. Duis id leo commodo turpis tincidunt congue. Aliquam et felis mi. Sed enim enim, placerat sed est id, tincidunt finibus urna. Donec ac tempor felis, id dapibus mi. Nulla facilisi. Curabitur pellentesque ut dolor pharetra consectetur. Aliquam maximus, erat sit amet malesuada blandit, augue tortor mattis justo, id lacinia eros nunc sed velit. Duis tristique lorem ante, sit amet porttitor eros imperdiet.', 'https://kbimages1-a.akamaihd.net/392971e9-4f19-4827-a041-3abe4d0e1f54/1200/1200/False/don-quixote-111.jpg', 6, 'https://amplify-com-mktg.imgix.net/app/uploads/2019/03/19152858/G5_U04_RDR_2ndED17_20190319.pdf'),
(34, 'NSFSDFK', 'dsfgdsfg', 'https://www.aftodioikisi.gr/wp-content/uploads/2017/10/Xitler-O-Agon-Mou_aftodioikisi.jpg', 6, 'https://amplify-com-mktg.imgix.net/app/uploads/2019/03/19152858/G5_U04_RDR_2ndED17_20190319.pdf'),
(35, 'ваы', 'ываыв', 'https://g.cz/sites/default/files/styles/gflex_square_big/public/field/image/2019/mk_0-586x426.jpg?itok=IT_ZNiB1', 6, 'asdf');

-- --------------------------------------------------------

--
-- Структура таблицы `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmark_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bookmark`
--

INSERT INTO `bookmark` (`bookmark_id`, `book_id`, `user_id`) VALUES
(11, 8, 4),
(12, 3, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`genre_id`, `name`, `description`) VALUES
(1, 'Academic Library', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien.'),
(2, 'Literature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien. Mauris a hendrerit libero. Integer sit amet massa nulla. Suspendisse quis sapien non velit tempus dapibus a nec est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae'),
(3, 'Documentary Literature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien. Mauris a hendrerit libero. Integer sit amet massa nulla. Suspendisse quis sapien non velit tempus dapibus a nec est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;'),
(4, 'Business', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien. Mauris a hendrerit libero. Integer sit amet massa nulla. Suspendisse quis sapien non velit tempus dapibus a nec est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;'),
(5, 'Other', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien. Mauris a hendrerit libero. Integer sit amet massa nulla. Suspendisse quis sapien non velit tempus dapibus a nec est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;'),
(6, 'Books added by users', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat lorem arcu, ac scelerisque arcu gravida id. Donec tellus magna, efficitur non dolor a, mollis dapibus justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec auctor non dui vel scelerisque. Vestibulum eget metus ut ex pellentesque congue in dignissim sapien.');

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `favourite_genre` text NOT NULL,
  `age` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `picture` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `textOfReview` text DEFAULT NULL,
  `timeOfLeft` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`review_id`, `book_id`, `user_id`, `textOfReview`, `timeOfLeft`) VALUES
(8, 4, 4, 'ываывавы', '2021-06-20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(4, 'Sherkhan', 'Iskender', 'ptendec@gmail.com', '63a9f0ea7bb98050796b649e85481845');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Индексы таблицы `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Ограничения внешнего ключа таблицы `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bookmark_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Ограничения внешнего ключа таблицы `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
