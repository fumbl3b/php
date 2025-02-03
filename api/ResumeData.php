<?php
class ResumeData {
    public static function getSummary() {
        return "Proficient Software Engineer versed in designing, developing, and maintaining both mobile and web applications. 
        Extensive experience deploying and maintaining cloud services. Skilled in Java, Kotlin, Javascript ES6, 
        Typescript and Python. Experience with Test-Driven-Development, ADA Accessible UI implementation, 
        continuous integration tools, and agile software development methodologies.";
    }

    public static function getSkills() {
        return [
            "Programming Languages" => ["Kotlin", "Java", "XML", "Javascript (ES6)", "TypeScript", "Python", "HTML5", "CSS", "Bash", "C#", "Swift"],
            "Frameworks" => ["Android SDK", ".NET Core", "React", "Angular", "Node", "Vue.js", "jQuery", "Next", "Tailwind", "Express", "Django"],
            "Database/Cloud" => ["Oracle", "PostgreSQL", "SQLite", "MongoDB", "GraphQL", "Redis", "AWS", "Kubernetes", "Heroku", "Vercel", "Docker"],
            "APIs and Libraries" => ["RESTful APIs", "Picasso", "Glide", "Dagger2", "Hilt", "RxJava", "Lodash", "Kafka", "Hibernate"],
            "Project Tools" => ["Git", "Github", "Teams", "Bitbucket", "SonarQube", "Crashlytics", "JIRA", "Trello", "Slack", "Confluence", "InVision", "Figma", "Jenkins", "Postman"],
            "IDE" => ["Android Studio", "Intellij IDEA", "Eclipse", "VS Code", "vim"]
        ];
    }

    public static function getExperience() {
        return [
            [
                "company" => "JP Morgan Chase & Co",
                "location" => "Wilmington, DE",
                "position" => "Software Engineer II",
                "duration" => "Aug 2023 - June 2024",
                "description" => [
                    "Worked closely with a small team maintaining 20 internal services for managing structured data.",
                    "Maintained and enhanced legacy Java applications, ensuring robust performance.",
                    "Developed and implemented new features in Spring Boot and React.",
                    "Conducted unit and integration testing to ensure software reliability.",
                    "Optimized product quality through code reviews and refactoring."
                ]
            ],
            [
                "company" => "Wells Fargo",
                "location" => "San Francisco, CA / Remote",
                "position" => "Android Developer",
                "duration" => "Dec 2021 - Jul 2023",
                "description" => [
                    "Contributed to the full redevelopment of the Android application.",
                    "Monitored performance and crash reports for a live app with 10M+ downloads.",
                    "Implemented deep linking for user-friendly navigation.",
                    "Collaborated with design and business teams to launch new features."
                ]
            ],
            // Add more experiences as needed
        ];
    }

    public static function getEducation() {
        return [
            ["school" => "Temple University", "degree" => "Computer Science", "year" => "Present"],
            ["school" => "Thinkful", "degree" => "Full Stack Software Engineering Certificate", "year" => "Sept 2020 - Jan 2021"],
            ["school" => "Washington University in St. Louis", "degree" => "Art History", "year" => "2009 - 2010"],
            ["school" => "Lower Merion High School", "degree" => "", "year" => "2009"]
        ];
    }

    public static function getContactInfo() {
        return [
            "email" => "harry@fumblebee.site",
            "linkedin" => "linkedin.com/in/harry-winkler",
            "phone" => "+1-484-620-6919"
        ];
    }
}
?>