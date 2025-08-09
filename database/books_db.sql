

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Base de données : `books_db`
--



--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `link`) VALUES
(1, 'C Programming Language: The Ultimate Beginner\'s Guide', 'c_book1.php'),
(2, 'C Programming for Arduino', 'c_book2.php'),
(3, 'Learn C Programming; C Programming Language', 'c_book3.php'),
(4, 'Learn to Program with C', 'c_book4.php'),
(5, 'HTML & CSS Crash Course- Learn html and css with easy to follow-step-by-step tutorials', 'html1.php'),
(6, 'web design with html and css digital classroom', 'html2.php'),
(7, '100+ Java Programs with Output- Useful collection of Java Programs', 'java_book1.php'),
(8, 'Easy Java Programming for Beginners, Your Step-By-Step Guide to Learning Java Programming', 'java_book2.php'),
(9, 'Java for Absolute Beginners- Learn to Program the Fundamentals the Java 9+ Way', 'java_book3.php'),
(10, 'Java Programming For Beginners - A Simple Start to Java Programming', 'java_book4.php'),
(11, 'Functional Programming in JavaScript- How to improve your JavaScript programs', 'jS_book1.php'),
(12, 'JavaScript- JavaScript For Beginners - Learn JavaScript Programming with ease in HALF THE TIME', 'jS_book2.php'),
(13, 'Javascript- Javascript Programming For Absolute Beginners- Ultimate Guide To Javascript Coding', 'jS_book3.php'),
(14, 'Programming for Computations - MATLAB-Octave- A Gentle Introduction to Numerical Simulations with MA', 'matlab1.php'),
(15, 'MATLAB Programming Fundamentals - MathWorks', 'matlab2.php'),
(16, 'PRACTICAL MATLAB® FOR ENGINEERS PRACTICAL MATLAB', 'matlab3.php'),
(17, 'Learn to Program with Python 3- A Step-By-Step Guide to Programming', 'python1.php'),
(18, 'Python Programming for the Absolute Beginner', 'python2.php'),
(19, 'Python Programming for Beginners, Python Programming for Intermediates', 'python3.php'),
(20, 'Python Practical Python Programming For Beginners and Experts', 'python4.php'),
(22, 'Core PHP Programming Using PHP to Build Dynamic Web Sites\r\n', 'php_book2.php'),
(23, 'PHP- Learn PHP in 24 Hours or Less', 'php_boo3.php'),
(24, 'PHP Crush Course! Learn PHP Programming in 4 hours!', 'php_book4.php'),
(25, 'C', 'c.php'),
(26, 'php', 'php.php'),
(27, 'java', 'java.php'),
(28, 'js', 'js.php'),
(29, 'python', 'python.php'),
(30, 'matlab', 'matlab.php'),
(31, 'html', 'html_css.php');


--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`),
  ADD UNIQUE KEY `link_2` (`link`),
  ADD UNIQUE KEY `link_3` (`link`),
  ADD UNIQUE KEY `link_4` (`link`);
COMMIT;

