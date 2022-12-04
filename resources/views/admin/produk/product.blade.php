<x-app-layout title="Produk">
    <!-- Breadcrumbs-->
    <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i>
                    Produk</a></li>
        </ol>
        <button type="button" data-bs-toggle="modal" data-bs-target="#tambah"
            class="btn btn-primary btn btn-sm m-2">Tambah</button>
    </nav> <!-- / Breadcrumbs-->
    @if (session()->has('success'))
    <div class="p-2">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
    @endif

    <!-- Bottom Row Widgets-->
    <div class="row g-4 mb-4">
        <!-- Projects Widget-->
        <div class="col-12">
            <div class="card mb-4 h-100 bg-white">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" style="color: black;" class="table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Spesifikasi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $i->name }}</td>
                                    {{-- <td>@formatUang((int)$i->price)</td> --}}
                                    <td>Rp. {{ number_format($i->price,2) }}</td>
                                    <td><button class="btn btn-sm btn-secondary">Detail</button></td>
                                    <td><button class="btn btn-sm btn-info">Detail</button></td>
                                    <td>
                                        <button id="{{ $i->slug }}" onclick="show(this.id)"
                                            class="btn btn-warning btn btn-sm">Edit</button>
                                        <form action="/admin/category/delete/{{ $i->id }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Projects Widget-->
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Nama Produk</label>
                                <input type="text" name="name" class="form-control form-control-light" id="name"
                                    placeholder="name">
                                @error('name')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Kategori Produk</label>
                                <select class="form-control form-control-light" name="category_id" id="category_id">
                                    @foreach ($cat as $i)
                                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Harga Produk</label>
                                <input type="number" name="price" class="form-control form-control-light" id="price"
                                    placeholder="1000000">
                                @error('price')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Spesifikasi Produk</label>
                                <textarea name="spesifikasi" id="spesifikasi"
                                    class="form-control form-control-light"></textarea>
                                @error('spesifikasi')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Gambar 1 Produk</label>
                                <input type="file" name="img1" class="form-control form-control-light" id="img1"
                                    placeholder="gambar 1">
                                @error('img1')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Gambar 2 Produk</label>
                                <input type="file" name="img2" class="form-control form-control-light" id="img2"
                                    placeholder="gambar 2">
                                @error('img2')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Gambar 3 Produk</label>
                                <input type="file" name="img3" class="form-control form-control-light" id="img3"
                                    placeholder="gambar 3">
                                @error('img3')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label form-label-light" for="name">Gambar 3 Produk</label>
                                <input type="file" name="img4" class="form-control form-control-light" id="img4"
                                    placeholder="gambar 4">
                                @error('img4')
                                <label class="form-label form-label-light">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="summit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="load-update"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    @slot('js')
    <script>
        $(document).ready( function () {
                $('#table').DataTable();
            } );

        function show(id){
            $.ajax({
                method : 'get',
                type : "json",
                url : '/admin/category/' + id,
            }).done(function(data){
                // console.log(data);
                $('#load-update').html(data);
                $('#edit').modal('show');
            })
        }
    </script>
    @endslot
</x-app-layout>