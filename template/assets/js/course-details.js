async function getCourseDetails() {
  const urlParams = new URLSearchParams(window.location.search);
  const courseId = urlParams.get("id");

  const response = await fetch(
    `http://localhost:3000/api/courses?id=${courseId}`
  );

  const course = await response.json();

  const courseDetailsContainer = document.querySelector(
    ".course-details-container"
  );

  const breadcrumbInner = document.querySelector(".breadcrumb-inner");

  courseDetailsContainer.innerHTML += `
  <div class="details-inner">
  <div class="emt-user">
    <span class="align-self-center">${course[0].course_tutor}</span>
  </div>
  <h3 class="title">
    <a href="course-details.html">${course[0].course_name}</a>
  </h3>
</div>
<div class="thumb">
  <img
    src="https://solverwp.com/demo/html/edumint/assets/img/course/9.png"
    alt="img"
  />
</div>
<div class="course-details-nav-tab text-center">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a
        class="nav-link active"
        id="tab1-tab"
        data-toggle="tab"
        href="#tab1"
        role="tab"
        aria-controls="tab1"
        aria-selected="true"
        >Açıklama</a
      >
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        id="tab2-tab"
        data-toggle="tab"
        href="#tab2"
        role="tab"
        aria-controls="tab2"
        aria-selected="false"
        >İçerik</a
      >
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        id="tab3-tab"
        data-toggle="tab"
        href="#tab3"
        role="tab"
        aria-controls="tab3"
        aria-selected="false"
        >SSS</a
      >
    </li>
  </ul>
</div>
<div class="tab-content" id="myTabContent">
  <div
    class="tab-pane fade show active"
    id="tab1"
    role="tabpanel"
    aria-labelledby="tab1-tab"
  >
    <div class="course-details-content">
      <p>
        Gerçek dünya uygulamaları oluşturarak JavaScript öğrenin.
        3 gerçek dünya projesi, 80 programlama görevi ve ES6/ES7
        içerir!
      </p>
      <div class="row pt-4">
        <div class="col-sm-6">
          <ul class="single-list-wrap">
            <li class="single-list-inner style-check-box">
              <i class="fa fa-check"></i> Üç gerçek dünya web
              uygulaması
            </li>
            <li class="single-list-inner style-check-box">
              <i class="fa fa-check"></i> ES6 ve ES7'yi keşfedin
            </li>
            <li class="single-list-inner style-check-box">
              <i class="fa fa-check"></i> Web'e nasıl
              dağıtacağınızı öğrenin
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
  <div
    class="tab-pane fade"
    id="tab2"
    role="tabpanel"
    aria-labelledby="tab2-tab"
  >
    <div class="course-details-content">
      <h4 class="title">Genel bakış</h4>
      <p>
        The quick, brown fox jumps over a lazy dog. DJs flock by
        when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
        Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for
        quick jigs vex! Fox nymphs grab
      </p>
      <div id="accordion" class="accordion-area mt-4">
        <div class="card single-faq-inner style-no-border">
          <div class="card-header" id="ff-one">
            <h5 class="mb-0">
              <button
                class="btn-link"
                data-toggle="collapse"
                data-target="#f-one"
                aria-expanded="true"
                aria-controls="f-one"
              >
                01. What does you simply dummy in do ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-one"
            class="show collapse"
            aria-labelledby="ff-one"
            data-parent="#accordion"
          >
            <div class="card-body">
              What does you dummy text of free available in market
              printing has industry been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-no-border">
          <div class="card-header" id="ff-two">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-two"
                aria-expanded="true"
                aria-controls="f-two"
              >
                02. What graphics dummy of free design ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-two"
            class="collapse"
            aria-labelledby="ff-two"
            data-parent="#accordion"
          >
            <div class="card-body">
              What graphics simply dummy text of free available in
              market printing industry has been industry's
              standard dummy text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-no-border">
          <div class="card-header" id="ff-three">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-three"
                aria-expanded="true"
                aria-controls="f-three"
              >
                03. Why we are the best ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-three"
            class="collapse"
            aria-labelledby="ff-three"
            data-parent="#accordion"
          >
            <div class="card-body">
              Why we are dummy text of free available in market
              printing industry has been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-no-border">
          <div class="card-header" id="ff-four">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-four"
                aria-expanded="true"
                aria-controls="f-four"
              >
                04. What industries dummy covered ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-four"
            class="collapse"
            aria-labelledby="ff-four"
            data-parent="#accordion"
          >
            <div class="card-body">
              What industries text of free available in market
              printing industry has been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="tab-pane fade"
    id="tab3"
    role="tabpanel"
    aria-labelledby="tab3-tab"
  >
    <div class="course-details-content">
      <h4 class="title">Genel bakış</h4>
      <p>
        The quick, brown fox jumps over a lazy dog. DJs flock by
        when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
        Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for
        quick jigs vex! Fox nymphs grab
      </p>
      <div id="accordion-1" class="accordion-area mt-4">
        <div class="card single-faq-inner style-header-bg">
          <div class="card-header" id="ff-five">
            <h5 class="mb-0">
              <button
                class="btn-link"
                data-toggle="collapse"
                data-target="#f-five"
                aria-expanded="true"
                aria-controls="f-five"
              >
                01. What does you simply dummy in do ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-five"
            class="show collapse"
            aria-labelledby="ff-five"
            data-parent="#accordion"
          >
            <div class="card-body">
              What does you dummy text of free available in market
              printing has industry been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-header-bg">
          <div class="card-header" id="ff-six">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-six"
                aria-expanded="true"
                aria-controls="f-six"
              >
                02. What graphics dummy of free design ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-six"
            class="collapse"
            aria-labelledby="ff-six"
            data-parent="#accordion"
          >
            <div class="card-body">
              What graphics simply dummy text of free available in
              market printing industry has been industry's
              standard dummy text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-header-bg">
          <div class="card-header" id="ff-seven">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-seven"
                aria-expanded="true"
                aria-controls="f-seven"
              >
                03. Why we are the best ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-seven"
            class="collapse"
            aria-labelledby="ff-seven"
            data-parent="#accordion"
          >
            <div class="card-body">
              Why we are dummy text of free available in market
              printing industry has been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
        <div class="card single-faq-inner style-header-bg">
          <div class="card-header" id="ff-eight">
            <h5 class="mb-0">
              <button
                class="btn-link collapsed"
                data-toggle="collapse"
                data-target="#f-eight"
                aria-expanded="true"
                aria-controls="f-eight"
              >
                04. What industries dummy covered ?
                <i class="fa fa-eye"></i>
              </button>
            </h5>
          </div>
          <div
            id="f-eight"
            class="collapse"
            aria-labelledby="ff-eight"
            data-parent="#accordion"
          >
            <div class="card-body">
              What industries text of free available in market
              printing industry has been industry's standard dummy
              text ever.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
`;

  breadcrumbInner.innerHTML += `
  <div class="section-title mb-0 text-center">
  <h2 class="page-title">${course[0].course_name}</h2>
  <ul class="page-list">
    <li><a href="index.html">Anasayfa</a></li>
    <li>${course[0].course_name}</li>
  </ul>
</div>
`;

  console.log(course[0].course_tutor);
}

getCourseDetails();
