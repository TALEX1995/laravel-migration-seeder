<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trains</title>
</head>

<body>
  @foreach ($trains as $train)
    <p>Il treno in arrivo da {{ $train->departure_station }} e diretto a {{ $train->arrival_station }},
      @php echo $train->in_time ? 'non sta subendo ritardo' : 'sta subendo ritardo' @endphp
    </p>
  @endforeach
</body>

</html>
