<div>
     <h2>Add New  train</h2>
 </div>
 <div>
     <a href="{{ route('trains.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('trains.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" placeholder="Name">
     </div>
     <div>
        <strong>Category:</strong>
        <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
 </form>