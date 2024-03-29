<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul;?></h3>
    </div>
    
        <form method="post" action="<?= base_url()?>anggota/simpan" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>
                    <div class="col-sm-10">
                       <input type="text" name="id" value="<?= $id?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jk" class="form-control" required>
                            <option value=""> - Pilih Jenis Kelamin - </option>
                            <option value="Laki-laki"> Laki-laki </option>
                            <option value="Perempuan"> Perempuan </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" id="" class="form-control" cols="30" rows="5" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control" placeholder="No. HP" required>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <a href="<?= base_url()?>anggota" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>