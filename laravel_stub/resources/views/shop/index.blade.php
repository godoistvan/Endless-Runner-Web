@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row" style="min-height: 25px;"></div>

  <div class="row">
    @php $staticPacks = [
      ['title' => '500 Ecoin', 'desc' => 'Buy 500 Ecoin here for only 5$ and get 30 extra'],
      ['title' => '1000 Ecoin', 'desc' => 'Buy 1000 Ecoin for only 10$ and get 150 extra'],
      ['title' => '2000 Ecoin', 'desc' => 'Buy 2000 Ecoin for only 20$ and get 500 extra'],
      ['title' => '5000 Ecoin', 'desc' => 'Buy 5000 Ecoin for only 50$ and get 1500 extra'],
    ]; @endphp
    @foreach($staticPacks as $p)
      <div class="col-3">
        <div class="card">
          <img src="{{ asset('img/tempcoin.jpg') }}" alt="#" style="min-height: 25vh; max-height: 25vh;">
          <div class="card-body">
            <div style="min-height: 20vh; max-height: 20vh;">
              <h5 class="card-title"></h5>
              <p class="blockquote">{{ $p['title'] }}</p>
              <p class="blockquote-footer">{{ $p['desc'] }}</p>
            </div>
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <div class="input-group">
                <button type="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                <input type="hidden" name="termekID" value="0">
              </div>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="row mt-4">
    <div class="col-md-12" style="text-align:center">
      <h1>Weekly deals</h1>
    </div>
    <div class="row w-100">
      @php $valami = 2; @endphp
      @foreach($items as $row)
        @if($row->onsale)
        <div class="col-3">
          <div class="card">
            <img src="{{ asset('img/' . $row->img) }}" alt="#" style="min-height: 40vh; max-height: 40vh;">
            <div class="card-body" style="min-height: 25vh; max-height: 25vh;">
              <h5 class="card-title">{{ $row->name }}</h5>
              <p class="blockquote">{{ $row->description }}</p>
              <p class="blockquote-footer">{{ $row->price / $valami }} Ecoin 50% off!</p>
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <div class="input-group">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                  <input type="hidden" name="termekID" value="{{ $row->id }}">
                </div>
              </form>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
</div>
@endsection

