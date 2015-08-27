<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>rate</title>
<style type="text/css">
    
    .rate {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rate:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rate:not(:checked) > label:before {
    content: '★ ';
}

.rate > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rate > label:active {
    position:relative;
    top:2px;
    left:2px;
}


</style></head>
<body>



    <fieldset class="rate">
        <legend>Please rate:</legend>
        <input type="radio" id="star5" name="rate" value="5" /><label for="star5" title="Rocks!">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" /><label for="star4" title="Pretty good">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" /><label for="star3" title="Meh">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" /><label for="star1" title="Sucks big time">1 star</label>
    </fieldset>


    <fieldset class="rate">
        <legend>Please rate:</legend>
        <input type="radio" id="star5" name="rate" value="5" /><label for="star5" title="Rocks!">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" /><label for="star4" title="Pretty good">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" /><label for="star3" title="Meh">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" /><label for="star1" title="Sucks big time">1 star</label>
    </fieldset>
</body>
</html>
