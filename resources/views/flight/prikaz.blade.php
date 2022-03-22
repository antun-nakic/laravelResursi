<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>

  <table>
    <tr>
      <th>Aviokompanija</th>
      <th>Destinacija</th>
      <th>Izbriši let</th>
    </tr>
    <tr>
      <td>{{$kompanija}}</td>
      <td>{{$destinacija}}</td>
      <td>
        <form method="POST" action="{{route('flights.destroy',['flight'=>$id])}}">
          @csrf
          @method('DELETE')
          <button type="submit"><i class="fa-solid fa-trash"></i></button>
        </form>
      </td>
    </tr>
  </table>
</body>

</html>