# TopUp SMM Game v2

🚀 Modern fullstack application dengan React.js, Laravel, dan OAuth authentication (Google & Facebook).

## 📦 Tech Stack

### Frontend
- **React.js 18** - Modern UI framework
- **React Router v6** - Client-side routing
- **Axios** - HTTP client
- **Bootstrap 5** - UI components
- **React OAuth** - Social authentication

### Backend
- **Laravel 10** - PHP framework
- **MySQL** - Database
- **Laravel Sanctum** - API authentication
- **Laravel Socialite** - OAuth integration
- **Spatie Laravel Permission** - Role & permission

### OAuth Providers
- ✅ Google Login
- ✅ Facebook Login
- ✅ Email/Password (traditional)

## 🏗️ Project Structure

```
topupsmmgame-v2/
├── backend-laravel/     # Laravel API Backend
│   ├── app/
│   ├── database/
│   ├── routes/
│   └── ...
├── frontend-react/      # React Frontend
│   ├── public/
│   ├── src/
│   └── package.json
├── docs/               # Documentation
└── README.md
```

## 🚀 Quick Start

### Backend Setup

```bash
cd backend-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

### Frontend Setup

```bash
cd frontend-react
npm install
npm start
```

## 🔐 OAuth Configuration

### Google OAuth
1. Buat project di [Google Cloud Console](https://console.cloud.google.com)
2. Enable Google+ API
3. Buat OAuth 2.0 credentials
4. Set callback URL: `http://localhost:8000/auth/google/callback`
5. Copy Client ID & Secret ke `.env`

### Facebook OAuth
1. Buat app di [Facebook Developers](https://developers.facebook.com)
2. Add Facebook Login product
3. Set callback URL: `http://localhost:8000/auth/facebook/callback`
4. Copy App ID & Secret ke `.env`

## 📚 Documentation

Lihat folder `docs/` untuk dokumentasi lengkap:
- [Installation Guide](docs/INSTALLATION.md)
- [API Documentation](docs/API.md)
- [OAuth Setup](docs/OAUTH.md)
- [Deployment Guide](docs/DEPLOYMENT.md)

## 🤝 Contributing

Contributions are welcome! Please read our contributing guidelines.

## 📄 License

MIT License

## 👨‍💻 Author

Developed with ❤️ for TopUp SMM Game
