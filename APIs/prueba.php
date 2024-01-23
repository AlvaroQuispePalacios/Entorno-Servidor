


<script>
    function showTime() {
        let http = new XMLHttpRequest();
        http.onreadystatechange = () => {
            if (http.readyState == 4 && http.status == 200) {
                console.log(http.responseText);
            }
        };
        http.open("GET", "http://dataservice.accuweather.com/currentconditions/v1/" + 305482, true);
        http.send();
    }
</script>
