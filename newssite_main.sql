-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2017 г., 21:34
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
  `id` int(110) NOT NULL,
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
(1, 'includes/img/ava.jpg', 'новость1', 'Praesent augue sem, pretium quis laoreet sit amet, porttitor vel dolor. In faucibus semper augue, sed tristique nibh pulvinar in. Nulla luctus lorem non dolor auctor accumsan.', 'sports', 'sports, sports news, football', '2017-11-04', ''),
(2, 'includes/img/ava.jpg', 'новость2', 'Nulla sed dolor vel ex vestibulum viverra. Proin placerat mattis sapien at tempus. Integer in tellus quam. ', 'sports', 'sports, sports news, swimming', '2017-11-04', ''),
(4, 'includes/img/ava.jpg', 'новость3', ' Nullam sodales nisl nec nulla sollicitudin laoreet. Aenean viverra sapien quis ligula lobortis, quis pellentesque massa euismod. ', 'sports', 'sports, sports news, basketball', '2017-11-04', ''),
(5, 'includes/img/ava.jpg', 'новость4', 'Nunc feugiat ante sed augue pharetra, nec efficitur enim sodales.', 'sports', 'football', '2017-11-04', ''),
(6, 'includes/img/ava.jpg', 'новость5', 'Mauris at massa sed justo auctor tincidunt. Sed dignissim ullamcorper tincidunt. Pellentesque porta augue ut est hendrerit, non lobortis ipsum accumsan. Praesent a sapien justo. ', 'it', '', '2017-11-04', ''),
(7, 'includes/img/ava.jpg', 'новость6', ' Proin a odio eget nunc pellentesque tincidunt. Suspendisse vehicula, turpis ut consectetur sodales, diam magna vestibulum diam, nec tincidunt quam velit convallis purus. In id luctus nisl. Sed sollicitudin diam vel nisi porttitor, ut consectetur enim suscipit. Fusce a euismod tellus. ', 'it', '', '2017-11-04', ''),
(8, 'includes/img/ava.jpg', 'новость7', 'Curabitur semper quam quis magna semper laoreet. Aenean auctor, lorem at vulputate tempus, lorem urna sodales dolor, non volutpat velit nulla eget magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Proin ut egestas nisl. Pellentesque vel egestas velit. ', 'politics', '', '2017-11-04', ''),
(9, 'includes/img/ava.jpg', 'новость8', 'Pellentesque non interdum elit. Aliquam erat volutpat. Nullam tincidunt mollis rhoncus. Pellentesque vitae mi euismod, porta odio nec, tincidunt ex. Morbi blandit enim a ligula pellentesque consectetur. ', 'sports', '', '2017-11-04', ''),
(10, 'includes/img/ava.jpg', 'новость9', ' Cras fermentum, est eget maximus euismod, dui lectus venenatis metus, auctor pellentesque nisi sapien at ante. Praesent congue ut mi id fringilla. ', 'it', '', '2017-11-04', ''),
(11, 'includes/img/ava.jpg', 'новость10', 'Nunc tortor tellus, blandit id rhoncus sit amet, ullamcorper quis massa. Duis sodales nisl ligula, sit amet facilisis mi euismod quis. ', 'sports', '', '2017-11-04', ''),
(12, 'includes/img/ava.jpg', 'новость11', ' Ut neque eros, finibus id purus facilisis, facilisis mollis velit. Ut vulputate et lectus ut scelerisque. Aenean sapien sem, placerat vitae sagittis et, placerat sed dolor.', 'sports', '', '2017-11-01', ''),
(13, 'includes/img/ava.jpg', 'новость12', 'Quisque ut sollicitudin nisl. Proin vel efficitur nunc. Donec tincidunt bibendum quam, ac pellentesque nibh.', 'ukraine', '', '2017-11-05', ''),
(14, 'includes/img/ava.jpg', 'новость13', 'Vivamus iaculis mauris ut odio porta sagittis. Fusce vitae metus vel libero hendrerit ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sports', '', '2017-11-04', ''),
(15, 'includes/img/ava.jpg', 'новость14', 'Pellentesque ut enim eleifend, pretium ligula non, condimentum turpis. Duis eu neque risus.', 'it', '', '2017-11-04', ''),
(16, 'includes/img/ava.jpg', 'новость15', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum condimentum fermentum ante id consequat. ', 'it', '', '2017-11-04', ''),
(17, 'includes/img/ava.jpg', 'новость16', 'Aenean vel justo non nulla fermentum eleifend id a nulla. Proin aliquam justo at tincidunt malesuada. Aenean neque tortor, accumsan at est eu, rhoncus vestibulum ex. ', 'finance', '', '2017-11-04', ''),
(18, 'includes/img/ava.jpg', 'новость17', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque nisl sem, suscipit sed sapien in, pharetra consectetur enim.  ', 'it', '', '2017-11-04', ''),
(19, 'includes/img/ava.jpg', 'новость18', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed ac faucibus libero, ac cursus nisl.', 'it', '', '2017-11-04', ''),
(20, 'includes/img/ava.jpg', 'новость19', 'Cras gravida urna dolor, tincidunt ultricies massa pellentesque vitae. Sed metus eros, imperdiet nec semper sit amet, accumsan sollicitudin nunc. In at leo est. Fusce ac neque vel urna vehicula varius.', 'sports', '', '2017-11-04', ''),
(21, 'includes/img/ava.jpg', 'новость20', ' Cras fermentum, est eget maximus euismod, dui lectus venenatis metus, auctor pellentesque nisi sapien at ante. Praesent congue ut mi id fringilla. ', 'sports', 'sports, sport, football', '2017-11-04', ''),
(22, 'includes/img/ava.jpg', 'новость21', ' Cras fermentum, est eget maximus euismod, dui lectus venenatis metus, auctor pellentesque nisi sapien at ante. Praesent congue ut mi id fringilla. ', 'ukraine', '', '2017-11-04', ''),
(23, 'includes/img/ava.jpg', 'новость22', ' Proin a odio eget nunc pellentesque tincidunt. Suspendisse vehicula, turpis ut consectetur sodales, diam magna vestibulum diam, nec tincidunt quam velit convallis purus. In id luctus nisl. Sed sollicitudin diam vel nisi porttitor, ut consectetur enim suscipit. Fusce a euismod tellus. ', 'sports', 'sports, football', '2017-11-04', ''),
(24, 'includes/img/ava.jpg', 'новость23', ' Cras fermentum, est eget maximus euismod, dui lectus venenatis metus, auctor pellentesque nisi sapien at ante. Praesent congue ut mi id fringilla. ', 'finance', 'finance, BTC', '2017-11-04', ''),
(25, 'includes/img/ava.jpg', 'новость24', 'Pellentesque non interdum elit. Aliquam erat volutpat. Nullam tincidunt mollis rhoncus. Pellentesque vitae mi euismod, porta odio nec, tincidunt ex. Morbi blandit enim a ligula pellentesque consectetur. ', 'finance', 'finance, BTC', '2017-11-04', ''),
(26, 'includes/img/ava.jpg', 'новость26', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum et tellus sed fringilla. Nulla  ', ' sports ', ' sports ', '0000-00-00', ''),
(27, 'includes/img/ava.jpg', 'новость27', ' mollis aliquam sagittis. Vivamus cursus ornare porttitor. Suspendisse ullamcorper, turpis a mattis p ', ' sports ', ' sports, football ', '0000-00-00', ''),
(28, 'includes/img/ava.jpg', 'новость28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum et tellus sed fringilla. Nulla ', 'sports', 'sports', '0000-00-00', ''),
(29, 'includes/img/ava.jpg', 'новость29', 'mollis aliquam sagittis. Vivamus cursus ornare porttitor. Suspendisse ullamcorper, turpis a mattis p', 'sports', 'sports, football', '0000-00-00', ''),
(30, 'includes/img/ava.jpg', 'новость30', 'retium, sem velit lobortis lorem, ut efficitur nulla lacus eget mi. Fusce et tellus et felis ultrice', 'finance', 'finance, BTC', '0000-00-00', ''),
(31, 'includes/img/ava.jpg', 'новость31', 's mollis et vel leo. Pellentesque iaculis at sem eu scelerisque. Fusce venenatis, justo convallis ve', 'finance', 'finance, euro', '0000-00-00', ''),
(32, 'includes/img/ava.jpg', 'новость32', 'hicula dapibus, massa nisl bibendum ligula, in imperdiet lectus nisl nec elit. Vivamus ante mauris, ', 'ukraine', 'Ukraine, Kiev', '0000-00-00', ''),
(33, 'includes/img/ava.jpg', 'новость33', 'tincidunt quis neque ut, euismod interdum ex. Aenean condimentum vulputate nisl, feugiat consectetur', 'ukraine', ' Ukraine, sports', '0000-00-00', ''),
(34, 'includes/img/ava.jpg', 'новость34', ' diam feugiat at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turp', 'it', 'IT, JavaScript', '0000-00-00', ''),
(35, 'includes/img/ava.jpg', 'новость35', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum et tellus sed fringilla. Nulla ', 'sports', 'sports', '0000-00-00', ''),
(36, 'includes/img/ava.jpg', 'новость36', 'mollis aliquam sagittis. Vivamus cursus ornare porttitor. Suspendisse ullamcorper, turpis a mattis p', 'sports', 'sports, football', '0000-00-00', ''),
(37, 'includes/img/ava.jpg', 'новость37', 'retium, sem velit lobortis lorem, ut efficitur nulla lacus eget mi. Fusce et tellus et felis ultrice', 'finance', 'finance, BTC', '0000-00-00', ''),
(38, 'includes/img/ava.jpg', 'новость38', 's mollis et vel leo. Pellentesque iaculis at sem eu scelerisque. Fusce venenatis, justo convallis ve', 'finance', 'finance, euro', '0000-00-00', ''),
(39, 'includes/img/ava.jpg', 'новость39', 'hicula dapibus, massa nisl bibendum ligula, in imperdiet lectus nisl nec elit. Vivamus ante mauris, ', 'ukraine', 'Ukraine, Kiev', '0000-00-00', ''),
(40, 'includes/img/ava.jpg', 'новость40', 'tincidunt quis neque ut, euismod interdum ex. Aenean condimentum vulputate nisl, feugiat consectetur', 'ukraine', ' Ukraine, sports', '0000-00-00', ''),
(41, 'includes/img/ava.jpg', 'новость41', ' diam feugiat at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turp', 'it', 'IT, JavaScript', '0000-00-00', ''),
(42, 'includes/img/ava.jpg', 'новость42', 'is egestas. Donec non leo eros. Etiam pellentesque dui nec massa blandit porttitor. Cras id malesuad', 'it', 'IT, react', '0000-00-00', ''),
(43, 'includes/img/ava.jpg', 'новость43', 'a dolor, id convallis mi. Donec vel tempor massa.Aenean ultrices tincidunt orci, et efficitur neque ', 'politics', 'politics, Trump', '0000-00-00', ''),
(44, 'includes/img/ava.jpg', 'новость44', 'interdum in. Aenean malesuada in urna tincidunt efficitur. Fusce sagittis imperdiet dolor a sceleris', 'politics', 'politics', '0000-00-00', ''),
(45, 'includes/img/ava.jpg', 'новость45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum et tellus sed fringilla. Nulla ', 'sports', 'sports', '0000-00-00', ''),
(46, 'includes/img/ava.jpg', 'новость46', 'mollis aliquam sagittis. Vivamus cursus ornare porttitor. Suspendisse ullamcorper, turpis a mattis p', 'sports', 'sports, football', '0000-00-00', ''),
(47, 'includes/img/ava.jpg', 'новость47', 'retium, sem velit lobortis lorem, ut efficitur nulla lacus eget mi. Fusce et tellus et felis ultrice', 'finance', 'finance, BTC', '0000-00-00', ''),
(48, 'includes/img/ava.jpg', 'новость48', 's mollis et vel leo. Pellentesque iaculis at sem eu scelerisque. Fusce venenatis, justo convallis ve', 'finance', 'finance, euro', '0000-00-00', ''),
(49, 'includes/img/ava.jpg', 'новость49', 'hicula dapibus, massa nisl bibendum ligula, in imperdiet lectus nisl nec elit. Vivamus ante mauris, ', 'ukraine', 'Ukraine, Kiev', '0000-00-00', ''),
(50, 'includes/img/ava.jpg', 'новость50', 'tincidunt quis neque ut, euismod interdum ex. Aenean condimentum vulputate nisl, feugiat consectetur', 'ukraine', ' Ukraine, sports', '0000-00-00', ''),
(51, 'includes/img/ava.jpg', 'новость51', ' diam feugiat at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turp', 'it', 'IT, JavaScript', '0000-00-00', ''),
(52, 'includes/img/ava.jpg', 'новость52', 'is egestas. Donec non leo eros. Etiam pellentesque dui nec massa blandit porttitor. Cras id malesuad', 'it', 'IT, react', '0000-00-00', ''),
(53, 'includes/img/ava.jpg', 'новость53', 'a dolor, id convallis mi. Donec vel tempor massa.Aenean ultrices tincidunt orci, et efficitur neque ', 'politics', 'politics, Trump', '0000-00-00', ''),
(54, 'includes/img/ava.jpg', 'новость54', 'interdum in. Aenean malesuada in urna tincidunt efficitur. Fusce sagittis imperdiet dolor a sceleris', 'politics', 'politics', '0000-00-00', ''),
(55, 'includes/img/ava.jpg', 'новость55', 'que. Fusce tincidunt, purus at pellentesque tempor, felis urna egestas tortor, et malesuada lacus te', 'sports', 'sports', '0000-00-00', ''),
(56, 'includes/img/ava.jpg', 'новость56', 'llus sit amet lectus. Nulla magna justo, lobortis sed porttitor sed, finibus in ante. Morbi faucibus', 'sports', 'sports, football', '0000-00-00', ''),
(57, 'includes/img/ava.jpg', 'новость57', ' velit in arcu dignissim, in ullamcorper metus bibendum. Duis imperdiet lobortis risus nec tristique', 'finance', 'finance, BTC', '0000-00-00', ''),
(58, 'includes/img/ava.jpg', 'новость58', '. Fusce pulvinar nec nisl ut rhoncus. Nullam semper quam id quam varius, nec mollis nibh dignissim.Q', 'finance', 'finance, euro', '0000-00-00', ''),
(59, 'includes/img/ava.jpg', 'новость59', 'uisque consequat felis et lacus tristique tincidunt. Proin congue auctor commodo. Vestibulum eleifen', 'ukraine', 'Ukraine, Kiev', '0000-00-00', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
