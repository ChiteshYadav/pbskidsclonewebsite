# PBS Kids Clone Website

A modern clone of the PBS Kids website built with PHP and CodeIgniter framework, featuring a responsive design and interactive elements.

## 🚀 Features

- Responsive design that works on all devices
- Interactive game and video sections
- Modern UI with neon green accents
- Sliding content carousel
- Game grid with hover effects
- Dynamic content loading
- Parent section integration
- Video player integration

## 🛠️ Technologies Used

- PHP 7.4+
- CodeIgniter 3
- HTML5
- CSS3
- JavaScript
- MySQL
- Bootstrap (for responsive design)

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Composer (for dependency management)

## 🔧 Installation

### Windows Setup

1. Install XAMPP:
   - Download XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Choose the version with PHP 7.4 or higher
   - Run the installer and select:
     - Apache
     - MySQL
     - PHP
     - phpMyAdmin

2. Install Composer:
   - Download Composer installer from [https://getcomposer.org/download/](https://getcomposer.org/download/)
   - Run the installer and follow the prompts
   - Verify installation by opening Command Prompt and typing:
     ```bash
     composer --version
     ```

3. Clone the repository:
   ```bash
   git clone https://github.com/AkKnight08/pbskidsclonewebsite.git
   cd pbskidsclonewebsite
   ```

4. Install dependencies:
   ```bash
   composer install
   ```

5. Configure your database:
   - Open XAMPP Control Panel and start Apache and MySQL
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `pbskidsclone`
   - Import the database schema from `database/schema.sql`
   - Update database configuration in `application/config/database.php`:
     ```php
     'hostname' => 'localhost',
     'username' => 'root',
     'password' => '', // default XAMPP password is empty
     'database' => 'pbskidsclone',
     ```

6. Configure your web server:
   - Copy the project to `C:\xampp\htdocs\pbskidsclonewebsite`
   - Ensure the `application` directory is not publicly accessible
   - Set proper permissions for the `uploads` directory:
     - Right-click the `uploads` folder
     - Properties → Security → Edit
     - Add → Everyone → Full Control

7. Update base URL:
   - Open `application/config/config.php`
   - Set your base URL: `$config['base_url'] = 'http://localhost/pbskidsclonewebsite/';`

8. Start the application:
   - Open XAMPP Control Panel
   - Start Apache and MySQL services
   - Open your browser and navigate to: `http://localhost/pbskidsclonewebsite`

### Linux/Mac Setup

1. Clone the repository:
```bash
git clone https://github.com/AkKnight08/pbskidsclonewebsite.git
cd pbskidsclonewebsite
```

2. Install dependencies:
```bash
composer install
```

3. Configure your database:
   - Create a new MySQL database
   - Import the database schema from `database/schema.sql`
   - Update database configuration in `application/config/database.php`

4. Configure your web server:
   - Point your web server to the project's root directory
   - Ensure the `application` directory is not publicly accessible
   - Set proper permissions for the `uploads` directory

5. Update base URL:
   - Open `application/config/config.php`
   - Set your base URL: `$config['base_url'] = 'http://your-domain.com/';`

## 🎮 Usage

1. Home Page:
   - Features a sliding content carousel
   - Game grid with hover effects
   - Video section
   - Parent section

2. Games Section:
   - Grid layout of available games
   - Game categories
   - Search functionality
   - Filter options

3. Videos Section:
   - Video player integration
   - Video categories
   - Search functionality
   - Related videos

## 📁 Project Structure

```
pbskidsclonewebsite/
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── helpers/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── system/
├── uploads/
└── index.php
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- Your Name - Initial work

## 🙏 Acknowledgments

- PBS Kids for inspiration
- CodeIgniter framework
- All contributors who have helped with the project 