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
                "lengthMenu": "عرض _MENU_ سائقين",
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

    function myFunction() {
        if (!confirm("هل تريد تاكيد الخذف"))
            event.preventDefault();
    }
</script>
