<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="gmaps-key" content="{{ config('services.google_maps.key') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/the-climate-promise-logo.webp')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/qualify-main.webp')}}">


    <meta property="og:title" content="QualifyUK" />
    <meta property="og:description" content="QualifyUK - Business - Healthcare - Technology" />
    <meta property="og:image" content="{{ asset('assets/img/qualify-main.webp') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    
    <title> The CLimate Promise</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    
<style>
@keyframes marquee {
  0% { transform: translateX(0%); }
  100% { transform: translateX(-50%); }
}
.animate-marquee {
  display: inline-flex;
  animation: marquee 15s linear infinite;
}
</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>