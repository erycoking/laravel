@extends('main_layout')

@section('content')

<div class="container">
  <div class="span12">
    <div class="row">
      <ul class="thumbnails">
        @foreach($books as $book)
        <li class="span4">
          <div class="thumbnail">
            <img src="/images/{{$book['cover']}}" alt="ALT NAME">
            <div class="caption">
              <h3>{{$book['title']}}</h3>
              <p>Author : <b>{{$book->author['name']}} {{$book->author['surname']}}</b></p>
              <p>Price : <b>{{$book['price']}}</b></p>
              <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="book" value="{{$book['id']}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@stop