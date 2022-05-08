@extends('layout')

@section('title')Автомобили @endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Make</th>
      <th scope="col">Model</th>
      <th scope="col">Color</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cars as $car)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $car->make }}</td>
        <td>{{ $car->model }}</td>
        <td>{{ $car->color }}</td>
        <td>{{ $car->year }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center">
  {{ $cars->withQueryString()->links() }}
</div>
@endsection