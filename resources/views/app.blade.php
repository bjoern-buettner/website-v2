<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- JavaScript -->
    @routes
    @vite('resources/js/app.js')
    @vite('node_modules/flowbite/dist/flowbite.min.js')
    <!-- Stylesheets -->
    @vite('resources/css/app.css')
    @vite('node_modules/flowbite/dist/flowbite.min.css')
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
