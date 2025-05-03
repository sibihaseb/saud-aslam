<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }

    .contact-container {
      max-width: 400px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #007BFF;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <div class="contact-container">
    <h2>Contact Us</h2>
    <p>Your thoughts matter to us! Share them using the form below.</p>
    @if(session('success'))
    <div id="successMessage" style="background-color: #d1e7dd; color: #0f5132; border: 1px solid #badbcc; padding: 12px 15px; border-radius: 6px; margin-bottom: 20px;">
      <strong>Success!</strong> {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('contact.store') }}" method="POST">
      @csrf
      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" required>
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" required>
      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="4" required></textarea>
      <button type="submit" class="submit mt-2">Send Message</button>
    </form>
  </div>
  <script>
    // Hide success message after 5 seconds (5000 ms)
    setTimeout(function() {
      const message = document.getElementById('successMessage');
      if (message) {
        message.style.transition = 'opacity 0.5s ease-out';
        message.style.opacity = 0;
        setTimeout(() => message.remove(), 500); // Remove from DOM after fade out
      }
    }, 5000);
  </script>
</body>

</html>