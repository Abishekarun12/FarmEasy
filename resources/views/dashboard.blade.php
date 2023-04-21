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

    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="https://abishek-portfolio.vercel.app/"
                        class="font-semibold text-lg bg-blue-500 hover:bg-blue-400 text-white py-3 px-10 rounded-full">Creators</a>
            </div>
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
