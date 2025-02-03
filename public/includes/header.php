<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Winkler - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>
    <!-- Move modal here, right after body opening -->
    <div id="imageModal" class="modal">
        <span class="close-modal">&times;</span>
        <img src="/img/profile.jpg" alt="Harry Winkler" class="modal-content">
    </div>
    
    <header>
        <div class="header-content">
            <div class="profile-section">
                <img src="/img/profile.jpg" alt="Harry Winkler" class="profile-image" onclick="openModal()">
                <h1>Harry Winkler</h1>
            </div>
            <button class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#experience">Experience</a>
                <a href="#education">Education</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>
    <main>