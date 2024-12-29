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
        alertDiv.classList.add("alert", alertTypes[type], "alert-dismissible", "fade", "show", "custom-alert");
        alertDiv.setAttribute("role", "alert");
        alertDiv.innerHTML = `<strong class="me-2">${message}</strong><button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>`;
        document.body.appendChild(alertDiv);
    }
</script>