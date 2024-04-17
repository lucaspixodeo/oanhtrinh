<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CỔ PHỤC OANH TRỊNH</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('loader.css') }}" />
  @vite(['resources/js/main.js'])
</head>

<body>
  <div id="app">
    <div id="loading-bg">
      <div class="loading-logo">
        <img src="/images/logo.jpg" width="200" height="200" style="border-radius: 50%">
      </div>
      <div class="loading">
        <div class="effect-1 effects"></div>
        <div class="effect-2 effects"></div>
        <div class="effect-3 effects"></div>
      </div>
    </div>
  </div>

  <script>
    const loaderColor = localStorage.getItem('materio-initial-loader-bg') || '#FFFFFF'
    const primaryColor = localStorage.getItem('materio-initial-loader-color') || '#9155FD'

    if (loaderColor)
      document.documentElement.style.setProperty('--initial-loader-bg', loaderColor)

    if (primaryColor)
      document.documentElement.style.setProperty('--initial-loader-color', primaryColor)
  </script>
</body>

</html>
