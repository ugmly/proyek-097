<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Tiket</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('<?php echo base_url('assets/images/5.jpg'); ?>');
            background-size: cover;
            background-position: center;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9); /* Opacity agar lebih terlihat */
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .print-button {
            text-align: center;
            margin-top: 20px;
        }
        .print-button button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .print-button button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Tiket</h2>
        <table>
            <tr>
                <th style="width: 30%;">ID</th>
                <td style="width: 70%;"><?php echo $tiket['id']; ?></td>
            </tr>
            <tr>
                <th>No. Kursi</th>
                <td><?php echo $tiket['no_kursi']; ?></td>
            </tr>
            <tr>
                <th>Judul Film</th>
                <td><?php echo $tiket['judul_film']; ?></td>
            </tr>
            <tr>
                <th>Jadwal Tayang</th>
                <td><?php echo $tiket['jadwal_tayang']; ?></td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td><?php echo $tiket['kategori_tiket']; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $tiket['harga_tiket']; ?></td>
            </tr>
            <tr>
                <th>Pembayaran</th>
                <td><?php echo $tiket['metode_pembayaran']; ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $tiket['tanggal']; ?></td>
            </tr>
        </table>
        <div class="print-button">
            <button onclick="window.print();">Cetak Tiket</button>
        </div>
    </div>
</body>
</html>
