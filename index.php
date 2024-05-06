<!DOCTYPE html>
<html>
<head>
    <title>Menu Cafe</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="menu-cafe"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'get_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>ID</th><th>Nama Menu</th><th>Harga</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].id + '</td>';
                    html += '<td>' + data[i].nama_menu + '</td>';
                    html += '<td>' + data[i].harga + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#menu-cafe').html(html);
            },
            error: function(xhr, status, error) {
                console.error("Terjadi kesalahan: " + error);
            }
        });
    });
    </script>
</body>
</html>
