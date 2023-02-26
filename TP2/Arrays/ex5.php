<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
</head>
<body>

    <?php
    $colors = [ 1=> "Yellow", "Blue", "Red", "Purple",
    "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet"
];
    function color($array,$color){
        return in_array($color,$array);
    }
    print_r(color($colors,"Aqua"));
    echo "    <div class='parent'>
    <div class='firstline'>
    <div class='div1'>Yellow
</div>
    <div class='div2'>Blue
    </div>
    <div class='div3'>Red
    </div>
    <div class='div4'>
Purple

    </div>
    <div class='div5'>
Black

    </div>
    </div>
<div class='secondline'>
<div class='div6'>
Orange

</div>
    <div class='div7'>
Cian

    </div>
    <div class='div8'>
Aqua

    </div>
    <div class='div9'>
Bisque

    </div>
    <div class='div10'>
BlueViolet.

    </div>
</div>

</div>";
    ?>

</body>
<style>
    .firstline,
    .secondline {
display: flex;
justify-content:space-around;
text-align:center;
height:100px;
}
.firstline div,.secondline div{
    width : 100%;
    height:100%;
}
.parent
.div1 { 
background-color: yellow;}
.div2 { 
    background-color:blue;
}
.div3 { 
    background-color:red;}
.div4 { 
    background-color:purple; }
.div5 {
    background-color:black; }
.div6 { 
    background-color:orange;}
.div7 {
    background-color:#fff;}
.div8 {
    background-color:aqua;}
.div9 { 
    background-color:bisque;}
.div10 { 
    background-color:blueviolet;}
</style>

</html>