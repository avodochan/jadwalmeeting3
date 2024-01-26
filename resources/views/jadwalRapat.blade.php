@extends('layouts.header')
@include('layouts.navbar')
{{-- @include('layouts.footer') --}}
{{-- @section('content') --}}
<section>
    <main id="main">
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-sm border">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Rapat</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Jenis Rapat</th>
                        <th scope="col">Instansi</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Anggota</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pembahasan mengenai studi banding antar sekolah</td>
                        <td>10 s/d 20 januari 2024</td>
                        <td>offline</td>
                        <td>SMKN 1 Yogyakarta</td>
                        <td>R.meeting</td>
                        {{-- <td>
                            <ol>
                                abe
                                abu
                                abo     
                            </ol>
                        </td> --}}
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</main>


@include('layouts.footer')
{{-- @endsection     --}}
