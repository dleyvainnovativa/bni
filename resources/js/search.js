document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchInput");
    const categoryCheckboxes = document.querySelectorAll(".category-filter");
    const companyCards = document.querySelectorAll("a.col-12.col-md-6.col-lg-4");

    // Normalize text for case/accent-insensitive search
    const normalize = (str) =>
        str.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");

    function filterCompanies() {
        const searchValue = normalize(searchInput.value.trim());
        const selectedCategories = Array.from(categoryCheckboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.value);

        companyCards.forEach(card => {
            const name = normalize(card.querySelector(".card-title").innerText);
            const founder = normalize(card.querySelector(".fa-user")?.parentElement?.innerText || "");
            
            // The company categories (as IDs) — set this in your Blade
            const cardCategories = card.dataset.categories
                ? card.dataset.categories.split(",")
                : [];

            const matchesSearch =
                !searchValue ||
                name.includes(searchValue) ||
                founder.includes(searchValue);

            const matchesCategory =
                selectedCategories.length === 0 ||
                selectedCategories.some(cat => cardCategories.includes(cat));

            card.style.display = matchesSearch && matchesCategory ? "" : "none";
        });
    }

    // Event listeners
    searchInput.addEventListener("input", filterCompanies);
    categoryCheckboxes.forEach(cb => cb.addEventListener("change", filterCompanies));
});
