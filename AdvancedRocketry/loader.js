$(document).ready(function(){
    var title = $("#title").html();
    var content = $("#description").html();
    var image = $("#imageName").html();
    var hardness = $("#hardness").html();
    var blastResist = $("#blastResistance").html();
    var tool = $("#requiresTool").html();
    var block = $("#fullBlock").html();
    var seal = $("#sealable").html();
    var entity = $("#tilenetity").html();

    
    setUp = "<div class='right'><img style='width: 100%;' alt='Advanced Rocketry Logo' src='/AdvancedRocketry/logo.png' /><hr />" + title + "<hr />";
    if(image!=null)
        image = "<img src='./img/"+ image +"'/><hr />";
    else
        image = "";
    if(hardness!=null)
        hardness = "Hardness: " + hardness + "<br />";
    else
        hardness = "";
    if(blastResist!=null)
        blastResist = "Blast Resistance: " + blastResist + "<br />";
    else
        blastResist = "";
    if(tool!=null)
        tool = "Requires Tool: " + tool + "<br />";
    else
        tool = "";
    if(block!=null)
        block = "Full Block: " + block + "<br />";
    else
        block = "";
    if(seal!=null)
        seal = "Sealable: " + seal + "<br />";
    else
        seal = "";
    if(entity!=null)
        entity = "Tile Entity: " + entity + "<br />";
    else
        entity = "";   

    $("head").load("header.html",function(){
        $("head").append("<title>" + title + "</title>");
    }) 
    $("body").append().load("navbar.html", function(){
        $("body").append("<div id='content'><div class='left'>" + content +"</div>");
        $("#content").append(setUp + image + hardness + blastResist + tool + block + seal + entity + "</div></div>");
    }); 
   
})