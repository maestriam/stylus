<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title ?? 'Home &mdash; maestro/stisla'}} </title>
  
  <x-css-scripts />

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      {{ $slot }}
    </div>
  </div>

  <x-js-scripts />

  <!-- Page Specific JS File -->
</body>
</html>
