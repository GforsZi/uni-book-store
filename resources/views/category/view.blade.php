<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <x-sidebar>
    <form action="/category/add" method="post" class="row">
      @csrf
      <div class="col my-1" style="min-width: 200px;">
        <input type="text" class="form-control" name="name_ctgy" placeholder="Nama Kategori" aria-label="Nama Kategori">
      </div>
      <div class="col my-1" style="min-width: 200px;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID Kategori</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($category as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name_ctgy}}</td>
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a href="/category/{{$category->id}}/edit" class="dropdown-item text-warning">Edit</a></li>
                  <li>
                    <form action="/category/{{$category->id}}/delete" method="post">
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