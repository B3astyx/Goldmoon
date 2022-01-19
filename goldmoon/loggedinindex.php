<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
<script data-ad-client="ca-pub-7570452926324308" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<title>Goldmoon</title>
<link rel="shortcut icon" href="goldmoonlogo.png">
<style>
  @import url('https://fonts.googleapis.com/css?family=Nanum+Gothic:300,400,700,900,1600');

  *,
  *::after,
  *::before {
    box-sizing: border-box;
    transition: all ease-in-out 250ms;
  }

  .logo {
    max-height: 4em;
    margin-left: 2em;
    float: left;
  }


  body {
    margin: 0;
    font-family: 'Nanum Gothic', sans-serif;
    text-align: center;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .container {
    width: 95%;
    max-width: 70em;
    margin: auto;
  }

  .clearfix::after,
  section::after,
  footer::after {
    content: '';
    display: block;
    clear: both;
  }


  [class^=col-] {
    width: 100%;
    margin-top: 1em;
  }

  [class^=col-]:first-child {
    margin-top: 0;
  }

  .col-1 {
    width: 25%;
    float: left;
  }

  @media(min-width: 40rem) {
    [class^=col-] {
      float: left;
      padding: 0 .5em;
      margin-top: 0;
    }

    [class^=col-]:first-child {
      padding-left: 0;
    }

    [class^=col-]:last-child {
      padding-right: 0;
    }

    .col-3 {
      width: 50%;
    }

    .col-1 {
      width: 12.5%;
    }
  }


 
  h1 {
    font-size: 1.7rem;
    font-weight: 300;
    margin-top: 0;
  }

  strong {
    font-weight: 1600;
  }

  .title-hero {
    text-shadow: 3px .1em rgba(0, 0, 0, .5);
  }

  p {
    margin-top: 0;
    line-height: 1.5;
  }

  p:last-of-type {
    margin-bottom: 0;
  }

  .title {
    font-size: 2.5rem;
    margin-bottom: 1.5em;
    font-weight: 400;
    margin-top: 1em;
  }

  .title span {
    font-weight: 300;
    display: block;
    font-size: .9em;
  }

  .title-cta {
    margin: 0 0 .5em;
  }

  .unstyled-list {
    margin: 0;
    padding: 0;
    list-style-type: none;
  }

  @media (min-width: 60rem) {
    p {
      font-size: 1.2rem;
      line-height: 1.6;
    }

    .title {
      font-size: 3.7rem;
    }
  }

 
  .button {
    display: inline-block;
    font-size: 1.5rem;
    text-decoration: none;
    text-transform: uppercase;
    border-width: 2px;
    border-style: solid;
    padding: .5em 1.75em;
  }

  @media (min-width: 60rem) {
    .button {
      font-size: 1.5rem;
    }
  }

  .button-small {
    font-size: .7rem;
    font-weight: 700;
  }

  .button-accent {
    color: #ecf0f1;
    border-color: #ecf0f1;
    box-shadow: .2em .3em rgba(0, 0, 0, .5);

  }

  .button-accent:hover,
  .button-accent:focus {
    background: #e74c3c;
    color: #ecf0f1;
  }

  .button-dark {
    color: #FFF;
    border-color: #232323;
  }

  .button-dark:hover,
  .button-accent:focus {
    background: #FFF;
    color: #e74c3c;
  }



  .head-container {
    width: 95%;
    max-width: 100vw;
    margin: 0;
    position: relative;
  }

  header {
    position: absolute;
    left: 0;
    right: 0;
    margin: 1em;
    background-color: #C6C6C6;
    padding: 1em;
    margin: 0;
  }

  .site-nav {
    position: absolute;
    background-color: rgba(0, 0, 0, .95);
    right: -5%;
    top: 5em;
    height: 0px;
    overflow: hidden;
    z-index: 100;
  }

  .site-nav--open {
    height: auto;
  }

  .site-nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .site-nav li {
    border-bottom: 1px solid #473f3f;
  }

  .site-nav a {
    color: #EBEBD3;
    display: block;
    padding: 1.5em 4em 1.5em 2em;
    text-transform: uppercase;
    text-decoration: none;
  }

  .site-nav a:hover,
  .site-nav a:focus {
    background: rgba(178, 61, 48, .95);
    color: #1e1919;
  }

  .site-nav li:last-child {
    border-bottom: none;
  }

  .site-nav--icon {
    display: inline-block;
    width: 1em;
    font-size: 1.5em;
    margin-right: 1em;
    text-align: right;
    color: rgba(255, 255, 255, 0.4);
  }

  .menu-toggle {
    padding: 1em;
    position: absolute;
    right: -7.5%;
    top: .5em;
    cursor: pointer;
  }

  .hamburger,
  .hamburger::before,
  .hamburger::after {
    content: '';
    display: block;
    background: #EBEBD3;
    height: 3px;
    width: 2.1em;
    border-radius: 3px;
    transition: all ease-in-out 200ms;
  }

  .hamburger::before {
    transform: translateY(-6px);
  }

  .hamburger::after {
    transform: translateY(3px);
  }

  .open .hamburger {
    transform: translateX(200px);
  }

  .open .hamburger::before {
    transform: translateX(-200px) rotate(45deg);
  }

  .open .hamburger::after {
    transform: translateX(-200px) translateY(-3px) rotate(-45deg);
  }



  @media (min-width: 60rem) {

    .menu-toggle {
      display: none;
    }

    .site-nav {
      height: auto;
      position: relative;
      background: transparent;
      float: right;
      top: initial;
      margin-top: 1em;
    }

    .site-nav li {
      display: inline-block;
      border: none;
    }

    .site-nav a {
      padding: .5em;
      margin-left: 1em;
    }

    .site-nav a:hover,
    .site-nav a:focus {
      background: transparent;
    }

    .site-nav--icon {
      display: none;
    }



  }


  .home-hero {
    background-image: url('https://wallpaperaccess.com/full/1409299.jpg');
    background-position: center;
    background-size: cover;
    padding: 10em 0;
    color: #FFF;
  }

  @media (min-width:60rem) {
    .home-hero {
      height: 110vh;
      padding-top: 35vh;

    }
  }


 
  .home-about-textbox {
    background-color: #262424;
    padding: 3.5em;
    width: 100%;
    outline: 1px solid #e74c3c;
    outline-offset: -.5em;
    color: #FFF;
    position: relative;
  }

  .home-about-textbox p {
    margin-left: 7%;
  }

  .home-about-textbox h1 {
    color: #e74c3c;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 3em;
    background: #262424;
    padding: 0 .25em;
  }

  .home-about-img {
    position: absolute;
    z-index: -1;
    max-height: 0;
  }

  @media (min-width: 25rem) {
    h1 {
      font-size: 2rem;
    }

    .home-about-textbox h1 {
      top: 0em;
      padding: 0 1em;
    }

    .one {
      margin-bottom: 1em;
    }

    .two {
      margin-bottom: 1em;
    }

    .home-about-img {
      max-height: 0;
    }

    @media (min-width: 60rem) {
      h1 {
        font-size: 2.5rem;
      }

      .home-about {
        padding-bottom: 0em;
        background-color: #ecf0f1;
        margin-top: 3em;
      }

      .home-about-textbox {
        width: 70%;
        padding: 5em;
        outline-offset: -1.75em;
        text-align: right;
        box-shadow: 0 0 3em 0 rgba(0, 0, 0, .7);
        margin-bottom: 5em;
      }

      .one {
        margin-left: 31.5%;
        top: -4em;
      }

      .two {
        margin-left: -1.5%;
        text-align: left;
        padding-left: 1em;
      }

      .three {
        margin-left: 31.5%;
      }

      .home-about-textbox h1 {
        top: .1em;
        left: 6rem;
        transform: translateX(0);
      }

      .home-about-img {
        position: absolute;
        z-index: 1;
        max-height: 7em;
        margin: 1em;
      }

      .img-one {
        top: 20%;
        left: -32%;
      }

      .img-two {
        bottom: 15%;
        right: -32%;
      }

      .img-three {
        top: 10%;
        left: -32%;
      }
    }


    .portfolio {
      margin: 3em 0 0;
    }

    .port-item {
      margin: 0;
      position: relative;
    }

    .port-item img {
      display: block;
    }

    .port-desc {
      position: absolute;
      z-index: 100;
      bottom: 0em;
      left: 0em;
      right: 0em;
      color: #FFF;
      background: rgba(0, 0, 0, .6);
      padding-bottom: 2em;
    }

    .port-desc p {
      margin: 1em;
    }

    @media(min-width: 37rem) {
      .port-item {
        width: 100%;
        float: left;
      }
    }

    @media(min-width: 60rem) {
      .port-item {
        width: 33.3333334%;
        overflow: hidden;
      }

      .portfolio h1 {
        margin-top: 2em;
      }

      .port-desc {
        transform: translateY(150%);
      }

      .port-item:hover .port-desc {
        transform: translateY(0%);
      }
    }


    .cta {
      background-color: #e74c3c;
      padding: 5em 0;
    }

    .cta span {
      color: #FFF;
    }

    

    footer {
      position: relative;
      background: #262424;
      color: #FFF;
      text-align: left;
      padding: 7em 0;
    }


    .footer-btm {
      position: absolute;
      right: 0;
      left: 0;
      bottom: 0;
      background-color: #000;
    }

    .footer-btm ul {
      margin: 0;
      padding: 1em 2em 3em 4em;
      list-style: none;
    }

    .footer-btm li {
      display: inline-block;
      font-size: 2em;
    }

    .footer-btm a {
      margin-left: 1em;
      text-decoration: none;
      color: #EBEBD3;
    }

    .footer-text {
      font-size: .6rem;
      position: absolute;
      left: 0;
      text-transform: uppercase;
    }


    .parallax-background,
    .parallax-textbox {
      transition: initial;
    }
</style>
</head>
<body>

<header>
	<div class="head-container">
  <img src="goldmoonlogo.png" alt="GoldmoonLogo" class="logo">
	<nav class="site-nav">
		<ul>
			<li><a class="nav-link" href="#"><i class="fa fa-home site-nav--icon"></i>Home</a></li>
			<li><a class="nav-link" href="about.html"target="_blank"><i class="fa fa-info site-nav--icon"></i>About
			</a></li>
			<li><a class="nav-link" href="#"><i class="fa fa-pencil-alt site-nav--icon"></i>Goldmoon Giveaways</a></li>
      <li><a class="nav-link" href="logout.php"><i class="fa fa-dollar-sign site-nav--icon"></i>Log the fuck out</a></li>
      <li><a class="nav-link" href="account.php"><i class="fa fa-envelope site-nav--icon"></i>Account</a></li>
		</ul>
	</nav>

   <div class="menu-toggle">
      <div class="hamburger"></div>
    </div>

  </div>
</header>

<section class="home-hero parallax-background">
	<div class="container">
    <h1 class="title title-hero"> <strong>Goldmoon</strong> <span>The Best Site</span>
		</h1>
		<a href="playerinfo.php" class="button button-accent">Enter</a>
	</div>
</section>

</body>

</html>
