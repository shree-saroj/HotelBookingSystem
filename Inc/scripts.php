<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script>
    function showAlert(type, message) {
        const alertTypes = {
            success: "alert-success",
            error: "alert-danger",
            info: "alert-primary",
            warning: "alert-warning",
        };

        if (!alertTypes[type]) {
            type = "error";
            message = "Invalid Alert Type";
        }

        const alertDiv = document.createElement("div");
        alertDiv.classList.add("alert", alertTypes[type], "fade", "show", "custom-alert");
        alertDiv.setAttribute("role", "alert");
        alertDiv.style.transition = "opacity 0.5s ease-in-out";
        alertDiv.innerHTML = `<strong class="me-2">${message}</strong>`;

        document.body.appendChild(alertDiv);

        setTimeout(function() {
            alertDiv.style.opacity = '0';
            setTimeout(function() {
                alertDiv.remove();
            }, 1000);
        }, 1000);
    }
</script>