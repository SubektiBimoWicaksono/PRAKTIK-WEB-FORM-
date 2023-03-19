<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="stylecu.css" type="text/css">
    </head>
    <body>
    <header>
		<h1> <br> </h1>
		<nav>
			<ul>
				<li><a href="home.php">Beranda</a></li>
				<li><a href="JHT.php">Hitung JHT</a></li>
				<li><a href="JKK.php">Hitung JKK</a></li>
				<li><a href="JK.php">Hitung JK</a></li>
				<li><a href="JP.php">Hitung JP</a></li>
				<li><a href="CU.php">Contact US</a></li>
			</ul>
		</nav>
	</header>
    <main>
		<section>
			<h1>Contact Us</h1>
		</section>
	</main>
        <form action="proses.php" method="post">
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" required>
                </li>
                <li>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" name="user_email">
                </li>
                <li>
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="user_message"></textarea>
                </li>
                <li class="button">
                    <input type="submit" name="button" id="button" value="Send your message" />
                </li>
            </ul>
        </form>

	<footer>
		<p>&copy; 2023 Subekti Bimo Wicaksono. Hak Cipta Dilindungi Undang-Undang.</p>
	</footer>
    </body>
    
</html>