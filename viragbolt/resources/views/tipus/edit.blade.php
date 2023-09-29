<form action="/api/tipuses{{$tipus->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <select name="virag_id" placeholder="Virag Id">
        @foreach ($virags as $virag)
            <option value="{{$virag->id}}" 
            {{$virag->id == $tipus->virag_id ? 'selected' : ''}}>
            {{$virag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>