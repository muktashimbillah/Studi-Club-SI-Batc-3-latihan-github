<h2>TAmbah KAtegori</h2>

<form action="{{ route('kategori.store') }}" method="post">
   @csrf

   <div>
      <label for="nama_kategori">Nama Kategori</label>
      <input type="text" name="nama_kategori" id="nama_kategori">
   </div>

   <label for="deskripsi">Deskripsi</label>
   <div>
      <textarea rows="20" cols="30" name="deskripsi" id="deskripsi"></textarea>
   </div>

   <input type="submit" value="Buat Kategori">
</form>