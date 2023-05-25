<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de QRCodes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    {{-- <div class="row">
        <img src="{{ asset('assets/images/regua.png') }}" alt="" srcset="">
    </div> --}}
    @php
        $url = 'https://sistemas.countryclubedegoias.com.br/webApp/components/menu.jsf?mesa=';
        $totalQrCodesPagina = 0;
        $totalQrCodes = count($qrCodes);
        // $totalQrCodes = 95;
    @endphp
    @for ($i = 0; $i < $totalQrCodes; $i++)
        <div class="row">
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                    @php
                        $i++;
                    @endphp
                </center>
            </div>
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                    @php
                        $i++;
                    @endphp
                </center>
            </div>
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                    @php
                        $i++;
                    @endphp
                </center>
            </div>
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                    @php
                        $i++;
                    @endphp
                </center>
            </div>
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                    @php
                        $i++;
                    @endphp
                </center>
            </div>
            <div class="col-2">
                <center>
                    @if ($i < $totalQrCodes)
                        {!! QrCode::size(65)->generate($url . $qrCodes[$i]) !!}
                        <p>{!! $qrCodes[$i] !!}</p>
                    @endif
                </center>
            </div>
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