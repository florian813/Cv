<script>
function darkFunction() {
    var body = document.body;
    const collection = document.getElementsByClassName("overlay");
    
    if(body.style.background=="white"){
        body.style.background="#191A19";
        body.style.color="white";
        document.getElementById("div-photo").style.background="#273746";
        document.getElementById("nav").style.background="#191A19";
        
        for (let i = 0; i < collection.length; i++) {
        collection[i].style.background = "#191A19";
        }   
    }else{
        body.style.background="white";
        body.style.color="#191A19";
        document.getElementById("div-photo").style.background="#7FB3D5";
        document.getElementById("nav").style.background="white";
        for (let i = 0; i < collection.length; i++) {
            collection[i].style.background = "white";
            }      
    }
}
</script>
