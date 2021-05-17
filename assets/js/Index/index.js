
$(document).ready(function()
{
    $typing = $('#typing');

    setInterval('cursor_animation()', 200);
    setTimeout('show_typings()', 100);
});

var index = 0;
var typing_length = 0;
var typing_options = [
    '#Desarrollar',
    '#Crecer',
    '#Construir',
    '#Desarrollar, #Crecer y #Construir'
];

function cursor_animation()
{
    $('#cursor').animate({
        opacity: 0
    }, 400).animate({
        opacity: 1
    }, 400);
}

function type()
{
    $typing.html(typing.substr(0, typing_length++));

    if (typing_length < typing.length + 1)
        setTimeout('type()', 60);
}

function erase()
{
    $typing.html(typing.substr(0, typing_length--));

    if (typing_length >= 0)
        setTimeout('erase()', 20);
}

function show_typings()
{
    typing = typing_options[index];

    type();

    if (index < (typing_options.length - 1))
    {
        index++

        setTimeout('erase()', 2000);
        setTimeout('show_typings()', 4000);
    }
    else
    {
        setTimeout(function() {
            $('#cursor').remove();
        }, 1000);
    }
}
