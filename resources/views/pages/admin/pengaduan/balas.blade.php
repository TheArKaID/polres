@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanggap Pengaduan</h1>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama" class="bold">Nama Lengkap</label>
                        <div>{{$pengaduan->nama}}</div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="status" class="bold">Status Kasus</label>
                        <select class="form-control" name="gender" required="">
                            <option value="Menunggu" {{$pengaduan->status=='Menunggu' ? 'selected' : ''}} hidden>Menunggu</option>
                            <option value="Proses" {{$pengaduan->status=='Proses' ? 'selected' : ''}}>Proses</option>
                            <option value="Selesai" {{$pengaduan->status=='Selesai' ? 'selected' : ''}}>Selesai</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title" class="bold">Penjelasan</label>
                        <div>{{$pengaduan->penjelasan}}</div>
                    </div>
                </div>
            </div>

            <div class="bg-dark" style="overflow: auto; width: 100%; height: 500px;" id="areapesan">
                @foreach ($pengaduan->percakapan as $pesan)
                    @if ($pesan->isadmin==1)
                        <div class="row m-3" style="width: 70%; float: right;">
                            <p class="p-4 text-dark"
                                style="background: #7befb2; width: 100%; border-radius: 5px 5px 0px 5px;">
                                {{$pesan->pesan}}
                            </p>
                        </div>
                    @else
                        <div class="row m-3" style="width: 70%;">
                            <p class="bg-light p-4 text-dark" style="width: 100%; border-radius: 5px 5px 5px 0px;">
                                {{$pesan->pesan}}
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row mt-2">
                <div class="col-10 pr-0">
                    <div class="form-group">
                        <textarea id="pesan" rows="1" class="d-block w-100 form-control" style="border-radius: 0px 0px 5px 5px;"></textarea>
                    </div>
                </div>
                <div class="col-2 pl-0">
                    {{ csrf_field() }}
                    <input type="button" id="btnKirim" class="btn btn-primary btn-block" onclick="balas()" value="Kirim">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    function balas() {
        var btnKirim = document.getElementById("btnKirim");
            btnKirim.disabled = true;
            btnKirim.value = "Mengirim...";

        var pesan = document.getElementById('pesan').value;
        var token = document.getElementsByName('_token')[0].value;
        var pengaduanid = {{$pengaduan->id}};
        var params = "pesan="+pesan+"&pengaduanid="+pengaduanid;
        var r = new XMLHttpRequest();
        r.open("POST", "/admin/pengaduan/balas", true);
        r.setRequestHeader('X-CSRF-TOKEN', token);
        r.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        r.onreadystatechange = function () {
            if (r.readyState != 4 || r.status != 200) return;
                var div = document.createElement("div");
                    div.classList.add("row");
                    div.classList.add("m-3")
                    div.style.width = "70%";
                    div.style.float = "right";
                var p = document.createElement("p");
                    p.classList.add("p-4");
                    p.classList.add("text-dark")
                    p.style.background = "#7befb2";
                    p.style.width = "100%";
                    p.style.borderRadius = "5px 5px 0px 5px";
                
                var areapesan = document.getElementById('areapesan');
                    p.innerHTML = pesan;
                    div.appendChild(p);
                    areapesan.appendChild(div)
                    div.scrollIntoView();
                
                btnKirim.disabled = false;
                btnKirim.value = "Kirim"
                document.getElementById('pesan').value = "";
            };
        r.send(params);
    }
</script>
@endsection
