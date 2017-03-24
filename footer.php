
    <footer>
        <div class="container">
            <p>&copy; 2017 MaenYok.Com</p>
            <!-- <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul> -->
        </div>
    </footer>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
   <!--  <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
 -->
    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
    <!-- DataTables -->
<script src="datatables/jquery.dataTables.min.js"></script>
<script src="datatables/dataTables.bootstrap.min.js"></script>

     
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>

</html>
