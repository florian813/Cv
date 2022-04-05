<script>
function darkFunction() {
    var body = document.body;
    
    if(body.style.background=="white"){
        body.style.background="#191A19";
        body.style.color="white";
        document.getElementById("light-button").textContent="light mode";
        document.getElementById("light-button").className="btn btn-light";
        document.getElementById("div-photo").style.background="#273746";
        document.getElementById("nav").style.background="#191A19";
    }else{
        body.style.background="white";
        body.style.color="#191A19";
        document.getElementById("light-button").textContent="dark mode";
        document.getElementById("light-button").className="btn btn-dark";
        document.getElementById("div-photo").style.background="#7FB3D5";
        document.getElementById("nav").style.background="white";
    }
}
</script>
