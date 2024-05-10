<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sertifikat {{ $cetaksp->nama_sp }}</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<body class="A4 potrait">
    <section class="sheet padding-10mm">
        <table width="100%" style="border:1px solid #000000;">
            <tr>
                <td>
                </td>
            </tr>
        </table>
    </section>

</body>

</html>
