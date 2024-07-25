<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$book->title}} - Book Details</title>
</head>
<body>
    @include('partials.header')
    <div class="ml-16 mt-4">
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
            <a href="/">Go Back</a>
        </button>
    </div>
    <div class="container h-screen mx-auto px-24 pt-24">
        <h1 class="text-6xl">Title: {{$book->title}}</h1>
        <h2 class="text-3xl pt-2">Author: {{$book->author}}</h2>
        <h2 class="text-3xl pt-4">Description:</h2>
        <p class="py-4 pl-8">{{$book->description}}</p>
        <h2 class="text-3xl pt-4">Details:</h2>
        <ul>
            <li class="pl-8">Date Published: {{$book->date_published}}</li>
            <li class="pl-8">ISBN: {{$book->isbn}}</li>
        </ul>
    </div>
    @include('partials.footer')
</body>
</html>