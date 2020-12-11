<header>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
</header>

<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>Let's Connect!</p>
	<p>
		<a href="https://www.instagram.com/reneshadotcom/"><i class="fab fa-instagram-square"></i></a>
		<a href="https:///www.twitter.com/reneshadotcom"><i class="fab fa-twitter-square"></i></a>
		<a href="https://www.linkedin.com/in/renesha-matthews-903b24126/"><i class="fab fa-linkedin"></i></a>
	</p>
	<p>&copy; 2020 Renesha Matthews.</p>
</footer>
