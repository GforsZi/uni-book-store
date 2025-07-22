<x-layout>
    <x-slot:title></x-slot:title>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Add data kelas</h4>
      <form action="/kelas/add" method="post" class="needs-validation" novalidate>
        @csrf
        <div class="row g-3">
          <div class="col-12">
            <label for="kelas_ke" class="form-label">Judul Buku</label>
            <input
              value="{{old('kelas_ke')}}"
              class="form-control @error('kelas_ke') is-invalid @enderror"
              type="number"
              class="form-control"
              id="kelas_ke"
              name="kelas_ke"
              placeholder="kelas_ke"
              autocomplete="off" />
            @error('kelas_ke')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="lokasi" class="form-label">Kategori Buku</label>
            <input
              value="{{old('lokasi')}}"
              class="form-control @error('lokasi') is-invalid @enderror"
              type="text"
              id="lokasi"
              name="lokasi"
              placeholder="lokasi"
              required="on"
              autocomplete="off" />
            @error('lokasi')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="angkatan" class="form-label">Harga Buku</label>
            <input
              value="{{old('angkatan')}}"
              class="form-control @error('angkatan') is-invalid @enderror"
              type="number"
              id="angkatan"
              name="angkatan"
              placeholder="angkatan"
              required="on"
              autocomplete="off" />
            @error('angkatan')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="angkatan" class="form-label">Stok Buku</label>
            <input
              value="{{old('angkatan')}}"
              class="form-control @error('angkatan') is-invalid @enderror"
              type="number"
              id="angkatan"
              name="angkatan"
              placeholder="angkatan"
              required="on"
              autocomplete="off" />
            @error('angkatan')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="angkatan" class="form-label">Penerbit Buku</label>
            <input
              value="{{old('angkatan')}}"
              class="form-control @error('angkatan') is-invalid @enderror"
              type="number"
              id="angkatan"
              name="angkatan"
              placeholder="angkatan"
              required="on"
              autocomplete="off" />
            @error('angkatan')
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
</x-layout>