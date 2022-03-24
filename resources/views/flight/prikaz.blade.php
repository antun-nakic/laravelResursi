@extends('layouts.nasLayout')

@section('title', 'Prikaz leta')

@push('skripte')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" />
@endpush

@section('sadrzaj')
<table>
  <tr>
    <th>Aviokompanija</th>
    <th>Destinacija</th>
    <th>Izbriši let</th>
  </tr>
  <tr>
    <td>{{$let->aviokompanija}}</td>
    <td>{{$let->destinacija}}</td>
    <td>
      <form method="POST" action="{{route('flights.destroy',['flight'=>$let->id])}}">
        @csrf
        @method('DELETE')
        <button type="submit"><i class="fa-solid fa-trash"></i></button>
      </form>
    </td>
  </tr>
</table>
@endsection