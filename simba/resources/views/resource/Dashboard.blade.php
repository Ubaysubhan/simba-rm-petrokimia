@extends('layouts.main')
@section('container')
<div class="bg-white">
    <div class="max-w-7xl mt-24 mx-auto overflow-hidden sm:px-6 lg:px-8">
        <h2 class="sr-only">sa</h2>


        <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">
            @foreach($produk as $value)
            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">

                <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img class="mx-auto" src="{{ url('dist/'. $value->foto) }}" alt="TODO"
                        class="w-full h-full object-center object-cover">
                </div>

                <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                        <a href="/history/{{$value->id}}">
                            <span aria-hidden="true" class="absolute inset-0"></span>

                            {{$value->deskripsi}}

                        </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">

                        <div class="flex items-center text-center">
                            @if($value->barangsekarang <= 0) <p>
                                Stok Habis
                                </p>
                                @else
                                stok tersedia
                                @endif
                        </div>
                        <p class="mb-8 text-sm text-gray-500">{{$value->barangsekarang}}</p>
                    </div>
                    <a href="/history/{{$value->id}}" class=" mt-4 text-yellow-600 hover:text-indigo-900">History<span
                            class="sr-only"></span></a>

                </div>
            </div>
            @endforeach

            <!-- More products... -->
        </div>
    </div>
</div>
@endsection