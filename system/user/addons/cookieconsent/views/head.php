<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity='sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>
<?= "<link rel='stylesheet' href='" . $css_path . "'>" ?>
<?= "<script src='" . $js_path . "'></script>" ?>
<script src='https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js'></script>
<script>
    $(document).ready(function() {
        if (Cookies.get('cc_status') === undefined) {
            Cookies.set('cc_status', 'unset');
        }
        if (Cookies.get('cc_status') === 'unset') {
            $('.cc-dialog').removeClass('hidden');
            Cookies.set('cc-click', '0');
        }
    })
</script>
<?php if (isset($gtag)) {
    echo $gtag;
} ?>

<script type="text/javascript">
    $(document).ready(function(){
      $('#cookieConsentForm').ajaxForm({
        dataType: 'json',
        success: function(data) {
          if (data.success) {
            console.log(data.success);
          } else {
            console.log('Failed with the following errors: '+data.errors.join(', '));
          }
        }
      });
    });
</script>