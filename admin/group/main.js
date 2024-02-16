$(document).ready(function() {
    function performSearch(inputId, resultListId) {
        $(inputId).keyup(function() {
            let searchText = $(this).val();
            if (searchText != "") {
                $.ajax({
                    url: "action.php",
                    method: "post",
                    data: { query: searchText },
                    success: function(response) {
                        $(resultListId).html(response);
                    }
                });
            } else {
                $(resultListId).html("");
            }
        });

        $(document).on('click', 'a', function() {
            $(inputId).val($(this).text());
            $(resultListId).html("");
        });
    }

    // กำหนดฟังก์ชัน performSearch() เพื่อทำงานกับช่องที่ต้องการ
    // performSearch("#inputCity1", "#show-list1");
    // performSearch("#inputCity2", "#show-list2");
    $("#inputCity1").keyup(function() {
        // console.log($(this).val());
    performSearch("#inputCity1", "#show-list1");
    })

    $("#inputCity2").keyup(function() {
        // console.log($(this).val());
    performSearch("#inputCity2", "#show-list2");
    })
});
