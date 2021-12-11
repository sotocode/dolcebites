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
            <p>Sorry something went wrong.<br>Please try again.</p>
        </div>
    </div>
<section>