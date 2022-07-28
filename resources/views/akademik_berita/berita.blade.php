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
          <h6 class="m-0 font-weight-bold text-primary">Berita</h6>
        </div>
        <div class="card-body">
                    <a href="{{ route('tambahberita')}}" class="btn btn-success">New</a>
        <hr>
        @if(Session::has('flash_message'))
            <div class="row">   
            <div class="col-lg-12">     
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
            </div>
        @endif 

        <div class="row">
            <div class="col-lg-12">              
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>  
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: #000;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th  width="450px">Isi Berita</th>
                        <th>Dari</th>
                        <th>Sampai</th>
                        <th>Operation</th> 
                    </tr>                           
                    </thead>
                    <tbody>
                        <?php $no=0; 
                        $hari = array ( 1 =>    'Senin',
                                    'Selasa',
                                    'Rabu',
                                    'Kamis',
                                    'Jumat',
                                    'Sabtu',
                                    'Minggu'
                                );
                                
                        $bulan = array (1 =>   'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                );
                            ?>
                            @foreach($berita as $data)
                            <?php
                            $split1    = explode('-',  $data->dari);
                            $tgl_indo1 = $split1[2] . ' ' . $bulan[ (int)$split1[1] ] . ' ' . $split1[0];   

                            $split2    = explode('-',  $data->sampai);
                            $tgl_indo2 = $split2[2] . ' ' . $bulan[ (int)$split2[1] ] . ' ' . $split2[0];         
                            ?>                      
                            <tr >
                            <td>{{++$no}}</td>
                            <td>{{$data->isi}}</td>
                            <td>{{$tgl_indo1 }}  </td>
                            <td>{{ $tgl_indo2 }}</td> 
                            <td>
                                <a class="fa fa-edit" href="{{ route('editberita', $data->id_berita) }}" style="color: #000;">&nbsp;Edit</a>&nbsp;

                                {!! Form::open(['method' => 'DELETE', 'route' => ['deleteberita', $data->id_berita] ]) !!}
                                  
                                 <button type="submit" onclick="return confirm('Apa Kamu Yakin Ingin Menghapus Data Ini?')"
                                 style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;
                                  overflow: hidden; padding: 0px; ">
                                  <i class="fa fa-trash" ></i> &nbsp;<span style="color: #000; font-weight: bold;">Delete</span></button>
                                {!! Form::close() !!}                                     
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection
