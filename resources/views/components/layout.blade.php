@props(['title' => 'Default Title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>{{ $title }}</title>
</head>

<body>
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
</body>
<script>

</script>
<script>
    document.documentElement.setAttribute('data-theme', 'emerald');
</script>

</html>