<header class="bg-dark-secondary border-b border-dark-border px-4 lg:px-8 py-4">
    <div class="flex items-center justify-between">
        <!-- Mobile Menu Toggle -->
        <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        
        <!-- Page Title - Desktop -->
        <div class="hidden lg:block">
            <h2 class="text-2xl font-bold">@yield('page-title', 'Dashboard')</h2>
        </div>
        
        <!-- Logo - Mobile -->
        <div class="lg:hidden">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-accent-purple to-accent-purple-light rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="font-bold text-lg">FITMATE AI</span>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="flex items-center gap-4">
            <!-- Notifications -->
            <button class="relative text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="absolute top-0 right-0 w-2 h-2 bg-accent-green rounded-full"></span>
            </button>
            
            <!-- User Menu - Desktop -->
            <div class="hidden lg:flex items-center gap-2">
                <img src="https://ui-avatars.com/api/?name=Alex+Morgan&background=6C5CE7&color=fff&size=80" alt="User" class="w-9 h-9 rounded-full border-2 border-accent-purple">
            </div>
        </div>
    </div>
</header>
