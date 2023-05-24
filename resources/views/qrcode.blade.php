<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de QRCodes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">

    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tilt Neon' rel='stylesheet'>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

    <style>
        /* @font-face {
            font-family: "PlayfairDisplay";
            src: url("{{ asset('/assets/fonts/PlayfairDisplay-Bold.ttf') }}") format("truetype");
        }

        @font-face {
            font-family: "TiltNeon";
            src: url("{{ asset('/assets/fonts/TiltNeon-Regular.ttf') }}") format("truetype");
        } */

        .titulo {
            font-family: "Playfair Display";
            color: red;
            /* font-style: bold */
        }

        .titulo-mesa {
            font-family: "Tilt Neon";
            color: red;
            font-size: 33px;
        }
        
        .informacao {
            font-family: "Tilt Neon";
            color: red;
        }

        .espacamento {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .wcol4 {
            width: 255px;
        }

        .mlcol4 {
            margin-left: 50px;
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
        <div class="row espacamento">
            <div class="col-4"></div>
            <div class="col-4 wcol4 mlcol4">
                <div class="card border-danger">
                    <div class="card-body" style="padding: 3px !important;">
                        <center>
                            <h6 class="titulo">
                                <strong>
                                    Cardápio Country
                                </strong>
                            </h6>
                            {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                            <h2 class="titulo-mesa">
                                <strong>
                                    MESA {!! $qrCodes[$i] !!}
                                </strong>
                            </h2>
                            <h6 class="informacao">Aponte a câmera para o <br>QR Code e acesse o menu</h6>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="container">
            <hr>
        </div>
    @endfor
</body>

<script>
    $(function() {
        Swal.fire({
            title:'Pronto',
            html: 'Tudo foi gerado com sucesso.',
            icon: 'success',
            timer: 2500
        })
    })
</script>

</html>