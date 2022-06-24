<div class="p2">
    <div class="form-group mb-3">
        <input type="text" name="merk" id="merk" class="form-control "placeholder="Nomor Surat..." required value="{{ $mail->merk }}" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="tipe" id="tipe" class="form-control " placeholder="tipe..." required value="{{ $mail->tipe }}" autocomplete="off" >
    </div>
    <div class="form-group mb-3">
        <input type="date" name="tanggal" id="tanggal" class="form-control " placeholder="tanggal..." required value="{{ $mail->tanggal }}" autocomplete="off" >
    </div>
  
    <div class="form-group mt-5">
    <button class="btn btn-dark" onclick="update({{ $mail->id }})">Update Data</button>
    </div>
</div>