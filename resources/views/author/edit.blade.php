<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <x-sidebar>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">edit data penerbit</h4>
      <form action="/author/{{$data->id}}/edit" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
          <div class="col-12">
            <label for="name_ath" class="form-label">Nama Penerbit</label>
            <input
              class="form-control @error('name_ath') is-invalid @enderror"
              type="text"
              value="{{ $data->name_ath }}"
              class="form-control"
              id="name_ath"
              name="name_ath"
              placeholder="Nama Penerbit"
              autocomplete="off" />
            @error('name_ath')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="address_ath" class="form-label">Alamat Penerbit</label>
            <input
              class="form-control @error('address_ath') is-invalid @enderror"
              type="text"
              id="address_ath"
              value="{{ $data->address_ath }}"
              name="address_ath"
              placeholder="Alamat Penerbit"
              required="on"
              autocomplete="off" />
            @error('address_ath')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="city_ath" class="form-label">Kota Penerbit</label>
            <input
              class="form-control @error('city_ath') is-invalid @enderror"
              type="text"
              id="city_ath"
              name="city_ath"
              value="{{ $data->city_ath }}"
              placeholder="Kota Penerbit"
              required="on"
              autocomplete="off" />
            @error('city_ath')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="phone_number_ath" class="form-label">No Telp Penerbit</label>
            <input
              class="form-control @error('phone_number_ath') is-invalid @enderror"
              type="text"
              id="phone_number_ath"
              name="phone_number_ath"
              value="{{ $data->phone_number_ath }}"
              placeholder="No Telp Penerbit"
              required="on"
              autocomplete="off" />
            @error('phone_number_ath')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <hr class="my-4" />
        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
      </form>
    </div>
    </x-sidebar>
</x-layout>