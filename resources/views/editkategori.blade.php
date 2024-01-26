<h2>Edit KAtegori</h2>

<form action="{{ route('kategori.update', $kategori->id) }}" method="post">
   @csrf @method('put')

   <div>
      <label for="nama_kategori">Nama Kategori</label>
      <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori}}">
   </div>

   <label for="deskripsi">Deskripsi</label>
   <div>
      <textarea rows="20" cols="30" name="deskripsi" id="deskripsi">{{$kategori->deskripsi}}</textarea>
   </div>

   <input type="submit" value="Edit Kategori">
</form>