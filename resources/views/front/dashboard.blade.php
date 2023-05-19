<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!, Get Multiple Ideas for Your plantations
                </div>
            </div>
            
            <div class="table-responsive">
                {{-- <table class="text-left w-full border-collapse">
                    <thead>
                      <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Name</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-4/12">Ideas</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-3/12">Uploads</th>
                      </tr>
                    </thead>
                    <tbody>
                </table> --}}

               
            </div>
            
            <section class="container my-8 w-15 shadow-md hover:shadow-2xl drop-shadow-2xl mt-10" style="border-radius: 6rem; background-color:">
                <div class="py-32 mx-8">
                   {{-- <form action="{{ route('delete.file') }}" method="POST"> --}}
                    @csrf
                @foreach(Storage::files('public/audio') as $file)
             <h2>{{ basename($file) }}</h2>
             {{-- <option value="{{ $file }}">{{ basename($file) }}</option> --}}
            

             <video width="640" height="360" controls>
                <source src="{{ asset(Storage::url($file)) }}" type="audio/mpeg">
                            Your browser does not support the audio tag.
             </video>
              <button class="font-semibold text-lg bg-red-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full"type="submit">Delete File</button>
                <br>
                <br>
             <a href="{{ asset(Storage::url($file)) }}"
             class="font-semibold text-lg bg-blue-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full">Download Audio
             </a>
            @endforeach
                </div>
            </section>
        </div>
    </div>
    
</x-front-layout>
