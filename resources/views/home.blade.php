<x-layout>
  <x-slot:title></x-slot:title>
  <x-sidebar>
    <x-searchbar url="/home" placeholder="search name of the book">
      <option value="1">ID Buku</option>
      <option value="2">Kategori Buku</option>
      <option value="3">Nama Buku</option>
      <option value="3">Harga Buku</option>
      <option value="3">Stok Buku</option>
      <option value="3">Penerbit Buku</option>
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
            <td>{{$data->category->name_ctgy}}</td>
            <td>{{$data->title_bk}}</td>
            <td>RP {{$data->price_bk}}</td>
            <td>{{$data->stock_bk}}</td>
            <td>{{$data->author->name_ath}}</td>
            @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>