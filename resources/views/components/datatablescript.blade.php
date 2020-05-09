@props(['tableID'])

<script>
    $(function () {
        $('{{"#$tableID"}}').DataTable({
            "language": {
                "paginate": {
                    "next": "التالي",
                    "previous": "السابق"
                },
                "search": "بحث : ",
                "lengthMenu": "عرض _MENU_ عناصر",
                "entries": "سائق",
                "emptyTable": "لا توجد بيانات",
                "zeroRecords": "لا توجد بيانات مطابقة",

            },
            "info": false,
        });
    });
    $(document).ready(function () {
        $('{{"#$tableID"."_filter"}}').addClass('text-left');
    });

    function deleteFunction() {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $('#deleteForm').submit();
            }
        })
    }
</script>
