@extends('halaman_dashboard.index')
@section('navitem')
@endsection
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Data Supir</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('Profile.supir.index')}}" class="text-white text-decoration-none">Kelola Prrestasi</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Data Supir</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Data Supir</h4>
                    </div>

                    <div class="card-body">
                    <form action="{{ route('Profile.supir.post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>KTP</label>
                                <input type="file" name="gambar" value="{{$supir->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <input type="hidden" name="id" value="{{$supir->id}}">
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ $supir->nama }}" placeholder="Masukkan Nama supir" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="number" name="alamat" value="{{ $supir->alamat }}" placeholder="Masukkan Alamat supir" class="form-control @error('alamat') is-invalid @enderror">

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NO TELP</label>
                                <input type="number" name="telp" value="{{ $supir->telp }}" placeholder="Masukkan No telp" class="form-control @error('telp') is-invalid @enderror">

                                @error('telp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
