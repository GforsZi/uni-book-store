<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <x-sidebar>
    <x-searchbar url="/home" placeholder="search">
      <option value="id">ID Buku</option>
      <option value="category_id">ID Kategori Buku</option>
      <option value="title_bk">Nama Buku</option>
      <option value="price_bk">Harga Buku</option>
      <option value="stock_bk">Stok Buku</option>
      <option value="author_id">ID Penerbit Buku</option>
    </x-searchbar>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID Buku</th>
            <th scope="col">Kategori Buku</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Harga Buku</th>
            <th scope="col">Stok Buku</th>
            <th scope="col">Penerbit Buku</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->category->name_ctgy ?? 'deleted'}}</td>
            <td>{{$data->title_bk}}</td>
            <td>RP.{{$data->price_bk}}</td>
            <td>{{$data->stock_bk}}</td>
            <td>{{$data->author->name_ath ?? 'deleted'}}</td>
            @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>