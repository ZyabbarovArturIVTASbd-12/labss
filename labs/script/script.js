let numberImage = 1;
const countImage = 4;
const pathImages = "/images/gallery/";
const countDiv = 10;
const speed = 50;

function generateImage()
{

    let widthDiv = 10/countDiv;

    let image = pathImages + numberImage + ".jpg";
    for (let i = 0; i < countDiv * 5.05; i++)
    {
        let item = $("<div></div>");
        item.addClass("elementImage");

        item.css("width", widthDiv+"vw");
        item.css("background-image", 'url('+image+')');
        item.css("background-size", '550px');
        item.css("background-position-x", - i * widthDiv+"vw");
        $("#MainImage").append(item);
    }
}



function changeImage() {

    let image = pathImages +  numberImage + ".jpg";
    let i = 30;
    let j = 30;

    $("#MainImage div").each(function () {

        $(this).hide(speed * i, function () {
            $(this).css("background-image", 'url('+image+')');
            $(this).fadeIn(speed * j);
        });
        i++;
    });
}

function LeftClickImage() {
    if (numberImage > 1)
        numberImage--;
    else
        numberImage = countImage;
    changeImage();
}

function RightClickImage() {
    if(numberImage < countImage)
        numberImage++;
    else
        numberImage = 1;
    changeImage();
}

$( document ).ready(function() {
    generateImage();
});