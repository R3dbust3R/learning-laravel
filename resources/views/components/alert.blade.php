@props(['type', 'msg'])



<div
    class="alert alert-{{$type}} alert-dismissible fade show"
    role="alert">
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"></button>
    {{$msg}}
</div>

<script>
    var alertList = document.querySelectorAll(".alert");
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
    });
</script>