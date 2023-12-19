<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <nav class="layout-navbar layout-navbar-fixed container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                <div class="navbar-nav-right d-flex align-items-center justify-content-between  " id="navbar-collapse">
                    <div class="navbar-nav app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link">
                            <span class="app-brand-logo demo">
                                <img src="<?= base_url() ?>assets/img/logo/LOGO_SURYA_GANESA-HITAM-01.png" alt="logo-lagadelas" width="50">
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder mt-3">INISIATOR <p style="font-size: 1.05rem;">LAGADELAS 2024</p> </span>
                        </a>
                    </div>

                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center fw-bold" style="font-size: 1.5rem;">
                            <div id="time"></div>
                        </div>
                    </div>

                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center fw-bold" style="font-size: 1.5rem;">
                            <div>Regu Marabunta</div>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container-xxl  mt-2">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($questions as $index => $question) : ?>
                                <p class="mt-3"><span><?= $index + 1; ?>.</span> <?= $question['QUESTION_TEXT']; ?></p>
                                <?php foreach ($question['OPTIONS'] as $option) : ?>
                                    <div class="form-check mt-2" style="margin-left: 1.5 rem;">
                                        <input name="<?= $question['ID']; ?>" class="form-check-input" type="radio" value="<?= $option['ID']; ?>" id="<?= $question['ID']; ?>" />
                                        <label class="form-check-label" for="<?= $question['ID']; ?>"><?= $option['OPTION_TEXT']; ?></label>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Load view dengan data pertanyaan -->
<!-- <script>
    // Fungsi untuk mendeteksi perubahan fokus tab
    function handleTabFocusChange(event) {
        // Jika fokus berpindah ke tab ujian, arahkan ke halaman umum/pendaftaran
        if (document.visibilityState === 'visible') {
            window.location.href = '<?= $registration_url ?>';
        }
    }

    // Event listener untuk perubahan fokus tab
    document.addEventListener('visibilitychange', handleTabFocusChange);
</script> -->

<script>
    // Tanggal dan waktu sekarang
    var now = new Date().getTime();

    // Waktu yang diinginkan (satu jam dari sekarang)
    var targetTime = now + 3603000; // 3600000 milidetik = 1 jam

    // Update hitung mundur setiap detik
    var x = setInterval(function() {
        // Dapatkan tanggal dan waktu sekarang
        var currentTime = new Date().getTime();

        // Hitung selisih waktu antara sekarang dan target
        var timeDifference = targetTime - currentTime;

        // Hitung jam, menit, dan detik
        var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // Tampilkan hasil di elemen dengan id "time"
        document.getElementById("time").innerHTML = hours + ":" + minutes + ":" + seconds;

        // Jika waktu mundur selesai, hentikan interval
        if (timeDifference <= 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "Waktu sudah habis!";
        }
    }, 1000); // Update setiap 1000 milidetik (1 detik)
</script>