@extends('layouts.guest')

@section('title', 'FITMATE AI - Your Personal AI Fitness Coach')

@section('content')
<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-dark-primary/80 backdrop-blur-lg border-b border-dark-border">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-br from-accent-purple to-accent-purple-light rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="text-xl font-bold">FITMATE AI</span>
            </div>
            
            <div class="hidden md:flex items-center gap-8">
                <a href="#features" class="text-gray-400 hover:text-white transition-colors">Features</a>
                <a href="#how-it-works" class="text-gray-400 hover:text-white transition-colors">How It Works</a>
                <a href="#benefits" class="text-gray-400 hover:text-white transition-colors">Benefits</a>
                <a href="#faq" class="text-gray-400 hover:text-white transition-colors">FAQ</a>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="/dashboard" class="btn-secondary hidden sm:inline-block">Sign In</a>
                <a href="/onboarding" class="btn-primary">Get Started</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="pt-32 pb-20 lg:pt-40 lg:pb-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent-purple/20 rounded-full text-accent-purple text-sm font-medium mb-6">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                AI-Powered Personal Fitness Platform
            </div>
            
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                Your Fitness Journey,<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-purple to-accent-green">Powered by AI</span>
            </h1>
            
            <p class="text-xl text-gray-400 mb-10 max-w-3xl mx-auto">
                Train smarter with personalized workouts, real-time exercise form correction, and intelligent fitness coaching. Achieve your goals faster with your AI-powered personal trainer.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="/onboarding" class="btn-primary text-lg px-8 py-4 w-full sm:w-auto">
                    Start Your Journey
                    <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="#features" class="btn-secondary text-lg px-8 py-4 w-full sm:w-auto">
                    Explore Features
                </a>
            </div>
            
            <!-- Hero Visual -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-accent-purple/20 to-accent-green/20 blur-3xl"></div>
                <div class="relative card p-8 bg-dark-secondary/50 backdrop-blur">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-purple mb-2">10K+</div>
                            <div class="text-sm text-gray-400">Active Users</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-green mb-2">500K+</div>
                            <div class="text-sm text-gray-400">Workouts Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-blue mb-2">95%</div>
                            <div class="text-sm text-gray-400">Accuracy Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-purple mb-2">24/7</div>
                            <div class="text-sm text-gray-400">AI Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 lg:py-32 bg-dark-secondary">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-5xl font-bold mb-4">Powerful Features</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">Everything you need to achieve your fitness goals in one intelligent platform</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card hover:border-accent-purple transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-purple/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Personalized Workout Plans</h3>
                <p class="text-gray-400">AI-generated workout programs tailored to your goals, fitness level, and available equipment.</p>
            </div>
            
            <div class="card hover:border-accent-green transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-green/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Real-Time Form Correction</h3>
                <p class="text-gray-400">Computer vision technology analyzes your movements and provides instant feedback on your exercise form.</p>
            </div>
            
            <div class="card hover:border-accent-blue transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-blue/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Automatic Rep Counter</h3>
                <p class="text-gray-400">Never lose count again. Our AI automatically tracks your repetitions and sets during workouts.</p>
            </div>
            
            <div class="card hover:border-accent-purple transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-purple/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Smart Nutrition Plans</h3>
                <p class="text-gray-400">Get personalized meal recommendations based on your fitness goals and dietary preferences.</p>
            </div>
            
            <div class="card hover:border-accent-green transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-green/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Progress Tracking</h3>
                <p class="text-gray-400">Monitor your body measurements, weight, and strength gains with detailed analytics and insights.</p>
            </div>
            
            <div class="card hover:border-accent-blue transition-all duration-300 group">
                <div class="w-12 h-12 bg-accent-blue/20 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-accent-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">24/7 AI Coach</h3>
                <p class="text-gray-400">Get instant answers to your fitness questions and personalized advice anytime, anywhere.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section id="how-it-works" class="py-20 lg:py-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-5xl font-bold mb-4">How It Works</h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">Get started in three simple steps</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-accent-purple to-accent-purple-light rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                <h3 class="text-2xl font-bold mb-4">Tell Us About You</h3>
                <p class="text-gray-400">Share your fitness goals, current level, and preferences through our simple assessment.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-accent-green to-accent-blue rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                <h3 class="text-2xl font-bold mb-4">Get Your Plan</h3>
                <p class="text-gray-400">Our AI creates a personalized workout and nutrition plan tailored specifically for you.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-accent-blue to-accent-purple rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                <h3 class="text-2xl font-bold mb-4">Train with AI</h3>
                <p class="text-gray-400">Start training with real-time guidance, form correction, and progress tracking.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section id="benefits" class="py-20 lg:py-32 bg-dark-secondary">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl lg:text-5xl font-bold mb-6">Why Choose FITMATE AI?</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-accent-green/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">No Gym Required</h3>
                                <p class="text-gray-400">Train anywhere with customized home or gym workouts.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-accent-green/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Affordable Excellence</h3>
                                <p class="text-gray-400">Get professional coaching at a fraction of the cost of a personal trainer.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-accent-green/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Scientifically Backed</h3>
                                <p class="text-gray-400">Programs based on proven exercise science and sports nutrition.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-accent-green/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-accent-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Adaptive Learning</h3>
                                <p class="text-gray-400">AI that learns from your progress and continuously optimizes your program.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card bg-dark-card p-8">
                    <div class="aspect-video bg-dark-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-24 h-24 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-center text-gray-400">Watch how our AI-powered form correction helps you train safer and more effectively</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-20 lg:py-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-400">Everything you need to know about FITMATE AI</p>
            </div>
            
            <div class="space-y-4" x-data="{ openFaq: null }">
                <div class="card">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-bold">Do I need special equipment?</h3>
                        <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="mt-4 text-gray-400">
                        No! FITMATE AI works with whatever equipment you have available. Whether you train at home with no equipment, have a few dumbbells, or have access to a full gym, we'll create a program that works for you.
                    </div>
                </div>
                
                <div class="card">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-bold">How accurate is the form correction?</h3>
                        <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="mt-4 text-gray-400">
                        Our computer vision system has a 95% accuracy rate in detecting exercise movements and form issues. It's trained on thousands of exercise videos and validated by certified personal trainers.
                    </div>
                </div>
                
                <div class="card">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-bold">Can beginners use FITMATE AI?</h3>
                        <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="mt-4 text-gray-400">
                        Absolutely! FITMATE AI is designed for all fitness levels. Our AI creates programs specifically tailored to beginners, with detailed exercise instructions and progressive difficulty increases as you improve.
                    </div>
                </div>
                
                <div class="card">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left flex items-center justify-between">
                        <h3 class="text-lg font-bold">What devices do I need?</h3>
                        <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="mt-4 text-gray-400">
                        FITMATE AI works on any device with a camera and modern web browser - smartphone, tablet, or laptop. For live exercise form correction, we recommend using a device with a camera that you can position to see your full body.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 lg:py-32 bg-gradient-to-br from-accent-purple/20 to-accent-green/20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-5xl font-bold mb-6">Ready to Transform Your Fitness?</h2>
            <p class="text-xl text-gray-400 mb-10">Join thousands of users who are achieving their fitness goals with AI-powered coaching.</p>
            <a href="/onboarding" class="btn-primary text-lg px-10 py-4 inline-block">
                Start Free Assessment
                <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark-secondary border-t border-dark-border py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-accent-purple to-accent-purple-light rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold">FITMATE AI</span>
                </div>
                <p class="text-gray-400 mb-4">Your Personal AI Fitness Coach. Train smarter, achieve more.</p>
                <p class="text-sm text-gray-500">© 2024 FITMATE AI. All rights reserved.</p>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Product</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#features" class="hover:text-white transition-colors">Features</a></li>
                    <li><a href="#how-it-works" class="hover:text-white transition-colors">How It Works</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Support</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#faq" class="hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
