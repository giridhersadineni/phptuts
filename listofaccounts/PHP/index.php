<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of accounts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title has-text-centered">
       Account Information
      </h1>
      <form action="connect.php" method="post">
      
      <div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Account Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Enter Your Account Name" name="accname">
        <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
    </span>
      </p>
    </div>
  </div>
</div>
<!-- 2nd input  -->
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Balance</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Enter Amount" name="balance">
        <span class="icon is-small is-left">
        <i class="fas fa-rupee-sign"></i>    </span>
      </p>
    </div>
  </div>
</div>
<!-- 3rd inputtext -->
<div class="field is-horizontal">
  <div class="field-label is-normal">
  <label class="label">Mobile No.</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Enter Your Mobile Number" name="mobile">
        <span class="icon is-small is-left">
        <i class="fas fa-phone"></i>    </span>
      </p>
    </div>
  </div>
</div>

      <div class="field is-horizontal">
  <div class="field-label is-normal">
  <label class="label">Account Categories</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <div class="select  is-pulled-left has-text-left">
      <select name="accategories" id="select">
        <option >select here</option>
        <option value="AssestsAccount">Assests Account</option>
        <option value="ExpensesAccount">Expenses Account</option>
        <option value="Revenue">Revenue or Income</option>
        <option value="LiabilitiesAccount">Liabilities Account</option>
        <option value="EquityAccount">Equity Account</option>
     </select>  
     </div>
     </p>
    </div>
  </div> 
 </div>
 <br>
 <br>
 <div class="field is-horizontal">
 <div class="field-label is-normal"> 
<div class="field is-grouped is-pulled-right">
<div class="control">
 <input type="reset" value="Clear" class="button is-danger">
  </div>
  <div class="control">
  <input type="submit" value="Submit" class="button is-link">  </div>
</div>
</div>
</div>
  </div> 
  </section>
 
  </form>
    </div>
  </body>
</html> 