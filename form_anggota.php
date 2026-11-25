<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Anggota Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #1f3864; }
        label { font-weight: bold; }
        .sukses { background: #e6f4ea; border-left: 5px solid #2e7d32;
                  padding: 10px; width: 350px; }
    </style>
</head>
<body>
    <h1>Pendaftaran Anggota Perpustakaan</h1>
    <a href = data.php>Lihat Daftar Anggota</a><br>
    <?php if (isset($_GET["status"]) && $_GET["status"] == "sukses") { ?>
        <p class="sukses">Data anggota berhasil disimpan.</p>
    <?php } ?>

    <br>
    <form action="proses_anggota.php" method="post">
        <label>Nomor Anggota</label><br>
        <input type="text" name="no_anggota"><br><br>

        <label>Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap"><br><br>

        <label>Email</label><br>
        <input type="text" name="email"><br><br>

        <label>Nomor HP</label><br>
        <input type="text" name="no_hp"><br><br>

        <label>Jenis Anggota</label><br>
        <select name="jenis_anggota">
            <option value="">-- Pilih Jenis Anggota --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
        </select><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="4" cols="30"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
