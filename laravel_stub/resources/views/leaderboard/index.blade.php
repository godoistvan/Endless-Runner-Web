@extends('layouts.app')

@section('content')
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card" style="border-radius: 5px;">
          <div class="card-body p-2">
            <form action="{{ route('leaderboard.search') }}" method="post">
              @csrf
              <input type="text" name="searchplayer" id="searchplayer" placeholder="Enter the name of a player" class="form-control form-control-lg" value="{{ old('searchplayer', $searched ?? '') }}">
              <button type="submit" name="submit" class="btn btn-primary mt-2">Search</button>
            </form>
            <table class="table mt-3">
              <tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>
              @forelse($rows as $r)
                <tr>
                  <td>{{ $r->name }}</td>
                  <td>{{ $r->highscore }}</td>
                  <td>{{ $r->rank }}</td>
                  <td>{{ $r->elo }}</td>
                </tr>
              @empty
                <tr><td colspan="4" class="text-muted">No results</td></tr>
              @endforelse
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

