<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title !== "" ? $title : 'Student System'}}</title>
   @vite('resources/css/app.css') 
   <script src="//unpkg.com/alpinejs" defer></script>
   <script src="https://kit.fontawesome.com/7fd90f7e36.js" crossorigin="anonymous"></script>
    <script src="./tailwind3.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="h-14 bg-gradient-to-r from-cyan-500 to-blue-500 min-h-screen pt-12 pb-6 px-2">

   <x-messages />