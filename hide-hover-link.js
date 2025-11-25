document.addEventListener("DOMContentLoaded", function() {
    function processLinks() {
        var links = document.querySelectorAll("a");
        links.forEach(function(link) {
            var url = link.getAttribute("href");
            if (url && !url.startsWith("javascript")) {
                link.removeAttribute("href");
                link.style.cursor = "pointer";
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    window.location.href = url;
                });
            }
        });
    }

    // Initial run
    processLinks();

    // Watch for dynamically added links
    var observer = new MutationObserver(processLinks);
    observer.observe(document.body, { childList: true, subtree: true });
});
