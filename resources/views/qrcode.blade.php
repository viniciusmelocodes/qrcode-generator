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

        .titulo-mesa {
            font-family: "TiltNeon";
            color: red;
            font-size: 33px;
        }
        
        .informacao {
            font-family: "TiltNeon";
            color: red;
        }
    </style>
</head>

<body>
    {{-- <div class="row">
        <img src="{{ asset('assets/images/regua.png') }}" alt="" srcset="">
    </div> --}}
    @php
        $url = 'https://sistemas.countryclubedegoias.com.br/webApp/components/menu.jsf?mesa=';
        $totalQrCodesPagina = 0;
        $totalQrCodes = count($qrCodes);
        // $totalQrCodes = 90;
    @endphp
    @for ($i = 0; $i < $totalQrCodes; $i++)
            @if ($i == 9 || $totalQrCodesPagina == 12)
                <div class="row" style="margin-top: 30px; margin-bottom: 165px">
                @php
                    $totalQrCodesPagina = 0;
                @endphp
            @elseif ($i < 3)
                <div class="row">
            @else
                <div class="row" style="margin-top: 30px;">
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
                        <p class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </p>
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
                        <p class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </p>
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
                        <p class="titulo-mesa">
                            <strong>
                                MESA {!! $qrCodes[$i] !!}
                            </strong>
                        </p>
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