-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2022 г., 00:24
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `site`
--

CREATE TABLE `site` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `site`
--

INSERT INTO `site` (`id`, `title`, `content`) VALUES
(1, 'О нас', '<div class=\"content\">\r\n            <h1>Мы</h1>\r\n            <p>\r\n                Обычно люди приходят в Pizza House, чтобы просто поесть. Наши промоутеры раздают листовки про кусочек пиццы за двадцать рублей или ещё что-то выгодное. Мы делаем это как первый шаг, чтобы познакомиться.\r\n            </p>\r\n            <p>\r\n                Но для нас Pizza House — не только пицца. Это и пицца тоже, но в первую очередь это большое дело, которое вдохновляет нас, заставляет каждое утро просыпаться и с интересом продолжать работу.\r\n            </p>\r\n            <h1>Идеальные ингредиенты</h1>\r\n            <div class=\"cont\">\r\n\r\n                <div id=\"block\">\r\n                    <h2>Тесто</h2>\r\n                    <p>Самая тонкая вещь. Главное -</p>\r\n                    <p>сделать его «живым».</p>\r\n                    <p>Это целый квест из граммов, градусов,</p>\r\n                    <p>процентов и часов с минутами.</p>\r\n                    <p>Процесс непростой, но у нас получается!</p>\r\n                </div>\r\n                <div id=\"block\">\r\n                <h2>Моцарелла</h2>\r\n                    <p>Сыр в пицце - ключевой</p>\r\n                    <p>ингредиент. Мы используем</p>\r\n                    <p>настоящую моцареллу от</p>\r\n                    <p>российских поставщиков. Сыр</p>\r\n                    <p>должен тянуться, как на</p>\r\n                    <p>картинке.</p>\r\n                </div>\r\n                <div id=\"block\">\r\n                    <h2>Начинка</h2>\r\n                    <p>Есть два главных правила вкусной начинки:</p>\r\n                    <p>не экономить на начинке;</p>\r\n                    <p>фанатично соблюдать режим хранения.</p>\r\n                    <p>Это и весь секрет.</p>\r\n                </div>\r\n                <div id=\"block\">\r\n                    <h2>Томатный соус</h2>\r\n                    <p>Главное, что нужно знать про</p>\r\n                    <p>хороший томатный соус: он</p>\r\n                    <p>должен быть сделан из томатов.</p>\r\n                    <p>Звучит логично, но</p>\r\n                    <p>задумайтесь!</p>\r\n                </div>\r\n            </div>\r\n        </div>'),
(2, 'Контакты', '<div class=\"cont\">\r\n\r\n            <div id=\"block\">\r\n            <h2>Кировский</h2>\r\n            <p>ул. Кирова, 149 В</p>\r\n            <p>Доставка и самовывоз</p>\r\n            <p>09:00 — 23:30</p>\r\n            <p>Ресторан</p>\r\n            <p>09:00 — 23:00</p>\r\n            </div>\r\n            <div id=\"block\">\r\n            <h2>Центр Аллея Героев</h2>\r\n            <p>ул. Аллея Героев, 5</p>\r\n            <p>Доставка и самовывоз</p>\r\n            <p>Пн - Чт: 09:00 — 23:30</p>\r\n            <p>Пт - Вс: 09:00 — 00:00</p>\r\n            <p>Ресторан</p>\r\n            <p>Пн - Чт: 09:00 — 23:00</p>\r\n            <p>Пт - Вс: 09:00 — 00:00</p>\r\n            </div>\r\n            <div id=\"block\">\r\n            <h2>Красноармейский</h2>\r\n            <p>пр-т им Героев Сталинграда, 56Б</p>\r\n            <p>Доставка и самовывоз</p>\r\n            <p>09:00 — 22:00</p>\r\n            </div>\r\n            <div id=\"block\">\r\n            <h2>Красный Октябрь</h2>\r\n            <p>пр-т имени В.И. Ленина, 111г</p>\r\n            <p>Доставка и самовывоз</p>\r\n            <p>09:00 — 00:00</p>\r\n            <p>Ресторан</p>\r\n            <p>09:00 — 00:00</p>\r\n            </div>\r\n        </div>'),
(3, 'Меню', ' <div class=\"cont\">\r\n\r\n            <div id=\"pizza_block\">\r\n                <img src=\"img/chicken.jpeg\" alt=\"chickenPizza\" id=\"pizza_image\">\r\n                <h2>Чикен бомбони</h2>\r\n                <p>Куриные кусочки, сладкий перец,</p>\r\n                <p>смесь сыров чеддер и пармезан,</p>\r\n                <p>моцарелла, красный лук, соус</p>\r\n                <p>сладкий чили, соус альфредо</p>\r\n                <h3>От 425₽</h3>\r\n            </div>\r\n            <div id=\"pizza_block\">\r\n                <img src=\"img/cheese.jpeg\" alt=\"cheesePizza\" id=\"pizza_image\">\r\n                <h2>Сырная</h2>\r\n                <p>Моцарелла, сыры чеддер и</p>\r\n                <p>пармезан, соус альфредо</p>\r\n                <h3>От 245₽</h3>\r\n            </div>\r\n            <div id=\"pizza_block\">\r\n                <img src=\"img/pepperoni.jpeg\" alt=\"pepperoniPizza\" id=\"pizza_image\">\r\n                <h2>Пепперони</h2>\r\n                <p>Пикантная пепперони,</p>\r\n                <p>увеличенная порция моцареллы,</p>\r\n                <p>томатный соус</p>\r\n                <h3>от 375₽</h3>\r\n            </div>\r\n            <div id=\"pizza_block\">\r\n                <img src=\"img/hamandmush.jpeg\" alt=\"hamandmushPizza\" id=\"pizza_image\">\r\n                <h2>Ветчина и грибы</h2>\r\n                <p>Ветчина, шампиньоны,</p>\r\n                <p>увеличенная порция моцареллы,</p>\r\n                <p>томатный соус</p>\r\n                <h3>от 375₽</h3>\r\n            </div>\r\n            \r\n        </div>'),
(4, 'placeholder', ''),
(5, 'placeholder', ''),
(6, 'placeholder', ''),
(7, 'placeholder', ''),
(8, 'placeholder', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `site`
--
ALTER TABLE `site`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
