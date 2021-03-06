@extends('templates.header')

@section('content')


    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Jurusan</h4>
            </div>
            <div class="d-flex">
                <button type="button" class="btn ripple btn-primary btn-with-icon" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px">
                    <i class="fe fe-plus-circle"></i>
                    Tambah Data
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">




                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>


                                    <div class="modal-body">
                                        <form  method="POST" action="{{url('/jurusan/tambah/')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputJurusan">{{ __('Jurusan') }}</label>
                                                <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>

                                                @error('jurusan')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        </div>



                        <h6 class="card-title" style="margin-bottom: 30px">Jurusan yang tersedia</h6>

                        <br>
                        <div class="table-responsive">
                            <table id="dataTableJurusan" class="table display nowrap">
                                <thead class="thead-light">
                                <tr>
                                    <th style="width: 30px">No</th>
                                    <th>Nama</th>
                                    <th style="width: 280px">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($jurusan as $j):
                                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $j->nama_jurusan?></td>
                                    <td class="d-flex justify-content-between">
                                        <button value="{{ $j->id_jurusan }}" href="hapus_jurusan" type="button" class="btn ripple btn-success edit-jurusan btn-with-icon btn-md" data-toggle="modal" data-target="#ModalJurusan">
                                            <i class="fe fe-edit"></i>
                                            Edit
                                        </button>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/jurusan/hapus/'. $j->id_jurusan) }}" type="button" class="btn btn-danger btn-icon-text">
                                            <i class="fe fe-trash-2"></i>
                                            Hapus Data
                                        </a>
                                    </td>
                                </tr>
                                        <?php
                                    endforeach;
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="ModalJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form  method="POST" action="{{ url('') }}/jurusan/update">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputJurusan">{{ __('Jurusan') }}</label>
                            <input id="n-jurusan"  type="text" class="form-control" name="nama" >
                            <input id="id-jurusan"  type="hidden" class="form-control" name="id">

                            @error('jurusan')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


