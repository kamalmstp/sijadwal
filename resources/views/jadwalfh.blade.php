<html>
<head>
    <title>Export Laporan Excel Pada Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
    <div class="container">
        <center>
            <h4>Export Laporan Excel Pada Laravel</h4>
        </center>
        
        <a href="{{route('exportjadwalsimpan',$id)}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwalfh as $s)
                <tr>
                    <td>{{$s->nama_matkul}}</td>
                    <td>{{$s->ruangan}}</td>
                    <td>{{$s->hari}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
</body>
</html>