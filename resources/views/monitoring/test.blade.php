@foreach ($grouped as $item)
    
    <div style="color:red"> {{ $item->first()->category }}  </div>

    @foreach ($item as $i)
        
        {{ $i->name }} <br />

    @endforeach

@endforeach