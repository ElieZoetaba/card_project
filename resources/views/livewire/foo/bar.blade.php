<div>
    {{-- formulaire d'ajout d'un nouveau etudiant --}}
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <form action="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="col-span-1">
                    <div class="flex flex-col break-words bg-white  border-2 rounded shadow-md">
                        <div class="flex justify-between p-5">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ __('Add Student') }}
                            </h3>
                            <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        < class="w-full p-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-1">
                                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('Name') }}
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="name" type="text" class="form-input block w-full sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('Email') }}
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="email" type="email" class="form-input block w-full sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-1">
                                    <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('Phone') }}
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="phone" type="text" class="form-input block w-full sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <label for="address" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('Address') }}
                                    </label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input id="address" type="text" class="form-input block w-full sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
