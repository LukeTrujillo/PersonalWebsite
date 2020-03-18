
<div class="col mb-4">
  <div class="card h-100">
      <img src="@isset($path) {{ $path }} @endisset" class="mr-3 img-fluid d-block mx-auto my-auto rounded">
     <div class="card-body">
       <p class="mt-0 lead text-primary mb-0 card-title"><b>{{ $name }}</b></p>
       <p class="card-text">{{ $slot }}</p>

       @isset($button)
        {{ $button }}
       @endisset
     </div>
   </div>
</div>
