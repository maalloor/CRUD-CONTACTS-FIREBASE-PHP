    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table-register').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "pageLength": 3,
                "lengthMenu": [[3, 6, 9, -1], [3, 6, 9, "All"]]
            });
        });
    </script>
</body>
</html>