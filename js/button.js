var count = 0;
document.getElementById("myButton").onclick = function(){
    count++;
    if (count % 2 == 0){
        document.getElementById("negative").innerHTML = ""
    }
    else {
        var img = document.createElement("img");
        img.src = "https://static.vecteezy.com/system/resources/thumbnails/025/256/796/small_2x/nuclear-atomic-explosions-mushroom-cloud-isolated-on-transparent-background-generative-ai-png.png"
        document.getElementById("negative").appendChild(img);
    }

}