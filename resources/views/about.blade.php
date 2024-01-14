<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'About')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    @include('pages/header')
    <div class="container">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Explore Cityscapes</h4>
                    <p class="card-text">Discover the vibrant energy of urban life as you explore city streets, iconic landmarks, and bustling markets. Immerse yourself in the culture and history that each city has to offer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Beach Getaway</h4>
                    <p class="card-text">Escape to tranquil beaches with golden sands and crystal-clear waters. Relax under the sun, take a dip in the ocean, and enjoy the serenity of coastal paradise.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Scenic Landscapes</h4>
                    <p class="card-text">Embark on a journey through breathtaking landscapes, from rolling hills and majestic mountains to serene lakes and picturesque valleys. Nature's beauty awaits your exploration.</p>
                </div>
            </div>
        </div>
        
        <!-- Travel Tips Section -->
        <div class="mt-4">
            <h4>Travel Tips</h4>
            <p>
                Make the most of your travels with these tips:
            </p>
            <ul>
                <li>Plan Ahead: Research your destination, create an itinerary, and book accommodations in advance.</li>
                <li>Pack Smart: Pack essentials, consider the weather, and don't forget important documents like passports.</li>
                <li>Immerse in Local Cuisine: Try local dishes to get a taste of the culture. Food is a great way to connect with a place.</li>
                <li>Capture Memories: Take photos and document your experiences to cherish the memories later.</li>
                <li>Connect with Locals: Engage with the local community to learn about their traditions and way of life.</li>
            </ul>
            <p>
                Whether you're exploring cityscapes, relaxing on a beach, or hiking through scenic landscapes, traveling is a transformative experience that enriches our lives. Bon voyage!
            </p>
        </div>
    </div>
    
    @include('pages/footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
