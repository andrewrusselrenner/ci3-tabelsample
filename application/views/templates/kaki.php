    <!-- jQuery -->
    <script src="<?= npmURL(); ?>jquery/dist/jquery.min.js"></script>

    <!-- Popper.js -->
    <script src="<?= npmURL(); ?>popper.js/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?= npmURL(); ?>bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SweetAler2 JS nya, pengganti BS Modal -->
    <script src="<?= npmURL(); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
    
    <!-- Kostum JavaScript yang dibuat untuk modal -->
    <script src="<?= jsURL(); ?>mhsmodal.js"></script>

    <?php
    if ($this->session->userdata('status') == TRUE)
    {
        ?>
        <script>
        Swal.fire({
        position: 'bottom-end',
        backdrop: false,
        type: 'success',
        title: 'Sukses diproses!',
        showConfirmButton: false,
        timer: 1900
        })
        </script>
        <?php
    }
    ?>
</body>
</html>