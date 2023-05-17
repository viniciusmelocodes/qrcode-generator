<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de QRCodes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        @font-face {
            font-family: "PlayfairDisplay";
            src: url("{{ asset('/assets/fonts/PlayfairDisplay-Bold.ttf') }}") format("truetype");
        }
        @font-face {
            font-family: "TiltNeon";
            src: url("{{ asset('/assets/fonts/TiltNeon-Regular.ttf') }}") format("truetype");
        }

        .titulo {
            font-family: "PlayfairDisplay";
            color: red;
        }

        .titulo-mesa, .informacao {
            font-family: "TiltNeon";
            color: red;
        }
    </style>
</head>

<body>
    @php
        $url = 'https://sistemas.countryclubedegoias.com.br/webApp/components/menu.jsf?mesa=';
        $totalQrCodesPagina = 0;
        $totalQrCodes = count($qrCodes);
        // $totalQrCodes = 90;
    @endphp
    @for ($i = 0; $i < $totalQrCodes; $i++)
            @if ($i == 12 || $totalQrCodesPagina == 15)
                <div class="row" style="margin-top: 34px; margin-bottom: 95px">
                @php
                    $totalQrCodesPagina = 0;
                @endphp
            @else
                <div class="row" style="margin-top: 34px;">
            @endif
            <div class="col-4">
                @if ($i <= $totalQrCodes)
                    <center>
                        <h6 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h6>
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <h3 class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </h3>
                        <h6 class="informacao">Aponte a câmera para o <br>QR Code e acesse o menu</h6>
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
                        <h6 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h6>
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <h3 class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </h3>
                        <h6 class="informacao">Aponte a câmera para o <br>QR Code e acesse o menu</h6>
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
                        <h6 class="titulo">
                            <strong>
                                Cardápio Country
                            </strong>
                        </h6>
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <h3 class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </h3>
                        <h6 class="informacao">Aponte a câmera para o <br>QR Code e acesse o menu</h6>
                    </center>
                    @php
                        $totalQrCodesPagina++;
                    @endphp
                @endif
            </div>
        </div>
    @endfor

    <hr>
    <center>Lista de Códigos:</center>

    @for ($i = 0; $i < $totalQrCodes; $i++)
        <div class="row">
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                    @php
                        $i++;
                    @endphp
                @endif
            </div>
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                    @php
                        $i++;
                    @endphp
                @endif
            </div>
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                    @php
                        $i++;
                    @endphp
                @endif
            </div>
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                    @php
                        $i++;
                    @endphp
                @endif
            </div>
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                    @php
                        $i++;
                    @endphp
                @endif
            </div>
            <div class="col-2">
                @if ($i < $totalQrCodes)
                    <p>{!! $qrCodes[$i] !!}</p>
                @endif
            </div>
        </div>
    @endfor
</body>

</html>