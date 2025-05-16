<h2>Car List</h2>
 
<a href="{{ route('car.create') }}">Add Car</a>
 
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
 
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Merk</th><th>Model</th><th>Color</th><th>Year</th><th>Price</th><th>Image</th><th>Actions</th>
    </tr>
    @foreach ($cars as $car)
    <tr>
        <td>{{ $car->id }}</td>
        <td>{{ $car->merk->name }}</td>
        <td>{{ $car->model }}</td>
        <td>{{ $car->color }}</td>
        <td>{{ $car->year }}</td>
        <td>{{ $car->price }}</td>
        <td><img src="{{ asset('storage/'.$car->image) }}" width="100" alt="Car Image"></td>
        <td>
            <a href="">View</a> |
            <a href="">Edit</a>
            <form action="" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>