<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Dynamic Styles: NewPage Breaking Headline News</title>

    <!--
 <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/break-after"></a> 
 Generic break values
 NewPage break values
 Column break values
 Region break values
 Global values
-->

    <style type="text/css" media="all">
        .body {
            position: absolute;
        }

        #page {
            break-before: auto;
            margin: 0px;
            width: 736px;
            height: 1103px;
            position: relative;
        }

        h1 {
            text-align: center;
        }

        #page-break {
            position: absolute;
            top: 0;
            width: 100%;
            height: 20px;
            padding: 20px;
            background-color: red;
            text-align: center;
        }
    </style>

</head>

<body>
    <div id="page">
        <div>
            <br>
            <h1>Headline on Page 1</h1>
            ...
            more content on Page 1
            ...
        </div>
        <div id="page-break"> Footline on Page 1 </div>
    </div>
    <div id="page">
        <br>
        <h1>Headline on Page 2</h1>
        ...
        more content on Page 2
        ...
        <div id="page-break"> Footline on Page 2 </div>
    </div>
    <div id="page">
        <br><br>
        <h1>Headline on Page 3</h1>
        ...
        more content on Page 3
        ...
        <div id="page-break"> Footline on Page 3 </div>
    </div>
</body>

</html>