<?php foreach ($agenda_data as $row): ?>

    <div class="modal fade" id="edit_bahan_berita<?php echo $row['id'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="bd p-15"><h5 class="m-0">sUbah Bahan Berita</h5></div>
                <div class="modal-body">
                    <form method="POST" action="bahan_berita/v/e" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id_agenda"/>
                        <div class="form-group" for="what">
                            <label class="fw-500" style="font-weight: bold">What (Apa)</label>
                            <br>

                            <label class="fw-400">Apa nama kegiatan yang diselenggarakan di UPT.
                                Contoh: Pembinaan Rohani Warga Binaan di Lapas Mataram</label>
                            <textarea
                                    class="form-control border-grey"
                                    rows="5"
                                    name="what"
                                    id="what"
                                    required
                            ><?php echo $row['nama'] ?></textarea>
                        </div>
                        <br>

                        <div class="form-group" for="where">
                            <label class="fw-500" style="font-weight: bold">Where (Di mana)</label>
                            <br>

                            <label class="fw-400">Di mana kegiatan tersebut diselenggarakan.
                                Contoh: Ruang Legal Drafter Kanwil Kemenkumham NTB
                            </label>
                            <textarea
                                    class="form-control border-grey"
                                    rows="5"
                                    name="where"
                                    id="where"
                                    required
                            ><?php echo $row['tempat'] ?></textarea>
                        </div>
                        <br>

                        <div class="form-group">

                            <label class="fw-500" style="font-weight: bold">When (Kapan)</label>
                            <br>

                            <label class="fw-400">Kapan kegiatan tersebut diselenggarakan.
                            </label>
                            <!--                        <label class="fw-500" for="tanggal">Tanggal</label>-->
                            <div class="timepicker-input input-icon form-group">
                                <div class="input-group">
                                    <div
                                            class="icon-agenda bgc-white bd bdwR-0"
                                    >
                                        <i class="ti-calendar"></i>
                                    </div>
                                    <?php
                                    $tanggal = $this->Mcrud->tgl_english($row['tanggal'], 'full');
                                    ?>
                                    <input
                                            value="<?php echo $tanggal; ?>"
                                            type="text"
                                            class="form-control border-grey start-date"
                                            placeholder="Pilih tanggal"
                                            data-provide="datepicker"
                                            data-date-format="d-M-yyyy"
                                            name="when"
                                            id="when"
                                            required
                                    />
                                </div>
                            </div>
                        </div>
                        <br>
                        <!--                    <div class="form-group" for="when">-->
                        <!--                        <label class="fw-500" style="font-weight: bold">When (Kapan)</label>-->
                        <!--                        <br>-->
                        <!---->
                        <!--                        <label class="fw-400">Kapan kegiatan tersebut diselenggarakan.-->
                        <!--                            Contoh: Kegiatan monitoring dan evaluasi diselenggarakan di Aula Kantor Imigrasi Kelas III Non TPI Bima, Senin (14/2).-->
                        <!--                        </label>-->
                        <!--                        <textarea-->
                        <!--                                class="form-control border-grey"-->
                        <!--                                rows="5"-->
                        <!--                                name="when"-->
                        <!--                                id="when"-->
                        <!--                                required-->
                        <!--                        ></textarea>-->
                        <!--                    </div>-->

                        <div class="form-group" for="who">
                            <label class="fw-500" style="font-weight: bold">Who (Siapa)</label>
                            <br>

                            <label class="fw-400">Siapa tokoh/pejabat/tamu yang hadir pada kegiatan tersebut.
                                Contoh: Kepala Kantor Wilayah Kemenkumham NTB Romi Yudianto mengunjungi Kantor Imigrasi
                                Kelas I TPI Mataram, Senin (13/2).
                            </label>
                            <textarea
                                    class="form-control border-grey"
                                    rows="5"
                                    name="who"
                                    id="who"
                                    required
                            ><?php echo $row['peserta']; ?></textarea>
                        </div>
                        <br>
                        <div class="form-group" for="why">
                            <label class="fw-500" style="font-weight: bold">Why (Mengapa)</label>
                            <br>

                            <label class="fw-400">Mengapa kegiatan tersebut dilaksanakan.
                                Contoh: Romi Yudianto berkunjung ke Kantor Imigrasi Kelas I TPI Mataram dalam rangka monitoring dan evaluasi.
                            </label>
                            <textarea
                                    class="form-control border-grey"
                                    rows="5"
                                    name="why"
                                    id="why"
                                    required
                            ><?php echo $row['why']; ?></textarea>
                        </div>
                        <br>
                        <div class="form-group" for="how">
                            <label class="fw-500" style="font-weight: bold">How (Bagaimana)</label>
                            <br>

                            <label class="fw-400">Bagaimana acara tersebut berjalan dan pernyataan (statement)
                                narasumber/pejabat.
                                Contoh: Romi Yudianto dalam sambutan meminta agar para pegawai meningkatkan displin dan
                                terus meningkatkan kualitas pelayanan publik.
                            </label>
                            <textarea
                                    class="form-control border-grey"
                                    rows="5"
                                    name="how"
                                    id="how"
                                    required
                            ><?= $row['deskripsi']; ?></textarea>
                        </div>
                        <br>


                        <div class="form-group">
<!--                            <label class="fw-500">Upload File SK / SP / Nodin / Undangan / Paparan / data pendukung-->
<!--                                lainnya</label>-->
                            <label class="fw-500">Uploadz Foto Dokumentasi Kegiatan</label>
                            <br>
                            <button class="btn btn-success mB-10" id="add-more-edit-<?php echo $row['id']; ?>"
                                    type="button">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah / Ubah file
                            </button>
                            <div id="auth-rows-edit-<?php echo $row['id']; ?>"></div>
                        </div>

                        <div class="mb-4">
                            <!--NYONTOH DARI SINI-->
                            <ul>
                                <?php
                                /*NAH INI DIAA UNTUK TAMPILKAN MULTIPLE DATA*/
                                $files = json_decode($row['url_data_dukung']);
//                                echo json_encode($row['url_data_dukung']);
                                foreach ($files as $key=>$file) { ?>
<!--                                    <span>--><?php //echo $file; ?><!--</span>-->
                                    <li style="display: flex ; justify-content: space-between"
                                        id="list-file-<?=$key ?>-<?= $row['id']; ?>">
                                        <div style="max-width:300px; overflow: hidden ">
                                            <a target="_blank" href="<?= base_url($file); ?>">
                                            <?php echo explode("/", $file)[2]; ?>
                                        </a>
                                        </div>
                                        <a href="javascript:;"
                                           class="td-n c-red-500 cH-blue-500 fsz-md p-5"
                                           onclick="deleteFile('<?php echo $file;?>',<?= $key?>, <?= $row['id'];?>)">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </li>

                                <?php }
                                ?>
                            </ul>
                        </div>

                        <!--                        <div class="form-group">-->
                        <!--                            <label class="fw-500">Upload File SK / SP / Nodin / Undangan / Paparan / data pendukung lainnya</label>-->
                        <!--                            <button class="btn btn-success mB-10" id="add-more" type="button">-->
                        <!--                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Ubah Foto-->
                        <!--                            </button>-->
                        <!--                            <div id="auth-rows"></div>-->
                        <!--                        </div>-->

                        <div class="text-right">
                            <button
                                    class="btn btn-secondary cur-p float-left"
                                    data-dismiss="modal"
                                    name="">
                                Kembali
                            </button>
                            <button
                                    class="btn btn-success cur-p"
                                    name="">
                                Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php endforeach; ?>

<script type="text/javascript">
     $('.clockpicker').clockpicker();

    var currentId = 0;

    $("[id^='add-more-edit-']").click(function (e) {

        var html4 = '<div class="form-group input-dinamis-edit"><div class="row"><div class="col-input-dinamis-edit col-lg-10">' +
            '<input type="file" name="url_files_edit[]" class="form-control border-grey" id="peserta" placeholder="Upload file" required></div><div class="col-input-dinamis-edit col-lg-2"><button class="btn btn-danger remove-edit" type="button"><i class="fa fa-minus-circle"></i></button></div></div></div>';

        $("[id^='auth-rows-edit-']").append(html4);
    });

    $("[id^='auth-rows-edit-']").on('click', '.remove-edit', function (e) {
        e.preventDefault();
        $(this).parents('.input-dinamis-edit').remove();
    });

    function deleteFile($path,$file_id,$row_id){
        // $path = nama file;
        // $file_id = index file dari record db;
        // $row_id= id unique;
        // confirm("Hapus File?",);
        if (confirm("Hapus File Lampiran?") == true) {
            $.post("bahan_berita/v/df",{

                path : $path,
                file_id : $file_id,
                id : $row_id,

            }).done(function (response) {
                // console.log(response);
                console.log($path);
                console.log($file_id);
                console.log($row_id);
                $("#list-file-"+$file_id+"-"+$row_id).remove();
            });
        }

        // alert("tesss");

    }
</script>

