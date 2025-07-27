<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <x-sidebar>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">edit data kategori</h4>
      <form action="/category/{{$data->id}}/edit" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
          <div class="col-12">
            <label for="name_ctgy" class="form-label">Nama Kategori</label>
            <input
              class="form-control @error('name_ctgy') is-invalid @enderror"
              type="text"
              value="{{ $data->name_ctgy }}"
              class="form-control"
              id="name_ctgy"
              name="name_ctgy"
              placeholder="Nama Kategori"
              autocomplete="off" />
            @error('name_ctgy')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

        <hr class="my-4" />
        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
      </form>
    </div>        
    </x-sidebar>
</x-layout>