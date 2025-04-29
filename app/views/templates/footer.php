</main>
  </div>
</div>

<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/js/feather.min.js')?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElement = document.querySelector('.toast');
        if (toastElement) {
            var toast = new bootstrap.Toast(toastElement);
            toast.show(); 

            var closeButton = toastElement.querySelector('.btn-close');
            closeButton.addEventListener('click', function() {
                toast.hide();
            });
        }
    });
</script>
</body>
</html>
