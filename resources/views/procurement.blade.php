<x-layout>
  <x-slot:title></x-slot:title>
  <x-sidebar>
    <x-searchbar url="/home" placeholder="search name of the book"/>
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
            <td>{{$data->id}}</td>
            <td>{{$data->title_bk}}</td>
            <td>{{$data->author->name_ath}}</td>
            <td>{{$data->stock_bk}}</td>
            @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>