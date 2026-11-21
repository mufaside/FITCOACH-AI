@extends('layouts.app')

@section('title', 'Live Exercise - FITMATE AI')
@section('page-title', 'Live Exercise')

@section('content')
<div class="flex items-center justify-center min-h-[60vh]">
    <div class="card max-w-2xl mx-auto text-center">
        <div class="w-20 h-20 bg-accent-purple/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-accent-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
        </div>
        
        <h2 class="text-3xl font-bold mb-4">Live Exercise Page</h2>
        <p class="text-gray-400 mb-6 max-w-md mx-auto">
            This page will feature real-time exercise form correction using computer vision, automatic rep counting, and live feedback.
        </p>
        
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/20 rounded-btn text-yellow-500 text-sm mb-6">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            Under Development
        </div>
        
        <div class="space-y-3 text-left max-w-md mx-auto mb-8">
            <div class="flex items-start gap-3 text-sm text-gray-400">
                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>Camera interface with live video feed</span>
            </div>
            <div class="flex items-start gap-3 text-sm text-gray-400">
                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>Real-time form correction feedback</span>
            </div>
            <div class="flex items-start gap-3 text-sm text-gray-400">
                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>Automatic repetition counting</span>
            </div>
            <div class="flex items-start gap-3 text-sm text-gray-400">
                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>Exercise recognition and tracking</span>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/workout" class="btn-primary">
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Workout
            </a>
            <a href="/dashboard" class="btn-secondary">Go to Dashboard</a>
        </div>
    </div>
</div>
@endsection
