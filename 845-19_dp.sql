-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 20 2023 г., 12:57
-- Версия сервера: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004
-- Версия PHP: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `845-19_dp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `lessonid` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `name`) VALUES
(1, 'Лепка'),
(2, 'Рисование'),
(3, 'Работа с буммагой');

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'Описание',
  `directionid` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `lesson`
--

INSERT INTO `lesson` (`id`, `image`, `name`, `description`, `directionid`, `teacherid`, `count`) VALUES
(2, '/web/images/uQLvyrxvoG9XABJGsdCAxP9f0t8dmXbKjXBTgXQuLDhhmX6-5y.jpg', 'Рисование на холсте', '2 группы', 2, 2, 0),
(3, '/web/images/ZRipkf94bg4LHJTNFC8ru_qzAaZwaotq68MlUfgYa__T8bItFf.jpg', 'Рисование для малышей', '1 группа', 2, 2, 2),
(4, '/web/images/zLrPrLFXF4XBsK3oYICNsQbJAb7FvmjxX7IO2wWFaskRCESAaA.jpg', 'Лепка из пластилина', '1 группа', 1, 1, 5),
(5, '/web/images/JcvYT_I58ZFnJiohUw1VbutkhwYopVFqTvOrafhcNF9aO06uR1.jpg', 'Лепка из глины', '1 группа', 1, 2, 2),
(6, '/web/images/bDrHGpLA0F2lx8QiaOJh_NH3tozQrJoF7_IQXpRzhFOmVP5DEW.jpg', 'Аппликация', '1 группа', 3, 3, 6),
(7, '/web/images/3yz9ROiSyzHxbP0aR1yWbfuj9Xeyir7-HcV6713F6CiDmHOTk8.jpg', 'Квиллинг', '1 группа', 3, 3, 7),
(8, '/web/images/MeZp7CRCjNueFEpRWVBOZ2MdU-lPCE4eLZzA80GnHyB_4Sm41I.jpg', 'Папье маше', '1 группа', 3, 3, 2),
(9, '/web/images/Gn6RIis_K2rQL3X6r89t_-S-IEOsr9EWyEDdDpULSn7-RHyM5D.jpg', 'Оригами', '2 группы', 3, 3, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id`, `fio`, `phone`, `email`) VALUES
(1, 'Иванова Ольга Юрьевна', '+7(999)777-11-11', 'ivanovaou@mail.ru'),
(2, 'Яковлева Валентина Ивановна', '+7(911)000-11-11', 'yavalll@gmail.com'),
(3, 'Войкова Светлана Михайловна', '+79812345678', 'voikovasm@gmail.com'),
(4, 'Иван Иванович Иванов', '+79999999999', 'voikovasm@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `age` varchar(255) NOT NULL,
  `parent_fio` varchar(255) NOT NULL,
  `parent_phone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `age`, `parent_fio`, `parent_phone`, `login`, `password`, `email`, `admin`) VALUES
(2, 'admin', '-', '', '-', 'admin', '-', 'admin', 'admin', '-', 1),
(5, 'Дарья', 'Соколова', 'Владимировна', '7', 'Соколовa Виктория Сергеевна', '+79815554312', 'sokolovavik', '12345', 'sokolovavik@gmail.com', 0),
(8, 'Елизавета', 'Смирнова', 'Юрьевна', '10', 'Смирнова Виктория Александровна', '+7(999)111-11-11', 'viktoryia', '12345', 'smirnova@gmail.com', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessonid` (`lessonid`),
  ADD KEY `userid` (`userid`);

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacherid` (`teacherid`),
  ADD KEY `directionid` (`directionid`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`lessonid`) REFERENCES `lesson` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`id`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`directionid`) REFERENCES `direction` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
