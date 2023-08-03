@extends('layouts.app')

@section('title')
    Товары компании Альфасад
@endsection

@section('content')
    <div class="container items_list">
    <h1 class="text-center display-4">Товары компании Альфасад</h1>

    @if (count($items) > 0)
        <div class="row border border-dark bg-success" id="heading">
            <div class="col-3 border border-dark">uuid</div>
            <div class="col-3 border border-dark">Название</div>
            <div class="col-3 border border-dark">Количество</div>
            <div class="col-3 border border-dark">Цена</div>
        </div>

        @foreach ($items as $item)
            <div class="row border border-dark">
                <div class="col border border-dark">{{$item->uuid}}</div>
                <div class="col border border-dark">{{$item->name}}</div>
                <div class="col border border-dark">{{$item->amount}}</div>
                <div class="col border border-dark">{{$item->price}}</div>
            </div>
        @endforeach
    @else
        <p>Список товаров пуст</p>
    @endif
</div>

<br />
<div>
    <button type="button" class="btn btn-warning" id="hideShowItems">Показать/скрыть товары</button>
</div>


@endsection