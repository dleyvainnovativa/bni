document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const categoryFilter = document.getElementById("categoryFilter");
    const companyCards = document.querySelectorAll(".card.h-100"); // company cards
    const companyLinks = document.querySelectorAll("a.text-decoration-none"); // links wrapping cards

    function filterCompanies() {
        const searchValue = searchInput.value.toLowerCase().trim();
        const selectedCategory = categoryFilter.value;

        companyLinks.forEach(link => {
            const companyName = link.querySelector(".card-title").textContent.toLowerCase();
            const founderName = link.querySelector(".fa-user").parentElement.nextElementSibling?.textContent.toLowerCase() || "";
            const categoryBadges = Array.from(link.querySelectorAll(".badge.text-bg-primary"))
                .map(badge => badge.textContent.trim());
            
            // Check name or founder match
            const matchesSearch = !searchValue ||
                companyName.includes(searchValue) ||
                founderName.includes(searchValue);

            // Check category match
            const matchesCategory = !selectedCategory ||
                categoryBadges.includes(getCategoryNameById(selectedCategory));

            if (matchesSearch && matchesCategory) {
                link.style.display = "";
            } else {
                link.style.display = "none";
            }
        });
    }

    // Helper to map category ID to name (grabbed from your select)
    function getCategoryNameById(id) {
        const option = categoryFilter.querySelector(`option[value='${id}']`);
        return option ? option.textContent.trim() : "";
    }

    // Event listeners
    searchInput.addEventListener("input", filterCompanies);
    categoryFilter.addEventListener("change", filterCompanies);
});