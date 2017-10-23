<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="../style/index-page.css">
</head>
<body id="msg">
<div id="background"></div>
<header>
    <nav>
        <div class="logo" onclick="window.location='index.php';">
            CAMAGRU
        </div>
        <div class="drop">
            <button class="drop-button" onclick="window.location='user/login.php';">logout</button>
        </div>
    </nav>
</header>

<section id="content">
	<p id="create_label">Setup DB:</p>
	<div id="popup">
		<p>
			<?php
				require_once('database.php');
				$opt  = array(
					PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					PDO::ATTR_EMULATE_PREPARES   => TRUE,
				);
				try {
					$pdo = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname=;charset='.DB_CHARSET, DB_USER, DB_PASSWORD, $opt);
					$pdo->query('CREATE DATABASE IF NOT EXISTS '.DB_NAME);
					$pdo->query('USE '.DB_NAME);
					//CREATE USER TABLE
					$pdo->query('DROP TABLE IF EXISTS `user`');
					$pdo->query('CREATE TABLE `user` (
                                  `id` int(11) NOT NULL,
                                  `email` varchar(254) NOT NULL,
                                  `login` varchar(16) NOT NULL,
                                  `password` varchar(254) NOT NULL,
                                  `activated` tinyint(1) NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8');
					$pdo->query('ALTER TABLE `user`
                                  ADD PRIMARY KEY (`id`),
                                  ADD UNIQUE KEY `email` (`email`);');
					$pdo->query('ALTER TABLE `user`
                                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;');
                    //CREATE LIKES TABLE
					$pdo->query('DROP TABLE IF EXISTS `likes`');
					$pdo->query('CREATE TABLE `likes` (
                                  `id_user` int(11) NOT NULL,
                                  `id_image` int(11) NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
					$pdo->query('ALTER TABLE `likes`
                                  ADD KEY `id_user` (`id_user`,`id_image`);');
                    //CREATE IMAGE TABLE
					$pdo->query('DROP TABLE IF EXISTS `image`');
					$pdo->query('CREATE TABLE `image` (
                                  `id` int(11) NOT NULL,
                                  `id_user` int(11) NOT NULL,
                                  `name` varchar(40) NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
					$pdo->query('ALTER TABLE `image`
                                  ADD PRIMARY KEY (`id`);');
					$pdo->query('ALTER TABLE `image`
                                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;');
					//CREATE COMMENT TABLE
					$pdo->query('DROP TABLE IF EXISTS `comment`');
					$pdo->query('CREATE TABLE `comment` (
                                  `id` int(11) NOT NULL,
                                  `id_user` int(11) NOT NULL,
                                  `id_image` int(11) NOT NULL,
                                  `comment` varchar(2000) NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
                    $pdo->query('ALTER TABLE `comment`
                                  ADD PRIMARY KEY (`id`);');
					$pdo->query('ALTER TABLE `comment`
                                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;');


                    $pdo->query('INSERT INTO `user` (`id`, `email`, `login`, `password`, `activated`) VALUES (\'1\', \'vaiol.ans@gmail.com\', \'AUTHOR\', \'123456\', \'1\');');
                    $pdo->query('INSERT INTO `likes` (`id_user`, `id_image`) VALUES (\'1\', \'91\');');
//                    $pdo->query('');
                    $pdo->query('INSERT INTO `comment` (`id`, `id_user`, `id_image`, `comment`) VALUES (\'1\', \'1\', \'90\', \'sfgdfghfghdghdfgh dg fgh f gdddh \');');

                    $pdo = null;
				} catch (PDOException $e) {
					echo 'ERROR!!!</p></div><br><div><p>'.$e->getMessage();
					exit();
				}
				echo "SETUP COMPLETED SUCCESFULL";
				header( "refresh:3;url=../" );
			?>
		</p>
	</div>
</section>
</body>
</html>
