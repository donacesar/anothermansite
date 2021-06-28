-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 28 2021 г., 13:48
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anotherman`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$1r1FNd9RVJXNRE.cccOHe.//ROFvo2WcYov.djXXI4bPLn4RLshju');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_sessions`
--

CREATE TABLE `admin_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `hash` varchar(1024) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admin_sessions`
--

INSERT INTO `admin_sessions` (`id`, `admin_id`, `hash`) VALUES
(1, 1, '8a3a22047883970008d53ed505e54d8a9d541bd1ddea9bf06acc6874d15358fc'),
(2, 1, 'b1479431709d3fa8b6ef07b4e548cc2358290394f6e0f215f5e6f887430b3984'),
(3, 1, '40171c50f6e17e6a660384af1044e2bd706287aad2bd727de4c1742b7644b649'),
(4, 1, '744dab32a2251b9f96cd063bdbf265de5a88e52db8e16e2918567f0b3bb276ae'),
(5, 1, '0a44b5a9cb363027a408800e09f58b4a9af42e6ab321d558ece1eed13d24e844'),
(6, 1, '527bf940979e7a5b811c40474dc8502301a3ecce8a14a6be6bdb3ef58c24dc58'),
(7, 1, '581becca03b56ae6bc272af5d9f97f77a5afeceb37abb8bcc87cf4d084322311'),
(8, 1, '5ee59dfdda76cc8d4fbe275e92bce55601bd653c98ecd946359b17aa9a203442'),
(9, 1, 'e2ca227332dd5c794fae548256e7e2d0b3a49be72a241747826b992be0544d69'),
(10, 1, 'adabd8c44b3f6956ed3e24101d4f2680d9312b09aa387a943fd6cd6de3e52fbc'),
(11, 1, 'e0fe36032b9a33eb64aa7d116c0010d136feecf8c79f885c8abca7d1ab366dbf'),
(12, 1, '9352512577d73f28f3ef34f9baf6c76124bb1bd5b3f6b081e908614259d1e6a3'),
(13, 1, '092ad10cac107cda24d6796234c18d6b15a0b00111625834257d4386c2fe0bf3'),
(14, 1, '0e1427f78a6ba657bcbefc5b10dc15c602b0a2f7a245cfc6466251e305deb489'),
(15, 1, 'cfa8b79f1dea9011df5007881071fb6094a87d7d8ab4d430105c0ed17744c650'),
(16, 1, '3b70d5f2ab5762ba3bb6b6d1bce715d5995b3e4ca302af7db235300730889f4c'),
(17, 1, '90f52d03642ff8061ee29710719460ba08e11622af06810820258c87b7014b8d'),
(18, 1, '0bbcbc5160177374c6413ab8ec15126c569bc30c7a96948c8710e7d143851c9d'),
(19, 1, 'e2aecf98159b72409bb841a6b9e86db7662f2f8a1aa3f8f1717648a7d9502877'),
(20, 1, '98c701abdb35a3cf6acfcd424e63a009a53ff63f85b6dbea7803e3df68bf4ec9'),
(21, 1, '26a571946431eddbaed5aa439b38c1ab8a1bdb6745b5f853e2eb26bb3bbba355'),
(22, 1, 'bec957f07a59e9083318c03182cf4e996485c76a07950941e2ef254b95117eb4'),
(23, 1, '5cfed06c139ed043118492453e35518b59c99eeec49865b4f7b7e9ffcf0b6906'),
(24, 1, '7a352d76fae47f92f7dc2f61acb62f7facecde0b335cdd92896703cedc75f7da'),
(25, 1, 'dc91ca142b1788884377c8396fd78d806b93b6ad82ef6cd7ea12087e4e4926dc'),
(26, 1, 'c94658b079a2b089cd76a92e7c2c062b2d4dd1f753686a986c18533a61867c6e'),
(27, 1, 'a9a05f72e170f71c490fb369745929f0b7de923da34ddc70e8b22d090a87986d'),
(28, 1, '05b1a55c83c133097df525c2e851599750744b10fe7c6912aa941409c4a2925b'),
(29, 1, '37dba783d961f89adbc540dae3967c57995d0c26cda700eb20e00a609788f335'),
(30, 1, 'fb1844d71ac1b4c27340b7aee54f850ab590d52e7db1de5b791430d49b6d23ae'),
(31, 1, '3f5426d8451ff7af02bfa48ceeb0c366ddc42ed0bcee012f1d8d2bee30787dac'),
(32, 1, '98ba9098c6be4ee554dc40db66faf6e2b86bed751be06738ac5b8d23a0ba5ec9'),
(33, 1, 'f84cbdef4bbb7ba2b2da2ad0af00d7fe5fb00a646f3a2caf99bff0c27d9d54c3'),
(34, 1, '1aa3ccc4bb18196d9b5944c9109a3b0a5f53ea6e85e1fa093b5db04cb93c9855'),
(35, 1, 'b37f2c36b40c426a548e24959468ad30d7569bf1d5b53411ff72988ba594a628'),
(36, 1, 'a321423183c74aa331ad48a45e95b9346b05c4d0f711d9daf7e030ffa3946d0e'),
(37, 1, '2f5d1e2a27d7bbfeaf09058b7af1e67b3a8c6de478f50097cf0d6867ee209499'),
(38, 1, '1d9ad965bc7afba915b0c5b204f6c37015a477f329f9c7a927b0ba66d8ab9232'),
(39, 1, '67bcff419f550323e3a1bd700b837dc7ba61e1209ee3ab9ab2f6a0461ca267f2'),
(40, 1, '3d24edddff56da19e642d141d70747f5c4061eb9a1f32820e211bbe7157b6969'),
(41, 1, 'a95cadbbcd525520feba89dce3f2101cf2052619fd483f6979ed22ccc9f37e3a'),
(42, 1, 'e758adc6e96b2fa4ba8d68f888ce8e50867cc695af4310e8f670f47daf4bfbb5'),
(43, 1, '068619c381085843567730420be65d509e206f2b1d681218a75eaf62885f88bd'),
(44, 1, '3ca80fdb7874b368cd47c059f468dd0a024f5bbe8f0a68a6560d4f24c6150deb'),
(45, 1, 'b2964f9e448237296a3f80d8a9a35400bf887bf244645e51c10ad4e1b7e91362'),
(46, 1, 'f7e8f168ffa199577b4c373c60e7c620163d220501251dbf3f451d3593d9d5cf');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `admin_sessions`
--
ALTER TABLE `admin_sessions`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `admin_sessions`
--
ALTER TABLE `admin_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
