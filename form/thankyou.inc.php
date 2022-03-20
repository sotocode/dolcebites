<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

@font-face {
    font-family: 'monita';
    src: url('fonts/monita.otf') format('truetype');
}

@font-face {
    font-family: 'Manrope';
    src: url('fonts/manrope.ttf') format('truetype');
}

h1 {
    font-family: 'monita', cursive;
    font-size: 3em;
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
    max-width: 1200px;
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

.logo {
 font-family: 'monita', cursive;
 font-size: 1.5em;
 display: inline-block;
 padding-left: 20px;
 padding-top: 20px;
}

/* [ON SMALL SCREENS] */

/* (A) WRAPPER */
#hamnav {
  width: 100%;
  background: #BD7D94;
}
/* (A) BREAK INTO VERTICAL MENU */
#hamitems a {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-top: 1px solid #FAABC4;
  padding: 15px;
  color: white;
  text-decoration: none;
  text-align: center;
  font-family: 'Manrope', sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.75px;
}

#hamitems {
  margin-top: 13px;
}

#hamitems a:hover { 
  background: #49191D; 
}

/* (B) SHOW HAMBURGER ICON */
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

/* (C) TOGGLE SHOW/HIDE MENU */
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
}

#contact p {
  font-size: 1.2em;
}

.container-contact {
  padding: 50px 20px 5px 20px;
  margin: 0 auto;
  max-width: 700px;
  text-align: center;
}

.container-contact h2 {
  word-spacing: 20px;
}

.container-contact p {
  margin-top: 20px;
}

.container-contact img {
  padding: 20px;
  width: 100%;
}

.contact-form {
  background: #FAABC4;
  padding: 20px 40px 10px 20px;
  max-width: 700px;
  font-family: 'Manrope', sans-serif;
  margin: 30px 0;
}

.contact-form input {
  border-width: 0;
}

.label_input_wrap {
 display: block;
 font-size: 1.1em;
 color: #49191D;
 padding-bottom: 5px; 
}

.submit input {
  background: #BD7D94;;
  color: white;
  padding: 5px 20px;
  font-size: 1.3em;
  font-family: 'Manrope', sans-serif;
  border: #BD7D94 3px solid;
  border-radius: 3px;
}

.submit input:hover {
  background: white;
  color: #BD7D94;
  cursor: pointer;
  font-weight: 600;
}

.input-section {
  margin-bottom: 20px;
}

input {
  padding: 10px;
  width: 50%;
  font-size: 1em;
}

input:nth-child(1) {
  width: 30%;
}

textarea {
  font-family: sans-serif;
  font-size: 1em;
  padding: 10px;
  width: 100%;
  border-width: 0px;
}

.contact-form .submit {
  margin-right: -20px;
}

footer {
  background-color: #BD7D94;
  color: #fff;
  padding: 40px;
}

.footer-container {
  max-width: 1200px;
  font-family: 'Manrope', sans-serif;
  margin: 0 auto;
}

.footer-container a {
  color: #fff;
  text-decoration: none;
}

.footer-container a:hover {
  color: #FCDFEB;
}

.footer-wrap {
  display: flex;
  flex-direction: column;
  gap: 20px;
  justify-content: flex-start;
}

.footer-social {
  align-self: center;
  font-size: 1.5em;
  width: 100%;
  text-align: center;
}

.footer-credit {
  align-self: center;
  font-size: 1em;
  line-height: 1.3em;
  text-align: center;
  width: 100%;
}

@media (min-width: 280px) and (max-width: 480px) {
  footer {
    padding: 20px;
  }
  input {
    width: 100%;
  }
  input:nth-child(1) {
    width: 100%;
  }
}

@media (min-width: 481px) and (max-width: 768px) {
  .content {
    width: 60%;
    margin: 0 auto;
  }
  input:nth-child(1) {
    width: 50%;
  }
}

@media screen and (min-width: 769px) {

  /* (B) HORIZONTAL MENU ITEMS */
  #hamitems { 
    display: flex;
    height: 60px;
    padding-right: 50px;
    margin-top: 0;
  }
  #hamitems a {
    flex-grow: 1;
    flex-basis: 0;
    padding-top: 20px;
  }
  #hamitems a {
    border-top: none;
  }
  /* (C) HIDE HAMBURGER */
  #hamnav label, #hamburger { 
    display: none; 
  }
  .logo {
    float: left;
    margin-right: 10%;
    font-size: 2em;
    padding-top: 15px;
  }
  .footer-wrap {
    flex-direction: row;
    justify-content: space-between;
  }
  .footer-social {
    align-self: stretch;
    text-align: left;
    width: 40%;
  }
  .footer-credit {
    align-self: flex-end;
    text-align: right;
    width: 40%;
  }
  .footer-social br {
    display: none; 
  }
}

</style>
<script src="https://kit.fontawesome.com/bf20ac6a8e.js" crossorigin="anonymous"></script>


<header>
    <div class="container">
        <!-- (A) MENU WRAPPER -->
        <nav id="hamnav">
        <div class="logo"><a href="index.html">Dolce Bites</a></div>
        <!-- (B) THE HAMBURGER -->
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger"/>
        <!-- (C) MENU ITEMS -->
        <div id="hamitems">
            <a href="index.html">Home</a>
            <a href="index.html#gallery">Gallery</a>
            <a href="catalogue.pdf">Catalogue</a>
            <a href="contact.html">Contact</a>
        </div>
        </nav>
    </div>
</header> 
</div>
<section id="contact">
    <div class="container-contact">
        <h2>Thank you!</h2>
        <p>We have received your message and we will be in touch shortly.</p>
        <img src="images/bomb.png" alt="Illustration of a bomb dipped in chocolate" width="500">
    </div>
<section>
<footer>    
    <div class="footer-container footer-wrap">
        <div class="footer-social">
            <a href="https://www.instagram.com/dolcebites.co/" target="_blank"><i class="fab fa-instagram fa-2x"></i> <br>@dolcebites.co</a>
        </div>
        <aside class="footer-credit">
            Website by <a href="http://www.sotocode.com/" target="_blank">SOTOCODE</a><br>
            &copy; 2022 All rights reserved
        </aside>
    </div>
</footer>
