<script>
    $(document).ready(function(){
        $('#users').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "/api/users",
            "columns":[
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'type'},
            ]
        });
    });
</script>