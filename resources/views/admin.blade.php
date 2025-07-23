<x-layout>
  <x-slot:title></x-slot:title>
  <x-sidebar>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Penerbit</th>
            <th scope="col">Alamat Penerbit</th>
            <th scope="col">Kota Penerbit</th>
            <th scope="col">No Telp Penerbit</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $data)
          <tr>
            <td>{{$data->author->id}}</td>
            <td>{{$data->author->name_ath}}</td>
            <td>{{$data->author->address_ath}}</td>
            <td>{{$data->author->city_ath}}</td>
            <td>{{$data->author->phone_number_ath}}</td>
            <td class="d-flex">
              <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  opsi
                </button>
                <ul class="dropdown-menu">
                  <li><a href="/home/book/{{$data->id}}/edit" class="dropdown-item text-warning">Edit</a></li>
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