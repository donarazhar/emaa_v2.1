<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <div class="card card-header bg-dark">
        <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Program</i>
    </div>
    <div class="box-body px-5">
        <form action="/frontlayanan_updatedataprogram/{{ $tbl_programID->id_program }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-lg-6"> @php
                            $path = Storage::url('uploads/blog/' . $tbl_programID->foto);
                        @endphp
                            <img style="height:120px" src="{{ $path }}">
                        </div>
                        <div class="col-lg-6">
                            <img id="preview-image" style="height:120px" src="{{ asset('assets/img/preview.png') }}"
                                alt="Preview" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="fotoedit">Ubah Foto</label>
                <input class="form-control" id="fotoedit" name="fotoedit" type="file" accept="image/*"
                    onchange="previewImage()">
                @if ($tbl_programID->foto)
                    <img src="{{ asset('storage/uploads/blog/' . $tbl_programID->foto) }}" alt="Foto Berita"
                        class="mt-2" style="max-width: 200px; max-height: 200px;" hidden>
                @endif
            </div>
            <input class="form-control" id="fotoeditlama" name="fotoeditlama" type="text"
                value="{{ $tbl_programID->foto }}" required hidden>

            <div class="form-group mb-3">
                <label class="form-label" for="juduledit">Judul</label>
                <input class="form-control" id="juduledit" name="juduledit" type="text"
                    value="{{ $tbl_programID->judul }}" required>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="subjuduledit">Sub Judul</label>
                <input class="form-control" id="subjuduledit" name="subjuduledit" type="text"
                    value="{{ $tbl_programID->subjudul }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="isiberitaedit">Isi Berita</label>
                <textarea class="form-control" id="isiberitaedit" name="isiberitaedit" cols="10" rows="5" required>{{ $tbl_programID->isi }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="linkedit">Link</label>
                <input class="form-control" id="linkedit" name="linkedit" type="text"
                    value="{{ $tbl_programID->link }}" readonly required>
            </div>
            <button class="btn btn-info w-100 mt-2" type="submit">Update</button>
        </form>
    </div>
    <script>
        function previewImage() {
            const input = document.getElementById('fotoedit');
            const previewContainer = document.getElementById('preview-container');
            const previewImage = document.getElementById('preview-image');

            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'flex';
                };

                reader.readAsDataURL(file);
            } else {
                previewImage.src = '{{ asset('assets/img/preview.png') }}';
                previewContainer.style.display = 'flex';
            }
        }
    </script>
</body>

</html>
