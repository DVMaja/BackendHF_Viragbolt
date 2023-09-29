@foreach ($termeks as $termek)
    <form action="/api/termeks/{{$task->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$termek->eladasi_ar}}">
            <input type="submit" value="{{$termek->virag->neve}}">
        </div>
    </form>
    @endforeach