# 🎯 Pixel Positions

Welcome to **Pixel Positions**, a modern Laravel job board page where users can discover and post job opportunities. This project features a sleek dark theme design and demonstrates advanced Laravel concepts including authentication, file uploads, search functionality, and tag-based filtering.

---

## 🚀 Features

- 🔐 User Authentication (Register / Login / Logout)
- 📝 Create and Post Job Listings
- 🏢 Employer Profile Management with Logo Upload
- 🔍 Advanced Job Search Functionality
- 🏷️ Tag-based Job Filtering
- 👤 Role-based Authorization (Employers can post jobs)
- 🎨 Modern Dark Theme UI with Hanken Grotesk Font
- 📱 Responsive Design
- 🖼️ File Upload Support for Employer Logos

---

## 🛠️ Tech Stack

- **Laravel** 10+
- **Tailwind CSS**
- **Blade Components & Templates**
- **MySQL** (or any Laravel-compatible DB)
- **Vite** (asset bundler)
- **PHP 8+**
- **Google Fonts** (Hanken Grotesk)

---

## 📂 Main Pages

| Route            | Description                      |
|------------------|----------------------------------|
| `/`              | Home page with job listings      |
| `/jobs/create`   | Form to post a new job (auth)    |
| `/search`        | Job search functionality         |
| `/tags/{tag}`    | Jobs filtered by specific tag    |
| `/register`      | User registration with employer info |
| `/login`         | User authentication              |

---

## 🔐 Authentication & Authorization

- **Guest users** can browse and search job listings
- **Registered users** can create employer profiles and post jobs
- **File upload** functionality for employer logos
- **Middleware protection** for job creation routes
- **Session management** for user authentication

---

## ⚙️ Setup Instructions

```bash
# 1. Clone the repository
git clone https://github.com/your-username/pixel-positions.git
cd pixel-positions

# 2. Install dependencies
composer install
npm install && npm run dev

# 3. Create environment file
cp .env.example .env

# 4. Set up your database credentials in .env

# 5. Generate application key
php artisan key:generate

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Create storage link (for file uploads)
php artisan storage:link

# 8. Start the server
php artisan serve
```

---

## 🎨 Design Features

- **Dark Theme** - Modern black background with white text
- **Custom Typography** - Hanken Grotesk font family
- **Responsive Layout** - Mobile-first design approach
- **Component-based** - Reusable Blade components
- **Clean Navigation** - Intuitive user interface
- **File Uploads** - Employer logo management

---

## 🔍 Special Features

- **Advanced Search** - Find jobs by keywords and criteria
- **Tag System** - Categorize and filter jobs by tags
- **Employer Profiles** - Companies can showcase their brand
- **File Management** - Secure logo upload and storage
- **SEO Friendly** - Optimized URLs and meta tags

---

## 👨‍💻 Author

This project was developed by Claudia Alfieri for educational purposes, demonstrating advanced Laravel development techniques.

---

## 📝 Contribution 🤝

Contributions are welcome through pull requests. Please ensure code follows Laravel best practices and includes appropriate tests.

