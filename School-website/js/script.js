document.addEventListener("DOMContentLoaded", function () {
    const toggleStudent = document.getElementById('toggleStudent');
    const toggleAdmin = document.getElementById('toggleAdmin');
    const studentForm = document.getElementById('studentForm');
    const adminForm = document.getElementById('adminForm');

    // Toggle to show student form
    toggleStudent.addEventListener("click", function () {
        toggleStudent.classList.add("active");
        toggleAdmin.classList.remove("active");
        studentForm.classList.remove("hidden");
        adminForm.classList.add("hidden");
    });

    // Toggle to show admin form
    toggleAdmin.addEventListener("click", function () {
        toggleAdmin.classList.add("active");
        toggleStudent.classList.remove("active");
        adminForm.classList.remove("hidden");
        studentForm.classList.add("hidden");
    });
});
