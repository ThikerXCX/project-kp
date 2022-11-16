<x-app-layout title="Kategori">
    <!-- Breadcrumbs-->
    <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i>
                    Kategori</a></li>
        </ol>
        <button class="btn btn-primary btn btn-sm m-2">Tambah</button>
    </nav> <!-- / Breadcrumbs-->

    <!-- Bottom Row Widgets-->
    <div class="row g-4 mb-4">
        <!-- Projects Widget-->
        <div class="col-12">
            <div class="card mb-4 h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table m-0 table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $i->name }}</td>
                                    <td>
                                        <button class="btn btn-warning btn btn-sm">Edit</button>
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
                    <nav>
                        <ul class="pagination justify-content-end mt-3 mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- / Projects Widget-->

    </div>
</x-app-layout>