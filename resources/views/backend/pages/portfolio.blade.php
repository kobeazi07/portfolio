@extends('backend.layouts.index')
@section('konten')
   <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
<div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

</div>
                  <div class="col-lg-6" style="text-align: right !important;">
                            <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary text-right" style = "text-align = right;   "   data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                      </button>

                    </div>
                    </div>
              
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="col"></div>
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                             <form id="formportfolio" enctype="multipart/form-data">
                                 @csrf
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul</label>
                                    <input type="text" class="form-control" name="judul"  id="exampleFormControlInput1" placeholder="masukkan portfolio">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"  placeholder="masukkan portfolio"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text">Thumbnail  </span>
                                                                                    </div>
                                                                                    <div class="custom-file">
                                                                                        <input type="file"
                                                                                            class="custom-file-input" name="thumbnail">
                                                                                        <label class="custom-file-label">Choose
                                                                                            file</label>
                                                                                    </div>
                                                                                </div>
                                                                                <label>Detail Gambar</label>
                                                                                <div class="input-group mb-3">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary"
                                                                                        onclick="addInput()">Tambah +</button>

                                                                                </div>
                                                                                <div id = "items-container"></div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"  id="btnSaveProgram" >Save changes</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> 


<script>

      $('#btnSaveProgram').on('click', function() {
       let form = document.getElementById('formportfolio');
    let formData = new FormData(form);

    // 🔥 PAKSA ISI DESKRIPSI DARI CKEDITOR
    if (CKEDITOR.instances.deskripsi) {
        formData.set('deskripsi', CKEDITOR.instances.deskripsi.getData());
    }

            $.ajax({
                url: "{{ route('Tambah_Portfolio') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,

                beforeSend: function() {
                    $('#btnSaveProgram')
                        .prop('disabled', true)
                        .text('Menyimpan...');
                },

                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Program berhasil ditambahkan',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload();
                    });
                },

                error: function(xhr) {
                    let pesan = 'Terjadi kesalahan';

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        pesan = '';
                        for (let key in errors) {
                            pesan += `• ${errors[key][0]}<br>`;
                        }
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        html: pesan
                    });
                },

                complete: function() {
                    $('#btnSaveProgram')
                        .prop('disabled', false)
                        .text('Simpan Program');
                }
            });
        });

   function addInput() {
            let uniqueId = Date.now();

            let html = `
        <div class="input-group mb-3" id="item-${uniqueId}">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>

            <div class="custom-file">
                <input type="file" 
                       name="files[]" 
                       class="custom-file-input" 
                       id="file-${uniqueId}">
                <label class="custom-file-label" for="file-${uniqueId}">
                    Choose file
                </label>
            </div>
      
            <div class="input-group-append">
                <button type="button" 
                        class="btn btn-danger"
                        onclick="removeInput('${uniqueId}')">
                    Hapus
                </button>
            </div>
        </div>
        `;

            document.getElementById('items-container').insertAdjacentHTML('beforeend', html);
        }

        function removeInput(id) {
            document.getElementById(`item-${id}`).remove();
        }

        // Update label filename
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('custom-file-input')) {
                e.target.nextElementSibling.innerText = e.target.files[0].name;
            }
        });



    // Optional: destroy editor saat modal ditutup
document.addEventListener("DOMContentLoaded", function () {
    CKEDITOR.replace('deskripsi');
});



</script>
@endsection