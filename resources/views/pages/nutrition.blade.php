@extends('layouts.app')

@section('title', 'Nutrition - FITMATE AI')
@section('page-title', 'Nutrition')

@section('content')
<div class="flex items-center justify-center min-h-[60vh]">
    <div class="card max-w-2xl mx-auto text-center">
        <div class="w-20 h-20 bg-accent-green/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>
        
        <h2 class="text-3xl font-bold mb-4">Nutrition Page</h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            This page will feature personalized meal planning, macro tracking, and AI-powered nutrition recommendations.
        </p>
        
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/20 rounded-btn text-yellow-500 text-sm mb-6">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            Under Development
        </div>
        
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/dashboard" class="btn-primary">Go to Dashboard</a>
        </div>
    </div>
</div>
@endsection
