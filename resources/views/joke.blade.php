<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <script>
        function page() {
            return {
                jokes: []
            }
        }
    </script>
    <h1 class="text-3xl font-bold underline">
        INTERNET JOKES DATABASE
      </h1>
    <div x-data="page()">
        <ul>
            <template x-for="joke in jokes">
                <li x-text="joke.joke_text"></li>
            </template>
        </ul>
    </div>
</body>
</html>
