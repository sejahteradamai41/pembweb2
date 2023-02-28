<!DOCTYPE html>
<html lang="en">
<head>
    <title>pratikum2 - form heading</title>
</head>
<body>
    
</body>
    <h1>Belajar Form Heading 1</h1>
    <form action="belajar_POST.php" method="POST">
        <!-- tpe radio -->
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="">jenis kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki laki"> <span>Laki_laki</span><br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> <span>Perempuan</span><br><br>

        <label for="hobi">hobi</label><br>
        <input type="checkbox" name="hobi[]"value="lari"><span>Lari</span><br>
        <input type="checkbox" name="hobi[]"value="berenang"><span>Bernang</span><br>
        <input type="checkbox" name="hobi[]"value="voli"><span>Volly</span><br><br>

        <!--  -->
        <label for="umur"></label><br>
        <input type="number" name="umur"><br>

        <!-- tipe date /tanggal -->
        <label for="tanggal_lahir">tanggal lahir</label><br>
        <input type="date" name="tanggal_lahir"><br>

            <!--  -->
        <label for="">prodi</label><br>
        <select name="prodi"><br>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sitem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
     </select><br><br>

     <!--  -->
     <button type="submit">Simpan</button>
     <button type="reset">Reset</button>

    </form>
</html>