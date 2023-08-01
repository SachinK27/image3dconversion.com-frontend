<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>codeTest</title>
</head>
<body>
<form name="contact_form" action="form.php" method="post">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Name <small>*</small></label>
        <input name="one" class="form-control" type="text" value="Sac" placeholder="Enter Name" required>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Email <small>*</small></label>
        <input name="two" class="form-control required email" type="email" value="sachin@sachin.com" placeholder="Enter Email" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Subject <small>*</small></label>
        <input name="three" class="form-control required" type="text" value="testing inbound webhook" placeholder="Enter Subject" required>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Phone (Eg +919854123456)</label>
        <input name="four" class="form-control" type="text" placeholder="Enter Phone (with country code)" value="+919854123456" required>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea name="five" class="form-control required" rows="5" placeholder="Enter Message" required>test success?</textarea>
  </div>
  <div class="form-group">
    <input name="form_botcheck" class="form-control" type="hidden" value="" />
    <button type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
    <input type="hidden" id="token" name="token">
  </div>
</form>
<script id="bx24_form_button" data-skip-moving="true">
  (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
    (w[b].forms=w[b].forms||[]).push(arguments[0])};
    if(w[b]['forms']) return;
    var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
  })(window,document,'https://b24-xjeoxm.bitrix24.in/bitrix/js/crm/form_loader.js','b24form');

  b24form({"id":"8","lang":"en","sec":"c2w93x","type":"button","click":""});
</script>
</body>
</html>
