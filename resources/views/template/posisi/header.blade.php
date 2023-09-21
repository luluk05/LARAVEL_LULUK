<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  {{ $preTitle ?? "Data Sekolah" }}
                </div>
                <h2 class="page-title">
                {{ $title ?? "Semua Data" }}
                </h2>

                @push('page-action')
                <a href="{{ route('sekolahs.tambah') }}" class="btn btn-primary">Tambah Data</a>
                @endpush


              </div>
