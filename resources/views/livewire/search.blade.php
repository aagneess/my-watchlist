 <div class="col">

     <form class="form-inline" action="search" method="GET">
         <input wire:model.debounce.500ms="search" class="form-control  float-left" type="search" placeholder="Look for movies" aria-label="Search">
     </form>
     <div>

         <div wire:loading class="spinner"></div>

         @if (strlen($search) >= 2)
         <div class="absolute w-100" x-show.transition.opacity="isOpen">
             @if ($searchResults->count() > 0)

             <ul class="list-unstyled">
                 @foreach ($searchResults as $result)
                 <li class="">
                     <a href="{{ route('movie', $result['id']) }}" class="" @if ($loop->last) @keydown.tab="isOpen = false" @endif
                         >
                         @if ($result['poster_path'])
                         <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                         @else
                         <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                             <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                             <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                         </svg>
                         @endif
                         <span class="">{{ $result['title'] }}</span>
                     </a>
                 </li>
                 @endforeach

             </ul>

             @else
             <div class="">No results for "{{ $search }}"</div>
             @endif
         </div>
         @endif
     </div>
 </div>
 </div>