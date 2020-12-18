<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

html {
  min-height: 100%;
}

.container {
  max-width: 1500px;
  margin: 0 auto;
  text-align: center;
}

body {
  background-image: linear-gradient(to bottom right, #fdfbfb, #ebedee);
  background-repeat: no-repeat;
  color: #111111;
  font: 16px 'Inter', sans-serif;
}

h1 {
  font-size: 72px;
  padding: 30px;
}

h2 {
  font-size: 38px;
}

h3 {
  font-size: 24px;
}

h1,
h2,
h3 {
  font-family: 'Fira Code', monospace;
}

h1::selection,
h2::selection,
h3::selection,
p::selection {
  background: #ffb696;
  color: #fff;
}

header {
  text-align: center;
  padding: 50px 0;
}

.logo-container {
  position: relative;
  float: left;
  margin-left: 40px;
  transition: .3s;
}

.logo-container:hover {
  opacity: 0.5;
  transition: .3s;
}


nav ul li {
  display: inline-block;
  font: 18px 'Inter', sans-serif;
  padding: 30px;
}

nav ul li a {
  color: #111111;
  text-decoration: none;
  text-transform: uppercase;
  transition: .3s;
}

nav ul li a:hover {
  color: #ff7a95;
  transition: .3s;
}

nav ul li a:active {
  color: #ffb696;
}

footer {
    clear: both;
    text-align: center;
    margin: 50px;
}

.connect {
    text-transform: uppercase;
    margin: 12px 0;
}

.socialmedia a {
    font-size: 50px;
    color: #ff7a95;
    margin: 5px;
    transition: .3s;
}

.socialmedia a:hover {
  color: #ffb696;
  transition: .3s;
}

.site-credit {
  font-size: 14px;
  margin-top: 8px;
}
</style>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/4308417424.js" crossorigin="anonymous"></script>

<header>
  <div class="logo-container">
    <a href="index.html">
      <img class="logo" src="image/heart-logo.png" alt="Heart Logo" title="Heart Logo" width="50" />
    </a>
  </div>


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
  <p class="connect">Let's Connect!</p>
  <p class="socialmedia">
    <a href="https://www.instagram.com/reneshadotcom/" target="_blank"><i class="fab fa-instagram-square"></i></a>
    <a href="https://www.twitter.com/reneshadotcom" target="_blank"><i class="fab fa-twitter-square"></i></a>
    <a href="https://www.linkedin.com/in/renesha-matthews-903b24126/" target="_blank"><i class="fab fa-linkedin"></i></a>
  </p>
  <p class="site-credit">Coded and Designed by: Renesha Matthews</p>
</footer>
