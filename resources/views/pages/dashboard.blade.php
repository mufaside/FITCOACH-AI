@extends('layouts.app')

@section('title', 'Dashboard - FITMATE AI')
@section('page-title', 'Dashboard')

@section('content')
<!-- Welcome Section -->
<div class="mb-8">
    <h1 class="text-3xl font-bold mb-2">Good <span x-data x-text="new Date().getHours() < 12 ? 'Morning' : new Date().getHours() < 18 ? 'Afternoon' : 'Evening'"></span>, <span x-data x-text="(JSON.parse(localStorage.getItem('fitmateUserData') || '{}').name || 'Alex').split(' ')[0]"></span>! 👋</h1>
    <p class="text-gray-400">Ready to become stronger today?</p>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="card">
        <div class="flex items-center justify-between mb-2">
            <span class="text-sm text-gray-400">Current Weight</span>
            <svg class="w-5 h-5 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
            </svg>
        </div>
        <div class="text-2xl font-bold">82 kg</div>
        <div class="text-xs text-gray-500 mt-1">Target: 75 kg</div>
    </div>
    
    <div class="card">
        <div class="flex items-center justify-between mb-2">
            <span class="text-sm text-gray-400">Weekly Workouts</span>
            <svg class="w-5 h-5 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div class="text-2xl font-bold">4 / 5</div>
        <div class="text-xs text-accent-green mt-1">Great progress!</div>
    </div>
    
    <div class="card">
        <div class="flex items-center justify-between mb-2">
            <span class="text-sm text-gray-400">Workout Streak</span>
            <svg class="w-5 h-5 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
            </svg>
        </div>
        <div class="text-2xl font-bold">12 days</div>
        <div class="text-xs text-gray-500 mt-1">Keep it up!</div>
    </div>
    
    <div class="card">
        <div class="flex items-center justify-between mb-2">
            <span class="text-sm text-gray-400">Training Hours</span>
            <svg class="w-5 h-5 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div class="text-2xl font-bold">28.5 hrs</div>
        <div class="text-xs text-gray-500 mt-1">This month</div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Left Column - Today's Workout & Schedule -->
    <div class="lg:col-span-2 space-y-8">
        <!-- Today's Workout -->
        <div class="card">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold">Today's Workout</h2>
                <span class="badge-info">Friday</span>
            </div>
            
            <div class="bg-gradient-to-br from-accent-purple/20 to-accent-green/20 rounded-xl p-6 mb-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Pull Workout</h3>
                        <p class="text-gray-400">Back, Biceps, Rear Delts</p>
                    </div>
                    <span class="badge bg-accent-purple/30 text-accent-purple">Intermediate</span>
                </div>
                
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Exercises</p>
                        <p class="text-xl font-bold">6</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Total Sets</p>
                        <p class="text-xl font-bold">20</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Duration</p>
                        <p class="text-xl font-bold">50 min</p>
                    </div>
                </div>
                
                <a href="/workout" class="btn-primary w-full text-center block">
                    View Workout Plan
                    <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
            
            <!-- Exercise Preview -->
            <div class="space-y-3">
                <h3 class="font-bold text-sm text-gray-400 uppercase">Exercise Preview</h3>
                <div class="flex items-center gap-4 p-3 bg-dark-secondary rounded-lg">
                    <div class="w-12 h-12 bg-accent-purple/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium">Pull-ups</h4>
                        <p class="text-sm text-gray-400">4 sets × 8-10 reps</p>
                    </div>
                    <span class="badge-success">Ready</span>
                </div>
                
                <div class="flex items-center gap-4 p-3 bg-dark-secondary rounded-lg">
                    <div class="w-12 h-12 bg-accent-green/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium">Barbell Rows</h4>
                        <p class="text-sm text-gray-400">4 sets × 10-12 reps</p>
                    </div>
                    <span class="badge-success">Ready</span>
                </div>
                
                <div class="flex items-center gap-4 p-3 bg-dark-secondary rounded-lg">
                    <div class="w-12 h-12 bg-accent-blue/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium">Bicep Curls</h4>
                        <p class="text-sm text-gray-400">3 sets × 12-15 reps</p>
                    </div>
                    <span class="badge-success">Ready</span>
                </div>
            </div>
        </div>
        
        <!-- Weekly Schedule -->
        <div class="card">
            <h2 class="text-xl font-bold mb-6">Weekly Schedule</h2>
            
            <div class="space-y-3">
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg opacity-60">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">MON</p>
                        <p class="text-lg font-bold">19</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Upper Body</h4>
                        <p class="text-sm text-gray-400">Chest, Shoulders, Triceps</p>
                    </div>
                    <svg class="w-6 h-6 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg opacity-60">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">TUE</p>
                        <p class="text-lg font-bold">20</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Lower Body</h4>
                        <p class="text-sm text-gray-400">Legs, Glutes</p>
                    </div>
                    <svg class="w-6 h-6 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg opacity-60">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">WED</p>
                        <p class="text-lg font-bold">21</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Active Recovery</h4>
                        <p class="text-sm text-gray-400">Stretching, Mobility</p>
                    </div>
                    <svg class="w-6 h-6 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg opacity-60">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">THU</p>
                        <p class="text-lg font-bold">22</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Push Workout</h4>
                        <p class="text-sm text-gray-400">Chest, Shoulders, Triceps</p>
                    </div>
                    <svg class="w-6 h-6 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-accent-purple/20 to-accent-green/20 rounded-lg border-2 border-accent-purple">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-accent-purple">TODAY</p>
                        <p class="text-lg font-bold">23</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Pull Workout</h4>
                        <p class="text-sm text-gray-400">Back, Biceps, Rear Delts</p>
                    </div>
                    <span class="badge-warning">Pending</span>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">SAT</p>
                        <p class="text-lg font-bold">24</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Legs & Core</h4>
                        <p class="text-sm text-gray-400">Lower body strength</p>
                    </div>
                    <span class="badge bg-gray-500/20 text-gray-400">Upcoming</span>
                </div>
                
                <div class="flex items-center gap-4 p-4 bg-dark-secondary rounded-lg">
                    <div class="text-center min-w-[60px]">
                        <p class="text-xs text-gray-400">SUN</p>
                        <p class="text-lg font-bold">25</p>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium mb-1">Rest Day</h4>
                        <p class="text-sm text-gray-400">Recovery & relaxation</p>
                    </div>
                    <span class="badge bg-gray-500/20 text-gray-400">Rest</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Column - AI Coach, Nutrition, Progress -->
    <div class="lg:col-span-1 space-y-8">
        <!-- AI Coach Recommendation -->
        <div class="card bg-gradient-to-br from-accent-purple/10 to-accent-blue/10 border-accent-purple">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-accent-purple rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="font-bold">AI Coach Insight</h3>
            </div>
            <p class="text-sm text-gray-300 mb-4">Your training consistency has improved this week. Focus on maintaining proper form during today's pull workout, especially on the rowing movements.</p>
            <a href="/ai-coach" class="btn-secondary w-full text-center block text-sm">
                Ask AI Coach
                <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
        
        <!-- Nutrition Overview -->
        <div class="card">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold">Today's Nutrition</h3>
                <a href="/nutrition" class="text-sm text-accent-purple hover:text-accent-purple-light">View All</a>
            </div>
            
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Calories</span>
                        <span class="font-medium">1,680 / 2,400 kcal</span>
                    </div>
                    <div class="h-2 bg-dark-secondary rounded-full overflow-hidden">
                        <div class="h-full bg-accent-purple rounded-full" style="width: 70%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Protein</span>
                        <span class="font-medium">125 / 180 g</span>
                    </div>
                    <div class="h-2 bg-dark-secondary rounded-full overflow-hidden">
                        <div class="h-full bg-accent-green rounded-full" style="width: 69%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Carbs</span>
                        <span class="font-medium">165 / 240 g</span>
                    </div>
                    <div class="h-2 bg-dark-secondary rounded-full overflow-hidden">
                        <div class="h-full bg-accent-blue rounded-full" style="width: 69%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Fats</span>
                        <span class="font-medium">48 / 65 g</span>
                    </div>
                    <div class="h-2 bg-dark-secondary rounded-full overflow-hidden">
                        <div class="h-full bg-yellow-500 rounded-full" style="width: 74%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Weight Progress Chart -->
        <div class="card">
            <h3 class="font-bold mb-4">Weight Progress</h3>
            <canvas id="weightChart" class="w-full" style="height: 200px;"></canvas>
        </div>
        
        <!-- Quick Actions -->
        <div class="card">
            <h3 class="font-bold mb-4">Quick Actions</h3>
            <div class="space-y-2">
                <a href="/live-exercise" class="flex items-center gap-3 p-3 bg-dark-secondary rounded-lg hover:bg-dark-card transition-colors">
                    <svg class="w-5 h-5 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-sm font-medium">Start Live Exercise</span>
                </a>
                
                <a href="/progress" class="flex items-center gap-3 p-3 bg-dark-secondary rounded-lg hover:bg-dark-card transition-colors">
                    <svg class="w-5 h-5 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span class="text-sm font-medium">View My Progress</span>
                </a>
                
                <a href="/history" class="flex items-center gap-3 p-3 bg-dark-secondary rounded-lg hover:bg-dark-card transition-colors">
                    <svg class="w-5 h-5 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Workout History</span>
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Weight Progress Chart
    const ctx = document.getElementById('weightChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Weight (kg)',
                    data: [85, 83.5, 82.8, 82],
                    borderColor: '#6C5CE7',
                    backgroundColor: 'rgba(108, 92, 231, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#6C5CE7',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                ...window.chartConfigs.defaultOptions,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }
});
</script>
@endpush
@endsection
