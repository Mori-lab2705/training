<a href="{{ route('trains.create') }}">Create New Train</a>

<table>
    <tr>
        <th>Name</th>
        <th>Category ID</th>
    </tr>
    @foreach ($trains as $train)
    <tr>
        <td>{{ $train->name }}</td>
        <td>{{ $train->category_id}}</td>
        <td>
            <form action="{{ route('trains.destroy', $train->id) }}" method="POST">
                <a href="{{ route('trains.show', $train->id) }}">Show</a>
                <a href="{{ route('trains.edit', $train->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form> 
        </td>
    </tr>
    @endforeach
</table>

