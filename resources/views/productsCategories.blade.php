@extends('layouts.app')

@section('title')
    Товары и категории
@endsection


@section('content')
    @foreach ($results as $item)
        <h2>{{$item['NAME']}}</h2>
        <ul class="list-group">
            @foreach ($item['CATEGORIES'] as $productCategory)
                <li class="list-group-item">{{$productCategory}}</li>
            @endforeach
        </ul>
        <br />
    @endforeach
@endsection