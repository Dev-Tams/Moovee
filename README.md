# Moovee
Moovee is a web application designed to provide efficient and reliable transportation solutions for individuals and businesses looking to relocate their belongings. The application allows users to request quotes, book services, and view their orders.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Routes](#routes)
- [Technologies](#technologies)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- User authentication and authorization
- Request quotes for transportation services
- Book transportation services
- View and manage orders
- Responsive design

## Installation

### Prerequisites

Make sure you have the following installed on your local machine:

- PHP >= 7.4
- Composer
- Node.js & npm
- MySQL or any other database supported by Laravel

### Steps

1. **Clone the repository:**

   ```bash
   git clone https://github.com/dev-tams/moovee.git
   cd moovee
   ```

2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

3. **Install JavaScript dependencies:**

   ```bash
   npm install
   ```

4. **Copy `.env.example` to `.env` and configure your environment variables:**

   ```bash
   cp .env.example .env
   ```

5. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

7. **Run database seeders (if available):**

   ```bash
   php artisan db:seed
   ```

8. **Compile the assets:**

   ```bash
   npm run dev
   ```

## Usage

### Development

To start the development server, run:

```bash
php artisan serve
```

Open your browser and navigate to `http://localhost:8000`.

### Production

For production, make sure to compile the assets for production and use a production-ready server:

```bash
npm run prod
```

## Routes

- `/login`: User login
- `/register`: User registration
- `/services/{id?}`: View services or specific service details
- `/quote`: Request a quote
- `/orders`: View and manage orders

## Technologies

- **Backend:** Laravel
- **Frontend:** Blade, Tailwind CSS
- **JavaScript:** Alpine.js
- **Database:** MySQL
- **Version Control:** Git

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b my-feature-branch`
3. Make your changes and commit them: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin my-feature-branch`
5. Create a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries, please contact:

- **Twitter** [tammyalemu](https://twitter.com/tammyalemu)
- **GitHub:** [your-username](https://github.com/dev-tams)

---
