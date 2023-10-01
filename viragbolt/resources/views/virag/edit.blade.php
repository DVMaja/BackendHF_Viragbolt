<form action="/api/virags{{$virag->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}    
    <input type="text" name="eladasi_ar" placeholder="eladasi_ar">
    <select name="virag_id">
        @foreach ($virags as $virag)
            <option value="{{$virag->id}}" 
            {{$virag->id == $virag->virag_id ? 'selected' : ''}}>
            {{$virag->name}}</option>
        @endforeach
    </select>