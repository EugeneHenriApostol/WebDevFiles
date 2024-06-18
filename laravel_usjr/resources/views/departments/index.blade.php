<h1>Departments</h1>
<ul>
    @foreach ($departments as $department)
    <li>
        {{ $department->deptfullname }} ({{ $department->college->collfullname }})
    </li>
    @endforeach
</ul>