@extends('layouts.main')
@section('container')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8 max-w-screen m-8 ">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-4xl font-semibold text-gray-900 m-8">Daftar Produk</h1>

        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="/produk">
                <button type="button"
                    class="inline-flex  items-center justify-center rounded-md border border-transparent  px-4 py-2 text-sm font-medium  text-white bg-yellow-400 hover:bg-yellow-800 duration-300 hover:scale-110 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                    Product</button>
            </a>
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
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Jumlah
                                    Barang Masuk</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Jumlah
                                    Barang Keluar</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Jumlah
                                    Sisa Barang</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    History Barang</th>




                            </tr>
                        </thead>

                        @foreach ($produk as $value)
                        <tbody class="divide-y divide-gray-200  bg-white">
                            <tr class="hover:bg-gray-100">
                                <td
                                    class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900 mx-auto sm:pl-6">
                                    <img class="mx-auto" src="{{ url('dist/'. $value->foto) }}"
                                        style="height: 150px; width: 200px;">
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$value->deskripsi}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    @if(count($value->barangmasuk)==0)
                                    {{$value->barangawal}}
                                    @else
                                    {{$value->barangmasuk[0]->jumlahbarang}}
                                    @endif
                                    <a href="/produk/{{$value->id}}"> <button type="button"
                                            class="ml-3 transition ease-in-out delay-150 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-700 duration-300 hover:scale-110 hover:-translate-y-1  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    @if(count($value->barangkeluar)==0)
                                    -
                                    @else
                                    {{$value->barangkeluar[0]->jumlahbarang}}
                                    @endif
                                    <a href="/produk/keluar/{{$value->id}}">
                                        <button type="button"
                                            class="ml-3 transition ease-in-out delay-150 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-900 duration-300 hover:scale-110 hover:-translate-y-1  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5"
                                                    d="M20 12H4"></path>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$value->barangsekarang}}
                                </td>
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