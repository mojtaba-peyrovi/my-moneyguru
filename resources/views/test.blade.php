<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

  </head>
  <style media="screen">
    @import url(http://fonts-googleapis.com/css?family=Helvetica);
    *{margin:0; padding:0;}
    html{
      height:100%;
      background: url("http://thecodeplayer.com/uploads/media/gs.png");
      background:
      linear-gradient(rgba(196,102,0,0.2),rgba(155,89,182,0.2)),
      url("http://thecodeplayer.com/uploads/media/gs.png");
    }
    body{
      font-family: Helvetica;
    }
    #msform{
      width: 400px;
      margin: 500px auto;
      text-align: center;
      position:relative;
    }
    #msform fieldset{
      background: white;
      border: 0 none;
      border-radius: 3px;
      box-shadow: 0 0 15px 1px rgba(0,0,0,0.4);
      padding:20px 30px;
      width: 80%;
      box-sizing: border-box;
      width: 80%;
      margin: 0 10%;
      position: absolute;
      }
      #msform fieldset:not(:first-of-type)  {
        display: none;
      }
      #msform input, #msform textarea{
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: Helvetica;
        color: #2c3e50;
        font-size: 13px;
      }
    .fs-title{
      font-size: 15px;
      text-transform: uppercase;
      color: #2c3e50;
      margin-bottom: 10px;
    }
    .fs-subtitle{
      font-weight: normal;
      font-size: 13px;
      color: #666;
      margin-bottom: 20px;
    }
    #progressbar{
      margin-bottom: 20px;
      overflow: hidden;
      counter-reset: step;
    }
    #progressbar li{
      list-style-type: none;
      color:white;
      text-transform: uppercase;
      font-size: 9px;
      width: 33.33%;
      float:left;
      position: relative;
    }
    #progressbar li:before{
      content: counter(step);
      counter-increment: step;
      width: 20px;
      display: block;
      font-size: 10px;
      color: #333;
      background: white;
      border-radius: 3px;
      margin: 0 auto 5px auto;

    }
    #progressbar li:after{
    content:'';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top:6px;
    z-index: -1;
    }
    #progressbar li:first-child:after{
      content: none;
    }
    #progressbar li.active:before,  #progressbar li.active:after{
      background: #27ae60;
      color:white;
    }
    #msform .action-button{
      width: 100%;
      background:#27ae60;
      font-weight: blod;
      color: white;
      border: 0 none;
      border-radius: 1px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
    }
    #msform .action-button:hover, #msform .action-button:focus{
      box-shadow: 0 0 0 2px white, 0 0 0 3px #27ae60;
    }
  </style>
  <body>
      <form id="msform">
        <!-- progressbar-->
      <ul id="progressbar">
        <li class="active">Account Setup</li>
        <li>Social Profiles</li>
        <li>Personal Details</li>
      </ul>
      <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Create Your Account</h2>
          <h3 class="fs-subtitle">This is step 1</h3>
          <input type="text" name="email" placeholder="email">
          <input type="password" name="password" placeholder="password">
          <input type="password" name="cpassword" placeholder="confirm password">
          <input type="button" name="next" value="next" class="next action-button">
        </fieldset>

        <fieldset>
          <h2 class="fs-title">Social Products</h2>
          <h3 class="fs-subtitle">Your Presence on Social Media</h3>
          <input type="text" name="twitter" placeholder="twitter">
          <input type="text" name="facebook" placeholder="facebook">
          <input type="text" name="gplus" placeholder="Google Plus">
          <input type="button" name="next" class="next action-button" value="next">
          <input type="button" name="previous" class="previous action-button" value="previous">
        </fieldset>

        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">We will never sell it</h3>
          <input type="text" name="fname" placeholder="first name">
          <input type="text" name="lname" placeholder="last name">
          <input type="text" name="phone" placeholder="phone">
          <textarea name="address" placeholder="address"></textarea>
          <input type="button" name="previous" class="previous action-button" value="previous">
          <input type="submit" name="submit" value="submit" class="submit action-button">
        </fieldset>
      </form>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var current_fs,next_fs,previous_fs; // fieldsets/
      var left,opacity,scale; // fieldset properties which will be animated.
      $(".next").click(function(){
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          //activate next step on progress bar using the index of next_fs//
          $('#progressbar li').eq($("fieldset").index(next_fs)).addClass('active');
          next_fs.show(); // show the next fieldset
          current_fs.animate({opacity:0},{
            step: function(now,mx){
              //as the opacity of current_fs reduces to zero- stored in "now"//
              //1-scale current_fs down to 80%//
                scale=1-(1-now)*0.2;
              //2-bring next_fs from the right (50%)//
                left=(now*50)+"%";
              //3-increase opacity of next_fs to 1 as it moves in//
                opacity = 1-now;
                current_fs.css({'transform':'scale('+scale+')'});
                next_fs.css({'left':left,'opacity':opacity});

            },
            duration:800,
            complete: function(){
              current_fs.hide();
            },
            easing:'easeInOutBack'
          });
      });
      $('.previous').click(function(){
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        //de-activate current step on progress bar
        $('#progressbar li').eq($("fieldset").index(current_fs)).removeClass('active');
        previous_fs.show(); // show the previous fieldset
        current_fs.animate({opacity:0},{
          step: function(now,mx){
            //as the opacity of current_fs reduces to zero- stored in "now"//
            //1-scale previous_fs from 80% to 100%
              scale=0.8+(1-now)*0.2;
            //2-take current_fs to the right(50%) from 0%
              left=((1-now)*50)+"%";
            //3-increase opacity of previous_fs to 1 as it moves in//
              opacity = 1-now;
              current_fs.css({'left':left});
              previous_fs.css({'transform':'scale('+scale+')'});
          },
          duration:800,
          complete: function(){
            previous_fs.show();
          },
          easing:'easeInOutBack'
        });
      });
    </script>
  </body>
</html>
