document.addEventListener("DOMContentLoaded", function () {
    const navlinkEls = document.querySelectorAll(".navlink");

    navlinkEls.forEach((navlinkEl) => {
        navlinkEl.addEventListener("click", function () {
            const currentActive = document.querySelector(".navlink.active");
            if (currentActive) {
                currentActive.classList.remove("active");
            }
            navlinkEl.classList.add("active");
        });
    });
});