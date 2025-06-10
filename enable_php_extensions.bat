@echo off
echo ================================
echo   WordPress Site Health Fix
echo   PHP Extensions Enabler
echo ================================
echo.

REM Backup original php.ini
copy "C:\xampp\php\php.ini" "C:\xampp\php\php.ini.backup.%date:~-4,4%%date:~-10,2%%date:~-7,2%"
echo PHP.ini backed up successfully!
echo.

REM Enable GD extension
powershell -Command "(Get-Content 'C:\xampp\php\php.ini') -replace ';extension=gd', 'extension=gd' | Set-Content 'C:\xampp\php\php.ini'"
echo ✅ GD extension enabled

REM Enable INTL extension  
powershell -Command "(Get-Content 'C:\xampp\php\php.ini') -replace ';extension=intl', 'extension=intl' | Set-Content 'C:\xampp\php\php.ini'"
echo ✅ INTL extension enabled

REM Add ZIP extension if not present
findstr /i "extension=zip" "C:\xampp\php\php.ini" >nul
if %errorlevel% neq 0 (
    echo extension=zip >> "C:\xampp\php\php.ini"
    echo ✅ ZIP extension added
) else (
    echo ✅ ZIP extension already enabled
)

echo.
echo ================================
echo   IMPORTANT: 
echo   1. Restart Apache in XAMPP
echo   2. Check Site Health again
echo ================================
echo.
pause 