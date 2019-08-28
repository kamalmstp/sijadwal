@extends('_layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tahun Ajaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Periode Tahun Ajaran</th>
                    <th>Operation</th>
                </tr> 
                </thead>
                <tbody>
                <?php $no=0; ?>
                        @foreach($tahun_ajaran as $thn)
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$thn->tahun_ajaran}} {{$thn->semester}}</td>
                            <td>
                            <div class="row">
                                &nbsp;&nbsp;<a class="fa fa-edit" href="{{ route('edittahun_ajaran', $thn->id_tahunajaran) }}" style="color: #000;">&nbsp;Edit</a>&nbsp;&nbsp;

                                {!! Form::open(['method' => 'DELETE', 'route' => ['deletetahun_ajaran', $thn->id_tahunajaran] ]) !!}
                                  
                                 <button type="submit" onclick="return confirm('Apa Kamu Yakin Ingin Menghapus Data Ini?')"
                                 style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;
                                  overflow: hidden; padding: 0px; ">
                                  <i class="fa fa-trash" ></i><span style="color: #000; font-weight: bold;">Delete</span></button>
                                {!! Form::close() !!}   
                                </div>                                
                            </td> 
                        </tr>
                        @endforeach
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
<!-- /.container-fluid -->
@endsection
