<!DOCTYPE html>
<html lang="Fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/icon.png')}}" type="image/x-icon">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js" defer></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/marked@12.0.2/lib/marked.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.1.6/dist/purify.min.js"></script>

<!-- Markdown parser + sanitize -->
<script src="https://cdn.jsdelivr.net/npm/marked@12.0.2/lib/marked.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.1.6/dist/purify.min.js"></script>


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Intellect Tronc SN Formation</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
@include("partials.menu")

@yield("content")

@include('partials.footer')
</body>
</html>