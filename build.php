<?php
require_once __DIR__ . '/src/ResumeData.php';

// Ensure public directory exists
if (!is_dir('public')) {
    mkdir('public', 0755, true);
}

// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Winkler - Portfolio</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="profile-section">
                <img src="/img/profile.jpg" alt="Harry Winkler" class="profile-image">
                <h1>Harry Winkler</h1>
            </div>
            <nav>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#experience">Experience</a>
                <a href="#education">Education</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="about">
            <h2>About Me</h2>
            <p><?php echo ResumeData::getSummary(); ?></p>
        </section>

        <section id="skills" class="skills">
            <h2>Skills</h2>
            <?php
            $skills = ResumeData::getSkills();
            foreach ($skills as $category => $list) {
                echo "<h3>$category</h3><ul>";
                foreach ($list as $skill) {
                    echo "<li>$skill</li>";
                }
                echo "</ul>";
            }
            ?>
        </section>

        <section id="experience">
            <h2>Experience</h2>
            <?php
            $experience = ResumeData::getExperience();
            foreach ($experience as $job) {
                echo "<div class='experience-card'>";
                echo "<h3>{$job['position']} at {$job['company']}</h3>";
                echo "<p><strong>{$job['duration']}</strong> - {$job['location']}</p>";
                echo "<ul>";
                foreach ($job['description'] as $desc) {
                    echo "<li>$desc</li>";
                }
                echo "</ul></div>";
            }
            ?>
        </section>

        <section id="education" class="education">
            <h2>Education</h2>
            <ul>
            <?php
            $education = ResumeData::getEducation();
            foreach ($education as $edu) {
                echo "<li>{$edu['school']} - {$edu['degree']} ({$edu['year']})</li>";
            }
            ?>
            </ul>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <?php
            $contact = ResumeData::getContactInfo();
            echo "<p>Email: <a href='mailto:{$contact['email']}'>{$contact['email']}</a></p>";
            echo "<p>LinkedIn: <a href='https://{$contact['linkedin']}'>{$contact['linkedin']}</a></p>";
            ?>
        </section>
    </main>
    <script src="/js/main.js"></script>
</body>
</html>
<?php
$html = ob_get_clean();
file_put_contents('public/index.html', $html);

// Copy assets
if (!is_dir('public/css')) mkdir('public/css', 0755, true);
if (!is_dir('public/js')) mkdir('public/js', 0755, true);
if (!is_dir('public/img')) mkdir('public/img', 0755, true);

copy('css/style.css', 'public/css/style.css');
copy('js/main.js', 'public/js/main.js');
copy('img/profile.jpg', 'public/img/profile.jpg');

echo "Build complete!\n";
?>