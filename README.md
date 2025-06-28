# 🎬 Kinopoisk Lite

A simple **Kinopoisk lite** — a movie database web app where users can browse, search, and manage movie data. Built with **PHP**, **PDO**, and runs inside **Lando** containers for easy local development. Includes **PHPMyAdmin** for convenient database management.

---

## ✨ Features

- Browse and search movies  
- Add categories for organizing movies  
- Leave reviews and ratings  
- Secure database access via **PDO**
- Easily extensible MVC-style project structure
- Local development with **Lando** + **PHPMyAdmin**

---

## ⚙️ Tech Stack

- **PHP**
- **PDO** for DB connection
- **Lando** for containerized local dev
- **PHPMyAdmin** for DB GUI
- **Composer**

---

## 📂 Project Structure

```
kinopoisk/
├── .lando.yml # Lando config
├── composer.json # Composer dependencies
├── config/ # DB and app configs
├── kernel/ # Bootstrapping logic
├── public/ # Public entry (index.php)
├── src/ # Controllers, models
├── storage/ # Uploads, logs
├── views/ # HTML/PHP templates
├── vendor/ # Composer vendor
```


---

## 🚀 Getting Started

### ✅ 1️⃣ Requirements

- [Lando](https://lando.dev/)
- [Composer](https://getcomposer.org/)

---

### ✅ 2️⃣ Clone & Install

```bash
git clone <your-repo-url>
cd kinopoisk
composer install
```


### ✅ 3️⃣ Start Lando
```
lando start
```
App: http://kinopoisk.lndo.site

PHPMyAdmin: http://pma.kinopoisk.lndo.site

### ✅ 4️⃣ Import Database
Open PHPMyAdmin (/pma)

Create database (e.g. kinopoisk_db)

Creat the provided tables

Ensure config/ DB settings match your DB name, user, and password.

## 🗃️ Database Structure

The project uses **4 core tables**:

- **`categories`**
  - Stores movie categories (for example: genre names).
  - Columns: `id`, `name`, `created_at`, `updated_at`.

- **`movies`**
  - Stores movie information such as title, description, preview image, and links to a category.
  - Columns: `id`, `category_id` (foreign key), `name`, `description`, `preview`, `created_at`, `updated_at`.

- **`reviews`**
  - Stores user reviews for movies.
  - Linked to both `users` and `movies` tables via foreign keys.
  - Columns: `id`, `user_id`, `movie_id`, `review`, `rating`, `created_at`, `updated_at`.

- **`users`**
  - Stores registered user information.
  - Contains `is_admin` flag to distinguish admin users.
  - Columns: `id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`.

**🔗 Relationships**

- `movies` → `categories` : One category can have many movies.
- `reviews` → `movies` and `users` : Each review is linked to one movie and one user.

---

## 🛠️ Useful Commands

| Command | Description |
|---------|--------------|
| `lando start` | Start all Lando services (appserver, database, PHPMyAdmin). |
| `lando stop` | Stop all running services. |
| `lando rebuild` | Rebuild containers (use if config changes). |
| `composer install` | Install PHP dependencies defined in `composer.json`. |


## 📷 Screenshots
![image](https://github.com/user-attachments/assets/aac2169b-3df9-4500-859d-81b04c6f1329)
![image](https://github.com/user-attachments/assets/8a872001-1cae-4e3f-b8c6-a522eeeac116)
![image](https://github.com/user-attachments/assets/3f212dcb-7c8d-45f3-8240-ef27df6de0e0)
![image](https://github.com/user-attachments/assets/4bf09d79-3409-4236-aeb8-09dee66d3dfd)
![image](https://github.com/user-attachments/assets/0e3bad8a-d8b6-4748-a09e-1f72ea2be7ba)
![image](https://github.com/user-attachments/assets/77fd06f8-4557-426a-8da9-350471feb68a)
![image](https://github.com/user-attachments/assets/2c224132-fb9f-4bc0-8e22-ba9e96900326)


