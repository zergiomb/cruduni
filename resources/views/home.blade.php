

@forelse ($users as $userItem)
    
<li>
    {{$userItem->name }}
    
    {{$userItem->surname }}
   <br>
   {{$userItem->code}}
</li>
@empty
    
@endforelse
