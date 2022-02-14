<style type="text/css">

* {
    margin: 0;
    padding: 0;
    border:0;
    box-sizing: border-box;
}

@font-face {
    font-family: 'monita';
    src: url('fonts/monita.otf') format('truetype');
}

@font-face {
    font-family: 'Manrope';
    src: url('fonts/manrope.ttf') format('truetype');
}

h1{
    font-family: 'monita', cursive;
    font-size: 40px;
    color: #FCDFEB;
    padding-left: 30px;
}

h1,
nav {
    display: inline-block;
}

h2 {
    font-family: 'monita', cursive;
    font-size: 2em;
    color: #49191D;
}

p {
    font-family: 'Manrope', sans-serif;
    line-height: 26px;
    color: #49191D;
}

.container {
    max-width: 1920px;
    margin: 0 auto;
}

header {
  background-color: #BD7D94;
  position: sticky;
  top: 0;
  height: 60px;
  z-index: 99;
}

header a {
  color: #fff;
  text-decoration: none;
}

header a:hover {
  color: #FCDFEB;
}

.container {
    max-width: 1920px;
    margin: 0 auto;
}

.logo {
 font-family: 'monita', cursive;
 font-size: 1.5em;
 display: inline-block;
 padding-left: 20px;
 height: 60px;
 padding-top: 10px;
}

#hamnav {
  width: 100%;
  background: #BD7D94;
}

#hamitems a {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-top: 1px solid #FAABC4;
  padding: 10px;
  color: white;
  text-decoration: none;
  text-align: center;
  font-family: 'Manrope', sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.75px;
}

#hamitems a:hover { 
  background: #49191D; 
}

#hamnav label {
  float: right;
  display: inline-block;
  color: white;
  background: #BD7D94;
  font-style: normal;
  font-size: 2em;
  padding: 10px;
  margin-right: 20px;
}

#hamnav label:hover {
  cursor: pointer;
  color: #FCDFEB;
}

#hamitems { 
  display: none; 
}
#hamnav input:checked ~ #hamitems { 
  display: block; 
}
#hamburger { 
  display: none; 
}

@media screen and (min-width: 768px){

  #hamitems { 
    display: flex;
    height: 60px;
    padding-right: 50px;
  }
  #hamitems a {
    flex-grow: 1;
    flex-basis: 0;
    padding-top: 20px;
  }

  #hamitems a {
    border-top: none;
  }

  #hamnav label, #hamburger { 
    display: none; 
  }

  .logo {
    float: left;
    margin-right: 20%;
    font-size: 2.1em;
    padding-top: 0px;
  }
}

#contact {
  background: #FAD5E5;
  padding: 20px;
  height: 100vh;
}

#contact p {
  font-size: 20px;
}

.container-contact {
  padding: 150px 0 50px 0;
  margin: 0 auto;
  max-width: 700px;
}

.contact-form {
  background: #FAABC4;
  padding: 20px;
  max-width: 700px;
  font-family: 'Manrope', sans-serif;
  margin: 30px auto;
}

ul {
	margin: 30px;
	color: red;
	font-family: 'Manrope', sans-serif;
	font-size: 18px
}

section#contact a:link {
    color: #fff;
}

section#contact a:hover {
    color: #FCDFEB;
}

</style>

<div class="container">
    <header>
        <h1><a href="index.html">Dolce Bites</a></h1>
        <nav>
            <ul>
                <li><a href="index.html#gallery">Gallery</a></li>
                <li><a href="catalogue.pdf">Catalogue</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
</div>
<section id="contact">
    <div class="container-contact">
        <p>Thank you for your interest in Dolce Bites. If you have any questions or comments about our products, please send us a message and we'll get back to you shortly. We'd love to hear from you!</p>
        <div class="contact-form">
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
    </div>
<section>