<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <x-sidebar>
    <form action="/book/add" method="post" class="row">
      @csrf
      <div class="col my-1" style="min-width: 200px;">
        <div class="input-group">
          <span class="input-group-text bg-primary text-white">
            <i class='bx bx-user-plus'></i>
          </span>
          <select id="category_id" name="category_id" class="form-select">
            <option selected>Kategori Buku</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->name_ctgy}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col  my-1" style="min-width: 200px;">
        <input type="text" class="form-control" name="title_bk" placeholder="Nama Buku" aria-label="Nama Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" name="price_bk" placeholder="Harga Buku" aria-label="Kota Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" name="stock_bk" placeholder="Stok Buku" aria-label="No Telp Penerbit">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <div class="input-group">
          <span class="input-group-text bg-primary text-white">
            <i class='bx bx-user-plus'></i>
          </span>
          <select id="author_id" name="author_id" class="form-select">
            <option selected>Penerbit Buku</option>
            @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{$author->name_ath}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
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
            <td>{{$data->category->name_ctgy ?? 'deleted'}}</td>
            <td>{{$data->title_bk}}</td>
            <td>RP.{{$data->price_bk}}</td>
            <td>{{$data->stock_bk}}</td>
            <td>{{$data->author->name_ath ?? 'deleted'}}</td>
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