<x-app-layout>
    <section class="text-gray-400 bg-black body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-2/3 mx-auto">
                <div class="flex flex-wrap w-full mb-4">
                    <video class="w-full object-cover h-full object-center rounded-md" controls>
                        <source src="{{ asset('images/videos/4.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="px-2 w-1/2">
                        <div class="flex flex-wrap w-full">
                            <video class="w-full object-cover h-full object-center rounded-md" controls>
                                <source src="{{ asset('images/videos/1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="px-2 w-1/2">
                        <div class="flex flex-wrap w-full">
                            <video class="w-full object-cover h-full object-center rounded-md" controls>
                                <source src="{{ asset('images/videos/2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
