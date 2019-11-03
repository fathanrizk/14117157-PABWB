<html>
<head>
<title> form biodata </title>
</head>
<body>
  <form action="Tugas_hasil.php" method="GET">

    <label>Nama : </label>
    <input type="text" name="nama" required><br>

    <label> Alamat : </label>
    <input type="text" name="alamat"><br>

    <br><label> Jenis kelamin : </label>
    <input type="radio" name="jk" value="laki-laki"> laki-laki
    <input type="radio" name="jk" value="perempuan"> perempuan

    <br><label> Golongan darah : </label>
    <select name = "golongan">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select><br>

    <br><label>Hobby : </label><br>
    <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
    <input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
    <input type="checkbox" name="hobi[]" value="Makan">Makan<br>
    <input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
    <input type="checkbox" name="hobi[]" value="Snorkling">Snorkling<br>
    <input type="checkbox" name="hobi[]" value="Mantai">Mantai<br>

    <br><label>Keterangan : </label>
    <textarea name= "Ket"> </textarea><br>
    <input type="submit" value="kirim">
    </form>
  </body>
</html>
