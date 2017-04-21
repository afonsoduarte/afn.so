<!doctype html>
<html>
  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>
  
  <style>
  /* line 1, resume.scss */
body {
  max-width: 770px;
  margin: 1.4rem auto; 
}

/* line 11, resume.scss */
h1,
h2,
h3,
h4,
p,
ul {
  margin: 0;
  padding: 0;
  font-size: 1.1rem;
  line-height: 1.4;
  word-spacing: -0.05em; }

/* line 22, resume.scss */
h1,
h2,
h3,
h4 {
  margin-top: 1.4rem; }

h3 {
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-size: 0.9em;
    margin-top: 2.8rem; 
}

p {
    max-width: 33em;
}

p + p {
    text-indent: 1.4em;
}

li {
    list-style: none;
}

.list .list li:before {
    content: "– ";
}

/* line 26, resume.scss */
a {
  color: black; }

/* line 30, resume.scss */
.list-item {
  width: 27%;
  margin-right: 3%;
  float: left;
}

section, header {
    clear: both;
}

section:after, header:after {
    content: " ";
    clear: both;
    display: table;
}

.bio {
  float: left;
  width: 60%;
}

.bio h1 {
  margin-top: 0;
}

#contact {
  padding-top: 1.4rem;
  float: left;
  margin-left: 7%;
  width: 33%;
}

/* line 36, resume.scss */
.position {
  margin-bottom: 0; /*1.4rem;*/ }

/* line 40, resume.scss */
.work-item:not(:first-child) {
  margin-top: 5.6rem; }
  /* line 42, resume.scss */
  .work-item:after {
    content: "";
    display: block;
    clear: both; }

/* line 49, resume.scss */
.work-item-header {
  float: right;
  width: 33%;
  margin-left: 6%; }
  /* line 54, resume.scss */
  .work-item-header h4 {
    margin: 0; }
    /* line 56, resume.scss */
    .work-item-header h4 a {
      text-decoration: none; }
  /* line 60, resume.scss */
  .work-item-header:after {
    content: "";
    display: block;
    clear: both; }

/* line 67, resume.scss */
.work-item-summary {
  float: left;
  width: 61%; }
  /* line 70, resume.scss */
  .work-item-summary:after {
    content: "";
    display: block;
    clear: both; }

.url {
    overflow: hidden;
}

.work-item-images {
  clear: both;
  padding-top: 1px;
}

.work-item-image {
  margin: 1.4rem 0;
}

.work-item-image.desktop {
  border: 1px solid #ddd;
  border-radius: 4px;
  border-top: 30px solid #ddd;
}

.work-item-image.desktop:before {
  content: "• • •";
  font-size: 30px;
  color: #fff;
  letter-spacing: 0px;
  text-indent: 10px;
  margin-top: -32px;
  height: 30px;
  display: block;
}

  .work-item-image img {
    max-width: 100%;
    display: block;
    margin: 0 auto;
  }

@media print {
  /* line 78, resume.scss */
  .work-item-image.mobile img {
    max-height: 12.5cm;
  }
  a {
    text-decoration: none; } }
@page {
  size: auto;
  /* auto is the initial value */
  margin: 10mm 15mm 20mm; }
  </style>

  </head>
  <body>

  <div id="content">
    <div class="container">

      <section id="work">
        <h3>About</h3>
        <div class="content">
          <p>I'm a web designer and front-end developer based in London. I care about things like legibility, typographic rhythm, visual contrast and clear hierarchies. I can't design without grids and baselines, and always use the measure on my text columns.</p>
          <p>I also write SCSS that responds to screen sizes. I use BEMCSS to structure my code. I use two spaced indents (soft tabs, of course). I strive to write semantic HTML, descriptive class names and microformatted content. My Javascript usually inherits prototypes and degrades quite gracefully.</p>
        </div>
        <h3>Contact</h3>
        <div class="content">
          <ul>
            <li>Email: a@afn.so</li>
            <li>Phone: +44 (0)78 78 159 951</li>
          </ul>
        </div>

        <h3>Work</h3>
        <div class="content">
          <div class="work-item">
            <h4>
              <a class="link" href="http://about.hm.com/en/sustainability/sustainability-highlights-2016-en.html">H&amp;M Sustainability Highlights</a>
            </h4>
            <header class="work-item-header">
              <p class="url"><a class="link" href="http://about.hm.com/en/sustainability/sustainability-highlights-2016-en.html">http://about.hm.com/en/sustainability/sustainability-highlights-2016-en.html</a></p>
              <time class="date">2016-11-01&thinsp;–&thinsp;2017-04-01</time>
              <p class="position">Web Designer and Front-end Developer</p>
            </header>
            <div class="work-item-summary">
              <p>The H&amp;M Sustainability Highlights 2016 was built in HTML, SASS and Javascript. Amongst the key challenges were making the website perform well in a very wide range of devices and bandwidths, and designing components robust enough to handle 8 different languages and scripts, including Japanese and Chinese, which required a custom automated workflow to be developed.</p>
            </div>
            <div class="work-item-images">
              <div class="work-item-image desktop">
                <img src="public/hm-highlights-2016.studiobon.com-index-en-GB.html(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/hm-highlights-2016.studiobon.com-index-en-GB.html(Laptop with MDPI screen) (1).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/hm-highlights-2016.studiobon.com-index-en-GB.html(Laptop with MDPI screen) (2).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/hm-highlights-2016.studiobon.com-index-en-GB.html(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/hm-highlights-2016.studiobon.com-index-en-GB.html(iPhone 5) (1).png.jpg">
              </div>
            </div>

          </div>
          <div class="work-item">
            <h4>
              <a class="link" href="http://fashionweek.se">Fashion Week Stockholm</a>
            </h4>
            <header class="work-item-header">
              <p class="url"><a class="link" href="http://fashionweek.se">http://fashionweek.se</a></p>
              <time class="date">2016-07-01&thinsp;–&thinsp;2016-08-25</time>
              <p class="position">Web Designer and Front-end Developer</p>
            </header>
            <div class="work-item-summary">
              <p>Fashion Week Stockholm is a WordPress install with custom plugins and theme. It was designed mobile-first, and optimised to feel snappy on any connection.</p>
            </div>
            <div class="work-item-images">
              <div class="work-item-image desktop">
                <img src="public/fashionweekse-clipped.png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/fashionweek.se-designers-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/fashionweek.se-designers-baumgarten-di-marco-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/fashionweek.se-(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/fashionweek.se-designers-(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/fashionweek.se-designers-baumgarten-di-marco-(iPhone 5).png.jpg">
              </div>
            </div>

          </div>
          <div class="work-item">
            <h4>
              <a class="link" href="http://bon.se">Bon Magazine</a>
            </h4>
            <header class="work-item-header">
              <p class="url"><a class="link" href="http://bon.se">http://bon.se</a></p>
              <time class="date">2012-09-01&thinsp;–&thinsp;2017-04-01</time>
              <p class="position">Web Designer and Front-end Developer</p>
            </header>
            <div class="work-item-summary">
              <p>Bon is a Swedish fashion magazine, both digital and print. We’re responsible for everything from front-end to back-end tools, hosting and deployments, and setting up and developing a video streaming service twice a year for Fashion Week Stockholm. It uses a WordPress back-end with custom-built front-end, and runs on a fully automated and reproducible stack, orchestrated by Ansible.</p>
            </div>
            <div class="work-item-images">
              <div class="work-item-image desktop">
                <img src="public/bon.se-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/bon.se-article-har-samtidens-mode-forlorat-sin-sjal-i-jakten-pa-hype-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/bon.se-magazine-bon-72-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/bon.se-magazine-bon-72-part-two-sun-seekers-(Laptop with MDPI screen) (1).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/bon.se-magazine-bon-72-part-two-sun-seekers-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/bon.se-(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/bon.se-(iPhone 5) (1).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/bon.se-article-har-samtidens-mode-forlorat-sin-sjal-i-jakten-pa-hype-(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/bon.se-magazine-bon-72-(iPhone 5).png.jpg">
              </div>
            </div>

          </div>
          <div class="work-item">
            <h4>
              <a class="link" href="http://vestoj.com">Vestoj</a>
            </h4>
            <header class="work-item-header">
              <p class="url"><a class="link" href="http://vestoj.com">http://vestoj.com</a></p>
              <time class="date">2014-09-01&thinsp;–&thinsp;2015-06-01</time>
              <p class="position">Web Designer and Front-end Developer</p>
            </header>
            <div class="work-item-summary">
              <p>Vestoj is an online and print publication exploring critical writing in fashion. The website is built on a WordPress back-end with a custom front-end.</p>
            </div>
            <div class="work-item-images">
              <div class="work-item-image desktop">
                <img src="public/vestoj.com-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image desktop">
                <img src="public/vestoj.com-category-fiction-(Laptop with MDPI screen).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/vestoj.com-(iPhone 5).png.jpg">
              </div>
              <div class="work-item-image mobile">
                <img src="public/vestoj.com-category-fiction-(iPhone 5).png.jpg">
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>

  </body>
</html>