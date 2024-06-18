<h1> {{ $college->collfullname }} </h1>
<h2>Departments</h2>
<ul>
    @foreach ($college->departments as $departments)
    <li>{{ $departments->deptfullname }}</li>
    @endforeach
</ul>
<h2>Programs</h2>
<ul>
    @foreach ($college->programs as $programs)
    <li>{{ $programs->progfullname }}</li>
    @endforeach
</ul>
<a href="{{ url('/show/colleges') }}">Back to List</a>