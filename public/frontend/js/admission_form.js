document.addEventListener("DOMContentLoaded", function() {
    const today = new Date().toISOString().split("T")[0];

    const studentDoB = document.getElementById("studentDoB");
    const fatherDoB = document.getElementById("fatherDoB");
    const motherDoB = document.getElementById("motherDoB");

    if (studentDoB) studentDoB.setAttribute("max", today);
    if (fatherDoB) fatherDoB.setAttribute("max", today);
    if (motherDoB) motherDoB.setAttribute("max", today);
});

