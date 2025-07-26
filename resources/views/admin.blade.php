<x-layout>
  <x-slot:title></x-slot:title>
  <x-sidebar>
    <x-searchbar url="/home" placeholder="search name of the book"/>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Penerbit</th>
            <th scope="col">Alamat Penerbit</th>
            <th scope="col">Kota Penerbit</th>
            <th scope="col">No Telp Penerbit</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name_ath}}</td>
            <td>{{$data->address_ath}}</td>
            <td>{{$data->city_ath}}</td>
            <td>{{$data->phone_number_ath}}</td>
            @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>