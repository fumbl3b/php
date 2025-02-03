<?php
require_once __DIR__ . '/../src/ResumeData.php';
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<?php
$resume = new ResumeData();
?>

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
        echo "<p><strong>{$job['duration']}</strong> - {$job['location']}</p><ul>";
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
        foreach ($education as $school) {
            echo "<li><strong>{$school['school']}</strong> - {$school['degree']} ({$school['year']})</li>";
        }
        ?>
    </ul>
</section>

<section id="contact">
    <h2>Contact</h2>
    <p>Email: <a href="mailto:<?php echo ResumeData::getContactInfo()['email']; ?>"><?php echo ResumeData::getContactInfo()['email']; ?></a></p>
    <p>LinkedIn: <a href="https://<?php echo ResumeData::getContactInfo()['linkedin']; ?>" target="_blank"><?php echo ResumeData::getContactInfo()['linkedin']; ?></a></p>
    <p>Phone: <?php echo ResumeData::getContactInfo()['phone']; ?></p>
</section>

<?php include 'includes/footer.php'; ?>