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
          <h6 class="m-0 font-weight-bold text-primary">Kelola Jadwal</h6>
        </div>
        @if($jmltaguest > 0)
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pilih Tahun Ajaran</h3>
            </div>
            @if(Session::has('flash_message'))
              <div class="alert alert-success" style="text-align: center;"><em> {!! session('flash_message') !!}</em>
              </div>
              <hr>
            @endif 

            <div class="row">
                <div class="col-lg-12">              
                    @include ('errors.list') {{-- Including error file --}}
                </div>
            </div>            
            <hr>
              <p class="help-block" style="text-align: center;">Halaman jadwal guest berfungsi untuk menampilkan dan mendownload jadwal dihalaman guest berdasarkan tahun ajaran yang dipilih</p>
            <hr>            
            <form role="form" method="POST" action="{{ route('updatejadwalguest') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}  
            <input type="hidden" name="_method" value="patch">          
              <div class="form-group">
                <select class="form-control" tabindex="1" data-placeholder="Pilih Tahun Ajaran.." name="id_tahunajaran" class="span8">
                  <option value="{{$tahun_ajaran_guest->id_tahunajaran}}">{{$tahun_ajaran_guest->tahun_ajaran  }} {{$tahun_ajaran_guest->semester  }}</option>
                  @foreach($tahun_ajaran as $mtl)
                  <option value="{{$mtl->id_tahunajaran}}">{{$mtl->tahun_ajaran  }} {{$mtl->semester  }}</option>
                  @endforeach 
                </select>
                <br/>
                <div class="form-group">
                    <label for="tgl_berlaku">Tanggal Berlaku:</label>
                    <input type="text" name="tgl_berlaku" class="form-control" value="{{$jadwalguest->tgl_berlaku}}">  
                </div>     
                <div class="form-group">
                    <label for="tgl_ttd">Tanggal TTD:</label>
                    <input type="text" name="tgl_ttd" class="form-control" value="{{$jadwalguest->tgl_ttd}}">  
                </div> 
                <div class="form-group">
                    <label for="dekan">Dekan:</label>
                    <input type="text" name="dekan" class="form-control" value="{{$jadwalguest->dekan}}">  
                </div>   
                <div class="form-group">
                    <label for="nip_dekan">NIP Dekan:</label>
                    <input type="text" name="nip_dekan" class="form-control" value="{{$jadwalguest->nip_dekan}}">  
                </div>                                                            
                    <br/>

                <button type="submit" class="btn btn-primary">
                  Pilih Tahun Ajaran / Kurikulum
                </button>                   
              </div>                                             
            </form>
        </div>
        @else
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pilih Tahun Ajaran</h3>
            </div>
            <hr>
              <p class="help-block" style="text-align: center;">Halaman jadwal guest berfungsi untuk menampilkan dan mendownload jadwal dihalaman guest berdasarkan tahun ajaran yang dipilih</p>
            <hr>            
            <form role="form" method="POST" action="{{ route('simpanjadwalguest') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}                            
                <div class="form-group">
                    <select class="form-control" tabindex="1" data-placeholder="Pilih Tahun Ajaran.." name="id_tahunajaran" class="span8">
                        @foreach($tahun_ajaran as $mtl)
                        <option value="{{$mtl->id_tahunajaran}}">{{$mtl->tahun_ajaran  }} {{$mtl->semester  }}</option>
                        @endforeach 
                    </select>
                <br/>
                <div class="form-group">
                    <label for="tgl_berlaku">Tanggal Berlaku:</label>
                    <input type="text" name="tgl_berlaku" class="form-control" >  
                </div>     
                <div class="form-group">
                    <label for="tgl_ttd">Tanggal TTD:</label>
                    <input type="text" name="tgl_ttd" class="form-control" >  
                </div> 
                <div class="form-group">
                    <label for="dekan">Dekan:</label>
                    <input type="text" name="dekan" class="form-control" >  
                </div>  
                <div class="form-group">
                    <label for="nip_dekan">NIP Dekan:</label>
                    <input type="text" name="nip_dekan" class="form-control" >  
                </div>                                                            
                    <br/>
                <button type="submit" class="btn btn-primary">Pilih Tahun Ajaran / Kurikulum</button>                   
                </div>                                                                        
            </form>
        </div>
        @endif

      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
