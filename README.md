# 🌊 JobSea - Job Portal

**JobSea** is a full-featured job portal built with Laravel and modern web technologies.
It allows users to create profiles, post job ads, manage applications, and apply for positions with resumes — all in a clean, responsive interface.

---

## 🚀 Features

- **Authentication** – Secure user registration, login, and logout
- **Dashboard** – Personal user dashboard with editable profile, avatar upload, and job management
- **Job Listings** – Users can create, edit, or delete their own job posts
- **Search & Filters** – Search by keyword or location
- **Bookmark Jobs** – Save interesting job offers for later viewing
- **Applications** – Apply for jobs by submitting personal info, message, and uploading a resume
- **Duplicate Prevention** – Prevent users from applying for the same job more than once
- **Applicant Overview** – Job creators can view applicants for their postings
- **Avatar Management** – Default avatar with option to upload a custom image
- **Map Integration** – Display job locations using **Mapbox**
- **Email Notifications** – Send application emails (with attached CVs) to job creators using **Mailtrap**
- **Database Seeding** – Includes demo user and job listings for testing

---

## 🛠️ Tech Stack

| Technology | Description |
|-------------|-------------|
| **Laravel 12** | PHP framework for backend logic and routing |
| **PHP 8.3** | Core language |
| **PostgreSQL** | Relational database |
| **TailwindCSS** | Utility-first CSS framework |
| **Alpine.js** | Lightweight reactive JavaScript framework |
| **Vite** | Frontend asset bundler and compiler |
| **Artisan** | Laravel CLI for commands, migrations, and seeding |
| **Herd** | Local PHP/Laravel development environment |
| **Mapbox** | Interactive map for job locations |
| **Mailtrap** | Email testing service for job application notifications |

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository
```bash
git clone https://github.com/murat-yasar/jobsea.git
cd jobsea
```

### 2️⃣ Install dependencies
```bash
composer install
npm install
```

### 3️⃣ Configure environment
Copy the example file and update your credentials:
```bash
cp .env.example .env
```

Set your own:
- Database credentials (PostgreSQL)
- Mailtrap credentials
- Mapbox access token

### 4️⃣ Generate key & migrate
--seed creates demo user and job data.
```bash
php artisan key:generate
php artisan migrate --seed
```

### 5️⃣ Run the development server
Start PHP server
```bash
php artisan serve
```

Start dev server
```bash
npm run dev
```

Visit: http://localhost:8000



### 🧩 Environment Variables
Example required variables:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=jobsea
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls

MAPBOX_KEY=your_mapbox_token
```



### 🧱 Artisan Commands Used
Example required variables:
```bash
php artisan make:controller
php artisan make:middleware
php artisan make:component
php artisan make:migration
php artisan make:seeder
```


### 📦 Folder Structure Highlights
```bash
app/
 ┣ Http/
   ┣ controllers/       # App logic and CRUD operations (Register, Login, Profile, Application, Bookmark, Dashboard, Job, Home, etc.)
   ┣ Middleware/        # Log requests
 ┣ Models/              # Eloquent models (User, Job, Application)
 ┣ Policies/            # Job policy
 ┣ Viev/Components      # Components (Alert, Banner, Button, File, Header, JobCard, Layout, Logout, NavLink, Select, Text, TextArea, etc.)
 ┣ mail/                # Mail notifications
database/
 ┣ factories/           # Job and User factories
 ┣ migrations/          # Table structure
 ┣ seeders/             # Demo data
public/
 ┣ css/                 # Styles
 ┣ images/              # Header images
 ┣ js/                  # JavaScript
resources/
 ┣ css/                 # Bootstrap styles
 ┣ js/                  # JavaScript components
 ┣ views/               # Blade templates
routes/                 # Create and Manage routes
storage/                # Storage for uploads (avatar, logo, resume, etc)
```