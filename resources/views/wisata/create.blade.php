<h1>Tambah Wisata</h1>

<form action="/wisata" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="nama_wisata" placeholder="Nama Wisata">
    <br><br>

    <input type="text" name="lokasi" placeholder="Lokasi">
    <br><br>

    <textarea name="deskripsi" placeholder="Deskripsi"></textarea>

    <br><br>

    <input type="file" name="gambar">

    <br><br>

    <button type="submit">Simpan</button>
</form>