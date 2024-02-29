function loadPage(pageName) {
    fetch(pageName)
        .then(response => response.text())
        .then(html => {
            document.getElementById('content').innerHTML = html;
        });
}

loadPage('../index.html');