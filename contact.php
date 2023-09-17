
<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<style>
body {
    .contact{
    background: #111;
    color: #fff;
}
.contact .title::after{
    content: "get in touch";
    background: #111;
}
.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.contact .contact-content .left p{
    text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: crimson;
}
.contact .contact-content .info .head{
    font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #333;
}
.contact .right form .fields{
    display: flex;
}
.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
}
.contact .right form .name{
    margin-right: 10px;
}
.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 100%;
    border: 2px solid crimson;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus{
    border-color: #b3b3b3;
}
.contact .right form .textarea textarea{
  padding-top: 10px;
  resize: none;
}
.contact .right form .button-area{
  display: flex;
  align-items: center;
}
.right form .button-area button{
  color: #fff;
  display: block;
  width: 160px!important;
  height: 45px;
  outline: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  cursor: pointer;
  flex-wrap: nowrap;
  background: crimson;
  border: 2px solid crimson;
  transition: all 0.3s ease;
}
.right form .button-area button:hover{
  color: crimson;
  background: none;
}

.bt {
  border: none;
  user-select: none;
  font-size: 18px;
  color: white;
  text-align: center;
  background-color: crimson;
  box-shadow: crimson; 2px 2px 10px 1px;
  border-radius: 12px;
  height: 60px;
  line-height: 60px;
  width: 155px;
  transition: all 0.2s ease;
  position: relative;
}

.msg {
  height: 0;
  width: 0;
  border-radius: 2px;
  position: absolute;
  left: 15%;
  top: 25%;
}

.bt:active {
  transition: all 0.001s ease;
  background-color: crimson;
  box-shadow: #97989a 0 0 0 0;
  transform: translateX(1px) translateY(1px);
}

.bt:hover .msg {
  animation: msgRun 2s forwards;
}

@keyframes msgRun {
  0% {
    border-top: #d6d6d9 0 solid;
    border-bottom: #f2f2f5 0 solid;
    border-left: #f2f2f5 0 solid;
    border-right: #f2f2f5 0 solid;
  }

  20% {
    border-top: #d6d6d9 14px solid;
    border-bottom: #f2f2f5 14px solid;
    border-left: #f2f2f5 20px solid;
    border-right: #f2f2f5 20px solid;
  }

  25% {
    border-top: #d6d6d9 12px solid;
    border-bottom: #f2f2f5 12px solid;
    border-left: #f2f2f5 18px solid;
    border-right: #f2f2f5 18px solid;
  }

  80% {
    border-top: transparent 12px solid;
    border-bottom: transparent 12px solid;
    border-left: transparent 18px solid;
    border-right: transparent 18px solid;
  }

  100% {
    transform: translateX(150px);
    border-top: transparent 12px solid;
    border-bottom: transparent 12px solid;
    border-left: transparent 18px solid;
    border-right: transparent 18px solid;
  }
}
	</style>
</head>
<body>
	
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text"></div>
                    
                    
                        
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="https://formsubmit.co/tishu.r.9999@gmail.com" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        
                        <button class="bt" id="bt">
                              <span class="msg" id="msg"></span>SEND
                         </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
</body>
</html>