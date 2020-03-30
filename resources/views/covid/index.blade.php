@extends('temp.main')

@section('title', 'covid19')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datas)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$datas['attributes']['Provinsi']}}</td>
        <td>{{$datas['attributes']['Kasus_Posi']}}</td>
        <td>{{$datas['attributes']['Kasus_Semb']}}</td>
        <td>{{$datas['attributes']['Kasus_Meni']}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection