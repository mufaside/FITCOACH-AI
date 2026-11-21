import './bootstrap';
import Alpine from 'alpinejs';
import Chart from 'chart.js/auto';

window.Alpine = Alpine;
window.Chart = Chart;

Alpine.start();

// Mock Data Store
window.mockData = {
    user: {
        name: 'Alex Morgan',
        age: 28,
        gender: 'Male',
        height: 178,
        currentWeight: 82,
        targetWeight: 75,
        goal: 'Fat Loss & Muscle Building',
        level: 'Intermediate',
        avatar: 'https://ui-avatars.com/api/?name=Alex+Morgan&background=6C5CE7&color=fff&size=200'
    },
    
    fitnessStats: {
        weeklyWorkouts: 4,
        workoutStreak: 12,
        totalHours: 28.5,
        caloriesBurned: 3240
    },
    
    todayWorkout: {
        name: 'Upper Body Strength',
        muscleGroup: 'Chest, Shoulders, Triceps',
        exercises: 6,
        sets: 18,
        duration: 45,
        difficulty: 'Intermediate'
    },
    
    weeklySchedule: [
        { day: 'Monday', workout: 'Upper Body', status: 'completed' },
        { day: 'Tuesday', workout: 'Lower Body', status: 'completed' },
        { day: 'Wednesday', workout: 'Active Recovery', status: 'completed' },
        { day: 'Thursday', workout: 'Push Workout', status: 'completed' },
        { day: 'Friday', workout: 'Pull Workout', status: 'today' },
        { day: 'Saturday', workout: 'Legs & Core', status: 'upcoming' },
        { day: 'Sunday', workout: 'Rest Day', status: 'rest' }
    ],
    
    nutrition: {
        dailyCalories: 2400,
        consumed: 1680,
        protein: { target: 180, consumed: 125 },
        carbs: { target: 240, consumed: 165 },
        fats: { target: 65, consumed: 48 }
    },
    
    exercises: [
        {
            id: 1,
            name: 'Barbell Bench Press',
            muscle: 'Chest',
            sets: 4,
            reps: '8-10',
            rest: 90,
            difficulty: 'Intermediate',
            equipment: 'Barbell',
            duration: 8
        },
        {
            id: 2,
            name: 'Dumbbell Shoulder Press',
            muscle: 'Shoulders',
            sets: 3,
            reps: '10-12',
            rest: 60,
            difficulty: 'Intermediate',
            equipment: 'Dumbbells',
            duration: 6
        },
        {
            id: 3,
            name: 'Cable Tricep Pushdown',
            muscle: 'Triceps',
            sets: 3,
            reps: '12-15',
            rest: 45,
            difficulty: 'Beginner',
            equipment: 'Cable Machine',
            duration: 5
        },
        {
            id: 4,
            name: 'Incline Dumbbell Press',
            muscle: 'Upper Chest',
            sets: 3,
            reps: '10-12',
            rest: 60,
            difficulty: 'Intermediate',
            equipment: 'Dumbbells',
            duration: 6
        }
    ],
    
    liveExercises: [
        { id: 1, name: 'Squat', category: 'Lower Body' },
        { id: 2, name: 'Push-up', category: 'Upper Body' },
        { id: 3, name: 'Plank', category: 'Core' },
        { id: 4, name: 'Bicep Curl', category: 'Arms' },
        { id: 5, name: 'Lunges', category: 'Lower Body' }
    ]
};

// Chart Configurations
window.chartConfigs = {
    defaultOptions: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                grid: {
                    color: '#1F2937',
                    borderColor: '#1F2937'
                },
                ticks: {
                    color: '#9CA3AF'
                }
            },
            y: {
                grid: {
                    color: '#1F2937',
                    borderColor: '#1F2937'
                },
                ticks: {
                    color: '#9CA3AF'
                }
            }
        }
    }
};

// Toast Notification
window.showToast = function(message, type = 'success') {
    const toast = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-accent-green' : type === 'error' ? 'bg-red-500' : 'bg-accent-blue';
    
    toast.className = `fixed top-4 right-4 ${bgColor} text-white px-6 py-3 rounded-btn shadow-lg z-50 animate-slide-in`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
};

// Camera Handler
window.cameraHandler = {
    stream: null,
    
    async startCamera(videoElement) {
        try {
            this.stream = await navigator.mediaDevices.getUserMedia({ 
                video: { facingMode: 'user' } 
            });
            videoElement.srcObject = this.stream;
            return true;
        } catch (error) {
            console.error('Camera access error:', error);
            showToast('Unable to access camera. Please check permissions.', 'error');
            return false;
        }
    },
    
    stopCamera() {
        if (this.stream) {
            this.stream.getTracks().forEach(track => track.stop());
            this.stream = null;
        }
    }
};
