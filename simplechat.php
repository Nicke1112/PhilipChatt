<?php
// Aktivera CSP
header("Content-Security-Policy: default-src 'self'; script-src 'self' https://cdn.example.com; style-src 'self' https://fonts.googleapis.com; img-src 'self' data:;");

// Aktivera X-Frame-Options för att förhindra inbäddning i iframe
header("X-Frame-Options: DENY");

// Aktivera X-XSS-Protection för att förhindra XSS-attacker
header("X-XSS-Protection: 1; mode=block");

// Aktivera X-Content-Type-Options för att förhindra sniffing av MIME-typ
header("X-Content-Type-Options: nosniff");

// Aktivera HTTP-Strict-Transport-Security (HSTS) för att tvinga HTTPS-användning (om din webbplats stöder HTTPS)
// header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

// Aktivera CORS för att bara tillåta åtkomst från specifika domäner
// header("Access-Control-Allow-Origin: https://example.com");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type");

// Säkra cookie-inställningar
// ini_set('session.cookie_httponly', 1);
// ini_set('session.cookie_secure', 1);

// Ditt PHP-kod här
?>
