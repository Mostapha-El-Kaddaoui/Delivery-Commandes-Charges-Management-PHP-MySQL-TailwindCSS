# Orders and Charges Management System – Ayat Delivery

this is a professional web-based platform designed to streamline and manage delivery operations, charges, and customer interactions for logistics and delivery businesses. Built with PHP and Tailwind CSS, it offers a modern, responsive dashboard and a suite of tools for efficient operation management.

## Features

- **Dashboard**: Centralized overview of operations, statistics, and quick access to essential tools.
- **Operations Management**: Add, view, and delete delivery operations with detailed tracking.
- **Charge Management**: Record, review, and manage charges and expenses for deliveries.
- **Statistics & Analytics**: Visualize key metrics and trends with integrated charts and statistics.
- **User Authentication**: Secure login system for authorized access.
- **Contact & Support**: Integrated contact forms and WhatsApp support for customer communication.
- **Responsive Design**: Optimized for desktop and mobile devices using Tailwind CSS.
- **Professional UI**: Custom fonts, icons, and a clean layout for a premium user experience.

## Project Structure

```
├── add.php              # Add new delivery operations
├── Appcharge.php        # View and manage charges
├── charge.php           # Add new charges
├── chartops.php         # Chart operations (statistics)
├── conn.php             # Database connection
├── contact.php          # Contact and support page
├── dashboard.php        # Main dashboard
├── dashtools.php        # Dashboard tools/sidebar
├── delete.php           # Delete/view operations
├── footer.php           # Footer component
├── index.php            # Landing page
├── login.php            # User authentication
├── navbar.php           # Main navigation bar
├── navbarback.php       # Mobile navigation bar
├── pronav.php           # Professional sidebar navigation
├── Statistics.php       # Statistics and analytics
├── whatsapp.php         # WhatsApp integration
├── package.json         # Project metadata
├── tailwind.config.js   # Tailwind CSS configuration
└── src/
    └── input.css        # Custom styles
```

## Getting Started

1. **Clone the repository**
   ```sh
   git clone https://github.com/yourusername/ayat-delivery.git
   cd ayat-delivery
   ```

2. **Install dependencies**
   - Tailwind CSS:  
     ```sh
     npm install
     ```
   - Configure your database in `conn.php`.

3. **Build CSS**
   ```sh
   npm run build
   ```

4. **Run the project**
   - Deploy on a PHP server (e.g., XAMPP, Apache, Nginx).
   - Access via `http://localhost/ayat-delivery/index.php`.

## Professional Highlights

- **Secure & Scalable**: Built with best practices for PHP security and scalable architecture.
- **Modern UI/UX**: Uses Tailwind CSS for a sleek, professional look.
- **Extensible**: Modular codebase for easy feature addition and maintenance.
- **Real-Time Insights**: Integrated charts and statistics for data-driven decisions.
- **Customer-Centric**: Multiple contact channels and support integration.

---
Copyright © 2025, All Rights Reserved For ELKADDI-Solutions