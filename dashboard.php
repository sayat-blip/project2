<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Brain Academy - Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>
  <header>
    <div class="topbar-left">
      <div class="research-dropdown" id="researchBtn">Research ▼</div>
      <div class="search-box">
        <input type="text" placeholder="Search">
        <span class="search-icon">🔍</span>
      </div>
      <div class="logo-area">
        <img src="lib/images/logo.png" alt="Brain Academy Logo">
        <span>Brain Academy</span>
      </div>
    </div>
    <div class="topbar-right">
      <div class="progress-info">
        <span class="drop-icon"></span>
        <span>0 ▼</span>
      </div>
      <div class="username-dropdown"> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?></div>
    </div>
  </header>

  <div class="subheader">
    Stay focused, achieve success!
  </div>

  <main>
    <aside class="sidebar">

      <div class="course-card">
        <h3>HTML &amp; CSS</h3>
        <p class="topics-count">4 TOPIC</p>
        <img src="lib/images/html1.jpg" alt="HTML & CSS Icon">
      </div>

      <div class="topics-list">
        <div class="topic">1 TOPIC<br><small>Changing text to italic, bold, underlined</small></div>
        <div class="topic">2 TOPIC<br><small>Using the &lt;ol&gt; tag for ordered lists</small></div>
        <div class="topic">3 TOPIC<br><small>Applying a border to an element</small></div>
        <div class="topic">4 TOPIC<br><small>Rounding the corners of an element</small></div>
      </div>

      <div class="final-test-card">
        <h4>Final test</h4>
        <p>Test your knowledge learned at the entrance to the training</p>
        <a href="#">Start test</a>
      </div>
    </aside>

    <section class="content-area">
      <div class="breadcrumb">
        <a href="#">Text modeling</a>
      </div>

      <h1 class="main-course-title">HTML &amp; CSS</h1>
      <div class="experience-points">3000 experience points</div>

      <div class="legend">
        <div>
          <div class="square-purple"></div> Passed
        </div>
        <div>
          <div class="square-white"></div> Not Passed
        </div>
        <div>
          <div class="square-star"></div> Test
        </div>
        <div>
          <div class="square-quiz"></div> Quizz
        </div>
      </div>


      <div class="topic-row topic-selected">
        <h5>1 Topic</h5>
        <div>
          <strong>Progress is here!</strong>
          <div class="progress-boxes">
            <div class="small-box" style="background-color: var(--color-purple);"></div>
            <div class="small-box" style="background-color: var(--color-purple);"></div>
            <div class="small-box"></div>
            <div class="small-box"></div>
            <div class="small-box"></div>
            <div class="small-box puzzle"></div>
            <div class="small-box star"></div>
          </div>
        </div>
      </div>

      <div class="topic-row">
        <h5>2 Topic</h5>
        <div class="progress-boxes">
          <div class="small-box"></div>
          <div class="small-box"></div>
          <div class="small-box puzzle"></div>
          <div class="small-box star"></div>
        </div>
      </div>

      <div class="topic-row">
        <h5>3 Topic</h5>
        <div class="progress-boxes">
          <div class="small-box"></div>
          <div class="small-box"></div>
          <div class="small-box"></div>
          <div class="small-box puzzle"></div>
          <div class="small-box star"></div>
        </div>
      </div>

      <div class="topic-row">
        <h5>4 Topic</h5>
        <div class="progress-boxes">
          <div class="small-box puzzle"></div>
          <div class="small-box star"></div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="final-test-card" style="max-width: 350px;">
        <h4>Final test</h4>
        <p>Test your knowledge learned at the entrance to the training</p>
        <a href="#" style="color: var(--color-highlight); font-weight: 500;">Start test</a>
      </div>
    </section>
  </main>
  <script>
    document.getElementById('researchBtn').addEventListener('click', function () {
      window.location.href = 'research.html';
    });
  </script>
</body>

</html>