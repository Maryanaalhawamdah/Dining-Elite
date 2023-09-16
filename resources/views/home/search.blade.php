<!-- resources/views/restaurants/search.blade.php -->

<base href="/public">
@extends('home.masterpage')

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            top: 5%;
        }
        .container{
            margin-top: 10%!important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search for Restaurants</h1>

        <!-- Search Form -->
        

        <!-- Display Search Results -->
        @if ($restaurants->count() > 0)
            <h2>Search Results for "{{ $query }}"</h2>
            <ul>
                @foreach ($restaurants as $restaurant)
                    <li>
                        <h3>{{ $restaurant->name }}</h3>
                        <p>{{ $restaurant->description }}</p>
                        <p>Location: {{ $restaurant->location }}</p>                    </li>
                @endforeach
            </ul>
        @else
            <p>No restaurants found. Try a different search term.</p>
        @endif
    </div>
</body>
</html>

