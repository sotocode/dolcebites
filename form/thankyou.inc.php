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
    background: #BD7D94;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
}

header nav {
    float: right;
    margin-right: 50px;
    margin-top: 13px;
}

header a {
    color: #fff;
    text-decoration: none;
}

header a:hover {
    color: #FCDFEB;
}

header li {
    display: inline-block;
    padding: 10px 20px;
    font-family: 'Manrope', sans-serif;
    text-transform: uppercase;
    letter-spacing: 0.75px;
    font-size: 18px;
    color: #fff;
}

#contact {
  background: #FAD5E5;
  padding: 20px;
}

#contact p {
  font-size: 20px;
}

#contact p::after {
  content: "\f004";
  color: #49191D;
  font-family: "Font Awesome 5 Free";
  font-weight: 900; 
  padding-left: 5px;
  font-size: 18px;
}

.container-contact {
  padding: 150px 0 50px 0;
  margin: 0 auto;
  max-width: 700px;
}

.contact-form {
  background: #FAABC4;
  padding: 20px 20px 10px 20px;
  max-width: 700px;
  font-family: 'Oxanium', sans-serif;
  margin: 30px auto;
}

footer {
  background-color: #BD7D94;
  color: #fff;
  padding: 20px;
}

.footer-container {
  max-width: 1920px;
  font-family: 'Manrope', sans-serif;
  margin: 0 auto;
}

.footer-container a {
  color: #fff;
  text-decoration: none;
}

.footer-container a:hover {
  color: #FCDFEB;
  text-decoration: none;
}

.social {
  font-size: 24px;
  float: left;
  padding: 20px;
  width: 50%;
  text-align: left;
  vertical-align: text-top;
}

.credit {
  font-size: 14px;
  float: right;
  padding: 20px;
  width: 50%;
  text-align: right;
  margin-top: 26px;
}

@media screen and (max-width: 650px) {
  .social,
  .credit {
    width: 100%;
    text-align: center;
    margin-top: 0;
  }
}

@media screen and (min-width: 651px) {
  .social br {
    display: none;  
  }
}



</style>

<div class="container">
    <header>
        <h1><a href="index.html">Dolce Bites</a></h1>
        <nav>
            <ul>
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
            <h2>Thank you!</h2>
            <p>We have received your message and we will be in touch shortly.</p>
        </div>
    </div>
<section>
<footer>
    <div class="footer-container row">
        <div class="social">
            <a href="https://www.instagram.com/dolcebites.co/" target="_blank"><i class="fab fa-instagram fa-2x"></i> <br>@dolcebites.co</a>
        </div>
        <div class="credit">Website by <a href="http://www.sotocode.com/" target="_blank">SOTOCODE</a></div></div>
    </div>
</footer>
