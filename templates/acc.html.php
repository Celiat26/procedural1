

 
    

    <!-- carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="imageCarousel w-100"
            src="https://www.citationbonheur.fr/wp-content/uploads/2018/09/L_influence_du_paysage_sur_le_bonheur.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            class="imageCarousel w-100"
            src="https://ericheymans.b-cdn.net/wp-content/uploads/2012/08/dawn-field-grass-164025.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            class="imageCarousel w-100"
            src="https://images.unsplash.com/photo-1593642532400-2682810df593?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwzMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- carousel -->

    <!-- card -->
    <div class="container py-5">
      <div class="row alig-item-center justify-space-around">

      <?php foreach($products as $product) : ?>


        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              class="imageCard"
              src="<?= $product['imagePath'] ?>"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><?= $product['name'] ?></h5>
              <p class="card-text"><?= formatPriceEuro($product['price']) ?></p>
              <a href="pageproduit.php?id=<?= $product['id'] ?>" class="btn btn-primary w-100">voir</a>
            </div>
          </div>
        </div>
    <?php endforeach ?>
    </div>
    <!-- card -->

    <!-- Card + txt -->
    <div class="card bg-dark text-white">
      <img
        class="overlayPerso"
        src="https://images.unsplash.com/photo-1640645295115-25ef3a67a2ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=60"
        class="card-img"
        alt="..."
      />
      <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in
          to additional content. This content is a little bit longer.
        </p>
        <p class="card-text">Last updated 3 mins ago</p>
      </div>
    </div>
    <!-- Card + txt -->

    <!-- footer -->

  

   