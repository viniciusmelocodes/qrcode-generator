<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de QRCodes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    @for ($i = 1; $i <= 50; $i++) 
        <div class="row" style="margin-bottom: 8px">
            <div class="col-3">
                <center>
                    {!! QrCode::size(165)->generate('http://177.11.150.210:8001/webApp?mesa=' . $i) !!}
                </center>
                @php
                $i++;
                @endphp
            </div>
            <div class="col-3">
                <center>
                    {!! QrCode::size(165)->generate('http://177.11.150.210:8001/webApp?mesa=' . $i) !!}
                </center>
                @php
                $i++;
                @endphp
            </div>
            <div class="col-3">
                <center>
                    {!! QrCode::size(165)->generate('http://177.11.150.210:8001/webApp?mesa=' . $i) !!}
                </center>
                @php
                $i++;
                @endphp
            </div>
            <div class="col-3">
                <center>
                    {!! QrCode::size(165)->generate('http://177.11.150.210:8001/webApp?mesa=' . $i) !!}
                </center>
            </div>
        </div>
    @endfor
</body>

</html>