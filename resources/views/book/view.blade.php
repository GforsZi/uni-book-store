<x-layout>
    <x-slot:title></x-slot:title>
    <x-sidebar>
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
            <th scope="col">Opsi</th>
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
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a href="/book/{{$data->id}}/edit" class="dropdown-item text-warning">Edit</a></li>
                  <li>
                    <form action="/book/{{$data->id}}/delete" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="dropdown-item text-danger" type="submit">Hapus</button>
                    </form>
                  </li>
                </ul>
              </div>
            </td>
            @endforeach
        </tbody>
      </table>
    </div>
    </x-sidebar>
</x-layout>