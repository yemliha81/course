async function getCourses() {
  const response = await fetch("http://localhost:3000/api/courses");
  const courses = await response.json();

  courses.forEach((course) => {
    const coursesContainer = document.querySelector(".courses-container");
    coursesContainer.innerHTML += `
    <div class="col-md-6">
    <div class="single-course-inner">
      <div class="thumb">
        <img
          src="https://solverwp.com/demo/html/edumint/assets/img/course/7.png"
          alt="img"/>
      </div>
      <div class="details">
        <div class="details-inner">
          <div class="emt-user">
            <span class="align-self-center">${course.course_tutor}</span>
          </div>
          <h6>
            <a href="course-details.html?id=${course.id}">${course.course_name}</a>
          </h6>
        </div>
      </div>
    </div>
  </div>
        `;
  });
}

getCourses();
