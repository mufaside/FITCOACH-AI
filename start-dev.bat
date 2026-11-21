@echo off
echo ===============================================
echo  FITMATE AI - Development Server Starter
echo ===============================================
echo.

REM Check if node_modules exists
if not exist "node_modules" (
    echo [!] Node modules not found. Installing dependencies...
    call npm install
    echo.
)

echo [1/2] Starting Vite development server...
echo This terminal will show Vite output.
echo.
echo [2/2] Next, start PHP server in a NEW terminal:
echo    php -S localhost:8000 -t public
echo.
echo Then open: http://localhost:8000
echo.
echo ===============================================
echo Press Ctrl+C to stop the server
echo ===============================================
echo.

npm run dev
