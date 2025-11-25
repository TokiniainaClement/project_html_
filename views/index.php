<?php
$title = "Student Management System";
require "template/header.php";

?>

<style>
  body {
    background-color: white;
  }

  .content-logo {
    width: 100%;
  }

  .title {
    font-style: italic;
    font-family: "Times New Roman", Times, serif;
    color: blue;
    background-color: white;
  }
</style>

<header id="header" style="position: sticky; top: 0; z-index: 1; background-color: white;">
  <div class="container">
    <a href="#" class="text-dark">
      <h3 style="margin: 15px">SMS Student Management System</h3>
    </a>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="z-index: 1;">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#dashboard">Tableau de bord</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#settings">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#settings">Connexion</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main class="container">
  <section class="hero">
    <div>
      <h3
        class="my-3"
        style="text-align: center !important; color: black !important">
        <span class="kicker">Student Management Dashboard</span>
      </h3>
      <h1 class="title" id="title" style="z-index: 0;">
        <marquee direction="left" behavior="alternate">Manage Your Educational Institution</marquee>
      </h1>
      <p class="lead">
        Efficiently manage students, courses, and grades with our
        comprehensive management system.
      </p>
      <div class="cta my-4">
        <a href="#" class="btn btn-primary">Get Started</a>
        <a href="#" class="btn btn-ghost">Learn More</a>
      </div>
    </div>
  </section>

  <section>
    <div class="row my-4">
      <div class="col">
        <h3 class="card-title">Total Students</h3>
        <p class="card-desc">150 Active Students</p>
      </div>
      <div class="col">
        <h3 class="card-title">Active Courses</h3>
        <p class="card-desc">12 Courses Running</p>
      </div>
      <div class="col">
        <h3 class="card-title">Upcoming Events</h3>
        <p class="card-desc">5 Events This Week</p>
      </div>
    </div>
  </section>

  <section>
    <h2 class="mb-4">Recent Students</h2>
    <table class="table table-borderless table-bordered table-hover" id="dataTable">

    </table>
  </section>
</main>

<footer class="footer bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="m-0 mb-1">Contact</h4>
        <p class="m-0">Email: admin@school.com</p>
        <p class="m-0">Phone: (123) 456-7890</p>
      </div>
      <div class="col">
        <h4 class="m-0 mb-1">Quick Links</h4>
        <a href="#help">Help Center</a>
        <a href="#support">Support</a>
        <a href="#privacy">Privacy Policy</a>
      </div>
      <div class="col">
        <p class="m-0">&copy; 2025 INSI</p>
        <p class="m-0">All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<?php
$js = "index.js";
require "template/footer.php";

?>