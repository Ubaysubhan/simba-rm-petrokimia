<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMBA | Retail Management PG</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    @vite('resources/css/app.css')
    <link href="{{ URL::asset('dist/terang.png') }}" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

</head>

<body>

    @csrf
    <div class="min-h-screen flex bg-white">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img src="{{ URL::asset('dist/sims.png') }}" class="h-12 w-auto " alt="Workflow">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">SIMBA</h2>

                </div>

                <div class="mt-8">
                    <div>
                        <div>
                            <p class="text-sm font-medium text-gray-700 ">Sistem Manajemen Barang Retail
                                Management
                            </p>
                            <p>
                                Petrokimia Gresik
                            </p>

                            <div class="mt-1 grid grid-cols-3 gap-3">




                            </div>
                        </div>

                        <div class="mt-6 relative">


                        </div>
                    </div>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mt-6">

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700"> Email address
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="appearance-none block w-full px-3 py-2 border border-yellow-300 rounded-md shadow-sm placeholder-yellow-400 focus:outline-none focus:ring-yellow-200 focus:border-yellow-200 sm:text-sm">
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium pt-6 text-gray-700"> Password
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="appearance-none block w-full px-3 py-2 border border-yellow-300 rounded-md shadow-sm placeholder-yellow-400 focus:outline-none focus:ring-yellow-100	 focus:border-yellow-200 sm:text-sm">
                                </div>
                            </div>

                            <div class="py-6">
                                <button type="submit"
                                    class="w-full flex justify-center py-2 px-4 border  rounded-md shadow-sm text-sm font-medium text-white  bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400 hover:from-amber-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring--500">Sign
                                    in</button>
                            </div>

                            <a href="/" class="py-6">
                                <button type="button"
                                    class="w-full flex justify-center py-2 px-4 border  rounded-md shadow-sm text-sm font-medium text-red-500  bg-gradient-to-r from-white via-white to-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring--500">Back
                                    to Home</button>
                            </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full min-w-full object-cover" src="{{ URL::asset('dist/tulus.jpg') }}" alt="">
    </div>
    </div>

</body>

</html>