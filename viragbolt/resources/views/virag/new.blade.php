<form action="/api/virags" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <select name="user_id" placeholder="User Id">
        @foreach ($tipuses as $$tipus)
            <option value="{{$tipus->id}}">{{$tipus->neve}}</option>
        @endforeach
    </select>
    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="Status">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>