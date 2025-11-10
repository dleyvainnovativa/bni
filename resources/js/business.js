document.addEventListener("DOMContentLoaded", function () {
    const originalBtn = document.getElementById("save-contact-btn");

    // Create the wrapper with your structure
    const wrapper = document.createElement("div");
    wrapper.id = "save-contact-fixed-wrapper";
    wrapper.innerHTML = `
        <div class="container fixed-bottom pb-4 	d-lg-none">
                    <button id="save-contact-fixed" class="w-100 btn btn-primary btn-lg">Guardar contacto</button>
        </div>
    `;
    document.body.appendChild(wrapper);

    const fixedWrapper = document.getElementById("save-contact-fixed-wrapper");

    function checkButtonVisibility() {
        const rect = originalBtn.getBoundingClientRect();
        const inView = (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight + 40 || document.documentElement.clientHeight + 40)
        );

        if (inView) {
            fixedWrapper.classList.remove("visible");
        } else {
            fixedWrapper.classList.add("visible");
        }
    }

    window.addEventListener("scroll", checkButtonVisibility);
    window.addEventListener("resize", checkButtonVisibility);
    checkButtonVisibility();
});
