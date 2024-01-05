<?php include('includes/header.php');?>
<!-- breadcrumb start -->
<div class="breadcrumb-area bg-overlay" style="background-image:url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title"><?php echo $product['product_name_en'];?></h2>
                    <ul class="page-list">
                        <li><a href="<?php echo BASE_URL;?>">Anasayfa</a></li>
                        <li><?php echo $product['product_name_en'];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-120 pd-bottom-90">
    <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-course-detaila-inner">
                        <div class="details-inner">
                            <h3 class="title"><a href="course-details.html"><?php echo $product['product_name_en'];?></a></h3>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo BASE_URL;?>admin/files/product/img/1000/<?php echo $product['product_image'];?>" alt="img">
                        </div>
                        <div class="course-details-nav-tab text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Açıklama</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">İçerik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">SSS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">İncelemeler</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <div class="course-details-content">
                                    <p>Gerçek dünya uygulamaları oluşturarak JavaScript öğrenin. 3 gerçek dünya projesi, 80 programlama görevi ve ES6/ES7 içerir!</p>
                                    <div class="row pt-4">
                                        <div class="col-sm-6">
                                            <ul class="single-list-wrap">
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> Üç gerçek dünya web uygulaması
                                                </li>
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> ES6 ve ES7'yi keşfedin
                                                </li>
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> Web'e nasıl dağıtacağınızı öğrenin
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 mt-3 mt-sm-0">
                                            <ul class="single-list-wrap">
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> Promises ve Async/Await
                                                </li>
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> Perde arkasına göz atın
                                                </li>
                                                <li class="single-list-inner style-check-box">
                                                    <i class="fa fa-check"></i> PDF kılavuzuna erişin
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="course-details-content">
                                    <h4 class="title">Genel bakış</h4>
                                    <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
                                        Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz,
                                        bad nymph, for quick jigs vex! Fox nymphs grab</p>
                                    <div id="accordion" class="accordion-area mt-4">
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-one">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" data-toggle="collapse" data-target="#f-one" aria-expanded="true" aria-controls="f-one">
                                                        01. What does you simply dummy in do ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-one" class="show collapse" aria-labelledby="ff-one" data-parent="#accordion">
                                                <div class="card-body">
                                                    What does you dummy text of free available in market printing has
                                                    industry been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-two">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two" aria-expanded="true" aria-controls="f-two">
                                                        02. What graphics dummy of free design ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#accordion">
                                                <div class="card-body">
                                                    What graphics simply dummy text of free available in market printing
                                                    industry has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-three">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three" aria-expanded="true" aria-controls="f-three">
                                                        03. Why we are the best ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-three" class="collapse" aria-labelledby="ff-three" data-parent="#accordion">
                                                <div class="card-body">
                                                    Why we are dummy text of free available in market printing industry
                                                    has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-four">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four" aria-expanded="true" aria-controls="f-four">
                                                        04. What industries dummy covered ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-four" class="collapse" aria-labelledby="ff-four" data-parent="#accordion">
                                                <div class="card-body">
                                                    What industries text of free available in market printing industry
                                                    has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="course-details-content">
                                    <h4 class="title">Genel bakış</h4>
                                    <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
                                        Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz,
                                        bad nymph, for quick jigs vex! Fox nymphs grab</p>
                                    <div id="accordion-1" class="accordion-area mt-4">
                                        <div class="card single-faq-inner style-header-bg">
                                            <div class="card-header" id="ff-five">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" data-toggle="collapse" data-target="#f-five" aria-expanded="true" aria-controls="f-five">
                                                        01. What does you simply dummy in do ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-five" class="show collapse" aria-labelledby="ff-five" data-parent="#accordion">
                                                <div class="card-body">
                                                    What does you dummy text of free available in market printing has
                                                    industry been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-header-bg">
                                            <div class="card-header" id="ff-six">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six" aria-expanded="true" aria-controls="f-six">
                                                        02. What graphics dummy of free design ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-six" class="collapse" aria-labelledby="ff-six" data-parent="#accordion">
                                                <div class="card-body">
                                                    What graphics simply dummy text of free available in market printing
                                                    industry has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-header-bg">
                                            <div class="card-header" id="ff-seven">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-seven" aria-expanded="true" aria-controls="f-seven">
                                                        03. Why we are the best ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-seven" class="collapse" aria-labelledby="ff-seven" data-parent="#accordion">
                                                <div class="card-body">
                                                    Why we are dummy text of free available in market printing industry
                                                    has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-header-bg">
                                            <div class="card-header" id="ff-eight">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-eight" aria-expanded="true" aria-controls="f-eight">
                                                        04. What industries dummy covered ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-eight" class="collapse" aria-labelledby="ff-eight" data-parent="#accordion">
                                                <div class="card-body">
                                                    What industries text of free available in market printing industry
                                                    has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="ratings-list-inner mb-4">
                                    <div class="row">
                                        <div class="col-md-4 align-self-center text-center">
                                            <div class="total-avarage-rating">
                                                <h2>5.0</h2>
                                                <div class="rating-inner">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p>3 incelemeyle 5 <i style="color: #FDC800;" class="fa fa-star"></i> aldı.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>5</span>
                                                        <span class="progress-bar-inner">
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></span>
                                                            </span>
                                                        </span>
                                                        <span class="counter-count">100%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>4</span>
                                                        <span class="progress-bar-inner">
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:0%"></span>
                                                            </span>
                                                        </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>3</span>
                                                        <span class="progress-bar-inner">
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></span>
                                                            </span>
                                                        </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>2</span>
                                                        <span class="progress-bar-inner">
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></span>
                                                            </span>
                                                        </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>1</span>
                                                        <span class="progress-bar-inner">
                                                            <span class="progress">
                                                                <span class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></span>
                                                            </span>
                                                        </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="td-sidebar">
              <div class="widget widget_feature">
                <h4 class="widget-title">Başvuru Formu</h4>
                <form class="course-form-container" method="post" action="<?php echo PRODUCT_FORM_POST;?>">
                  <div class="course-form-col">
                    <label for="name"
                      ><i class="fa fa-user"></i
                      ><span
                        ><span class="text-danger course-required">*</span>Ad
                        Soyad</span
                      ></label
                    >
                    <div class="single-input-inner style-bg-border">
                      <input type="text" id="name" name="name" placeholder="Ad Soyad" />
                    </div>
                  </div>
                  <div class="course-form-col">
                    <label for="mail"
                      ><i class="fa fa-envelope"></i
                      ><span
                        ><span class="text-danger course-required">*</span
                        >E-posta Adresi</span
                      ></label
                    >
                    <div class="single-input-inner style-bg-border">
                      <input type="email" id="mail" name="email" placeholder="E-posta" />
                    </div>
                  </div>
                  <div class="course-form-col">
                    <label for="phone"
                      ><i class="fa fa-envelope"></i
                      ><span
                        ><span class="text-danger course-required">*</span
                        >Telefon</span
                      ></label
                    >
                    <div class="single-input-inner style-bg-border">
                      <input type="tel" id="phone" name="phone"  placeholder="Telefon" />
                    </div>
                  </div>
                  <div class="course-form-col">
                    <label for="time"
                      ><i class="fa fa-clock-o"></i
                      ><span
                        ><span class="text-danger course-required">*</span>Sizi
                        ne zaman arayalım?</span
                      >
                    </label>

                    <div class="single-input-inner style-bg-border">
                      <select id="time" name="time" >
                        <option value="Sabah">Sabah</option>
                        <option value="Öğle">Öğle</option>
                        <option value="Akşam">Akşam</option>
                      </select>
                    </div>
                  </div>
                  <div class="course-form-col">
                    <label for="kvkk"
                      ><span
                        ><span class="text-danger course-required">*</span>KVKK
                        sözleşmesini okudum, kabul ediyorum.</span
                      ></label
                    >
                    <div class="course-checkbox">
                      <input type="checkbox" id="check" name="check" />
                      <label for="check"
                        >Sözleşmeyi okudum ve onaylıyorum.</label
                      >
                      <input type="hidden" name="course_id" value="<?php echo $product['id'];?>">
                    </div>
                  </div>
                  <div class="price-wrap text-center">
                    <input class="btn btn-base btn-radius" type="submit" value="KAYIT OL">
                    </div>
                </form>
                
              </div>
            </div>
                </div>
            </div>
            <div class="row justify-content-center pd-top-100">
                <div class="col-lg-4 col-md-6">
                    <div class="single-course-inner">
                        <div class="thumb">
                            <img src="https://solverwp.com/demo/html/edumint/assets/img/course/1.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="details-inner">
                                <div class="emt-user">
                                    <span class="u-thumb"><img src="https://solverwp.com/demo/html/edumint/assets/img/author/1.png" alt="img"></span>
                                    <span class="align-self-center">Sezer Gümüş</span>
                                </div>
                                <h6><a href="course-details.html">React Kursu (Hooks ve Redux)</a></h6>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-course-inner">
                        <div class="thumb">
                            <img src="https://solverwp.com/demo/html/edumint/assets/img/course/2.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="details-inner">
                                <div class="emt-user">
                                    <span class="u-thumb"><img src="https://solverwp.com/demo/html/edumint/assets/img/author/2.png" alt="img"></span>
                                    <span class="align-self-center">Sezer Gümüş</span>
                                </div>
                                <h6><a href="course-details.html">Modern Node.js Kursu</a></h6>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-course-inner">
                        <div class="thumb">
                            <img src="https://solverwp.com/demo/html/edumint/assets/img/course/3.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="details-inner">
                                <div class="emt-user">
                                    <span class="u-thumb"><img src="https://solverwp.com/demo/html/edumint/assets/img/author/3.png" alt="img"></span>
                                    <span class="align-self-center">Anıl Gümüş</span>
                                </div>
                                <h6><a href="course-details.html">Sıfırdan Adobe Premier Pro CC Eğitimi</a></h6>
                            </div>
                            <div class="emt-course-meta">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="rating">
                                            <i class="fa fa-star"></i> 4.9
                                            <span>(73)</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="price text-right">
                                            Fiyat: <span>$74.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- course-single area end -->
<?php include('includes/footer.php');?>