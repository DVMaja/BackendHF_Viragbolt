@foreach ($termeks as $termek)
    <form action="/api/virags/{{$virag->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$virag->neve}}">
            <input type="submit" value="{{$virag->tipus->neve}}">
        </div>
    </form>
    @endforeach