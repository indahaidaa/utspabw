<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('3') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('3') ?></p>
        <h2><?php echo ambil_judul('3') ?></h2>
        <?php echo maximum_kata(ambil_isi('3'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('3') ?>" class="tbl-pink">coba klik</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('4') ?></p>
        <h2><?php echo ambil_judul('4') ?></h2>
        <?php echo maximum_kata(ambil_isi('4'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('4') ?>" class="tbl-biru">Silahkan diklik</a></p>
    </div>
    <img src="<?php echo ambil_gambar('4') ?>" />
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">News</p>
            <h2>Artikel tentang dunia teknologi maupun komputer</h2>
            <p>klik gambar untuk membaca</p>
        </div>

        <div class="tutor-list">
            <?php
            $sql1       = "select * from tutors order by id asc";
            $q1         = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Gallery</p>
            <h2>Kumpulan foto-foto</h2>
            <p>Silahkan dilihat</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>