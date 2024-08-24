# user-management-system
## Overview
This project is a CRUD-based User Management System built with Laravel, designed to manage users efficiently. It includes features for creating, reading, updating, and deleting users, with secure password hashing and dynamic data management through Livewire components.

## Features
- **User Creation, Reading, Updating, and Deletion**: Full CRUD operations allowing administrators to manage user data effectively.
- **User Listing**: Displays a paginated list of users, with search functionality for easy data retrieval.
- **Secure Password Hashing**: User passwords are hashed using Laravel's Hash facade to ensure data security.
- **Livewire Integration**: Real-time updates and dynamic user interface components.
- **Database Seeding**: Pre-populated the database with a set of test users for development and testing purposes.

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/user-management-system.git
    cd user-management-system
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Set up environment variables:**
    - Duplicate `.env.example` and rename it to `.env`.
    - Update your database credentials in the `.env` file.

4. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

5. **Serve the application:**
    ```bash
    php artisan serve
    ```

## Usage
- Access the application via `http://localhost:8000`.
- Navigate to `/users` to view the list of users.
- Use the search bar and pagination to filter and browse through users.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

---

These changes should now correctly reflect the focus on CRUD operations. Let me know if there's anything else you'd like to adjust!
