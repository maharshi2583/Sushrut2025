<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
//! change active class based on current page
document.addEventListener("DOMContentLoaded", function() {
    // Get the current page URL
    let currentPage = window.location.pathname.split("/").pop();

    // Select all navigation links
    let navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        // Get the data-page attribute value
        let pageName = link.getAttribute("data-page");

        // Check if the href of the link matches the current page URL
        if (link.getAttribute("href") === currentPage || currentPage === "" && pageName === "home") {
            // Remove 'active' class from all links
            navLinks.forEach(nav => nav.classList.remove("active"));

            // Add 'active' class to the matched link
            link.classList.add("active");
        }
    });
});
</script>