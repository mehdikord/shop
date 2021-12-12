@if(\Illuminate\Support\Facades\Session::has('panel_alert_message'))
<script>
    Swal.fire({
        position: "bottom-end",
        icon: "success",
        text: "Your work has been saved",
        showConfirmButton: !1,
        timer: 2000,

    })
</script>
@endif

