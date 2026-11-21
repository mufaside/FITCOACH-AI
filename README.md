# FITMATE AI - Your Personal AI Fitness Coach

![FITMATE AI](https://img.shields.io/badge/FITMATE_AI-Fitness_Platform-6C5CE7?style=for-the-badge)
![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=black)

## 📋 Project Overview

FITMATE AI is an AI-powered personal fitness coaching platform that combines computer vision, intelligent workout planning, nutrition guidance, and progress tracking into one comprehensive web application.

### Core Features
- 🤖 **AI-Powered Coaching** - Personalized workout and nutrition plans
- 📷 **Live Exercise Form Correction** - Real-time Computer Vision feedback
- 📊 **Progress Tracking** - Monitor weight, measurements, and performance
- 🍎 **Smart Nutrition** - Personalized meal recommendations
- 💪 **Workout Library** - Comprehensive exercise database
- 📈 **Analytics Dashboard** - Visual progress insights
- 💬 **AI Chat Coach** - 24/7 fitness guidance

## 🏗️ Technology Stack

**Frontend:**
- Laravel Blade Templates
- Tailwind CSS 3.x
- Alpine.js 3.x
- Chart.js 4.x
- Lucide Icons
- Vanilla JavaScript

**Architecture:**
- Component-based Blade structure
- Responsive design (mobile-first)
- Mock data system (no backend required)
- LocalStorage for frontend state
- Browser MediaDevices API for camera

## 📁 Project Structure

```
FinPro_AI/
├── resources/
│   ├── css/
│   │   └── app.css                 # Tailwind CSS + custom styles
│   ├── js/
│   │   ├── app.js                  # Main JavaScript + mock data
│   │   └── bootstrap.js            # Bootstrap file
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php       # Main application layout
│       │   └── guest.blade.php     # Guest layout (landing, onboarding)
│       ├── components/
│       │   ├── sidebar.blade.php   # Navigation sidebar
│       │   └── topbar.blade.php    # Top navigation bar
│       └── pages/
│           ├── landing.blade.php   # Landing page
│           ├── onboarding.blade.php # Fitness assessment wizard
│           ├── dashboard.blade.php  # Main dashboard
│           ├── workout.blade.php    # Workout plans (to be created)
│           ├── live-exercise.blade.php # Camera workout (to be created)
│           ├── nutrition.blade.php  # Nutrition page (to be created)
│           ├── progress.blade.php   # Progress tracking (to be created)
│           ├── history.blade.php    # Workout history (to be created)
│           ├── ai-coach.blade.php   # AI chat interface (to be created)
│           ├── profile.blade.php    # User profile (to be created)
│           └── settings.blade.php   # Settings page (to be created)
├── routes/
│   └── web.php                      # Application routes
├── tailwind.config.js               # Tailwind configuration
├── vite.config.js                   # Vite configuration
├── package.json                     # Node dependencies
└── composer.json                    # PHP dependencies
```

## 🎨 Design System

### Colors
```css
Primary Background:    #0A0E0D (Dark green-black)
Secondary Background:  #141B19 (Card background)
Card Background:       #1A1F1D
Border:               #1F2937

Accent Purple:        #6C5CE7
Accent Purple Light:  #7C6FF7
Accent Green:         #10B981
Accent Blue:          #3B82F6
```

### Typography
- Font Family: Inter (Google Fonts)
- Weights: 300, 400, 500, 600, 700, 800

### Components
- Border Radius Cards: 16px
- Border Radius Buttons: 12px
- Spacing: Consistent 4px grid system

## 🚀 Installation & Setup

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js >= 16.x
- npm or yarn

### Step 1: Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### Step 2: Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Step 3: Build Assets

```bash
# Development mode with hot reload
npm run dev

# Production build
npm run build
```

### Step 4: Start Development Server

```bash
# Start Laravel development server
php artisan serve
```

The application will be available at `http://localhost:8000`

## 📱 Application Routes

| Route | Page | Description |
|-------|------|-------------|
| `/` | Landing Page | Marketing and features showcase |
| `/onboarding` | Fitness Assessment | 8-step wizard for user profiling |
| `/dashboard` | Dashboard | Main app dashboard with overview |
| `/workout` | My Workout | Personalized workout plans |
| `/live-exercise` | Live Exercise | Camera-based workout with CV |
| `/nutrition` | Nutrition | Meal planning and tracking |
| `/progress` | Progress | Body metrics and charts |
| `/history` | History | Workout history and calendar |
| `/ai-coach` | AI Coach | Chat interface with AI |
| `/profile` | Profile | User profile management |
| `/settings` | Settings | Application settings |

## 💻 Key Features Implementation

### 1. Landing Page
- Hero section with CTAs
- Feature showcase grid
- How it works section
- Benefits overview
- FAQ accordion
- Responsive navigation

### 2. Onboarding Wizard (8 Steps)
- Personal information
- Fitness goals selection
- Experience level
- Exercise preferences
- Weekly availability
- Nutrition preferences
- Health & safety assessment
- Summary & confirmation

### 3. Dashboard
- Welcome section with personalized greeting
- Quick stats cards (weight, workouts, streak, hours)
- Today's workout highlight
- Weekly schedule calendar
- AI coach recommendations
- Nutrition overview with progress bars
- Weight progress chart
- Quick action links

### 4. Responsive Design
- **Desktop**: Full sidebar navigation, multi-column layouts
- **Tablet**: Adaptive grid, collapsible sidebar
- **Mobile**: Bottom/drawer navigation, single column, touch-optimized

## 🎯 Mock Data System

All application data is currently mocked in `resources/js/app.js`:

```javascript
window.mockData = {
    user: { ... },
    fitnessStats: { ... },
    todayWorkout: { ... },
    weeklySchedule: [ ... ],
    nutrition: { ... },
    exercises: [ ... ],
    liveExercises: [ ... ]
}
```

User onboarding data is stored in `localStorage` for persistence across sessions.

## 🔧 Customization

### Changing Colors

Edit `tailwind.config.js`:

```javascript
colors: {
    'dark': {
        'primary': '#YOUR_COLOR',
        // ...
    },
    'accent': {
        'purple': '#YOUR_COLOR',
        // ...
    }
}
```

### Adding New Pages

1. Create Blade file in `resources/views/pages/`
2. Add route in `routes/web.php`
3. Update sidebar navigation in `resources/views/components/sidebar.blade.php`

### Modifying Mock Data

Edit `resources/js/app.js` and modify the `window.mockData` object.

## 📊 Charts Integration

Charts are powered by Chart.js. Default configuration:

```javascript
window.chartConfigs = {
    defaultOptions: {
        responsive: true,
        maintainAspectRatio: false,
        // Dark theme colors
    }
}
```

## 📸 Camera Integration

Live exercise uses browser MediaDevices API:

```javascript
window.cameraHandler = {
    async startCamera(videoElement) { ... },
    stopCamera() { ... }
}
```

## 🎭 Icons

Icons are inline SVG from Heroicons (Tailwind UI). For additional icons, visit:
- [Heroicons](https://heroicons.com/)
- [Lucide Icons](https://lucide.dev/)

## 🔮 Future Backend Integration

When ready to connect to a backend:

1. Replace mock data with API calls
2. Implement authentication (Laravel Sanctum/Passport)
3. Connect to AI model endpoints
4. Integrate Computer Vision model (MediaPipe/TensorFlow.js)
5. Add database persistence
6. Implement file uploads for progress photos

## 📝 Development Status

### ✅ Completed
- Project structure and configuration
- Design system implementation
- Landing page (complete)
- Onboarding wizard (complete)
- Main dashboard (complete)
- Layouts and components
- Responsive navigation
- Mock data system
- Chart integration
- Toast notifications
- LocalStorage integration

### 🚧 To Be Created
The following pages need to be implemented following the same design patterns:

- Workout Plan page (`/workout`)
- Live Exercise page (`/live-exercise`)
- Nutrition page (`/nutrition`)
- Progress page (`/progress`)
- History page (`/history`)
- AI Coach page (`/ai-coach`)
- Profile page (`/profile`)
- Settings page (`/settings`)

Each page should follow the established design system and use the mock data structure.

## 🎨 Design Reference

This project is built following the design references provided (LitFit mobile app and Finotive dashboard), featuring:

- Dark theme with subtle backgrounds
- Purple and green accent colors
- Clean card-based layouts
- Modern typography hierarchy
- Smooth transitions and interactions
- Professional SaaS aesthetic

## 📄 License

This is a student project for AI course final project.

## 👥 Credits

- **Design Inspiration**: LitFit App, Finotive Dashboard
- **Icons**: Heroicons
- **Charts**: Chart.js
- **Framework**: Laravel, Tailwind CSS, Alpine.js

## 📞 Support

For questions or issues related to this project, please refer to the course materials or contact your instructor.

---

**Built with ❤️ for FITMATE AI - Empowering fitness journeys through artificial intelligence**
