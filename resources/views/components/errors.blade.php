{{-- errors общий список ошибок --}}

@if ($errors->any())
   <div class="alert alert-danger p-1">
      <ul class="mb-0">
         @foreach ($errors->all() as $message)
         <li>
            {{$message}}
         </li>
         @endforeach
      </ul>
   </div>
@endif