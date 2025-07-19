# Instituto Howard – School Website

**Live site:** [www.institutohoward.org](http://www.institutohoward.org)

This website was developed for *Instituto Howard*, a private school in Mexico offering high-quality education from kindergarten to high school. The principal’s vision was to present a professional yet friendly online presence that reflects the school’s essence: a serious and modern alternative to the traditional public school system.

## 🧩 Features

- ✨ Professional photo session for teachers and students included in the project
- 📄 Informational structure for all education levels: kindergarten, elementary, middle, and high school
- 📅 Contact form integrated with PHP to manage appointment requests
- 🎨 Consistent styling using CSS variables and modular file structure
- 📂 Organized image folders by screen for easy maintenance

## 💻 Technologies Used

- **HTML5** – Structure and layout
- **CSS3** – Styling and responsive design
- **JavaScript** – Behavior and interaction
- **PHP** – Backend handling of appointment form (contact screen)
- **Composer** – Dependency management for PHP

## 📁 Project Structure

/Howard
│
├── img/
│ ├── contacto/
│ ├── kinder/
│ ├── middle-school/
│ └── high-school/
│
├── php/
│ ├── composer.json
│ ├── composer.lock (ignored)
│ ├── vendor/ (ignored)
│ └── process_form.php
│
├── styles/
│ ├── main.css
│ ├── variables.css ← global variables + fonts
│
├── index.html
├── kinder.html
├── middle-school.html
├── high-school.html
└── contacto.html


## 🛠 Design & Architecture Decisions

- **Modular CSS**: Fonts and variables separated into their own file and imported into each CSS file to improve clarity and reusability.
- **Isolated PHP Folder**: Composer files and vendor dependencies are stored inside a `/php` directory to keep the project organized.
- **Image Organization**: Each screen/page has its own image subfolder inside `/img`, making updates easier and maintaining semantic file structure.

## 📌 About the Client

The client, a passionate school director, wanted to differentiate *Instituto Howard* from outdated educational institutions in Mexico. This site represents their modern educational philosophy with clarity, elegance, and professionalism.

## 👨‍💻 Developer Notes

This project builds on experience gained in previous work (e.g., the EspressoCentral restaurant website), with deliberate refinements in:
- Code organization
- Asset management
- Scalability





