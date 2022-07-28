@extends('_layouts.admin')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <div class="col-lg-12 mb-12">

      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Pemesanan Ruangan Kosong</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Data Pemesanan Ruangan Kosong</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatepemesanan_ruangan_kosong', $editmahasiswa->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                    <div class="form-group">
                        <label for="asal_organisasi">Asal Organisasi</label>
                        <select name="asal_organisasi" class="form-control">
                          <option value="{{$editmahasiswa->asal_organisasi}}">{{$editmahasiswa->asal_organisasi}}</option>
                            @foreach($organisasi as $os)
                            <option value="{{$os->organisasi}}">{{$os->organisasi}}</option>
                            @endforeach
                        </select>
                    </div>  

                    <div class="form-group">
                        <label for="nama_penanggung_jawab">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" id="nama_penanggung_jawab" name="nama_penanggung_jawab" value="{{$editmahasiswa->nama_penanggung_jawab}}">
                    </div>

                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control" name="kontak" id="kontak" value="{{$editmahasiswa->kontak}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$editmahasiswa->email}}">
                    </div>

                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <select name="ruangan" class="form-control">
                          <option value="{{$editmahasiswa->ruangan}}">{{$editmahasiswa->ruangan}}</option>
                            @foreach($ruangan as $rg)
                            <option value="{{$rg->nama_ruangan}}">{{$rg->nama_ruangan}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{$editmahasiswa->tanggal}}">
                    </div>

                    <div class="form-group">
                        <label for="dari">Dari</label>
                        <select name="dari" class="form-control">
                          <option value="{{$editmahasiswa->dari}}">{{$editmahasiswa->dari}}</option>
                            @foreach($jam as $jm)
                            <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sampai">Sampai</label>
                        <select name="sampai" class="form-control">
                          <option value="{{$editmahasiswa->sampai}}">{{$editmahasiswa->sampai}}</option>
                            @foreach($jam as $jm)
                            <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="message" cols="30" rows="10" value="{{$jm->keterangan}}">{{$editmahasiswa->keterangan}}</textarea>
                    </div>

                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        Save
                    </button>
                </div>
            </form>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
