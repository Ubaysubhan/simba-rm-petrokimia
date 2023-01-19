@extends('layouts.main')
@section('container')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 bg-white  md:bg-white lg:px-8 max-w-screen m-8 ">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-4xl font-semibold sm:text-gray-900 m-8">History Barang</h1>

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
                                    Tanggal</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Nama Barang</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Requester</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Keperluan</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Kabupaten/Kota</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Jumlah
                                    Barang</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">
                                    Status</th>

                            </tr>
                        </thead>

                        @foreach ($test as $testing)

                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$testing->tanggal}}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$testing->deskripsi}}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$testing->requester}}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">

                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">

                                </td>

                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$testing->barangawal}}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-500 text-center sm:pl-6">
                                    Barang Masuk
                                </td>
                            </tr>
                            @endforeach


                            <!-- More people... -->
                        </tbody>
                        @foreach ($hd as $haha)

                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$haha->tanggal}}



                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$haha->keperluan}}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                    {{$haha->requester}}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$haha->keperluan}}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    {{$haha->kabupaten}}</td>

                                @if($haha->status == 'barangmasuk')
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-500 text-center sm:pl-6">
                                    {{$haha->jumlahbarang}}</td>

                                @else
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">
                                    -{{$haha->jumlahbarang}}</td>
                                @endif
                                @if($haha->status == 'barangmasuk')
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-500 text-center sm:pl-6">

                                    Barang Masuk
                                </td>

                                @else
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                    Barang Keluar
                                </td>
                                @endif
                            </tr>
                            @endforeach


                            <!-- More people... -->
                        </tbody>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center sm:pl-6">
                                    Total Barang
                                </td>
                                @foreach ($test as $testing)
                                @if($testing->barangsekarang <= 0) <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 text-center sm:pl-6">

                                    {{$testing->barangsekarang}}
                                    </td>
                                    @else
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-500 text-center sm:pl-6">

                                        {{$testing->barangsekarang}}
                                    </td>
                                    @endif
                                    @endforeach


                                    </td>

                            </tr>



                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection