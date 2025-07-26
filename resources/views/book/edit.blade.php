<x-layout>
    <x-slot:title></x-slot:title>
    <x-sidebar>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">edit data buku</h4>
      <form action="/book/{{$data->id}}/edit" method="post">
        @csrf
        @method('PUT')
        <div class="row g-3">
          <div class="col-12">
            <label for="title_bk" class="form-label">Judul Buku</label>
            <input
              class="form-control @error('title_bk') is-invalid @enderror"
              type="text"
              value="{{ $data->title_bk }}"
              class="form-control"
              id="title_bk"
              name="title_bk"
              placeholder="Judul Buku"
              autocomplete="off" />
            @error('title_bk')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
            <div class="col-12">
              <label for="category_id" class="form-label">Kategori Buku</label>
              <div class="input-group">
                <span class="input-group-text bg-primary text-white">
                  <i class='bx bx-user-plus'></i>
                </span>
                <select id="category_id" name="category_id" class="form-select">
                  <option value="{{ $data->category->id }}">{{ $data->category->name_ctgy }}</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{$category->name_ctgy}}</option>
                  @endforeach
                </select>
              </div>
              @error('category_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          <div class="col-12">
            <label for="price_bk" class="form-label">Harga Buku</label>
            <input
              class="form-control @error('price_bk') is-invalid @enderror"
              type="number"
              id="price_bk"
              value="{{ $data->price_bk }}"
              name="price_bk"
              placeholder="Harga Buku"
              required="on"
              autocomplete="off" />
            @error('price_bk')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="stock_bk" class="form-label">Stok Buku</label>
            <input
              class="form-control @error('stock_bk') is-invalid @enderror"
              type="number"
              id="stock_bk"
              name="stock_bk"
              value="{{ $data->stock_bk }}"
              placeholder="Stok Buku"
              required="on"
              autocomplete="off" />
            @error('stock_bk')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
            <div class="col-12">
              <label for="author_id" class="form-label">Penerbit Buku</label>
              <div class="input-group">
                <span class="input-group-text bg-primary text-white">
                  <i class='bx bx-user-plus'></i>
                </span>
                <select id="author_id" name="author_id" class="form-select">

                  <option value="{{ $data->author->id }}">{{$data->author->name_ath}}</option>
                  @foreach ($authors as $author)
                  <option value="{{ $author->id }}">{{$author->name_ath}}</option>
                  @endforeach
                </select>
              </div>
              @error('author_id')
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