$(function () {
//     // Data Grid
//     let dt = new Date();
//     let fname = `Generated from http://127.0.0.1 on ${dt.getDate()}/${dt.getMonth()+1}/${dt.getFullYear()}`;
    $("#example1").DataTable({
        order: [[0, 'desc']],
        responsive: true,
        lengthChange: true,
        autoWidth: false,
//         buttons: [
//             {
//                 extend: "excelHtml5",
//                 title: `${fname}`,
//                 exportOptions: {
//                     columns: ":visible",
//                 },
//             },
//             {
//                 extend: "pdfHtml5",
//                 title: `${fname}`,
//                 exportOptions: {
//                     columns: ":visible",
//                 },
//             },
//             "colvis",
//         ],
    })
//     .buttons()
//     .container()
//     .appendTo("#example1_wrapper .col-md-6:eq(0)");
});
