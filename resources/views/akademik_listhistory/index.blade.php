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
          <h6 class="m-0 font-weight-bold text-primary">List History</h6>
        </div>
        <div class="card-body">
                           
        <hr>


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
                        <th>Keterangan</th>
                        <th>Waktu</th>
                    </tr>                           
                    </thead>
                    <tbody>
                        <?php $no=0; ?>
                        @foreach ($list_history as $row)
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$row->keterangan}}</td>
                            <td>{{$row->waktu}}</td>
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
