<?php

// Simplified index.php for frontend-only demo
// This allows the application to run without full Composer installation

// Get the requested URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route mapping
$routes = [
    '/' => '../resources/views/pages/landing.blade.php',
    '/onboarding' => '../resources/views/pages/onboarding.blade.php',
    '/dashboard' => '../resources/views/pages/dashboard.blade.php',
    '/workout' => '../resources/views/pages/workout.blade.php',
    '/live-exercise' => '../resources/views/pages/live-exercise.blade.php',
    '/nutrition' => '../resources/views/pages/nutrition.blade.php',
    '/progress' => '../resources/views/pages/progress.blade.php',
    '/history' => '../resources/views/pages/history.blade.php',
    '/ai-coach' => '../resources/views/pages/ai-coach.blade.php',
    '/profile' => '../resources/views/pages/profile.blade.php',
    '/settings' => '../resources/views/pages/settings.blade.php',
];

// Vite dev server assets
if (strpos($uri, '/@vite') !== false || strpos($uri, '/@id') !== false || strpos($uri, '/node_modules') !== false || strpos($uri, '/@fs') !== false) {
    return false;
}

// Serve static files
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Simple Blade-like rendering function
function render_blade($file) {
    if (!file_exists($file)) {
        http_response_code(404);
        echo "404 - Page Not Found";
        return;
    }
    
    $content = file_get_contents($file);
    
    // Process @extends
    if (preg_match('/@extends\([\'"](.+?)[\'"]\)/', $content, $extends)) {
        $layout = str_replace('.', '/', $extends[1]);
        $layoutFile = __DIR__ . '/../resources/views/' . $layout . '.blade.php';
        
        if (file_exists($layoutFile)) {
            $layoutContent = file_get_contents($layoutFile);
            
            // Extract sections
            preg_match_all('/@section\([\'"](.+?)[\'"]\)(.*?)@endsection/s', $content, $sections);
            
            // Replace sections in layout
            foreach ($sections[1] as $index => $sectionName) {
                $sectionContent = $sections[2][$index];
                $layoutContent = preg_replace('/@yield\([\'"]' . $sectionName . '[\'"].*?\)/', trim($sectionContent), $layoutContent);
            }
            
            $content = $layoutContent;
        }
    }
    
    // Process @include
    $content = preg_replace_callback('/@include\([\'"](.+?)[\'"]\)/', function($matches) {
        $include = str_replace('.', '/', $matches[1]);
        $includeFile = __DIR__ . '/../resources/views/' . $include . '.blade.php';
        if (file_exists($includeFile)) {
            return file_get_contents($includeFile);
        }
        return '';
    }, $content);
    
    // Process @vite
    $viteUrl = 'http://localhost:5173';
    $content = preg_replace('/@vite\(\[(.*?)\]\)/', function($matches) use ($viteUrl) {
        $assets = str_replace(["'", '"', ' '], '', $matches[1]);
        $assets = explode(',', $assets);
        $output = '<script type="module" src="' . $viteUrl . '/@vite/client"></script>';
        foreach ($assets as $asset) {
            $ext = pathinfo($asset, PATHINFO_EXTENSION);
            if ($ext === 'css') {
                $output .= '<link rel="stylesheet" href="' . $viteUrl . '/' . $asset . '">';
            } else {
                $output .= '<script type="module" src="' . $viteUrl . '/' . $asset . '"></script>';
            }
        }
        return $output;
    }, $content);
    
    // Process @push and @stack (simple version)
    $content = preg_replace('/@push\([\'"]scripts[\'"]\)(.*?)@endpush/s', '<script>$1</script>', $content);
    $content = preg_replace('/@push\([\'"]styles[\'"]\)(.*?)@endpush/s', '<style>$1</style>', $content);
    $content = preg_replace('/@stack\([\'"]scripts[\'"]\)/', '', $content);
    $content = preg_replace('/@stack\([\'"]styles[\'"]\)/', '', $content);
    
    // Process simple @ directives
    $content = str_replace('@csrf', '<input type="hidden" name="_token" value="csrf_token_here">', $content);
    
    // Process {{ request()->is() }}
    $content = preg_replace_callback('/request\(\)->is\([\'"](.+?)[\'"]\)/', function($matches) use ($uri) {
        $check = '/' . $matches[1];
        return $uri === $check ? 'true' : 'false';
    }, $content);
    
    echo $content;
}

// Route handler
if (isset($routes[$uri])) {
    render_blade(__DIR__ . '/' . $routes[$uri]);
} else {
    http_response_code(404);
    echo "404 - Page Not Found";
}
