<x-layout>
    <x-slot:title></x-slot:title>
    <x-sidebar>
    <form action="/author/add" method="post" class="row">
      <div class="col  my-1" style="min-width: 200px;">
        <input type="text" class="form-control" placeholder="Nama Penerbit" aria-label="Nama Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" placeholder="Alamat Penerbit" aria-label="Alamat Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" placeholder="Kota Penerbit" aria-label="Kota Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" placeholder="No Telp Penerbit" aria-label="No Telp Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID Penerbit</th>
            <th scope="col">Nama Penerbit</th>
            <th scope="col">Alamat Penerbit</th>
            <th scope="col">Kota Penerbit</th>
            <th scope="col">No Telp Penerbit</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($author as $author)
          <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name_ath}}</td>
            <td>RP {{$author->address_ath}}</td>
            <td>{{$author->city_ath}}</td>
            <td>{{$author->phone_number_ath}}</td>
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a href="/author/{{$author->id}}/edit" class="dropdown-item text-warning">Edit</a></li>
                  <li>
                    <form action="/author/{{$author->id}}/delete" method="post">
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