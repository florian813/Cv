<script>
function darkFunction() {
    var body = document.body;
    
    if(body.style.background=="white"){
        body.style.background="#191A19";
        body.style.color="white";
        document.getElementById("light-button").textContent="light mode";
    }else{
        body.style.background="white";
        body.style.color="#191A19";
        document.getElementById("light-button").textContent="dark mode";
    }
}
</script>