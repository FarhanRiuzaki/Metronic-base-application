<script>
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    };

  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}", "{{ Session::get('title') }}", {
                closeButton: !0,
                tapToDismiss: !1,
            });
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}", "{{ Session::get('title') }}", {
                closeButton: !0,
                tapToDismiss: !1,
            });
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}", "{{ Session::get('title') }}", {
                closeButton: !0,
                tapToDismiss: !1,
            });
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}", "{{ Session::get('title') }}", {
                closeButton: !0,
                tapToDismiss: !1,
            });
            break;
    }
  @endif

  @if (count($errors) > 0)
    toastr.error("Whoops! There were some problems, please try again later", 'Error'    );
  @endif
</script>
