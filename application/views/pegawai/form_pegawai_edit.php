<div class="modal-dialog modal-default" style="z-index:20000;">
    <div class="modal-content">
        <form id="form-epegawai" action="javascript:editpegawai();">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus fa-fw"></i> Form Ubah Data Pegawai</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>ID Pegawai</label>
                    <input type="text" name="id_pegawai" id="id_pegawai_" class="form-control" placeholder="ID Pegawai" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nm_pegawai" id="nm_pegawai_" class="form-control" placeholder="Nama Pegawai" required autofocus>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" id="jk_" class="form-control">
                        <option disabled>-Jenis Kelamin-</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat_"></textarea>
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="telp" id="telp_" class="form-control" placeholder="No Telp" required>
                </div>
                <div class="form-group">
                    <label>Bagian</label>
                    <select name="bagian" id="bagian_" class="form-control" required>
                        <option value="">-Bagian-</option>
                        <?php
                            foreach($bagian->result() as $b){
                                echo "<option value='$b->id_bagian'>$b->bagian</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" id="jabatan_" class="form-control" required>
                        <option value="">-Jabatan-</option>
                        <?php
                            foreach($jabatan->result() as $j){
                                echo "<option value='$j->id_jabatan'>$j->jabatan</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status Kepegawaian</label>
                    <select name="status_kepeg" id="kepeg_" class="form-control" required>
                        <option value="">-Status Kepegawaian-</option>
                        <option value="TETAP">TETAP</option>
                        <option value="KONTRAK">KONTRAK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>NPP</label>
                    <input type="text" name="npp" id="npp_" class="form-control" placeholder="NPP">
                </div>
                <div class="form-group">
                    <label>Golongan</label>
                    <input type="text" name="golongan" id="golongan_" class="form-control" placeholder="Golongan">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default btn-sm" onclick="bersih()" type="button" data-dismiss="modal"><i class="fa fa-close fa-fw"></i> Close</button>
                <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-save fa-fw"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>