<section class="footer" id="section-footer">
    <div class="footer-container">
        <div class="row">
            <div class="col-md">
                <div class="logo-footer justify-content-center text-center">
                    <img class="mb-2" src="<?php echo base_url() ?>assets/landing/img/<?= $profile->logo_sekolah ?>" alt="footer mas nurul huda">
                    <h3><?= $profile->nama_madrasah ?></h3>
                    <h5 class="mb-1">"<?= $profile->visi_motto ?>"</h5>
                    <h7><?= $profile->alamat_madrasah ?>
                    </h7>
                </div>
            </div>
            <div class="col-md">
                <h4>Line Kontak</h4>
                <hr>
                <ul>
                    <li><a href="tel:+6222<?= $profile->phone ?>" target="_blank"><i class="fas fa-phone fa-lg"></i>022-<?= $profile->phone ?></a>
                    </li>
                    <li><a href="mailto:<?= $profile->email ?>" target="_blank"><i class="fas fa-envelope fa-lg"></i><?= $profile->email ?></a>
                    </li>
                </ul>
                <h4>Sosial Media</h4>
                <hr>
                <ul>
                    <li><a href="<?= $profile->link_fb ?>" target="_blank"><i class="fab fa-facebook fa-lg"></i> @masnurulhudakotabandung</a></li>

                    <li><a href="<?= $profile->link_youtube ?>" target="_blank"><i class="fab fa-youtube fa-lg"></i> MAS ENHA</a>
                    </li>
                    <li><a href="<?= $profile->link_ig ?>" target="_blank"><i class="fab fa-instagram fa-lg"></i> @ma_nurul.huda</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="col-md">
                <h4>Temukan Kami di Maps </h4>
                <hr>
                <div id="map"></div>
            </div> -->
        </div>
        <div class="copyright justify-content-center text-center mt-3"><a href="http://www.minurulhuda.sch.id" target="blank">
                &copy <?= $profile->nama_madrasah ?> <script>
                    document.write(new Date().getFullYear())
                </script> | Allright reserved</a> |
            <strong> Developed by </strong><a href="https://play.google.com/store/search?q=pub%3Azlz%20tech&c=apps&hl=in" target="blank">zlz</a>
        </div>
    </div>

</section>
<script src="<?php echo base_url() ?>assets/landing/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/smooth-scroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/loader.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/enha.js"></script>
<script src="<?php echo base_url() ?>assets/landing/js/baguetteBox.min.js"></script>
<script type="text/javascript">
    // baguetteBox.run('.tz-gallery');

    // $(function() {
    //     var scroll = new SmoothScroll('a[href*="#section-"]', {
    //         // speed: 1000
    //         easing: 'easeInOutCubic',
    //         customEasing: function(time) {
    //             return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

    //         }
    //     });
    // });

    var map = L.map('map').setView([-6.937930, 107.595264], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-6.937930, 107.595264]).addTo(map)
        .bindPopup('<div class="text-center"><b>MA NURUL HUDA</b><br> Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I No.7</div>')
        .openPopup();
</script>
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfz3Euq9lMt4i7V-rho11jkgRCTC5t4vo&callback=initMap">
</script> -->

<!-- </body>

</html> -->