<nav class="navbar navbar-expand-lg pt-0 pb-4">
    <div class="list-group list-group-horizontal w-100">

        @foreach (\App\Category::all() as $category)
            <a href="/dashboard/{{ $category->id }}/yearly" class="list-group-item list-group-item-action text-center text-white bg-{{ $category->id }} @if( $id == $category->id ) current current-{{ $category->id }} @endif"> {{ $category->name }} </a>
        @endforeach

        <a href="/monitoring" class="list-group-item list-group-item-action text-center text-white bg-0 @if($id==99) current current-0 @endif"> Monitoring </a>
    </div>
</nav>