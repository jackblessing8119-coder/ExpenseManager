# ExpenseManager

ExpenseManager is a Laravel-based web application for tracking expenses, incomes, categories, and generating monthly financial reports. It supports multiple currencies, including Naira (₦).

## Features
- User authentication and roles
- Expense and income tracking
- Category management for expenses and incomes
- Multi-currency support
- Monthly financial reports
- Admin dashboard

## Requirements
- PHP >= 7.0
- Composer
- MySQL or compatible database
- Node.js & npm (for frontend assets)
- XAMPP or similar local server (recommended for Windows)

## Installation

1. **Clone the repository**
	```sh
	git clone https://github.com/LaravelDaily/ExpenseManager.git
	cd ExpenseManager
	```

2. **Install PHP dependencies**
	```sh
	composer install
	```

3. **Install Node.js dependencies**
	```sh
	npm install
	npm run dev
	```

4. **Set up environment file**
	```sh
	cp .env.example .env
	```
	Edit `.env` and set your database credentials.

5. **Generate application key**
	```sh
	php artisan key:generate
	```

6. **Run migrations and seeders**
	```sh
	php artisan migrate --seed
	```

7. **Start the development server**
	```sh
	php artisan serve
	```
	Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

## Default Admin Login
- **Email:** admin@admin.com
- **Password:** admin (or check the seeded password hash in `UserSeed.php`)

## Notes
- You can change the default currency for users in the database or via the admin panel.
- For production, set up proper environment variables and use `npm run production` for optimized assets.

## License
MIT