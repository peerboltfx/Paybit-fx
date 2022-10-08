<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaybitFx</title>
    <link href="{{ asset('css/apps.css') }}" rel="stylesheet">

</head>
<style>
   .mail-container{
       width:90%;
       box-shadow:0px 0px 7px grey;
   } 
     h1{
         margin-bottom:1rem;
         text-align:center;
     }
     .mail-content{
         width:90%;
     }
     h6{
         float:right;
     }
     .table-2{
    width: 100%;
    background: #e0e0e0;
    display: block;
    border-radius:10px;
    box-shadow: 0px 0px 3px rgb(70, 70, 70);
    margin-top: 0.3rem;
    overflow: hidden;
}
.tr-2{
    background-color:   #fcf9f9;
    display: flex;
    border-bottom: 0.1rem solid #bbbbbb;
}
.table-id{
    background-color:   #bebebe;
    width: 50%;
    text-align: center;
    padding: 0.5rem;
}
.table-id2{
    background-color:   #dfdddd;
    width: 50%;
    text-align: center;
    padding: 0.5rem;
}
</style>
<body>
    <div class='mail-container' style='width:80%,border:1px solid ;border'>
        <h1 style='text-align:center'>{{($details['title'])}}</h1>
        <div class='mail-content'>
        <p>Hello {{  ($details['name'])}},</p>
        <p>{{($details['body'])}}</p>
        </div>
        <div class="mt-4"><x-label for="Wallet_addr" :value="__('Charge')" />
            <div class="table-2">
                <div class='tr-2'>
                    <div class="table-id">Investment Plan</div>
                    <div class="table-content">{{($details['plan'])}}</div>

                </div>
                <div class='tr-2'>
                    <div class="table-id2">Investment Amount</div>
                    <div class="table-content">{{($details['Amount'])}}{{($details['currency'])}}</div>

                </div>                
                
                <div class='tr-2'>
                    <div class="table-id">Investment Status</div>
                    <div class="table-content">Approved</div>

                </div>
               
</div>
      
        <h6>Thank You, <br>{{($details['time'])}}</h6>
    </div>
    <div  style='padding-top: 1rem;padding-bottom: 0.5rem;text-align: center;'>
            <div class="row copying">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="/">PaybitFx</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
       
    </div>
</body>
</html>
