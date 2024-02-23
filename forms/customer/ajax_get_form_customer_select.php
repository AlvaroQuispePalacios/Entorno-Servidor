<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/header.php') ?>

<div class="search">
    <form>
        <label>Nombre:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
</div>

<p>Nombres: <span id="searchName"></span></p>

<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("searchName").innerHTML = "";
            return;
        } else {
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("searchName").innerHTML = http.responseText;
                }
            };
            http.open("GET", "/student044/dwes/db/customer/ajax_db_customer_select.php?q=" + str, true);
            http.send();
        }
    }
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student044/dwes/footer.php') ?>
