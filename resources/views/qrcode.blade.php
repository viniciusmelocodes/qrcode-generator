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
        }

        h3, h5, h6 {
            font-family: "TiltNeon";
            color: red;
            margin-top: 3px;
        }
    </style>
</head>

<body>
    @php
        $url = 'https://sistemas.countryclubedegoias.com.br/webApp/components/menu.jsf?mesa=';
        $totalQrCodesPagina = 0;
    @endphp
    @for ($i = 0; $i < count($qrCodes); $i++)
            @if ($i == 9 || $totalQrCodesPagina == 11)
                <div class="row" style="margin-top: 27px; margin-bottom: 95px">
                @php
                    $totalQrCodesPagina = 0;
                @endphp
            @elseif ($i < 3)
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
                        {!! QrCode::size(80)->generate($url . $qrCodes[$i]) !!}
                        <h5>
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
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
                        {!! QrCode::size(80)->generate($url . $qrCodes[$i]) !!}
                        <h5>
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
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
                        {!! QrCode::size(80)->generate($url . $qrCodes[$i]) !!}
                        <h5>
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
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
    @endfor
</body>

</html>