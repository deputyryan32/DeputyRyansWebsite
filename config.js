// config.js
const config = {
    siteTitle: "DeputyRyan",
    navLogo: "DeputyMods",
    navLinks: [
        { text: "Home", href: "#home" },
        { text: "About", href: "#about" },
        { text: "Skills", href: "#skills" },
        { text: "Projects", href: "#projects" },
        { text: "Contact", href: "#contact" }
    ],
    hero: {
        title: "DeputyRyan",
        typedStrings: [
            "DeputyMods Founder",
            "Development"
        ],
        ctaButton: "Contact Me",
        secondaryButton: "View Projects"
    },
    about: {
        title: "About Me",
        description: "Founder of <span class='highlight'>DeputyMods</span>, pushing the boundaries of development. Specializing in XML, Python and JS.",
        mission: "",
        techStack: ["XML Dev", "JS Dev", "CS Dev", "HTML Dev"]
    },
    skills: {
        title: "Tech Arsenal",
        skillsList: [
            { icon: "fab fa-java", name: "Java" },
            { icon: "fab fa-python", name: "Python" },
            { icon: "fas fa-database", name: "SQL" },
            { icon: "fas fa-code", name: "Skript" },
            { icon: "fab fa-php", name: "PHP" },
            { icon: "fas fa-cubes", name: "Minecraft Development" }
        ]
    },
    projects: {
        title: "My Projects",
        projectsList: [
            {
                title: "DeputyRyansPursuitCallouts",
                description: "Enhance your LSPDFR gameplay with dynamic pursuit callouts for a more immersive law enforcement experience.",
                image: "assets/drpcbeta4.png",
                link: "https://www.lcpdfr.com/downloads/gta5mods/scripts/48930-deputyryanspursuitcallouts/"
            }
            // Add more projects as needed
        ]
    },
    contact: {
        title: "Get in Touch",
        email: {
            icon: "fas fa-envelope",
            title: "Email",
            value: "your.email@example.com"
        },
        discord: {
            icon: "fab fa-discord",
            title: "Discord",
            value: "Join Our Community",
            link: "https://discord.gg/XDp9ESbaXz"
        },
        github: {
            icon: "fab fa-github",
            title: "GitHub",
            value: "Your-GitHub-Username",
            link: "https://github.com/deputyryan32"
        }
    },
    footer: {
        copyright: "© 2024 DeputyRyan - DeputyMods. All rights reserved.",
        socialLinks: [

        ]
    }
};