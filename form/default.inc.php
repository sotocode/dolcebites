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

</style>

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
                    <a href="index.html#gallery">Gallery</a>
                    <a href="catalogue.pdf">Catalogue</a>
                    <a href="contact.html">Contact</a>
                </div>
                </nav>
            </div>
</header>  
<section id="contact">
    <div class="container-contact">
        <p>Thank you for your interest in Dolce Bites. If you have any questions or comments about our products, please send us a message and we'll get back to you shortly. We'd love to hear from you!</p>
        <div class="contact-form">
            <p>Sorry something went wrong.<br>Please try again.</p>
        </div>
    </div>
<section>