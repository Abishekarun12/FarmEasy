<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>                
                <p>Role : <b>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach 
                </b> </p>  
            </div>
        </main>
    </div>

   

    <section class="container my-8 w-15 shadow-md hover:shadow-2xl drop-shadow-2xl mt-10" style="border-radius: 6rem; background-color:">
        <div class="py-32 mx-8">
           {{-- <form action="{{ route('delete.file') }}" method="POST"> --}}
            @csrf
        @foreach(Storage::files('public/audio') as $file)
     <h2>{{ basename($file) }}</h2>
     {{-- <option value="{{ $file }}">{{ basename($file) }}</option> --}}
    

     <video width="640" height="360" controls>
        <source src="{{ asset(Storage::url($file)) }}" type="video/mpeg">
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
    {{-- <div class="table-responsive">
            <table class="text-left w-full border-collapse">
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
</div>
</x-app-layout>
