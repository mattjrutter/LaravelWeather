@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <div class="well">
        <div class="row">
            <div class="col-sm-8">
                <p>This is my weather station that I built for my computer networks project and this website is my
                final project for Web III. I originally had the station posting data only to the Weather Underground (which you
                can see <a href="https://www.wunderground.com/personal-weather-station/dashboard?ID=KCOGRAND121">here</a>),
                but I wanted a better, more personalized method of saving and looking at the data. I tried using
                Wolfram Alpha's Data Drop service, but once I got over a couple hundred data entries, analyzation
                had to be done manually using <strong>their</strong> language which wasn't the easiest to learn. The
                data was also limited to 15MB, which filled up in 4 days. So I began to ponder an idea for this website
                to analyze the data for me in a why that I had complete control over, such as methods of storage and
                presentation. I also thought about how weather is a "go-to" topic for small talk, so why not also make a
                blog out of it with full account registration and authentication?</p>
            </div>
            <div class="col-sm-4">
                <img src="pics/weatherStation.jpg" class="img-thumbnail" alt="Weather Station">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="pics/imp.jpg" class="img-thumbnail" alt="Electric Imp">
            </div>
            <div class="col-sm-6">
                <img src="pics/box.jpg" class="img-thumbnail" alt="Storage Box">
            </div>
        </div>
    </div>

@endsection