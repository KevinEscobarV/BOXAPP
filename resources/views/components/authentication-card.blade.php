<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-3xl mt-2 px-6 py-4 bg-mustard-500 shadow-md overflow-hidden sm:rounded-lg ring ring-white ring-offset-4 ring-offset-black">
        {{ $slot }}
    </div>
</div>
