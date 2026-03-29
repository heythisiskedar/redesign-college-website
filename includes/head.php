<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | Vidyavardhini’s Annasaheb Vartak College" : "Vidyavardhini’s Annasaheb Vartak College"; ?></title>
    <!-- Tailwind CSS v4 Browser CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- Custom Theme Config mapped from Figma -->
    <style>
      @theme {
        --color-blue-950: #030213;
        --color-blue-900: #0a192f;
        --color-yellow-400: #F1B51C;
        --color-yellow-500: #D89C13;
        --font-sans: 'Outfit', sans-serif;
        --foreground: oklch(0.145 0 0);
        --background: #ffffff;
      }
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen flex flex-col font-sans text-gray-800 bg-gray-50">
