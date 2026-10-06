<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>

       {{ Request::segment(count(Request::segments())) ? ucfirst(str_replace('-', ' ', Request::segment(count(Request::segments())))) : 'Home' }} | Government News - Sharing Good News With Everyone 

    </title>

     <link rel="icon" href="/govivon.ico" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5; /* Light gray background */
        }
        .container-main {
            max-width: 1280px; /* Max width for content */
        }
        /* Custom scrollbar for consistency */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .space-y-2 a {
            background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1));
            color:white;text-align: center;border-radius: 5px;
            height:30px;padding:3px;
        }

     
    </style>
</head>








     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Attach keypress event listener to the input field using jQuery
    $('#find_news').on('keypress', function(event) {
        if (event.key === 'Enter') {
            let txt = $(this).val().trim();
            if (txt !== "") {
                window.location = "/find_news/" + encodeURIComponent(txt);
            } else {
                alert("Enter Search phrase.");
            }
        }
    });
});
</script>


    <!-- Top Navigation Bar -->

    <style>
        .menu_hover:hover{
            background-color: #399bd6;
        }

       .grid img {
        transition: transform 0.5s ease-in-out;
        }

       .grid img:hover {
        transform: scale(1.1);
        }

    </style>


     </nav>
    
    
 @include('partials.top')    







 <div class="flex items-center justify-between mx-auto container-main" style="inline-size:100%!important">

    <div class="flex items-center space-x-2"  style="inline-size:100%!important;margin-left:15px;margin-right:15px;">
    


        <div class="container my-5" style=";inline-size:920px!important;background-color:white;inline-size:100%!important;padding:20px;border-radius:10px;">

    <div class="row">


    {{-- <h5 style="color:#009366;font-size:25px; padding:0; margin:0 0 30px 0;">Advertise on the Government Online<sup>®</sup> Platform and Publication 2025 - 2026</h5> --}}

<div style="clear:both; margin-bottom:20px;"></div>

<div style="inline-size:100%!important; float:left;">


<div style="width:36%; float:left; margin-right:1%;margin-top:30px;">
<a style="text-decoration:none;" href="#" download="">


  <div style="background-color:#00539f; color:white; width:100%; border:medium solid #002a51; padding:10px;padding-top:50px; border-bottom:none; font-size:17px; border-radius:8px 8px 0 0; text-align:center;"> Download Advertising Form</div>


  <img src="https://govnews.co.za/govtoday.jpg" style="border:thin solid silver; padding:15px; width:100%; border-radius:0 0 8px 8px;padding-top:50px;height:640px;">

</a>
   
</div>


<div style="width:63%; float:left;">
{{-- <iframe style="width:100%; height:430px; border-radius:12px;" src="https://www.youtube.com/embed/JvoucKwiRJM" frameborder="0" allowfullscreen=""></iframe> --}}
{{-- https://gettravel.com/wp-content/uploads/2018/04/Video-Placeholder.jpg 

https://i.ytimg.com/vi/OCWj5xgu5Ng/maxresdefault.jpg
--}}

{{-- <img src="https://gettravel.com/wp-content/uploads/2018/04/Video-Placeholder.jpg " style="width:100%; height:550px; border-radius:12px;border:solid 1px silver"/> --}}



<div class="cf-isolated-wrapper">
    <style>
        /* Scoped Container Styles - Full Width */
        .cf-isolated-wrapper {
            --cf-bg-body: #f8fafc;
            --cf-bg-card: #ffffff;
            --cf-text-primary: #0f172a;
            --cf-text-secondary: #64748b;
            --cf-text-label: #334155;
            --cf-border-color: #cbd5e1;
            --cf-primary-color: #2563eb;
            --cf-primary-hover: #1d4ed8;
            --cf-disabled-color: #94a3b8;
            --cf-font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;

            box-sizing: border-box;
            font-family: var(--cf-font-family);
            /* background-color: var(--cf-bg-body); */
            padding: 2rem 1.5rem;
            width: 100%; /* Spans full width of container */
        }

        .cf-isolated-wrapper * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: inherit;
        }

        /* Full-Width Card Box */
        .cf-isolated-wrapper .cf-card {
            background: var(--cf-bg-card);
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            padding: 2.5rem;
            width: 100%; /* Spans full width */
            border: 1px solid #e2e8f0;
        }

        /* Scoped Header */
        .cf-isolated-wrapper .cf-header {
            margin-bottom: 2rem;
            text-align: left;
        }

        .cf-isolated-wrapper .cf-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--cf-text-primary);
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .cf-isolated-wrapper .cf-header p {
            font-size: 0.95rem;
            color: var(--cf-text-secondary);
            line-height: 1.5;
        }

        /* Form Controls */
        .cf-isolated-wrapper .cf-group {
            margin-bottom: 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 0.375rem;
            text-align: left;
        }

        .cf-isolated-wrapper .cf-group label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--cf-text-label);
        }

        .cf-isolated-wrapper .cf-group input,
        .cf-isolated-wrapper .cf-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--cf-border-color);
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--cf-text-primary);
            background-color: var(--cf-bg-body);
            transition: all 0.2s ease-in-out;
        }

        .cf-isolated-wrapper .cf-group input:focus,
        .cf-isolated-wrapper .cf-group textarea:focus {
            outline: none;
            border-color: var(--cf-primary-color);
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .cf-isolated-wrapper .cf-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Human Checkbox Group */
        .cf-isolated-wrapper .cf-checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.625rem;
            margin-bottom: 1.5rem;
            user-select: none;
        }

        .cf-isolated-wrapper .cf-checkbox-group input[type="checkbox"] {
            width: 1.125rem;
            height: 1.125rem;
            accent-color: var(--cf-primary-color);
            cursor: pointer;
        }

        .cf-isolated-wrapper .cf-checkbox-group label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--cf-text-label);
            cursor: pointer;
        }

        /* Button States */
        .cf-isolated-wrapper .cf-submit-btn {
            width: 100%;
            padding: 0.875rem 1.5rem;
            background-color: var(--cf-primary-color);
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .cf-isolated-wrapper .cf-submit-btn:hover:not(:disabled) {
            background-color: var(--cf-primary-hover);
        }

        .cf-isolated-wrapper .cf-submit-btn:disabled {
            background-color: var(--cf-disabled-color);
            cursor: not-allowed;
            opacity: 0.7;
        }
    </style>

    <div class="cf-card">
        <div class="cf-header">
            <h2>Get in Touch</h2>
            <p>Have questions or feedback? Fill out the form below and we will get back to you shortly.</p>
        </div>

        <form action="#" method="POST">
            @csrf
            <div class="cf-group">
                <label for="cf-name">Full Name</label>
                <input type="text" id="cf-name" name="name" placeholder="John Doe" required>
            </div>

            <div class="cf-group">
                <label for="cf-email">Email Address</label>
                <input type="email" id="cf-email" name="email" placeholder="john@example.com" required>
            </div>

            <div class="cf-group">
                <label for="cf-telephone">Telephone Number</label>
                <input type="tel" id="cf-telephone" name="telephone" placeholder="+27 82 123 4567">
            </div>

            <div class="cf-group">
                <label for="cf-message">Message</label>
                <textarea id="cf-message" name="message" placeholder="Type your message here..." required></textarea>
            </div>

            <!-- "I'm Human" Checkbox -->
            <div class="cf-checkbox-group">
                <input type="checkbox" id="cf-human" onchange="document.getElementById('cf-submit').disabled = !this.checked">
                <label for="cf-human">I'm human</label>
            </div>

            <!-- Initially Disabled Submit Button -->
            <button type="submit" id="cf-submit" name="send_form" class="cf-submit-btn" disabled>Send Message</button>
        </form>



<?php
// Prevent direct access via GET requests
if (isset($_POST['send_form'])) {





// 1. Sanitize input fields to prevent injection attacks
$name      = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
$message   = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

// 2. Simple server-side validation
if (!$name || !$email || !$message) {
    die("Please fill in all required fields with valid details.");
}

// 3. Recipient and Email Details
$to          = "yes@govnews.co.za";
$subject     = "New Website Inquiry from: " . $name;
$reply_to    = $email;

// 4. Construct HTML Email Body
$htmlMessage = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f8fafc; color: #1e293b; padding: 20px; }
        .container { background-color: #ffffff; border-radius: 8px; padding: 25px; border: 1px solid #e2e8f0; max-width: 600px; margin: 0 auto; }
        h2 { color: #2563eb; margin-top: 0; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #475569; font-size: 0.9rem; }
        .value { background: #f1f5f9; padding: 10px; border-radius: 6px; margin-top: 4px; word-break: break-word; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>New Contact Form Submission</h2>
        
        <div class='field'>
            <div class='label'>Sender Name:</div>
            <div class='value'>" . htmlspecialchars($name) . "</div>
        </div>

        <div class='field'>
            <div class='label'>Email Address:</div>
            <div class='value'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></div>
        </div>

        <div class='field'>
            <div class='label'>Telephone Number:</div>
            <div class='value'>" . htmlspecialchars($telephone ?: 'Not provided') . "</div>
        </div>

        <div class='field'>
            <div class='label'>Message:</div>
            <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
        </div>
    </div>
</body>
</html>
";

// 5. Mandatory Headers for HTML Email
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=UTF-8";
$headers[] = "From: Website Contact Form <noreply@" . $_SERVER['SERVER_NAME'] . ">";
$headers[] = "Reply-To: {$name} <{$reply_to}>";
$headers[] = "X-Mailer: PHP/" . phpversion();

// 6. Send Email and Respond
if (mail($to, $subject, $htmlMessage, implode("\r\n", $headers))) {
    echo "<p style='color: green; font-weight: bold;'>Thank you! Your message has been sent successfully.</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>Sorry, message delivery failed. Please try again later.</p>";
}


}
?>        






    </div>
</div>



</div>

</div>

</div>




<div style="clear:both; margin-bottom:20px;"></div>

   {{-- <div class="row">
<div style="width:100%; float:left;">




<div style="width:48.5%; float:left;  margin-right:1.5%;">




<a style="text-decoration:none;" href="https://government.co.za/Government%20Directory%20Media%20Kit%202025.pdf" download="">

  <div style="background-color:#f7af23; color:black; width:100%; border:medium solid #b4801b; padding:10px; font-size:17px; border-radius:8px 8px 0 0; text-align:center;"><i class="fa-sharp fa-regular fa-download" aria-hidden="true"></i> Download Mediakit</div>
</a>
<iframe style="width:100%; height:405px; border-radius:0 0 8px 8px;" src="https://government.co.za/Government%20Directory%20Media%20Kit%202025.pdf"></iframe>


</div>



<div style="width:48.5%; margin-left:1.5%; float:left;">
<a traget="_blank" href="https://government.co.za/digitalcopy/" download="">


  <div style="background-color:#007449; color:white; width:100%; border:medium solid #005839; padding:10px; font-size:17px; border-radius:8px 8px 0 0; text-align:center;"><i class="fa-sharp fa-regular fa-download" aria-hidden="true"></i> View Publication (Fullscreen)</div>




   

</a>
 <iframe type="text/html" scrolling="no" frameborder="0" allowfullscreen="allowfullscreen" src="https://government.co.za/digitalcopy/" style="width: 100%; height: 405px; border-radius:0 0 8px 8px;" title="Digital copy of government documents"></iframe>

</div>



</div>






</div> --}}



<style>
   
   .box {
    
      margin-bottom: 20px;
      margin-top: 20px;
    }
    .container #row {
        display: block;
      
    }


    .flags a {
        font-size: 11px;
        margin: 15px;
    }

    .flags {
        margin-left: 28%;
    }

    .flags a p {}

    .flag {
        width: 45px;
        height: 25px;
    }

    @media screen and (max-width: 768px) {
        .flags {
            margin-left: 1%;
        }



        .f-h5 {}

    }
    .ad{
      font-size:10px;
      text-align:center;
      
    }
    .od{
     margin-left:9.5%;
    }
    @media screen and (max-width: 500px) {
    .od{
      margin-left:8%;
    }
  }

</style>


<style>
   


    .flag {
        width: 60px;
        height: 35px;
    }
.fl{
  margin: 7px;
}

.led{
  padding-top:20px;
  
  height:auto;
  width:87%;
}
#phone{
  width:36%;
  height:auto;
}
@media screen and (max-width: 768px) {
  .fl{
    margin: 3px;
  }

  .flag {
        width: 50px;
        height: 25px;
    }
    .fi{
      font-size: 12px;
    }
    .led{
      width:40%;
    }
    #phone{
  width:25%;
  height:auto;
}
}
</style>

      </div>

        

    </div>

</div>   





 @include('partials.bottom')



