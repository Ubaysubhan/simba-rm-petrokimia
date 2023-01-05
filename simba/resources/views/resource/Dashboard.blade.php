@extends('layouts.main')
@section('container')


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8 max-w-screen m-8 ">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-4xl font-semibold text-gray-900 m-8">Daftar Produk</h1>

        </div>

    </div>
    <div class="mt-8 flex flex-col content-center max-w-8xl">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 text-center sm:pl-6">
                                    Barang</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Deskripsi Barang</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Jumlah
                                    Barang</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200  bg-white">
                            @foreach ($produk as $value)
                            <tr class="hover:bg-gray-100">
                                <td
                                    class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900 mx-auto sm:pl-6">
                                    <img class="mx-auto" src="{{ url('dist/'.$value->foto) }}"
                                        style="height: 150px; width: 200px;">
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$value->deskripsi}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$value->barangsekarang}}</td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6 text-center">
                                    <a href="/history" class="text-indigo-600 hover:text-indigo-900">History<span
                                            class="sr-only"></span></a>
                                </td>
                            </tr>
                            @endforeach





                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection