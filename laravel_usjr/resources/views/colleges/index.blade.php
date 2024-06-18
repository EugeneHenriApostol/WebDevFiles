<h1>All Colleges</h1>
<ul>
    @foreach($colleges as $college)
    <li>
        {{ $college->collfullname }}
        <a href="{{ url('/show/college', $college->collid) }}">Show</a>
    </li>
    @endforeach
</ul>