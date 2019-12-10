<div class="site-blocks-cover overlay inner-page" style="background-image: url(assets/front/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <!-- <span class="sub-text">Desainer Kami</span> -->
            <h1>Designer</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <?php var_dump($designer); ?> -->

<div class="site-section">
  <?php foreach ($designer as $designer) : ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 project-entry">
          <a href="#" class="d-block figure">
          <img src="<?= base_url() . 'assets/front/images/' . $designer['foto'] ?>" alt="Image" class="img-fluid" width="100px" height="250px">
          </a>
          <h3 class="mb-0"><?php echo $designer['nama']; ?></a></h3>
          <span class="text-muted"><?php echo $designer['deskripsi']; ?></span>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>