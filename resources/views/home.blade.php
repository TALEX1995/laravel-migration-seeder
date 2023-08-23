<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trains</title>

  {{-- Import assets --}}
  @vite('resources/js/app.js')
</head>

<body>

  <div class="container d-flex">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Numero Treno</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Ora di Partenza</th>
          <th scope="col">Stazione di Arrivo</th>
          <th scope="col">Ora di Arrivo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
          <tr>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->getTime($train->departure_time) }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->getTime($train->arrival_time) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>

</body>

</html>
