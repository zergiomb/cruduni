

@section('title','Home')
    
    
<h1>@lang('Home')
    <br>
{{ auth()->user()}}

</h1>
    @forelse ($users as $userItem)
   
        <li>
        {{$userItem->name }}
    
         {{$userItem->surname }}
        <br>
        {{$userItem->code}}
        <br>
        {{$userItem->email}}
        <br>
        {{$userItem->nationality}}
        <br>
        {{$userItem->city}}
        <br>
        {{$userItem->direction}}
        <br>
        {{$userItem->phone}}
        </li>


        @empty

        @endsection
    @endforelse
   
    
