<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeLoveDevs Podcast Player</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body class="min-h-screen bg-gray-50 font-sans text-black antialiased relative">
    <div class="mx-auto max-w-2xl px-6 py-8">
        @persist('logo')
        <a href="/"
            class="mx-auto flex max-w-max items-center gap-3 font-bold text-[#220BAB] transition hover:opacity-80"
            wire:navigate>
            <svg class="text-light-500 w-20 h-20 [&amp;>*]:!stroke-current h-auto " width="272" height="92" viewBox="0 0 271 92" xmlns="http://www.w3.org/2000/svg"><g stroke-width="19.5" stroke="#230CAE" fill="none" fill-rule="evenodd" stroke-linecap="round"><path d="M187 80.99h36.236c22.154 0 37.46-15.314 37.46-35.292 0-20.181-15.306-35.698-37.46-35.698H203.5"></path><path d="M10 13.91 32.586 81.5l25.03-66.9 25.027 66.9 18.932-54.093c2.694-7.885 8.34-14.442 16.286-16.607a22.576 22.576 0 0 1 15.693 1.413 23.004 23.004 0 0 1 6.536 4.681l.802.82.802-.82c4.317-4.402 10.17-6.875 16.272-6.875 6.103 0 11.956 2.473 16.273 6.875 4.33 4.405 6.761 10.39 6.758 16.633-.006 6.238-2.447 12.221-6.78 16.62l-.801.82-20.716 21.17-6.94 7.086a6.82 6.82 0 0 1-9.762 0l-2.134-2.195-4.812-4.914-11.64-11.892" stroke-linejoin="round"></path></g></svg>
            <span class="text-3xl">Podcast</span>
        </a>
        @endpersist

        <div class="py-10 mb-28">{{ $slot }}</div>

        @persist('player')
        <x-episode-player />
        @endpersist
    </div>
</body>

</html>