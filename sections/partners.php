

<div class="site-section" id="next">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Our Partners</h2>
            </div>
        </div>
        <div class="row mb-5">

            <?php

            if (is_dir("images/partners/")) {
                if ($dh = opendir("images/partners/")) {
                    while (($file = readdir($dh)) !== false) {

                       ?>
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="">
                            <img src="images/partners/<?php echo $file;?>" alt="Image" class="img-fluid w-75 mb-lg-4">
                        </div>

                        <?php
                    }
                    closedir($dh);
                }
            }

            ?>





        </div>
    </div>
</div>