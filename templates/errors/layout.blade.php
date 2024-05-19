<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet" />

  <style>
    .font-spaceGrotesk {
      font-family: "Space Grotesk", monospace;
    }
  </style>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="grid h-screen w-screen place-items-center bg-stone-900">
    <div class="font-spaceGrotesk w-max max-w-xs font-thin text-stone-300">
      <div class="flex items-center justify-center text-2xl">
        <span>@yield('status-code')</span>
        <div class="mx-4 h-10 w-[1px] bg-stone-400"></div>
        <span class="text-stone-400">@yield('status-message')</span>
      </div>
    </div>
  </div>
</body>

</html>
