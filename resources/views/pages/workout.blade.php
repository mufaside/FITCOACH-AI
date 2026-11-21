@extends('layouts.app')

@section('title', 'My Workout - FITMATE AI')
@section('page-title', 'My Workout')

@section('content')
<div x-data="workoutPage()">
    <!-- Program Overview -->
    <div class="card mb-8">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-6">
            <div>
                <h2 class="text-2xl font-bold mb-2">Your Personalized Program</h2>
                <p class="text-gray-400">4-Week Fat Loss & Muscle Building</p>
            </div>
            <button @click="showAdjustModal = true" class="btn-secondary">
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Adjust Plan
            </button>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="card bg-dark-secondary">
                <p class="text-sm text-gray-400 mb-1">Goal</p>
                <p class="font-medium">Fat Loss + Muscle</p>
            </div>
            <div class="card bg-dark-secondary">
                <p class="text-sm text-gray-400 mb-1">Level</p>
                <p class="font-medium">Intermediate</p>
            </div>
            <div class="card bg-dark-secondary">
                <p class="text-sm text-gray-400 mb-1">Frequency</p>
                <p class="font-medium">5 days/week</p>
            </div>
            <div class="card bg-dark-secondary">
                <p class="text-sm text-gray-400 mb-1">Duration</p>
                <p class="font-medium">45-60 min</p>
            </div>
            <div class="card bg-dark-secondary">
                <p class="text-sm text-gray-400 mb-1">Location</p>
                <p class="font-medium">Gym</p>
            </div>
        </div>
    </div>
    
    <!-- Weekly Schedule Tabs -->
    <div class="mb-6">
        <div class="flex items-center gap-2 overflow-x-auto pb-2">
            <template x-for="(day, index) in weekDays" :key="index">
                <button @click="selectedDay = index" :class="selectedDay === index ? 'bg-accent-purple text-white' : 'bg-dark-secondary text-gray-400 hover:text-white'" class="px-6 py-3 rounded-btn font-medium whitespace-nowrap transition-colors flex-shrink-0">
                    <span x-text="day.name"></span>
                    <span x-show="day.workout" class="block text-xs mt-1" x-text="day.workout"></span>
                    <span x-show="!day.workout" class="block text-xs mt-1">Rest</span>
                </button>
            </template>
        </div>
    </div>
    
    <!-- Exercise List -->
    <div class="space-y-6" x-show="weekDays[selectedDay].workout">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold" x-text="weekDays[selectedDay].workout + ' Workout'"></h3>
            <span class="badge-info" x-text="exercises.length + ' exercises'"></span>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <template x-for="(exercise, index) in exercises" :key="index">
                <div class="card hover:border-accent-purple transition-all cursor-pointer" @click="openExerciseDetail(exercise)">
                    <div class="flex gap-4">
                        <!-- Exercise Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br from-accent-purple/20 to-accent-green/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        
                        <!-- Exercise Info -->
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold mb-1 truncate" x-text="exercise.name"></h4>
                            <p class="text-sm text-gray-400 mb-2" x-text="exercise.muscle"></p>
                            
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-accent-purple/20 text-accent-purple text-xs" x-text="exercise.sets + ' sets'"></span>
                                <span class="badge bg-accent-green/20 text-accent-green text-xs" x-text="exercise.reps + ' reps'"></span>
                                <span class="badge bg-accent-blue/20 text-accent-blue text-xs" x-text="exercise.rest + 's rest'"></span>
                            </div>
                            
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span x-text="exercise.duration + ' min'"></span>
                                <span class="mx-2">•</span>
                                <span x-text="exercise.equipment"></span>
                            </div>
                        </div>
                        
                        <!-- Action Icons -->
                        <div class="flex flex-col gap-2">
                            <button class="w-8 h-8 bg-dark-secondary hover:bg-accent-purple/20 rounded-lg flex items-center justify-center transition-colors" title="View details">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                            <button class="w-8 h-8 bg-dark-secondary hover:bg-accent-green/20 rounded-lg flex items-center justify-center transition-colors" title="Mark complete">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- Start Workout Button -->
        <div class="flex justify-center pt-4">
            <a href="/live-exercise" class="btn-primary text-lg px-12 py-4">
                <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Start Live Workout
            </a>
        </div>
    </div>
    
    <!-- Rest Day Message -->
    <div class="card text-center py-12" x-show="!weekDays[selectedDay].workout">
        <svg class="w-16 h-16 text-accent-green mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
        </svg>
        <h3 class="text-2xl font-bold mb-2">Rest Day</h3>
        <p class="text-gray-400 max-w-md mx-auto mb-6">Your body needs time to recover and grow stronger. Consider light stretching or a walk.</p>
        <div class="flex justify-center gap-3">
            <a href="/nutrition" class="btn-secondary">View Nutrition</a>
            <a href="/progress" class="btn-secondary">Check Progress</a>
        </div>
    </div>
    
    <!-- Exercise Detail Modal -->
    <div x-show="showExerciseDetail" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50 p-4" @click.self="showExerciseDetail = false">
        <div class="card max-w-2xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
            <div class="flex items-start justify-between mb-6">
                <div>
                    <h3 class="text-2xl font-bold mb-2" x-text="selectedExercise.name"></h3>
                    <p class="text-gray-400" x-text="'Target: ' + selectedExercise.muscle"></p>
                </div>
                <button @click="showExerciseDetail = false" class="text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Exercise Preview -->
            <div class="aspect-video bg-dark-secondary rounded-xl flex items-center justify-center mb-6">
                <svg class="w-24 h-24 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-4 gap-3 mb-6">
                <div class="card bg-dark-secondary text-center">
                    <p class="text-2xl font-bold text-accent-purple" x-text="selectedExercise.sets"></p>
                    <p class="text-xs text-gray-400">Sets</p>
                </div>
                <div class="card bg-dark-secondary text-center">
                    <p class="text-2xl font-bold text-accent-green" x-text="selectedExercise.reps"></p>
                    <p class="text-xs text-gray-400">Reps</p>
                </div>
                <div class="card bg-dark-secondary text-center">
                    <p class="text-2xl font-bold text-accent-blue" x-text="selectedExercise.rest + 's'"></p>
                    <p class="text-xs text-gray-400">Rest</p>
                </div>
                <div class="card bg-dark-secondary text-center">
                    <p class="text-2xl font-bold text-yellow-500" x-text="selectedExercise.duration + 'm'"></p>
                    <p class="text-xs text-gray-400">Duration</p>
                </div>
            </div>
            
            <!-- Instructions -->
            <div class="space-y-4 mb-6">
                <div>
                    <h4 class="font-bold mb-2">How to Perform</h4>
                    <ol class="list-decimal list-inside space-y-2 text-sm text-gray-400">
                        <li>Position yourself correctly and maintain proper posture</li>
                        <li>Begin the movement with controlled motion</li>
                        <li>Focus on the target muscle group throughout</li>
                        <li>Complete the full range of motion</li>
                        <li>Return to starting position with control</li>
                    </ol>
                </div>
                
                <div>
                    <h4 class="font-bold mb-2">Common Mistakes</h4>
                    <ul class="list-disc list-inside space-y-1 text-sm text-gray-400">
                        <li>Using momentum instead of muscle control</li>
                        <li>Incorrect posture or alignment</li>
                        <li>Not completing full range of motion</li>
                        <li>Holding breath during movement</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-2">Equipment Needed</h4>
                    <span class="badge-info" x-text="selectedExercise.equipment"></span>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="flex gap-3">
                <a href="/live-exercise" class="btn-primary flex-1 text-center">
                    Start Exercise
                </a>
                <button @click="showExerciseDetail = false" class="btn-secondary">
                    Close
                </button>
            </div>
        </div>
    </div>
    
    <!-- Adjust Plan Modal -->
    <div x-show="showAdjustModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50 p-4" @click.self="showAdjustModal = false">
        <div class="card max-w-lg w-full" @click.stop>
            <h3 class="text-2xl font-bold mb-6">Adjust Your Plan</h3>
            
            <div class="space-y-4 mb-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Training Days Per Week</label>
                    <select class="input-field w-full">
                        <option>3 days</option>
                        <option>4 days</option>
                        <option selected>5 days</option>
                        <option>6 days</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Workout Duration</label>
                    <select class="input-field w-full">
                        <option>30 minutes</option>
                        <option>45 minutes</option>
                        <option selected>60 minutes</option>
                        <option>90 minutes</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Training Intensity</label>
                    <select class="input-field w-full">
                        <option>Beginner</option>
                        <option selected>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Focus Area</label>
                    <select class="input-field w-full">
                        <option>Full Body</option>
                        <option selected>Upper/Lower Split</option>
                        <option>Push/Pull/Legs</option>
                        <option>Body Part Split</option>
                    </select>
                </div>
            </div>
            
            <div class="flex gap-3">
                <button @click="adjustPlan()" class="btn-primary flex-1">
                    Save Changes
                </button>
                <button @click="showAdjustModal = false" class="btn-secondary">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function workoutPage() {
    return {
        selectedDay: 4, // Friday
        showExerciseDetail: false,
        showAdjustModal: false,
        selectedExercise: {},
        
        weekDays: [
            { name: 'Monday', workout: 'Upper Body' },
            { name: 'Tuesday', workout: 'Lower Body' },
            { name: 'Wednesday', workout: 'Active Recovery' },
            { name: 'Thursday', workout: 'Push' },
            { name: 'Friday', workout: 'Pull' },
            { name: 'Saturday', workout: 'Legs' },
            { name: 'Sunday', workout: '' }
        ],
        
        exercises: [
            {
                name: 'Pull-ups',
                muscle: 'Back, Lats',
                sets: 4,
                reps: '8-10',
                rest: 90,
                duration: 8,
                equipment: 'Pull-up Bar',
                difficulty: 'Intermediate'
            },
            {
                name: 'Barbell Rows',
                muscle: 'Back, Mid-back',
                sets: 4,
                reps: '10-12',
                rest: 90,
                duration: 10,
                equipment: 'Barbell',
                difficulty: 'Intermediate'
            },
            {
                name: 'Lat Pulldowns',
                muscle: 'Lats, Upper Back',
                sets: 3,
                reps: '12-15',
                rest: 60,
                duration: 8,
                equipment: 'Cable Machine',
                difficulty: 'Beginner'
            },
            {
                name: 'Dumbbell Bicep Curls',
                muscle: 'Biceps',
                sets: 3,
                reps: '12-15',
                rest: 60,
                duration: 7,
                equipment: 'Dumbbells',
                difficulty: 'Beginner'
            },
            {
                name: 'Hammer Curls',
                muscle: 'Biceps, Forearms',
                sets: 3,
                reps: '12-15',
                rest: 60,
                duration: 7,
                equipment: 'Dumbbells',
                difficulty: 'Beginner'
            },
            {
                name: 'Face Pulls',
                muscle: 'Rear Delts, Upper Back',
                sets: 3,
                reps: '15-20',
                rest: 45,
                duration: 6,
                equipment: 'Cable Machine',
                difficulty: 'Beginner'
            }
        ],
        
        openExerciseDetail(exercise) {
            this.selectedExercise = exercise;
            this.showExerciseDetail = true;
        },
        
        adjustPlan() {
            this.showAdjustModal = false;
            showToast('Your workout plan has been updated!', 'success');
        }
    }
}
</script>
@endpush
@endsection
