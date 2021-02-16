<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        @media(max-width: 500px){
            #cont{
                height: 100vh;
                width: 100vw;
                background-color: transparent;
                background-image: linear-gradient(black,black),radial-gradient(circle at top left,rgb(49, 207, 255),yellow);
                border: 0.3rem solid transparent;
                background-origin: border-box;
                background-clip: content-box,border-box;
            }
            #head{
                width: 97.5vw;
                height: 10vh;
                letter-spacing: 10px;
                text-align: center;
                justify-content: center;
                display: flex;
            }
            #bfaf{
                display: flex;
                flex-direction: row;
                margin-top: 10px;
                letter-spacing: 5px;
            }
            #bfr{
                width: 45vw;
                height: 20vh;
                background-color: transparent;
                border: 0.2rem solid rgb(183, 0, 255);
                margin-left: 2px;
                position: relative;
            }
            #aftr{
                width: 45vw;
                height: 20vh;
                background-color: transparent;
                background-image: linear-gradient(black,black),radial-gradient(circle at top left,rgb(186, 24, 250),rgb(255, 102, 0));
                border: 0.2rem solid transparent;
                background-origin: border-box;
                background-clip: content-box,border-box;
            }
            #bfafcon p{
                color: greenyellow;
                position: relative;
                top: 45%;
                margin-left: 4px;
            }
            #bfrL{
                position: relative;
                left: 15%;
                color: rgb(171, 3, 238);
            }
            #aftrL{
                position: absolute;
                left: 70%;
                top: 32%;
                color: rgb(255, 102, 0);
            }
            #cmpdiv{
                display: flex;
                flex-direction: row;
                margin-top: 5px;
            }
            #image_file{
                display: none;
            }
            #Flbl{
                position: relative;
                color: black;
                background-color: rgb(0, 255, 157);
                left: 10%;
                top: 10%;
                width: 10vw;
                height: 3.5vh;
                box-shadow: 0 0 4px 2px  rgb(62, 247, 176);
            }
            #cmp{
                background-color: aqua;
                position: relative;
                left: 38%;
                width: 30vw;
                height: 3.5vh;
                border: none;
                outline: none;
            }
            #dnld{
                text-decoration: none;
                background-color: rgb(238, 255, 0);
                position: absolute;
                left: 22%;
                top: 60%;
                -webkit-box-reflect: below 5px linear-gradient(transparent,rgba(2, 2, 2, 0.333));
                box-shadow: 0 0 5px,
                0 0 25px,0 0 50px,0 0 200px;
            }
            #imgaftr{
                width: 43vw;
                height: 18.8vh;
                position:absolute;
            }
            #imgbfr{
                width: 43vw;
                height: 18.8vh;
                position:absolute;
            }
        }
    </style>
</head>
<body>
    <div id="cont">
        <div id="head"><P style="top: 35%; position: relative;color: rgb(0, 255, 234);">IMAGE COPRESSOR</P></div>
        <div id="bfaf">
            <div id="bfr">
        <?php        
            if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $file_name = $_FILES["image_file"]["name"];
                $file_type = $_FILES["image_file"]["type"];
                $temp_name = $_FILES["image_file"]["tmp_name"];
                $file_size = $_FILES["image_file"]["size"];
                $error = $_FILES["image_file"]["error"];
                echo '<image id="imgbfr" src="./'. $file_name.' " '.'></img>';

            }
        ?>
            </div>
            <div id="bfafcon"><p>></p></div>
            <div id="aftr">

            <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $file_name = $_FILES["image_file"]["name"];
                $file_type = $_FILES["image_file"]["type"];
                $temp_name = $_FILES["image_file"]["tmp_name"];
                $file_size = $_FILES["image_file"]["size"];
                $error = $_FILES["image_file"]["error"];
                echo '<image id="imgaftr" src="./'. $file_name.' " '.'></img>';
            }
        ?> 
            </div>
        </div> 
        <div id="bfrL">BEFORE</div>
        <div id="aftrL">AFTER</div> 
        <div id="cmpdiv">
        <form action='' method='POST' enctype='multipart/form-data'>
            <label for="image_file" id="Flbl" >CHOSE A IMAGE</label>
            <input name="image_file" type="file" id="image_file" accept="image/*">
            <button type="submit" id="cmp">COMPRESS</button>
        </form>
        </div>
        <?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $file_name = $_FILES["image_file"]["name"];
    $file_type = $_FILES["image_file"]["type"];
    $temp_name = $_FILES["image_file"]["tmp_name"];
    $file_size = $_FILES["image_file"]["size"];
    $error = $_FILES["image_file"]["error"];    
    if (!$temp_name)
    {
        //echo "ERROR: Please browse for file before uploading";
        exit();
    }
    function compress_image($source_url, $destination_url, $quality)
    {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
        //echo "Image uploaded successfully.";
        
        
    }
    if ($error > 0)
    {
        echo $error;
    }
    else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg"))
    {
        $filename = compress_image($temp_name, "./" . $file_name, 80);
        echo '<a id="dnld" href="./'. $file_name.' " '.'download>'.'DOWNLOAD YOUR IMAGE</a>';
    }
    else
    {
        //echo "Uploaded image should be jpg or gif or png.";
    }
} ?>
    </div>
    
</body>
</html>