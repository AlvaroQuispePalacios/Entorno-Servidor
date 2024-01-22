<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>


<script>

    let http = new XMLHttpRequest();
    function pruebaAPI() {
        http.onreadystatechange = () => {
            if (http.readyState == 4 && http.status == 200) {

                document.getElementById("searchName").innerHTML = http.responseText;
                console.log(http.responseText);

            }
        };
        http.open("GET", "/student044/dwes/db/customer/ajax_db_customer_select.php?q=" + str, true);
        http.send();

    }
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>