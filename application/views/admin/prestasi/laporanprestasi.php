<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Prestasi</title>
    <style>
        #outtable{
            padding: 25px;
            border: 3px solid #e3e3e3;
            width: 650px;
            border-radius: 10px;
        }
        .short{
            width: 50px;
        }
        .normal{
            width: 150px;
        }
        table{
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }
        thead th{
            text-align: center;
            padding: 15px;
        }
        tbody td{
            text-align: center;
            border-top: 3px solid #e3e3e3;
            padding: 2px;
        }
        tbody tr:nth-child even{
            background: #A6F5FA;
        }
        tbody tr:hover{
            background: #EAE9F5;
        }
    </style>
</head>
<body>
<div id="outtable">
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Prestasi</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Deskripsi </th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1;
                foreach ($prestasi as $prestasi): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $prestasi['nim']; ?></td>
                <td><?= $prestasi['prestasi'];?></td>
                <td><?= $prestasi['tgl_pelaksanaan']; ?></td>
                <td><?= $prestasi['deskripsi']; ?></td>
                
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>
