    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/chart-bar-demo.js'); ?>"></script>

    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--stepper js cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
  <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>
</body>
<script>
  var stepper1Node = document.querySelector('#stepper1')
      var stepper1 = new Stepper(document.querySelector('#stepper1'))

      stepper1Node.addEventListener('show.bs-stepper', function (event) {
        console.warn('show.bs-stepper', event)
      })
      stepper1Node.addEventListener('shown.bs-stepper', function (event) {
        console.warn('shown.bs-stepper', event)
      })
      $.getJSON("https://ibnux.github.io/data-indonesia/kabupaten/33.json", function(res) {

res = $.map(res, function (obj) {
   obj.text = obj.nama
   return obj;
});

data = [{
   id: "",
   nama: "- Pilih Kabupaten -",
   text: "- Pilih Kabupaten -"
}].concat(res);

//implemen data ke select provinsi
$("#kabupaten_kota").select2({
   dropdownAutoWidth: true,
   width: '100%',
   data: data
})
})
</script>
</html>