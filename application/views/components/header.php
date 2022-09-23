<html>

<head>
    <title>Nutriology Pie</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="shotcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<script>
function toogle() {
    var x = document.getElementById("profile_drop_down");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<style>
* {

    margin: 0;
    padding: 0;
}
</style>

<body>
    <nav class="bg-[#f8fafc]">
        <div class="mx-auto max-w-9xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>
                <!-- Left (Logo && navi) -->
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center text-3xl tracking-wider pl-5"><a class="pr-2" href="#">

                            <img class="hidden lg:block h-8 w-auto"
                                src="<?php echo base_url(); ?>assets/images/logo.png" alt="Workflow">
                        </a>

                        <a type="button"
                            class="font-[1000] text-[#2c8f5a] hover:no-underline hover:text-[#2c8f5a]">Nutriology</a>
                        <a type="button"
                            class="text-[#69C761] pl-2 font-[1000] hover:no-underline hover:text-[#69C761]">Pie</a>
                    </div>
                    <!-- navi -->
                    <div class="hidden sm:ml-6 sm:block my-auto">
                        <div class="flex space-x-4 ml-10 text-2xl  font-medium">
                            <a href="#"
                                class="text-[#C6643D]  underline underline-offset-4 hover:text-[#C6643D] hover:no-underline px-3 py-2 rounded-md "
                                aria-current="page">Dashboard</a>
                            <a href="#"
                                class="text-[#5C5C5C]  hover:bg-[#2c8f5a] hover:no-underline hover:text-white px-3 py-2 rounded-md ">Team</a>

                            <a href="#"
                                class="text-[#5C5C5C]  hover:bg-[#2c8f5a]  hover:no-underline hover:text-white px-3 py-2 rounded-md ">Projects</a>

                            <a href="#"
                                class="text-[#5C5C5C]  hover:bg-[#2c8f5a]  hover:no-underline hover:text-white px-3 py-2 rounded-md ">Calendar</a>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:block my-auto">
                        <input class="form-control m-auto w-96" id="nav-search-bar" type="search" placeholder="Search"
                            aria-label="Search" name="searchtext">
                    </div>

                </div>

                <!-- Right (messaging && profile)-->
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Messaging -->
                    <button type="button"
                        class="rounded-full bg-[#3b82f6] p-1 text-[#dbeafe] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>

                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="flex rounded-full bg-gray-800 text-sm outline-none ring-2 ring-white ring-offset-2 ring-offset-gray-800 focus:outline-none focus:ring focus:ring-violet-300"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="toogle()">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                        <div id="profile_drop_down" style="display:none"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white text-base py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="#" class="block px-4 py-2  text-gray-700 hover:bg-gray-100 hover:no-underline"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2  text-gray-700 hover:bg-gray-100 hover:no-underline"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2  text-gray-700 hover:bg-gray-100 hover:no-underline"
                                role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#"
                    class="text-[#C6643D] underline underline-offset-4 hover:text-[#C6643D] hover:no-underline block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Dashboard</a>

                <a href="#"
                    class="text-[#5C5C5C] hover:bg-[#2c8f5a] hover:no-underline hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                <a href="#"
                    class="text-[#5C5C5C] hover:bg-[#2c8f5a] hover:no-underline hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                <a href="#"
                    class="text-[#5C5C5C] hover:bg-[#2c8f5a] hover:no-underline hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>
    <div class="content">