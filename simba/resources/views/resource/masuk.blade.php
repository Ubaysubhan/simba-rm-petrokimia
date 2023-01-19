@extends('layouts.main')

@section('container')
<form method="POST" action="/BarangMasuk" enctype="multipart/formdata">
    @csrf
    <div class=" space-y-8 divide-y divide-gray-200 max-w-4xl mx-auto my-5 ">
        <div>
            @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">PERINGATAN</strong>
                <span class="block sm:inline">Masih ada yang salah bro ,Coba di cek lagi</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

                </span>
            </div>

            @endif
            <div>
                <h1 class=" text-2xl leading-6 pt-8 font-medium text-gray-900">Aktivitas Barang Masuk</h1>

            </div>
            <div class="space-y-6 pt-10 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Tanggal
                    </label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker type="text" name="tanggal" value="{{old('tanggal')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>


                </div>

                <div class="space-y-6 pt-10 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Requester
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="requester" id="first-name" autocomplete="given-name"
                                value="{{old('requester')}}"
                                class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="space-y-6 pt-10 sm:space-y-5">
                        <div
                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Jumlah Barang
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="jumlahbarang" id="first-name" autocomplete="given-name"
                                    value="{{old('jumlahbarang')}}"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>


                        <div class="flex space-between justify-end">
                            <div class="pt-5 form-group">
                                <div class="flex space-between">
                                    <a href="/Admin">
                                        <button type="button" name="id_barang"
                                            class="ml-3 transition ease-in-out delay-150 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-white hover:bg-red-400 duration-300 hover:scale-110 hover:-translate-y-1  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Back</button></a>
                                </div>
                            </div>

                            <div class="pt-5 form-group">
                                <div class="flex justify-end">
                                    <button type="submit" value="{{$produk->id}}" name="id_barang"
                                        class="ml-3 transition ease-in-out delay-150 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-300 hover:bg-yellow-500 duration-300 hover:scale-110 hover:-translate-y-1  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </div>
</form>
@endsection