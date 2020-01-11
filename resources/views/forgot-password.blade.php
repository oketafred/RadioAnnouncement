<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Radio | Forgot Password Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/main.css">

    </head>
    <body class="antialiased font-sans bg-gray-200">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white shadow-md rounded lg:w-1/4 px-8 pt-6 pb-8 mb-4 flex flex-col">
              <div class="flex justify-center mb-8">
                <img class="w-40" src="images/logo.png" alt="Company Name">
              </div>
              <form action="">
                <div class="mb-4">
                  <label class="block text-grey-darker text-sm font-bold mb-2" for="email-address">
                    Enter your email address and we will send you a password reset link.
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email-address" type="email" placeholder="Email Address">
                </div>
                <div class="flex items-center justify-between">
                  <button class="flex-1 bg-blue-800 hover:bg-blue-900 rounded text-white font-bold py-2 px-4 rounded" type="submit">
                    Send Password Reset Email
                  </button>
                </div>
              </form>
              <div class="flex justify-center mt-4">
                <span class="text-center">Already have an account? 
                <a class="font-bold text-blue-800 hover:text-blue-900" href="{{ route("login") }}">
                  Login
                </a></span>
              </div>
          </div>
        </div>
    </body>
</html>
