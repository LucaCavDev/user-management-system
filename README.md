# User Management System

This is a user management system built with PHP and Laravel. The application allows administrators to manage user accounts, including viewing, and editing user details.

## Features

-   **User Registration:** Public registration for new users.
-   **Admin Registration:** Users registering with an `@admin.com` email are automatically granted administrator privileges.
-   **User Login/Logout:** Standard authentication system.
-   **Admin Dashboard:** A protected area for administrators to:
    -   View a paginated list of all registered users.
    -   View the details of a specific user.
    -   Edit a non-administrator user's email address.
    -   **Security Feature:** Administrators are prevented from editing the accounts of other administrators.

## Technical Stack

-   **Backend:** PHP 8.2+, Laravel 12
-   **Frontend:** Blade, Tailwind CSS, Vite
-   **Database:** MySQL
-   **Development Environment:** Docker via Laravel Sail

---

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

-   [Docker Desktop](https://www.docker.com/products/docker-desktop/)
-   [Composer](https://getcomposer.org/)

---

## 🚀 Setup and Installation

Follow these steps to get the application up and running on your local machine.

### 1. Clone the Repository

First, clone this repository to your local machine using Git.

```bash
git clone https://github.com/LucaCavDev/user-management-system.git
```

### 2. Navigate to the Project Directory

```bash
cd user-management-system
```

### 3. Install PHP Dependencies

Install the required PHP packages using Composer.

```bash
composer install
```

### 4. Set Up Environment Variables

Copy the example environment file. The default settings are pre-configured for Laravel Sail and do not require any changes.

```bash
cp .env.example .env
```

### 5. Start the Docker Containers

Launch the application's Docker containers using Laravel Sail. This command will start the web server, MySQL database, and other services in the background (`-d` flag).

The first time you run this, Docker will need to download the required images, which may take several minutes.

```bash
./vendor/bin/sail up -d
```

### 6. Generate Application Key

Generate the unique application key required by Laravel.

```bash
./vendor/bin/sail php artisan key:generate
```

### 7. Run Database Migrations

After starting the containers, wait about 20-30 seconds for the database service to become fully available. Then, create the necessary tables by running the migrations.

```bash
./vendor/bin/sail php artisan migrate
```

### 8. Install Frontend Dependencies

Install the required JavaScript packages using NPM (Node Package Manager).

```bash
./vendor/bin/sail npm install
```

### 9. Compile Frontend Assets

Compile the frontend assets (CSS, JS) using Vite.

```bash
./vendor/bin/sail npm run dev
```

> **Note:** This command will remain active, watching for file changes. You can open a new terminal window for subsequent commands.

---

## 🎉 You're All Set!

The application is now running and accessible at: **[http://localhost](http://localhost)**

The mail server for testing password resets (if needed) is available at: **[http://localhost:8025](http://localhost:8025)**

## How to Use the Application

### 1. Register as a Normal User

-   Navigate to `http://localhost/register`.
-   Register with any email address that **does not** end in `@admin.com` (e.g., `test@example.com`).
-   You will be logged in and redirected to the standard user dashboard. You will not see any admin-related links.

### 2. Register as an Administrator

-   Log out from your normal user account.
-   Navigate to `http://localhost/register`.
-   Register a new user with an email address ending in **`@admin.com`** (e.g., `admin@admin.com`).
-   The system will automatically grant this user administrator privileges.

### 3. Access the Admin Panel

-   Once logged in as an administrator, you will see a **"Users"** link in the main navigation bar.
-   Clicking this link will take you to the user management dashboard, where you can view and edit other users.

---

### Useful Sail Commands

-   **Stop the application containers:**
    ```bash
    ./vendor/bin/sail down
    ```
-   **Run any Artisan command:**
    ```bash
    ./vendor/bin/sail php artisan <command-name>
    ```
-   **Access the application's shell (bash):**
    ```bash
    ./vendor/bin/sail shell
    ```