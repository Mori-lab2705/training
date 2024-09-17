<div>
    <h2>Edit Train</h2>
</div>
<div>
    <a href="{{ route('trains.index') }}"> Back</a>
</div>

<form action="{{ route('trains.update' ,$train->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
         <strong>Name:</strong>
         <input type="text" name="name" value="{{$train->name}}" placeholder="Name">
    </div>
    <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
             @if ($category->id == $train->category_id)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endif
         @endforeach
         </select>
     </div>
    <div>
        <button type="submit">Submit</button>
    </div>
 </form>