<?php
require_once __DIR__ . '/ResumeData.php';
include __DIR__ . '/../public/includes/header.php';
?>
<script>
    function openModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'flex';
    // Force reflow
    modal.offsetHeight;
    modal.classList.add('show');
}

function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('nav');
    
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('imageModal');
    const closeBtn = document.querySelector('.close-modal');

    function closeModal() {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    closeBtn.onclick = closeModal;
    
    window.onclick = (e) => {
        if (e.target === modal) {
            closeModal();
        }
    }
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // Close menu when clicking a link
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', () => {
            document.querySelector('.hamburger').classList.remove('active');
            document.querySelector('nav').classList.remove('active');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        const nav = document.querySelector('nav');
        const hamburger = document.querySelector('.hamburger');
        if (nav.classList.contains('active') && 
            !nav.contains(e.target) && 
            !hamburger.contains(e.target)) {
            nav.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
});
</script>
<style>
:root {
  --primary: #2d3436;
  --secondary: #0984e3;
  --bg: #f5f6fa;
  --text: #2d3436;
  --shadow: rgba(0, 0, 0, 0.1);
}

html {
  scroll-behavior: smooth;
  scroll-padding-top: 140px; /* Increased to account for larger header */
}

body {
  font-family: 'Inter', -apple-system, sans-serif;
  line-height: 1.6;
  color: var(--text);
  background: var(--bg);
  margin: 0;
  padding: 0;
  position: relative;
}

section {
  background: white;
  border-radius: 12px;
  padding: 2rem;
  margin-bottom: 2rem;
  box-shadow: 0 4px 6px var(--shadow);
  transition: transform 0.2s;
  scroll-margin-top: 140px; /* Match scroll-padding-top */
}

section:hover {
  transform: translateY(-2px);
}

h2 {
  color: var(--secondary);
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
  position: relative;
}

h2:after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 40px;
  height: 3px;
  background: var(--secondary);
  border-radius: 2px;
}

h3 {
  color: var(--primary);
  margin-top: 1.5rem;
}

ul {
  list-style: none;
  padding: 0;
}

.skills ul {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1rem;
}

.skills li {
  background: var(--bg);
  padding: 0.5rem 1rem;
  border-radius: 6px;
  transition: background 0.2s;
}

.skills li:hover {
  background: var(--secondary);
  color: white;
}

.experience-card {
  border-left: 3px solid var(--secondary);
  padding-left: 1rem;
  margin-bottom: 2rem;
}

.education li {
  margin-bottom: 1rem;
  padding: 1rem;
  background: var(--bg);
  border-radius: 6px;
}

header {
  position: sticky;
  top: 0;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(8px);
  box-shadow: 0 2px 10px var(--shadow);
  z-index: 1000;
  padding: 1rem 2rem;
  height: auto;
}

h1 {
  color: var(--primary);
  font-size: 2rem;
  margin: 0;
  font-weight: 600;
}

nav {
  margin-top: 1rem;
  transition: transform 0.3s ease-in-out;
}

nav a {
  color: var(--text);
  text-decoration: none;
  margin-right: 1.5rem;
  font-weight: 500;
  position: relative;
  transition: color 0.2s;
}

nav a:hover {
  color: var(--secondary);
}

nav a::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: -4px;
  left: 0;
  background-color: var(--secondary);
  transition: width 0.2s;
}

nav a:hover::after {
  width: 100%;
}

.header-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
    padding: 0;
}

.profile-section {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-shrink: 0;
}

.profile-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--secondary);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.profile-image:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(9, 132, 227, 0.3);
}

.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    opacity: 0;
    transition: opacity 0.3s ease;
    justify-content: center;
    align-items: center;
}

.modal.show {
    opacity: 1;
    display: flex;
}

.modal-content {
    max-width: min(80vw, 1200px);
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    transform: scale(0.8);
    transition: transform 0.3s ease;
}

.modal.show .modal-content {
    transform: scale(1);
}

.close-modal {
    position: fixed;
    top: 20px;
    right: 20px;
    color: white;
    font-size: 40px;
    cursor: pointer;
    opacity: 0.8;
    transition: opacity 0.2s;
}

.close-modal:hover {
    opacity: 1;
}

main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

@keyframes zoom {
    from {transform: translateY(-50%) scale(0)}
    to {transform: translateY(-50%) scale(1)}
}

.hamburger {
    display: none;
    flex-direction: column;
    justify-content: space-around;
    width: 30px;
    height: 25px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    z-index: 1100;
}

.hamburger span {
    width: 30px;
    height: 3px;
    background: var(--primary);
    border-radius: 10px;
    transition: all 0.3s linear;
}

.hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(8px, 8px);
}

.hamburger.active span:nth-child(2) {
    opacity: 0;
}

.hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(8px, -8px);
}

@media (max-width: 768px) {
    .header-content {
        position: relative;
        flex-direction: column;
        text-align: center;
        gap: 1rem;
        padding: 0.5rem 0;
    }
    
    .profile-section {
        flex-direction: column;
        gap: 1rem;
    }
    
    nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .profile-image {
        width: 50px;
        height: 50px;
    }

    html {
        scroll-padding-top: 180px; /* Increased for mobile header */
    }
    
    section {
        scroll-margin-top: 180px;
    }

    header {
        padding: 1.5rem 1rem;
    }
    
    .header-content {
        padding: 0;
    }
    
    main {
        padding: 1rem;
    }

    .hamburger {
        display: flex;
    }

    nav {
        position: fixed;
        top: 0;
        right: 0;
        height: 100vh;
        width: 250px;
        background: white;
        padding: 80px 20px;
        flex-direction: column;
        box-shadow: -2px 0 5px var(--shadow);
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
        z-index: 1000;
    }

    nav.active {
        transform: translateX(0);
    }

    nav a {
        margin: 1rem 0;
        font-size: 1.2rem;
    }

    h1 {
        font-size: 1.5rem;
    }
}
</style>
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
</section>x

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

<?php include __DIR__ . '/../public/includes/footer.php'; ?>
