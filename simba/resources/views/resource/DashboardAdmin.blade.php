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
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
                        <script src="https://code.jquery.com/jquery-3.1.0.js">
                    </script>
                    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

                    <table id="tabel-data" table class="min-w-full divide-y divide-gray-300 ">

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
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                </th>



                            </tr>
                        </thead>


                        @foreach ($produk as $value)
                        <tbody class="divide-y divide-gray-200  bg-white">
                            <tr class="hover:bg-gray-100">
                                <td
                                    class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900 mx-auto sm:pl-6">
                                    <img class="mx-auto" src="{{ url('dist/'. $value->foto) }}"
                                        style="height: 200px; width: 250px;">
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$value->deskripsi}}
                                </td>

                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    @if(count($value->barangmasuk)==0)
                                    {{$value->barangawal}}
                                    @else
                                    {{$value->jumlahbarangmasuk}}
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
                                    {{$value->barangkeluar->sum('jumlahbarang')}}
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
                                    <a href="/history/{{$value->id}}"
                                        class="text-indigo-600 hover:text-indigo-900">History<span
                                            class="sr-only"></span></a>
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6 text-center">

                                    <button onclick="toggleModal('modal-id')"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>


                                    </button>
                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="modal-id">
                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                            <!--content-->
                                            <div
                                                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                                                    <h3 class="text-3xl font-semibold">
                                                        Hapus Produk
                                                    </h3>
                                                    <button
                                                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('modal-id')">
                                                        <span
                                                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            ×
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <p class="my-4 text-slate-500 text-lg leading-relaxed">
                                                        Apakah anda yakin ingin menghapus produk ini ?
                                                    </p>
                                                </div>
                                                <!--footer-->
                                                <div
                                                    class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                                    <button
                                                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                        type="button" onclick="toggleModal('modal-id')">
                                                        Close
                                                    </button>
                                                    <a href="/produk/delete/{{$value->id}}"> <button
                                                            class="bg-red-500 text-white active:bg-red-800 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                            type="button" onclick="toggleModal('modal-id')">
                                                            Hapus Produk
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
                                    </div>
                                    <script type="text/javascript">
                                        function toggleModal(modalID){
                                          document.getElementById(modalID).classList.toggle("hidden");
                                          document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                          document.getElementById(modalID).classList.toggle("flex");
                                          document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                        }
                                    </script>
                                    </a>


                                    <a href="/produk/edit/{{$value->id}}">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>

                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach



                            <!-- More people... -->
                        </tbody>

                    </table>
                    <script>
                        $(document).ready(function(){
                        $('#tabel-data').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection