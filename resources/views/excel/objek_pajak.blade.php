<table>
    <thead>
        <tr>
            <th>nik</th>
            <th>nopd</th>
            <th>nama_usaha</th>
            <th>alamat</th>
            <th>rt_rw</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($objek_pajak as $row) 
        <tr>
            <td>{{ $row->user->nik }}</td>
            <td>{{ $row->nopd }}</td>
            <td>{{ $row->nama_usaha }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->rt_rw }}</td>
            <td>{{ $row->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>