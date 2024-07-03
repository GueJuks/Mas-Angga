<html>

<head>
    {{-- <title>Rekomendasi {{ $isi }} Satuan Pendidikan</title> --}}
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 0.5cm;
            margin-left: 2.5cm;
            margin-right: 2.5cm;
            margin-bottom: 2.5cm;
        }

        #tborder table td th {
            border: 1px solid black;
        }

        td.right-align {
            text-align: right;
        }

        #tborder th {
            height: 50px;
        }

        table {
            border-collapse: collapse;
            font-size: 12px
        }

        tr {
            text-align: justify;
            text-justify: inter-word;
        }

        footer {
            position: fixed;
            bottom: 0.6cm;
            left: 0cm;
            right: 0cm;
            height: 1.2cm;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 0.3cm;
        }
    </style>
</head>

<body>
    <header>
        <table border="0">
            <tr>
                <td width="18%" align="center">
                    <img src="storage/logohitamputih.png"
                        style="max-width: 100%;vertical-align: middle;margin-bottom: 15px;">
                </td>
                <td align="center" style="vertical-align: middle;font-weight:bold ;">
                    <font style="color:#000000;font-size: 20px;">PEMERINTAH KABUPATEN SIDOARJO</font><br>
                    <font style="color:#000000;font-size: 23px;">DINAS PENDIDIKAN DAN KEBUDAYAAN</font><br>
                    <font style="font-size: 13px;">Jl. Pahlawan No. 4 Sidoarjo Kode Pos 61213</font><br>
                    <font style="font-size: 13px;">Email : pendidikan@sidoarjokab.go.id,
                        Website : dispendik.sidoarjokab.go.id</font>
                </td>
            </tr>
        </table>
        <hr style="margin-top: 0px;margin-bottom: 1px;border-top: 1px solid #000;">
        <hr style="margin-top: 0px;border-top: 5px solid #000;">
    </header>

    <footer>
        <table border="0" style="font-size: 8px;">
            <tr>
                <td class="right-align" width="30%" rowspan="3">
                    {{-- <img src="storage/logobsrebaru.png" style="max-width: 30%;vertical-align: middle;"> --}}
                </td>
                <td>
                    Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang
                    diterbitkan oleh BSrE
                </td>
            </tr>
            <tr>
                <td>
                    Legalitas berkas secara digital diatur oleh Dinas Komunikasi dan Informasi Kabupaten Sidoarjo
                </td>
            </tr>
            <tr>
                <td>
                    Untuk mengetahui keabsahan berkas silahkan lakukan verifikasi pada dokumen elektronik yang dapat
                    diunduh dengan melakukan scan QR Code
                </td>
            </tr>

        </table>
    </footer>

    <main>
        <table border="0" width="100%">
            <tr>
                <td width="10%" style="vertical-align:top" colspan="4">

                </td>
                <td width="90%" colspan="2">
                    Sidoarjo,
                    {{-- <?= $tglsurat ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top" colspan="6">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top" colspan="4">
                </td>
                <td width="90%" colspan="2">
                    Kepada
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                    Nomor
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="40%">
                    {{-- <?= $nosurat ?> --}}
                </td>
                <td width="2%" style="vertical-align:top">
                    Yth.
                </td>
                <td width="2%" style="vertical-align:top" colspan="2">
                    Kepala Dinas Penanaman Modal
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    Sifat
                </td>
                <td style="vertical-align:top">
                    :
                </td>
                <td style="vertical-align:top">
                    Penting
                </td>
                <td>

                </td>
                <td colspan="2">
                    dan Pelayanan Terpadu Satu Pintu
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    Lampiran
                </td>
                <td style="vertical-align:top">
                    :
                </td>
                <td style="vertical-align:top">
                    -
                </td>
                <td>
                </td>
                <td colspan="2">
                    di
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                    Perihal
                </td>
                <td style="vertical-align:top">
                    :
                </td>
                <td style="padding-right: 20px">
                    {{-- <?= $perihal ?> --}}
                </td>
                <td>

                </td>
                <td style="vertical-align:top;padding-left: 15px">
                    <b>SIDOARJO<b>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="100%">
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="90%" colspan="4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{-- <?= $header ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    1.
                </td>
                <td width="25%" style="vertical-align:top">
                    Nama Sekolah
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $nama_sekolah ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    2.
                </td>
                <td width="25%" style="vertical-align:top">
                    Alamat Sekolah
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $alamat_sekolah ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    3.
                </td>
                <td width="25%" style="vertical-align:top">
                    Nama Penyelenggara
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $nama_yayasan ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    4.
                </td>
                <td width="25%" style="vertical-align:top">
                    Alamat Penyelenggara
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $alamat_yayasan ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    5.
                </td>
                <td width="25%" style="vertical-align:top">
                    No dan Tanggal SK Menkumham
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $sk_menkumham ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    6.
                </td>
                <td width="25%" style="vertical-align:top">
                    Tahun Pendirian
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $tahun_pendirian ?> --}}
                </td>
            </tr>
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="2%" style="vertical-align:top">
                    7.
                </td>
                <td width="25%" style="vertical-align:top">
                    NIB Penyelenggara
                </td>
                <td width="2%" style="vertical-align:top">
                    :
                </td>
                <td width="48%" style="vertical-align:top">
                    {{-- <?= $nib ?> --}}
                </td>
            </tr>
            <tr>
                <td width="90%" colspan="5">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            {{-- <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="90%" colspan="4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{-- <?= $footer ?> --}}
                </td>
            </tr> --}}
            <tr>
                <td width="10%" style="vertical-align:top">
                </td>
                <td width="90%" colspan="4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian
                    rekomendasi ini dibuat sebagai bahan pertimbangan pemberian Izin {{ $isi }}
                    Sekolah. Atas perhatian Saudara diucapkan terima kasih.
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="100%">
            <tr>
                <td class="right-align" width="50%" colspan="3">
                    <?= $jabatan_ttd ?>
                </td>
                <td colspan="3">
                    KEPALA DINAS PENDIDIKAN DAN KEBUDAYAAN
                </td>
            </tr>
            <tr>
                <td width="50%" rowspan="5" colspan="3"></td>
                <td colspan="3">
                    KABUPATEN SIDOARJO
                </td>
            </tr>
            <tr>
                <td width="10%" rowspan="4">
                    {{-- <img src="storage/qrcode_rekomsekolah/{{ $foto_qrcode_rekom }}" --}}
                        style="max-width: 90%;vertical-align: middle;">
                </td>
                <td width="85%" colspan="2" style="font-size: 13px"></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 10px;">Ditandatangani secara
                    elektronik oleh</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 10px;">
                    {{-- <?= $nama_ttd?> --}}
                    <br>
                    NIP.
                    {{-- <?= $nip_ttd ?> --}}
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 13px"></td>
            </tr>
            <tr>
                <td width="40%" colspan="3"></td>
                <td colspan="3">
                    <b><u>
                            {{-- <?= $nama_ttd ?> --}}
                        </u></b>
                    <br>
                    {{-- <?= $pangkat_ttd ?> --}}
                    <br>
                    NIP.
                    {{-- <?= $nip_ttd ?> --}}
                    <br>
                </td>
            </tr>
        </table>
    </main>
</body>
{{--
<script type="text/javascript">
    window.onload = function() {
        window.print();
    }
    window.onafterprint = function() {
        window.close()
    };
</script> --}}

</html>