<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
            background-color: black;
            background-image: linear-gradient(black,black),radial-gradient(circle at top left,rgb(17, 247, 255),rgb(187, 255, 0));
            border: 2px solid transparent;
            background-origin: border-box;
            background-clip: content-box,border-box;
            position: relative;
            display: flex;
        }
        #subCont{
            background-color: transparent;
            top: 20%;
            left: 10%;
            position: relative;
            display: flex;
            height: 40vh;
            width: 80vw;
            flex-shrink: 2;
        }
        #vdo{
            background-color: aqua;
            position: relative;
            height: 4vh;
            width: 20vw;
            left: 38%;
            top: 5%;
            flex-shrink: 2;
        }
        #vdocon{
            height: 10vh;
            width: 0.2rem;
            background-color: rgb(250, 146, 27);
            position: absolute;
            top: 15%;
            left: 50%;
            overflow: hidden;
        }
        #svdo{
            position: absolute;
            width: 0.3rem;
            height: 0vh;
            background-color: rgb(17, 247, 255);

        }
        
        #imgcon{
            height: 12vh;
            width: 0.2rem;
            background-color: rgb(89, 0, 255);
            position: absolute;
            top: 52%;
            left: 28.8%;
            transform: rotate(230deg);
        }
        #simg{
            position: absolute;
            width: 0.2rem;
            height: 0vh;
            background-color: rgb(17, 247, 255);
        }
        #audcon{
            height: 12vh;
            width: 0.2rem;
            background-color: rgb(255, 0, 234);
            position: absolute;
            top: 52.5%;
            left: 69.9%;
            transform: rotate(130deg);
        }
        #saud{
            position: absolute;
            width: 0.2rem;
            height: 0vh;
            background-color: rgb(17, 247, 255);
        }
        #img{
            background-color: aqua;
            position: absolute;
            height: 4vh;
            width: 20vw;
            left: 8%;
            top: 76%;
        }
        #aud{
            background-color: aqua;
            position: absolute;
            height: 4vh;
            width: 20vw;
            left: 65%;
            top: 76%;
        }
        .btn{
            border: none;
            outline: none;
            color: black;
        }
        #an{
            height: 20px; width: 100px; 
            background-color: aliceblue;
            position: relative; top: 10%;
            left: -20%;
        }
        #san{
            position: absolute;
            height: 20px;
            width: 2px;
            background-color: red;
        }
        #cntr{
            position: absolute;
            height: 10vh;
            width: 18vw;
            border: 0.2rem solid rgb(173, 255, 47);
            border-radius: 50%;
            background-color:transparent;
            left: 39%;
            top: 40%;
            transition-delay: 1020ms ;
        }
        }
    </style>
</head>
<body>
    <div id="cont">
        <div id="subCont">
            <button id="vdo" class="btn" onclick="vglow()">VIDEO</button><br>
            <div id="vdocon"><div id="svdo"></div></div>
            
            <div id="imgcon"><div id="simg"></div></div>
            <div id="audcon"><div id="saud"></div></div>
            <button id="img" class="btn" onclick="iglow()" >IMAGE</button>
            <button id="aud" class="btn" onclick="aglow()">AUDIO</button>
            <div id="cntr"><a href="#" id="lnk" style=" text-decoration: none; 
                color: rgb(228, 253, 0);font-size: 2.9vw;text-align: center;
                position:relative;
                top: 38%;left: 6%;visibility: hidden;transition-delay: 1020ms ;">COMPRESS</a>
                </div>
        </div>
    </div>
    <script>
        /*var vbtn=document.getElementById("vdo");
        var ibtn=document.getElementById("img");
        var abtn=document.getElementById("aud");
        vbtn.addEventListener("click",vglow);
        ibtn.addEventListener("click",iglow);
        abtn.addEventListener("click",aglow);*/
        var vb=false;
        var ib=false;
        var ab=false;
        function vglow(){
            vb=true;
            if(ib===true || ab===true){

            }
            else{
            var vcon=document.getElementById("vdocon");
            vcon.style.backgroundColor="white";
            vcon.style.boxShadow="0 0 5px 2px rgb(20, 247, 255)"; 
            var anm=document.getElementById("svdo");
            var pos=0;
            var i=setInterval(frm,100);
            function frm(){
                if(pos===10){
                    clearInterval(i);
                }
                else{
                     pos=pos+1;
                     anm.style.height=`${pos}vh`;
                }
            }
            document.getElementById("cntr").style.borderColor="rgb(17, 247, 255)";
           //document.getElementById("cntr").style.boxShadow="0 1px 5px 2px rgb(255, 251, 0)";
           document.getElementById("lnk").style.visibility="visible";
           document.getElementById("lnk").href="https://xhamster5.desi/";
            }
        }
        function iglow(){
            ib=true;
            if(vb===true || ab===true){

            }
            else{
            var icon=document.getElementById("imgcon");
            icon.style.backgroundColor="white";
            icon.style.boxShadow="0 0 5px 2px  rgb(20, 247, 255)";
            var anm=document.getElementById("simg");
            var pos=0;
            var i=setInterval(frm,100);
            function frm(){
                if(pos===12){
                    clearInterval(i);
                }
                else{
                     pos=pos+1;
                     anm.style.height=`${pos}vh`;
                }
            }
            document.getElementById("cntr").style.borderColor="rgb(17, 247, 255)";
            //document.getElementById("cntr").style.boxShadow="0 1px 5px 2px rgb(89, 0, 255)";
            document.getElementById("lnk").style.visibility="visible";
            document.getElementById("lnk").href="imageCompress.php";
            } 
        }
        function aglow(){
            ab=true;
            if(ib===true || vb===true){

            }
            else{
            var acon=document.getElementById("audcon");
            acon.style.backgroundColor="white";
            acon.style.boxShadow="0 0 5px 2px rgb(20, 247, 255)"; 
            var anm=document.getElementById("saud");
            var pos=0;
            var i=setInterval(frm,100);
            function frm(){
                if(pos===12){
                    clearInterval(i);
                }
                else{
                     pos=pos+1;
                     anm.style.height=`${pos}vh`;
                }
            }
            document.getElementById("cntr").style.borderColor="rgb(17, 247, 255)";
            //document.getElementById("cntr").style.boxShadow="0 1px 5px 2px rgb(255, 0, 234)";
            document.getElementById("lnk").style.visibility="visible";
            document.getElementById("lnk").href="https://xhamster5.desi/";
            }
        }
        
    </script>
</body>
</html>




   