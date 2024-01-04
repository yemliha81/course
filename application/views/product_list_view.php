<?php include('includes/header.php');?>
<!-- breadcrumb start -->
<div
      class="breadcrumb-area bg-overlay"
      style="
        background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png');
      "
    >
      <div class="container">
        <div class="breadcrumb-inner">
          <div class="section-title mb-0 text-center">
            <h2 class="page-title">Kurslar</h2>
            <ul class="page-list">
              <li><a href="index.html">Anasayfa</a></li>
              <li>Kurslar</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
    <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-12">
                    <div class="row">
                        <?php foreach($products as $product){ ?>
                        <div class="col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="<?php echo FATHER_BASE;?>admin/files/product/img/400/<?php echo $product['product_image'];?>" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        
                                        <h6><a href="<?php echo PRODUCT_DETAIL.$product['id'];?>"><?php echo $product['product_name_en'];?></a></h6>
                                    </div>
                                    <div class="emt-course-meta">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> 4.3
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="price text-right">
                                                    Fiyat: <span>$54.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <nav class="td-page-navigation">
                        <ul class="pagination">
                            <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">3</a></li>
                            <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 order-lg-1 col-12">
                    <div class="td-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_search_course">
                            <h4 class="widget-title">Ara</h4>
                            <form class="search-form single-input-inner">
                                <input type="text" placeholder="Search here">
                                <button class="btn btn-base w-100 mt-3" type="submit"><i class="fa fa-search"></i>
                                    ARA</button>
                            </form>
                        </div>
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Kategori</h4>
                            <ul class="catagory-items">
                                <li><a href="#">Tasarım<i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">Yazılım<i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">Pazarlama<i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">İşletme<i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget widget_checkbox_list">
                            <h4 class="widget-title">Fiyat</h4>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Ücretsiz Kurslar
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Paralı Kurslar
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Abonelik
                            </label>
                        </div>
                        <div class="widget widget_checkbox_list">
                            <h4 class="widget-title">Seviye</h4>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Başlangıç
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Orta
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                İleri
                            </label>
                        </div>
                        <div class="widget widget_tags mb-0">
                            <h4 class="widget-title">Etiketler</h4>
                            <div class="tagcloud">
                                <a href="#">Sanat</a>
                                <a href="#">Yaratıcı</a>
                                <a href="#">Yazılım</a>
                                <a href="#">Tasarım</a>
                                <a href="#">Portfolyo</a>
                                <a href="#">İşletme</a>
                                <a href="#">İstatistik</a>
                                <a href="#">Proje</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
<?php include('includes/footer.php');?>
