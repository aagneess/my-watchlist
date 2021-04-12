 <div class="col">

     <form class="form-inline" action="search" method="GET">
         <input wire:model.debounce.500ms="search" class="form-control  float-left" type="search" placeholder="Look for movies" aria-label="Search">
     </form>
     <div>

         <div wire:loading class="spinner"></div>

         @if (strlen($search) >= 2)
         <div class="absolute" x-show.transition.opacity="isOpen">
             @if ($searchResults->count() > 0)
             <ul class="list-unstyled">
                 @foreach ($searchResults as $result)
                 <li class="">
                     <a href="{{ route('movies.show', $result['id']) }}" class="" @if ($loop->last) @keydown.tab="isOpen = false" @endif
                         >
                         @if ($result['poster_path'])
                         <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                         @else
                         <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
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