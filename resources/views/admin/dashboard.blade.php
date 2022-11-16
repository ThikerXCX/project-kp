<x-app-layout title="DashBoard">
    <!-- Breadcrumbs-->
    <nav class="mb-4 pb-2 border-bottom" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html"><i class="ri-home-line align-bottom me-1"></i>
                    Dashboard</a></li>
        </ol>
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
                                    <th>Project</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i <10; $i++) <tr>
                                    <td>tes</td>
                                    </tr>
                                    @endfor
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