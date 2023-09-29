@foreach ($tipuses as $tipus)
    <form action="/api/tipuses/{{$tipus->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$tipus->title}}">
        </div>
    </form>
    @endforeach