<form action="/api/tipuses" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <select name="virag_id" placeholder="Virag Id">
        @foreach ($virags as $virag)
            <option value="{{$virag->id}}">{{$virag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>