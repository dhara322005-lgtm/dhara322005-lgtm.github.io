<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
<style>
body { font-family: Arial; background: #fff0f5; margin:0; padding:0; text-align:center; }
.header { background: #ff69b4; color: white; padding: 30px; }
.card { background: white; margin: 20px auto; padding: 20px; width: 80%; border-radius: 15px; box-shadow: 0 2px 10px #ccc; }
.skill { display:inline-block; background:#ffe4e1; padding:8px 15px; margin:5px; border-radius:20px; }
</style>
</head>
<body>
<div class="header">
<h1> Hi, I am Dharani V</h1>
<p>Aspiring Full Stack Developer</p>
</div>

<div class="card">
<h2>About Me</h2>
<p>Passionate Full Stack Developer enthusiast skilled in HTML, CSS and MySQL. Currently expanding my skills in JavaScript.</p>
</div>
<div class="card">
<h2>My MySQL Project</h2>
<p><b>Student Management System</b></p>
<p>Database: portfolio_db | Table: students</p>
<p>Features: Add, View, Delete students using MySQL</p>
<p style="background:#fff0f5; padding:10px; border-radius:10px;">
SQL Query: SELECT * FROM students WHERE city='Salem';
</p>
</div>

<div class="card">
<h2>Contact Me (MySQL Working!)</h2>
<form action="save.php" method="POST">
<input type="text" name="name" placeholder="Your Name" required style="padding:10px; width:80%; margin:5px;"><br>
<input type="email" name="email" placeholder="Email" required style="padding:10px; width:80%; margin:5px;"><br>
<textarea name="message" placeholder="Message" style="padding:10px; width:80%; margin:5px;"></textarea><br>
<button type="submit" style="background:#ff69b4; color:white; padding:10px 20px; border:none; border-radius:20px;">Send Message</button>
</form>
<br>
<a href="view.php">View All Messages (MySQL Output)</a>
</div>