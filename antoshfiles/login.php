<?php


// if(isset($_SESSION['username'])){
//     header('location:dashboard.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Login page</title>
</head>
<style>
    .companyLogo {
        position: fixed;
        display: flex;
        top: 80%;
        left: 80%;
    }
</style>

<body>


    <div class="companyLogo">
        <p class="mr-1 font-bold" style="margin-top:15%"> @Powered by.... &nbsp; </p>
        <img src="./logo/Algo2botsinfotech logo.jpg" alt="" width="80px">
    </div>

    <div class="min-h-screen bg-gray-50 flex flex-wrap justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full ">
            <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Login to your account
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
                Or
                <a href="#"
                    class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Create a new account
                </a>
            </p>
        </div>

        <div class="mt-8 w-[80%] ">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10  w-[200%] justify-center flex-wrap">
                <form method="POST" action="ajax.php">

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Username</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="username" name="username" placeholder="John Doe" type="text" required=""
                                class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div class="mt-6">
                        <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                            Enter Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password_confirmation" name="password" type="password" required=""
                                class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>


                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" name="login"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Log in
                            </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>






</body>

<script src="./js/jquery.min.js"></script>

</html>