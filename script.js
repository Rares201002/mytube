document.getElementById("uploadForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data); // Handle server response
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
