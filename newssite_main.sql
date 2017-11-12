-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 12 2017 г., 16:31
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diploma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'sports'),
(2, 'ukraine'),
(3, 'finance'),
(4, 'it'),
(5, 'politics');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `news_title` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_croatian_ci NOT NULL,
  `news_category` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `tags` text COLLATE utf8_croatian_ci NOT NULL,
  `date` date NOT NULL,
  `total_read` varchar(10000) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `news_title`, `text`, `news_category`, `tags`, `date`, `total_read`) VALUES
(1, 'includes/img/ava.jpg', 'новость1', 'Сайт рыбатекст поможет дизайнеру', 'sports', 'sports, sports news, football', '2017-11-04', ''),
(2, 'includes/img/ava.jpg', 'новость2', 'Равным образом рамки и место обучения кадров', 'sports', 'sports, sports news, swimming', '2017-11-04', ''),
(4, 'includes/img/ava.jpg', 'новость3', 'Сайт рыбатекст 3242пом24ожет дизайнеру', 'sports', 'sports, sports news, basketball', '2017-11-04', ''),
(5, 'includes/img/ava.jpg', 'новость4', 'Равным 3552образом ра235мки и место обучения кадров', 'sports', 'football', '2017-11-04', ''),
(6, 'includes/img/ava.jpg', 'новость5', 'Саfsdfsdffdfd asdasd asd ', 'it', '', '2017-11-04', ''),
(7, 'includes/img/ava.jpg', 'новость6', 'dfadfазом рамки и местasdо обучения кадров', 'it', '', '2017-11-04', ''),
(8, 'includes/img/ava.jpg', 'новость7', 'Сайт рыбатasdaекст 3242пом24ожет дизайнеру', 'politics', '', '2017-11-04', ''),
(9, 'includes/img/ava.jpg', 'новость8', 'выаавыафаыпыпыва фывафывафыва  ыфаы', 'sports', '', '2017-11-04', ''),
(10, 'includes/img/ava.jpg', 'новость9', '76746 вап анр46н4н упвр6нп', 'it', '', '2017-11-04', ''),
(11, 'includes/img/ava.jpg', 'новость10', 'Сафывфывйт рыбафывтекст 32ыаыва42пом24ожет дизайнеру', 'sports', '', '2017-11-04', ''),
(12, 'includes/img/ava.jpg', 'новость11', 'Неповторяющийся набор слов. основе оригинального. Неповторяющийся', 'sports', '', '2017-11-01', ''),
(13, 'includes/img/ava.jpg', 'новость12', 'Является знаменитый lorem книгопечатник вырвал. Оригинального трактата', 'ukraine', '', '2017-11-05', ''),
(14, 'includes/img/ava.jpg', 'новость13', 'Для вставки на руку при запуске проекта. Применили в длине', 'sports', '', '2017-11-04', ''),
(15, 'includes/img/ava.jpg', 'новость14', 'Слова, получив текст-рыбу, широко используемый и по сей день.', 'it', '', '2017-11-04', ''),
(16, 'includes/img/ava.jpg', 'новость15', 'Ipsum, кроме того, есть специальные генераторы, создающие собственные. ', 'it', '', '2017-11-04', ''),
(17, 'includes/img/ava.jpg', 'новость16', 'Не имеет никакого отношения к обитателям водоемов. ', 'finance', '', '2017-11-04', ''),
(18, 'includes/img/ava.jpg', 'новость17', 'Более того, нечитабельность текста на кириллице ', 'it', '', '2017-11-04', ''),
(19, 'includes/img/ava.jpg', 'новость18', ' Веб-разработчик знает, что впервые его применили.', 'it', '', '2017-11-04', ''),
(20, 'includes/img/ava.jpg', 'новость19', 'CCDcdcdcddsa', 'sports', '', '2017-11-04', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
