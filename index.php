
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>HTML5 Boilerplate: The web’s most popular front-end template</title>
  <meta name="description" content="HTML5 Boilerplate is a professional front-end template for building fast, robust, and adaptable web apps or sites. Spend more time developing and less time reinventing the wheel.">

  <style>html{color:#222;font-size:1em;line-height:1.4}::-moz-selection{background:#b3d4fc;text-shadow:none}::selection{background:#b3d4fc;text-shadow:none}img{vertical-align:middle}.clearfix::after,.clearfix::before{content:"";display:table}.clearfix::after{clear:both}@media print{*,::after,::before{background:#fff!important;color:#000!important;box-shadow:none!important;text-shadow:none!important}a,a:visited{text-decoration:underline}a[href]::after{content:" (" attr(href) ")"}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}}
/*!
 * Bootstrap Grid v4.6.2 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
html{box-sizing:border-box;-ms-overflow-style:scrollbar;color:#fff;font-size:1rem;font-family:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif;text-align:center}*,::after,::before{box-sizing:inherit}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-12,.col-lg-8,.col-md-10,.col-sm-11{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{flex-basis:0;flex-grow:1;max-width:100%}.row-cols-1>*{flex:0 0 100%;max-width:100%}.row-cols-2>*{flex:0 0 50%;max-width:50%}.col-12{flex:0 0 100%;max-width:100%}@media (min-width:576px){.row-cols-sm-2>*{flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{flex:0 0 33.333333%;max-width:33.333333%}.col-sm-11{flex:0 0 91.666667%;max-width:91.666667%}}@media (min-width:768px){.row-cols-md-6>*{flex:0 0 16.666667%;max-width:16.666667%}.col-md-10{flex:0 0 83.333333%;max-width:83.333333%}}@media (min-width:992px){.row-cols-lg-2>*{flex:0 0 50%;max-width:50%}.col-lg-8{flex:0 0 66.666667%;max-width:66.666667%}}.d-flex{display:flex!important}.align-items-center{align-items:center!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}body{background-color:#111}a{color:#069}h1{font-size:3.2rem;line-height:1.2em}h2{font-size:2rem}h3{color:#555;font-size:1.2rem;margin-bottom:0}.btn-download{color:#fff;display:inline-block;font-size:1.5em;padding:.6em 1em;position:relative;text-decoration:none;text-shadow:0 -1px 0 rgba(0,0,0,.5);vertical-align:middle;border-radius:4px;background-color:#d9750b;background-image:linear-gradient(#f90 10%,#e76a00 100%);box-shadow:0 1px 0 rgba(255,255,255,.5) inset,0 1px 3px rgba(0,0,0,.2);border:1px solid #995309}.btn-download:active,.btn-download:focus,.btn-download:hover{text-decoration:none;background-color:#e0811b;background-image:linear-gradient(#f0a100 10%,#f70 100%)}.btn-download:active{background-color:#cf6a00;box-shadow:0 2px 3px 0 rgba(0,0,0,.2) inset}nav{padding-top:50px}.site-logo{color:#fff;float:left;font-size:1.5rem;font-weight:700;text-decoration:none;text-shadow:2px 2px 0 #000;text-transform:uppercase}.star{color:#e08524}footer a{color:#ffa000}footer{font-size:.9rem;padding:2em;margin-bottom:25px;margin-top:25px}.site-nav{float:right;list-style-type:none;margin-top:7px;padding:0}.aside a{margin:5px}.aside img{margin-right:5px}.site-nav a{color:#ffa000;display:block;text-decoration:none;text-transform:uppercase}.site-nav a:active,.site-nav a:focus,.site-nav a:hover{color:#fff}header{margin-bottom:85px;margin-top:85px}header p{color:#ddd;font-size:1.25rem;margin:25px}.changelog{color:#999;display:block;margin-top:10px}.section-features h3{color:#111;margin:8px}.section-features p{padding:0 15px 6px}.section-features .col{margin-bottom:25px;margin-top:15px}.section-features img{margin-bottom:9px}main{background-color:#eee;color:#222}section{padding:35px 0 55px}.aside{background-color:#ccc;padding:25px 0;border-top:1px solid #bbb}.section-who-uses{color:#222;border-top:1px solid #bbb;background-color:#ddd}.section-who-uses .col{margin-bottom:9px;margin-top:9px}.section-who-uses img{text-align:center;max-width:90%;vertical-align:middle;max-height:40px;display:flex;align-items:center;margin-left:auto;margin-right:auto;padding:6px}.inline-block-list li{display:inline-block;margin-left:12px}.inline-block-list li:first-child{margin-left:0}@media only screen and (max-width:768px){html{font-size:calc(.8rem + .5vw)!important}h1{font-size:calc(1.4rem + 1.5vw)!important}h2{font-size:calc(1.2rem + 1vw)!important}.site-logo,.site-nav{float:none!important}.site-nav li{margin:0 .5em}header{margin-top:40px!important}header p{font-size:calc(1rem + .3vw)!important}section{padding:25px 0!important}.inline-block-list li{display:block;margin:0 auto 1.5em}.inline-block-list li:last-child{margin-right:1.5em}}@media only screen and (max-width:575px){.site-logo{float:none!important}header{margin-top:30px}.site-nav{text-align:center;float:none;display:block}.section-who-uses img{padding-left:15px;padding-right:15px}.aside .inline-block-list li{display:block;margin-top:15px;margin-bottom:15px}}</style>

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <meta name="og:url" content="https://html5boilerplate.com/">
  <meta name="og:title" content="HTML5 ★ BOILERPLATE">
  <meta name="og:type" content="website">
  <meta name="og:description" content="The web’s most popular front-end template which helps you build fast, robust, and adaptable web apps or sites.">
  <meta name="og:image" content="https://html5boilerplate.com/icon.png">

  <meta name="theme-color" content="#E08524">
  
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-VX8P3FN86W"></script>
  <script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","G-VX8P3FN86W")</script>
</head>

<body>

  <div class="container">
    <nav class="clearfix">
      <div class="site-logo">
        HTML5
        <span class="star">★</span> Boilerplate
      </div>
      <ul class="site-nav inline-block-list">
        <li>
          <a href="https://github.com/hustlonian/boilerplate">Source code</a>
        </li>
        <li>
          <a href="#">Docs</a>
        </li>
        <li>
          <a href="https://h5bp.org">Other projects</a>
        </li>
      </ul>
    </nav>
    <div class="row">
      <div class="col-12 col-sm-11 col-md-10 col-lg-8 mx-auto">
        <header>
          <h1>The web’s most popular front-end template</h1>

          <p>HTML5 Boilerplate helps you build
            <strong>fast</strong>,
            <strong>robust</strong>, and
            <strong>adaptable</strong> web apps or sites. Kick-start your project with the combined knowledge and effort
            of
            100s of developers, all in one little package.
            </p>

          <div class="cta-option">
            <a class="btn-download" href="https://github.com/h5bp/html5-boilerplate#quick-start">
              <strong>Get Started</strong>
              </a>
            <small>
              <a class="changelog" href="https://github.com/h5bp/html5-boilerplate/blob/main/CHANGELOG.md">
                See the CHANGELOG
              </a>
            </small>
          </div>
        </header>
      </div>
      </div>
  </div>

  <main>

    <section class="section-features">

      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Save time. Create with confidence.</h2>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2">
          <div class="col">

            <img src="https://html5boilerplate.com/file.svg" height="56" width="56" alt=""><br>
            <h3>Starter template</h3>
            <p>A delete-key friendly index.html with recommended meta tags and other goodness.
            </p>
          </div>
          <div class="col">
            <img src="https://html5boilerplate.com/css.svg" height="56" width="56" alt="">
            <h3>Main.css</h3>
            <p>Includes <a href="https://github.com/h5bp/main.css">main.css</a> which provides
              base styles, helpers, media queries, and print styles.
              </p>
          </div>

          <div class="col">
            <img src="https://html5boilerplate.com/server.svg" height="56" width="56" alt="">
            <h3>Server Settings</h3>
            <p>We independently maintain
              <a href="https://github.com/h5bp/server-configs">server configs</a> for multiple platforms to help you deliver
              excellent site performance and security.
            </p>
          </div>
          <div class="col">
            <img src="https://html5boilerplate.com/star.svg" height="56" width="56" alt="">
            <h3>Icons &amp; more</h3>
            <p>Placeholder favicon, touch-device icon and docs covering dozens of extra tips and tricks.</p>
          </div>

        </div>
      </div>
    </section>

    <section class="section-who-uses">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Who uses HTML5 Boilerplate?</h2>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6">
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-australia-post.svg" height="44" alt="Australia Post">
          </div>
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-creative-commons.svg" height="44" alt="Creative Commons">
          </div>
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-itv-news.svg" width="158" alt="ITV News">
          </div>
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-microsoft.svg" height="44" alt="Microsoft">
          </div>
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-nike-sb.svg" height="40" alt="Nike SB">
          </div>
          <div class="col d-flex align-items-center">
            <img src="https://html5boilerplate.com/logo-obama-foundation.svg" height="44" alt="Obama Foundation">
          </div>
        </div>
      </div>
    </section>

  </main>

  <section class="aside">
    <div class="container">
      <ul class="inline-block-list">
        <li>
          <a href="https://github.com/h5bp/html5-boilerplate/issues">
            <img src="https://html5boilerplate.com/github.svg" height="18" width="18" alt="GitHub">Report issues
          </a>
        </li>
        <li>
          <a href="https://stackoverflow.com/questions/tagged/html5boilerplate">
            <img src="https://html5boilerplate.com/stack-overflow.svg" height="18" width="18" alt="Stack Overflow">Help on Stack Overflow
          </a>
        </li>
      </ul>
    </div>
  </section>
  <footer>
    <p>A project from
      <a href="https://github.com/h5bp">H5BP</a> currently maintained by
      <br>
      <a href="https://htmlcssjavascript.com/">Rob Larsen</a> &amp; <a href="https://github.com/coliff">Christian
        Oliff</a>
    </p>

    <p>This project wouldn't have been possible without our past team members:
      <br>
      <a href="https://mathiasbynens.be/">Mathias Bynens</a>,
      <a href="https://github.com/alrra">Cătălin Mariș</a>,
      <a href="https://drublic.de/">Hans Christian Reinl</a>,
      <a href="https://nicolasgallagher.com/">Nicolas Gallagher</a>,
      <a href="https://www.paulirish.com/">Paul Irish</a>, and
      <a href="https://nimbupani.com/">Divya Manian</a>.
    </p>
  </footer>




</body>

</html>
