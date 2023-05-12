<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @if ($i == 10 || $totalQrCodesPagina == 12)
            <div class="row" style="margin-top: 27px; margin-bottom: 95px">
            @php
                $totalQrCodesPagina = 0;
            @endphp
        @elseif ($i < 4)
            <div class="row">
        @else
            <div class="row" style="margin-top: 27px;">
        @endif
            <div class="col-4">
                @if ($i <= $totalQrCodes)
                    <center>
                        <h3 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h3>
                        {!! QrCode::size(120)->generate($url . $item) !!}
                        <h5>
                            <strong>
                                MESA {!! $item !!}
                            </strong>
                        </h5>
                        <h6>Aponte a câmera para o <br>QR Code e acesse o menu</h6>
                    </center>
                    @php
                    $i++;
                    $totalQrCodesPagina++;
                    @endphp
                @endif
            </div>
            <div class="col-4">
                @if ($i <= $totalQrCodes)
                    <center>
                        <h3 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h3>
                        {!! QrCode::size(120)->generate($url . $item) !!}
                        <h5>
                            <strong>
                                MESA {!! $item !!}
                            </strong>
                        </h5>
                        <h6>Aponte a câmera para o <br>QR Code e acesse o menu</h6>
                    </center>
                    @php
                    $i++;
                    $totalQrCodesPagina++;
                    @endphp
                @endif
            </div>
            <div class="col-4">
                @if ($i <= $totalQrCodes)
                    <center>
                        <h3 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h3>
                        {!! QrCode::size(120)->generate($url . $item) !!}
                        <h5>
                            <strong>
                                MESA {!! $item !!}
                            </strong>
                        </h5>
                        <h6>Aponte a câmera para o <br>QR Code e acesse o menu</h6>
                    </center>
                    @php
                        $totalQrCodesPagina++;
                    @endphp
                @endif
            </div>
        </div>
        @php
        $i++;
        @endphp
</body>
</html>