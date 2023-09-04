function hapusPermanen() {
    var data_ids = [];
    var checkboxes = document.querySelectorAll('input[name="item_checked[]"]:checked');

    for (var i = 0; i < checkboxes.length; i++) {
        data_ids.push(checkboxes[i].value);
    }

    if (data_ids.length > 0) {
        Swal.fire({
            title: "Konfirmasi",
            text: "Data akan dihapus secara permanen",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire((window.location = "contact/hapus_permanen.php?id=" + data_ids.join()));
            }
        });
    } else {
        // Tampilkan pesan SweetAlert jika tidak ada data yang dipilih
        Swal.fire({
            title: "Peringatan",
            text: "Pilih setidaknya satu data untuk dipindahkan.",
            icon: "warning",
            confirmButtonText: "OK",
        });
    }
}

$(function () {
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
        var clicks = $(this).data("clicks");
        if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").prop("checked", false);
            $(".checkbox-toggle .far.fa-check-square").removeClass("fa-check-square").addClass("fa-square");
        } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").prop("checked", true);
            $(".checkbox-toggle .far.fa-square").removeClass("fa-square").addClass("fa-check-square");
        }
        $(this).data("clicks", !clicks);
    });
});
