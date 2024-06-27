<style>
    /*footer*/
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}

.footer{
    background-color:#2c3e50 ;
    color: white;
    position: relative;
    height: 100%;
    clear: both;
    
}



.footerecontainer{
    padding:   20px;
    
}

#socialIcon{
    display: flex;   
    justify-content: flex-end;
    align-content: right;
}

#socialIcon a{
    text-decoration: none;
    padding: 10px;
    background-color: white;
    margin: 10px;
    border-radius: 50px;
}
/*icons get black colour when mouse poiter get close to it*/
#socialIcon a:hover{
    background-color: black;
    transition:0.5s ;
}
#socialIcon a:hover i{
    color: white;
    transition: 0.5s;
}

.h3{
    color:white;
    text-align: right;
    font-size: 30px;
}
.img2{
    margin-top: auto;
    margin-bottom: auto;
    flex-direction:column ;
    height: auto;
    width: auto;
}
/*to display in mobile devices*/

@media(max-width:700px){
    #socialIcon {
        flex-direction:column;
    }

}

.contactus{
    text-decoration: solid;
    font-weight: bold;
   text-align:center;
}
    </style>
<footer class="footer">
    <div class="img2">
        <img src="https://t3.ftcdn.net/jpg/05/08/62/98/360_F_508629841_I8cPtYiDc2xmJx0updejTRu0s1oRLRJ0.jpg" alt="loog" width="250px" height="250px">

    </div>

    <div class="footerecontainer">
        <h3 class="h3" >Follow Us On &nbsp;&nbsp;&nbsp;&nbsp; </h3><br>
        <div id="socialIcon">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i> </a>
            <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i> </a>
            <a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram"></i> </a>
            <a href="https://support.google.com/answer/2451065?hl=en"><i class="fa-brands fa-google-plus"></i> </a>
         
        </div>

        <div class="contactus">
            <i class="fa-solid fa-location-dot"> </i>  34,new kandy road ,colombo<br><br>
            <i class="fa-solid fa-envelope"> </i>  myc123@company.com<br><br>
            <i class="fa-solid fa-phone"> </i>  0112729780<br><br>
            
        </div>
        <p align ="center">copyright &copy;2023; Design by <span>MYC company</span></p>


</div>
</footer>
</body>
</html>