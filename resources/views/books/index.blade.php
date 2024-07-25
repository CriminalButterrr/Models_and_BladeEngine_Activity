<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Book List</title>
</head>
<body>
    @include('partials.header')

    <div class="py-12">
        <p class="text-center text-9xl font-bold">Book list</p>
        <div class="pt-16 px-12">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead>
                    <tr>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ISBN</th>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Title</th>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Author</th>
                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
                    <th class="px-6 py-3 text-star text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Date Published</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    @foreach ($books as $book)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">{{$book->isbn}}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 hover:text-yellow-800 dark:text-neutral-200"><a href="/books/{{$book->id}}">{{$book->title}}</a></td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">{{$book->author}}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200 ">{{$book->description}}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">{{$book->date_published}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
            
    @include('partials.footer')
</body>
</html>