@extends('layouts.header')

@include('layouts.navbar')



    <section>
        <main id="main">
            <div class="container mt-6 ">
                <form id="meetingForm">
                    <div class="form-group">
                        <label for="meetingTitle">Judul Pertemuan:</label>
                        <input type="text" class="form-control" id="meetingTitle" name="meetingTitle" required>
                    </div>

                    <div class="form-group">
                        <label for="meetingDate">Tanggal Pertemuan:</label>
                        <input type="date" class="form-control" id="meetingDate" name="meetingDate" required>
                    </div>

                    <div class="form-group">
                        <label for="meetingTime">Waktu Pertemuan:</label>
                        <input type="time" class="form-control" id="meetingTime" name="meetingTime" required>
                    </div>

                    <div class="form-group">
                        <label for="meetingLocation">Tempat Pertemuan:</label>
                        <input type="text" class="form-control" id="meetingLocation" name="meetingLocation">
                    </div>

                    <div class="form-group">
                        <label for="meetingLocation">Instansi:</label>
                        <input type="text" class="form-control" id="meetingLocation" name="meetingLocation">
                    </div>

                    <div class="form-group">
                        <label for="meetingjenis">Jenis Rapat:</label>
                        <select class="form-control" id="meetingjenis" name="meetingjenis">
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="meetingLeader">Pemimpin Rapat:</label>
                        <select class="form-control" id="meetingLeader" name="meetingLeader">
                            <option value="pemimpin1">Pemimpin Rapat 1</option>
                            <option value="pemimpin2">Pemimpin Rapat 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="meetingParticipants">Peserta Rapat:</label>
                        <select class="form-control" id="meetingParticipants" name="meetingParticipants[]" multiple>
                            <option value="peserta1">Peserta Rapat 1</option>
                        </select>
                        <small class="form-text text-muted">Pilih beberapa peserta dengan menahan tombol Ctrl/Cmd.</small>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                </form>
            </div>
        </main>
    </section>



@include('layouts.footer')
