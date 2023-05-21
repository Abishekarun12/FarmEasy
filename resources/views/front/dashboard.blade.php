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

                  <h1>Posts</h1>

    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <p>File Type: {{ $fileType }}</p>
            @if($fileType === 'image')
                <img src="{{ asset($post->path) }}" alt="Image">
            @elseif($fileType === 'audio')
                <audio controls>
                    <source src="{{ asset($post->path) }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            @elseif($fileType === 'video')
                <video controls>
                    <source src="{{ asset($post->path) }}" type="video/mp4">
                    Your browser does not support the video element.
                </video>
            @endif
        </div>
        <hr>
    @endforeach
                    {{-- @foreach(Storage::files('public/audio') as $file)    
                    <figure class='bcake'>
                        <div class='bcake__hero'>
                          {{-- <img src="https://images.unsplash.com/photo-1552689486-f6773047d19f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=3302&q=80" alt="birthday-cake" class="bcake__img"> --}}
                          
                          {{-- <video width="640" height="360" controls>
                              <source src="{{ asset(Storage::url($file)) }}" type="audio/mpeg">
                                          Your browser does not support the audio tag.
                              </video>
                              <br>    
                         <button class="font-semibold text-lg bg-red-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full"type="submit">Delete File</button>
                         <br>
                         <br> --}}
                          {{-- <a href="{{ asset(Storage::url($file)) }}"
                          class="font-semibold text-lg bg-blue-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full">Download Audio
                         </a>
                        </div>
                        <div class="bcake__content">
                          <div class="bcake__title">
                            <h2 class="bcake__heading">
                                <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><strong>{{ basename($file) }}</strong></h2>
                                {{-- <option value="{{ $file }}">{{ basename($file) }}</option> --}}
                               {{-- <br>
                            </h1>
                            <div class="bcake__tag bcake__tag--1">#Colorful</div>
                            <div class="bcake__tag bcake__tag--2">#bakemaster</div>
                          </div>
                           <p class="bcake__description">
                            {{-- {{ $post->title }} --}}
                          {{-- Perfect for a party, this rainbow-cake screams 'celebrate'! Super creamy vanilla icing fill with moist for a showstopping cake that adults and kids will love.
                        </p>
                          <div class="bcake__details">
                            <p class="bcake__detail">
                              <span class="emoji">🎉</span>
                              450 Kcal
                            </p>
                            <p class="bcake__detail">
                              <span class="emoji">⏱</span>
                              30 min
                            </p>
                            <p class="bcake__detail"> 
                              <span class="emoji">🌟</span>  --}}
                              {{-- highly rated
                            </p>
                          </div>
                        </div>
                        <div class="bcake__price">
                          $ 12.99
                        </div>
                      </figure>
                      @endforeach --}} --}}
            
            </section>
        </div>
    </div>
    
</x-front-layout>
