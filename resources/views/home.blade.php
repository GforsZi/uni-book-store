<x-layout>
    <x-slot:title></x-slot:title>
    <x-sidebar>
      <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Kategori Buku</th>
            <th scope="col">Harga Buku</th>
            <th scope="col">Stok Buku</th>
            <th scope="col">Penerbit Buku</th>
            <th scope="col">Dibuat pada</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->title_bk}}</td>
            <td>{{$data->category->name_ctgy}}</td>
            <td>RP {{$data->price_bk}}</td>
            <td>{{$data->stock_bk}}</td>
            <td>{{$data->author->name_ath}}</td>
            <td>{{$data->created_at}}</td>
            <td><a href="/home/book/{{$data->id}}/edit">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>