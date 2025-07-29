<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <x-sidebar>
    <x-searchbar url="/procurement" placeholder="search">
      <option value="id">ID Buku</option>
      <option value="title_bk">Nama Buku</option>
      <option value="author_id">ID Penerbit Buku</option>
    </x-searchbar>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Penerbit Buku</th>
            <th scope="col">Stok Buku</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->title_bk}}</td>
            <td>{{$data->author->name_ath ?? 'deleted'}}</td>
            <td>{{$data->stock_bk}}</td>
            @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>