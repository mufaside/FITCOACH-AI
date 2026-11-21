# FITMATE AI - Quick Start Guide

## 🎯 What You Need to Know

This is a **FRONTEND-ONLY** Laravel Blade application. No database or backend is required to run it.

## ⚡ Quick Setup (5 Minutes)

### If You DON'T Have Composer Installed

Since Composer is not available on your system, you can run this project in a simpler way:

#### Option 1: Using PHP Built-in Server (Simplest)

1. **Navigate to project folder:**
   ```bash
   cd "C:\Users\INDONESIA\OneDrive - Bina Nusantara (1)\Semester 3\Artificial Intelligence\FinPro_AI"
   ```

2. **Install Node dependencies:**
   ```bash
   npm install
   ```

3. **Build frontend assets (keep this running):**
   ```bash
   npm run dev
   ```

4. **In a NEW terminal, start PHP server:**
   ```bash
   php -S localhost:8000 -t public
   ```

5. **Open browser:**
   ```
   http://localhost:8000
   ```

#### Option 2: Install Composer First

If you want the full Laravel experience:

1. **Download Composer:**
   - Go to https://getcomposer.org/download/
   - Download and install Composer for Windows

2. **Then run:**
   ```bash
   composer install
   npm install
   npm run dev
   # In new terminal:
   php artisan serve
   ```

## 📱 Testing the Application

### 1. Landing Page
- Navigate to `http://localhost:8000`
- You should see the FITMATE AI landing page
- Test navigation and CTAs

### 2. Onboarding
- Click "Get Started" or go to `http://localhost:8000/onboarding`
- Complete the 8-step fitness assessment
- Fill in the forms with mock data
- Click "Generate My Fitness Plan" at the end

### 3. Dashboard
- After onboarding, you'll be redirected to dashboard
- Or go directly to `http://localhost:8000/dashboard`
- Explore the interface:
  - Check quick stats
  - View today's workout
  - Review weekly schedule
  - Check nutrition overview

### 4. Mobile Testing
- Open browser DevTools (F12)
- Click device icon (mobile view)
- Test different screen sizes:
  - iPhone SE (375px)
  - iPhone 12 Pro (390px)
  - iPad (768px)
  - Desktop (1440px)

## 🎨 Key Pages Available

| Page | URL | Status |
|------|-----|--------|
| Landing | `/` | ✅ Complete |
| Onboarding | `/onboarding` | ✅ Complete |
| Dashboard | `/dashboard` | ✅ Complete |
| Workout | `/workout` | ⏳ To be created |
| Live Exercise | `/live-exercise` | ⏳ To be created |
| Nutrition | `/nutrition` | ⏳ To be created |
| Progress | `/progress` | ⏳ To be created |
| History | `/history` | ⏳ To be created |
| AI Coach | `/ai-coach` | ⏳ To be created |
| Profile | `/profile` | ⏳ To be created |
| Settings | `/settings` | ⏳ To be created |

## 🔧 Common Issues & Solutions

### Issue: "npm command not found"
**Solution:** Install Node.js from https://nodejs.org/

### Issue: "php command not found"
**Solution:** Install PHP or use XAMPP/WAMP/Laragon

### Issue: "Vite manifest not found"
**Solution:** Run `npm run dev` in a separate terminal

### Issue: Page shows without styling
**Solution:** Make sure `npm run dev` is running

### Issue: Changes not reflecting
**Solution:** 
- Hard refresh browser (Ctrl+F5)
- Clear browser cache
- Restart npm run dev

## 📋 Development Workflow

### Making Changes

1. **Edit Blade Templates:**
   - Files in `resources/views/`
   - Changes reflect immediately (with `npm run dev`)

2. **Edit Styles:**
   - Modify `resources/css/app.css`
   - Use Tailwind classes in Blade files
   - Vite will auto-rebuild

3. **Edit JavaScript:**
   - Modify `resources/js/app.js`
   - Add mock data
   - Vite will auto-rebuild

4. **Add New Page:**
   ```bash
   # 1. Create Blade file
   resources/views/pages/newpage.blade.php
   
   # 2. Add route in routes/web.php
   Route::get('/newpage', function () {
       return view('pages.newpage');
   });
   
   # 3. Add to sidebar navigation
   resources/views/components/sidebar.blade.php
   ```

## 🎯 Next Steps: Creating Remaining Pages

To complete the project, you need to create these pages following the same pattern as dashboard:

### 1. Workout Page (`/workout`)
Should show:
- Current workout program overview
- Weekly exercise schedule
- Exercise cards with details
- Start workout button
- Program adjustment option

### 2. Live Exercise Page (`/live-exercise`)
Should have:
- Camera video feed
- Exercise selection dropdown
- Rep counter display
- Form feedback panel
- Start/stop controls
- Workout summary modal

### 3. Nutrition Page (`/nutrition`)
Should display:
- Daily calorie overview
- Macronutrient breakdown
- Meal planner (breakfast, lunch, dinner)
- Recommended foods
- AI meal suggestions

### 4. Progress Page (`/progress`)
Should show:
- Body metrics dashboard
- Weight progress chart
- Body measurements chart
- Progress photo gallery
- AI progress analysis

### 5. History Page (`/history`)
Should have:
- Activity calendar
- Workout history list with filters
- Completed session cards
- Workout statistics
- Detail modal for each session

### 6. AI Coach Page (`/ai-coach`)
Should feature:
- Chat interface
- AI coach profile
- Message history
- Quick prompt suggestions
- User context panel

### 7. Profile Page (`/profile`)
Should include:
- Profile photo upload
- Personal information form
- Fitness goals display
- Training preferences
- Edit functionality

### 8. Settings Page (`/settings`)
Should have:
- Account settings
- Notification preferences
- Language selection
- Theme options (if any)
- Privacy settings
- Camera permissions

## 💡 Tips for Development

1. **Use existing components:**
   - Copy card styles from dashboard
   - Reuse color classes (accent-purple, accent-green, etc.)
   - Follow the same spacing patterns

2. **Mock data:**
   - Add to `window.mockData` in app.js
   - Use localStorage for user data
   - Keep data consistent across pages

3. **Responsive design:**
   - Test mobile first
   - Use Tailwind responsive prefixes (sm:, md:, lg:)
   - Hide/show elements appropriately

4. **Icons:**
   - Copy SVG icons from existing pages
   - Use Heroicons library patterns
   - Keep icon sizes consistent (w-5 h-5 for most)

## 📚 Resources

- **Tailwind CSS Docs:** https://tailwindcss.com/docs
- **Alpine.js Docs:** https://alpinejs.dev/
- **Chart.js Docs:** https://www.chartjs.org/docs/
- **Heroicons:** https://heroicons.com/
- **Laravel Blade Docs:** https://laravel.com/docs/blade

## 🎓 Project Presentation Tips

When presenting this project:

1. **Start with landing page** - Show the marketing/branding
2. **Walk through onboarding** - Demonstrate personalization
3. **Show dashboard** - Highlight AI features visually
4. **Demo live exercise** - Enable camera (most impressive feature)
5. **Show charts** - Display progress tracking
6. **Open AI coach** - Demonstrate chat functionality
7. **Test responsive** - Switch to mobile view
8. **Explain architecture** - Frontend-only, ready for backend integration

## ⚠️ Important Notes

1. **This is frontend only** - No actual AI processing happens
2. **Camera access** - Browser will ask permission
3. **Data persistence** - Uses localStorage, not database
4. **Mock AI responses** - Predefined messages, not real AI
5. **No authentication** - For demo purposes only

## 🆘 Need Help?

If you encounter issues:

1. Check if npm run dev is running
2. Check browser console for errors (F12)
3. Verify you're on the correct URL
4. Clear browser cache
5. Restart development server

---

**Ready to build the future of fitness? Let's go! 💪🚀**
