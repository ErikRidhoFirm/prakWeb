<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: left;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 33px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 20px;
            text-align: left;
            font-size: 18px;
            color: #333;
        }

        th {
            background-color: white;
            color: black;
            padding: 20px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Identitas Dosen</h2>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <?php
                $Dosen = [
                    'nama' => 'Elok Nur Hamdana',
                    'domisili' => 'Malang',
                    'jenis_kelamin' => 'Perempuan'
                ];
                echo $Dosen['nama'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>
                <?php
                echo $Dosen['domisili'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <?php
                echo $Dosen['jenis_kelamin'];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
