@extends('layouts.guest')

@section('title', 'Fitness Assessment - FITMATE AI')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4" x-data="onboardingWizard()">
    <div class="w-full max-w-3xl">
        <!-- Progress Bar -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-gray-400">Step <span x-text="currentStep"></span> of 8</span>
                <span class="text-sm text-gray-400"><span x-text="Math.round((currentStep / 8) * 100)"></span>% Complete</span>
            </div>
            <div class="h-2 bg-dark-secondary rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-accent-purple to-accent-green transition-all duration-300" :style="`width: ${(currentStep / 8) * 100}%`"></div>
            </div>
        </div>
        
        <!-- Step 1: Personal Information -->
        <div x-show="currentStep === 1" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Let's Get to Know You</h2>
                <p class="text-gray-400">Tell us about yourself to create your personalized fitness plan</p>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Full Name</label>
                    <input type="text" x-model="formData.name" class="input-field w-full" placeholder="Enter your name">
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Age</label>
                        <input type="number" x-model="formData.age" class="input-field w-full" placeholder="25">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Gender</label>
                        <select x-model="formData.gender" class="input-field w-full">
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Height (cm)</label>
                        <input type="number" x-model="formData.height" class="input-field w-full" placeholder="175">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Current Weight (kg)</label>
                        <input type="number" x-model="formData.weight" class="input-field w-full" placeholder="75">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Step 2: Fitness Goals -->
        <div x-show="currentStep === 2" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">What Are Your Goals?</h2>
                <p class="text-gray-400">Select all that apply</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div @click="toggleGoal('muscle_building')" :class="formData.goals.includes('muscle_building') ? 'border-accent-purple bg-accent-purple/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-purple transition-all">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div>
                            <h3 class="font-bold">Muscle Building</h3>
                            <p class="text-sm text-gray-400">Gain muscle mass</p>
                        </div>
                    </div>
                </div>
                
                <div @click="toggleGoal('fat_loss')" :class="formData.goals.includes('fat_loss') ? 'border-accent-green bg-accent-green/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-green transition-all">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <div>
                            <h3 class="font-bold">Fat Loss</h3>
                            <p class="text-sm text-gray-400">Reduce body fat</p>
                        </div>
                    </div>
                </div>
                
                <div @click="toggleGoal('strength')" :class="formData.goals.includes('strength') ? 'border-accent-blue bg-accent-blue/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-blue transition-all">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <div>
                            <h3 class="font-bold">Strength Training</h3>
                            <p class="text-sm text-gray-400">Get stronger</p>
                        </div>
                    </div>
                </div>
                
                <div @click="toggleGoal('general_fitness')" :class="formData.goals.includes('general_fitness') ? 'border-accent-purple bg-accent-purple/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-purple transition-all">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <div>
                            <h3 class="font-bold">General Fitness</h3>
                            <p class="text-sm text-gray-400">Stay healthy</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6">
                <label class="block text-sm font-medium mb-2">Target Weight (kg)</label>
                <input type="number" x-model="formData.targetWeight" class="input-field w-full" placeholder="70">
            </div>
        </div>
        
        <!-- Step 3: Experience Level -->
        <div x-show="currentStep === 3" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Your Experience Level</h2>
                <p class="text-gray-400">This helps us adjust the difficulty</p>
            </div>
            
            <div class="space-y-4">
                <div @click="formData.level = 'beginner'" :class="formData.level === 'beginner' ? 'border-accent-green bg-accent-green/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-green transition-all">
                    <h3 class="font-bold text-lg mb-2">Beginner</h3>
                    <p class="text-gray-400">New to fitness or returning after a long break</p>
                </div>
                
                <div @click="formData.level = 'intermediate'" :class="formData.level === 'intermediate' ? 'border-accent-purple bg-accent-purple/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-purple transition-all">
                    <h3 class="font-bold text-lg mb-2">Intermediate</h3>
                    <p class="text-gray-400">Regular training for 6-12 months</p>
                </div>
                
                <div @click="formData.level = 'advanced'" :class="formData.level === 'advanced' ? 'border-accent-blue bg-accent-blue/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-blue transition-all">
                    <h3 class="font-bold text-lg mb-2">Advanced</h3>
                    <p class="text-gray-400">Consistent training for over a year</p>
                </div>
            </div>
        </div>
        
        <!-- Step 4: Exercise Preferences -->
        <div x-show="currentStep === 4" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Where Will You Train?</h2>
                <p class="text-gray-400">Select your preferred workout location</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <div @click="togglePreference('gym')" :class="formData.preferences.includes('gym') ? 'border-accent-purple bg-accent-purple/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-purple transition-all text-center">
                    <svg class="w-12 h-12 text-accent-purple mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h3 class="font-bold">Gym Workout</h3>
                </div>
                
                <div @click="togglePreference('home')" :class="formData.preferences.includes('home') ? 'border-accent-green bg-accent-green/10' : 'border-dark-border'" class="card cursor-pointer hover:border-accent-green transition-all text-center">
                    <svg class="w-12 h-12 text-accent-green mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <h3 class="font-bold">Home Workout</h3>
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Available Equipment</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" x-model="formData.equipment" value="dumbbells" class="rounded bg-dark-secondary border-dark-border text-accent-purple focus:ring-accent-purple">
                        <span class="text-sm">Dumbbells</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" x-model="formData.equipment" value="barbell" class="rounded bg-dark-secondary border-dark-border text-accent-purple focus:ring-accent-purple">
                        <span class="text-sm">Barbell</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" x-model="formData.equipment" value="resistance_bands" class="rounded bg-dark-secondary border-dark-border text-accent-purple focus:ring-accent-purple">
                        <span class="text-sm">Resistance Bands</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" x-model="formData.equipment" value="none" class="rounded bg-dark-secondary border-dark-border text-accent-purple focus:ring-accent-purple">
                        <span class="text-sm">No Equipment</span>
                    </label>
                </div>
            </div>
        </div>
        
        <!-- Step 5: Availability -->
        <div x-show="currentStep === 5" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Your Schedule</h2>
                <p class="text-gray-400">How often can you train?</p>
            </div>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-3">Workout Days Per Week</label>
                    <div class="grid grid-cols-4 gap-2">
                        <template x-for="day in [3, 4, 5, 6]" :key="day">
                            <button @click="formData.daysPerWeek = day" :class="formData.daysPerWeek === day ? 'bg-accent-purple' : 'bg-dark-secondary'" class="py-3 rounded-btn font-medium hover:bg-accent-purple transition-colors">
                                <span x-text="day"></span>
                            </button>
                        </template>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-3">Workout Duration</label>
                    <select x-model="formData.duration" class="input-field w-full">
                        <option value="30">30 minutes</option>
                        <option value="45">45 minutes</option>
                        <option value="60">60 minutes</option>
                        <option value="90">90 minutes</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-3">Preferred Training Time</label>
                    <select x-model="formData.trainingTime" class="input-field w-full">
                        <option value="morning">Morning (6AM - 10AM)</option>
                        <option value="afternoon">Afternoon (12PM - 4PM)</option>
                        <option value="evening">Evening (5PM - 9PM)</option>
                        <option value="flexible">Flexible</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Step 6: Nutrition Preferences -->
        <div x-show="currentStep === 6" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-blue/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Nutrition Preferences</h2>
                <p class="text-gray-400">Help us personalize your meal plan</p>
            </div>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-3">Dietary Preference</label>
                    <select x-model="formData.diet" class="input-field w-full">
                        <option value="regular">Regular (No restrictions)</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="vegan">Vegan</option>
                        <option value="pescatarian">Pescatarian</option>
                        <option value="keto">Keto</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Food Allergies (Optional)</label>
                    <input type="text" x-model="formData.allergies" class="input-field w-full" placeholder="e.g., peanuts, dairy">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-3">Meals Per Day</label>
                    <div class="grid grid-cols-3 gap-2">
                        <template x-for="meals in [3, 4, 5]" :key="meals">
                            <button @click="formData.mealsPerDay = meals" :class="formData.mealsPerDay === meals ? 'bg-accent-blue' : 'bg-dark-secondary'" class="py-3 rounded-btn font-medium hover:bg-accent-blue transition-colors">
                                <span x-text="meals"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Step 7: Health & Safety -->
        <div x-show="currentStep === 7" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Health & Safety</h2>
                <p class="text-gray-400">Help us keep you safe during training</p>
            </div>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Do you have any injuries or physical limitations?</label>
                    <textarea x-model="formData.injuries" class="input-field w-full h-24" placeholder="e.g., lower back pain, knee issues (optional)"></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Medical conditions we should know about?</label>
                    <textarea x-model="formData.medical" class="input-field w-full h-24" placeholder="e.g., high blood pressure, asthma (optional)"></textarea>
                </div>
                
                <div class="card bg-accent-blue/10 border-accent-blue">
                    <div class="flex gap-3">
                        <svg class="w-6 h-6 text-accent-blue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-gray-300">Always consult with a healthcare professional before starting a new exercise program, especially if you have pre-existing medical conditions.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Step 8: Summary -->
        <div x-show="currentStep === 8" x-transition class="card">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-accent-green/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold mb-2">Assessment Complete!</h2>
                <p class="text-gray-400">Review your information before we create your plan</p>
            </div>
            
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div class="card bg-dark-secondary">
                        <p class="text-sm text-gray-400 mb-1">Name</p>
                        <p class="font-medium" x-text="formData.name || 'Not provided'"></p>
                    </div>
                    <div class="card bg-dark-secondary">
                        <p class="text-sm text-gray-400 mb-1">Age & Gender</p>
                        <p class="font-medium" x-text="`${formData.age || '-'} yrs, ${formData.gender || '-'}`"></p>
                    </div>
                    <div class="card bg-dark-secondary">
                        <p class="text-sm text-gray-400 mb-1">Current Weight</p>
                        <p class="font-medium" x-text="`${formData.weight || '-'} kg`"></p>
                    </div>
                    <div class="card bg-dark-secondary">
                        <p class="text-sm text-gray-400 mb-1">Target Weight</p>
                        <p class="font-medium" x-text="`${formData.targetWeight || '-'} kg`"></p>
                    </div>
                </div>
                
                <div class="card bg-dark-secondary">
                    <p class="text-sm text-gray-400 mb-2">Fitness Goals</p>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="goal in formData.goals" :key="goal">
                            <span class="badge-success" x-text="goal.replace('_', ' ').toUpperCase()"></span>
                        </template>
                    </div>
                </div>
                
                <div class="card bg-dark-secondary">
                    <p class="text-sm text-gray-400 mb-1">Experience Level</p>
                    <p class="font-medium capitalize" x-text="formData.level || 'Not selected'"></p>
                </div>
                
                <div class="card bg-dark-secondary">
                    <p class="text-sm text-gray-400 mb-1">Training Schedule</p>
                    <p class="font-medium" x-text="`${formData.daysPerWeek || '-'} days/week, ${formData.duration || '-'} min per session`"></p>
                </div>
            </div>
        </div>
        
        <!-- Navigation Buttons -->
        <div class="flex justify-between mt-8">
            <button @click="prevStep()" x-show="currentStep > 1" class="btn-secondary">
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Previous
            </button>
            
            <div x-show="currentStep === 1" class="flex-1"></div>
            
            <button @click="nextStep()" x-show="currentStep < 8" class="btn-primary">
                Next
                <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            
            <button @click="completeAssessment()" x-show="currentStep === 8" class="btn-primary">
                Generate My Fitness Plan
                <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Loading Modal -->
    <div x-show="loading" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="card max-w-md mx-4 text-center">
            <div class="w-20 h-20 border-4 border-accent-purple border-t-transparent rounded-full animate-spin mx-auto mb-6"></div>
            <h3 class="text-2xl font-bold mb-3">Creating Your Personalized Plan</h3>
            <p class="text-gray-400 mb-4">Our AI is analyzing your profile and generating your custom workout and nutrition plan...</p>
            <div class="space-y-2 text-sm text-gray-400">
                <p class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Analyzing your fitness profile
                </p>
                <p class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Generating workout programs
                </p>
                <p class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-accent-purple animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Preparing nutrition recommendations
                </p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function onboardingWizard() {
    return {
        currentStep: 1,
        loading: false,
        formData: {
            name: '',
            age: '',
            gender: '',
            height: '',
            weight: '',
            targetWeight: '',
            goals: [],
            level: '',
            preferences: [],
            equipment: [],
            daysPerWeek: 4,
            duration: '60',
            trainingTime: 'flexible',
            diet: 'regular',
            allergies: '',
            mealsPerDay: 3,
            injuries: '',
            medical: ''
        },
        
        nextStep() {
            if (this.currentStep < 8) {
                this.currentStep++;
                window.scrollTo(0, 0);
            }
        },
        
        prevStep() {
            if (this.currentStep > 1) {
                this.currentStep--;
                window.scrollTo(0, 0);
            }
        },
        
        toggleGoal(goal) {
            const index = this.formData.goals.indexOf(goal);
            if (index > -1) {
                this.formData.goals.splice(index, 1);
            } else {
                this.formData.goals.push(goal);
            }
        },
        
        togglePreference(pref) {
            const index = this.formData.preferences.indexOf(pref);
            if (index > -1) {
                this.formData.preferences.splice(index, 1);
            } else {
                this.formData.preferences.push(pref);
            }
        },
        
        completeAssessment() {
            this.loading = true;
            
            // Save to localStorage
            localStorage.setItem('fitmateUserData', JSON.stringify(this.formData));
            
            // Simulate AI processing
            setTimeout(() => {
                window.location.href = '/dashboard';
            }, 3000);
        }
    }
}
</script>
@endpush
@endsection
